<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2 class='text-center'>{{$title ?? 'Berita'}}</h2>
        </div>
    </div>

    <div class="row posts">

        @foreach($news as $newsItem)

            <div class="col-sm-4 posts-item">

                @if(!is_null($newsItem->image))
                    <div class="image-container">
                        <img src="{{$newsItem->image}}" alt="{{$newsItem->title}}" class="img-responsive">
                    </div>
                @else
                    <div class="image-container text-center icon">
                        <i class="fal fa-image fa-10x"></i>
                    </div>
                @endif

                <a href="{{url('berita/'. $newsItem->slug)}}">
                    <h3>{{$newsItem->post_title}}</h3>
                </a>

                <div class="attribute">
                    <div class="date"><i class="fal fa-calendar-alt"></i> {{$newsItem->post_date}}</div>
                    <div class="by"><i class="fal fa-user"></i> {{$newsItem->author->display_name}}</div>
                </div>

                <div class="paragraph">
                    {{str_limit($newsItem->excerpt, 200)}}
                </div>

                <a href="{{url('berita/'. $newsItem->slug)}}" class="btn btn-primary btn-sm read-more">Selengkapnya</a>
            </div>

        @endforeach
    </div>
</div>
