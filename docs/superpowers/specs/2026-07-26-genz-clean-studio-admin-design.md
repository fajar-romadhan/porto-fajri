# Design Spec: Gen Z "Clean Studio Glass" Admin Dashboard Redesign

## Overview
Redesign the Filament Admin Dashboard for Fajri Photography (`/kelola`) to match a modern "Clean Studio Glass" Gen Z aesthetic inspired by iOS/macOS minimalist interfaces. 
The redesign replaces standard default Filament widgets with custom greeting banners, quick action pills, rounded-2xl glassmorphism stat cards, and an Apple-style interactive tip grid.

## Target User & Greeting
- Title: **"Selamat Datang, Fajri ⚡"**
- Subtitle: *"Fajri Photography Studio Dashboard — Kelola portofolio Anda dengan mudah."*

## Architectural Components

### 1. Dashboard Page (`app/Filament/Pages/Dashboard.php`)
- Title updated dynamically to `"Selamat Datang, Fajri ⚡"`.
- Registered Widgets: `WelcomeBannerWidget`, `DashboardOverview`, `AdminGuideWidget`.

### 2. Welcome Banner Widget (`app/Filament/Widgets/WelcomeBannerWidget.php` & `resources/views/filament/widgets/welcome-banner.blade.php`)
- **Visual Style**: Frosted glass surface (`backdrop-filter: blur(12px)`), soft gold gradient subtle border, rounded-2xl padding.
- **Quick Action Pills**:
  - `[+ Upload Foto Baru]` -> Link to `/kelola/photos/create`
  - `[+ Tambah Kategori]` -> Link to `/kelola/categories/create`
  - `[🌐 Buka Website Live]` -> Link to `/` (opens live site)

### 3. Stat Overview Widget (`app/Filament/Widgets/DashboardOverview.php`)
- **Visual Style**: Clean rounded 2xl floating cards with smooth hover float effect (`transform: translateY(-2px)`).
- **Stat 1**: `📸 Total Foto` -> photo count with direct link to photos.
- **Stat 2**: `🗂️ Kategori Active` -> category count with direct link to categories.
- **Stat 3**: `🟢 Website Status` -> Live pulse indicator pointing to website root.

### 4. Quick Guide Widget (`app/Filament/Widgets/AdminGuideWidget.php` & `resources/views/filament/widgets/admin-guide.blade.php`)
- **Visual Style**: Apple Settings / Tips Card Grid with rounded icon badges (`rounded-xl`), soft background contrast, clear typography.
- **4 Micro Cards**:
  1. 📂 **Kelola Kategori**: Buat kategori foto terlebih dahulu sebelum upload karya.
  2. 📸 **Upload Karya**: Bebas upload format 4:6 Portrait & 6:4 / 16:9 Landscape.
  3. ✍️ **Edit Konten Web**: Atur Teks About, Logo, & Slide Hero Banner.
  4. 📌 **Sistem Urutan**: Angka terkecil (1, 2, 3) akan tampil paling depan di galeri.

## Verification & Testing Plan
- Test rendering in Filament Admin (`/kelola`).
- Check responsive behavior on Mobile and Desktop.
- Compile assets (`npm run build`).
- Push to GitHub `main` branch to trigger Vercel deployment.
