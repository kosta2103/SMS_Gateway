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

Route::resource('students', 'StudentController');
Route::resource('professors', 'ProfessorController');
Route::resource('exam', 'ExamController');

Route::get('students/{student}/send', 'StudentController@send');
Route::get('students/{student}/verify', 'StudentController@verify')->name('students.verify');
Route::post('students/{student}/verifyCaller', 'StudentController@verify_caller')->name('students.verifyCaller');

Route::get('students/{student}/subjects', 'ListenToController@subjects')->name('students.subjects');

Route::get('students/{student}/passedExams', 'ExamController@passedExams')->name('students.passedExams');
Route::get('students/{student}/reportedExams', 'ExamController@reportedExams')->name('students.reportedExams');

Route::get('students/{student}/calendar', 'SidebarController@calendar')->name('calendar');
Route::get('professors/{professor}/subjects', 'ProfessorController@listOfSubjects')->name('professors.subjects');
Route::get('professors/{professor}/{subject}/students', 'ProfessorController@listOfStudentsOfSpecificSubject')->name('professors.listOfStudents');















