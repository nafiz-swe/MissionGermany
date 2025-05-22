@extends('layouts.app')

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

            <button type="submit" class="btn btn-primary w-100 mb-3">লগইন করুন</button>
        </form>

        <div class="text-center mt-2">
            <p class="mb-0">❓ একাউন্ট নেই?</p>
            <a href="{{ url('/register') }}" class="btn btn-outline-secondary btn-sm mt-1">রেজিস্টার করুন</a>
        </div>
    </div>
</div>
@endsection
