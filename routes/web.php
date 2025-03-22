<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmawaController;
use App\Models\Question;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>'team', 'prefix'=>'team', 'as'=>'team.'], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::post('/getQuestion', [QuestionController::class, 'getQuestion'])->name('getQuestion');
    
    Route::post('/answer', [QuestionController::class, 'AnswerQuestion'])->name('answerQuestion');
    
    Route::post('/check', [QuestionController::class, 'check'])->name('check');
    
    Route::post('/insert', [QuestionController::class, 'insertLog'])->name('insert.log');
});



Route::group(['middleware'=> 'admin', 'prefix'=>'admin', 'as'=>'admin.'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::post('/result', [AdminController::class, 'getResult'])->name('result');

});