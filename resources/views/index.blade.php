<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vatma Aulia Adha - Web Developer</title>
    <style>
        @font-face {
            font-family: 'MyCustomFont';
            src: url('fonts/Stars-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

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

        /* Hero Section */
        .hero-section {
            min-height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 200px 20px 200px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            padding: 40px;
        }

        .content {
            animation: slideInLeft 1.2s ease-out;
        }

        .greeting {
            font-size: 1.2rem;
            color: #8b4a52;
            margin-bottom: 10px;
            font-weight: 400;
        }

        .greeting .wave {
            display: inline-block;
            animation: wave 3s infinite;
        }

        h1 {
            font-size: 4rem;
            font-weight: 900;
            color: #561c24;
            line-height: 1.1;
            margin-bottom: 20px;
            font-family: serif;
        }

        .title {
            font-size: 1.3rem;
            color: #561c24;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 40px;
            font-weight: 500;
        }

        .buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }

        .btn {
            padding: 15px 30px;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.4s ease;
        }

        .btn-primary {
            background: #561c24;
            color: #e8dcc4;
        }

        .btn-primary:hover {
            background: #6d2430;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(86, 28, 36, 0.4);
        }

        .btn-secondary {
            background: #f5f0e1;
            color: #561c24;
            border: 2px solid #d4c5a9;
        }

        .btn-secondary:hover {
            border-color: #561c24;
            background: #fff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(86, 28, 36, 0.2);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: #561c24;
            transition: all 0.4s ease;
        }

        .social-links a:hover {
            color: #8b4a52;
            transform: translateY(-3px);
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-circle {
            width: 100%;
            max-width: 420px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin: 0 auto;
            animation: float 6s ease-in-out infinite;
            background: none;
            border-radius: 0;
            box-shadow: none;
        }

        .profile-circle img {
            width: 100%;
            height: auto;
            object-fit: contain;
            object-position: center;
            border-radius: 0;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes wave {
            0%, 100% {
                transform: rotate(0deg);
            }
            10%, 30% {
                transform: rotate(14deg);
            }
            20%, 40% {
                transform: rotate(-8deg);
            }
            50% {
                transform: rotate(10deg);
            }
            60% {
                transform: rotate(0deg);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Tablet Responsive */
        @media (max-width: 968px) {
            .hero-section {
                padding: 100px 40px 40px 40px;
                min-height: auto;
            }

            .container {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
                padding: 20px;
            }

            .image-container {
                order: -1;
                margin-bottom: 0;
            }

            .profile-circle {
                max-width: 300px;
            }

            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-size: 3rem;
                text-align: center;
            }

            .greeting {
                text-align: center;
            }

            .title {
                text-align: center;
            }

            .buttons {
                justify-content: center;
                flex-wrap: wrap;
            }

            .social-links {
                justify-content: center;
            }
        }

        /* Mobile Responsive */
        @media (max-width: 480px) {
            .hero-section {
                padding: 100px 20px 40px 20px;
                min-height: auto;
            }

            .container {
                gap: 30px;
                padding: 15px;
            }

            .image-container {
                order: -1;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .profile-circle {
                max-width: 240px;
                margin: 0 auto;
            }

            .content {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-size: 2.5rem;
                text-align: center;
                width: 100%;
            }

            .greeting {
                font-size: 1rem;
                text-align: center;
                width: 100%;
            }

            .title {
                font-size: 1.1rem;
                margin-bottom: 30px;
                text-align: center;
                width: 100%;
            }

            .buttons {
                gap: 15px;
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
            }

            .btn {
                padding: 12px 24px;
                font-size: 0.9rem;
            }

            .social-links {
                width: 100%;
                justify-content: center;
                gap: 20px;
            }

            .social-links a svg {
                width: 24px;
                height: 24px;
            }
        }

        /* Extra Small Mobile */
        @media (max-width: 360px) {
            .hero-section {
                padding: 90px 15px 30px 15px;
            }

            .profile-circle {
                max-width: 200px;
            }

            h1 {
                font-size: 2rem;
            }

            .greeting {
                font-size: 0.9rem;
            }

            .title {
                font-size: 1rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar include here -->
    @include('layouts.navbar')
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="image-container">
                <div class="profile-circle">
                    <img src="{{ asset('image/vatma.png') }}" alt="Profile">
                </div>
            </div>

            <div class="content">
                <p class="section-subtitle">Hello <span class="wave">👋</span></p>
                <h1>Vatma Aulia<br>Adha</h1>
                <p class="title">Junior Backend Developer</p>

                <div class="buttons">
                    <a href="#contact" class="btn btn-primary">
                        Let's Talk
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="https://www.canva.com/design/DAGhPJpnP64/eidGwd03td0RyYZ-FcWf7A/edit?utm_content=DAGhPJpnP64&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" class="btn btn-secondary">
                        My CV
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

                <div class="social-links">
                    <a href="https://wa.me/qr/OFRXF6B2B3XBC1" target="_blank" aria-label="WhatsApp">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </a>
                    <a href="https://github.com/darklco" target="_blank" aria-label="GitHub">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Other sections would go here -->
    @include('sections.about')
    @include('sections.project')
    @include('sections.contact')
    @include('layouts.footer')
</body>
</html>