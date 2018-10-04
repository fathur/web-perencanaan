@extends('layout.main')

@section('content')
    <div class="container-fluid posts">
        <div class="row posts-show header">
            <img src="{{$post->image}}" alt="{{$post->title}}">

            <h1>{{$post->title}}</h1>
        </div>
    </div>

    <div class="container posts">

        <div class="row posts-show">
            <div class="col-md-offset-1 col-md-10">
                {!! wpautop($post->content) !!}
            </div>
        </div>
    </div>
@endsection
