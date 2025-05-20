<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'mobile'   => 'required|string|max:15',
            'email'    => 'required|email|unique:users,email',
            'gender'   => 'required|in:male,female,other',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'mobile'   => $request->mobile,
            'email'    => $request->email,
            'gender'   => $request->gender,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('register')->with('success', 'Registration successful!');
    }
}
