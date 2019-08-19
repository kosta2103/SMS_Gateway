@extends('home')

@section('header')
    <h1>Verify Profile</h1>
@endsection


@section('content')
    {{-- {!! Form::open(['action' => ['StudentController@update', $user[0]->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('verify','Verify')}}
            {{Form::text('verify', $user[1]->verification_code, ['class' => 'form-control', 'placeholder' => 'Verification code'])}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
        <br> --}}
        @if($user[1]->verification_code != '/')
            <h1>Profil je verifikovan</h1>
        @else
            <form action="{{ route('students.update', ['students' => 1, 'verify' => 1]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="verify">Verify</label>
                    <input name="verification_code" class="form-control" type="text" value="{{ $user[1]->verification_code }}" placeholder="Verification code">
                </div>
                <button type="submit" class = "btn btn-primary">Submit</button>
            </form>
        @endif
        
@endsection
