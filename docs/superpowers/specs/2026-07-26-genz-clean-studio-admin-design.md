# Design Spec: Professional SaaS Admin Dashboard (Linear / Vercel Aesthetic)

## Overview
Redesign the Filament Admin Dashboard (`/kelola`) into a world-class professional SaaS platform aesthetic inspired by Linear, Vercel, and Apple Developer portals.
The design fixes color palette clashes by providing a seamless, unified experience in both **Light Mode** and **Dark Mode**, and adds high-end micro-UX details such as real-time studio clock/date, live cloud connection status, 3D hover dynamics, and spring entrance animations.

## Architectural & UX Components

### 1. Theme Color System (Adaptive Light & Dark Mode)
- **Light Mode**:
  - Cards: Pure White (`#FFFFFF`) with hairline border (`1px solid #E2E8F0` / `rgba(0,0,0,0.06)`), soft shadow (`box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03)`).
  - Typography: Deep Charcoal (`#0F172A`) headers, Slate (`#475569`) body, Muted (`#94A3B8`) captions.
  - Accent: Refined Studio Champagne Gold (`#C5A028`) & Obsidian Slate (`#0F172A`).
- **Dark Mode**:
  - Cards: Deep Slate Obsidian (`#12141D`) with hairline border (`1px solid rgba(255,255,255,0.08)`).
  - Typography: Crisp White (`#F8FAFC`) headers, Muted Gray (`#94A3B8`) body.
  - Accent: Amber Gold (`#F59E0B`).

### 2. Header & Welcome Banner (`welcome-banner.blade.php`)
- **Real-Time Clock & Date**: Live JavaScript badge (`🗓️ <Day>, <Date> • <HH:MM> WIB`).
- **Cloud Health Badge**: Live pulse indicator (`🟢 Cloud Connected • Vercel Edge Active`).
- **Linear-style Quick Action Pills**:
  - `[+ Upload Foto]` (Primary Gold pill with inset border & active scale)
  - `[+ Tambah Kategori]` (Secondary frosted pill)
  - `[🌐 Lihat Web Live]` (Live site outer link)

### 3. Quick Guide Widget (`admin-guide.blade.php`)
- **Linear/Apple Settings Tip Grid**: 4 micro-cards with rounded icon badges, subtle hover borders, and crisp typography.

### 4. Custom Animations & 3D Depth (`custom-styles.blade.php`)
- **Sidebar Entrance**: Slide-in Left (`translateX(-100%) -> translateX(0)`) duration 0.85s `cubic-bezier(0.16, 1, 0.3, 1)`.
- **Main Content Entrance**: Slide-in Right (`translateX(70px) -> translateX(0)`) duration 0.95s.
- **3D Card Perspective**: Perspective 1200px, 3D hover tilt (`translateY(-6px) rotateX(1.8deg) rotateY(-1.5deg)`), 3D icon Z-lift.

## Verification & Testing Plan
- Test rendering in both Light Mode and Dark Mode.
- Verify real-time clock update via JS.
- Run `npm run build`.
- Push to GitHub `main` branch for Vercel deployment.
