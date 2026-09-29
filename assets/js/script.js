document.addEventListener('DOMContentLoaded', function () {
    // Mobile navigation toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const siteNavigation = document.querySelector('.site-navigation');

    if (menuToggle && siteNavigation) {
        menuToggle.addEventListener('click', function () {
            const menuIsOpen = siteNavigation.classList.toggle('is-open');
            menuToggle.setAttribute('aria-expanded', menuIsOpen);
        });

        siteNavigation.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                siteNavigation.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // ==========================================
    // About Section: Automatic Portrait Slideshow
    // ==========================================
    const slideshowContainer = document.querySelector('.about-slideshow');
    if (slideshowContainer) {
        const slides = slideshowContainer.querySelectorAll('.slideshow-img');
        if (slides.length > 1) {
            let currentIndex = 0;
            const slideInterval = 4000; // 4 seconds

            setInterval(function () {
                slides[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % slides.length;
                slides[currentIndex].classList.add('active');
            }, slideInterval);
        }
    }

    // ==========================================
    // Hero Section: Interactive 3D Parallax & Particle Canvas
    // ==========================================
    const heroSection = document.querySelector('.hero');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (heroSection && !prefersReducedMotion) {
        // --- 1. Lightweight Canvas Particle Background ---
        const canvas = document.getElementById('hero-particle-canvas');
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let width = 0;
            let height = 0;
            let particles = [];
            const particleCount = Math.min(30, Math.floor(window.innerWidth / 35));

            function resizeCanvas() {
                width = canvas.width = heroSection.offsetWidth;
                height = canvas.height = heroSection.offsetHeight;
            }

            function createParticle() {
                return {
                    x: Math.random() * width,
                    y: Math.random() * height,
                    radius: Math.random() * 1.8 + 0.8,
                    color: 'rgba(23, 107, 135, ' + (Math.random() * 0.25 + 0.15) + ')',
                    vx: (Math.random() - 0.5) * 0.35,
                    vy: (Math.random() - 0.5) * 0.35
                };
            }

            function initParticles() {
                resizeCanvas();
                particles = [];
                for (let i = 0; i < particleCount; i++) {
                    particles.push(createParticle());
                }
            }

            function renderParticles() {
                ctx.clearRect(0, 0, width, height);

                for (let i = 0; i < particles.length; i++) {
                    const p = particles[i];

                    p.x += p.vx;
                    p.y += p.vy;

                    if (p.x < 0) p.x = width;
                    if (p.x > width) p.x = 0;
                    if (p.y < 0) p.y = height;
                    if (p.y > height) p.y = 0;

                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                    ctx.fillStyle = p.color;
                    ctx.fill();

                    // Draw subtle connection lines between close particles
                    for (let j = i + 1; j < particles.length; j++) {
                        const p2 = particles[j];
                        const dx = p.x - p2.x;
                        const dy = p.y - p2.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);

                        if (dist < 90) {
                            ctx.beginPath();
                            ctx.moveTo(p.x, p.y);
                            ctx.lineTo(p2.x, p2.y);
                            ctx.strokeStyle = 'rgba(23, 107, 135, ' + (0.12 * (1 - dist / 90)) + ')';
                            ctx.lineWidth = 0.6;
                            ctx.stroke();
                        }
                    }
                }

                requestAnimationFrame(renderParticles);
            }

            window.addEventListener('resize', resizeCanvas);
            initParticles();
            requestAnimationFrame(renderParticles);
        }

        // --- 2. Mouse Movement Parallax Effect ---
        const parallaxElements = heroSection.querySelectorAll('[data-parallax-speed]');
        let targetX = 0;
        let targetY = 0;
        let currentX = 0;
        let currentY = 0;

        heroSection.addEventListener('mousemove', function (e) {
            const rect = heroSection.getBoundingClientRect();
            const mouseX = e.clientX - rect.left - rect.width / 2;
            const mouseY = e.clientY - rect.top - rect.height / 2;

            targetX = (mouseX / (rect.width / 2)) * 25;
            targetY = (mouseY / (rect.height / 2)) * 25;
        });

        heroSection.addEventListener('mouseleave', function () {
            targetX = 0;
            targetY = 0;
        });

        function animateParallax() {
            currentX += (targetX - currentX) * 0.08;
            currentY += (targetY - currentY) * 0.08;

            parallaxElements.forEach(function (el) {
                const speed = parseFloat(el.getAttribute('data-parallax-speed')) || 0.05;
                const moveX = (currentX * speed * 25).toFixed(2);
                const moveY = (currentY * speed * 25).toFixed(2);

                el.style.transform = 'translate3d(' + moveX + 'px, ' + moveY + 'px, 0)';
            });

            requestAnimationFrame(animateParallax);
        }

        requestAnimationFrame(animateParallax);
    }

    // ==========================================
    // JTDIS Case Study: Lightbox Modal
    // ==========================================
    const lightboxModal = document.getElementById('lightbox-modal');
    if (lightboxModal) {
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const closeBtn = lightboxModal.querySelector('.lightbox-close');
        const overlay = lightboxModal.querySelector('.lightbox-overlay');
        const galleryCards = document.querySelectorAll('.jtdis-gallery-card, .hp-gallery-card');

        function openLightbox(imgSrc, captionText) {
            lightboxImg.src = imgSrc;
            lightboxImg.alt = captionText;
            lightboxCaption.textContent = captionText;
            lightboxModal.classList.add('is-open');
            lightboxModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightboxModal.classList.remove('is-open');
            lightboxModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            setTimeout(function () {
                lightboxImg.src = '';
                lightboxImg.alt = '';
                lightboxCaption.textContent = '';
            }, 300);
        }

        galleryCards.forEach(function (card) {
            card.addEventListener('click', function () {
                const imgSrc = card.getAttribute('data-lightbox');
                const captionText = card.getAttribute('data-caption');
                if (imgSrc) {
                    openLightbox(imgSrc, captionText);
                }
            });

            card.setAttribute('tabindex', '0');
            card.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    card.click();
                }
            });
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', closeLightbox);
        }

        if (overlay) {
            overlay.addEventListener('click', closeLightbox);
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && lightboxModal.classList.contains('is-open')) {
                closeLightbox();
            }
        });
    }
});