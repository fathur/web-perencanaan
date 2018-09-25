@extends('layout.main')

@section('content')
    <div class="container-fluid" style="background-color: grey; margin-top: -20px;" id="map-wrapper">
        map here


    </div>


@endsection

@push('script')
    <script>
        let windowHeight = $(window).height();

        $('#map-wrapper').height(windowHeight - 50);
    </script>
@endpush
