@extends('home')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @if (Session::has('unsuccess'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="box-shadow: 0 0 20px #dd4b39 !important;">
                {{ Session('unsuccess') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @else
                @if(isset($verification))
                    <div class="card">
                        <div class="card-header" style="background:linear-gradient(90deg, rgba(23,162,184,1) 0%, rgba(64,82,92,1) 50%, rgba(37,183,196,1) 100%); color: white;">
                            Verifikacija naloga
                        </div>
                        
                        <div class="card-body" style="box-shadow: 10px 5px 54px 12px rgba(0,0,0,0.38); border:0;">
                            <form action="{{ route('students.verifyCaller', ['students' => $user[0]->id, 'verify' => $verification]) }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="verify">Verifikacija</label>
                                    <input name="verification_code" class="form-control" type="text" value="{{ $user[1]->verification_code }}" placeholder="Verifikacioni kod">
                                </div>
                                <button type="submit" class = "btn btn-info" style="background: linear-gradient(90deg, rgba(23,162,184,1) 0%, rgba(37,183,196,1) 50%);">Verifikuj</button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="alert alert-success" role="alert" style="box-shadow: 0 0 20px #00a65a !important;">
                        <h4 class="alert-heading">Verifikacija naloga</h4>
                        <p>Vaš nalog je verifikovan :)</p>
                    </div>
                @endif
            @endif
        </div>
        <div class="col-md-2"></div>

    </div>
</div>
@endsection
