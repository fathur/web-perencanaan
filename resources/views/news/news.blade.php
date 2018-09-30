<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2 class='text-center'>Berita</h2>
        </div>
    </div>

    <div class="row">

        @foreach($news as $newsItem)

            {{--{{dd($newsItem->toArray())}}--}}
            <div class="col-sm-4">
                <img src="" alt="" class="img-responsive">

                <a href="{{url('berita/'. $newsItem->slug)}}">
                    <h3>{{$newsItem->post_title}}</h3>
                </a>

                <div class="attribute">
                    <div class="date"><i class="fal fa-calendar-alt"></i> {{$newsItem->post_date}}</div>
                    <div class="by"><i class="fal fa-user"></i> {{$newsItem->author->display_name}}</div>
                </div>

                <div class="paragraph">
                    {{$newsItem->excerpt}}
                </div>

                <a href="{{url('berita/'. $newsItem->slug)}}">Selengkapnya</a>
            </div>

        @endforeach
    </div>
</div>
