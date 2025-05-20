<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('navbar')

<div class="container mt-5">
    @yield('content')  {{-- এই জায়গায় যেকোন পেজের স্পেসিফিক কন্টেন্ট আসবে --}}
</div>

@include('layouts.footer')

</body>
</html>
