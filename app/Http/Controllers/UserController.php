<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function register()
    {
        return view('user.register');
    }
    public function insert(Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|alphaNum|min:3'
        ],
        [
            'name.required' => 'Name is required',
            'email.required'=>'Email is required',
            'password.required'=>'Password is required'  ,
            'password.min'=>'The password must be atleast 3 characters'  
        ]
    
        );

        $user = new User();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();
        return 'saved successfully';
    }
}
