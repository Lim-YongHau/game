<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Session;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registeredit(Request $request , $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }

    public function registerupdate(Request $request , $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        Session::flash('statuscode','info');
        return redirect('/role-register')->with('status','Your Data is updated');
    }

    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        Session::flash('statuscode','error');
        return redirect('/role-register')->with('status','Your Data is delete');
       
        
    }


    public function userProfile()
    {
        $users = User::all();
        return view('UserProfile')->with('users',$users);
    }
   

    public function profileedit(Request $request , $id)
    {
        $users = User::findOrFail($id);
        return view('EditProfile')->with('users',$users);
    }

    public function profileupdate(Request $request , $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->address = $request->input('address');
       
        $users->update();

        Session::flash('status','success');
        return redirect('/UserProfile')->with('status','Your Profile Data is updated');
    }
    
}
