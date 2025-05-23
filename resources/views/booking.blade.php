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

        <input type="text" name="full_name" class="form-control mb-2" placeholder="Full Name" value="{{ old('full_name', $user->name ?? '') }}" required>

        <select name="place_of_birth" class="form-control mb-2" required>
            <option value="">Select Place of Birth</option>
            <option value="Bagerhat">Bagerhat</option>
            <option value="Bandarban">Bandarban</option>
            <option value="Barguna">Barguna</option>
            <option value="Barisal">Barisal</option>
            <option value="Bhola">Bhola</option>
            <option value="Bogra">Bogra</option>
            <option value="Brahmanbaria">Brahmanbaria</option>
            <option value="Chandpur">Chandpur</option>
            <option value="Chapai Nawabganj">Chapai Nawabganj</option>
            <option value="Chattogram">Chattogram</option>
            <option value="Chuadanga">Chuadanga</option>
            <option value="Comilla">Comilla</option>
            <option value="Cox's Bazar">Cox's Bazar</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Dinajpur">Dinajpur</option>
            <option value="Faridpur">Faridpur</option>
            <option value="Feni">Feni</option>
            <option value="Gaibandha">Gaibandha</option>
            <option value="Gazipur">Gazipur</option>
            <option value="Gopalganj">Gopalganj</option>
            <option value="Habiganj">Habiganj</option>
            <option value="Jamalpur">Jamalpur</option>
            <option value="Jashore">Jashore</option>
            <option value="Jhalokathi">Jhalokathi</option>
            <option value="Jhenaidah">Jhenaidah</option>
            <option value="Joypurhat">Joypurhat</option>
            <option value="Khagrachhari">Khagrachhari</option>
            <option value="Khulna">Khulna</option>
            <option value="Kishoreganj">Kishoreganj</option>
            <option value="Kurigram">Kurigram</option>
            <option value="Kushtia">Kushtia</option>
            <option value="Lakshmipur">Lakshmipur</option>
            <option value="Lalmonirhat">Lalmonirhat</option>
            <option value="Madaripur">Madaripur</option>
            <option value="Magura">Magura</option>
            <option value="Manikganj">Manikganj</option>
            <option value="Meherpur">Meherpur</option>
            <option value="Moulvibazar">Moulvibazar</option>
            <option value="Munshiganj">Munshiganj</option>
            <option value="Mymensingh">Mymensingh</option>
            <option value="Naogaon">Naogaon</option>
            <option value="Narail">Narail</option>
            <option value="Narayanganj">Narayanganj</option>
            <option value="Narsingdi">Narsingdi</option>
            <option value="Natore">Natore</option>
            <option value="Netrokona">Netrokona</option>
            <option value="Nilphamari">Nilphamari</option>
            <option value="Noakhali">Noakhali</option>
            <option value="Pabna">Pabna</option>
            <option value="Panchagarh">Panchagarh</option>
            <option value="Patuakhali">Patuakhali</option>
            <option value="Pirojpur">Pirojpur</option>
            <option value="Rajbari">Rajbari</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangamati">Rangamati</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Satkhira">Satkhira</option>
            <option value="Shariatpur">Shariatpur</option>
            <option value="Sherpur">Sherpur</option>
            <option value="Sirajganj">Sirajganj</option>
            <option value="Sunamganj">Sunamganj</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Tangail">Tangail</option>
            <option value="Thakurgaon">Thakurgaon</option>
        </select>

        <input type="date" name="date_of_birth" class="form-control mb-2" required>

        <input type="text" name="passport_or_nid" class="form-control mb-2" placeholder="Passport or NID Number" required>

        <input type="text" name="mobile" class="form-control mb-2" placeholder="Mobile Number" value="{{ old('mobile', $user->mobile ?? '') }}" required>

        <input type="email" name="email" class="form-control mb-2" placeholder="Email Address" value="{{ old('email', $user->email ?? '') }}" required>

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

        <input type="number" step="0.01" name="payment_amount" class="form-control mb-2" placeholder="Total Paid Amount" required>

        <select name="payment_method" class="form-control mb-2" required>
            <option value="">Select Payment Method</option>
            <option value="Bank">Bank</option>
            <option value="Bkash">Bkash</option>
            <option value="Rocket">Rocket</option>
        </select>

        <label>Proof of Payment:  Attached image (bank slip or transaction screenshot-max 10MB)</label>
        <input type="file" name="payment_proof" class="form-control mb-2" accept="image/*" required>

        <div class="form-check mb-3">
            <input type="checkbox" name="terms_agreed" class="form-check-input" id="terms" required>
            <label for="terms" class="form-check-label">I agree to the terms and conditions</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit Booking</button>
    </form>
</div>
@endsection
