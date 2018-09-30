@extends('layout.main')

@section('content')
    <div class="container-fluid posts">
        <div class="row posts-show header">
            <img src="{{$news->image}}" alt="{{$news->title}}">

            <h1>{{$news->title}}</h1>
        </div>
    </div>

    <div class="container posts">

        <div class="row posts-show">
            <div class="col-md-offset-1 col-md-10">
                {!! wpautop($news->content) !!}
            </div>
        </div>
    </div>
@endsection
