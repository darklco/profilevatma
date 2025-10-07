<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar - Vatma Aulia Adha</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffffff;
            min-height: 100vh;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid #561c24;
            z-index: 1000;
            animation: slideDown 1s ease-out;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 900;
            color: #561c24;
            text-decoration: none;
            font-family: serif;
            transition: all 0.4s ease;
            z-index: 1002;
            display: flex;
            align-items: center;
        }

        .logo:hover {
            color: #8b4a52;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 40px;
            align-items: center;
        }

        .nav-link {
            color: #561c24;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            position: relative;
            transition: all 0.4s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #8b4a52;
            transition: width 0.4s ease;
        }

        .nav-link:hover {
            color: #8b4a52;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active {
            color: #8b4a52;
        }

        .nav-link.active::after {
            width: 100%;
        }

        .nav-btn {
            padding: 12px 28px;
            background: #561c24;
            color: #e8dcc4;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.4s ease;
        }

        .nav-btn:hover {
            background: #6d2430;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(86, 28, 36, 0.4);
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
            z-index: 1001;
            flex-shrink: 0;
            padding: 8px;
            background: transparent;
            border: none;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
        }

        .hamburger span {
            width: 20px;
            height: 2px;
            background: #561c24;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
            transform: translateX(-10px);
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-100%);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Tablet Responsive */
        @media (max-width: 968px) {
            .nav-container {
                padding: 15px 30px;
            }

            .logo {
                font-size: 1.3rem;
            }

            .hamburger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                right: -100%;
                top: 0;
                flex-direction: column;
                background: rgba(232, 220, 196, 0.98);
                backdrop-filter: blur(10px);
                width: 70%;
                max-width: 400px;
                height: 100vh;
                text-align: center;
                transition: right 0.4s ease;
                border-left: 2px solid #561c24;
                padding: 100px 40px 40px;
                gap: 35px;
                justify-content: flex-start;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-link {
                font-size: 1.2rem;
                padding: 10px 0;
                width: 100%;
            }

            .nav-link::after {
                display: none;
            }

            .nav-btn {
                margin-top: 20px;
                padding: 15px 35px;
                font-size: 1.1rem;
            }
        }

        /* Mobile Responsive */
        @media (max-width: 480px) {
            .nav-container {
                padding: 12px 20px;
            }

            .logo {
                font-size: 1.2rem;
            }

            .logo svg {
                width: 32px;
                height: 32px;
            }

            .hamburger {
                flex-shrink: 0;
            }

            .hamburger span {
                width: 22px;
                height: 2.5px;
            }

            .nav-menu {
                width: 80%;
                padding: 80px 20px 40px;
                gap: 30px;
            }

            .nav-link {
                font-size: 1.1rem;
                padding: 8px 0;
            }

            .nav-btn {
                padding: 14px 30px;
                font-size: 1rem;
            }
        }

        /* Demo content */
        .demo-content {
            padding-top: 100px;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 40px;
            padding-right: 40px;
        }

        .demo-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #8b4a52;
            border-bottom: 1px solid #d4c5a9;
        }

        @media (max-width: 480px) {
            .demo-content {
                padding-left: 20px;
                padding-right: 20px;
            }

            .demo-section {
                font-size: 1.5rem;
                min-height: 60vh;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <circle cx="20" cy="20" r="18" fill="#561c24" stroke="#8b4a52" stroke-width="2"/>
                    <text x="20" y="27" font-family="serif" font-size="20" font-weight="bold" fill="#e8dcc4" text-anchor="middle">V</text>
                </svg>
            </a>
            
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="#contact" class="nav-btn">
                    Contact Me
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a></li>
            </ul>

            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <script>
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');
        const navLinks = document.querySelectorAll('.nav-link');

        // Toggle hamburger menu
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : 'auto';
        });

        // Handle nav link clicks
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove('active'));
                // Add active class to clicked link
                this.classList.add('active');
                
                // Close mobile menu
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideMenu = navMenu.contains(event.target);
            const isClickOnHamburger = hamburger.contains(event.target);
            
            if (!isClickInsideMenu && !isClickOnHamburger && navMenu.classList.contains('active')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.borderBottom = '3px solid #561c24';
            } else {
                navbar.style.borderBottom = '2px solid #561c24';
            }
        });
    </script>
</body>
</html>