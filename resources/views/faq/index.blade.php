@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel-group" id="faq-accordion" role="tablist" aria-multiselectable="true">

                    @foreach($faqs as $i => $faq)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{$faq->ID}}">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#faq-accordion"
                                       href="#collapse{{$faq->ID}}"
                                       aria-expanded="true" aria-controls="collapse{{$faq->ID}}">
                                        {{$faq->title}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{$faq->ID}}" class="panel-collapse collapse"
                                 role="tabpanel"
                                 aria-labelledby="heading{{$faq->ID}}">
                                <div class="panel-body">
                                    {!! $faq->content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
