<?php

namespace App\Http\Controllers;

use App\Course;
use App\Exam;
use App\ListensTo;
use Illuminate\Http\Request;
use App\User;
use App\Student;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.student')->except('reply');
    }


    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $student = Student::find($user_id);
        $listens_to_courses = ListensTo::where('student_id', $student->id)->count();
        $passed_exams = Exam::where('student_id', $student->id)->where('passed', 'yes')->count();
        $GPA = Exam::where('student_id', $student->id)->where('passed', 'yes')->sum('grade')/Exam::where('student_id', $student->id)->where('passed', 'yes')->count('grade');
        
        //
        $courses = Exam::select('course_id')->where('student_id', $student->id)->where('passed', 'no')->distinct()->get();
        $reported_not_passed = 0;
        foreach($courses as $course)
        {
            if(Exam::where('course_id', $course->course_id)->where('passed', 'yes')->where('student_id', $student->id)->count() > 0) continue;
            else $reported_not_passed++;
        }
        return view('students.home_students')->with('user', [$user, $student, $listens_to_courses, $passed_exams, $GPA, $reported_not_passed]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  

    }

    public function verify_caller(Request $request, $id)
    {
        if($request->verify)
        {
            $this->validate($request,[
                'verification_code' => 'required'
            ]);
    
            $student = Student::find($id);

            $sid    = "AC3cb8f51261ae6b9b70ade07e9261dda2";
            $token  = "db1cb3e2e96e87de694a40e2453664a4";
            $twilio = new Client($sid, $token);

            $verification_check = $twilio->verify->v2->services("VA5fdd65e446afc5fc5500799835eba491")
                                         ->verificationChecks
                                         ->create($request->verification_code, // code
                                                  array("to" => $student->mobile_number)
                                         );

            if($verification_check->status == 'approved')
            {
                $student->verification_code = $request->verification_code;
                $student->save();
                return redirect(route('students.verify', ['student' => $student->id]));
            }
            else
            {
                return redirect(route('students.verify', ['student' => $student->id]))->with('unsuccess','Verifikacioni kod nije ispravan! Pokušajte ponovo!');
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $student = Student::find($id);
        return view('students.edit_students')->with('user', [$user, $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'surname'=> 'required',
            'email' => 'required',
            'index_number' => 'required',
            'year_enrolled' => 'required',
            'mobile_number' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->save();

        $student = Student::find($id);
        $student->index_number = $request->input('index_number');
        $student->year_enrolled = $request->input('year_enrolled');
        $student->mobile_number = $request->input('mobile_number');
        $student->save();
        
        return redirect('/students')->with('success','Post Updated');
    }

    public function verify($id)
    {
        $user = User::find($id);
        $student = Student::find($id);
        
        if($student->verification_code == '/' && session()->exists('unsuccess') == false)
        {
                $sid    = "AC3cb8f51261ae6b9b70ade07e9261dda2";
                $token  = "db1cb3e2e96e87de694a40e2453664a4";
                $twilio = new Client($sid, $token);
        
                $verification = $twilio->verify->v2->services("VA5fdd65e446afc5fc5500799835eba491")
                                                ->verifications
                                                ->create($student->mobile_number, "sms");
    
                return view('students.verify_students', ['verification'=>$verification->sid, 'user' => [$user, $student]]);      
        }
        else
        {
            return view('students.verify_students', ['user' => [$user, $student]]);
        }
    }

    public function send($id)
    {
        $student = Student::find($id);

        $account_sid = 'AC3cb8f51261ae6b9b70ade07e9261dda2';
        $auth_token = 'db1cb3e2e96e87de694a40e2453664a4';

        $twilio_number = "+12512505457";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            $student->mobile_number,
            array(
                'from' => $twilio_number,
                'body' => 'Test message'
            )
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
