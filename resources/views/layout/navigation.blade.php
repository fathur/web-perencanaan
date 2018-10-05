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
                    <span class="title">Direktorat Jenderal Penyediaan Perumahan</span>
                    <span class="subtitle">Direktorat Perencanaan</span>
                </div>
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Profil <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('mission.show')}}">Visi dan Misi</a></li>
                        <li><a href="{{route('organization.show')}}">Struktur Organisasi</a></li>
                        <li><a href="{{route('tasks.show')}}">Tugas dan Fungsi</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Program Kegiatan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('program.index')}}">Program</a></li>
                        <li><a href="{{route('activity.index')}}">Kegiatan</a></li>
                        <li><a href="{{route('agenda.index')}}">agenda</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Produk <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('renstra.index')}}">Renstra</a></li>
                        <li><a href="{{route('lakip.index')}}">LAKIP</a></li>
                        <li><a href="{{route('regulation.index')}}">Peraturan</a></li>
                        <li><a href="{{route('guideline.index')}}">Buku Pedoman/Panduan</a></li>
                        <li><a href="{{route('application.index')}}">Aplikasi</a></li>
                        {{--<li><a href="{{route('product.law.show')}}">Produk Hukum</a></li>--}}
                        {{--<li><a href="{{route('product.hand-book.show')}}">Buku Pedoman</a></li>--}}
                        {{--<li><a href="{{route('product.guideline.show')}}">Buku Panduan</a></li>--}}
                        {{--<li><a href="{{route('product.profile.show')}}">Buku Profil</a></li>--}}
                        {{--<li><a href="{{route('product.activity.show')}}">Buku Kegiatan</a></li>--}}
                        {{--<li><a href="{{route('product.report.show')}}">Laporan Kinerja</a></li>--}}
                        {{--<li><a href="{{route('product.bulletin.show')}}">Buletin</a></li>--}}
                    </ul>
                </li>

                <li><a href="{{route('news.index')}}">Berita</a></li>
                {{--<li><a href="{{route('agenda.index')}}">Agenda</a></li>--}}

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
