<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Perencanaan PU</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @stack('styles')

    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('style')
</head>

<body>

<!-- Fixed navbar -->
<div class="container">
    @include('layout.navigation')
</div> <!-- /container -->

<div class="wrapper-content">
    @yield('content')
</div>

@include('layout.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

@stack('scripts')

<script src="{{asset(mix('js/scripts.js'))}}"></script>

@stack('script')

</body>
</html>
