<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
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


       auth()->login($user);

       return redirect('/');
   }
}
