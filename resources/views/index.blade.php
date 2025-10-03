<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vatma Aulia Adha - Web Developer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #e8dcc4;
            min-height: 100vh;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 20px 20px 20px;
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
            font-size: 4.5rem;
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
            font-size: 1.5rem;
            transition: all 0.4s ease;
        }

        .social-links a:hover {
            color: #8b4a52;
            transform: translateY(-3px);
        }

        .image-.container {
            max-width: 1200px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            /* sebelumnya 60px */
            align-items: center;
            padding: 20px 40px;
            /* lebih rapat */
        }

        .profile-circle {
            width: 100%;
            max-width: 420px;
            /* sebelumnya 350px */
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

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes wave {

            0%,
            100% {
                transform: rotate(0deg);
            }

            10%,
            30% {
                transform: rotate(14deg);
            }

            20%,
            40% {
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

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Mobile Responsive - Centered Layout */
        @media (max-width: 968px) {
            .container {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
                padding: 20px;
            }

            /* Gambar di paling atas */
            .image-container {
                order: -1;
                margin-bottom: 20px;
            }

            .profile-circle {
                max-width: 280px;
            }

            /* Content rata tengah */
            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-size: 3rem;
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

        @media (max-width: 480px) {
            .hero-section {
                padding: 60px 15px 20px 15px;
            }

            .container {
                gap: 30px;
                padding: 15px;
            }

            h1 {
                font-size: 2.5rem;
            }

            .greeting {
                font-size: 1rem;
            }

            .title {
                font-size: 1.1rem;
                margin-bottom: 30px;
            }

            .btn {
                padding: 12px 24px;
                font-size: 0.9rem;
            }

            .buttons {
                gap: 15px;
            }

            .profile-circle {
                max-width: 240px;
            }

            .social-links a {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
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
                    <a href="#cv" class="btn btn-secondary">
                        My CV
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

                <div class="social-links">
                    <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                    <a href="https://github.com/darklco" target="_blank" aria-label="GitHub">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('sections.about')
    @include('sections.project')
    @include('sections.contact')
    {{-- @include('layouts.footer') --}}
</body>

</html>
