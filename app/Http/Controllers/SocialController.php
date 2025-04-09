<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function socilLogin($provider)
    {
        try {
            // Get the authenticated Google user
            $googleUser = Socialite::driver($provider)->user();
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => bcrypt('123456dummy')
                ]
            );
            Auth::login($user);
            return redirect()->route('home')->with('success', 'Successs full login');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Failed to login with Google. Please try again.');
        }
        return redirect()->route('home');
    }
}
