@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="checkout">
            <div class="row">
                <div class="col sm-12 col-md-5 col-lg-6 check_img"></div>
                <div class="col-sm-12 col-md-7 col-lg-6 checkout_note">
                    <h4>Imortant Notice!!!</h4>
                    <p>You are about to purchase {{$data}} from our resources. After you click "Proceed", 
                        go ahead to contact the admins through the chat window on the Home Page 
                    for further directives on how to complete the {{$data}} purchase.</p>
                    <div>
                        <form method="POST" action="/p">
                            @csrf
                            <input id="courseName" type="hidden" class=" @error('courseName') is-invalid @enderror" name="courseName" value="{{ $data }}" required autocomplete="courseName" autofocus>
                
                            @error('courseName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if ($data === 'License' || $data ==='Questions and Answers')
                                <div class="myappform-group">
                                    <label for="lnp" class="myappform-label">{{ __('Enter ATT Number') }}</label>
                                    <input id="lnp" type="text" style="border-bottom:1px solid #475569"
                                     class="myappform-control @error('lnp') is-invalid @enderror" 
                                     name="lnp" value="{{ old('lnp') }} " required autocomplete="lnp" autofocus>
                        
                                    @error('lnp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
                            
                            <div class="myappform-group">
                                            
                                <button type="submit" class="myappbtn">
                                    {{ __('Proceed') }}
                                </button>
                          
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>        
@endsection