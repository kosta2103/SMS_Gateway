@extends('home')


@section('content')
    @if (Session::has('unsuccess'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ Session('unsuccess') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @else
        @if(isset($verification))
            <div class="card">
                <div class="card-header" style="background-color: #17a2b8; color: white;">
                    Verifikacija naloga
                </div>
                
                <div class="card-body">
                    <form action="{{ route('students.verifyCaller', ['students' => $user[0]->id, 'verify' => $verification]) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="verify">Verifikacija</label>
                            <input name="verification_code" class="form-control" type="text" value="{{ $user[1]->verification_code }}" placeholder="Verifikacioni kod">
                        </div>
                        <button type="submit" class = "btn btn-info">Verifikuj</button>
                    </form>
                </div>
            </div>
        @else
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Verifikacija naloga</h4>
                <p>Vaš nalog je verifikovan :)</p>
            </div>
        @endif
    @endif
@endsection
