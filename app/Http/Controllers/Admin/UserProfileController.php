<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserProfileController extends Controller
{
    // عرض صفحة التعديل
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit_user', compact('user'));
    }

    // تحديث البيانات الشخصية
    public function update(Request $request, $id)
    {
        // التحقق من البيانات
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'current_password' => 'nullable|string|min:8',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);

        // تحديث الاسم والبريد الإلكتروني
        $user->update($request->only('name', 'email'));

        // التحقق من كلمة المرور الحالية وتحديثها إذا لزم الأمر
        if ($request->filled('current_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.'])->withInput();
            }

            if ($request->filled('new_password')) {
                $user->password = Hash::make($request->new_password);
                $user->save();
            }
        }

        return redirect()->route('edit_user', $user->id)->with('success', 'Profile updated successfully.');
    }

    // حذف المستخدم
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('list_user')->with('success', 'User deleted successfully.');
    }
}
