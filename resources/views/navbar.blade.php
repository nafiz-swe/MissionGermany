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
    }

    .nav-links li a {
        color: #000;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
    }

    .nav-links li a:hover {
        color: #1650ad;
    }

    .menu-toggle {
        display: none;
        font-size: 28px;
        cursor: pointer;
        color: #000;
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
            padding: 10px 0;
        }

        .nav-links.show {
            display: flex;
        }

        .nav-links li {
            text-align: center;
            padding: 12px 0;
        }

        .menu-toggle {
            display: block;
        }
    }

    body {
        padding-top: 60px; /* Adjust for fixed nav */
    }
</style>

<nav>
    <div class="nav-container">
        <a href="#" class="logo">MissionGermany</a>
        <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
        <ul class="nav-links" id="navLinks">
            <li><a href="#">Home</a></li>
            <li><a href="#">Course</a></li>
            <li><a href="#">Visa</a></li>
            <li><a href="#">Success</a></li>
            <li><a href="#">Review</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </div>
</nav>

<script>
    function toggleMenu() {
        document.getElementById('navLinks').classList.toggle('show');
    }
</script>
