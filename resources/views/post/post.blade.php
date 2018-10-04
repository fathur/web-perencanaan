<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2 class='text-center'>{{$title ?? 'Berita'}}</h2>
        </div>
    </div>

    <div class="row posts">

        @foreach($posts as $post)

            <div class="col-sm-4 posts-item">

                @if(!is_null($post->image))
                    <div class="image-container">
                        <img src="{{$post->image}}" alt="{{$post->title}}" class="img-responsive">
                    </div>
                @else
                    <div class="image-container text-center icon">
                        <i class="fal fa-image fa-10x"></i>
                    </div>
                @endif

                <a href="{{url($base_more_link. $post->slug)}}">
                    <h3>{{$post->post_title}}</h3>
                </a>

                <div class="attribute">
                    <div class="date"><i class="fal fa-calendar-alt"></i> {{$post->post_date}}</div>
                    <div class="by"><i class="fal fa-user"></i> {{$post->author->display_name}}</div>
                </div>

                <div class="paragraph">
                    {{str_limit($post->excerpt, 200)}}
                </div>

                <a href="{{url($base_more_link . $post->slug)}}" class="btn btn-primary btn-sm read-more">Selengkapnya</a>
            </div>

        @endforeach
    </div>
</div>
