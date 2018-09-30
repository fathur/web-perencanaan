@extends('layout.main')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {!! $contact->content !!}
            </div>
        </div>
    </div>
@endsection
