@extends('layouts.adminapp')

@section('content')
<div id="singleemail" class="emailpage">
    <div>
        <h2>Send Email to Student</h2>
    </div>
    <div>
       
        @include('inc.messages')
        <form class="mailform" action="/email" method="post">
            @csrf

        <label for="subject">{{ __('Subject') }}</label>
        <input type="text" name="subject" id="subject" class="@error('subject') is-invalid @enderror" value="{{ old('subject')}}" placeholder="Subject..." required>
        @error('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <label for="msg">{{ __('Message') }}</label>
        <textarea name="msg" id="msg" class="@error('msg') is-invalid @enderror" value="{{ old('msg')}}" placeholder="Message..." required></textarea>
        @error('subject')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <label for="email">{{ __('Add Recipient') }}</label>
        <select class="form-select text-dark mb-3 @error('msg') is-invalid @enderror" name="email" id="email">                
                @if (isset($single->email))
                    <option value="{{$single->email}}" selected>{{$single->email}}</option>
                @else
                    @if (isset($users) && count($users)>0)
                        <option selected>Select Recipient</option>
                        @foreach ($users as $user)
                            <option value="{{$user->email}}">{{$user->email}}</option>
                        @endforeach
                    @else
                        <option selected disabled>0 student email</option>
                    @endif
                @endif               
            </select>
            
            <button type="submit" class="mybtnform">
            {{ __('Send') }}
            </button>
        </form>
    </div>
</div>
@endsection