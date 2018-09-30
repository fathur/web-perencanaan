<nav class="navbar nav-down navbar-pu navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('images/logo.jpg')}}" alt="PUPR">

                <div class="brand-text">
                    <span class="title">Kementerian Pekerjaan Umum dan Perumahan Rakyat</span>
                    <span class="subtitle">Direktorat Perencanaan</span>
                </div>
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Tentang Kami <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('organization.show')}}">Organisasi</a></li>
                        <li><a href="{{route('tasks.show')}}">Tupoksi</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Produk <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('product.law.show')}}">Produk Hukum</a></li>
                        <li><a href="{{route('product.hand-book.show')}}">Buku Pedoman</a></li>
                        <li><a href="{{route('product.guideline.show')}}">Buku Panduan</a></li>
                        <li><a href="{{route('product.profile.show')}}">Buku Profil</a></li>
                        <li><a href="{{route('product.activity.show')}}">Buku Kegiatan</a></li>
                        <li><a href="{{route('product.report.show')}}">Laporan Kinerja</a></li>
                        <li><a href="{{route('product.bulletin.show')}}">Buletin</a></li>
                    </ul>
                </li>

                <li><a href="{{route('news.index')}}">Berita</a></li>
                <li><a href="{{route('agenda.index')}}">Agenda</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Galeri <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('photo.index')}}">Foto</a></li>
                        <li><a href="{{route('video.index')}}">Video</a></li>
                        <li><a href="{{route('poster.index')}}">Poster</a></li>
                    </ul>
                </li>

                <li><a href="{{route('faq.index')}}">FAQ</a></li>
                <li><a href="{{route('contact.show')}}">Kontak</a></li>

            </ul>
        </div>
    </div>
</nav>