<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visa Information | MissionGermany</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .visa-header {
            background-color: #1d3557;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .visa-content h2 {
            color: #1d3557;
        }
    </style>
</head>
<body>
    @include('navbar')

    <div class="visa-header">
        <h1>Visa Guidelines</h1>
        <p>Everything you need to know about getting your German Visa.</p>
    </div>

    <div class="container my-5 visa-content">
        <h2>Visa Process Overview</h2>
        <p>Germany-তে যাওয়ার জন্য স্টুডেন্ট ভিসা, জব সিকার ভিসা এবং ফ্যামিলি ভিসা সহ বিভিন্ন ক্যাটাগরির ভিসা পাওয়া যায়।</p>

        <ul>
            <li>স্টুডেন্ট ভিসার জন্য A2 অথবা B1 লেভেল প্রয়োজন।</li>
            <li>জব সিকার ভিসার জন্য প্রফেশনাল কোয়ালিফিকেশন ও কাজের অভিজ্ঞতা দরকার।</li>
            <li>ভিসার জন্য প্রয়োজনীয় ডকুমেন্ট প্রসেসিং ও এপয়েন্টমেন্ট বুকিং আমাদের থেকে করানো যায়।</li>
        </ul>
    </div>

    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>