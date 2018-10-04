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
                        <h1>{{$title}}</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped">

                            <tbody>
                            @foreach($products as $product)

                                <tr>
                                    <td>
                                        <h5>{{$product->title}}</h5>
                                        <div class="attribute">

                                            @if($product->acf->document)
                                                <div class="file {{fa_file($product->acf->document)[1]}}">
                                                    <i class="fal {{fa_file($product->acf->document)[0]}}"></i> {{optional($product->acf->document)->filename}}
                                                </div>
                                            @endif

                                            <div class="excerpt">
                                                <p>{{str_limit($product->excerpt, 100)}}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td style="text-align: center;vertical-align: middle;">
                                        @if($product->acf->document)
                                            <a href="{{optional($product->acf->document)->url}}">
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
