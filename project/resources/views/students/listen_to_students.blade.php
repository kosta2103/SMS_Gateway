@extends('home')


@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(count($subjects) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Šifra predmeta</th>
                                <th>Naziv predmeta</th>
                            </tr>
                            @foreach($subjects as $subject)
                                <tr>
                                    <td>{{$subject->id}}</td>
                                    <td>{{$subject->name}}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>Nemate upisan predmet!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection