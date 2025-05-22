@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 600px; font-family: 'Poppins', sans-serif;">
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <h2 class="mb-4 text-center text-primary">📝 রেজিস্টার করুন</h2>

            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register.post') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">পূর্ণ নাম</label>
                    <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">মোবাইল নম্বর</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" required value="{{ old('mobile') }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">ইমেইল ঠিকানা</label>
                    <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block mb-1">লিঙ্গ</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" id="male" value="male" class="form-check-input" {{ old('gender') == 'male' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="male">পুরুষ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" id="female" value="female" class="form-check-input" {{ old('gender') == 'female' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="female">মহিলা</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">পাসওয়ার্ড</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">পাসওয়ার্ড নিশ্চিত করুন</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">রেজিস্টার করুন</button>
            </form>

            <div class="mt-4 text-center">
                ইতোমধ্যে একাউন্ট আছে?
                <a href="{{ url('/login') }}" class="text-decoration-none text-primary fw-semibold">লগইন করুন</a>
            </div>
        </div>
    </div>
</div>
@endsection
