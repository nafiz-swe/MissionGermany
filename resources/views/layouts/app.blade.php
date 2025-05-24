<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>EuroZoom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Tailwind CSS CDN -->
<!-- <script src="https://cdn.tailwindcss.com"></script> -->

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .eurozoom-btn {
    position: relative;
    font-size: 1rem;
    padding: 0.52rem 2rem 0.28rem; /* top | right-left | bottom */
    width: 100%;
    font-weight: 600;
    border: none;
    cursor: pointer;
    transition: all 250ms;
  }
  .ez-submit {
  background: linear-gradient(135deg, #016d5a, #00b7a8);
  color: white;
  border-radius: 0.4rem;
  box-shadow:
    inset 0 1px 0 0 rgba(255, 255, 255, 0.3),
    0 0px 0 0 #019179,       /* toned-down from #00b7a8 */
    0 4px 0 0 #017e6a,       /* closer to #016d5a */
    0 6px 0 0 #016858,       /* darker blend */
    0 8px 0 0 #015444,       /* deeper tone */
    0 8px 16px 0 rgba(1, 109, 90, 0.5); /* transparent version of #016d5a */
  overflow: hidden;
}


  .ez-submit::before {
    content: '';
    position: absolute;
    inset: 0;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(80, 200, 120, 0.3),
    rgba(173, 255, 255, 0.3),
    transparent
  );
    transform: translateX(-100%);
    animation: shimmer 3s infinite;
    filter: blur(1px);
  }
  
  .ez-submit:hover {
    transform: translateY(4px);
    box-shadow:
      inset 0 1px 0 0 rgba(255,255,255,0.3),
      0 1px 0 0 #059669,
      0 2px 0 0 #047857,
      0 3px 0 0 #065f46,
      0 4px 0 0 #064e3b,
      0 4px 8px 0 rgba(5,150,105,0.5);
  }
  @keyframes shimmer {
    100% {
      transform: translateX(100%);
    }
  }
</style>
</head>
<body>

@include('navbar')

<div class="container mt-5">
    @yield('content')  {{-- এই জায়গায় যেকোন পেজের স্পেসিফিক কন্টেন্ট আসবে --}}
</div>

@include('layouts.footer')

</body>
</html>
