@extends('layouts.app')
@section('content')

    <div class="text-white text-center py-5" style="background:oklch(37.3% 0.034 259.733); padding-left: 20px; padding-right: 20px;">
        <h1>Visa Support</h1>
        <p>Everything you need to know about getting your European Visa.</p>
    </div>


@include('services.common_booking')

    <div class="container my-5 visa-content">
        <h2>Visa Process Overview</h2>
        <p>Germany-তে যাওয়ার জন্য স্টুডেন্ট ভিসা, জব সিকার ভিসা এবং ফ্যামিলি ভিসা সহ বিভিন্ন ক্যাটাগরির ভিসা পাওয়া যায়।</p>
        <ul>
            <li>স্টুডেন্ট ভিসার জন্য A2 অথবা B1 লেভেল প্রয়োজন।</li>
            <li>জব সিকার ভিসার জন্য প্রফেশনাল কোয়ালিফিকেশন ও কাজের অভিজ্ঞতা দরকার।</li>
            <li>ভিসার জন্য প্রয়োজনীয় ডকুমেন্ট প্রসেসিং ও এপয়েন্টমেন্ট বুকিং আমাদের থেকে করানো যায়।</li>
        </ul>
    </div>
    @endsection
