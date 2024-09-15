<?php

namespace App\Http\Controllers;

use App\Mail\AdminMailer;
use App\Models\User;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Gate;

class AdminPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function singleemail($id=null){

        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        

        if(User::find($id)){
            $user = User::find($id);
            return view('admin.singleemail')->with('single',$user);
        } else {
            $users = DB::table('users')
            ->whereNotIn('email', [config('mail.from.address')])
            ->orderBy('id','desc')->get();

            return view('admin.singleemail')->with('users', $users);
        }

    }

    public function sendmail(Request $request){        
        $this->validate($request,[
            'subject' => ['required','string','max:255'],
            'msg' => ['required','string'],
            'email'=>['required','email',]
        ]);

        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        

        $user = User::where('email',$request->email)->get();        

        if($user != null) {
            $email = $request->email;
            $msg = $request->msg;
            $subject = $request->subject;

            Mail::to( $email)->send(new AdminMailer($msg, $subject));
            
            return redirect('/singleemail')->with('success','Email was sent successfully');
            
        } else {

            return redirect()->back()->with('error','email address not recognized!');
        }
    }


    public function resetpwd(){
        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        return view('admin.adminpasswordreset');
    }

    public function reset(Request $request){

        if (! Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
       request()->validate([
           'current_password' => ['required'],
           'new_password' => ['required','confirmed', Rules\Password::defaults()]
       ]);

       if (! Hash::check($request->current_password, $request->user()->password)) {
            return back()->with([
                'error' => 'The provided password does not match our records.',
            ]);
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('success','Password changed successfully');
    }
}
