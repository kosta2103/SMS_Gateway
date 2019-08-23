@extends('home')

@section('content')
    <div class="container" style="text-align:center;">
        @if(count($exams) > 0)
            <table class="table table-striped">
                <tr style="background-color: #17a2b8; color: white;">
                    <th>Ispitni rok</th>
                    <th>Ocena</th>
                    <th>Naziv predmeta</th>
                </tr>
                @foreach($exams as $exam)
                    <tr>
                        <td>{{$exam->examination_period}}</td>
                        <td>{{$exam->name}}</td>
                        <td>{{$exam->grade}}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>Nemate položene ispite!</p>
        @endif
    </div>
@endsection