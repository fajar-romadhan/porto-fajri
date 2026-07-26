<style>
    /* ==========================================================================
       iOS & macOS SYSTEM-WIDE BUTTON & CARD INTERACTION ANIMATIONS
       ========================================================================== */

    /* 1. ANIMASI ENTRANCE BERGULIR SAAT LOGIN / BUKA DASHBOARD */
    /* Sidebar: Kiri ke Kanan (Slide-in Left) */
    .fi-sidebar, 
    aside.fi-sidebar {
        animation: slideSidebarIn 0.85s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
        will-change: transform, opacity;
    }

    @keyframes slideSidebarIn {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Main Content: Kanan ke Kiri (Slide-in Right) */
    .fi-main-ctn, 
    .fi-main, 
    main.fi-main {
        animation: slideContentIn 0.95s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
        will-change: transform, opacity;
    }

    @keyframes slideContentIn {
        0% {
            transform: translateX(60px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* 2. iOS / macOS GLOBAL BUTTON & CARD MICRO-INTERACTIONS */
    /* Semua tombol, link, icon-btn, dan kartu mendapat animasi spring khas iOS/macOS */
    button, 
    .fi-btn, 
    .fi-link, 
    .fi-icon-btn,
    .fi-sidebar-item-button,
    .fi-modal-close-btn,
    a.inline-flex,
    .ios-button,
    .ios-card {
        transition: transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1), 
                    box-shadow 0.25s ease, 
                    background-color 0.25s ease, 
                    border-color 0.25s ease !important;
        will-change: transform;
    }

    /* macOS Hover Elevation */
    button:hover:not(:disabled), 
    .fi-btn:hover:not(:disabled), 
    .fi-icon-btn:hover:not(:disabled),
    .fi-sidebar-item-button:hover,
    a.inline-flex:hover,
    .ios-button:hover,
    .ios-card:hover {
        transform: translateY(-2px) scale(1.02);
    }

    /* iOS Spring Press Down (Tekanan saat diklik/sentuh) */
    button:active:not(:disabled), 
    .fi-btn:active:not(:disabled), 
    .fi-icon-btn:active:not(:disabled),
    .fi-sidebar-item-button:active,
    a.inline-flex:active,
    .ios-button:active,
    .ios-card:active {
        transform: translateY(1px) scale(0.95) !important;
    }

    /* 3. EFEK 3D DEPTH & PERSPECTIVE HOVER UNTUK KARTU WIDGET */
    .fi-page {
        perspective: 1200px;
    }

    .fi-wi-stats-overview-stat,
    .fi-section,
    .fi-widget {
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
        transform-style: preserve-3d;
        border-radius: 1.25rem !important;
    }

    /* Stat Cards Adaptive Styling */
    .fi-wi-stats-overview-stat {
        background: #FFFFFF !important;
        border: 1px solid rgba(226, 232, 240, 0.9) !important;
        box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.03), 0 2px 6px -1px rgba(0, 0, 0, 0.02) !important;
    }

    .dark .fi-wi-stats-overview-stat {
        background: #12141D !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5) !important;
    }
</style>

<!-- 4. SMART TIME-BASED AUTO THEME ENGINE (06:00 - 19:59 Light, 20:00 - 05:59 Dark) -->
<script>
    (function initSmartTimeThemeEngine() {
        function evaluateThemeByTime() {
            const hour = new Date().getHours();
            // Jam 20.00 malam (20) s/d 05.59 pagi (5) -> Otomatis Tema Malam (Dark Mode)
            // Jam 06.00 pagi (6) s/d 19.59 malam (19) -> Otomatis Tema Terang (Light Mode)
            const isNightTime = (hour >= 20 || hour < 6);

            if (isNightTime) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        }

        evaluateThemeByTime();
        document.addEventListener('DOMContentLoaded', evaluateThemeByTime);
        document.addEventListener('livewire:navigated', evaluateThemeByTime);
        setInterval(evaluateThemeByTime, 60000); // Periksa otomatis setiap 60 detik
    })();
</script>
