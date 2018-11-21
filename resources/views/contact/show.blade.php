@extends('layout.main')

@push('style')
    <style>.mapouter {
            text-align: right;
            height: 500px;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 500px;
            width: 100%;
        }

        #gmap_canvas {
            width: 100%;
        }
    </style>
@endpush

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="map">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Kementerian%20Pekerjaan%20Umum%20dan%20Perumahan%20Rakyat%20Republik%20Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>

                    </div>
                </div>
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
