@extends('layouts.adminapp')

@section('content')

<div id="personalinfo">
    <div class="card">
        <div class="card-header">
            <h2>Student Details</h2>
        </div>
        <div class="card-body">
            <table>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>
                            {{$user->name}}
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <div>{{$user->email}}</div>
                            <div style="margin-left: 8px"><a class="mybtn" href="{{ route('singleemail',['id'=>$user->id])}}">Send</a>                           
                        </td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>
                            <div>{{$user->phone}}</div>
                            <div style="margin-left: 8px"><a class="mybtn" href="tel:{{$user->phone}}">call</a>
                        </td>
                    </tr>
                    <tr>
                        <th>ATT Number</th>
                        <td>
                            @if (!empty($user->lnp))
                                {{$user->lnp}}
                            @else
                                {{''}}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Enrolled</th>
                        <td>
                            {{ date('M d, Y', strtotime($user->created_at))}}
                        </td>
                    </tr>
                                                                           
                    <tr>
                        <th>Action</th>
                        <td>
                            <div style="margin:0 8px;"><a class="mybtn2" href="/users/{{$user->id}}/edit">Edit</a></div>
                            <div style="display:flex;">
                                
                               
                                <div>                                   
                                    <form method="POST" action="/users/{{$user->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mybtn2">
                                            {{ __('Remove') }}
                                        </button>                                  
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="tabledetails">
    <div class="card">
        <div class="card-header">
            <h2>Course Purchased</h2>
        </div>
        <div class="card-body">
            <table class="table">
               
                <tbody>            
                    @if (count($courses)>0)
                        @foreach ($courses as $course)
                            <tr>
                                <th>{{$course->courseName}}</th>
                                <td>Purchased on {{ date('M d, Y', strtotime($course->created_at))}}</td>                                
                            </tr>   
                        @endforeach
                    @else
                        <tr>
                            <th>No record!</th>
                            <td>0 course purchased</td>
                        </tr>   
                    @endif                                     
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection