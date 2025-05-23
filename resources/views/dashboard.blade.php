@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>🎉 Welcome, {{ $user->name }}!</h2>
    <p>আপনি সফলভাবে লগইন করেছেন।</p>

    <div class="row mt-4">

        <!-- Account Details Section -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
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
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">📋 Booking & Payment History</h5>
                </div>
                <div class="card-body">
                    @if($bookings->isEmpty())
                        <p class="text-muted">No bookings found.</p>
                    @else
                        <ul class="list-group list-group-flush">
                            @foreach($bookings as $booking)
                                <li class="list-group-item">
                                    <div><strong>Full Name:</strong> {{ $booking->full_name ?? 'N/A' }}</div>
                                    <div><strong>Place of Birth:</strong> {{ $booking->place_of_birth ?? 'N/A' }}</div>
                                    <div><strong>Date of Birth:</strong> {{ $booking->date_of_birth ? \Carbon\Carbon::parse($booking->date_of_birth)->format('d M Y') : 'N/A' }}</div>
                                    <div><strong>Passport/NID:</strong> {{ $booking->passport_or_nid ?? 'N/A' }}</div>
                                    <div><strong>Destination Country:</strong> {{ $booking->service_country ?? 'N/A' }}</div>
                                    <div><strong>Booking Purpose:</strong> {{ $booking->service_subject ?? 'N/A' }}</div>
                                    <div><strong>Total Paid Amount:</strong> {{ number_format($booking->payment_amount, 2) }} BDT</div>
                                    <div><strong>Payment Method:</strong> {{ ucfirst($booking->payment_method) }}</div>

                                    @if($booking->payment_proof)
                                        <div class="mt-2">
                                            <strong>Proof of Payment:</strong><br>
                                            <a href="{{ asset('storage/' . $booking->payment_proof) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $booking->payment_proof) }}" alt="Payment Proof" style="max-width: 150px; max-height: 100px; object-fit: contain; border: 1px solid #ccc; padding: 2px;">
                                            </a>
                                        </div>
                                    @endif

                                    <small class="text-muted d-block mt-2">
                                        Booked At: {{ $booking->created_at->format('d M Y h:i A') }}
                                    </small>

                                    <!-- Download PDF Button -->
                                    <a href="{{ route('booking.download', $booking->id) }}" 
                                       class="btn btn-sm btn-outline-primary mt-3" target="_blank">
                                       Download PDF
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger mt-3 w-100">Logout</button>
    </form>
</div>
@endsection
