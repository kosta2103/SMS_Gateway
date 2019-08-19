@extends('home')

@section('header')
{{ $user[0]->name}} {{$user[0]->surname}}
@endsection


@section('content')
    <b>E-mail adresa: </b>{{$user[0]->email}}
@endsection