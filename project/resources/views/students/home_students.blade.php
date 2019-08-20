@extends('home')


@section('content')
<div class="card">
    <div class="card-header" style="background-color: #17a2b8; color: white;"><h2>{{ $user[0]->name}} {{$user[0]->surname}}</h2></div>
    <div class="card-body">
        <b>E-mail adresa: </b>{{$user[0]->email}}
        <br>
        <b>Broj indeksa: </b>{{$user[1]->index_number}}
        <br>
        <b>Godina upisa: </b>{{$user[1]->year_enrolled}}
        <br>
        <b>Broj telefona: </b>+{{$user[1]->mobile_number}}
        <br>
        <b>Verifikacioni kod: </b>{{$user[1]->verification_code}}
    </div>
</div>
    
@endsection