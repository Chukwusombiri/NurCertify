@extends('layouts.adminapp')

@section('content')
<div class="investors">
   
    <div class="card">
        <div class="card-header">
            <h2>Students</h2>            
        </div>

        <div class="card-body">
            <div class="card-body">
                <span style="margin-right: 10px"></span> @include('inc.messages')
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>                                
                                <td>Enrolled</td>
                                <td>Action</td>                        
                            </tr>
                        </thead>

                        <tbody>
                        @if (count($users)>0)
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        
                                        <td>{{ date('M d, Y', strtotime($user->created_at))}}</td>
                                        <td>
                                            <a href="/users/{{$user->id}}" style="margin-right: 10px">Show</a>                                          
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