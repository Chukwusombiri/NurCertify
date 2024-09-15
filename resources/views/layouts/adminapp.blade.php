<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta charset="utf-8">
	<meta name="description" content="NCLEX Tutorials and License">
	<meta name="keywords" content="NCLEX, registered nurse, Exam success, questions and answers, education, learning management system, modern & creative, online education,school, teaching, training center">	
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}- ADMIN</title>

    <link rel="icon" href="{{url('img/favicon.ico')}}">	

    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="16x16" href="{{url('/img/favicon-16x16.png')}}">
	<link rel="apple-touch-icon" sizes="32x32" href="{{url('/img/favicon-32x32.png')}}">	
	<link rel="apple-touch-icon" sizes="192x192" href="{{url('/img/android-chrome-192x192.png')}}">
	<link rel="apple-touch-icon" sizes="512x512" href="{{url('/img/android-chrome-512x512.png')}}">	

    <link rel="stylesheet" href="{{url('lineawesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/adminstyle.css')}}">
</head>

<body class="antialiased">
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="{{url('img/logo.png')}}" style="max-height: 35px !important"/>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/admindashboard" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>

                <li>
                    <a href="/users"><span class="las la-users"></span><span>Students</span></a>
                </li>
                <li>
                    <a href="/courses"><span class="las la-download"></span><span>Course Purchased</span></a>
                </li>
               
                <li>
                    <a href="{{ route('singleemail')}}"><span class="las la-file-upload"></span><span>Send Email</a>                    
                </li>
                 
                <li>
                    <a href="{{ route('resetpwd')}}"><span class="las la-tools"></span><span>Change Password</span></a>
                </li>
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><span class="las la-sign-out-alt"></span><span> {{ __('Logout') }}</span>            
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form></li>               
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header class="header">
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                <img src="{{url('img/logo.png')}}" style="max-height: 35px !important"/>
            </h2>           

            <div class="user-wrapper">                
                <div>
                    <h4>ADMIN</h4>                   
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>