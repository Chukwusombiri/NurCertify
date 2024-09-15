<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AdminDashboardController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        

        $users = DB::table('users')
            ->whereNotIn('email', [config('mail.from.address')])
            ->orderBy('id', 'desc')->get();

        return view('admin.students')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        $user = User::find($id);

        return view('admin.managestudent')->with(['user' => $user, 'courses' => $user->course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        $user = User::find($id);

        return view('admin.editstudent')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        $user = User::find($id);

        $data =  $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users,email,' . $user->id, 'max:255'],
            'phone' => ['required', 'string', 'unique:users'],
        ]);


        $user->update($data);

        return redirect()->back()->with(['success' => 'Profile details updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        $user = User::find($id);
        $deleted = $user->name;
        //check for authorized user
        if (auth()->user()->email !== config('mail.from.address')) {
            return redirect('/');
        }

        $user->delete();


        return redirect('/users')->with('success', $deleted . ' was deleted');
    }
}
