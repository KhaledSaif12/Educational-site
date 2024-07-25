<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Validator;
use Dotenv\Password;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    //
    public function index(){
        $users=User::orderBy('id','desc')->get();
        return view('admin.list_user')->with('all_users',$users);
    }  

    public function create(){
        $role = Role::get();
        return view('admin.add_user')->with('roles',$role);
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


        $user=new User();
        $user->name=$request->user_name;
        $user->email=$request->user_email;
        $user->password=Hash::make($request->user_pass);
        if( $user->save()){
            $user->addRole($request->user_role);
            return redirect()->route('list_user');
        }
        return redirect()->back();

    }

    public function managePermissions($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all(); // احصل على جميع الصلاحيات
        return view('admin.userpermissions', compact('user', 'roles'));
    }
    // تحديث بيانات مستخدم
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('list_user')->with('success', 'User updated successfully.');
    }
    // تحديث الصلاحيات
    public function updatePermissions(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($id);
        $user->roles()->sync([$request->role]); // قم بتحديث صلاحية واحدة

        return redirect()->route('list_user')->with('success', 'Permissions updated successfully.');
    }
    // حذف مستخدم
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('de_user')->with('success', 'User deleted successfully.');
    }
    // عرض نموذج تعديل مستخدم
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all(); // احصل على جميع الصلاحيات
        $userRoles = $user->roles->pluck('id')->toArray(); // احصل على صلاحيات المستخدم الحالية
        return view('list_user', compact('user', 'roles', 'userRoles'));
    }
}
