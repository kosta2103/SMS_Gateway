@extends('home')


@section('content')
    <div class="container" style="text-align:center;">
        @if(count($subjects) > 0)
            <table class="table table-striped">
                <tr style="background-color: #17a2b8; color: white;">
                    <th scope="col">Šifra predmeta</th>
                    <th scope="col">Naziv predmeta</th>
                </tr>
                @foreach($subjects as $subject)
                    <tr>
                        <td style="width: 200px;">{{$subject->id}}</td>
                        <td style="width: 400px;">{{$subject->name}}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>Nemate upisan predmet!</p>
        @endif
    </div>
    
            
@endsection