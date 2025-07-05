@extends('layouts.app')
@section('content')

<style>
    table th, table td {
        text-align: center;
        vertical-align: middle !important;
    }
    .download-btn:hover {
    background-color: #198754 !important;
    color: #fff !important;
    border-color: #198754 !important;
}
    .logout-note {
        font-size: 15px;
    }
</style>


<div class="text-white text-center py-5" style="background:oklch(37.3% 0.034 259.733); padding-left: 20px; padding-right: 20px;">
        <h1>Dashboard</h1>
        <p>Everything you need to know about getting your European Visa.</p>
    </div>

<div class="container mt-5">
    <h2>🎉 Welcome, {{ $user->name }}!</h2>
    <p>আপনি সফলভাবে লগইন করেছেন।</p>

    <div class="row mt-4">
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

<!-- Account Details Section -->
<div class="col-md-6">
    <div class="card shadow-sm mb-4">
        <div class="card-header text-white" style="background: linear-gradient(135deg, #016d5a, #00b7a8);">
            <h5 class="mb-0">👤 Account Details</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('user.update') }}">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                    <input type="text" name="mobile" class="form-control" value="{{ old('mobile', $user->mobile) }}" required>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                    <select name="gender" class="form-select" required>
                        <option value="">Select Gender</option>
                        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="ez-submit px-4 py-2 border-0">Update Info</button>
                </div>
            </form>
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
                                                class="btn btn-sm btn-outline-primary download-btn" target="_blank">
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

    <form method="POST" action="{{ route('logout') }}" class="text-center my-5">
    @csrf
    <p class="logout-note mb-2 text-muted">🔒 নিরাপদভাবে সেশন শেষ করতে Logout করুন:</p>
    <button type="submit" class="ez-submit px-4 py-2 border-0">Logout</button>
    </form>



</div>
@endsection
