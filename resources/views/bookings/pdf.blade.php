


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EuroZoom Booking Invoice</title>
    <style>
        @page {
            margin: 40px;
        }

        body {
            /* font-family: DejaVu Sans, sans-serif; */
            font-size: 13px;
            color: #333;
            background: #fff;
        }

        .invoice-box {
            width: 100%;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
        }

        .header h2 {
            font-size: 30px;
            color: #003366;
            margin: 10px 0 5px 0;
        }

        .info-table,
        .payment-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .info-table th,
        .info-table td,
        .payment-table th,
        .payment-table td {
            padding: 8px 10px;
            border: 1px solid #000;
        }

        .info-table th,
        .payment-table th {
            background-color: #f0f4f7;
            color: #000;
            text-align: left;
        }

        .section-title {
            font-size: 22px;
            color: #003366;
            font-weight: bold;
            margin: 20px 0 8px 0;
        }

        .proof-img {
            margin-top: 10px;
        }

        .proof-img img {
            width: 300px;
            border: 1px solid #999;
        }

        .footer {
            margin-top: 40px;
            font-size: 11px;
            text-align: center;
            color: #888;
        }

    </style>
</head>
<body>

    <div class="invoice-box">

        <div class="header">
            
            <img src="{{ asset('images/EuroZoom-footer.webp') }}" alt="Logo">
            <h2>EuroZoom Booking Invoice</h2>
            <p style="font-size: 12px;">www.eurozoom.org | support@eurozoom.org</p>
        </div>
        <p><strong>Date:</strong> {{ $booking->created_at->format('d M Y') }}</p>

        <div class="section-title">Booking Information</div>
        <table class="info-table">
            <tr>
                <th>Booking ID</th>
                <td>#{{ $booking->id }}</td>
                <th>Full Name</th>
                <td>{{ $booking->full_name }}</td>
            </tr>
            <tr>
                <th>Place of Birth</th>
                <td>{{ $booking->place_of_birth }}</td>
                <th>Date of Birth</th>
                <td>{{ \Carbon\Carbon::parse($booking->date_of_birth)->format('d M Y') }}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $booking->mobile }}</td>
                <th>Passport/NID</th>
                <td>{{ $booking->passport_or_nid }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td colspan="3">{{ $booking->email }}</td>
            </tr>
        </table>

        <div class="section-title">Service & Payment</div>
        <table class="payment-table">
            <tr>
                <th>Service Country</th>
                <td>{{ $booking->service_country }}</td>
                <th>Service Subject</th>
                <td>{{ $booking->service_subject }}</td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td>{{ $booking->payment_method }}</td>
                <th>Amount Paid</th>
                <td>৳ {{ number_format($booking->payment_amount, 2) }}</td>
            </tr>
        </table>

        <div class="section-title">Payment Proof</div>
        <div class="proof-img">
            <img src="{{ public_path('storage/' . $booking->payment_proof) }}" alt="Payment Proof">
        </div>

        <div class="footer">
            <p>Thank you for booking with EuroZoom.</p>
            <p>This invoice is system-generated and does not require a signature or seal.</p>
        </div>

                <div class="qr-code">
            <img src="data:image/png;base64, {!! base64_encode(QrCode::size(100)->generate('Booking ID: '.$booking->id.', Name: '.$booking->full_name.', Email: '.$booking->email)) !!} ">
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} EuroZoom. All rights reserved.</p>
        </div>

    </div>

</body>
</html>
