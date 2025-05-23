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

        .contact-btn {
            padding: 8px 18px;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            width: 100%;
            background: linear-gradient(135deg, oklch(55% 0.23 131.684), oklch(70% 0.18 131.684));
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 82, 204, 0.25);
        }

        .contact-btn:hover {
            background: linear-gradient(135deg, oklch(50% 0.25 131.684), oklch(68% 0.16 131.684));
            box-shadow: 0 5px 15px rgba(0, 82, 204, 0.35);
        }

    </style>
</head>
<body>

    {{-- Navigation --}}
    @include('navbar')
    <div class="text-white text-center py-5" style="background:oklch(64.8% 0.2 131.684); padding-left: 20px; padding-right: 20px;">
        <h1>Contact Us</h1>
        <p>Have questions or need help? Reach out to us anytime — we’re here for you!</p>
    </div>


    {{-- Contact Form --}}
    <div class="contact-section">
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

            <div class="text-center mt-3">
                <button type="submit" class="contact-btn"> Send Message </button>
            </div>
        </form>
    </div>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Bootstrap JS (Optional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
