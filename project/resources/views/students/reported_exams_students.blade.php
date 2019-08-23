@extends('home')

@section('content')
    <div class="container" style="text-align:center;">
        @if(count($exams) > 0)
            <table class="table table-striped">
                <tr style="background-color: #17a2b8; color: white;">
                    <th>Šifra predmeta</th>
                    <th>Naziv predmeta</th>
                    <th>Ispitni rok</th>
                    <th>Položen</th>
                    <th>Ocena</th>
                </tr>
                @foreach($exams as $exam)
                    <tr>
                        <td>{{$exam->course_id}}</td>
                        <td>{{$exam->name}}</td>
                        <td>{{$exam->examination_period}}</td>
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
@endsection