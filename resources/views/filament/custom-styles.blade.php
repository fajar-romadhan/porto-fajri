<style>
    /* ==========================================================================
       CYBER NEON GLOW & HIGH-TECH GRADIENT DARK MODE SYSTEM
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

    /* 3. FUTURISTIC CYBER NEON DARK MODE OVERRIDES */
    .dark body, .dark .fi-layout, .dark .fi-main {
        background-color: #0A0B0E !important;
        background-image: radial-gradient(rgba(245, 158, 11, 0.12) 1px, transparent 0) !important;
        background-size: 28px 28px !important;
        color: #F8FAFC !important;
    }

    .dark .fi-sidebar {
        background-color: #0E1017 !important;
        border-right: 1px solid rgba(255, 255, 255, 0.08) !important;
    }

    /* Cyber Card Gradient Borders & Glows */
    .dark .fi-widget,
    .dark .fi-section,
    .dark .fi-wi-stats-overview-stat,
    .dark .rounded-2xl {
        background-color: #121420 !important;
        border: 1px solid rgba(255, 255, 255, 0.09) !important;
        position: relative !important;
        color: #F8FAFC !important;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.7), 0 0 1px 1px rgba(255, 255, 255, 0.04) !important;
    }

    /* Top Cyber Gradient Hairline Accent on Cards */
    .dark .fi-widget::before,
    .dark .rounded-2xl::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        height: 2px !important;
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
        background: linear-gradient(90deg, #F59E0B, #10B981, #6366F1, #F59E0B) !important;
        background-size: 200% 100% !important;
        animation: cyberGradientFlow 6s linear infinite !important;
        opacity: 0.8 !important;
    }

    @keyframes cyberGradientFlow {
        0% { background-position: 0% 0%; }
        100% { background-position: 200% 0%; }
    }

    /* Card Hover Neon Aura */
    .dark .fi-widget:hover,
    .dark .rounded-2xl:hover {
        box-shadow: 0 14px 40px -10px rgba(245, 158, 11, 0.2), 0 0 20px rgba(16, 185, 129, 0.15) !important;
    }

    /* Cyber Metallic Gradient Text */
    .cyber-metallic-text {
        background: linear-gradient(135deg, #FFFFFF 0%, #FDE68A 50%, #F59E0B 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Strict Text Visibility */
    .dark h1, .dark h2, .dark h3, .dark h4, .dark .font-bold, .dark .font-extrabold {
        color: #FFFFFF !important;
    }

    .dark p, .dark span.text-slate-600, .dark div.text-slate-600 {
        color: #94A3B8 !important;
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
