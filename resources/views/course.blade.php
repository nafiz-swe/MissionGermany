<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MissionGermany | Courses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f6fa;
        }

        .course-banner {
            background-color: #1650ad;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .course-banner h1 {
            margin: 0;
            font-size: 40px;
        }

        .course-content {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .course-content h2 {
            color: #1650ad;
            margin-bottom: 20px;
        }

        .course-content p {
            line-height: 1.8;
            color: #333;
        }

        .course-boxes {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .course-box {
            flex: 1 1 calc(33.33% - 20px);
            background-color: #e9eefc;
            padding: 20px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .course-box:hover {
            background-color: #d4e0fc;
            transform: translateY(-5px);
        }

        .course-box h4 {
            color: #1650ad;
            margin-bottom: 10px;
        }

        @media(max-width: 768px) {
            .course-box {
                flex: 1 1 100%;
            }

            .course-banner h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

    @include('navbar')

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

    @include('layouts.footer')

</body>
</html>
