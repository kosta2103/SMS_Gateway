@extends('home')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(count($exams) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Ispitni rok</th>
                                <th>Naziv predmeta</th>
                                <th>Položen</th>
                                <th>Ocena</th>
                            </tr>
                            @foreach($exams as $exam)
                                <tr>
                                    <td>{{$exam->examination_period}}</td>
                                    <td>{{$exam->name}}</td>
                                    @if($exam->passed == 'yes')
                                        <td>Položen</td>
                                        <td>{{$exam->grade}}</td>
                                    @else
                                        <td>Nije položen</td>
                                        <td>/</td>
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>Nemate položene ispite!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection