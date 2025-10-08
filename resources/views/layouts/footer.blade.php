<style>
/* Footer Styles */
.footer {
    background: #561c24;
    color: #e8dcc4;
    padding: 30px 20px;
    margin-top: 80px;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.footer-text {
    font-size: 0.95rem;
}

.footer-links {
    display: flex;
    gap: 30px;
    align-items: center;
}

.footer-link {
    color: #e8dcc4;
    text-decoration: none;
    font-size: 0.95rem;
    transition: all 0.3s ease;
}

.footer-link:hover {
    color: #fff;
    transform: translateY(-2px);
}

.footer-social {
    display: flex;
    gap: 15px;
}

.footer-social a {
    color: #e8dcc4;
    transition: all 0.3s ease;
}

.footer-social a:hover {
    color: #fff;
    transform: translateY(-3px);
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .footer {
        padding: 0px 0px;
        margin-top: 0px;
    }

    .footer-content {
        flex-direction: column;
        text-align: center;
        gap: 25px;
    }

    .footer-text {
        font-size: 0.9rem;
        order: 3;
        width: 100%;
    }

    .footer-links {
        gap: 20px;
        order: 1;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
    }

    .footer-link {
        font-size: 0.95rem;
    }

    .footer-social {
        order: 2;
        gap: 25px;
    }

    .footer-social svg {
        width: 24px;
        height: 24px;
    }
}

@media screen and (max-width: 480px) {
    
    .footer {
        padding: 25px 15px;
        margin-top: 50px;
    }

    .footer-content {
        gap: 20px;
    }

    .footer-text {
        font-size: 0.85rem;
        padding: 0 10px;
    }

    .footer-links {
        gap: 15px;
        width: 100%;
        padding: 0 10px;
    }

    .footer-link {
        font-size: 0.9rem;
        padding: 8px 0;
    }

    .footer-social {
        gap: 30px;
    }

    .footer-social svg {
        width: 26px;
        height: 26px;
    }
}

@media screen and (max-width: 360px) {
    .footer {
        padding: 2px 1px;
    }

    .footer-links {
        flex-direction: column;
        gap: 12px;
    }

    .footer-link {
        font-size: 0.9rem;
        padding: 8px 0;
    }

    .footer-social {
        gap: 35px;
    }
}
</style>

<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <p class="footer-text">© 2025 Vatma Aulia Adha. All rights reserved.</p>
        
        <div class="footer-links">
            <a href="#home" class="footer-link">Home</a>
            <a href="#about" class="footer-link">About</a>
            <a href="#portfolio" class="footer-link">Projects</a>
            <a href="#contact" class="footer-link">Contact</a>
        </div>

        <div class="footer-social">
            <a href="https://wa.me/qr/OFRXF6B2B3XBC1" target="_blank" aria-label="WhatsApp">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
            </a>
            <a href="https://www.instagram.com/vdaisy_?igsh=MWhqMHZleHVxNG1ucQ==" target="_blank" aria-label="Instagram">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <a href="https://github.com/darklco" target="_blank" aria-label="GitHub">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>