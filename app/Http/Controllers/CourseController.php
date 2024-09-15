<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;


class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $user_id = auth()->user()->id;

        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }

        $user = User::find($user_id);;       
        return view('pages.mycourse')->with('course', $user->course);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'courseName' => ['required','string',
            Rule::in(['License', 'Past Questions and Answers','Tutorials']),],
            'lnp' => 'string',
        ]);

        $course = new Course();
        $course->courseName = $request->input('courseName');
        $course->user_id = auth()->user()->id;       

        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }

        $course->save();

        if(!empty($request->input('lnp'))){

           
            $user = User::find(auth()->user()->id);
            $user->lnp = $request->input('lnp');
            $user->save();
        }

        return redirect('/chat');

    }    
}
