<header>
    <!-- Header Topbar Start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="header-menu">
                        <a href="#">OPENS | MON - FRI | 8AM - 5PM (UTC)</a>						
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 text-right">
                    <div class="header-info">
                        <ul>
                            <li><a href="tel:{{$phone}}"><i class="fa fa-phone" aria-hidden="true"></i>{{$phone}}</a></li>													
                            <li><a href="mailto:{{$email}}"><i class="fa fa-envelope" aria-hidden="true"></i>{{$email}}</a></li>												
                        </ul>				
                </div>				
            </div>
        </div>
    </div>
    <!-- Header Topbar End -->
    <!-- Main Bar Start -->
    <div class="hd-sec" style="background-color: #fff;padding: 0px 10px;box-shadow: 0px 8px 8px -8px rgba(0,0,0,0.5)">
        <div class="container">
            <div class="row">
                <!-- Logo Start -->
                <div class="col-md-3 col-sm-3 col-xs-8">
                    <div class="logo">
                        <a href="/"><img src="{{url('img/logo.png')}}" style="max-height: 35px !important"/></a>
                    </div>
                </div>	
                <!-- Logo End -->
                <!-- Main Menu Start -->
                <div class="mobile-nav-menu"></div>						
                <div class="col-md-9 col-sm-9 nav-menu">
                    <div class="menu">
                        <nav id="main-menu" class="main-menu">
                            <ul>   
                                <li class="active"><a href="/">Home</a></li> 									
                                <li><a href="/about">about us</a></li> 														
                                							
                                <li><a href="#">course</a>
                                    <ul>
                                        @auth
                                        <li><a href="{{ route('getResource', ['data' => 'License']) }}">Direct License</a></li>	
                                        <li><a href="{{ route('getResource', ['data' => 'Questions and Answers']) }}">Questions and Answers</a></li>	
                                        <li><a href="{{ route('getResource', ['data' => 'Tutorials']) }}">NCLEX Tutorials</a></li>
                                        @else
                                         <li><a href="/login">Direct License</a></li>	
                                        <li><a href="/login">Questions and Answers</a></li>	
                                        <li><a href="/login">NCLEX Tutorials</a></li>
                                        @endauth
                                    </ul>								
                                </li>									
                                														
                                <li><a href="/team">Tutors</a></li>                                   
                                
                                <li><a href="/contact">Contact us</a></li>
                                
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="/login" style="background-color:#818cf8;
                            color:#fff;border: none; border-radius:5px; padding: 5px 10px"
                             href="{{ route('login') }}">{{ __('Sign-in') }}</a>
                        </li>
                    @endif                   
                @else
                    <li>
                        <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <ul aria-labelledby="navbarDropdown">
                            <li><a href="{{route('dashboard')}}"> Account</a></li>
                            <li><a href="{{route('mycourse')}}">My Resources</a></li>                        
                            <li><a href="/usersetting"> Setting</a></li>
                            <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                        </ul>
                    </li>
                @endguest
                            </ul>                           
                        </nav>
                    </div>					
                </div>	
                <!-- Main Menu End -->
               
            </div>
        </div>
    </div>
    <!-- Main Bar End -->
</header>