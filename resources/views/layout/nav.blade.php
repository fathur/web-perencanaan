<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Perencanaan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('profil/struktur-organisasi')}}">Struktur Organisasi</a></li>
                        <li><a href="{{url('profil/tupoksi')}}">Tupoksi</a></li>
                        <li><a href="{{url('profil/sejarah')}}">Sejarah</a></li>
                    </ul>
                </li>

                <li><a href="{{url('berita')}}">Berita</a></li>
                <li><a href="{{url('agenda')}}">Agenda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('produk/hukum')}}">Produk Hukum</a></li>
                        <li><a href="{{url('produk/pedoman')}}">Buku Pedoman</a></li>
                        <li><a href="{{url('produk/panduan')}}">Buku Panduan</a></li>
                        <li><a href="{{url('produk/profil')}}">Profil</a></li>
                        <li><a href="{{url('produk/kegiatan')}}">Buku Kegiatan</a></li>
                        <li><a href="{{url('produk/laporan')}}">Laporan Kinerja</a></li>
                    </ul>
                </li>
                <li><a href="{{url('faq')}}">FAQ</a></li>

                <li><a href="{{url('kontak')}}">Kontak</a></li>

            </ul>
           
        </div><!--/.nav-collapse -->
    </div>
</nav>
