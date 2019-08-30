<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;
use Twilio\Twiml\MessagingResponse;
use App\Student;
use App\Exam;
use App\ListensTo;

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
        $slusa = false;
        $polozio = false;

        $from = $request->input('From');
        $body = $request->input('Body');

        $student = Student::where('mobile_number', $from)->get();
        $student_id = $student[0]->id;

        $listensTo = ListensTo::where('student_id', $student_id)->get();
        foreach ($listensTo as $listenTo){
            if($body == $listenTo->course_id){
                $slusa = true;
            }
        }

        $matchThese = ['student_id' => $student_id, 'course_id' => $body];
        $examChecks = Exam::where($matchThese);
        foreach($examChecks as $examCheck){
            if($examCheck->passed == 'yes'){
                $polozio = true;
            }
        }

        if(!$slusa){
            $response = new MessagingResponse();
            $response->message("Ne možete prijaviti ispit koji ne slušate!");
            return $response;
        } else if($polozio){
            $response = new MessagingResponse();
            $response->message("Ne možete prijaviti ispit koji ste položili!");
            return $response;
        }
        
        $exam = new Exam();
        $exam->examination_period = 'Septembar';
        $exam->student_id = $student_id;
        $exam->course_id = $body;
        $exam->created_at = '2019-09-15 9:00:00';
        $exam->passed = 'no';
        $exam->save();

        $course = Course::where('id', $body)->get();

        $response = new MessagingResponse();
        $response->message("Uspesno ste prijavili ispit iz predmeta - ".$course[0]->name);
        return $response;
    }
}
