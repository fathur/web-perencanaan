@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="photos">
                    <div class="box size99" style="background-color: red;"></div>
                    <div class="box size99" style="background-color: grey;"></div>
                    <div class="box size99" style="background-color: green;"></div>
                    <div class="box size99" style="background-color: yellow;"></div>
                    <div class="box size99" style="background-color: yellow;"></div>
                    <div class="box size99" style="background-color: yellow;"></div>
                    <div class="box size99" style="background-color: yellow;"></div>
                    <div class="box size99" style="background-color: yellow;"></div>
                    <div class="box size99" style="background-color: yellow;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('vendor/nested/jquery.nested.js')}}"></script>
@endpush

@push('script')
    <script>
        $("#photos").nested({
            minWidth: 20
        });
    </script>
@endpush
