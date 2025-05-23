<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'gender' => 'required|in:male,female,other',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->gender = $request->gender;
        $user->save();

        return back()->with('success', 'Account information updated successfully.');
    }
}
