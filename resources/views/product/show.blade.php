@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Profil</h3>

                    <ul class="list-unstyled">
                        <li><a href="{{url('profil/struktur-organisasi')}}">Organisasi</a></li>
                        <li><a href="{{url('profil/tupoksi')}}">Tupoksi</a></li>
                        <li><a href="{{url('profil/sejarah')}}">Sejarah</a></li>
                    </ul>
                </div>

                <div class="col-md-9">
                    <h1>{{$product->title->rendered}}</h1>

                    @if(!is_null($media))
                        <img src="{{$media->source_url}}" alt="{{$media->title->rendered}}" class="img-responsive">
                    @endif

                    {!! $product->content->rendered !!}
                </div>
            </div>
        </div>
    </div>
@endsection
