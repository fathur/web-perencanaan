@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    @foreach($faqs as $i => $faq)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{$faq->id}}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse{{$faq->id}}" aria-expanded="true"
                                       aria-controls="collapse{{$faq->id}}">
                                        {{$faq->title->rendered}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{$faq->id}}" class="panel-collapse collapse @if($i == 0) in @endif"
                                 role="tabpanel" aria-labelledby="heading{{$faq->id}}">
                                <div class="panel-body">
                                    {!! $faq->content->rendered !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
