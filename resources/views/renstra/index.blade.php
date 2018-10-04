@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('product.sidebar')
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>{{$title ?? 'Renstra'}}</h1>
                    </div>
                </div>

                <div class="row posts">
                    <div class="table-responsive">
                        <table class="table table-striped">

                            <tbody>
                            @foreach($posts as $post)

                                <tr>
                                    <td>
                                        <h5>{{$post->title}}</h5>
                                        <div class="attribute">

                                            @if($post->acf->document)
                                                <div class="file {{fa_file($post->acf->document)[1]}}">
                                                    <i class="fal {{fa_file($post->acf->document)[0]}}"></i> {{optional($post->acf->document)->filename}}
                                                </div>
                                            @endif

                                            <div class="excerpt">
                                                <p>{{str_limit($post->excerpt, 100)}}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td style="text-align: center;vertical-align: middle;">
                                        @if($post->acf->document)
                                            <a href="{{optional($post->acf->document)->url}}">
                                                <i class="fal fa-download fa-2x"></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
