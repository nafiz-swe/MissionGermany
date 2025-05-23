@extends('layouts.app')
<style>
    table th, table td {
        text-align: center;
        vertical-align: middle !important;
    }

    .logout-note {
        font-size: 15px;
    }

    .logout-btn {
        padding: 8px 18px;
        font-size: 15px;
        font-weight: 500;
        color: #fff;
        background: linear-gradient(135deg, #0052cc, #00c6ff); /* Dark Blue → Cyan */
        border: none;
        border-radius: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(0, 82, 204, 0.3);
    }

    .logout-btn:hover {
        background: linear-gradient(135deg, #0041a8, #00b3e6); /* Slightly darker on hover */
        transform: scale(1.03);
        box-shadow: 0 5px 15px rgba(0, 82, 204, 0.4);
    }

    .logout-btn i {
        margin-right: 6px;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@section('content')
<div class="container mt-5">
    <h2>🎉 Welcome, {{ $user->name }}!</h2>
    <p>আপনি সফলভাবে লগইন করেছেন।</p>

    <div class="row mt-4">

        <!-- Account Details Section -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
            <div class="card-header text-white" style="background-color: #003366;">
                <!-- <div class="card-header bg-primary text-white"> -->
                    <h5 class="mb-0">👤 Account Details</h5>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Mobile:</strong> {{ $user->mobile ?? 'N/A' }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Gender:</strong> {{ ucfirst($user->gender) ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Booking & Payment History Section -->
        <div class="col-md-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">📋 Booking & Payment History</h5>
                </div>
                <div class="card-body">
                    @if($bookings->isEmpty())
                        <p class="text-muted">No bookings found.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Place of Birth</th>
                                        <th>Date of Birth</th>
                                        <th>Passport/NID</th>
                                        <th>Destination Country</th>
                                        <th>Booking Purpose</th>
                                        <th>Total Paid Amount (BDT)</th>
                                        <th>Payment Method</th>
                                        <th>Proof of Payment</th>
                                        <th>Booked At</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $booking)
                                        <tr>
                                            <td>{{ $booking->full_name ?? 'N/A' }}</td>
                                            <td>{{ $booking->place_of_birth ?? 'N/A' }}</td>
                                            <td>{{ $booking->date_of_birth ? \Carbon\Carbon::parse($booking->date_of_birth)->format('d M Y') : 'N/A' }}</td>
                                            <td>{{ $booking->passport_or_nid ?? 'N/A' }}</td>
                                            <td>{{ $booking->service_country ?? 'N/A' }}</td>
                                            <td>{{ $booking->service_subject ?? 'N/A' }}</td>
                                            <td>{{ number_format($booking->payment_amount, 2) }}</td>
                                            <td>{{ ucfirst($booking->payment_method) }}</td>
                                            <td>
                                                @if($booking->payment_proof)
                                                    <a href="{{ asset('storage/' . $booking->payment_proof) }}" target="_blank">
                                                        <img src="{{ asset('storage/' . $booking->payment_proof) }}" alt="Proof" style="max-width: 60px; max-height: 40px; object-fit: contain;">
                                                    </a>
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>{{ $booking->created_at->format('d M Y h:i A') }}</td>
                                            <td>
                                                <a href="{{ route('booking.download', $booking->id) }}" 
                                                   class="btn btn-sm btn-outline-primary" target="_blank">
                                                   PDF
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <form method="POST" action="{{ route('logout') }}" class="text-center mt-4">
    @csrf
    <p class="logout-note mb-2 text-muted">🔒 নিরাপদভাবে সেশন শেষ করতে Logout করুন:</p>
    <button type="submit" class="logout-btn">
        <i class="fas fa-sign-out-alt me-1"></i> Logout
    </button>
</form>



</div>
@endsection
