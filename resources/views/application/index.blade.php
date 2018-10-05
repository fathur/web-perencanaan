@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('product.sidebar')
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>{{$post->title}}</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="paragraph">{!! wpautop($post->content) !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
