@extends('layout.main')

@section('content')

    <div class="container-fluid section section-light">
        @include('home.product')
    </div>


    <div class="container-fluid section section-black">
        @include('news.news')
    </div>


    <div class="container-fluid section section-light">
        @include('agenda.agenda')
    </div>
@endsection
