@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Produk</h3>

                <ul class="list-unstyled">
                    <li><a href="{{url('produk/hukum')}}">Produk Hukum</a></li>
                    <li><a href="{{url('produk/pedoman')}}">Buku Pedoman</a></li>
                    <li><a href="{{url('produk/panduan')}}">Buku Panduan</a></li>
                    <li><a href="{{url('produk/kegiatan')}}">Buku Kegiatan</a></li>
                    <li><a href="{{url('produk/profil')}}">Profil</a></li>
                    <li><a href="{{url('produk/laporan')}}">Laporan Kinerja</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="table-responsive">

                    <h1>{{$title}}</h1>

                    <table class="table table-striped table-hover ">
                        <tr>
                            <th>Judul</th>
                        </tr>

                        @foreach($products as $product)
                            <tr>
                                <td><a href="#">{{$product->title->rendered}}</a></td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
