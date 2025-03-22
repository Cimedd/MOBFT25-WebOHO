<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){
        $name = Auth::user()->name;
        $teams = DB::table('users')->where('role', '=', 'team')->get();
        $ormawas = Ormawa::all();
        return view('admin.dashboard', compact('name', 'teams', 'ormawas'));
    }
    
    public function getResult(Request $request)
    {
        $ormawaId = $request->input('ormawa');
        $teamId = $request->input('team');

        $result = DB::table('questions as q')
            ->join('answers as a', 'q.id', '=', 'a.question_id')
            ->select('q.question as question', 'q.answer as correct', 'a.answer as answer')
            ->where('q.ormawa_id', '=', $ormawaId)
            ->where('a.user_id', '=', $teamId)
            ->get(); // Execute the query

        $ormawaName = Ormawa::where('id', $ormawaId)->value('name'); // Get only the name
        $teamName = Team::where('id', $teamId)->value('name'); // Get only the name

        if ($ormawaName != null && $teamName != null) {
            return redirect()->route('admin.index')->with(compact('result', 'ormawaName', 'teamName'));
        }else{
            return redirect()->back()->with('Not Found', 'Result Not Found!');
        }
        // return redirect()->back()->with(compact('result', 'ormawaName', 'teamName'), 200);

    }
}
