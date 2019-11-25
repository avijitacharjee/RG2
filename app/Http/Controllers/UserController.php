<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use App\ResearchPaper;
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
        $user->approved='false';
        $user->save();
        return 'saved successfully';
    }
    public function profile($id)
    {
        $user = User::find($id);
        //return $user;
        return view('user.profile',[
            'user'=>$user,
        ]);
    }

    public function delete($id)
    {
        $user= new User();
        $user=$user->find($id);
        $user->delete();
        $user=DB::select("select * from user where approved='false'");
        return view('teacher.studentRequests',[
            'users'=>$user
        ]);
    }
    public function submitPaperG(Request $request)
    {
        return view('user.submitPaper');
    }
    public function submitPaper(Request $request)
    {
        $validation = $request->validate([
            'researchPaper'=>'required|mimetypes:application/pdf',
            'description'=>'required',
        ],
        [
            'researchPaper.required' => 'Please select a file',
            'researchPaper.mimetypes:application/pdf'=>'Please select pdf',
        ]
    
        );

        $file=$request->file('researchPaper');
        $loc= $request->researchPaper->storeAs('pdf', $request->researchPaper->getClientOriginalName());
        

        //Model->ResearchGateway
        $rpaper = new ResearchPaper();
        $rpaper->pdf_name=$request->name;
        $rpaper->pdfLocation = $loc;
        $rpaper->description = $request->description;
        $rpaper->save();
        return $request;
    }
}
