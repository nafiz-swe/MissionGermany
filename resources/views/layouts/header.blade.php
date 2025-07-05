<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-2">
  <div class="container">
    
    <!-- Logo -->
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('images/eurozoom-logo.gif') }}" alt="Fouraxiz Logo" class="logo-img">
    </a>
    <!-- Toggle (Hamburger) Button -->
    <button class="navbar-toggler open-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Close Button -->
    <button class="navbar-toggler close-toggler d-none" type="button">
      <span style="font-size: 2rem;">&times;</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <!-- Only Mobile Social Menu -->
      <ul class="navbar-nav ms-auto flex-column align-items-end top-contact-social-mobile">
        <li class="nav-item d-flex">
          <a href="https://facebook.com" target="_blank" class="nav-link text-dark" style="padding: 0.5px;"><i class="bi bi-facebook" style="color: #1877F2;"></i></a>
          <a href="https://www.linkedin.com/in/nafiz-swe/" target="_blank" class="nav-link text-dark" style="padding: 0.5px;"><i class="bi bi-linkedin" style="color: #0077B5;"></i></a>
          <a href="https://twitter.com" target="_blank" class="nav-link text-dark" style="padding: 0.5px;"><i class="bi bi-twitter" style="color: #1DA1F2;"></i></a>
        </li>
        <li class="nav-item text-muted small">
          <a href="tel:+8801737226404" class="text-muted text-decoration-none d-flex align-items-center position-relative">
            <span class="wave-ring"></span>
            <i class="bi bi-telephone-fill custom-phone-icon me-2"></i>
             01737 226 404
          </a>
        </li>
      </ul>

      <!-- Main Menu -->
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>

        <!-- Services Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item" href="{{ route('services.aupair') }}">Aupair Manage</a></li>
            <li><a class="dropdown-item" href="{{ route('services.ausbildung') }}">Ausbildung Manage</a></li>
            <li><a class="dropdown-item" href="{{ route('services.block_account') }}">Blocked Account Support</a></li>
            <li><a class="dropdown-item" href="{{ route('services.documents') }}">Document Preparation</a></li>
            <li><a class="dropdown-item" href="{{ route('services.dormitory') }}">Dormitory Arrangement</a></li>
            <li><a class="dropdown-item" href="{{ route('services.fsj_bfd') }}">FSJ / BFD Manage</a></li>
            <li><a class="dropdown-item" href="{{ route('services.course') }}">German Language Course</a></li>
            <li><a class="dropdown-item" href="{{ route('services.job') }}">Job Opportunity</a></li>
            <li><a class="dropdown-item" href="{{ route('services.university') }}">University Offer Letter</a></li>
            <li><a class="dropdown-item" href="{{ route('services.visa') }}">Visa Processing Guide</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('success') ? 'active' : '' }}" href="{{ route('success') }}">Success</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('review') ? 'active' : '' }}" href="{{ route('review') }}">Review</a>
        </li>

        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-link p-0" style="color: #000; font-weight: 500; cursor: pointer;">
              Logout
            </button>
          </form>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Login/Register</a>
        </li>
        @endauth


        <li class="nav-item">
          <a href="{{ route('contact') }}"
            class="eurozoom-btn ez-submit ms-3"
            style="text-decoration: none; display: inline-block; padding: 7px 20px;">
            Contact Us
          </a>
        </li>
      </ul>


      <!-- Only Monitor View Social Menu -->
      <ul class="navbar-nav top-contact-social">
        <li class="nav-item d-flex">
          <a href="https://facebook.com" target="_blank" class="nav-link" style="padding-left: 30px;"><i class="bi bi-facebook" style="color: #1877F2;"></i></a>
          <a href="https://www.linkedin.com/in/nafiz-swe/" target="_blank" class="nav-link" style="padding-left: 0;"><i class="bi bi-linkedin" style="color: #0077B5;"></i></a>
          <a href="https://twitter.com" target="_blank" class="nav-link" style="padding-left: 0;"><i class="bi bi-twitter" style="color: #1DA1F2;"></i></a>
        </li>
        <li class="nav-item text-muted small">
          <a href="tel:+8801737226404" class="text-muted text-decoration-none d-flex align-items-center position-relative">
            <span class="wave-ring"></span>
            <i class="bi bi-telephone-fill custom-phone-icon me-2"></i>
            01737 226 404
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  const openToggler = document.querySelector('.open-toggler');
  const closeToggler = document.querySelector('.close-toggler');
  const navCollapse = document.getElementById('navbarNavDropdown');
  openToggler.addEventListener('click', () => {
    navCollapse.classList.add('show'); // Show menu
    openToggler.classList.add('d-none'); // Hide hamburger
    closeToggler.classList.remove('d-none'); // Show close
  });
  closeToggler.addEventListener('click', () => {
    navCollapse.classList.remove('show'); // Hide menu
    closeToggler.classList.add('d-none'); // Hide close
    openToggler.classList.remove('d-none'); // Show hamburger
  });


  // For Dropdown Items
  document.addEventListener('DOMContentLoaded', function() {
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(function(item) {
      const submenu = item.nextElementSibling;
      if (submenu && submenu.classList.contains('submenu')) {
        item.style.cursor = 'pointer';
        item.addEventListener('click', function(e) {
          e.preventDefault();
          document.querySelectorAll('ul.submenu.show-submenu').forEach(function(openMenu) {
            if (openMenu !== submenu) {
              openMenu.classList.remove('show-submenu');
            }
          });
          submenu.classList.toggle('show-submenu');
        });
      }
    });
  });
</script>