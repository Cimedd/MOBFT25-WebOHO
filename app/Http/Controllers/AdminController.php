<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Ormawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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

        $ormawaName = Ormawa::where('id', $ormawaId)->value('name');

        $result = DB::select("SELECT   
                                q.question AS question,
                                COALESCE(ans.correct_answer, '') AS correct_answer,
                                COALESCE(usr_ans.user_answer, '') AS user_answer,  
                                IF(usr_ans.usr_iscorrect = 1, 1, 0) AS is_correct
                                FROM 
                                	questions q
                                	LEFT JOIN (
                                		SELECT qa.answer_text AS correct_answer, qa.is_correct AS is_correct, o.name AS ormawa_name, qa.is_correct as correct, qa.question_id AS q_id FROM question_answers qa
                                		INNER JOIN questions q ON qa.question_id = q.id 
                                		INNER JOIN ormawas o ON o.id = q.ormawa_id
                                		WHERE qa.is_correct = 1 AND o.name = ?
                                	) AS ans ON ans.q_id = q.id 
                                	LEFT JOIN (
                                		SELECT o.name AS ormawa_name, qa.answer_text AS user_answer, qa.question_id AS q_id, qa.is_correct AS usr_iscorrect  FROM answers a
                                		INNER JOIN question_answers qa ON a.answer_id = qa.id
                                		INNER JOIN questions q ON qa.question_id = q.id 
                                		INNER JOIN ormawas o ON o.id = q.ormawa_id
                                		WHERE a.user_id = ? AND o.name = ?
                                	) AS usr_ans ON q.id = usr_ans.q_id
                                	WHERE ans.ormawa_name = ? AND ans.correct = 1;", [$ormawaName, $teamId, $ormawaName, $ormawaName]);

        $count = collect($result)->where('is_correct', 1)->count();
        $questions = collect($result)->pluck('question')->toArray();
        $answersCount = collect($result)->pluck('correct_answer')->count();
        $answers = collect($result)->pluck('correct_answer')->toArray();
        $userAnswers = collect($result)->pluck('user_answer')->toArray();

        Log::info("Admin retrieved results for Ormawa: {$ormawaName}, Team ID: {$teamId}");
        Log::info("Results: ", [
            'count' => $count,
            'answersCount' => $answersCount,
            'questions' => $questions,
            'answers' => $answers,
            'userAnswers' => $userAnswers
        ]);


        if ($count !== 0) {
            $score = 100 * $count / $answersCount; // Calculate score as a percentage
        } else {
            $score = 0;
        }

        $ormawaName = Ormawa::where('id', $ormawaId)->value('name'); // Get only the name
        $teamName = Team::where('id', $teamId)->value('name'); // Get only the name

        if ($ormawaName != null && $teamName != null) {
            return redirect()->route('admin.index')->with(compact('questions', 'answers', 'userAnswers', 'ormawaName', 'teamName', 'count', 'score', 'answersCount'));
        } else {
            return redirect()->back()->with('Not Found', 'Result Not Found!');
        }
        // return redirect()->back()->with(compact('result', 'ormawaName', 'teamName'), 200);

    }
}
