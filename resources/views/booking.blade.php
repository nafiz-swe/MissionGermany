@extends('layouts.app')
<div class="text-white text-center py-5" style="background: linear-gradient(135deg, #016d5a, #00b7a8); padding-left: 20px; padding-right: 20px;">
<h1>Booking Form</h1>
    <p>
        Fill in the form to book your support session with us.
        Fields marked with <span class="text-danger">*</span> are mandatory.
        Ensure the payment proof is uploaded correctly.
    </p>
</div>

@section('content')

<div class="container mt-5">

    <!-- <div class="p-4 text-white shadow-sm mb-4 rounded" >
        <h2 class="mb-2">Booking Form</h2>
        <p class="mb-0">Fill in the form to book your support session with us. Fields marked with <span class="text-danger">*</span> are mandatory. Ensure the payment proof is uploaded correctly.</p>
    </div> -->

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data" class="row g-3 shadow-sm p-4 bg-light rounded">
        @csrf

        <div class="col-md-6 form-floating">
            <input type="text" name="full_name" class="form-control" id="full_name" value="{{ old('full_name', $user->name ?? '') }}" placeholder="Full Name" required>
            <label for="full_name">Full Name <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <select name="place_of_birth" class="form-select" id="place_of_birth" required>
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
            <label for="place_of_birth">Place of Birth <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <input type="date" name="date_of_birth" class="form-control" id="dob" placeholder="Date of Birth" required>
            <label for="dob">Date of Birth <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <input type="text" name="passport_or_nid" class="form-control" id="passport_nid" placeholder="Passport or NID Number" required>
            <label for="passport_nid">Passport or NID Number <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <input type="text" name="mobile" class="form-control" id="mobile" value="{{ old('mobile', $user->mobile ?? '') }}" placeholder="Mobile Number" required>
            <label for="mobile">Mobile Number <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $user->email ?? '') }}" placeholder="Email Address" required>
            <label for="email">Email Address <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <select name="service_country" class="form-select" id="service_country" required>
                <option value="">Select Country	</option>
                <option value="Austria">Austria</option>
                <option value="Belgium">Belgium</option>
                <option value="Croatia">Croatia</option>
                <option value="Denmark">Denmark</option>
                <option value="France">France</option>
                <option value="Finland">Finland</option>
                <option value="Germany">Germany</option>
                <option value="Hungary">Hungary</option>
                <option value="Italy">Italy</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Portugal">Portugal</option>
                <option value="Poland">Poland</option>
                <option value="Russia">Russia</option>
                <option value="Romania">Romania</option>
                <option value="Spain">Spain</option>
                <option value="Switzerland">Switzerland</option>
                <option value="UK">UK</option>
            </select>
            <label for="service_country">Destination Country <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <select name="service_subject" class="form-select" id="service_subject" required>
                <option value="">Select Purpose	</option>
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
            <label for="service_subject">Booking Purpose <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <input type="number" step="0.01" name="payment_amount" class="form-control" id="payment_amount" placeholder="Amount Paid" required>
            <label for="payment_amount">Total Paid Amount (BDT) <span class="text-danger">*</span></label>
        </div>

        <div class="col-md-6 form-floating">
            <select name="payment_method" class="form-select" id="payment_method" required>
                <option value="">Select Payment Method</option>
                <option value="Bank">Bank</option>
                <option value="Bkash">Bkash</option>
                <option value="Rocket">Rocket</option>
            </select>
            <label for="payment_method">Payment Method <span class="text-danger">*</span></label>
        </div>

        <div class="col-12">
            <label for="payment_proof" class="form-label">Proof of Payment <span class="text-danger">*</span></label>
            <input type="file" name="payment_proof" class="form-control" id="payment_proof" accept="image/*" required>
            <div class="form-text">Attach transaction slip or screenshot. Max size 10MB.</div>
        </div>

        <div class="col-12 form-check">
            <input class="form-check-input" type="checkbox" value="1" id="terms" name="terms_agreed" required>
            <label class="form-check-label" for="terms">I agree to the terms and conditions <span class="text-danger">*</span></label>
        </div>

                <div class="text-center mt-3">
                    <button type="submit" class="eurozoom-btn ez-submit"> Confirm Booking </button>
                </div>

    </form>
</div>
@endsection
