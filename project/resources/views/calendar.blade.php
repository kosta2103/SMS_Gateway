@extends('home')

@section('content')
    <div class="container">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

        <style>
            div.container .fc-row.fc-week.fc-widget-content.fc-rigid
            {
                height: 87px !important;
            }

        </style>

        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
    </div>
@endsection
        
 
 