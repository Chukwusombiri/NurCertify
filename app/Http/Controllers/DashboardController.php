<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }

        $user = User::find($user_id);;

        return view('dashboard')->with('course', $user->course);
    }


    
 

    public function edit(){
        $user_id = auth()->user()->id;

        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }

        $user = User::find($user_id);;
        return view('pages.usersetting')->with('user', $user);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       $data =  request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email','unique:users,email,' . Auth::user()->id, 'max:255'],
            'phone' => ['required','string', 'unique:users'],            
        ]);

        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }

        $user = User::find(auth()->user()->id);
        $user->update($data);

        return redirect()->back()->with('success', 'Profile details updated');

    }
}
