<?php

namespace App\Http\Controllers;

use App\Professor;
use App\User;
use App\Course;
use App\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfessorController extends Controller
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
        $this->middleware('auth.professor');
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $professor = Professor::find($user_id);
        return view('professors.home_professors')->with('user', [$user, $professor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $professor = Professor::find($id);
        return view('professors.edit_professors')->with('user', [$user, $professor]);
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
            'email' => 'required'
        ]);

        //Create post
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->save();

        $professor = Professor::find($id);
        $professor->save();

        return redirect('/professors')->with('success','Post Updated');
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

    public function listOfSubjects($id){
        $subjects = Course::where('professor_id', $id)->get();
        return view('professors.courses_professors')->with('subjects', $subjects);
    }

    public function listOfStudentsOfSpecificSubject($professor_id, $subject_id){
        $students = DB::table('users')
        ->join('students', 'users.id', '=', 'students.id')
        ->join('exams', 'students.id', '=', 'exams.student_id')
        ->select('exams.id as exam_id','students.id as student_id','users.name', 'users.surname','exams.grade')->where('exams.course_id', $subject_id)->get();
        return view('professors.courseStudents_professors')->with('students', $students);
        //return $subjects;
    }

    public function updateGrade(Request $request, $professorId, $student_id,$examId){
        $this->validate($request, ['grade' => 'required']);
        //db::table('exams')->where('id', $examId)->update(['grade' => $request->input('grade'),'passed' => 'yes']);
        $exam = Exam::find($examId);
        $exam->grade = $request->input('grade');
        if($exam->grade == 0){
            $exam->passed = 'no';
        }else{
            $exam->passed = 'yes';
        }
        $exam->save();
        return redirect()->back();
    }
}
