@extends('home')


@section('content')
    <div class="card">
        <div class="card-header" style="background-color: #17a2b8; color: white;">
            <h2>{{ $user[0]->name}} {{$user[0]->surname}}</h2>
        </div>
        <div class="card-body">
            <b>E-mail adresa: </b>{{$user[0]->email}}
        </div>
    </div>
@endsection