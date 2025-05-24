<!-- resources/views/navbar.blade.php -->
<style>
    nav {
        background-color: #fff;
        color: #000;
        padding: 12px 20px;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
        color: #000;
        text-decoration: none;
    }

    .nav-links {
        display: flex;
        gap: 25px;
        list-style: none;
        position: relative;
        margin-bottom: 0;
    }

    .nav-links li {
        position: relative;
    }

    .nav-links li a {
        color: #000;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
    }

    .nav-links li a:hover {
        color: #00c6aa;
    }

    .menu-toggle {
        display: none;
        font-size: 28px;
        cursor: pointer;
        color: #000;
    }

    /* Dropdown styles */
    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        min-width: 220px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        z-index: 999;
        flex-direction: column;
    }

    .dropdown-content a {
        padding: 10px 20px;
        text-decoration: none;
        color: #000;
        white-space: nowrap;
        transition: background-color 0.3s;
    }

    .dropdown-content a:hover {
        background-color: #f0f0f0;
    }

    /* Show dropdown when hovering the whole li */
    .dropdown:hover .dropdown-content,
    .dropdown:focus-within .dropdown-content {
        display: flex;
        flex-direction: column;
    }

    @media (max-width: 768px) {
    .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        background-color: #fff;
        padding: 10px 0 30px 0;
        max-height: 90vh;
        overflow-y: auto;
    }

    .nav-links.show {
        display: flex;
    }

    .nav-links li {
        text-align: left;
        padding: 0 21px;
    }

    .dropdown-content {
        position: static;
        box-shadow: none;
        max-height: 300px; /* Adjust based on content */
        overflow-y: auto;  /* Enable scroll inside dropdown */
        margin: 20px 0 0 0;
    }

    .dropdown:hover .dropdown-content {
        display: flex;
    }

    .menu-toggle {
        display: block;
    }
}

    body {
        padding-top: 60px;
    }
</style>

<nav>
    <div class="nav-container">
        <a href="{{ route('home') }}" class="logo">EuroZoom</a>
        <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
        <ul class="nav-links" id="navLinks">
    <li><a href="{{ route('home') }}">Home</a></li>

    <!-- Services Dropdown -->
    <li class="dropdown">
        <a href="#">Services</a>
        <div class="dropdown-content">
            <a href="{{ route('services.aupair') }}">Aupair Manage</a>
            <a href="{{ route('services.ausbildung') }}">Ausbildung Manage</a>
            <a href="{{ route('services.block_account') }}">Block Account Support</a>
            <a href="{{ route('services.course') }}">Course (Learn German)</a>
            <a href="{{ route('services.documents') }}">Documents Support</a>
            <a href="{{ route('services.dormitory') }}">Dormitory Manage</a>
            <a href="{{ route('services.fsj_bfd') }}">FSJ/BFD Manage</a>
            <a href="{{ route('services.job') }}">Job Manage</a>
            <a href="{{ route('services.university') }}">University Manage</a>
            <a href="{{ route('services.visa') }}">VISA Support</a>
        </div>
    </li>

    <li><a href="{{ route('success') }}">Success</a></li>
    <li><a href="{{ route('review') }}">Review</a></li>
    <li><a href="{{ route('contact') }}">Contact Us</a></li>

    @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; color:#000; cursor:pointer; font-weight:500;">
                    Logout
                </button>
            </form>
        </li>
    @else
        <li><a href="{{ route('register') }}">Login/Register</a></li>
    @endauth
</ul>

    </div>
</nav>

<script>
    function toggleMenu() {
        var navLinks = document.getElementById("navLinks");
        navLinks.classList.toggle("show");
    }
</script>
