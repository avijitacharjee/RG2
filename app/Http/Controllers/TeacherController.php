<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.index');
    }
    public function studentRequests()
    {
        $user = DB::select("select * from user where approved='false'");
        //$arr= array($user);
        return view('teacher.studentRequests',[
            'users'=>$user
            ]);
        //return response()->json($user);
    }
    public function approveStudent($id)
    {
        $user= new User();
        $user=$user->find($id);
        $user->approved='true';
        $user->save();
        $user=DB::select("select * from user where approved='false'");
        return view('teacher.studentRequests',[
            'users'=>$user
        ]);
    }
    public function paperRequests()
    {
        $rpaper = new ResearchPaper();
        $papers= $rpaper->all();
        return view('teacher.paperRequests',[
            'papers'=>$papers
        ]) ;
    }
}
