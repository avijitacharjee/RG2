<?php

namespace App\Http\Controllers;

use App\User;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msg="abdc";
       // return view('login.index',compact('msg'))->with('a',$msg);
        return view('login.index',[
            'a'=>$msg,
            'msg'=>$msg,
            'message'=>$msg
        ]);
    }

    public function b()
    {
        return "Hello from B";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login(Request $request)
    {
        $validation = $request->validate([
            'email'=>'required',
            'password'=>'required|alphaNum|min:3'
        ],
        [
            'email.required'=>'Email is required',
            'password.required'=>'Password is required'  ,
            'password.min'=>'The password must be atleast 3 characters'  
        ]
    
        );

        $email=$request['email'];
        $password=$request['password'];

       
        $admin = DB::select("select * from admin where email='$email' AND password='$password'");
        $user =  DB::table('user')->where([
            ['email', '=', '$email'],
            ['password', '=', '$password'],
        ]);
        $teacher = DB::select("select * from teacher where email='$email' AND password='$password'");
        if($admin!=null)
        {
            return view('admin.index');
        }
        else if($teacher!=null)
        {
            return view('teacher.index');
        }
        else if($user!=null){
            return view('user.index');
        }
        return view('login.index',[
            'f'=>'Invalid email/password'
        ]);

        

       /*  $user=(object) $request->all();
        $email=$user->email;
        $name=$request['password'];
        if($email=="")
        {
            return view('login.index',[
                'message'=>'Must include email and password'
            ]);
        }
        return view('login.index',[
            'message'=>'succesfull'
        ]); */
    }
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
