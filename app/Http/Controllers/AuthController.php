<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function login_process(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|max:50',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            Auth::login($user);
            return redirect()->route('home')->with('success', 'Successfull login');
        } else {
            return redirect()->route('login')->with('error', 'creditional not match');
        }
    }

    public function register_process(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users|required',
            'password' => 'required|max:50',
            'country' => 'required',
        ]);

        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country' => 'india',
            'role' => 'user'
        ]);

        if ($user) {
            Auth::login($user);
            return redirect()->route('home')->with('success', 'Successfull register');
        } else {
            return redirect()->route('register')->with('error', 'Some thing went wrong !');
        }
    }

    public function logout()
    {
        $user = Auth::user();
        if (!$user) {
            return back()->with('error', 'something went wrong');
        } else {
            Auth::logout($user);
            return redirect()->route('home')->with('success', 'Logout Successfull');
        }
    }
}
