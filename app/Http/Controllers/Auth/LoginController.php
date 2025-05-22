<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $loginField = $request->input('login');
        $password = $request->input('password');

        // ইমেইল না মোবাইল সেটা চেক করা হচ্ছে
        $fieldType = filter_var($loginField, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

        if (Auth::attempt([$fieldType => $loginField, 'password' => $password])) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['login' => 'ইমেইল বা মোবাইল অথবা পাসওয়ার্ড ভুল হয়েছে'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
