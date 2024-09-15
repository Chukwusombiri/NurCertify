@extends('layouts.adminapp')

@section('content')
<div id="updateinvestorinfo" class="recent-grid">
    <div id="updateinvestorinfo">
        <div>
            <a class="backlink" href="/users/{{$user->id}}">Go back</a>
        </div>
        <div class="card">
            <div class="card-header">
                Edit Student's Details
            </div>

                <div class="card-body">
                   @include('inc.messages')
                    
                    <form class="myform" method="POST" action="/users/{{$user->id}}">
                        @csrf
                        @method('PATCH')                                       
                                            <label for="name">{{ __('Name') }}</label>
                
                                            
                                                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name}}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                           
                                   
                
                                       
                                            <label for="email">{{ __('Email Address') }}</label>
                
                                            
                                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email}}" required autocomplete="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                      
                
                                       
                                            <label for="phone">{{ __('Phone') }}</label>
                
                                            
                                                <input id="phone" type="text" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->phone }}" required autocomplete="phone">
                
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                           
                         
                
                                      
                                            
                                                <button type="submit" class="mybtnform">
                                                    {{ __('Save') }}
                                                </button>
                                          
                                      
                    </form>
               
                </div>
        </div>
    </div>
</div>
@endsection