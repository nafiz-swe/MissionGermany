<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // এখানে চাইলে Email পাঠাতে পারো অথবা Database-এ save করতে পারো
        // উদাহরণ স্বরূপ আমরা শুধু success message দেখাচ্ছি

        // Validation (চাইলে যোগ করতে পারো)
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // এখানে আপনি চাইলে মেইল পাঠাতে পারেন বা ডাটাবেসে ইনসার্ট করতে পারেন

        return back()->with('success', 'Thank you for contacting us!');
    }
}
