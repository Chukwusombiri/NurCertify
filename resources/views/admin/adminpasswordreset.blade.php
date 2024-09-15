@extends('layouts.adminapp')

@section('content')
<div id="adminpasswordreset" class="recent-grid">
    <div id="adminpasswordresetform" class="card">
        <div class="card-header">
            <h2>RESET PASSWORD</h2>
        </div>
       


        <div class="card-body">
            @include('inc.messages')
            <form class="myform" action="{{route('reset')}}" method="post">
                @csrf
                @method('PATCH')                            
                    <div>
                        <label for="current_password">{{ __('Current Password') }}</label>
                        <input type="password" class="@error('current_password') is-invalid @enderror" id="current_password" name="current_password" required>
                        @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="new_password">{{ __('New Password') }}</label>

                            
                        <input id="new_password" type="password" class="@error('new_password') is-invalid @enderror" name="new_password" required>

                        @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   
                    <div>
                        <label for="new_password-confirm">{{ __('Confirm Password') }}</label>

                            
                        <input id="new_password-confirm" type="password" name="new_password_confirmation" required>             

                    </div>
                    
                    <button type="submit" class="mybtnform">
                        {{ __('Save') }}
                    </button>
            </form>
        </div>


    </div>
</div>
@endsection