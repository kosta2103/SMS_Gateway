<?php

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
    return view('welcome');
})->middleware('guest');

Auth::routes();
Route::get('students/{student}/verify', 'StudentController@verify')->name('students.verify');
Route::get('students/{student}/subjects', 'ListenToController@subjects')->name('students.subjects');
Route::get('students/{student}/passedExams', 'ExamController@passedExams')->name('students.passedExams');
Route::get('students/{student}/reportedExams', 'ExamController@reportedExams')->name('students.reportedExams');
Route::resource('students', 'StudentController');
Route::resource('professors', 'ProfessorController');
Route::get('students/2/send', 'StudentController@send');
Route::post('webhook', 'StudentController@reply');




//Route::get('/home/{role}', 'HomeController@index');









