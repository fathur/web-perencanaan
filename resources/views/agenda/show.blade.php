@extends('layout.main')

@section('content')
    <div class="container-fluid calendar">
        <div class="row calendar-show header">
            <img src="{{$agenda->image}}" alt="{{$agenda->title}}">

            <h1>{{$agenda->title}}</h1>
        </div>
    </div>

    <div class="container calendar">

        <div class="row calendar-show">
            <div class="col-md-offset-1 col-md-10">

                <div class="date">
                    <i class="fal fa-clock"></i> {{$agenda->acf->dateTimePicker('date')}}
                </div>

                <div class="venue">
                    <i class="fal fa-map-pin"></i> {{$agenda->acf->text('venue')}}
                </div>

                {!! wpautop($agenda->content) !!}
            </div>
        </div>
    </div>
@endsection
