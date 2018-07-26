<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmation;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function show()
    {
        return view('auth.create');
    }

    public function store()
    {
        $this->validate(request(), [
            "name"=>"required",
            "email"=>"required|email|unique:users",
            "password"=>"required|confirmed|min:6"

        ]);

        $user= User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);


        Mail::to($user)->send(new RegistrationConfirmation($user));

        return redirect('/login');
    }

    public function verify($id)
    {   
        
        User::where('id',$id)->update(['is_verified' => 1]);

        return redirect('/login');
    }
}
