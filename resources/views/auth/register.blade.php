@extends('layouts.app')

@section('content')
<div class="myappform-div">
    <h2>Enter Sign-up details below</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

                        <div class="myappform-group">
                            <label for="name" class="myappform-label">{{ __('Name') }}</label>

                            
                                <input id="name" type="text" class="myappform-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="myappform-group">
                            <label for="email" class="myappform-label">{{ __('Email Address') }}</label>

                            
                                <input id="email" type="email" class="myappform-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="myappform-group">
                            <label for="phone" class="myappform-label">{{ __('Phone') }}</label>

                            
                                <input id="phone" type="text" class="myappform-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone')  }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="myappform-group">
                                <label for="password" class="myappform-label">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="myappform-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="myappform-group">
                            <label for="password-confirm" class="myappform-label">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="myappform-control" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>

                        <div class="myappform-group">
                            
                                <button type="submit" class="myappbtn">
                                    {{ __('Register') }}
                                </button>
                          
                        </div>
    </form>
    <div class="myappform-group">
        <p>Already have an account yet? <a href="/login">Sign in</a></p>
    </div>
</div>
@endsection
