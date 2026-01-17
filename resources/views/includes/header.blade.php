<style>
    /* Top Bar Styles */
    .top-bar {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        background-color: #2356a5;
        color: white;
    }

    /* Sticky Navigation Styles */
    .sticky-nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Add padding to body when nav is sticky to prevent content jump */
    body.has-sticky-nav {
        padding-top: 80px;
        /* Adjust this value based on your navbar height */
    }

    .top-bar a {
        color: white;
        text-decoration: none;
        transition: color 0.3s;
    }

    .top-bar a:hover {
        color: #f8f9fa;
        text-decoration: underline;
    }

    .icon {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 0.5rem;
    }

    .email-text {
        text-transform: lowercase;
    }

    /* Main Navbar Styles */
    .main-navbar {
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 0.5rem 0;
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1rem;
    }

    .logo-container {
        display: flex;
        align-items: center;
        text-decoration: none !important;
    }

    .logo-img {
        width: 100px;
    }

    .logo-text {
        margin-left: 10px;
        line-height: 1.2;
        font-size: 19px;
        font-weight: 500;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-item {
        margin: 0 0.3rem;
    }

    .nav-link {
        padding: 0.4rem 0.5rem;
        text-decoration: none;
        display: block;
        position: relative;
        transition: all 0.3s ease;
    }

    .nav-link span {
        color: #2356a5;
        font-weight: 400;
        font-size: 0.9rem;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background-color: #2356a5;
        transition: all 0.3s ease;
    }

    .nav-link:hover::after {
        width: 100%;
        left: 0;
    }

    .menu-toggle {
        display: none;
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: #2356a5;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .top-bar .row {
            flex-direction: column;
            text-align: center;
        }

        .top-bar .topper {
            justify-content: center !important;
            margin-bottom: 0.5rem;
        }

        .navbar-container {
            flex-wrap: wrap;
        }

        .menu-toggle {
            display: block;
        }

        .nav-menu {
            display: none;
            width: 100%;
            flex-direction: column;
            padding: 1rem 0;
        }

        .nav-menu.active {
            display: flex;
        }

        .nav-item {
            margin: 0.5rem 0;
            text-align: center;
        }
    }

    @media (max-width: 768px) {
        .logo-text {
            font-size: 16px;
        }

        .logo-img {
            width: 80px;
        }

        .top-bar .contact-info {
            flex-direction: column;
            align-items: center;
        }

        .top-bar .text {
            margin-bottom: 0.5rem;
        }
    }
</style>

<!-- Top Bar -->
<div class=" bg-[#2356] top py-1">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md-12 pr-4 d-flex topper align-items-center justify-content-center ">
                        <div class="col-md-3 pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-mail"></span></div>
                            <!-- <span class="text"><a href="mail:to=info@goodlife.rw">
        info@goodlife.rw
    </a></span> -->
                        </div>

                    </div>
                    <div class="icon mr-2 d-flex justify-content-center align-items-center ">
                        <span class="text mr-2 ">Call us on Tel:<a href=""> +250 791 232 266 </a></span>
                        <span class="text mr-2">Email:<a href="mail:to=info@goodlife.rw"
                                style="text-transform: lowercase;">
                                info@goodlife.rw
                            </a></span>
                    </div>
                    <div class="col-md-3 pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-mail"></span></div>
                        <!-- <span class="text"><a href="mail:to=info@goodlife.rw">
        info@goodlife.rw
    </a></span> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="main-navbar sticky-nav">
    <div class="main-container navbar-container">
        <a class="logo-container" href="/">
            <img src="/images/logos/logo.png" alt="Goodlife Logo" class="logo-img">
            <p class="logo-text mb-0">
                <span style="color: #2356a5;">GOODLIFE HEALTH AND BEAUTY</span><br>
                <span style="font-size: 16px; color: black;">FARUMASI UBWIZA N'UBUZIMA</span>
            </p>
        </a>

        <button class="menu-toggle" id="menu-toggle">
            <span class="oi oi-menu"></span>
        </button>

        <ul class="nav-menu" id="nav-menu">
            <li class="nav-item"><a href="/" class="nav-link"><span><strong>Home</strong></span></a></li>
            <li class="nav-item"><a href="/about" class="nav-link"><span><strong>About</strong></span></a></li>
            <li class="nav-item"><a href="/#service-section" class="nav-link"><span><strong>Services</strong></span></a>
            </li>
            <li class="nav-item"><a href="/branches" class="nav-link"><span><strong>Branches</strong></span></a></li>
            <li class="nav-item"><a href="/csi-project" class="nav-link"><span><strong>CSI Project</strong></span></a></li>
            <li class="nav-item"><a href="/promotions" class="nav-link"><span><strong>Promotions</strong></span></a></li>
            <li class="nav-item"><a href="/apply" class="nav-link"><span><strong>Apply</strong></span></a></li>
            <li class="nav-item"><a href="/contact" class="nav-link"><span><strong>Contact</strong></span></a></li>
        </ul>
    </div>
</nav>

<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('nav-menu').classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', function (event) {
        const navMenu = document.getElementById('nav-menu');
        const menuToggle = document.getElementById('menu-toggle');

        if (!navMenu.contains(event.target) && !menuToggle.contains(event.target) && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
        }
    });

    // Sticky navigation functionality
    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.querySelector('.main-navbar');
        const body = document.body;
        const navbarHeight = navbar.offsetHeight;

        function handleScroll() {
            if (window.scrollY > 100) { // Adjust this value as needed
                navbar.classList.add('sticky-nav');
                body.classList.add('has-sticky-nav');
                body.style.paddingTop = navbarHeight + 'px';
            } else {
                navbar.classList.remove('sticky-nav');
                body.classList.remove('has-sticky-nav');
                body.style.paddingTop = '0';
            }
        }

        window.addEventListener('scroll', handleScroll);

        // Update active state based on current page
        const currentLocation = location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            const linkPath = link.getAttribute('href');
            if (linkPath === currentLocation ||
                (currentLocation.includes(linkPath) && linkPath !== '/')) {
                link.style.fontWeight = 'bold';
                link.style.color = '#2356a5';
            }
        });
    });
</script>