@extends('layout.main')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12 text-center">
            <h1>{{$news->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {!! wpautop($news->content) !!}
        </div>
    </div>
</div>
@endsection
