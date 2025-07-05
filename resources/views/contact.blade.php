@extends('layouts.app')

@section('content')

{{-- Banner Section --}}
<div class="text-white text-center py-5" style="background: linear-gradient(135deg, #016d5a, #00b7a8); padding: 0 20px;">
    <h1>Contact Us</h1>
    <p>Have questions or need help? Reach out to us anytime — we’re here for you!</p>
</div>

{{-- Contact Form --}}
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                <h1 class="mb-3 fw-bold split-title text-center">
                <span>Send Us</span><span> a Message</span></h1>

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required placeholder="Enter subject">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Write your message..."></textarea>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="ez-submit px-4 py-2 border-0">Send Message</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
