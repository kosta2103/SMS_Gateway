@extends('home')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(90deg, rgba(23,162,184,1) 0%, rgba(64,82,92,1) 50%, rgba(37,183,196,1) 100%); color: white; border: 0;">
                    <h2>{{ $user[0]->name}} {{$user[0]->surname}}</h2>
                </div>
                <div class="card-body">
                    <b>E-mail adresa: </b>{{$user[0]->email}}
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
    
@endsection