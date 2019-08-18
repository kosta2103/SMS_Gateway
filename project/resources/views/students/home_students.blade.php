@extends('home')

@section('header')
{{ $user[0]->name}} {{$user[0]->surname}}
@endsection


@section('content')
    <b>E-mail adresa: </b>{{$user[0]->email}}
    <br>
    <b>Broj indeksa: </b>{{$user[1]->index_number}}
    <br>
    <b>Godina upisa: </b>{{$user[1]->year_enrolled}}
    <br>
    <b>Broj telefona: </b>+{{$user[1]->mobile_number}}
    <br>
    <b>Verifikacioni kod: </b>{{$user[1]->verification_code}}
    <br>
@endsection