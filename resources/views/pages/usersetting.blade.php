@extends('layouts.app')

@section('content')
    <div class="container" style="margin: 50px auto">
        <div class="mydashboardheader">
            <div class="mydashboardheader_img">
                <img src="{{url('/img/user_avatar.png')}}" alt="">
            </div>
            <div class="mydashboardheader_content">
                <h3>{{auth()->user()->name}}</h3>
                <p><i class="fas fa-mail"></i> {{auth()->user()->email}}</p>
                <p><i class="fas fa-phone"></i> {{auth()->user()->phone}}</p>
                <p><i class="fas fa-calender"></i>Enrolled on {{ date('M d, Y', strtotime(auth()->user()->created_at))}}</p>
            </div>
        </div>
        <hr>
        <div class="row" style="margin-top:50px">
            <div class="col-md-12 col-sm 12 text-center">
                <h4>YOUR PROFILE DETAILS</h4>
            </div>
            <div class="col-md-12 col-sm 12">
                <div class="myappform-div">
                    @include('inc.messages')
                    <form method="POST" action="/usersetting/{{$user->id}}">
                        @csrf
                        @method('PATCH')
                                        <div class="myappform-group">
                                            <label for="name" class="myappform-label">{{ __('Name') }}</label>
                
                                            
                                                <input id="name" type="text" class="myappform-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name}}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                           
                                        </div>
                
                                        <div class="myappform-group">
                                            <label for="email" class="myappform-label">{{ __('Email Address') }}</label>
                
                                            
                                                <input id="email" type="email" class="myappform-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email}}" required autocomplete="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                        </div>
                
                                        <div class="myappform-group">
                                            <label for="phone" class="myappform-label">{{ __('Phone') }}</label>
                
                                            
                                                <input id="phone" type="text" class="myappform-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->phone }}" required autocomplete="phone">
                
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                           
                                        </div>            
                
                                        <div class="myappform-group">
                                            
                                                <button type="submit" class="myappbtn">
                                                    {{ __('Save') }}
                                                </button>
                                          
                                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection