@extends('home')

@section('header')
    <h1>Edit Profile</h1>
@endsection


@section('content')

    {!! Form::open(['action' => ['StudentController@update', $user[0]->id], 'method' => 'POST']) !!}
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
        <div class="form-group">
            {{Form::label('index_number','Index number')}}
            {{Form::text('index_number', $user[1]->index_number, ['class' => 'form-control', 'placeholder' => 'Index number'])}}
        </div>
        <div class="form-group">
            {{Form::label('year_enrolled','Year enrolled')}}
            {{Form::text('year_enrolled', $user[1]->year_enrolled, ['class' => 'form-control', 'placeholder' => 'year_enrolled'])}}
        </div>
        <div class="form-group">
            {{Form::label('mobile_number','Mobile number')}}
            {{Form::text('mobile_number', $user[1]->mobile_number, ['class' => 'form-control', 'placeholder' => 'Mobile number'])}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
        <br>
@endsection