@extends('layouts.app')
@section('content')

    <div class="text-white text-center py-5" style="background: linear-gradient(135deg, #016d5a, #00b7a8); padding-left: 20px; padding-right: 20px;">
        <h1>Login your account</h1>
        <p>Have questions or need help? Reach out to us anytime — we’re here for you!</p>
    </div>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; background: #f8f9fa;">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 450px; border-radius: 15px;">
        <h3 class="text-center mb-4" style="color: #0d6efd;">🔐 লগইন করুন</h3>

        @if ($errors->any())
            <div class="alert alert-danger text-center">
                {{ $errors->first('login') }}
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div class="mb-3">
                <label for="login" class="form-label">ইমেইল অথবা মোবাইল</label>
                <input type="text" name="login" id="login" class="form-control" required value="{{ old('login') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">পাসওয়ার্ড</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="ez-submit px-4 py-2 border-0">Sign In</button>
            </div>
        </form>

        <div class="text-center mt-2">
            <p class="mb-0">❓ একাউন্ট নেই?</p>
            <a href="{{ url('/register') }}" class="btn btn-outline-secondary btn-sm mt-1">Register</a>
        </div>
    </div>
</div>
@endsection
