<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>{{ $contents['logo_text']->content ?? 'Fajri' }} — Photography Portfolio</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $contents['about_text']->content ?? 'Fotografer profesional yang berfokus pada estetika minimalis. Jasa foto wedding, prewed, wisuda, dan portrait.' }}">
    <meta name="keywords" content="fotografer, photography, wedding, prewed, wisuda, portrait, jasa foto">
    <meta name="author" content="{{ $contents['logo_text']->content ?? 'Fajri Photography' }}">
    <link rel="canonical" href="{{ url('/') }}">
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $contents['logo_text']->content ?? 'Fajri' }} — Photography Portfolio">
    <meta property="og:description" content="{{ $contents['about_text']->content ?? 'Fotografer profesional yang berfokus pada estetika minimalis.' }}">
    <meta property="og:url" content="{{ url('/') }}">
    @if(isset($contents['hero_bg']->image_path))
        @php
            $ogImg = is_array($contents['hero_bg']->image_path) ? ($contents['hero_bg']->image_path[0] ?? '') : $contents['hero_bg']->image_path;
        @endphp
        @if($ogImg)
        <meta property="og:image" content="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($ogImg) }}">
        @endif
    @endif
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $contents['logo_text']->content ?? 'Fajri' }} — Photography Portfolio">
    <meta name="twitter:description" content="{{ $contents['about_text']->content ?? 'Fotografer profesional yang berfokus pada estetika minimalis. Jasa foto wedding, prewed, wisuda, dan portrait.' }}">
    @if(isset($contents['hero_bg']->image_path))
        @php $twImg = is_array($contents['hero_bg']->image_path) ? ($contents['hero_bg']->image_path[0] ?? '') : $contents['hero_bg']->image_path; @endphp
        @if($twImg)<meta name="twitter:image" content="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($twImg) }}">@endif
    @endif
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <!-- Google Fonts: Inter & Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Noscript fallback -->
    <noscript>
        <style>
            .hero-slide { opacity: 1 !important; transform: none !important; }
            .slider-btn, .hamburger { display: none !important; }
            #category-showcase { opacity: 1 !important; transform: none !important; }
            .fade-in-section { opacity: 1 !important; transform: none !important; }
            .category-card { opacity: 1 !important; transform: none !important; }
        </style>
        <div style="position:fixed;top:0;left:0;right:0;z-index:9999;background:#D4AF37;color:#111;text-align:center;padding:0.6rem;font-size:0.8rem;font-family:sans-serif;">
            ⚠️ Website ini memerlukan JavaScript untuk fitur galeri dan navigasi. Aktifkan JavaScript di browser Anda.
        </div>
    </noscript>
