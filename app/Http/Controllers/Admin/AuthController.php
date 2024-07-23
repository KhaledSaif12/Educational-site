<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    //
    public function login(){
       return view('admin.login');  

    }

    public function checkUser(Request $request){
        //Auth::attempt();
        $isLoggged = Auth::attempt(['email'=>$request->user_email,'password'=>$request->user_pass]);
        if($isLoggged)
        return redirect()->route('addcate');
        return redirect()->back()->with(['message'=>'incorect username or password']);

    }

    public function CreatUser(){
        return view('admin.register');
    }

    public function store(Request $request){
        $user = new User();
        $user->name=$request->user_name;
        $user->email=$request->user_email;
        $user->password=Hash::make($request->user_pass);
        if($user->save())
        return redirect()->route('login');
        return redirect()->back();
         
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
