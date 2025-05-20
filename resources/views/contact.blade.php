<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - MissionGermany</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .contact-section {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }

        .contact-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-form label {
            font-weight: bold;
            margin-top: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>

    {{-- Navigation --}}
    @include('navbar')

    {{-- Contact Form --}}
    <div class="contact-section">
        <h2>Contact Us</h2>

        {{-- Success Alert --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Bootstrap JS (Optional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
