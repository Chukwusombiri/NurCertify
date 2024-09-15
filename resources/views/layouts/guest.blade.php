<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Favicon Icon -->
		<link rel="icon" href="{{url('img/favicon.ico')}}">	
		<!-- Apple Touch Icons -->
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="16x16" href="{{url('/img/favicon-16x16.png')}}">
		<link rel="apple-touch-icon" sizes="32x32" href="{{url('/img/favicon-32x32.png')}}">	
		<link rel="apple-touch-icon" sizes="192x192" href="{{url('/img/android-chrome-192x192.png')}}">
		<link rel="apple-touch-icon" sizes="512x512" href="{{url('/img/android-chrome-512x512.png')}}">	


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
