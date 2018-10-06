@extends('layout.main')

@section('content')

    <div class="container-fluid section section-dark slider-container">
        <div id="slider" class="slider">
            <div class="section">

                @foreach($sliders as $slider)
                    <div class="slide">
                        <img src="{{$slider->image}}" alt="{{$slider->title}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid section section-light">
        @include('home.product')
    </div>


    <div class="container-fluid section section-dark">
        @include('news.news')
    </div>


    <div class="container-fluid section section-light">
        @include('agenda.agenda')
    </div>
@endsection


@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/fullpage.js/fullpage.min.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('vendor/fullpage.js/fullpage.min.js')}}"></script>
    <script src="{{asset('vendor/particle.js/particles.min.js')}}"></script>
@endpush

@push('script')
    <script>
        particlesJS.load('logo', '{{asset('vendor/particle.js/particle-header.json')}}', function() {
            // console.log('callback - particles.js config loaded');
        });


        $('#slider').fullpage({
            autoScrolling: false,
            fitToSection: false
        });
    </script>
@endpush
