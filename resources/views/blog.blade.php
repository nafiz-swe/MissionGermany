<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog | MissionGermany</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')

    <div class="bg-dark text-white text-center py-5">
        <h1>Latest Blog Posts</h1>
        <p>Germany-তে যাওয়ার প্রস্তুতি ও অভিজ্ঞতা নিয়ে বিস্তারিত ব্লগ পড়ুন।</p>
    </div>

    <div class="container my-5">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Germany-তে পড়াশোনার খরচ কেমন?</h5>
                <p class="mb-1">জার্মানির ইউনিভার্সিটিতে ভর্তি ও জীবনযাত্রার খরচ নিয়ে বিস্তারিত।</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">ভিসা ইন্টারভিউয়ে কি কি প্রশ্ন আসে?</h5>
                <p class="mb-1">জার্মান দূতাবাসের ইন্টারভিউয়ে আসা কমন প্রশ্ন ও উত্তর প্রস্তুতি।</p>
            </a>
        </div>
    </div>

    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
