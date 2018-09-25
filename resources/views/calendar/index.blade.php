@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="container">

            <div class="row">
                @foreach($agenda as $item)
                    <div class="col-sm-4">
                        @php
                            if(isset($item->_links->{'wp:featuredmedia'})) {

                             $m = $media[$item->_links->{'wp:featuredmedia'}[0]->href];
                             $sizes = $m->media_details->sizes;
                             $src=isset($sizes->medium_large)?$sizes->medium_large->source_url:$sizes->full->source_url;
                         } else {
                             $src = '';
                         }
                        @endphp

                        <img src="{{$src}}" alt="" class="img-responsive">

                        <a href="{{url('berita/' . $item->slug)}}" class="title">
                            <h3>{{$item->title->rendered}}</h3>
                        </a>

                        <div class="attribute">
                            <div class="date">
                                <i class="fal fa-calendar-alt"></i> {{$item->date}}
                            </div>


                            <div class="by">
                                <i class="fal fa-user"></i> jonix
                            </div>
                        </div>

                        <div class="paragraph">
                            @if(isset($item->excerpt))
                                {!! $item->excerpt->rendered !!}
                            @else
                                {!! $item->content->rendered !!}
                            @endif
                        </div>

                        <a href="{{url('agenda/' . $item->slug)}}" class="read-more">Selengkapnya</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
