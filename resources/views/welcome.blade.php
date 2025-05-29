<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Germany Visa Processing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  body {
    background-color: #f2f2f2;
    color: #333;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    font-family: sans-serif;
  }
  .hero {
  height: 100vh;
  position: relative;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  max-width: 100%;
  margin: 0 auto;
}
.background-video {
  position: absolute;
  top: 0; left: 0;
  width: 100vw;
  height: 100%;
  object-fit: cover;
  z-index: 1;
  filter: brightness(0.6);
  overflow: hidden;
}
  .overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    /* background: linear-gradient(135deg, #016d5a96, #00b7a88f); */
    background:rgba(0, 183, 168, 0.26);
    filter: brightness(0.5);
    z-index: 2;
  }

  .hero-content {
    position: relative;
    z-index: 3;
    max-width: 800px;
    padding: 20px;
  }

  .hero h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 1rem;
  }

  #typing-title::after {
    content: '|';
    animation: blink 0.7s infinite;
  }

  @keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
  }

  .btn-cta {
    background-color: #00c6aa;
    border: none;
    padding: 12px 30px;
    font-weight: bold;
    color: white;
    margin-top: 20px;
    border-radius: 5px;
    font-size: 1rem;
    transition: background 0.3s;
    text-decoration: none;
    display: inline-block;
  }

  .btn-cta:hover {
    background-color: #00a793;
  }

  @media (max-width: 768px) {
    .hero h1 {
      font-size: 2rem;
    }

    .hero-content p {
      font-size: 1rem;
    }
  }

  /* Visa Card Hover Effect */
  .visa-card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
  }

  /* Section Title */
  .section-title {
    text-align: center;
    margin-bottom: 40px;
    font-weight: bold;
    color: #00c6aa;
    text-transform: uppercase;
    text-emphasis: open;
  }

  /* Why Choose Us Box */
  .why-box {
    background-color: #fff;
    border-left: 5px solid #00c6aa;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
  }

  /* Stats Section */
  .stats h2 {
    color: #00c6aa;
    font-size: 40px;
    font-weight: bold;
  }

  /* Section Backgrounds */
  .testimonial,
  .faq,
  .courses {
    background-color: #f8f9fa;
    padding: 60px 0;
  }

  /* FAQ Items */
  .faq-item {
    border-left: 4px solid #00c6aa;
    background: #fff;
    padding: 20px;
    margin-bottom: 20px;
  }

  /* Call To Action */
  .cta {
    background: linear-gradient(135deg, #016d5a, #00b7a8);
    color: white;
    padding: 50px 20px;
    text-align: center;
  }
</style>

</head>
<body>

@include('navbar')

<!-- Hero Section -->
<div class="hero">
  <!-- Background Video -->
  <video autoplay muted loop playsinline class="background-video">
    <source src="{{ asset('videos/EuroZoom-Banner.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
  </video>

  <!-- Gradient Overlay -->
  <div class="overlay"></div>

  <!-- Content -->
  <div class="hero-content">
    <h1 id="typing-title">Start your European journey today</h1>
    <p>Your gateway to a successful European visa journey – with expert guidance</p>
    <a href="{{ url('/register') }}" class="btn btn-cta">Start Your Journey</a>
  </div>
</div>

<!-- Visa Services -->
<div class="container py-5">
  <h2 class="section-title">Our Visa Services</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach([
      'Student Visa' => 'Apply to universities.',
      'Job Seeker Visa' => 'Find job in 6 months.',
      'Employment Visa' => 'Work with job offer.',
      'Freelancer Visa' => 'Self-employed entry.',
      'Family Reunion Visa' => 'Join your family.',
      'Language Course Visa' => 'Intensive German.'
    ] as $title => $desc)
    <div class="col">
      <div class="card visa-card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>
          <p class="card-text">{{ $desc }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!-- Why Choose Us -->
<div class="container py-5">
  <h2 class="section-title">Why Choose Us?</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="why-box">
        <h5>Expert Consultants</h5>
        <p>We guide you through every step from course to visa.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="why-box">
        <h5>Certified Language Trainers</h5>
        <p>Our language programs help you pass Goethe exams.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="why-box">
        <h5>Visa Success</h5>
        <p>Proven visa success record for 1000+ students.</p>
      </div>
    </div>
  </div>
</div>

<!-- Stats -->
<div class="stats text-center py-5">
  <div class="row">
    <div class="col-md-4">
      <h2 id="studentsCount">0</h2>
      <p>Students Trained</p>
    </div>
    <div class="col-md-4">
      <h2 id="visaCount">0</h2>
      <p>Visa Processed</p>
    </div>
    <div class="col-md-4">
      <h2 id="settledCount">0</h2>
      <p>Settled in Germany</p>
    </div>
  </div>
</div>

<!-- Testimonials -->
<div class="testimonial">
  <div class="container">
    <h2 class="section-title">Student Testimonials</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card p-3 h-100">
          <p>"Got my student visa within 2 months! They guided me like family."</p>
          <h6 class="text-end">– Afsana Mim, Berlin</h6>
        </div>
      </div>
      <div class="col">
        <div class="card p-3 h-100">
          <p>"Their A1-B2 German course helped me pass Goethe exam easily."</p>
          <h6 class="text-end">– Rakib Hasan, Munich</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Course Highlights -->
<div class="courses">
  <div class="container">
    <h2 class="section-title">Language Course Highlights</h2>
    <div class="row text-center">
      <div class="col-md-3">
        <h5>A1 Level</h5>
        <p>Beginner level German, focus on basics</p>
      </div>
      <div class="col-md-3">
        <h5>A2 Level</h5>
        <p>Conversational German, grammar focused</p>
      </div>
      <div class="col-md-3">
        <h5>B1 Level</h5>
        <p>Advance daily conversation, test prep</p>
      </div>
      <div class="col-md-3">
        <h5>B2 Level</h5>
        <p>Higher study/job level German</p>
      </div>
    </div>
  </div>
</div>

<!-- FAQ Section -->
<div class="faq">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-item">
      <h5>How long does visa processing take?</h5>
      <p>On average, 4 to 8 weeks after document submission.</p>
    </div>
    <div class="faq-item">
      <h5>Do you provide language certificates?</h5>
      <p>Yes, we prepare students for Goethe exams.</p>
    </div>
  </div>
</div>

<!-- Contact CTA -->
<div class="cta">
  <h2>Have Questions?</h2>
  <p>Let us help you plan your future in Germany.</p>
  <a href="{{ url('/contact') }}" class="btn btn-light">Contact Us</a>
</div>

@include('layouts.footer')

<!-- Scripts -->
<script>
const titles = [
"Learn German with certified trainers.",
"Work and study opportunities in top European countries.",
"We manage offer letters for all German visa types.",
"Expert support for smooth visa processing.",
"Register first, pay next, and confirm your booking."
];

const typingTitle = document.getElementById("typing-title");
const typingSpeed = 60; // ms per letter
const displayDuration = 5000; // 5 seconds full display
let currentTitleIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeTitles() {
  const fullText = titles[currentTitleIndex];

  if (!isDeleting) {
    // Typing
    typingTitle.textContent = fullText.slice(0, charIndex + 1);
    charIndex++;

    if (charIndex === fullText.length) {
      // Wait 5 seconds then start deleting
      setTimeout(() => {
        isDeleting = true;
        typeTitles();
      }, displayDuration);
      return;
    }
  } else {
    // Deleting
    typingTitle.textContent = fullText.slice(0, charIndex - 1);
    charIndex--;

    if (charIndex === 0) {
      isDeleting = false;
      currentTitleIndex = (currentTitleIndex + 1) % titles.length;
    }
  }
  setTimeout(typeTitles, typingSpeed);
}

window.onload = typeTitles;

  // Stat counter animation
  function animateCount(id, end, duration) {
    let start = 0;
    const element = document.getElementById(id);
    const increment = end / (duration / 10);

    const counter = setInterval(() => {
      start += increment;
      if (start >= end) {
        element.textContent = Math.floor(end) + "+";
        clearInterval(counter);
      } else {
        element.textContent = Math.floor(start);
      }
    }, 10);
  }

  // Start when visible
  function startCountersWhenVisible() {
    const statsSection = document.querySelector(".stats");
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCount("studentsCount", 1200, 1500);
          animateCount("visaCount", 800, 1500);
          animateCount("settledCount", 450, 1500);
          observer.disconnect();
        }
      });
    });
    observer.observe(statsSection);
  }

  document.addEventListener("DOMContentLoaded", startCountersWhenVisible);
</script>

</body>
</html>
