<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TranscriptController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('pages.homepage');
});

//Create
Route::get('/page-1',[TranscriptController::class, 'create']);

//store data
Route::post('/page-4',[TranscriptController::class, 'store']);

 

Route::get('/page-2', function () {
    return view('components.transcripts.page-2');
});


Route::get('/page-3', function () {
    return view('components.transcripts.page-3');
});


Route::get('intern-1', function () {
    return view('components.internships.intern-1');
});


Route::get('intern-2', function () {
    return view('components.internships.intern-2');
});

Route::get('/resit-1', function(){
    return view('components.resits.resit-1');
});

Route::get('/page-4', function(){
    return view('components.transcripts.page-4');
});

Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);