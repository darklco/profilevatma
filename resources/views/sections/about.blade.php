<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Vatma Aulia Adha</title>
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

        .about-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 40px;
        }

        /* Header */
        .section-header {
            text-align: center;
            margin-bottom: 30px;
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

        /* About Content */
        .about-content {
            display: block;
            margin-bottom: 40px;
            text-align: center;
        }

        .about-image {
            display: none;
        }

        .about-text {
            animation: fadeInUp 1s ease-out;
            max-width: 900px;
            margin: 0 auto;
            text-align: left;
        }

        .about-text h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #561c24;
            margin-bottom: 20px;
            font-family: serif;
        }

        .about-text p {
            font-size: 1.05rem;
            color: #8b4a52;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .highlight {
            color: #561c24;
            font-weight: 600;
        }

        /* Skills Section */
        .skills-section {
            margin-bottom: 40px;
        }

        .skills-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .skills-header h3 {
            font-size: 2.5rem;
            font-weight: 900;
            color: #561c24;
            font-family: serif;
            margin-bottom: 15px;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .skill-card {
            background: rgba(255, 255, 255, 0.6);
            border: 2px solid #d4c5a9;
            border-radius: 12px;
            padding: 25px;
            transition: all 0.4s ease;
            animation: fadeInUp 0.8s ease-out;
        }

        .skill-card:nth-child(1) { animation-delay: 0.1s; }
        .skill-card:nth-child(2) { animation-delay: 0.2s; }
        .skill-card:nth-child(3) { animation-delay: 0.3s; }

        .skill-card:hover {
            border-color: #561c24;
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.9);
        }

        .skill-icon {
            width: 60px;
            height: 60px;
            background: #561c24;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .skill-card h4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #561c24;
            margin-bottom: 15px;
        }

        .skill-list {
            list-style: none;
        }

        .skill-list li {
            color: #8b4a52;
            padding: 6px 0;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .skill-list li::before {
            content: '▹';
            color: #561c24;
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Experience Timeline */
        .experience-section {
            margin-bottom: 40px;
        }

        .experience-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .experience-header h3 {
            font-size: 2.5rem;
            font-weight: 900;
            color: #561c24;
            font-family: serif;
        }

        .timeline {
            position: relative;
            padding-left: 50px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: #d4c5a9;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
            animation: fadeInUp 0.8s ease-out;
        }

        .timeline-item:nth-child(1) { animation-delay: 0.1s; }
        .timeline-item:nth-child(2) { animation-delay: 0.2s; }
        .timeline-item:nth-child(3) { animation-delay: 0.3s; }

        .timeline-dot {
            position: absolute;
            left: -38px;
            top: 5px;
            width: 16px;
            height: 16px;
            background: #561c24;
            border: 3px solid #e8dcc4;
            border-radius: 50%;
        }

        .timeline-content {
            background: rgba(255, 255, 255, 0.6);
            border: 2px solid #d4c5a9;
            border-radius: 12px;
            padding: 20px;
            transition: all 0.4s ease;
        }

        .timeline-content:hover {
            border-color: #561c24;
            background: rgba(255, 255, 255, 0.9);
        }

        .timeline-date {
            display: inline-block;
            padding: 6px 14px;
            background: #561c24;
            color: #e8dcc4;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .timeline-content h4 {
            font-size: 1.4rem;
            font-weight: 700;
            color: #561c24;
            margin-bottom: 5px;
        }

        .timeline-company {
            font-size: 1rem;
            color: #8b4a52;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .timeline-content p {
            color: #8b4a52;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        /* Stats Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card {
            text-align: center;
            padding: 25px 20px;
            background: rgba(255, 255, 255, 0.6);
            border: 2px solid #d4c5a9;
            border-radius: 12px;
            transition: all 0.4s ease;
        }

        .stat-card:hover {
            border-color: #561c24;
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.9);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: #561c24;
            font-family: serif;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1rem;
            color: #8b4a52;
            font-weight: 500;
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            padding: 40px 40px;
            background: rgba(255, 255, 255, 0.6);
            border: 2px solid #d4c5a9;
            border-radius: 12px;
        }

        .cta-section h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #561c24;
            margin-bottom: 15px;
            font-family: serif;
        }

        .cta-section p {
            font-size: 1.1rem;
            color: #8b4a52;
            margin-bottom: 25px;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 35px;
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
            background: transparent;
            color: #561c24;
            border: 2px solid #561c24;
        }

        .btn-secondary:hover {
            background: #561c24;
            color: #e8dcc4;
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        /* Tablet Responsive */
        @media (max-width: 968px) {
            .about-section {
                padding: 40px 30px;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .about-text h3 {
                font-size: 1.8rem;
            }

            .skills-header h3,
            .experience-header h3 {
                font-size: 2rem;
            }

            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .timeline {
                padding-left: 40px;
            }

            .stats-section {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Mobile Responsive */
        @media (max-width: 480px) {
            .about-section {
                padding: 30px 20px;
            }

            .section-header {
                margin-bottom: 25px;
            }

            .section-subtitle {
                font-size: 0.85rem;
                letter-spacing: 1.5px;
            }

            .section-title {
                font-size: 2rem;
            }

            .about-content {
                margin-bottom: 30px;
            }

            .about-text h3 {
                font-size: 1.5rem;
            }

            .about-text p {
                font-size: 0.95rem;
                margin-bottom: 12px;
            }

            .skills-section,
            .experience-section {
                margin-bottom: 30px;
            }

            .skills-header h3,
            .experience-header h3 {
                font-size: 1.75rem;
            }

            .skills-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .skill-card {
                padding: 20px;
            }

            .skill-card h4 {
                font-size: 1.3rem;
            }

            .timeline {
                padding-left: 30px;
            }

            .timeline::before {
                left: 10px;
            }

            .timeline-dot {
                left: 2px;
            }

            .timeline-content {
                padding: 18px;
            }

            .timeline-content h4 {
                font-size: 1.2rem;
            }

            .timeline-item {
                margin-bottom: 20px;
            }

            .stats-section {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .cta-section {
                padding: 30px 25px;
            }

            .cta-section h3 {
                font-size: 1.6rem;
            }

            .cta-section p {
                font-size: 1rem;
            }

            .cta-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
        }

        /* Extra small devices */
        @media (max-width: 360px) {
            .section-title {
                font-size: 1.75rem;
            }

            .about-text h3 {
                font-size: 1.3rem;
            }

            .skills-header h3,
            .experience-header h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <section class="about-section" id="about">
        <!-- Header -->
        <div class="section-header">
            <p class="section-subtitle">Get To Know More</p>
            <h2 class="section-title">About Me</h2>
        </div>

        <!-- About Content -->
        <div class="about-content">
            <div class="about-text">
                <p>
                    Hi, I'm <span class="highlight">Vatma Aulia Adha</span>, a passionate backend developer with a strong focus on building scalable and efficient web applications. I love turning complex problems into simple, elegant solutions.
                </p>
                <p>
                    With expertise in <span class="highlight">Laravel, and database management</span>, I specialize in creating robust APIs, authentication systems, and server-side applications that power modern web experiences.
                </p>
                <p>
                    When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or sharing knowledge with the developer community.
                </p>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="skills-section">
            <div class="skills-header">
                <h3>My Skills</h3>
            </div>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#e8dcc4" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h4>Backend Development</h4>
                    <ul class="skill-list">
                        <li>Laravel & PHP</li>
                        <li>REST API Design</li>
                        <li>Database Management</li>
                    </ul>
                </div>

                <div class="skill-card">
                    <div class="skill-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#e8dcc4" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h4>Frontend Skills</h4>
                    <ul class="skill-list">
                        <li>HTML5 & CSS</li>
                        <li>Responsive Design</li>
                    </ul>
                </div>

                <div class="skill-card">
                    <div class="skill-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#e8dcc4" stroke-width="2">
                            <path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h4>Tools & Others</h4>
                    <ul class="skill-list">
                        <li>Git & GitHub</li>
                        <li>MySQL</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Experience Timeline -->
        <div class="experience-section">
            <div class="experience-header">
                <h3>Experience</h3>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-date">2025 - Present</span>
                        <h4>Backend Developer</h4>
                        <p class="timeline-company">PT Redbuzz Mediatama</p>
                        <p>Developing and maintaining scalable backend systems, implementing RESTful APIs, and optimizing database performance for high-traffic applications.</p>
                    </div>
                </div>
        </div>
    </section>
</body>
</html>