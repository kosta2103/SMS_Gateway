@extends('home')

@section('content')
    <style>
        h1{
        font-size: 30px;
        color: rgba(0,0,0,.65);
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
            background: linear-gradient(90deg, rgba(23,162,184,1) 0%, rgba(64,82,92,1) 50%, rgba(37,183,196,1) 100%);
        }
        .tbl-content{
        height:auto;
        overflow-x:auto;
        margin-top: 0px;
        border: 1px solid rgba(255,255,255,0.3);
        box-shadow: 10px 5px 54px 12px rgba(0,0,0,0.38);
        }
        th{
        padding: 20px 15px;
        text-align: center;
        font-weight: 500;
        font-size: 17px;
        color: #fff;
        text-transform: uppercase;
        }
        td{
        padding: 15px;
        text-align: center;
        vertical-align:middle;
        font-weight: 300;
        font-size: 16px;
        color: #32464d;
        border-bottom: solid 1px rgba(255,255,255,0.1);
        }



        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
        body{
        background: white;
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
                            <td><a href="{{ route('professors.listOfStudents', ['' => Auth()->user()->id,'subject' => $subject->id]) }}" class="btn btn-info">Prikaži</a></td>
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