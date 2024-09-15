@extends('layouts.app')

@section('content')
<div class="mycontainer">
<div class="mydashboard">
    @include('inc.messages')
    <div class="mydashboardheader">
        <div class="mydashboardheader_img">
            <img src="{{url('/img/user_avatar.png')}}" alt="">
        </div>
        <div class="mydashboardheader_content">
            <h3>Hi! {{auth()->user()->name}}</h3>
            <p><i class="fas fa-mail"></i> {{auth()->user()->email}}</p>
            <p><i class="fas fa-phone"></i> {{auth()->user()->phone}}</p>
            <p><i class="fas fa-calender"></i>Enrolled on {{ date('M d, Y', strtotime(auth()->user()->created_at))}}</p>
        </div>
    </div>
    <hr style="color: #000;">
    <div class="mydashboardbody">
        <div class="mydashboardbody_img">
            <img src="{{url('/img/welcomedark.jpg')}}" alt="">
        </div>
        <hr>
        <div class="thingtodo">
            <h4>
                Things to do                
            </h4>
           <div class="thingstodogrid">
               
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{url('img/promo_3.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Direct License</h5>
                    <p class="card-text">You can get your RN license by just one click! Try it..</p>
                    <a href="{{ route('getResource', ['data' => 'License']) }}" class="myappbtn">Get License</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{url('img/promo-1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Question and Answers</h5>
                      <p class="card-text">FACT: Get the exact questions and it’s answers before your exam day.</p>
                      <a href="{{ route('getResource', ['data' => 'Questions and Answers']) }}" class="myappbtn">Access Q & A</a>
                    </div>
                  </div>

                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{url('img/promo-2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Tutorial</h5>
                      <p class="card-text">Check out our time-based tutorials just like the actual exams</p>
                      <a href="{{ route('getResource', ['data' => 'Tutorials']) }}" class="myappbtn">View now</a>
                    </div>
                  </div>
           </div>
        </div>
        <div class="mydashboardbody_content">
           <div class="row">
               <div class="col-md-5 col-sm-12 mycard" style="">
                    <h4>Your Courses</h4>
                    <ul>
                        @if (count($course)>0)
                            @foreach ($course as $cour)
                                <li>
                                    <p><a href="#">{{$cour->courseName}}</a></p>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <p>You haven't purchased any course yet.</p>
                            </li>
                        @endif
                        
                    </ul>
                    @if (count($course)>5)
                        <p><a href="/mycourse" class="myappbtn">view all</a></p>                   
                    @endif
                    
               </div>
               <div class="col-md-1 col-sm-12"></div>
               <div class="col-md-5 col-sm-12 mycard">
                  
                       
                  
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th> <h4>Activity Log</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="padding: 10px 0;">
                                    <td>You registered with {{config('app.name')}} on<br><span>{{ date('M d, Y', strtotime(auth()->user()->created_at))}}</span></td>
                                </tr>
                            </tbody>
                        </table>
                  
               </div>
           </div>
        </div>
    </div>
</div>
</div>
@endsection
