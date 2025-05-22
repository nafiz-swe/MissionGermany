<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            position: relative;
            padding: 20px;
        }

        .watermark {
    position: absolute;
    top: 25%;
    left: 20%;
    opacity: 0.08;
    z-index: -1;
    width: 400px;
    font-size: 100px;
    font-weight: bold;
    font-style: italic;
    transform: rotate(20deg);
    transform-origin: left top;
}

        .content {
            position: relative;
            z-index: 1;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .section {
            margin-bottom: 10px;
        }

        .section label {
            font-weight: bold;
        }

        .proof-img {
            margin-top: 10px;
            border: 1px solid #ccc;
            padding: 3px;
            width: 200px;
        }
    </style>
</head>
<body>

    <!-- Watermark Image -->
    <!-- <img src="{{ public_path('eurozoom.png') }}" class="watermark" alt="Watermark"> -->
    <img src="{{ asset('eurozoom.png') }}" class="watermark" alt="EuroZoom">
    <!-- @php
    $path = public_path('eurozoom.png');
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
@endphp

<img src="{{ $base64 }}" class="watermark" alt="EuroZoom" style="width:400px; opacity:0.08; position: fixed; top: 25%; left: 20%; z-index: 0;"> -->



    <div class="content">
        <h2>Booking & Payment Information</h2>

        <div class="section"><label>Full Name:</label> {{ $booking->full_name }}</div>
        <div class="section"><label>Place of Birth:</label> {{ $booking->place_of_birth }}</div>
        <div class="section"><label>Date of Birth:</label> {{ \Carbon\Carbon::parse($booking->date_of_birth)->format('d M Y') }}</div>
        <div class="section"><label>Passport or NID:</label> {{ $booking->passport_or_nid }}</div>
        <div class="section"><label>Mobile:</label> {{ $booking->mobile }}</div>
        <div class="section"><label>Email:</label> {{ $booking->email }}</div>
        <div class="section"><label>Service Country:</label> {{ $booking->service_country }}</div>
        <div class="section"><label>Service Subject:</label> {{ $booking->service_subject }}</div>
        <div class="section"><label>Payment Amount:</label> {{ number_format($booking->payment_amount, 2) }} BDT</div>
        <div class="section"><label>Payment Method:</label> {{ ucfirst($booking->payment_method) }}</div>

        @if($booking->payment_proof)
            <div class="section">
                <label>Payment Proof:</label><br>
                <img src="{{ public_path('storage/' . $booking->payment_proof) }}" class="proof-img" alt="Payment Proof">
            </div>
        @endif

        <div class="section"><label>Booking Time:</label> {{ $booking->created_at->format('d M Y h:i A') }}</div>
    </div>

</body>
</html>
