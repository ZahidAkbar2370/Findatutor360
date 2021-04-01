<?php

use Illuminate\Support\Facades\Route;

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



		


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

						//Student Panel
//Dashboard
Route::get('student-dashboard',"Student\StudentController@index");

						//Tutor Panel
//Dashboard
Route::get('tutor-dashboard',"Tutor\TutorController@index");

						//Institute Panel
//Dashboard
Route::get('institute-dashboard',"Institute\InstituteController@index");











//User Visit Links

Route::get('/', function () {
    return view('user_layout/home');
});

Route::get('/student', function () {
    return view('user_layout/student');
});

Route::get('/tutor', function () {
    return view('user_layout/tutor');
});

Route::get('/institution', function () {
    return view('user_layout/institution');
});

Route::get('/sell-book', function () {
    return view('user_layout/sell_books');
});

Route::get('/buy-book', function () {
    return view('user_layout/buy_book');
});