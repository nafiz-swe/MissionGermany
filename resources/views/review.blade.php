<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reviews | MissionGermany</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')

    <div class="text-white text-center py-5" style="background: oklch(44.3% 0.11 240.79); padding-left: 20px; padding-right: 20px;">
        <h1>Student Reviews</h1>
        <p>আমাদের সার্ভিস নিয়ে স্টুডেন্টদের মতামত।</p>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"German course গুলো খুব সহজভাবে শেখানো হয়। Highly recommended!"</p>
                    <footer class="blockquote-footer">Fahim</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"Visa interview preparation অনেক কাজে লেগেছে। ধন্যবাদ টিমকে।"</p>
                    <footer class="blockquote-footer">Rima</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>"আশা করিনি এত দ্রুত সফল হবো। আপনাদের গাইডলাইন অসাধারণ।"</p>
                    <footer class="blockquote-footer">Sabbir</footer>
                </blockquote>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
