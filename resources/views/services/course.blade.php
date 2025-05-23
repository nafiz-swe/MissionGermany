@extends('layouts.app')
<div class="text-white text-center py-5" style="background:oklch(64.8% 0.2 131.684); padding-left: 20px; padding-right: 20px;">
        <h1>German Language Course</h1>
        <p>Everything you need to know about getting your European Visa.</p>
    </div>

@section('content')
@include('services.common_booking')

<div class="course-banner">
        <h1>Our Courses</h1>
        <p>Germany-এ যাওয়ার জন্য প্রয়োজনীয় কোর্সগুলো এক জায়গায়!</p>
    </div>

    <div class="course-content">
        <h2>আমাদের জনপ্রিয় কোর্সসমূহ</h2>
        <p>আমরা Germany-এ পড়াশোনা বা কাজের জন্য প্রয়োজনীয় সব ধরনের কোর্স অফার করি। নিচে কিছু উল্লেখযোগ্য কোর্স দেওয়া হলো:</p>

        <div class="course-boxes">
            <div class="course-box">
                <h4>A1 - German Language</h4>
                <p>জার্মান ভাষার শুরুটা এখান থেকে। Beginner দের জন্য একদম বেসিক লেভেল।</p>
            </div>

            <div class="course-box">
                <h4>A2 - Grammar & Practice</h4>
                <p>এই লেভেলে আপনি আরও গভীরভাবে জার্মান গ্রামার ও Vocabulary শিখবেন।</p>
            </div>

            <div class="course-box">
                <h4>B1 - Integration & Speaking</h4>
                <p>Speaking এবং Integration এর জন্য এই লেভেল খুবই গুরুত্বপূর্ণ।</p>
            </div>

            <div class="course-box">
                <h4>Exam Preparation</h4>
                <p>Goethe & ÖSD পরীক্ষার জন্য আলাদা ব্যাচ ও মডেল টেস্ট নেয়া হয়।</p>
            </div>

            <div class="course-box">
                <h4>Visa Interview Training</h4>
                <p>জার্মান দূতাবাসে ইন্টারভিউ দেওয়ার জন্য স্পেশাল ট্রেনিং কোর্স।</p>
            </div>

            <div class="course-box">
                <h4>Job Seeker Support</h4>
                <p>জার্মানিতে চাকরির জন্য আবেদন ও ডকুমেন্ট প্রসেসিং গাইডলাইন।</p>
            </div>
        </div>
    </div>
@endsection
