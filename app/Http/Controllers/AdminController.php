<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $name = Auth::user()->name;
        $teams = DB::table('users')->where('role', '=', 'team')->get();
        $ormawas = Ormawa::all();
        return view('admin.dashboard', compact('name', 'teams', 'ormawas'));
    }

    public function getResult(Request $request)
    {
        $ormawaId = $request->input('ormawa');
        $teamId = $request->input('team');

        $result = DB::table('answers as a')
            ->join('question_answers as qa_user', 'a.answer_id', '=', 'qa_user.id')
            ->join('questions as q', 'a.question_id', '=', 'q.id')
            ->join('question_answers as qa_correct', function ($join) {
                $join->on('a.question_id', '=', 'qa_correct.question_id')
                    ->where('qa_correct.is_correct', '=', 1);
            })
            ->select(
                'qa_user.answer_text as user_answer_text',
                'qa_correct.answer_text as correct_answer_text',
                'q.question as question_text'
            )
            ->where('a.user_id', $teamId)
            ->where('q.ormawa_id', $ormawaId)
            ->get();


        $count = $result->count();

        
        $correctCount = DB::table('answers')
            ->join('question_answers', 'answers.answer_id', '=', 'question_answers.id')
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('question_answers.is_correct', 1)
            ->where('answers.user_id', $teamId)
            ->where('questions.ormawa_id', $ormawaId)
            ->count();

        if ($count !== 0) {
            $score = $correctCount / $count * 100;
        } else {
            $score = 0;
        }

        $ormawaName = Ormawa::where('id', $ormawaId)->value('name'); // Get only the name
        $teamName = Team::where('id', $teamId)->value('name'); // Get only the name

        if ($ormawaName != null && $teamName != null) {
            return redirect()->route('admin.index')->with(compact('result', 'ormawaName', 'teamName', 'count', 'correctCount', 'score'));
        } else {
            return redirect()->back()->with('Not Found', 'Result Not Found!');
        }
        // return redirect()->back()->with(compact('result', 'ormawaName', 'teamName'), 200);

    }
}
