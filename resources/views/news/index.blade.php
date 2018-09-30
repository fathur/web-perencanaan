@extends('layout.main')

@section('content')
    @include('news.news')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection
