<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user_show()
    {
        $user = User::get()->toArray();
        // dd($user);
        return view('admin.pagesFolder.user.index', compact('user'));
    }

    public function user_save(Request $request)
    {
        // dd($request->all());
        $user =  User::where('id', $request->user_id)->update([
            'role' => $request->role,
        ]);

        if ($user) {
            return redirect()->back()->with('success', 'successfull updateed user');
        } else {
            return redirect()->back()->with('error', 'Some thing Went Wrong !');
        }
        return view('admin.pagesFolder.user.add');
    }

    public function user_add_data(Request $request) {}

    public function admin_setting()
    {
        return view('admin.pagesFolder.Setting.admin-setting.admin-setting');
    }

    public function change_password_save(Request $request)
    {
        $request->validate([
            'current_pass' => 'required',
            'new_pass' => 'required',
            'varify_pass' => 'required|same:new_pass'
        ]);
        $hashed_pass = Auth::user()->password;
        $current_password = $request->current_pass;
        $check_password = Hash::check($current_password, $hashed_pass);
        if ($check_password) {
            $varify = $request->varify_pass;
            $updated_pass =   User::where('id', Auth::id())->update([
                'password' => Hash::make($varify)
            ]);
            if ($updated_pass) {
                Auth::logout();
                return redirect()->route('login')->with('success', 'success full changed your password ');
            } else {
                return redirect()->back()->with('some thing went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Your Password Not Match !');
        }
    }

    public function update_profile_save(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|mimes:png,jpg,webp,jpeg'
        ]);

        dd($request->profile_image);
    }
}
