<!-- resources/views/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Mission Germany</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f2f5;
        }

        .contact-section {
            max-width: 800px;
            margin: 80px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .contact-section h2 {
            text-align: center;
            color: #1650ad;
            margin-bottom: 30px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: 500;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .contact-form button {
            background-color: #1650ad;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #0e3c8a;
        }

        @media (max-width: 600px) {
            .contact-section {
                margin: 60px 20px;
            }
        }
    </style>
</head>
<body>
@include('navbar')

<div class="contact-section">
    <h2>Contact Us</h2>
    <form class="contact-form" method="POST" action="{{ route('contact.send') }}">
        @csrf

        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Your Email</label>
        <input type="email" name="email" id="email" required>

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>

        <label for="message">Your Message</label>
        <textarea name="message" id="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>
@include('layouts.footer')

</body>
</html>
