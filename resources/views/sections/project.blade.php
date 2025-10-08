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
            background: #ffffff;
            min-height: 100vh;
        }

        .portfolio-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 40px;
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
            opacity: 0;
            transform: translateY(30px);
        }

        .project-card.show {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .project-card:nth-child(1).show { animation-delay: 0.1s; }
        .project-card:nth-child(2).show { animation-delay: 0.2s; }
        .project-card:nth-child(3).show { animation-delay: 0.3s; }
        .project-card:nth-child(4).show { animation-delay: 0.4s; }
        .project-card:nth-child(5).show { animation-delay: 0.5s; }
        .project-card:nth-child(6).show { animation-delay: 0.6s; }

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

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.1);
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
            padding: 12px 30px;
            background: #e8dcc4;
            color: #561c24;
            border: none;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .overlay-btn:hover {
            background: #fff;
            transform: scale(1.05);
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
        }

        .tech-tag {
            padding: 5px 12px;
            font-size: 0.8rem;
            color: #561c24;
            background: rgba(86, 28, 36, 0.1);
            border: 1px solid #d4c5a9;
            border-radius: 5px;
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
                padding: 0px 0px;
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
            <div class="project-card show" data-category="backend">
                <div class="project-image">
                    <img src="image/yava-be.png" alt="Yava Backend Project">
                    <div class="project-overlay">
                        <a href="https://yava-webcore.k8s.redtech.co.id/login" class="overlay-btn" target="_blank">
                            See
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Backend</span>
                    <h3 class="project-title">Yava Backend</h3>
                    <p class="project-description">
                        RESTful API with authentication, data validation, and comprehensive documentation for third-party integration.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">API</span>
                        <span class="tech-tag">Mysql</span>
                    </div>
                </div>
            </div>

            <!-- Backend Project 2 -->
            <div class="project-card show" data-category="backend">
                <div class="project-image">
                    <img src="image/perpustakaan.png" alt="Library Backend Project">
                    <div class="project-overlay">
                        <a href="https://github.com/darklco/perpustakaan" class="overlay-btn" target="_blank">
                            See
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Backend</span>
                    <h3 class="project-title">Library Backend</h3>
                    <p class="project-description">
                        Scalable e-commerce backend with payment gateway integration, inventory management, and order processing system.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">Mysql</span>
                    </div>
                </div>
            </div>

            <!-- Backend Project 3 -->
            <div class="project-card show" data-category="backend">
                <div class="project-image">
                    <img src="image/jpsre-be.png" alt="JPS-Re Backend Project">
                    <div class="project-overlay">
                        <a href="https://jpsre.k8s.redtech.co.id/login" class="overlay-btn" target="_blank">
                            See
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Backend</span>
                    <h3 class="project-title">JPS-Re Backend</h3>
                    <p class="project-description">
                        Distributed microservices system with message queues, service discovery, and centralized logging for high availability.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">Mysql</span>
                    </div>
                </div>
            </div>

            <!-- Frontend Project 1 -->
            <div class="project-card" data-category="frontend" style="display: none;">
                <div class="project-image">
                    <img src="image/jpsre.png" alt="JPS-Re Frontend Project">
                    <div class="project-overlay">
                        <a href="https://jpsre.k8s.redtech.co.id/?lang=en" class="overlay-btn" target="_blank">
                            See
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Frontend</span>
                    <h3 class="project-title">JPS-Re Frontend</h3>
                    <p class="project-description">
                        Modern and responsive dashboard UI with data visualization, charts, and interactive components.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">Bootstrap</span>
                    </div>
                </div>
            </div>

            <!-- Frontend Project 2 -->
            <div class="project-card" data-category="frontend" style="display: none;">
                <div class="project-image">
                    <img src="image/portofolio.png" alt="Portfolio Frontend Project">
                    <div class="project-overlay">
                        <a href="#" class="overlay-btn">
                            See
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <span class="project-category">Frontend</span>
                    <h3 class="project-title">Portofolio Frontend</h3>
                    <p class="project-description">
                        Modern and responsive dashboard UI with data visualization, charts, and interactive components.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Bootstrap</span>
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

                projectCards.forEach((card, index) => {
                    const category = card.getAttribute('data-category');
                    
                    // Remove show class first
                    card.classList.remove('show');
                    
                    if (filterValue === 'all' || category === filterValue) {
                        card.style.display = 'block';
                        
                        // Add show class with delay for animation
                        setTimeout(() => {
                            card.classList.add('show');
                        }, index * 100);
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>