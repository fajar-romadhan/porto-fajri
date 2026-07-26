<style>
    /* ==========================================================================
       GEN Z CLEAN STUDIO GLASS - ANIMATIONS & 3D DEPTH STYLES FOR FILAMENT ADMIN
       ========================================================================== */

    /* 1. ANIMASI ENTRANCE BERGULIR SAAT LOGIN / OPEN DASHBOARD */
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
            transform: translateX(70px);
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
        transform: translateY(-6px) rotateX(1.8deg) rotateY(-1.5deg) scale(1.008) !important;
        box-shadow: 0 25px 50px -12px rgba(212, 175, 55, 0.25), 0 10px 25px -5px rgba(0, 0, 0, 0.3) !important;
    }

    /* Stat Cards Ambient Styling */
    .fi-wi-stats-overview-stat {
        background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(245,245,245,0.9) 100%) !important;
        border: 1px solid rgba(212, 175, 55, 0.3) !important;
        box-shadow: 0 10px 30px -10px rgba(0,0,0,0.05) !important;
    }

    .dark .fi-wi-stats-overview-stat {
        background: linear-gradient(135deg, #0d0e15 0%, #161822 100%) !important;
        border: 1px solid rgba(212, 175, 55, 0.25) !important;
        box-shadow: 0 10px 30px -10px rgba(0,0,0,0.5) !important;
    }
</style>
