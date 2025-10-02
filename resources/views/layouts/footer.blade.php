<style>
    .portfolio-footer {
        background: #561c24;
        color: #fff;
        padding: 60px 0 20px;
        position: relative;
        overflow: hidden;
        width: 100%;
        margin-top: auto;
    }

    .portfolio-footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    }

    .portfolio-footer .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .portfolio-footer .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }

    .portfolio-footer .footer-section h3 {
        font-size: 20px;
        margin-bottom: 20px;
        color: #ffffff;
        font-weight: 600;
    }

    .portfolio-footer .footer-section p {
        color: #ffffff;
        line-height: 1.8;
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .portfolio-footer .social-links {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .portfolio-footer .social-links a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .portfolio-footer .social-links a:hover {
        background: #ffffff;
        color: #561c24;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
    }

    .portfolio-footer .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .portfolio-footer .footer-links li {
        margin-bottom: 12px;
    }

    .portfolio-footer .footer-links a {
        color: #ffffff;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        opacity: 0.9;
    }

    .portfolio-footer .footer-links a:hover {
        color: #ffffff;
        transform: translateX(5px);
        opacity: 1;
    }

    .portfolio-footer .contact-info {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .portfolio-footer .contact-info li {
        color: #ffffff;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
        opacity: 0.9;
    }

    .portfolio-footer .contact-info li::before {
        content: '▸';
        color: #ffffff;
    }

    .portfolio-footer .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 20px;
        text-align: center;
        color: #ffffff;
        font-size: 14px;
        opacity: 0.9;
    }

    .portfolio-footer .footer-bottom p {
        margin-bottom: 10px;
    }

    .portfolio-footer .footer-bottom a {
        color: #ffffff;
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .portfolio-footer .footer-bottom a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .portfolio-footer {
            padding: 40px 0 20px;
        }

        .portfolio-footer .footer-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .portfolio-footer .footer-section h3 {
            font-size: 18px;
        }
    }
</style>

<footer class="portfolio-footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Tentang Saya</h3>
                <p>Seorang developer yang passionate dalam menciptakan pengalaman digital yang menarik dan fungsional.</p>
                <div class="social-links">
                    <a href="#" title="GitHub">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" title="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" title="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" title="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" title="Email">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Navigasi</h3>
                <ul class="footer-links">
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#projects">Proyek</a></li>
                    <li><a href="#skills">Keahlian</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Layanan</h3>
                <ul class="footer-links">
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">UI/UX Design</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Konsultasi</a></li>
                    <li><a href="#">Maintenance</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Kontak</h3>
                <ul class="contact-info">
                    <li>email@domain.com</li>
                    <li>+62 812-3456-7890</li>
                    <li>Depok, Yogyakarta</li>
                    <li>Indonesia</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Portfolio. All rights reserved.</p>
            <p>Dibuat dengan 💙 oleh <a href="#">Nama Anda</a></p>
        </div>
    </div>
</footer>