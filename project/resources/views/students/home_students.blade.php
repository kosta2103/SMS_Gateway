@extends('home')


@section('content')

<div class="row" style="width:100%;">
    <div class="col-md-6">
        <div class="card" style="width:100%;">
            <div class="card-header" style="background-color: #17a2b8; color: white;"><h2>{{ $user[0]->name}} {{$user[0]->surname}}</h2></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6" style="line-height: 2.0;">
                        <b>E-mail adresa: </b>{{$user[0]->email}}
                        <br>
                        <b>Broj indeksa: </b>{{$user[1]->index_number}}
                        <br>
                        <b>Godina upisa: </b>{{$user[1]->year_enrolled}}
                        <br>
                        <b>Broj telefona: </b>{{$user[1]->mobile_number}}
                        <br>
                        <b>Verifikacioni kod: </b>{{$user[1]->verification_code}}
                    </div>
                    <div class="col-md-6" style="text-align:center;">
                        <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive rounded" style="width:200px;border-radius: 2.25rem!important;"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fas fa-book"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Upisani predmeti</span>
                <style> 
                    a 
                    {
                        color: white;
                    }
                    a:hover 
                    {
                        color: whitesmoke;
                    }
                </style>
                <a href="{{ route('students.subjects', ['student' => $user[0]->id]) }}"><span class="info-box-number">{{ $user[2] }}</span></a>
                <div class="progress">
                <div class="progress-bar" style="width: {{($user[2]/6)*100}}%"></div>
                </div>
                <span class="progress-description">
                    {{round(($user[2]/6)*100)}}%
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fas fa-pencil-alt"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Polozeni ispiti</span>
                <a href="{{ route('students.passedExams', ['student' => $user[0]->id]) }}"><span class="info-box-number">{{ $user[3] }}</span></a>
                <div class="progress">
                    <div class="progress-bar" style="width: 
                    @if($user[2] != 0)
                        {{($user[3]/$user[2])*100 }}%
                    @else 
                        {{0}}
                    @endif
                    "></div>
                </div>
                <span class="progress-description">
                    @if($user[2] != 0)
                    {{
                        round(($user[3]/$user[2])*100)
                    }}
                    @else
                        {{0}}
                    @endif
                    %
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->

        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fas fa-graduation-cap"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Prosek ocena</span>
                <span class="info-box-number">{{ $user[4] }}</span>
                <div class="progress">
                    <div class="progress-bar" style="width: {{ ($user[4]/10)*100 }}%"></div>
                </div>
                <span class="progress-description"></span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->

        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fas fa-exclamation-triangle"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Prijavljeni ispiti koji nisu polozeni</span>
                <span class="info-box-number">{{ $user[5] }}</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%"></div>
                </div>
                <span class="progress-description"></span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>
    
</div>
    



@endsection