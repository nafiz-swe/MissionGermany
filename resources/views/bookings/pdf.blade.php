<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking PDF</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <style>
         /* body {
            font-family: DejaVu Sans, sans-serif;
            padding: 30px;
            background-color: #f9f9f9;
            color: #333;
            border: 2px solid #004080;
        } */

        body {
            font-family: 'Playfair Display', serif;
            padding: 30px;
    background-color: #f9f9f9;
    color: #333;
    
    border: 5px double #004080;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0, 64, 128, 0.2), 0 0 5px rgba(0, 64, 128, 0.2) inset;
} 


 

 

        .watermark {
            position: fixed;
            background: url('{{ asset('eurozoom.png') }}') no-repeat;
            top: 30%;
            left: 20%;
            opacity: 0.06;
            z-index: 999;
            width: 400px;
            font-size: 100px;
            font-weight: bold;
            font-style: italic;
            transform: rotate(20deg);
            transform-origin: left top;
        }

        .container {
            background: #fff;
            /* border: 2px solid #004080; */
            border-radius: 10px;
            padding: 25px 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .highlight-box {
            background-color: #e6f2ff;
            border: 1px solid #4682B4;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 102, 204, 0.2);
            margin-bottom: 45px;
        }

        .main-title {
            color: #004080;
            font-size: 80px;
            font-weight: bold;
            font-family: "Brush Script MT", cursive;
            font-style: italic;
            text-shadow: 2px 2px 4px rgba(0, 0, 102, 0.2);
            margin-bottom: 0px;
        }

        .main-title-p2 {
            font-size: 20px;
            color: #0059b3;
            font-style: italic;
            font-weight: 500;
            margin-top: -10px;
            margin-bottom: 5px;
        }
        .main-title-p {
            font-size: 14px;
            color: #0059b3;
            font-style: italic;
            font-weight: 500;
            margin-top: 5px;
            margin-bottom: 40px;

        }
        .page-title {
            text-align: center;
            margin: 40px 0 10px;
            color: #00C000;
            font-size: 40px;
            font-weight: bold;
            font-family: 'Playfair Display', serif;
        }

        .sub-description {
            text-align: center;
            font-size: 16px;
            color: #666;
            margin-bottom: 40px;
        }

        .section-title {
            text-align: center;
            margin: 40px 0 20px;
            color: #006699;
            font-size: 28px;
            font-weight: bold;
            border-bottom: 2px solid #006699;
            padding-top: 10px;
            padding-bottom: 8px;
            font-family: 'Playfair Display', serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 10px 12px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 15px;
        }

        th {
            background-color: #e6f0ff;
            color: #003366;
            font-weight: bold;
        }

        .proof-img {
            margin-top: 10px;
            border: 1px solid #ccc;
            padding: 3px;
            width: 220px;
            border-radius: 6px;
        }
        .terms-section {
            margin-top: 40px;
            font-size: 13px;
            color: #555;
            font-style: italic;
            text-align: justify;
            border-top: 1px dashed #bbb;
            padding-top: 15px;
        }
        .tick-box {
            display: inline-block;
            color: green;
            font-weight: bold;
            border: 1px solid green;
            border-radius: 3px;
            padding: 0px 4px;
            margin-right: 5px;
            font-size: 15px;
            line-height: 1;
            vertical-align: bottom;
            font-family: DejaVu Sans, sans-serif !important;
        }

    </style>
</head>
<body>

    <img src="{{ asset('eurozoom.png') }}" class="watermark" alt="EuroZoom">

    <div class="container">

        <!-- Styled Branding Box -->
        <div class="highlight-box">
            <div class="main-title">EuroZoom</div>
            <div class="main-title-p2">Your Gateway to Europe</div>
            <div class="main-title-p">www.eurozoom.net | eurozoom.net@gmail.com | 01737-226404 (WhatsApp)</div>
        </div>

        <!-- Booking Heading -->
        <div class="page-title">Booking Confirmation</div>
        <div class="sub-description">
            Empowering your European ambitions with expert guidance, career support, <br> and German language training.
        </div>

        <!-- Personal Details -->
        <div class="section-title">Personal Details</div>

        <table>
            <tr>
                <th>Full Name</th>
                <td>{{ $booking->full_name }}</td>
            </tr>
            <tr>
                <th>Place of Birth</th>
                <td>{{ $booking->place_of_birth }}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ \Carbon\Carbon::parse($booking->date_of_birth)->format('d M Y') }}</td>
            </tr>
            <tr>
                <th>Passport or NID</th>
                <td>{{ $booking->passport_or_nid }}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $booking->mobile }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $booking->email }}</td>
            </tr>
            <tr>
                <th>Destination Country</th>
                <td>{{ $booking->service_country }}</td>
            </tr>
            <tr>
                <th>Booking Purpose</th>
                <td>{{ $booking->service_subject }}</td>
            </tr>
        </table><br><br>

        <!-- Payment Details -->
        <div class="section-title">Payment Details</div>

        <table>
            <tr>
                <th>Total Paid Amount</th>
                <td>{{ number_format($booking->payment_amount, 2) }} BDT</td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td>{{ ucfirst($booking->payment_method) }}</td>
            </tr>
            @if($booking->payment_proof)
            <tr>
                <th>Proof of Payment</th>
                <td>
                    <img src="{{ public_path('storage/' . $booking->payment_proof) }}" class="proof-img" alt="Payment Proof">
                </td>
            </tr>
            @endif
            <tr>
                <th>Booking Time</th>
                <td>{{ $booking->created_at->format('d M Y h:i A') }}</td>
            </tr>
        </table>

        <div class="terms-section">
    <p><em>We are always by your side to make your European journey smoother.</em></p>
    <p>
    <span class="tick-box">&#10003;</span>
    By confirming your booking, you acknowledge and agree to our service terms and refund policy.
        All payments are considered final and are subject to the terms and conditions outlined by EuroZoom.
        Your trust and cooperation are deeply valued and appreciated.
    </p>
</div>


    </div>

</body>
</html>
