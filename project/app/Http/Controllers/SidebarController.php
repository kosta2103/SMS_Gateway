<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;

class SidebarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.student');
    }

    public function calendar()
    {
        $events = [];

        $events[] = \Calendar::event(
            'Ispit iz predmeta baze podataka', //event title
            false, //full day event?
            '2019-08-26T0800', //start time (you can also use Carbon instead of DateTime)
            '2019-08-26T1300', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            new \DateTime('2015-02-14'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2015-02-14'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );
        
        $calendar = \Calendar::addEvents($events) //add an array with addEvents
            ->setOptions([ //set fullcalendar options
                'firstDay' => 1
            ]);

        return view('calendar', ['calendar' => $calendar]);
    }
}
