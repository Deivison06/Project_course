<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! $head ?? '' !!}
    <meta name="author" content="freehtml5.co"/>

    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https: //fonts.googleapis.com/css2?family=Miriam+Libre:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix_e('front/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix_e('front/assets/css/style.css') }}">
    @yield('stylesheet')

    <script src="{{mix_e('front/assets/js/modernizr.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="{{mix_e('front/assets/js/respond.js') }}"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">

    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script src="{{ mix_e('front/assets/js/vendor.js') }}"></script>
<script src="{{ mix_e('front/assets/js/main.js') }}"></script>
@yield('scripts')

</body>
</html>
