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

    {{-- Navigation --}}
    @include('navbar')
    <div class="text-white text-center py-5" style="background: linear-gradient(135deg, #016d5a, #00b7a8); padding-left: 20px; padding-right: 20px;">
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
                <button type="submit" class="eurozoom-btn ez-submit"> Send Message </button>
            </div>
        </form>
    </div>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Bootstrap JS (Optional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
