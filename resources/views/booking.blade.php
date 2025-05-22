@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Booking Form</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif
    <form method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data">
        @csrf

        <input type="text" name="full_name" class="form-control mb-2" placeholder="Full Name" required>

        <input type="text" name="place_of_birth" class="form-control mb-2" placeholder="Place of Birth" required>

        <input type="date" name="date_of_birth" class="form-control mb-2" required>

        <input type="text" name="passport_or_nid" class="form-control mb-2" placeholder="Passport or NID Number" required>

        <input type="text" name="mobile" class="form-control mb-2" placeholder="Mobile Number" required>

        <input type="email" name="email" class="form-control mb-2" placeholder="Email Address" required>

        <select name="service_country" class="form-control mb-2" required>
            <option value="">Select Country</option>
            <option value="Austria">Austria</option>
            <option value="Belgium">Belgium</option>
            <option value="Croatia">Croatia</option>
            <option value="Denmark">Denmark</option>
            <option value="Germany">Germany</option>
            <option value="Hungary">Hungary</option>
            <option value="France">France</option>
            <option value="Finland">Finland</option>
            <option value="Italy">Italy</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Portugal">Portugal</option>
            <option value="Poland">Poland</option>
            <option value="Russia">Russia</option>
            <option value="Romania">Romania</option>
            <option value="Spain">Spain</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="UK">UK</option>
        </select>

        <select name="service_subject" class="form-control mb-2" required>
            <option value="">Select Subject</option>
            <option>Aupair Manage</option>
            <option>Ausbildung Manage</option>
            <option>Block Account Support</option>
            <option>Course (Learn German)</option>
            <option>Documents Support</option>
            <option>Dormitory Manage</option>
            <option>FSJ/BFD Manage</option>
            <option>Job Manage</option>
            <option>University Manage</option>
            <option>VISA Support</option>
        </select>

        <input type="number" step="0.01" name="payment_amount" class="form-control mb-2" placeholder="Payment Amount" required>

        <select name="payment_method" class="form-control mb-2" required>
            <option value="">Select Payment Method</option>
            <option value="Bank">Bank</option>
            <option value="Bkash">Bkash</option>
            <option value="Rocket">Rocket</option>
        </select>

        <label>Upload Payment Proof (max 10MB)</label>
        <input type="file" name="payment_proof" class="form-control mb-2" accept="image/*" required>

        <div class="form-check mb-3">
            <input type="checkbox" name="terms_agreed" class="form-check-input" id="terms" required>
            <label for="terms" class="form-check-label">I agree to the terms and conditions</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit Booking</button>
    </form>
</div>
@endsection
