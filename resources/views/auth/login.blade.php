@extends('layouts.app')

@section('content')
<div class="myappform-div">
    <h2>Enter Login details below</h2>
    @include('inc.messages')
    <form  method="POST" action="{{ route('login') }}" class="myappform">
        @csrf

        <div class="myappform-group">
            <label for="email" class="myappform-label">{{ __('Email Address') }}</label>            
            <input id="email" type="email" class="myappform-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="myappform-group">
            <label for="password" class="myappform-label">{{ __('Password') }}</label>
            
                <input id="password" type="password" class="myappform-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="myappform-group">
                <div class="myappform-check">
                    <input class="myappform-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="myappform-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
        </div>

            <div class="myappform-group">
                <button type="submit" class="myappbtn">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

    </form>

    <div class="myappform-group">
        <p>Don't have an account yet? <a href="/register">Sign up</a></p>
    </div>
</div>
@endsection
