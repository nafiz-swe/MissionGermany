@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>🎉 Welcome, {{ Auth::user()->name }}!</h2>
    <p>আপনি সফলভাবে লগইন করেছেন।</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger mt-3">Logout</button>
    </form>
</div>
@endsection
