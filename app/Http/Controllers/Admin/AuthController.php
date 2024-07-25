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
        return redirect()->route('list_article');
        return redirect()->back()->with(['message'=>'incorect username or password']);

    }

    public function CreatUser(){
        return view('admin.register');
    }

    public function store(Request $request){

        $validate = Validator($request->all(), [
            'user_name' => 'required|string|min:5|max:20',
            'user_email' => 'required|email|unique:users,email',
            'user_pass' => 'required|string| min:8'
           
        ], [
            'user_name.required' => 'اسم المستخدم مطلوب',
            'user_name.string' => 'اسم المستخدم يجب أن يكون نصاً',
            'user_name.min' => 'اسم المستخدم يجب أن لا يقل عن 5 حروف',
            'user_name.max' => 'اسم المستخدم يجب أن لا يزيد عن 20 حرفاً',
            'user_email.required' => 'البريد الإلكتروني مطلوب',
            'user_email.email' => 'البريد الإلكتروني يجب أن يكون بصيغة صحيحة',
            'user_email.unique' => 'البريد الإلكتروني مستخدم بالفعل',
            'user_pass.required' => 'كلمة المرور مطلوبة',
            'user_pass.string' => 'كلمة المرور يجب أن تكون نصاً',
            'user_pass.min' => 'كلمة المرور يجب أن لا تقل عن 8 أحرف'
        ]);
        if ($validate->fails())
        return back()->withErrors($validate->errors());


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
