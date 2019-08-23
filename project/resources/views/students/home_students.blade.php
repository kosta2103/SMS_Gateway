@extends('home')


@section('content')

<div class="row">
    <div class="col-sm-6 col-xs-12">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Bookmarks</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>
    <div class="col-sm-6 col-xs-12">
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>

    <div class="col-sm-6 col-xs-12">
        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Events</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 30%"></div>
                </div>
                <span class="progress-description">30% Increase in 30 Days</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>

    <div class="col-sm-6 col-xs-12">
        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Comments</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%"></div>
                </div>
                <span class="progress-description">0% Increase in 30 Days</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>

</div>


<div class="card">
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
    
@endsection