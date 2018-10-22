<div class="container-fluid footer footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <address>
                    Kementerian PUPR <br>
                    Jl. Pattimura No. 20 Kebayoran Baru <br>
                    Jakarta Selatan 12110 <br>
                    (021) 7228497 <br>
                    informasi@pu.go.id
                </address>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li><a href="{{route('sitemap')}}">Sitemap</a></li>
                    <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                    <li><a href="{{route('contact.show')}}">Hubungin Kami</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid footer footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               &copy; {{Carbon\Carbon::now()->year}} Copyright Direktorat Perencanaan Penyediaan Perumahan All Rights Reserved
            </div>
            {{--<div class="col-md-6"></div>--}}
        </div>
    </div>
</div>
