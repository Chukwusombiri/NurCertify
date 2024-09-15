@extends('layouts.adminapp')

@section('content')
<div class="investors">
   
    <div class="card">
        <div class="card-header">
            <h2>Purchased Course</h2>            
        </div>

        <div class="card-body">
            <div class="card-body">
                <span style="margin-right: 10px"></span> @include('inc.messages')
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Course</th>                                
                                <td>Purchased by</td>
                                <td>Purchased on</td>
                                <td>Action</td>                        
                            </tr>
                        </thead>

                        <tbody>
                        @if (count($courses)>0)
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{$course->courseName}}</td>
                                        <td>@if (!empty($course->user->name))
                                            {{$course->user->name}}
                                            @else
                                            nil
                                        @endif</td>
                                        <td>{{ date('M d, Y', strtotime($course->created_at))}}</td>
                                        <td>
                                            <form  method="POST" action="/courses/{{$course->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="mybtn2">
                                                    {{ __('Remove') }}
                                                </button>                                  
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            
                        @else
                                <tr>
                                    <td>No records!!</td>
                                    <td></td>
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
</div>    
@endsection