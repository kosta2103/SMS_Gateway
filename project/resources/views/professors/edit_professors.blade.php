@extends('home')

@section('header')
    <h1>Edit Profile</h1>
@endsection


@section('content')
    {!! Form::open(['action' => ['ProfessorController@update', $user[0]->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name', $user[0]->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('surname','Surname')}}
            {{Form::text('surname', $user[0]->surname, ['class' => 'form-control', 'placeholder' => 'Surname'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','E-mail address')}}
            {{Form::text('email', $user[0]->email, ['class' => 'form-control', 'placeholder' => 'E-mail'])}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
        <br>
@endsection
