<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;
use Twilio\Twiml\MessagingResponse;
use App\Student;
use App\Exam;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.student')->except('store');
    }

    public function passedExams($id)
    {        
        $exams = DB::table('exams')->join('courses', 'exams.course_id', '=', 'courses.id')->select('examination_period', 'grade', 'name', 'exams.created_at as examination_date')->where('student_id', $id)->where('passed','yes')->orderBy('examination_date', 'asc')->get();
        return view('students.passed_exams_students')->with('exams', $exams);
    }

    public function reportedExams($id){
        $exams = DB::table('exams')->join('courses', 'exams.course_id', '=', 'courses.id')->select('course_id', 'examination_period', 'grade', 'passed', 'name')->where('student_id', $id)->get();
        return view('students.reported_exams_students')->with('exams', $exams);
    }

    public function store(Request $request)
    {
        $from = $request->input('From');
        $body = $request->input('Body');

        $student = Student::where('mobile_number', $from)->get();
        $student_id = $student[0]->id;
        $exam = new Exam();
        $exam->examination_period = 'Januar';
        $exam->student_id = $student_id;
        $exam->course_id = $body;
        $exam->save();

        $course = Course::where('id', $body)->get();

        $response = new MessagingResponse();
        $response->message("Uspesno ste prijavili ispit iz predmeta - ".$course[0]->name);
        return $response;
    }
}
