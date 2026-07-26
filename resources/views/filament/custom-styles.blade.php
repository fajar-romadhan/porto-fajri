<style>
    /* ==========================================================================
       FUTURISTIC DEEP OBSIDIAN DARK MODE & LIGHT MODE SYSTEM-WIDE ENFORCEMENT
       ========================================================================== */

    /* 1. ANIMASI ENTRANCE BERGULIR SAAT LOGIN / BUKA DASHBOARD */
    .fi-sidebar, 
    aside.fi-sidebar {
        animation: slideSidebarIn 0.85s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
        will-change: transform, opacity;
    }

    @keyframes slideSidebarIn {
        0% { transform: translateX(-100%); opacity: 0; }
        100% { transform: translateX(0); opacity: 1; }
    }

    .fi-main-ctn, 
    .fi-main, 
    main.fi-main {
        animation: slideContentIn 0.95s cubic-bezier(0.16, 1, 0.3, 1) forwards !important;
        will-change: transform, opacity;
    }

    @keyframes slideContentIn {
        0% { transform: translateX(60px); opacity: 0; }
        100% { transform: translateX(0); opacity: 1; }
    }

    /* 2. iOS / macOS GLOBAL BUTTON & CARD MICRO-INTERACTIONS */
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

    button:hover:not(:disabled), 
    .fi-btn:hover:not(:disabled), 
    .fi-icon-btn:hover:not(:disabled),
    .fi-sidebar-item-button:hover,
    a.inline-flex:hover,
    .ios-button:hover,
    .ios-card:hover {
        transform: translateY(-2px) scale(1.02);
    }

    button:active:not(:disabled), 
    .fi-btn:active:not(:disabled), 
    .fi-icon-btn:active:not(:disabled),
    .fi-sidebar-item-button:active,
    a.inline-flex:active,
    .ios-button:active,
    .ios-card:active {
        transform: translateY(1px) scale(0.95) !important;
    }

    /* 3. STRICT DARK MODE COLOR CORRECTION & OBSIDIAN SAAS GLASS SYSTEM */
    .dark body,
    .dark .fi-layout,
    .dark .fi-main {
        background-color: #0A0B0E !important;
        color: #F8FAFC !important;
    }

    .dark .fi-sidebar {
        background-color: #0E1017 !important;
        border-right: 1px solid rgba(255, 255, 255, 0.08) !important;
    }

    .dark .fi-widget,
    .dark .fi-section,
    .dark .fi-wi-stats-overview-stat,
    .dark .rounded-2xl {
        background-color: #12141F !important;
        border-color: rgba(255, 255, 255, 0.09) !important;
        color: #F8FAFC !important;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.6), 0 0 1px 1px rgba(255, 255, 255, 0.04) !important;
    }

    /* Strict Text Visibility in Dark Mode */
    .dark h1, .dark h2, .dark h3, .dark h4, .dark .font-bold, .dark .font-extrabold {
        color: #FFFFFF !important;
    }

    .dark p, .dark span.text-slate-600, .dark div.text-slate-600 {
        color: #94A3B8 !important;
    }

    .dark .bg-slate-50, 
    .dark .bg-slate-100 {
        background-color: rgba(255, 255, 255, 0.05) !important;
        border-color: rgba(255, 255, 255, 0.08) !important;
        color: #E2E8F0 !important;
    }
</style>

<!-- 4. SMART TIME-BASED AUTO THEME ENGINE (06:00 - 19:59 Light, 20:00 - 05:59 Dark) -->
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
