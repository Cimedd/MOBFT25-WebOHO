<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDO;
use Symfony\Component\HttpKernel\HttpCache\ResponseCacheStrategy;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function getQuestion(Request $request){
    //     $code = $request->ormawaCode;
    //     $ormawa = DB::table('ormawas')->where('code', $code)->first();
    //     $hasAnswered = DB::table('users as u')
    //     ->join('answers as a','u.id','=','a.user_id' )
    //     ->join('questions as q', 'q.id', '=', 'a.question_id')
    //     ->where('u.id', Auth::id())
    //     ->where('q.ormawa_id', $ormawa)
    //     ->exists();

    //     if (!$hasAnswered) {
    //         if ($ormawa) {
    //             $question = DB::table('questions')->where('ormawa_id', $ormawa->id)->get();
    //             return view('ormawa', [
    //                 'ormawa' => $ormawa,
    //                 'question'=>$question,
    //             ]);
    //         }
    //     }
    //     return view('scan');
    // }

    public function getQuestion(Request $request)
    {
        $code = $request->ormawaCode;
        $ormawa = DB::table('ormawas')->where('code', $code)->first();

        if ($ormawa) {
            // $hasAnswered = DB::table('users as u')
            //     ->join('answers as a', 'u.id', '=', 'a.user_id')
            //     ->join('questions as q', 'q.id', '=', 'a.question_id')
            //     ->where('u.id', Auth::id())
            //     ->where('q.ormawa_id', $ormawa->id) // Use the id property of $ormawa
            //     ->exists();

            $hasAnswered = DB::table('logs')
                            ->where('user_id', '=', Auth::id())
                            ->where('ormawa_id', '=', $ormawa->id)
                            ->first();
            if (!$hasAnswered) {
                $question = DB::table('questions')->where('ormawa_id', $ormawa->id)->get();
                return view('ormawa', [
                    'ormawa' => $ormawa,
                    'question' => $question
                ]);
            }else{
                return back()->with('completed', 'Thankyou! You Have Redeemed the token 😊');
            }
        }
        return back()->with('wrong', 'Sorry the code is wrong! ❌');

    }


    public function AnswerQuestion(Request $request){
        $answerValue = $request->answer;
        $questionId = $request->question_id;
        DB::table('answers')->insert([
            'question_id'=> $questionId,
            'answer'=>$answerValue,
            'user_id'=>Auth::id()
        ]);
    }

    // public function check(Request $request){
    //     $id = $request->id;
    //     $ormawa = $request->ormawa_id;
    //     $hasAnswered = DB::table('users as u')
    //                     ->join('answers as a','u.id','=','a.user_id' )
    //                     ->join('questions as q', 'q.id', '=', 'a.question_id')
    //                     ->where('u.id', $id)
    //                     ->where('q.ormawa_id', $ormawa)
    //                     ->exists();

    //     if ($hasAnswered) {
    //         return response()->json([true], 200);
    //     }
    //     return response()->json([false], 200);
    // }

    public function insertLog(Request $request){
        $ormawaId = $request->ormawa_id;
        DB::table('logs')->insert([
            'user_id'=>Auth::id(),
            'ormawa_id'=>$ormawaId,
            'description'=>"Completed"  
        ]);
    }
}
