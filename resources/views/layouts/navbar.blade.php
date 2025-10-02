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
            gap: 5px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: #561c24;
            border-radius: 3px;
            transition: all 0.4s ease;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(8px, 8px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
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

        @media (max-width: 968px) {
            .nav-container {
                padding: 20px;
            }

            .hamburger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background: rgba(232, 220, 196, 0.98);
                width: 100%;
                text-align: center;
                transition: left 0.4s ease;
                border-bottom: 2px solid #561c24;
                padding: 40px 0;
                gap: 30px;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-link::after {
                display: none;
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
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">VA</a>
            
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
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

        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

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