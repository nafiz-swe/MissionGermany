@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 500px;">
    <h2 class="mb-4">🔐 Login</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first('login') }}
        </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="form-group mb-3">
            <label for="login">ইমেইল অথবা মোবাইল</label>
            <input type="text" name="login" id="login" class="form-control" required value="{{ old('login') }}">
        </div>

        <div class="form-group mb-3">
            <label for="password">পাসওয়ার্ড</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">লগইন করুন</button>
    </form>
</div>
@endsection
