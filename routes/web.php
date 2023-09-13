<?php

use App\Models\Admin;
use App\Models\Transcripts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\ResitController;
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

// homePage
Route::get('/',[TranscriptController::class, 'index']);


//////////////////// TRANSCRIPT PAGES //////////////////////

// Creates and stores Transcript Page 1
Route::get('/transcript',[TranscriptController::class, 'create_transcript'])->name('create_page-1')->middleware('auth');
Route::post('/transcript',[TranscriptController::class, 'store_transcript'])->name('store_page-1')->middleware('auth');
// Route::put('/transcript',[TranscriptController::class,'update'])->middleware('auth');


 
// Page 4 / Review Info Page
Route::get('/page-4',[TranscriptController::class, 'create_page_4'])->middleware('auth');
Route::post('/page-4',[TranscriptController::class, 'store_page_4'])->middleware('auth');

//////////////////// END TRANSCRIPT PAGES //////////////////////





// Track page
Route::get('/track',[TranscriptController::class,'create_track'])->middleware('auth');
Route::post('/track',[TranscriptController::class,'store_track'])->middleware('auth');
// Route::delete('/track',[TranscriptController::class,'destroy']);



//////////////////////////// INTERNSHIP PAGE //////////////////////////////////

// Internship Page 1
Route::get('/intern-1',[InternshipController::class,'create_intern_1'])->middleware('auth');
Route::post('/intern-1',[InternshipController::class,'store_intern_1'])->middleware('auth');

// PDF download Page
Route::get('/generate-letter-pdf', [PDFController::class,'create_generateLetterPDF'])->middleware('auth');
Route::post('/generate-letter-pdf', [PDFController::class,'generateLetterPDF'])->name('generate-letter-pdf')->middleware('auth');

//////////////////////////// END INTERNSHIP PAGE //////////////////////////////////





//////////////////////////// RESIT PAGE //////////////////////////////////

Route::get('/resit-1', [ResitController::class, 'create_resit_page'])->middleware('auth');
Route::post('/resit-1', [ResitController::class, 'store_resit_page'])->middleware('auth');

/////////////////////// END RESIT PAGE //////////////////////////////




//////////////////////// UPDATE TRANSCRIPT FORM /////////////////////////////////////
// User Edit Form Page 1
Route::put('/user/edit_page_1',[TranscriptController::class,'store_edit_page_1'])->middleware('auth');
Route::get('/user/edit_page_1',[TranscriptController::class,'create_edit_page_1'])->middleware('auth');


///////////////////////// END EDIT FORM /////////////////////////////////////////////////



//////////////////////// DELETE TRANSCRIPT FORM /////////////////////////////////////
// User Edit Form Page 1
// Route::delete('/user/edit_page_1',[TranscriptController::class,'destroy']);


///////////////////////// END EDIT FORM /////////////////////////////////////////////////




/////////////////// ADMIN AND BACKEND //////////////////
// Admin page
Route::get('/admin/transcripts',[AdminController::class,'create_admin_table'])->middleware('auth');
Route::post('/admin/transcripts',[AdminController::class,'store_admin_table'])->middleware('auth');

Route::delete('admin/transcripts',[AdminController::class,'destroy'])->middleware('auth');

Route::get('/admin/reviewed',[AdminController::class,'create_adminReviewed_table'])->middleware('auth');



Route::get('/admin', [AdminController::class, 'create_adminMain_table'])->middleware('auth');


Route::get('/admin/resit', [ResitController::class, 'adminResit_resit_page'])->middleware('auth');


/////////////////// END ADMIN AND BACKEND //////////////////






////////////////////   LOGIN AND REGISTER PAGES ///////////////////

 //////////////////////// USERS //////////////////////////////////
// show User Login  Page
Route::get('/login', [UserController::class, 'create_login'])->middleware('guest');
Route::post('/login', [UserController::class, 'store_login']);

// show User Register Page
Route::get('/register', [UserController::class, 'create_register']);
Route::post('/register', [UserController::class, 'store_register']);

// show User Logout
Route::get('/logout', [UserController::class, 'create_logout']);
Route::post('/logout', [UserController::class, 'store_logout']);

//////////////////////////// END USERS ///////////////////////////


//////////////////////////// ADMIN ///////////////////////////

// show adminLogin  Page
Route::get('/admin/login', [AdminController::class, 'create_admin_login']);
Route::post('/admin/login', [AdminController::class, 'store_admin_login']);

// show adminRegister Page
Route::get('/admin/register', [AdminController::class, 'create_admin_register']);
Route::post('/admin/register', [AdminController::class, 'store_admin_register']);

// show Admin Logout
Route::get('/admin/logout', [AdminController::class, 'create_logout']);
Route::post('/admin/logout', [AdminController::class, 'store_logout']);

//////////////////////////// END ADMIN ///////////////////////////


////////////////////  END LOGIN AND REGISTER PAGES ///////////////////