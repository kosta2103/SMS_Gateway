<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use Twilio\Rest\Client;
use Twilio\Twiml\MessagingResponse;

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
        return view('students.home_students')->with('user', [$user, $student]);
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
        if($request->verify)
        {
            $this->validate($request,[
                'verification_code' => 'required'
            ]);
    
            //Create post
            $student = Student::find($id);
            $student->verification_code = $request->verification_code;
            $student->save();
        }
        else
        {
            $this->validate($request,[
                'name' => 'required',
                'surname'=> 'required',
                'email' => 'required',
                'index_number' => 'required',
                'year_enrolled' => 'required',
                'mobile_number' => 'required',
            ]);
    
            //Create post
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
        }
        return redirect('/students')->with('success','Post Updated');
    }

    public function verify($id)
    {
        $user = User::find($id);
        $student = Student::find($id);
        return view('students.verify_students')->with('user', [$user, $student]);
    }

    public function send(){
        //require __DIR__ . '/vendor/autoload.php';

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'AC30e271323ee5dd59981b2c1eaffe4297';
        $auth_token = '76b532ace7714aabf961bed3151cdf76';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = "+12173885635";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+381698288758',
            array(
                'from' => $twilio_number,
                'body' => 'I sent this message in under 10 minutes!'
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
