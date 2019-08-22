<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Exam;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.student');
    }

    public function passedExams($id)
    {
        //$subjects = DB::table('listens_tos')->join('students', 'listens_tos.student_id', '=', 'students.id')->join('courses', 'listens_tos.course_id', '=', 'courses.id')->select('courses.id', 'courses.name')->where('listens_tos.student_id', $id)->get();
        
        $exams = DB::table('exams')->join('courses', 'exams.course_id', '=', 'courses.id')->select('examination_period', 'grade', 'name')->where('student_id', $id)->where('passed','yes')->get();
        return view('students.passed_exams_students')->with('exams', $exams);
    }

    public function reportedExams($id){
        $exams = DB::table('exams')->join('courses', 'exams.course_id', '=', 'courses.id')->select('examination_period', 'grade', 'passed', 'name')->where('student_id', $id)->get();
        return view('students.reported_exams_students')->with('exams', $exams);
    }
}
