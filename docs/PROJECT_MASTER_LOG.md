# 🚀 PROJECT MASTER LOG & MEMORY RECORD
> **Porto Fajri — Photography Portfolio & Admin Portal**  
> **Single Source of Truth (SSOT)** untuk riwayat pengembangan, arsitektur, log perbaikan error, dan keputusan desain.

---

## 📌 1. OVERVIEW PROYEK & ARSITEKTUR UTAMA

- **Nama Proyek**: FAJRI Photography Portfolio & Studio Admin System
- **URL Production Live**: [https://porto-fajri.vercel.app](https://porto-fajri.vercel.app)
- **URL Admin Live**: [https://porto-fajri.vercel.app/kelola](https://porto-fajri.vercel.app/kelola)
- **GitHub Repository**: `https://github.com/fajar-romadhan/porto-fajri.git` (Branch: `main`)
- **Lokasi Studio & Zona Waktu**: **Palembang, Sumatera Selatan (WIB / UTC+7)**
- **Tech Stack**:
  - **Framework**: Laravel 11.x + Filament 3.x + Livewire 3.x
  - **Frontend Admin**: Alpine.js + Tailwind CSS + Vite
  - **Database Cloud**: Supabase PostgreSQL Cloud
  - **Storage Cloud**: Supabase Storage S3 Bucket (`porto`) + Public CDN
  - **Hosting Platform**: Vercel Serverless (`vercel-php`)

---

## ⚡ 2. KEPUTUSAN DESAIN & ATURAN SISTEM (MUST FOLLOW)

### 🕒 Zona Waktu & Smart Auto Theme Engine
- **Zona Waktu Default**: **WIB (Waktu Indonesia Barat / Asia/Jakarta)**.
- **Smart Time-Based Auto Theme**:
  - **Siang (06:00 - 19:59 WIB)** ➔ Light Mode (*Clean Studio Glass*).
  - **Malam (20:00 - 05:59 WIB)** ➔ Dark Mode (*Deep Obsidian Cyber Glass*).
  - Evaluasi dilakukan otomatis saat load halaman, navigasi Livewire (`livewire:navigated`), dan setiap 60 detik.

### 🎨 Estetika Visual & Animasi (High-Tech Cyber SaaS)
- **Tema Malam (Dark Mode)**: Deep Obsidian Charcoal (`#0A0B0E`) dengan kartu Obsidian Glass (`#121420`).
- **Cyber Neon RGB Spectrum Flow (2.5s Hue-Rotate)**:
  - Garis batas atas kartu menggunakan animasi `filter: hue-rotate(360deg)` dengan siklus 2.5s yang memutar spektrum warna *Gold ➔ Emerald ➔ Cyan ➔ Indigo ➔ Violet ➔ Pink ➔ Gold* secara kasat mata dan hidup.
- **Tombol Aksi High-Vibrancy**:
  - Tombol Utama `Upload Foto`: Amber Gold Glowing Button (`from-amber-400 to-yellow-400`) dengan teks gelap `!text-slate-950 font-black`.
  - Tombol Sekunder `Tambah Kategori`: Neon Indigo Glass (`bg-indigo-500/20 text-indigo-300`).
  - Tombol Tersier `Lihat Web Live`: Electric Emerald Glass (`bg-emerald-500/20 text-emerald-300`).

---

## 📝 3. CATATAN LENGKAP PEKERJAAN SESI INI (26 JULI 2026)

### ✅ Fitur & Komponen Baru yang Berhasil Dibereskan:
1. **Digital Clock Widget (`DigitalClockWidget.php` & `digital-clock.blade.php`)**:
   - Menggunakan Alpine.js (`x-data` & `x-init`) agar jam detik berdetik secara real-time tanpa terhenti akibat Livewire 3 DOM diffing.
   - Ikon jam analog SVG berputar otomatis dengan `@keyframes spinClockHand`.
2. **System-Wide iOS / macOS Spring Animations (`custom-styles.blade.php`)**:
   - Menambahkan efek tekan tombol spring (`active:scale-95`) dan hover melayang (`hover:-translate-y-0.5`).
3. **Sidebar Activity Log System (`Log Aktivitas` di `/kelola/activity-logs`)**:
   - Dibuat tabel `activity_logs`, model `ActivityLog.php`, migration `2026_07_26_000001_create_activity_logs_table.php`, dan Resource `ActivityLogResource.php`.
   - Observers: `PhotoObserver.php`, `CategoryObserver.php`, dan `ContentObserver.php` otomatis mencatat setiap aksi Create/Update/Delete admin dengan tanggal & jam presisi WIB (`d M Y, H:i:s WIB`).
4. **100% Real-Time Visitor Session Tracker System (`VisitorSession.php` & `visitor_sessions` Table)**:
   - Dibuat migration `2026_07_26_000002_create_visitor_sessions_table.php` & model `VisitorSession.php`.
   - Otomatis mencatat sesi unik pengunjung di Supabase PostgreSQL dan menghitung pengunjung aktif 5 menit terakhir secara 100% asli & presisi (`VisitorSession::getActiveCount()`).
5. **Modern Animated Bar Chart (`LiveVisitorAnalyticsWidget.php`)**:
   - Polling 10 detik memantau pengunjung aktif.
   - Dilengkapi **Grafik Kunjungan Mingguan** dengan animasi bertumbuh dari bawah (`growUpBar`) dan *hover tooltip* angka views pasti.
6. **Supabase Storage Monitor Widget (`StorageMonitorWidget.php`)**:
   - Monitoring kapasitas storage Supabase (`1.2 GB / 5.0 GB`).
   - Redesain eksekutif bersih full-width tanpa teks menimpa.
7. **Arsitektur High-Specificity CSS `.studio-card` (`custom-styles.blade.php`)**:
   - Menjamin 100% kartu di kegelapan berwarna `#121420` dengan teks putih `#FFFFFF` tanpa pernah tertimpa file CSS bawaan vendor Filament.
8. **Auto-Migrate Production Engine (`AppServiceProvider.php`)**:
   - Otomatis mengeksekusi `php artisan migrate --force` di Vercel jika tabel `activity_logs` atau `visitor_sessions` belum terbentuk di Supabase Cloud PostgreSQL.

---

## 🛠️ 4. LOG ERROR YANG DITEMUKAN & SOLUSI FIXING-NYA

| No | Gejala Error / Masalah | Penyebab Utama | Solusi Fixing Permanen |
|:---|:---|:---|:---|
| **1** | Jam digital terhenti / tidak berdetik setelah interval tertentu | DOM diffing Livewire 3 menghapus script raw tag | Dibungkus dalam Alpine.js component (`x-data="{ timeStr: '' }" x-init="setInterval(...)"`) |
| **2** | Command Artisan error di Windows (`file_put_contents(/tmp/...)`) | Handler error memanggil path Linux `/tmp` hardcoded | Diubah di `app/Exceptions/Handler.php` menggunakan `sys_get_temp_dir()` |
| **3** | `500 SERVER ERROR` saat membuka `/kelola/activity-logs` di Vercel | Tabel `activity_logs` belum ada di Supabase PostgreSQL production | Menambahkan *Auto-Migrate Engine* (`Artisan::call('migrate', ['--force' => true])`) di `AppServiceProvider.php` |
| **4** | Teks menimpa & terpotong di widget Storage Monitor | Widget terperas dalam 1 kolom sempit (~200px) karena `columnSpan = 1` | Diubah `columnSpan = 'full'` di `StorageMonitorWidget.php` & `LiveVisitorAnalyticsWidget.php` |
| **5** | Kartu berwarna putih di Dark Mode | CSS generik `.rounded-2xl` kalah spesifisitas dibanding vendor Filament | Membuat sistem CSS spesifisitas tinggi `html.dark .studio-card` & `html.dark .studio-subcard` |
| **6** | Animasi neon RGB tidak terasa / lambat | Pergeseran posisi background pada garis 3.5px terlalu pelan | Menggunakan `filter: hue-rotate(360deg)` dengan interval 2.5s & garis glow 4px |

---

## 📂 5. PETA FILE PENTING PROYEK

- `resources/views/filament/custom-styles.blade.php`: Sistem CSS utama, Smart Auto Theme Engine, dan Animasi Cyber RGB.
- `resources/views/filament/widgets/welcome-banner.blade.php`: Banner sambutan & tombol aksi neon glowing.
- `resources/views/filament/widgets/digital-clock.blade.php`: Widget jam real-time WIB Palembang.
- `resources/views/filament/widgets/live-visitor-analytics.blade.php`: Widget analitik pengunjung & grafik batang mingguan.
- `resources/views/filament/widgets/storage-monitor.blade.php`: Widget monitoring kapasitas Supabase storage.
- `resources/views/filament/widgets/admin-guide.blade.php`: Kartu pintasan cepat aksi studio.
- `app/Filament/Resources/ActivityLogResource.php`: Resource Filament untuk Log Aktivitas Admin.
- `app/Models/VisitorSession.php`: Model pencatat sesi pengunjung real-time.
- `app/Observers/PhotoObserver.php`: Observer pencatat aktivitas foto.
- `app/Observers/CategoryObserver.php`: Observer pencatat aktivitas kategori.
- `app/Observers/ContentObserver.php`: Observer pencatat aktivitas teks website.
- `app/Providers/AppServiceProvider.php`: Registrasi Observers & Auto-Migrate Engine Vercel.

---

## 💡 6. PANDUAN UNTUK SESI BERIKUTNYA
Jika di sesi mendatang ada pekerjaan baru:
1. **Cukup baca file `PROJECT_MASTER_LOG.md` ini terlebih dahulu** untuk memahami seluruh konteks tanpa perlu membaca ulang percakapan lama.
2. Setiap ada penambahan fitur baru atau perbaikan bug, **selalu perbarui file ini** agar ingatan proyek tetap terjaga!
