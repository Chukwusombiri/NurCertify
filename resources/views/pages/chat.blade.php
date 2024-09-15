@extends('layouts.app')

@section('content')
<div class="container" style="margin: 50px auto 70px">
    <div class="bread-crumb"><a href="/">HOME</a> / <a href="/mycourse">BACK</a></div>
    <div class="checkout">
        <div>
            <h3>The Last Step 🥇</h3>    
        </div>    

        <div>
            <p>{{auth()->user()->name}} say <b>'Hi'</b> through the chat window below - <strong>Resource Administrator</strong> is waiting for your message. You will be guided 
                on how to complete your payment and receive your Resource instanty. Alternativey, send us an email and we'll 
                reply you immediately. <b>24/7 Customer Support.</b> </p>
        </div>
    </div>    
</div>   
@endsection