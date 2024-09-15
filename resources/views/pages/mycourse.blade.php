@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="myappform-div">
            <div class="row">
                <div class="col-12">
                  <h2>My Resources</h2>
                </div>



                
               
           



                @include('inc.messages')
                <div class="col-sm-12 col-md-12">
                    <div class="myappform-group">
                        <table class="table table-striped" style="color: #475569;">
                            <thead>
                              <tr>
                                <th scope="col">My Purchased Resources</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if (count($course)>0)
                                @foreach ($course as $cour)
                                  <tr>
                                      <th scope="row" class="p-4"><a href="#">{{$cour->courseName}}</a></th>
                                  </tr>
                                @endforeach
                              @else
                                <tr>
                                  <th scope="row" class="p-4"><a href="#"> You haven't purchased any resource !!</a></th>                               
                                </tr>  
                              @endif
                                                          
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="thingtodo" style="margin-bottom: 70px">
            <h4>
                Resources you can acquire                
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
    </div>
@endsection