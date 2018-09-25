@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>{{$agenda->title->rendered}}</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <img src="" alt="{{$agenda->title->rendered}}" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {!! $agenda->content->rendered !!}
                </div>
            </div>
        </div>
    </div>
@endsection
