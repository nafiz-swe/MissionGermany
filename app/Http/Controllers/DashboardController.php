<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // User এর email এর ভিত্তিতে তার বুকিং হিস্টরি
        $bookings = Booking::where('email', $user->email)->get();

        return view('dashboard', compact('user', 'bookings'));
    }
}
