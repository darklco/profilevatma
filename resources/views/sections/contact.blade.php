<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Vatma Aulia Adha</title>
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
            padding: 40px 20px;
        }

        .contact-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 40px;
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
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
        }

        .contact-info {
            animation: fadeInLeft 1.2s ease-out;
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

        .contact-form {
            animation: fadeInRight 1.2s ease-out;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-size: 0.95rem;
            font-weight: 600;
            color: #561c24;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            font-size: 1rem;
            font-family: inherit;
            color: #561c24;
            background: rgba(255, 255, 255, 0.6);
            border: 2px solid #d4c5a9;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #561c24;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .submit-btn {
            width: 100%;
            padding: 16px 32px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #e8dcc4;
            background: #561c24;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.4s ease;
        }

        .submit-btn:hover {
            background: #6d2430;
            transform: translateY(-2px);
        }

        .submit-btn:active {
            transform: translateY(0);
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

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @media (max-width: 968px) {
            .contact-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
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
                            <p><a href="mailto:vatma@example.com">vatmaadha@gmail.com</a></p>
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
                            <p><a href="tel:+62123456789">+62 852 3673 8012</a></p>
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

            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message"></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        Send Message
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="22" y1="2" x2="11" y2="13"/>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <div class="social-connect">
            <h3>Connect With Me</h3>
            <div class="social-icons">
                <a href="https://github.com/darklco" target="_blank" class="social-icon" aria-label="GitHub">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/vdaisy_?igsh=MWRjaWE2MmwzdHJpcg==" target="_blank" class="social-icon" aria-label="Instagram">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" fill="none"/>
                        <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" fill="none"/>
                        <circle cx="17.5" cy="6.5" r="1.5"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <script>
        const contactForm = document.getElementById('contactForm');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Ambil data form
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };
            
            // Simulasi pengiriman (ganti dengan API endpoint Anda)
            console.log('Form submitted:', formData);
            
            // Tampilkan alert sukses
            alert('Thank you! Your message has been sent successfully. I will get back to you soon!');
            
            // Reset form
            contactForm.reset();
        });

        // Animasi saat scroll
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.contact-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'all 0.6s ease-out';
            observer.observe(item);
        });
    </script>
</body>
</html>