@extends('layout.main')

@section('content')
    @include('post.post')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
