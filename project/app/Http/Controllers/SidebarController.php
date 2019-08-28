<?php

namespace App\Http\Controllers;

use App\Course;
use App\Exam;
use Illuminate\Support\Facades\Auth;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class SidebarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.student');
    }

    public function calendar()
    {
        $exams = Exam::where('student_id', Auth::user()->id)->get();
        
        $events = [];

        foreach($exams as $exam)
        {
            $events[] = \Calendar::event(
                'Ispit iz predmeta - ' . Course::select('name')->where('id', $exam->course_id)->first()->name, //event title
                false, //full day event?
                strval($exam->created_at), //start time (you can also use Carbon instead of DateTime)
                date('Y-m-d H:i:s', strtotime($exam->created_at.' +3 hours')), //end time (you can also use Carbon instead of DateTime)
                0, //optionally, you can specify an event ID
                [
                    'color' => '#f05050',
                ]
            );
        }
        
        
        $calendar = \Calendar::addEvents($events) //add an array with addEvents
            ->setOptions([ //set fullcalendar options
                'firstDay' => 1
            ]);

        return view('calendar', ['calendar' => $calendar]);
    }
}
