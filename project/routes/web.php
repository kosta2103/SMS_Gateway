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
Route::resource('students', 'StudentController');
Route::resource('professors', 'ProfessorController');
//Route::get('/home/{role}', 'HomeController@index');









