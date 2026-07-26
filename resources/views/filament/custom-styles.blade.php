<style>
    /* ==========================================================================
       SUPER-DYNAMIC HUE-ROTATE CYBER NEON RGB SYSTEM (html.dark & html:not(.dark))
       ========================================================================== */

    /* 1. ENTRANCE ANIMATIONS */
    .fi-sidebar, aside.fi-sidebar {
        animation: slideSidebarIn 0.85s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
        will-change: transform, opacity;
    }

    @keyframes slideSidebarIn {
        0% { transform: translateX(-100%); opacity: 0; }
        100% { transform: translateX(0); opacity: 1; }
    }

    .fi-main-ctn, .fi-main, main.fi-main {
        animation: slideContentIn 0.95s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
        will-change: transform, opacity;
    }

    @keyframes slideContentIn {
        0% { transform: translateX(60px); opacity: 0; }
        100% { transform: translateX(0); opacity: 1; }
    }

    /* 2. iOS / macOS & CYBER SPRING PRESS ANIMATIONS */
    button, .fi-btn, .fi-link, .fi-icon-btn, .fi-sidebar-item-button, .fi-modal-close-btn, a.inline-flex, .ios-button, .ios-card {
        transition: transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1), 
                    box-shadow 0.25s ease, 
                    background-color 0.25s ease, 
                    border-color 0.25s ease !important;
        will-change: transform;
    }

    button:hover:not(:disabled), .fi-btn:hover:not(:disabled), .fi-icon-btn:hover:not(:disabled), .fi-sidebar-item-button:hover, a.inline-flex:hover, .ios-button:hover, .ios-card:hover {
        transform: translateY(-2px) scale(1.02);
    }

    button:active:not(:disabled), .fi-btn:active:not(:disabled), .fi-icon-btn:active:not(:disabled), .fi-sidebar-item-button:active, a.inline-flex:active, .ios-button:active, .ios-card:active {
        transform: translateY(1px) scale(0.95) !important;
    }

    /* 3. ULTRA-HIGH SPECIFICITY STUDIO CARD SYSTEM */
    /* Light Mode Studio Card */
    html:not(.dark) .studio-card,
    html:not(.dark) .fi-widget > div,
    html:not(.dark) .fi-section > div,
    html:not(.dark) .fi-wi-stats-overview-stat {
        background-color: #FFFFFF !important;
        background-image: none !important;
        border: 1px solid rgba(226, 232, 240, 0.9) !important;
        color: #0F172A !important;
        box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.03) !important;
    }

    /* Dark Mode Studio Card */
    html.dark .studio-card,
    html.dark .fi-widget > div,
    html.dark .fi-section > div,
    html.dark .fi-wi-stats-overview-stat {
        background-color: #121420 !important;
        background-image: none !important;
        border: 1px solid rgba(255, 255, 255, 0.12) !important;
        color: #F8FAFC !important;
        box-shadow: 0 10px 35px -10px rgba(0, 0, 0, 0.8), 0 0 1px 1px rgba(255, 255, 255, 0.05) !important;
        transition: border-color 0.3s ease, box-shadow 0.3s ease !important;
    }

    /* HIGH-IMPACT HUE-ROTATE CYBER NEON RGB FLOW ON TOP CARD BORDERS (2.5s Spectrum Shift) */
    html.dark .studio-card::before,
    html.dark .fi-widget > div::before,
    html.dark .fi-wi-stats-overview-stat::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        height: 4px !important;
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
        background: linear-gradient(90deg, #F59E0B, #10B981, #06B6D4, #6366F1, #EC4899, #F59E0B) !important;
        background-size: 200% 100% !important;
        animation: cyberHueRotate 2.5s linear infinite !important;
        opacity: 1 !important;
        pointer-events: none !important;
        box-shadow: 0 0 14px rgba(245, 158, 11, 0.6), 0 0 25px rgba(6, 182, 212, 0.4) !important;
    }

    @keyframes cyberHueRotate {
        0% { filter: hue-rotate(0deg); }
        100% { filter: hue-rotate(360deg); }
    }

    /* Card Hover Cyber Aura Glow */
    html.dark .studio-card:hover,
    html.dark .fi-widget > div:hover,
    html.dark .fi-wi-stats-overview-stat:hover {
        box-shadow: 0 16px 45px -10px rgba(6, 182, 212, 0.4), 0 0 30px rgba(245, 158, 11, 0.35) !important;
        border-color: rgba(6, 182, 212, 0.5) !important;
    }

    /* Subcards inside widgets */
    html:not(.dark) .studio-subcard {
        background-color: rgba(248, 250, 252, 0.95) !important;
        border: 1px solid rgba(226, 232, 240, 0.9) !important;
        color: #0F172A !important;
    }

    html.dark .studio-subcard {
        background-color: rgba(17, 24, 39, 0.85) !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        color: #F8FAFC !important;
    }

    /* Strict Text Colors */
    html:not(.dark) .studio-title,
    html:not(.dark) h1, html:not(.dark) h2, html:not(.dark) h3, html:not(.dark) h4 {
        color: #0F172A !important;
    }

    html.dark .studio-title,
    html.dark h1, html.dark h2, html.dark h3, html.dark h4 {
        color: #FFFFFF !important;
    }

    html:not(.dark) .studio-desc,
    html:not(.dark) p {
        color: #475569 !important;
    }

    html.dark .studio-desc,
    html.dark p {
        color: #94A3B8 !important;
    }

    /* GLOBAL DARK BODY OVERRIDES */
    html.dark body, html.dark .fi-layout, html.dark .fi-main {
        background-color: #0A0B0E !important;
        background-image: radial-gradient(rgba(245, 158, 11, 0.12) 1px, transparent 0) !important;
        background-size: 28px 28px !important;
        color: #F8FAFC !important;
    }

    html.dark .fi-sidebar {
        background-color: #0E1017 !important;
        border-right: 1px solid rgba(255, 255, 255, 0.08) !important;
    }

    html.dark .fi-wi-stats-overview-stat-label,
    html.dark .fi-wi-stats-overview-stat-value {
        color: #FFFFFF !important;
    }
</style>

<!-- 4. SMART TIME-BASED AUTO THEME ENGINE -->
<script>
    (function initSmartTimeThemeEngine() {
        function evaluateThemeByTime() {
            const hour = new Date().getHours();
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
        setInterval(evaluateThemeByTime, 60000);
    })();
</script>
