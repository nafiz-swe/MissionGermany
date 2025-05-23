@extends('layouts.app')
<style>
        .login-btn {
        padding: 8px 18px;
        font-size: 15px;
        width: 100%;
        font-weight: 500;
        color: #fff;
        background: linear-gradient(135deg, #0052cc, #00c6ff); /* Dark Blue → Cyan */
        border: none;
        border-radius: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(0, 82, 204, 0.3);
    }

    .login-btn:hover {
        background: linear-gradient(135deg, #0041a8, #00b3e6); /* Slightly darker on hover */
        box-shadow: 0 5px 15px rgba(0, 82, 204, 0.4);
    }
</style>
@section('content')
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
                <button type="submit" class="login-btn"> Login</button>
            </div>
        </form>

        <div class="text-center mt-2">
            <p class="mb-0">❓ একাউন্ট নেই?</p>
            <a href="{{ url('/register') }}" class="btn btn-outline-secondary btn-sm mt-1">রেজিস্টার করুন</a>
        </div>
    </div>
</div>
@endsection
