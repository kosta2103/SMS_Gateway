<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\ListensTo;
use App\Course;

class ListenToController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function subjects(){
        $user = auth()->user()->id;
        $student = Student::find($user);
        $subjects = DB::table('listens_tos')->join('students', 'listens_tos.student_id', '=', 'students.id')->join('courses', 'listens_tos.course_id', '=', 'courses.id')->select('courses.id', 'courses.name')->where('listens_tos.student_id', $user)->get();
        return view('students.listen_to_students')->with('subjects', $subjects);
    }
}
