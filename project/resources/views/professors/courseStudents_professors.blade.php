@extends('home')

@section('content')
    <style>
                    h1{
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
            }
            table{
            width:100%;
            table-layout: fixed;
            }
            .tbl-header{
            background-color: rgba(255,255,255,0.3);
            }
            .tbl-content{
            height:300px;
            overflow-x:auto;
            margin-top: 0px;
            border: 1px solid rgba(255,255,255,0.3);
            }
            th{
            padding: 20px 15px;
            text-align: center;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            }
            td{
            padding: 15px;
            text-align: center;
            vertical-align:middle;
            font-weight: 300;
            font-size: 12px;
            color: #fff;
            border-bottom: solid 1px rgba(255,255,255,0.1);
            }



            @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
            body{
            background: -webkit-linear-gradient(left, #525965, #16c7ff);
            background: linear-gradient(to right, #25c481, #25b7c4);
            font-family: 'Roboto', sans-serif;
            }
            section{
            margin: 50px;
            }

 </style>
    <section>
    <div class="container" style="text-align:center;">
    <div class="tbl-header">
        @if(count($students) > 0)
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Upiši izabranu ocenu</th>
                    </tr>
                </thead>
            </table>
            </div>
            <div class="tbl-content">
              <table cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->surname}}</td>
                            <td>
                                {!! Form::open(['action' => ['ProfessorController@updateGrade', Auth()->user()->id, $student->student_id, $student->exam_id], 'method' => 'POST']) !!}
                                    @if(is_null($student->grade) or $student->grade == 0)  
                                        {{ Form::select('grade', array(0 => 'Neocenjen',6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10'), 0) }}
                                    @elseif($student->grade == 6)
                                            {{ Form::select('grade', array(0 => 'Neocenjen', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10'), 6) }}
                                    @elseif($student->grade == 7) 
                                            {{ Form::select('grade', array(0 => 'Neocenjen', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10'), 7) }}
                                    @elseif($student->grade == 8)
                                            {{ Form::select('grade', array(0 => 'Neocenjen', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10'), 8) }}
                                    @elseif($student->grade == 9)
                                            {{ Form::select('grade', array(0 => 'Neocenjen', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10'), 9) }}
                                    @elseif($student->grade == 10)
                                            {{ Form::select('grade', array(0 => 'Neocenjen', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10'), 10) }}
                                    @endif
                                {{ Form::hidden('_method', 'PUT') }}
                                {{ Form::submit('promeni', ['class' => 'btn btn-info']) }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </section>
        @else
            <p>Nema studenata na ovom predmetu!</p>
        @endif
    </div>
@endsection

                                        