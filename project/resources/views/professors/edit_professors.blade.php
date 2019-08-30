@extends('home')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(90deg, rgba(23,162,184,1) 0%, rgba(64,82,92,1) 50%, rgba(37,183,196,1) 100%); color: white; border: 0;"><h2>Podešavanje naloga</h2></div>
                <div class="card-body" style="box-shadow: 10px 5px 54px 12px rgba(0,0,0,0.38); border:0;">
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
                            {{Form::submit('Izmeni', ['class'=>'btn btn-info', 'style' => 'background: linear-gradient(90deg, rgba(23,162,184,1) 0%, rgba(37,183,196,1) 50%);'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
    
@endsection
