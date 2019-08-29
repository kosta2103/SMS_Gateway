@extends('home')

@section('content')
    <style>
                    h1{
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
            }
            table{
            width:100%;
            table-layout: fixed;
            }
            .tbl-header{
            background-color: rgba(255,255,255,0.3);
            }
            .tbl-content{
            height:300px;
            overflow-x:auto;
            margin-top: 0px;
            border: 1px solid rgba(255,255,255,0.3);
            }
            th{
            padding: 20px 15px;
            text-align: center;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            }
            td{
            padding: 15px;
            text-align: center;
            vertical-align:middle;
            font-weight: 300;
            font-size: 12px;
            color: #fff;
            border-bottom: solid 1px rgba(255,255,255,0.1);
            }



            @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
            body{
            background: -webkit-linear-gradient(left, #525965, #16c7ff);
            background: linear-gradient(to right, #25c481, #25b7c4);
            font-family: 'Roboto', sans-serif;
            }
            section{
            margin: 50px;
            }

 </style>
    <section>
    <h1>Spisak predmeta</h1>
    <div class="container" style="text-align:center;">
    <div class="tbl-header">
        @if(count($subjects) > 0)
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Šifra predmeta</th>
                        <th>Naziv predmeta</th>
                        <th>Pregled ocena</th>
                    </tr>
                </thead>
            </table>
            </div>
            <div class="tbl-content">
              <table cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>{{$subject->id}}</td>
                            <td>{{$subject->name}}</td>
                            <td><a href="{{ route('professors.listOfStudents', ['professor' => Auth()->user()->id, 'subject' => $subject->id]) }}" class="btn btn-info">Prikaži</a></td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </section>
        @else
            <p>Nema predmeta!</p>
        @endif
    </div>
@endsection