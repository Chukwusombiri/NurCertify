<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;

class PagesController extends Controller
{
    

    public function index(){
        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        return view('index');
    }

    public function about(){
        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }
        return view('pages.about');
    }

    public function contact(){
        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        return view('pages.contact');
    }

    public function team(){
        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        return view('pages.team');
    }

    public function getResource($data){
        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }
        
        $material = $data;

        if(($material === 'Tutorials') || ($material === 'Questions and Answers') || ($material === 'License')){

            return view('pages.checkout')->with('data',$material);
                

        }else{

            return redirect('/')->with('error','Unauthorized access');
        }

    }


    public function contactmail(Request $request){

        $this->validate($request,[
            'subject' => ['required','string','max:255'],
            'msg' => ['required','string'],
            'email'=>['required','email',]
        ]);

            $email = $request->email;
            $msg = $request->msg;
            $subject = $request->subject;
         
            if (Gate::allows('seeAdminPages')) {
                abort(403);
            }
            

        if(Mail::to(config('mail.from.address'))->send(new ContactMail($email,$msg, $subject))){
            
            
            return redirect('/contact')->with('success','THANK YOU FOR CONTACTING US!!');
            
        } else {

            return redirect()->back()->with('error','Unknown error. Try again!');
        }
    }

    public function chatting(){
        if (Gate::allows('seeAdminPages')) {
            abort(403);
        }

        return view('pages.chat');
    }
}
