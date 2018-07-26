<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
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

       if(!auth()->attempt($credentials)){
           return redirect()->back()->withErrors([
               'message' => 'Bad credentials. Please ty again!'
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
