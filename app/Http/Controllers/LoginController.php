<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function show()
    {
        return view('auth.login');
    }

    public function store()
    {
        $this->validate(request(), [

            "email"=>"required|email",
            "password"=>"required"
        ]);

        $credentials = request()->only(['email','password']);
        // $credentials['is_verified']=1;



       if(!auth()->attempt($credentials)){
           return redirect()->back()->withErrors([
               'message' => 'Bad credentials. Please ty again!'
           ]);
       }

       if(auth()->user()->is_verified == 0)
       {
           auth()->logout();
           return redirect()->back()->withErrors([
            'message' => 'Please check your email for verification!'
        ]);
       }



        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }


}
