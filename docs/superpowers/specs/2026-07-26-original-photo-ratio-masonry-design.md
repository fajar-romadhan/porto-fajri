# Design Spec: Support Original Photo Aspect Ratio with Masonry Grid Layout

## Overview
Currently, the Filament Admin panel forces all uploaded photos to be cropped to a fixed `4:5` aspect ratio (1200x1500 px), and the website gallery displays them in fixed 4:5 grid cards (`aspect-ratio: 4/5; object-fit: cover`).

This feature removes the forced 4:5 cropping requirement from Filament Admin so photographers can upload photos in their original aspect ratio (4:6 portrait, 6:4 / 16:9 landscape, etc.) without losing any image area. The frontend gallery layout is updated to a responsive **Masonry Grid (Pinterest Style)** layout so all photos render 100% complete without clipping.

## Backward Compatibility & Existing Data
- **Existing Uploads**: All photos previously uploaded to Supabase Storage remain unchanged and fully functional.
- **Rendering**: Existing 4:5 cropped photos and newly uploaded 4:6 / 6:4 / 16:9 photos will sit seamlessly alongside each other in the Masonry layout.

## 1. Admin Panel Changes (`PhotoResource.php`)
- Remove `imageCropAspectRatio('4:5')` constraint.
- Remove rigid target height resize `imageResizeTargetHeight('1500')`.
- Retain maximum file size limit (4MB) and client-side optimization to preserve loading speed while respecting original proportions.
- Update form field helper text to clearly inform admins that photos will keep their original aspect ratio (4:6, 6:4, etc.).

## 2. Frontend Layout & CSS Changes (`welcome.blade.php` & `app.css`)
- **Gallery Grid CSS**: Update `.gallery-grid` from `display: grid` with fixed `aspect-ratio: 4/5` to CSS Multi-column Masonry (`columns: 3 320px; gap: 1.5rem;`).
- **Gallery Item CSS**: Set `.gallery-item` to `break-inside: avoid; margin-bottom: 1.5rem; aspect-ratio: auto; height: auto;`.
- **Image Element**: Set `.gallery-item img` to `width: 100%; height: auto; display: block; object-fit: contain;` so images maintain their native proportion.
- **Category Card Cover**: Keep category cover images nicely framed and consistent.
- **Lightbox**: Lightbox pop-up modal retains original aspect ratio rendering (`object-fit: contain`) for full high-res view.

## 3. Verification & Testing Plan
- Test uploading landscape (16:9 / 6:4) and portrait (4:6) photos via Filament Admin.
- Verify Masonry grid responsive behavior across desktop (3 columns), tablet (2 columns), and mobile (1 column).
- Confirm existing photos display properly alongside new uploads.
- Run build/asset checks (`npm run build` or Vite check).
