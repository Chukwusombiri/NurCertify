@extends('layouts.adminapp')

@section('content')
<div class="cards">
    <div class="card-single">
        <div>
            <h1>{{count($users)}}</h1>
            <span>Students</span>
        </div>
        <div>
            <span class="las la-users"></span>
        </div>
    </div>
    <div class="card-single">
        <div>
            <h1>{{count($course)}}</h1>
            <span>Course Purchase</span>
        </div>
        <div>
            <span class="las la-coins"></span>
        </div>
    </div>
</div>

<div class="recent-grid">
    <div class="transactions">
        <div class="card">
            <div class="card-header">
                <h2>Recent Transactions</h2>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Student</th>
                                <td>Course Name</td>
                                <td>Date</td>                            
                            </tr>
                        </thead>

                        <tbody>
                           @if (count($course)>0)
                                @foreach ($course as $cour)
                                    <tr>
                                        <td>@if (!empty($cour->user->name))
                                            {{$cour->user->name}}
                                            @else
                                            nil
                                        @endif</td>
                                        <td>{{$cour->courseName}}</td>
                                        <td>{{ date('M d, Y', strtotime($cour->created_at))}}</td>
                                    </tr>
                                @endforeach
                               
                           @else
                                <tr>
                                    <td>No records!!</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                           @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="investors">
        <div class="card">
            <div class="card-header">
                <h2>Newest Investors</h2>

                <a href="/users">See all <span class="las la-arrow-right"></span></a>
            </div>

            <div class="card-body">
                @if (count($users)>0)
                    @foreach ($users as $user)
                        <div class="investor">
                            <div class="info">                                            
                                <div>
                                    <h4>{{$user->name}}</h4>
                                    <small>Enrolled on {{ date('M d, Y', strtotime($user->created_at))}}</small>
                                </div>
                            </div>

                            <div class="contact">
                                <a href="/users/{{$user->id}}"><span class="las la-user-circle"></span></a>
                                <a href="{{ route('singleemail',['id'=>$user->id])}}"><span class="las la-comment"></span></a>
                            </div>
                        </div>
                    @endforeach
                    
                @else
                    <div class="investor">
                        <div class="info">
                            <div>
                                <h4>No records!!</h4>
                            </div>
                        </div>
                    </div>
                @endif                
            </div>
        </div>
    </div>
</div>
@endsection