# Design Spec: Real-Time Suite & Sidebar Activity Log System

## Overview
This specification details the comprehensive Real-Time & Activity Log Suite for FAJRI Photography Studio Admin (`/kelola`).
It introduces a dedicated **Sidebar Activity Log System** for tracking every administrative action with precise timestamps (Date & Time WIB), alongside a suite of 4 Real-Time Studio Widgets (Visitor Analytics, Client Inquiry Leads, Private Client Gallery Toggle, and Supabase Storage Monitor).

---

## 1. Sidebar Activity Log System (`Log Aktivitas`)

### Objective
Track and display every action taken by the admin (Upload Foto, Edit Foto, Hapus Foto, Tambah Kategori, Edit Teks Website) with precise timestamps (`Waktu WIB`), action badges, and detailed descriptions.

### Schema & Database Structure
Table: `activity_logs`
- `id` (bigint, primary key)
- `admin_name` (string): Name of admin performing action (default: `'Fajri'`)
- `action_type` (string): Enum `['CREATE', 'UPDATE', 'DELETE', 'LOGIN', 'SETTING']`
- `module` (string): `'Foto'`, `'Kategori'`, `'Teks Website'`, `'Sistem'`
- `description` (text): Human-readable action summary (e.g. *"Mengunggah foto portofolio baru 'Prewedding Sunset' di Kategori Prewedding"*)
- `ip_address` (string, nullable)
- `created_at` (timestamp, Asia/Jakarta WIB timezone)
- `updated_at` (timestamp)

### Filament Resource (`App\Filament\Resources\ActivityLogResource`)
- **Navigation**:
  - Label: `Log Aktivitas`
  - Icon: `heroicon-o-clock` / `heroicon-o-clipboard-document-list`
  - Group: `Sistem Studio`
- **Table Columns**:
  - `created_at`: Formatted as `D MMM YYYY, HH:mm:ss WIB`
  - `action_type`: Badge with colors (`CREATE` -> Green, `UPDATE` -> Blue, `DELETE` -> Red, `SETTING` -> Amber)
  - `module`: Badge pill
  - `description`: Text column with search & filter
  - `admin_name`: Admin identifier badge

### Automatic Activity Observer / Listener
Integrate model observers on `Photo`, `Category`, and `WebsiteContent` to automatically record activity logs whenever a record is created, updated, or deleted.

---

## 2. Real-Time Analytics & Operations Suite

### A. Real-Time Visitor & Photo Analytics (`LiveVisitorAnalyticsWidget`)
- Widget displaying online active session counters and total photo views.
- Real-time Livewire polling interval (`wire:poll.10s`).

### B. Real-Time Client Inquiries & Leads Widget (`ClientInquiriesWidget`)
- Widget listing recent client booking inquiries sent from the contact form.
- Real-time polling with unread badge counter and quick WhatsApp action buttons.

### C. Private Client Gallery Status Management
- Database migration adding `is_private` (boolean) and `access_code` (string, nullable) to `photos` / `categories`.
- Toggle in `PhotoResource` / `CategoryResource` allowing instant publishing or passcode locking for private client galleries.

### D. Supabase Storage Monitor Widget (`StorageMonitorWidget`)
- Widget displaying Supabase Storage usage breakdown (Used Space, Photo Count, Average Image Size, CDN Cache Health).

---

## 3. Architecture & File Structure

### New / Modified Files:
1. `database/migrations/2026_07_26_000001_create_activity_logs_table.php` [NEW]
2. `database/migrations/2026_07_26_000002_add_private_access_to_photos_table.php` [NEW]
3. `app/Models/ActivityLog.php` [NEW]
4. `app/Observers/PhotoObserver.php` [NEW]
5. `app/Observers/CategoryObserver.php` [NEW]
6. `app/Observers/WebsiteContentObserver.php` [NEW]
7. `app/Filament/Resources/ActivityLogResource.php` [NEW]
8. `app/Filament/Resources/ActivityLogResource/Pages/ListActivityLogs.php` [NEW]
9. `app/Filament/Widgets/LiveVisitorAnalyticsWidget.php` [NEW]
10. `app/Filament/Widgets/StorageMonitorWidget.php` [NEW]
11. `resources/views/filament/widgets/live-visitor-analytics.blade.php` [NEW]
12. `resources/views/filament/widgets/storage-monitor.blade.php` [NEW]
13. `app/Filament/Pages/Dashboard.php` [MODIFY]
14. `app/Providers/Filament/AdminPanelProvider.php` [MODIFY]

---

## 4. Verification & Testing Plan
- Run database migrations (`php artisan migrate`).
- Trigger test activities (create category, upload photo, edit text) and verify entries in `Log Aktivitas`.
- Verify timestamp formatting in WIB (`Asia/Jakarta`).
- Run `npm run build` asset compilation.
- Commit & push to GitHub `main` for Vercel deployment.
