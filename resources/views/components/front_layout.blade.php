<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') - First Grade Transport Company</title>
	<meta name="description" content="FesGradeTransport - Logistics & Delivery Company HTML template">
	<meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking">
	<meta name="author" content="#obtechng">
	<link rel="shortcut icon" href="{{ asset('/front/assets/img/logo/ficon.png') }}" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{ asset('/front/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/video.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/jquery.mCustomScrollbar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/rs6.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/style.css') }}">
</head>
<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>


    {{ $slot }}


        <!-- For Js Library -->
        <script src="{{ asset('/front/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/appear.js') }}"></script>
        <script src="{{ asset('/front/assets/js/slick.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.filterizr.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.cssslider.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/rbtools.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/rs6.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/script.js') }}"></script>
    </body>
</html>		