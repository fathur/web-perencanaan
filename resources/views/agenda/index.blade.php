@extends('layout.main')

@section('content')
    {{--<div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>--}}

    @include('agenda.agenda')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {{$agendas->links()}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('vendor/moment/moment.min.js')}}"></script>
    {{--<script src="{{asset('vendor/moment/locales.min.js')}}"></script>--}}
    <script src="{{asset('vendor/fullcalendar/fullcalendar.min.js')}}"></script>
    {{--<script src="{{asset('vendor/fullcalendar/locale/id.js')}}"></script>--}}
@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fullcalendar/fullcalendar.print.min.css')}}">
@endpush

@push('script')
    <script>
        $(function () {

            // page is now ready, initialize the calendar...

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2018-03-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                weekNumbers: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2018-03-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2018-03-07',
                        end: '2018-03-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2018-03-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2018-03-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2018-03-11',
                        end: '2018-03-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2018-03-12T10:30:00',
                        end: '2018-03-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2018-03-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2018-03-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2018-03-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2018-03-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2018-03-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2018-03-28'
                    }
                ]
            })

        });
    </script>
@endpush
