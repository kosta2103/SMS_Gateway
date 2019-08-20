@extends('home')


@section('content')
    <div class="card">
        <div class="card-header" style="background-color: #17a2b8; color: white;">
            <h2>Podešavanje naloga</h2>
        </div>
        <div class="card-body">
            {!! Form::open(['action' => ['ProfessorController@update', $user[0]->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name','Ime')}}
                    {{Form::text('name', $user[0]->name, ['class' => 'form-control', 'placeholder' => 'Ime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('surname','Prezime')}}
                    {{Form::text('surname', $user[0]->surname, ['class' => 'form-control', 'placeholder' => 'Prezime'])}}
                </div>
                <div class="form-group">
                    {{Form::label('email','E-mail adresa')}}
                    {{Form::text('email', $user[0]->email, ['class' => 'form-control', 'placeholder' => 'E-mail adresa'])}}
                </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Izmeni', ['class'=>'btn btn-info'])}}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
