<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Vatma Aulia Adha</title>
    <style>
        .contact-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 80px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInDown 1s ease-out;
        }

        .section-subtitle {
            font-size: 1rem;
            color: #8b4a52;
            font-weight: 500;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 900;
            color: #561c24;
            font-family: serif;
            margin-bottom: 20px;
        }

        .section-description {
            font-size: 1.1rem;
            color: #8b4a52;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 60px;
        }

        .contact-info {
            animation: fadeInLeft 1.2s ease-out;
            width: 100%;
            max-width: 800px;
        }

        .info-title {
            font-size: 2rem;
            font-weight: 700;
            color: #561c24;
            margin-bottom: 20px;
            font-family: serif;
        }

        .info-text {
            font-size: 1rem;
            color: #8b4a52;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .contact-items {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 12px;
            border: 2px solid transparent;
            transition: all 0.4s ease;
        }

        .contact-item:hover {
            border-color: #561c24;
            background: rgba(255, 255, 255, 0.8);
            transform: translateX(5px);
        }
        
        .contact-item:active {
            transform: translateX(5px) scale(0.98);
            background: rgba(255, 255, 255, 0.9);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: #561c24;
            color: #e8dcc4;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-details h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #561c24;
            margin-bottom: 5px;
        }

        .contact-details p {
            font-size: 0.95rem;
            color: #8b4a52;
        }

        .contact-details a {
            color: #8b4a52;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-details a:hover {
            color: #561c24;
        }

        .social-connect {
            margin-top: 50px;
            text-align: center;
        }

        .social-connect h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #561c24;
            margin-bottom: 20px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            background: #561c24;
            color: #e8dcc4;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.4s ease;
        }

        .social-icon:hover {
            background: #6d2430;
            transform: translateY(-5px);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @media (max-width: 968px) {
            .contact-container {
                gap: 40px;
            }

            .section-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .contact-section {
                padding: 40px 20px;
            }

            .section-title {
                font-size: 2rem;
            }

            .info-title {
                font-size: 1.5rem;
            }

            .contact-item {
                padding: 15px;
            }

            .footer-content {
                flex-direction: column;
                gap: 15px;
            }

            .footer-text {
                font-size: 0.85rem;
            }
        }

    </style>
</head>
<body>
    <section class="contact-section" id="contact">
        <div class="section-header">
            <p class="section-subtitle">Get In Touch</p>
            <h2 class="section-title">Contact Me</h2>
            <p class="section-description">
                Have a project in mind or want to collaborate? Feel free to reach out. I'd love to hear from you!
            </p>
        </div>

        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p><a href="mailto:vatmaadha@gmail.com">vatmaadha@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p><a href="tel:+6285236738012">+62 852 3673 8012</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Location</h3>
                            <p>Surabaya, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>