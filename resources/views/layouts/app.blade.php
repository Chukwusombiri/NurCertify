<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<meta charset="utf-8">
		<meta name="description" content="{{config('app.name')}} - NCLEX Tutorials and License">
		<meta name="keywords" content="NCLEX, registered nurse, Exam success, questions and answers, education, learning management system, modern & creative, online education,school, teaching, training center">
		<meta name="author" content="{{config('app.name')}}">
        <!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{config('app.name')}}- NCLEX Tutorials and License</title>

		<!-- Favicon Icon -->
		<link rel="icon" href="{{url('img/favicon.ico')}}">	
		<!-- Apple Touch Icons -->
		<link rel="apple-touch-icon" href="{{url('img/apple-touch-icon.png')}}">
		<link rel="apple-touch-icon" sizes="16x16" href="{{url('/img/favicon-16x16.png')}}">
		<link rel="apple-touch-icon" sizes="32x32" href="{{url('/img/favicon-32x32.png')}}">	
		<link rel="apple-touch-icon" sizes="192x192" href="{{url('/img/android-chrome-192x192.png')}}">
		<link rel="apple-touch-icon" sizes="512x512" href="{{url('/img/android-chrome-512x512.png')}}">	

	
		<!-- Stylesheets Start -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">  	
		<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
		<link rel="stylesheet" href="{{url('css/icofont.min.css')}}">
		<link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{url('css/animate.css')}}">
		<link rel="stylesheet" href="{{url('css/main.css')}}">	
		<link rel="stylesheet" href="{{url('css/meanmenu.min.css')}}">
		<link rel="stylesheet" href="{{url('css/responsive.css')}}">	


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="antialiased home-v2">
      <x-navbar></x-navbar>
        @yield('content')
      <x-footer></x-footer>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="{{url('js/bootstrap.min.js')}}"></script>
	<script src="{{url('js/isotope.pkgd.min.js')}}"></script>
	<script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('js/owl.carousel.min.js')}}"></script>
	<script src="{{url('js/owl.animate.js')}}"></script>
	<script src="{{url('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{url('js/jquery.counterup.min.js')}}"></script>
	<script src="{{url('js/modernizr.min.js')}}"></script>
	<script src="{{url('js/waypoints.min.js')}}"></script>
	<script src="{{url('js/jquery.meanmenu.min.js')}}"></script>
	<script src="{{url('js/jquery.countdown.js')}}"></script>
	<script src="{{url('js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{url('js/scrollIt.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{config('app.googke_key')}}"></script>
	<script src="{{url('js/custom.js')}}"></script>
</html>
