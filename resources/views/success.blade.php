@extends('layouts.app')
@section('content')

    <div class="text-white text-center py-5" style="background: oklch(52.7% 0.154 150.069); padding-left: 20px; padding-right: 20px;">
        <h1>Success Stories</h1>
        <p>আমাদের স্টুডেন্টদের সফলতার গল্পগুলো জানুন।</p>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rahim from Dhaka</h5>
                        <p class="card-text">Goethe A2 কোর্স করার পর Rahim জার্মানিতে স্টুডেন্ট ভিসা পেয়ে গেছেন!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Shila from Khulna</h5>
                        <p class="card-text">Job Seeker ভিসা নিয়ে জার্মানিতে সফলভাবে পৌঁছেছেন!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
