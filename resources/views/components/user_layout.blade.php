<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <title>@yield('title') | First Grade Transport Company</title>
        
        <meta charset="utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = 0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="pet reunite platform for per lovers" />
        <meta name="keywords" content="php backend developer in nigeria; laravel developer; pet app with qrcode; developer, naija techbro; php developer, php backend">
        <meta name="author" content="Obtechng" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <link rel="icon" href="{{ asset('/front/assets/img/logo/ficon.png') }}" type="image/x-icon">
        
        <link rel="stylesheet" href="{{ asset ('/back/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">

        <link rel="stylesheet" href="{{ asset ('/back/assets/plugins/animation/css/animate.min.css') }}">


        <link rel="stylesheet" href="{{ asset ('/back/assets/css/style.css') }}">

    </head>

    <body class="">
        
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>


        {{$slot}}


        <script src="{{ asset ('/back/assets/js/vendor-all.min.js') }}"></script>
        <script src="{{ asset ('/back/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset ('/back/assets/js/pcoded.min.js') }}"></script>

        <script src="{{ asset ('/back/assets/js/custom.js') }}"></script>

    </body>

</html>


