<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{

    public function getQuestions(Request $request)
    {
        $request->validate([
            'ormawaCode' => 'required|string|exists:ormawas,code',
            'page'       => 'nullable|integer|min:1',
        ]);

        // Log::info("Received request to get questions with code: ", $request->all());

        $ormawa = DB::table('ormawas')->where('code', $request->ormawaCode)->first();
        $code = $request->ormawaCode;

        $answered = DB::table('logs')->where('user_id', Auth::id())
            ->where('ormawa_id', $ormawa->id)
            ->exists();


        if ($answered) {
            // Log::info("User has already answered questions for this Ormawa.");
            return redirect()->route('team.home')->with('wrong', 'You have already answered the questions for this Ormawa.');
        }

        $joinedTable = DB::table('answers')->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('answers.user_id', Auth::id())
            ->where('questions.ormawa_id', $ormawa->id)
            ->select('answers.question_id')
            ->distinct()
            ->get();

        $countAnswer = $joinedTable->count();
        $expectedPage = $countAnswer + 1;

        $questions = Question::where('ormawa_id', $ormawa->id)
            ->paginate(1);


        if ($questions->count() === 0) {
            return redirect()->route('team.getQuestion', [
                'page' => $expectedPage,
                'ormawaCode' => $request->ormawaCode,
            ]);
        }

        $question = $questions->first();

        $answers = DB::table('question_answers')
            ->where('question_id', $question->id)
            ->get();


        $currentPage = (int) $request->get('page', 1);

        if ($currentPage !== $expectedPage) {
            return redirect()->route('team.getQuestion', [
                'page' => $expectedPage,
                'ormawaCode' => $request->ormawaCode,
            ]);
        }

        if ($expectedPage > $questions->lastPage()) {
            return redirect()->route('team.home')->with('completed', 'You have answered all questions for this Ormawa! ✅');
        }

        return view('ormawa', compact('questions', 'answers', 'ormawa', 'question', 'code'));
    }



    public function AnswerQuestion(Request $request)
    {
        $request->validate([
            'ormawaCode' => 'required|string|exists:ormawas,code',
            'question_id' => 'required|exists:questions,id',
            'answer_id'  => 'required|exists:question_answers,id', // or answers table
            'page'       => 'required|integer|min:1',
        ]);

        $answer_id = $request->answer_id;
        $questionId = $request->question_id;

        $answered = DB::table('answers')
            ->where('user_id', Auth::id())
            ->where('question_id', $questionId)
            ->exists();

        $id = DB::table('ormawas')->where('code', $request->ormawaCode)->first()->id;

        $joinedTable = DB::table('answers')->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('answers.user_id', Auth::id())
            ->where('questions.ormawa_id', $id)
            ->select('answers.question_id')
            ->distinct()
            ->get();

        $countAnswer = $joinedTable->count();

        if ($answered) {
            $expectedPage = $countAnswer + 1;
            return redirect()->route('team.getQuestion', [
                'page' => $expectedPage,
                'ormawaCode' => $request->ormawaCode,
            ])->with('wrong', 'You have already answered this question.');
        }

        DB::table('answers')->insert([
            'question_id' => $questionId,
            'answer_id' => $answer_id,
            'user_id' => Auth::id()
        ]);

        $joinedTable = DB::table('answers')->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('answers.user_id', Auth::id())
            ->where('questions.ormawa_id', $id)
            ->select('answers.question_id')
            ->distinct()
            ->get();

        $countAnswer = $joinedTable->count();

        Log::info("Count of answered questions: $countAnswer");
        $totalQuestions = Question::where('ormawa_id', $id)->count();
        Log::info("Count of total questions: $totalQuestions");

        if ($countAnswer === $totalQuestions) {
            Log::info("User has answered all questions for Ormawa: ", [
                'user_id' => Auth::id(),
                'ormawa_code' => $request->ormawaCode,
                'ormawa_id' => $id
            ]);
            $this->insertLog(Ormawa::where('code', $request->ormawaCode)->first()->id);
            return redirect()->route('team.home')->with('completed', 'Your answer has been submitted successfully! ✅');
        }

        return redirect()->route('team.getQuestion', [
            'page' => $request->page + 1,
            'ormawaCode' => $request->ormawaCode,
        ])->with('success', 'Your answer has been submitted successfully! ✅');
    }

    public function insertLog($ormawaId)
    {
        DB::table('logs')->insert([
            'user_id' => Auth::id(),
            'ormawa_id' => $ormawaId,
            'description' => "Completed"
        ]);
    }
}
