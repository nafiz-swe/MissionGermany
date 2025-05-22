<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Booking;
use PDF; // use barte hocche; barte parbe barte parbe, popular package: barryvdh/laravel-dompdf

class BookingController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('booking', compact('user'));
    }

    public function downloadPdf($id)
    {
        $booking = Booking::findOrFail($id);

        $pdf = PDF::loadView('bookings.pdf', compact('booking'));

        $filename = 'booking_' . $booking->id . '.pdf';

        return $pdf->download($filename);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'passport_or_nid' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email',
            'service_country' => 'required|string',
            'service_subject' => 'required|string',
            'payment_amount' => 'required|numeric',
            'payment_method' => 'required|string',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'terms_agreed' => 'accepted',
        ]);

        if ($request->hasFile('payment_proof') && $request->file('payment_proof')->isValid()) {
            $filePath = $request->file('payment_proof')->store('payment_proofs', 'public');
        } else {
            return back()->with('error', 'The payment proof failed to upload.');
        }
    
        Booking::create([
            'full_name' => $request->full_name,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'passport_or_nid' => $request->passport_or_nid,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'service_country' => $request->service_country,
            'service_subject' => $request->service_subject,
            'payment_amount' => $request->payment_amount,
            'payment_method' => $request->payment_method,
            'payment_proof' => $filePath,
            'terms_agreed' => true,
        ]);
    
        return back()->with('success', 'Your booking has been submitted successfully!');
    }    

}