</head>
<body>
    <div id="app">
        <!-- Navigation -->
        <nav class="navbar" id="main-nav">
            <ul class="nav-links left-links">
                <li class="dropdown">
                    <a href="#gallery" class="nav-item" onclick="filterGallery('all')">
                        Portfolio 
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-left: 2px; margin-bottom: 2px;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#gallery" onclick="filterGallery('all')">All Works</a></li>
                        @foreach($categories as $category)
                        <li><a href="#gallery" onclick="filterGallery('{{ $category->slug }}')">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#about" class="nav-item">About</a></li>
            </ul>
            <div class="logo">{{ $contents['logo_text']->content ?? 'FAJRI.' }}</div>
            <ul class="nav-links right-links">
                <li><a href="#contact" class="nav-item">Contact</a></li>
                <li><a href="https://wa.me/6282210502922" class="nav-item" target="_blank" rel="noopener noreferrer">Book</a></li>
            </ul>
            <!-- Mobile Hamburger -->
            <button class="hamburger" id="hamburger-btn" aria-label="Toggle menu" onclick="toggleMobileMenu()">
                <span></span><span></span><span></span>
            </button>
        </nav>

        <!-- Mobile Menu Overlay -->
        <div class="mobile-menu" id="mobile-menu">
            <div class="mobile-menu-content">
                <a href="#gallery" class="mobile-link" onclick="filterGallery('all'); closeMobileMenu();">Portfolio</a>
                @foreach($categories as $category)
                <a href="#gallery" class="mobile-link mobile-sub" onclick="filterGallery('{{ $category->slug }}'); closeMobileMenu();">{{ $category->name }}</a>
                @endforeach
                <a href="#about" class="mobile-link" onclick="closeMobileMenu()">About</a>
                <a href="#contact" class="mobile-link" onclick="closeMobileMenu()">Contact</a>
                <a href="https://wa.me/6282210502922" class="mobile-link" target="_blank" rel="noopener noreferrer">Book Now</a>
            </div>
        </div>

        <!-- Hero Section -->
        <header class="hero" id="hero-slider">
            <div class="hero-overlay"></div>

            {{-- SEO: h1 tag wajib ada untuk Google indexing --}}
            <h1 class="hero-seo-title" aria-label="{{ $contents['logo_text']->content ?? 'Fajri Photography' }}">
                {{ $contents['logo_text']->content ?? 'Fajri Photography' }}
            </h1>
            
            @php
                $heroImages = [];
                if(isset($contents['hero_bg']->image_path) && is_array($contents['hero_bg']->image_path)) {
                    foreach($contents['hero_bg']->image_path as $path) {
                        if($path) $heroImages[] = \Illuminate\Support\Facades\Storage::disk('s3')->url($path);
                    }
                } elseif(isset($contents['hero_bg']->image_path) && is_string($contents['hero_bg']->image_path)) {
                    $heroImages[] = \Illuminate\Support\Facades\Storage::disk('s3')->url($contents['hero_bg']->image_path);
                }
                
                if(count($heroImages) == 0) {
                    $heroImages = [
                        asset('images/portrait.png'),
                        asset('images/landscape.png'),
                        asset('images/architecture.png')
                    ];
                }
            @endphp

            @foreach($heroImages as $index => $img)
                <div class="hero-slide" style="background-image: url('{{ $img }}');"></div>
            @endforeach

            <!-- Slider Controls -->
            <button class="slider-btn prev-btn" onclick="prevSlide()" aria-label="Previous slide">
                <span class="slide-num prev-num"></span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            </button>
            <button class="slider-btn next-btn" onclick="nextSlide()" aria-label="Next slide">
                <span class="slide-num next-num"></span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
        </header>

        <!-- Gallery Section: Category Showcase -->
        <section id="gallery" class="gallery-section fade-in-section">

            {{-- ===== CATEGORY SHOWCASE VIEW (default) ===== --}}
            <div id="category-showcase">
                <div class="section-header">
                    <h2 class="section-title">Selected Works</h2>
                    <p class="section-subtitle">Pilih kategori untuk melihat koleksi foto</p>
                </div>
                <div class="category-grid">
                    @forelse($categoriesWithCover as $cat)
                    <div class="category-card" onclick="openCategory('{{ $cat->slug }}', '{{ $cat->name }}')">
                        @if($cat->cover)
                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('s3')->url($cat->cover->image_path) }}" alt="{{ $cat->name }}" loading="lazy">
                        @else
                        <img src="{{ asset('images/portrait.png') }}" alt="{{ $cat->name }}" loading="lazy">
                        @endif
                        <div class="category-card-overlay">
                            <div class="category-card-info">
                                <span class="category-card-label">{{ $cat->name }}</span>
                                <span class="category-card-count">{{ $cat->photo_count }} foto</span>
                                <span class="category-card-arrow">→</span>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="category-card" style="cursor:default">
                        <img src="{{ asset('images/portrait.png') }}" alt="Coming Soon" loading="lazy">
                        <div class="category-card-overlay">
                            <div class="category-card-info">
                                <span class="category-card-label">Coming Soon</span>
                                <span class="category-card-count">—</span>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>

            {{-- ===== PHOTO DETAIL VIEW (muncul setelah klik kategori) ===== --}}
            <div id="photo-detail-view" style="display:none;">
                <div class="section-header">
                    <button class="back-btn" onclick="closeCategory()">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="20" height="20"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        Kembali
                    </button>
                    <h2 class="section-title" id="detail-category-title"></h2>
                </div>
                <div class="gallery-grid" id="detail-gallery-grid">
                    {{-- Di-render via JS dari data PHP --}}
                </div>
            </div>

        </section>

        {{-- Data JSON semua foto per kategori untuk JS --}}
        @php
            $photosJson = $photosByCategory->map(
                fn($photos) => $photos->map(fn($p) => [
                    'title'      => $p->title ?? 'Untitled',
                    'image_path' => $p->image_url,
                    'category'   => $p->category->name ?? '',
                    'slug'       => $p->category->slug ?? '',
                ])->values()
            );
        @endphp
        <script>
            const photosByCategory = {!! json_encode($photosJson) !!};
        </script>

        <!-- About Section -->
        <section id="about" class="about-section fade-in-section" style="background-image: url('{{ isset($contents['about_bg']->image_path) ? \Illuminate\Support\Facades\Storage::disk('s3')->url(is_array($contents['about_bg']->image_path) ? ($contents['about_bg']->image_path[0] ?? '') : $contents['about_bg']->image_path) : 'none' }}'); background-size: cover; background-position: center;">
            <div class="about-overlay"></div>
            <div class="about-content">
                <h2 class="section-title">About the Lens</h2>
                <p class="about-text">
                    {{ $contents['about_text']->content ?? 'Berfokus pada estetika minimalis dan keaslian momen. Setiap karya dihasilkan melalui observasi cahaya yang tenang dan komposisi yang bersih, memastikan kenangan Anda abadi dan elegan.' }}
                </p>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section fade-in-section">
            <div class="contact-content">
                <h2 class="section-title">Let's Create Together</h2>
                <p class="contact-subtitle">Kami siap mendengarkan cerita Anda dan mengabadikannya menjadi memori yang tak terlupakan.</p>
                
                <div class="contact-info">
                    <div class="info-block">
                        <span class="info-label">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 6px; margin-top: -2px;"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            Instagram
                        </span>
                        <a href="https://www.instagram.com/faajriii___" target="_blank" rel="noopener noreferrer" class="info-link">@faajriii___</a>
                    </div>
                    <div class="info-block">
                        <span class="info-label">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 6px; margin-top: -2px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            WhatsApp
                        </span>
                        <a href="https://wa.me/6282210502922?text=Saya%20tertarik%20dengan%20jasa%20fotografi%20Anda" target="_blank" rel="noopener noreferrer" class="info-link">+62 822-1050-2922</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="site-footer">
            {!! $contents['footer_text']->content ?? '&copy; 2026 Fajri Photography. Minimalist approach to visual storytelling.' !!}
        </footer>

        <!-- Floating WhatsApp -->
        <a href="https://wa.me/6282210502922?text=Saya%20tertarik%20dengan%20jasa%20fotografi%20Anda" class="floating-wa" target="_blank" rel="noopener noreferrer" title="Contact me on WhatsApp" aria-label="WhatsApp">
            <svg viewBox="0 0 32 32" width="30" height="30" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.002 2.146C8.36 2.146 2.148 8.358 2.148 16c0 2.453.642 4.755 1.766 6.756l-2.27 6.645 6.945-2.223A13.784 13.784 0 0016.002 29.85c7.643 0 13.855-6.212 13.855-13.854 0-7.642-6.212-13.854-13.855-13.854zm7.625 19.98c-.314.887-1.523 1.636-2.527 1.838-.687.135-1.564.24-4.48-1.002-3.72-1.583-6.137-5.46-6.323-5.714-.186-.255-1.51-2.062-1.51-3.935 0-1.874.95-2.793 1.285-3.16.335-.367.728-.46 1.002-.46.274 0 .548.01.787.02.247.01.576-.09.9.712.336.828 1.137 2.87 1.238 3.076.1.206.166.446.033.72-.132.275-.205.446-.407.686-.205.24-.43.514-.614.716-.206.225-.43.47-.187.892.24.422 1.066 1.808 2.273 2.91 1.554 1.42 2.88 1.864 3.327 2.07.447.205.71.185.975-.123.265-.308 1.137-1.353 1.442-1.814.303-.46.607-.382 1.015-.225.407.157 2.57 1.25 3.016 1.485.446.235.744.353.853.548.11.196.11 1.118-.206 2.005z"/>
            </svg>
        </a>

        <!-- Lightbox -->
        <div class="lightbox" id="lightbox">
            <button class="lightbox-close" onclick="closeLightbox()" aria-label="Close">&times;</button>
            <div class="lightbox-counter" id="lightbox-counter"></div>
            <button class="lightbox-nav lightbox-prev" onclick="lightboxPrev()" aria-label="Previous photo">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            </button>
            <img src="" alt="" class="lightbox-img" id="lightbox-img">
            <div class="lightbox-caption" id="lightbox-caption"></div>
            <button class="lightbox-nav lightbox-next" onclick="lightboxNext()" aria-label="Next photo">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // ---- Hero Slider (with auto-play) ----
            const slides     = document.querySelectorAll('.hero-slide');
            const prevNum    = document.querySelector('.prev-num');
            const nextNum    = document.querySelector('.next-num');
            const prevBtn    = document.querySelector('.prev-btn');
            const nextBtn    = document.querySelector('.next-btn');
            let currentSlide = 0;
            const totalSlides = slides.length;
            let autoPlayTimer = null;

            function updateSlider() {
                slides.forEach((slide, i) => {
                    slide.classList.remove('last-active');
                    if (slide.classList.contains('active')) { slide.classList.remove('active'); slide.classList.add('last-active'); }
                    if (i === currentSlide) slide.classList.add('active');
                });
                if (totalSlides > 1) {
                    if(prevBtn) prevBtn.style.display = currentSlide === 0 ? 'none' : 'flex';
                    if(nextBtn) nextBtn.style.display = currentSlide === totalSlides - 1 ? 'none' : 'flex';
                    if(prevNum && currentSlide > 0) prevNum.innerText = currentSlide.toString().padStart(2,'0');
                    if(nextNum && currentSlide < totalSlides - 1) nextNum.innerText = (currentSlide + 2).toString().padStart(2,'0');
                } else {
                    if(prevBtn) prevBtn.style.display = 'none';
                    if(nextBtn) nextBtn.style.display = 'none';
                }
            }

            function startAutoPlay() {
                if (totalSlides <= 1) return;
                stopAutoPlay();
                autoPlayTimer = setInterval(() => {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    // Show/hide prev/next for auto-loop
                    if(prevBtn) prevBtn.style.display = 'flex';
                    if(nextBtn) nextBtn.style.display = 'flex';
                    updateSlider();
                }, 5000);
            }

            function stopAutoPlay() {
                if (autoPlayTimer) { clearInterval(autoPlayTimer); autoPlayTimer = null; }
            }

            window.prevSlide = () => { stopAutoPlay(); if (currentSlide > 0) { currentSlide--; updateSlider(); } startAutoPlay(); };
            window.nextSlide = () => { stopAutoPlay(); if (currentSlide < totalSlides - 1) { currentSlide++; updateSlider(); } startAutoPlay(); };
            updateSlider();
            startAutoPlay();

            // Pause auto-play on hover (desktop)
            const hero = document.getElementById('hero-slider');
            if (hero) {
                hero.addEventListener('mouseenter', stopAutoPlay);
                hero.addEventListener('mouseleave', startAutoPlay);

                // Touch swipe for hero slider (mobile)
                let heroTouchStartX = 0;
                hero.addEventListener('touchstart', e => {
                    heroTouchStartX = e.touches[0].clientX;
                }, { passive: true });
                hero.addEventListener('touchend', e => {
                    const dx = e.changedTouches[0].clientX - heroTouchStartX;
                    if (Math.abs(dx) > 50) { // min 50px swipe
                        stopAutoPlay();
                        if (dx < 0) { // swipe left = next
                            currentSlide = (currentSlide + 1) % totalSlides;
                        } else { // swipe right = prev
                            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                        }
                        if(prevBtn) prevBtn.style.display = 'flex';
                        if(nextBtn) nextBtn.style.display = 'flex';
                        updateSlider();
                        startAutoPlay();
                    }
                }, { passive: true });
            }

            // ---- Navbar scroll ----
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', () => navbar.classList.toggle('scrolled', window.scrollY > 50));

            // ---- Section reveal ----
            const observer = new IntersectionObserver(entries => {
                entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('is-visible'); });
            }, { threshold: 0.1 });
            document.querySelectorAll('.fade-in-section').forEach(s => observer.observe(s));

            // ---- Category cards staggered entrance ----
            const catGrid = document.querySelector('.category-grid');
            if (catGrid) {
                const cardObs = new IntersectionObserver(entries => {
                    entries.forEach(e => {
                        if (e.isIntersecting) {
                            document.querySelectorAll('.category-card').forEach((c, i) => {
                                setTimeout(() => c.classList.add('is-visible'), i * 150);
                            });
                            cardObs.disconnect();
                        }
                    });
                }, { threshold: 0.05 });
                cardObs.observe(catGrid);
            }

            // ---- Keyboard for lightbox ----
            document.addEventListener('keydown', (e) => {
                const lb = document.getElementById('lightbox');
                if (!lb || !lb.classList.contains('active')) return;
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') lightboxPrev();
                if (e.key === 'ArrowRight') lightboxNext();
            });

            // ---- Pause hero autoplay when tab is hidden (Page Visibility API) ----
            document.addEventListener('visibilitychange', () => {
                if (document.hidden) stopAutoPlay();
                else startAutoPlay();
            });
        });

        // ---- Lightbox ----
        let lightboxPhotos = [];
        let lightboxIndex = 0;

        function updateLightboxCounter() {
            const el = document.getElementById('lightbox-counter');
            if (el && lightboxPhotos.length > 1) {
                el.textContent = (lightboxIndex + 1) + ' / ' + lightboxPhotos.length;
                el.style.display = '';
            } else if (el) {
                el.style.display = 'none';
            }
        }

        function setLightboxImage(index) {
            const img = document.getElementById('lightbox-img');
            const cap = document.getElementById('lightbox-caption');
            img.style.opacity = '0';
            setTimeout(() => {
                img.src = lightboxPhotos[index].image_path;
                img.alt = lightboxPhotos[index].title || '';
                cap.textContent = lightboxPhotos[index].title || '';
                updateLightboxCounter();
                img.style.opacity = '1';
            }, 220);
        }

        window.openLightbox = function(photos, index) {
            if (!photos || photos.length === 0) return; // guard: no photos
            lightboxPhotos = photos;
            lightboxIndex = index;
            const lb  = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            const cap = document.getElementById('lightbox-caption');
            img.src        = photos[index].image_path;
            img.alt        = photos[index].title || '';
            img.style.opacity = '1';
            cap.textContent = photos[index].title || '';
            updateLightboxCounter();
            lb.classList.add('active');
            document.body.style.overflow = 'hidden';

            // Touch swipe to navigate inside lightbox (mobile)
            let lbTouchStartX = 0;
            lb._swipeHandler = (e) => { lbTouchStartX = e.touches[0].clientX; };
            lb._swipeEndHandler = (e) => {
                const dx = e.changedTouches[0].clientX - lbTouchStartX;
                if (Math.abs(dx) > 50) {
                    if (dx < 0) lightboxNext();
                    else lightboxPrev();
                }
            };
            lb.addEventListener('touchstart', lb._swipeHandler, { passive: true });
            lb.addEventListener('touchend', lb._swipeEndHandler, { passive: true });

            // Tap dark background to close (not the image itself)
            lb._bgClose = (e) => { if (e.target === lb) closeLightbox(); };
            lb.addEventListener('click', lb._bgClose);
        };

        window.closeLightbox = function() {
            const lb = document.getElementById('lightbox');
            lb.classList.remove('active');
            document.body.style.overflow = '';
            // Clean up event listeners to avoid memory leaks
            if (lb._swipeHandler)    lb.removeEventListener('touchstart', lb._swipeHandler);
            if (lb._swipeEndHandler) lb.removeEventListener('touchend', lb._swipeEndHandler);
            if (lb._bgClose)         lb.removeEventListener('click', lb._bgClose);
            lb._swipeHandler = lb._swipeEndHandler = lb._bgClose = null;
        };

        // Wrap-around looping: prev from first → goes to last
        window.lightboxPrev = function() {
            lightboxIndex = (lightboxIndex - 1 + lightboxPhotos.length) % lightboxPhotos.length;
            setLightboxImage(lightboxIndex);
        };

        // Wrap-around looping: next from last → goes to first
        window.lightboxNext = function() {
            lightboxIndex = (lightboxIndex + 1) % lightboxPhotos.length;
            setLightboxImage(lightboxIndex);
        };

        // ---- Category Open (with lightbox support) ----
        window.openCategory = function(slug, name) {
            const photos = photosByCategory[slug] || [];
            const grid   = document.getElementById('detail-gallery-grid');
            const title  = document.getElementById('detail-category-title');

            title.textContent = name;
            grid.innerHTML = '';

            if (photos.length === 0) {
                grid.innerHTML = '<p style="text-align:center;color:var(--text-secondary);padding:4rem 0;grid-column:1/-1;">Belum ada foto di kategori ini.</p>';
            } else {
                photos.forEach((photo, i) => {
                    const item = document.createElement('div');
                    item.className = 'gallery-item';
                    item.style.cssText = 'opacity:0;transform:translateY(20px);transition:none;cursor:pointer;';
                    item.innerHTML = `<img src="${photo.image_path}" alt="${photo.title}" loading="lazy">
                        <div class="gallery-overlay">
                            <span class="gallery-cat">${photo.category}</span>
                            <h3 class="gallery-title">${photo.title}</h3>
                        </div>`;
                    item.addEventListener('click', () => openLightbox(photos, i));
                    grid.appendChild(item);
                    setTimeout(() => {
                        item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        item.style.opacity    = '1';
                        item.style.transform  = 'translateY(0)';
                    }, 80 + i * 100);
                });
            }

            document.getElementById('category-showcase').style.display = 'none';
            const dv = document.getElementById('photo-detail-view');
            dv.style.cssText = 'display:block;opacity:0;transition:opacity 0.4s ease;';
            setTimeout(() => dv.style.opacity = '1', 20);
            document.getElementById('gallery').scrollIntoView({ behavior: 'smooth', block: 'start' });
        };

        // ---- Category Close ----
        window.closeCategory = function() {
            const showcase = document.getElementById('category-showcase');
            const dv       = document.getElementById('photo-detail-view');
            dv.style.cssText = 'display:block;opacity:0;transition:opacity 0.35s ease;';
            setTimeout(() => {
                dv.style.display = 'none';
                showcase.style.cssText = 'display:block;opacity:0;transition:opacity 0.4s ease;';
                setTimeout(() => showcase.style.opacity = '1', 20);
                document.getElementById('gallery').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 350);
        };

        // ---- Nav dropdown integration ----
        window.filterGallery = function(slug) {
            if (slug === 'all') {
                if (document.getElementById('photo-detail-view').style.display !== 'none') {
                    closeCategory();
                } else {
                    document.getElementById('gallery').scrollIntoView({ behavior: 'smooth' });
                }
                return;
            }
            const cat = (photosByCategory[slug] && photosByCategory[slug][0]) ? photosByCategory[slug][0].category : slug;
            openCategory(slug, cat);
        };

        // ---- Mobile Menu ----
        window.toggleMobileMenu = function() {
            const menu = document.getElementById('mobile-menu');
            const btn = document.getElementById('hamburger-btn');
            menu.classList.toggle('active');
            btn.classList.toggle('active');
            document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
        };

        window.closeMobileMenu = function() {
            const menu = document.getElementById('mobile-menu');
            const btn = document.getElementById('hamburger-btn');
            menu.classList.remove('active');
            btn.classList.remove('active');
            document.body.style.overflow = '';
        };
    </script>
</body>
</html>
