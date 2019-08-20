@extends('home')


@section('content')

        @if($user[1]->verification_code != '/')
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Verifikacija naloga</h4>
                <p>Vaš nalog je verifikovan :)</p>
            </div>
        @else
            <div class="card">
                <div class="card-header" style="background-color: #17a2b8; color: white;">
                    Verifikacija naloga
                </div>
                <div class="card-body">
                    <form action="{{ route('students.update', ['students' => $user[0]->id, 'verify' => 1]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="verify">Verifikacija</label>
                            <input name="verification_code" class="form-control" type="text" value="{{ $user[1]->verification_code }}" placeholder="Verifikacioni kod">
                        </div>
                        <button type="submit" class = "btn btn-info">Verifikuj</button>
                    </form>
                </div>
            </div>
            
        @endif
        
@endsection
