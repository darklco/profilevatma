<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects - Vatma Aulia Adha</title>
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
            padding: 40px 20px;
        }

        .portfolio-section {
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

        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 12px 28px;
            font-size: 0.95rem;
            font-weight: 600;
            color: #561c24;
            background: rgba(255, 255, 255, 0.5);
            border: 2px solid #d4c5a9;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #561c24;
            color: #e8dcc4;
            border-color: #561c24;
            transform: translateY(-2px);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.6);
            border: 2px solid #d4c5a9;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.4s ease;
            animation: fadeInUp 0.8s ease-out;
            animation-fill-mode: both;
        }

        .project-card:nth-child(1) { animation-delay: 0.1s; }
        .project-card:nth-child(2) { animation-delay: 0.2s; }
        .project-card:nth-child(3) { animation-delay: 0.3s; }
        .project-card:nth-child(4) { animation-delay: 0.4s; }

        .project-card:hover {
            border-color: #561c24;
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.9);
        }

        .project-image {
            width: 100%;
            height: 220px;
            background: linear-gradient(135deg, #8b4a52 0%, #561c24 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(86, 28, 36, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .overlay-btn {
            width: 45px;
            height: 45px;
            background: #e8dcc4;
            color: #561c24;
            border: none;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .overlay-btn:hover {
            background: #fff;
            transform: scale(1.1);
        }

        .project-content {
            padding: 25px;
        }

        .project-category {
            display: inline-block;
            padding: 6px 14px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #e8dcc4;
            background: #561c24;
            border-radius: 20px;
            margin-bottom: 15px;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #561c24;
            margin-bottom: 10px;
            font-family: serif;
        }

        .project-description {
            font-size: 0.95rem;
            color: #8b4a52;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .tech-tag {
            padding: 5px 12px;
            font-size: 0.8rem;
            color: #561c24;
            background: rgba(86, 28, 36, 0.1);
            border: 1px solid #d4c5a9;
            border-radius: 5px;
        }

        .project-links {
            display: flex;
            gap: 12px;
        }

        .project-link {
            flex: 1;
            padding: 10px 20px;
            font-size: 0.9rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .link-primary {
            background: #561c24;
            color: #e8dcc4;
        }

        .link-primary:hover {
            background: #6d2430;
            transform: translateY(-2px);
        }

        .link-secondary {
            background: transparent;
            color: #561c24;
            border: 2px solid #561c24;
        }

        .link-secondary:hover {
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

        @media (max-width: 968px) {
            .portfolio-section {
                padding: 60px 30px;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .projects-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 25px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 20px 10px;
            }

            .portfolio-section {
                padding: 40px 15px;
            }

            .section-title {
                font-size: 2rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .project-content {
                padding: 20px;
            }

            .project-links {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <section class="portfolio-section" id="portfolio">
        <div class="section-header">
            <p class="section-subtitle">My Work</p>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-description">
                A collection of my recent projects showcasing my skills in web development, design, and problem-solving.
            </p>
        </div>

        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="backend">Backend</button>
            <button class="filter-btn" data-filter="frontend">Frontend</button>
        </div>

        <div class="projects-grid" id="projectsGrid">
            <!-- Backend Project 1 -->
            <div class="project-card" data-category="backend">
                <div class="project-image">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#e8dcc4" stroke-width="1.5">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    <div class="project-overlay">
                        <a href="#" class="overlay-btn" title="Live Demo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                        <a href="#" class="overlay-btn" title="View Code">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Backend</span>
                    <h3 class="project-title">REST API Service</h3>
                    <p class="project-description">
                        RESTful API with authentication, data validation, and comprehensive documentation for third-party integration.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">API</span>
                        <span class="tech-tag">Mysql</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link link-primary">
                            Live Demo
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                        <a href="#" class="project-link link-secondary">Code</a>
                    </div>
                </div>
            </div>

            <!-- Backend Project 2 -->
            <div class="project-card" data-category="backend">
                <div class="project-image">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#e8dcc4" stroke-width="1.5">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                    <div class="project-overlay">
                        <a href="#" class="overlay-btn" title="Live Demo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                        <a href="#" class="overlay-btn" title="View Code">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Backend</span>
                    <h3 class="project-title">E-Commerce Backend</h3>
                    <p class="project-description">
                        Scalable e-commerce backend with payment gateway integration, inventory management, and order processing system.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">Mysql</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link link-primary">
                            Live Demo
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                        <a href="#" class="project-link link-secondary">Code</a>
                    </div>
                </div>
            </div>

            <!-- Backend Project 3 -->
            <div class="project-card" data-category="backend">
                <div class="project-image">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#e8dcc4" stroke-width="1.5">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/>
                        <line x1="7" y1="7" x2="7.01" y2="7"/>
                    </svg>
                    <div class="project-overlay">
                        <a href="#" class="overlay-btn" title="Live Demo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                        <a href="#" class="overlay-btn" title="View Code">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Backend</span>
                    <h3 class="project-title">Microservices Architecture</h3>
                    <p class="project-description">
                        Distributed microservices system with message queues, service discovery, and centralized logging for high availability.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">Mysql</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link link-primary">
                            Live Demo
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                        <a href="#" class="project-link link-secondary">Code</a>
                    </div>
                </div>
            </div>

            <!-- Frontend Project 1 -->
            <div class="project-card" data-category="frontend" style="display: none;">
                <div class="project-image">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#e8dcc4" stroke-width="1.5">
                        <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                    <div class="project-overlay">
                        <a href="#" class="overlay-btn" title="Live Demo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                        <a href="#" class="overlay-btn" title="View Code">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Frontend</span>
                    <h3 class="project-title">Portfolio Dashboard</h3>
                    <p class="project-description">
                        Modern and responsive dashboard UI with data visualization, charts, and interactive components.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">Chart.js</span>
                        <span class="tech-tag">Sass</span>
                        <span class="tech-tag">Bootstrap</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link link-primary">
                            Live Demo
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                        <a href="#" class="project-link link-secondary">Code</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                projectCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    
                    if (filterValue === 'all' || category === filterValue) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeInUp 0.6s ease-out';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>