<style>
    /* ==========================================================================
       PROFESSIONAL SAAS ADMIN DASHBOARD (LINEAR / VERCEL AESTHETIC)
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

    /* 2. EFEK 3D DEPTH & PERSPECTIVE HOVER UNTUK KARTU & WIDGET */
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

    /* 3D Lift & Rotation on Hover */
    .fi-wi-stats-overview-stat:hover,
    .fi-section:hover,
    .fi-widget:hover {
        transform: translateY(-5px) rotateX(1.5deg) rotateY(-1.2deg) scale(1.006) !important;
        box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.08), 0 0 20px rgba(197, 160, 40, 0.15) !important;
    }

    .dark .fi-wi-stats-overview-stat:hover,
    .dark .fi-section:hover,
    .dark .fi-widget:hover {
        box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.5), 0 0 25px rgba(245, 158, 11, 0.2) !important;
    }

    /* Stat Cards Adaptive Styling */
    /* Light Mode */
    .fi-wi-stats-overview-stat {
        background: #FFFFFF !important;
        border: 1px solid rgba(226, 232, 240, 0.8) !important;
        box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.03), 0 2px 6px -1px rgba(0, 0, 0, 0.02) !important;
    }

    /* Dark Mode */
    .dark .fi-wi-stats-overview-stat {
        background: #12141D !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5) !important;
    }
</style>
