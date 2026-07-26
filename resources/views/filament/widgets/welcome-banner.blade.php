@php
    \Carbon\Carbon::setLocale('id');
    $initialClock = \Carbon\Carbon::now('Asia/Jakarta')->isoFormat('ddd, D MMM • HH:mm') . ' WIB';
@endphp

<x-filament-widgets::widget>
    <!-- Adaptive Card Container for Light Mode & Dark Mode -->
    <div class="relative overflow-hidden rounded-2xl p-6 sm:p-8 transition-all duration-500 mb-2 border
                bg-white dark:bg-[#12141D] 
                border-slate-200/90 dark:border-white/10 
                shadow-xl shadow-slate-200/40 dark:shadow-black/50">

        <!-- Ambient Glow Effects -->
        <div class="absolute -right-12 -top-12 h-56 w-56 rounded-full bg-amber-500/10 dark:bg-amber-500/15 blur-3xl pointer-events-none"></div>
        <div class="absolute -left-12 -bottom-12 h-56 w-56 rounded-full bg-purple-500/10 dark:bg-purple-500/15 blur-3xl pointer-events-none"></div>

        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div>
                <!-- Top Badges Row -->
                <div class="flex flex-wrap items-center gap-2 mb-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wider uppercase
                                bg-amber-500/10 border border-amber-500/30 text-amber-700 dark:text-amber-400">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400 animate-pulse"></span>
                        FAJRI Studio Portal
                    </div>

                    <!-- Cloud Connection Status -->
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium
                                bg-emerald-500/10 border border-emerald-500/20 text-emerald-700 dark:text-emerald-400">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        Cloud Connected • Vercel Active
                    </div>

                    <!-- Real-Time Clock Badge -->
                    <div id="live-studio-clock" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium
                                bg-slate-100 dark:bg-gray-800/80 border border-slate-200 dark:border-gray-700 text-slate-600 dark:text-gray-300">
                        🗓️ {{ $initialClock }}
                    </div>
                </div>

                <!-- Main Greeting Title -->
                <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                    Yo Fajri! 📸 Porto Kamu Siap Diperbarui.
                </h1>
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300 max-w-xl leading-relaxed">
                    Kelola foto portofolio, atur kategori galeri, dan perbarui teks website kamu dengan mudah dari satu tempat.
                </p>
            </div>

            <!-- Linear-Style Action Pills -->
            <div class="flex flex-wrap items-center gap-3">
                <!-- Primary Action -->
                <a href="/kelola/photos/create" 
                   class="inline-flex items-center gap-2 px-4.5 py-2.5 rounded-xl font-bold text-xs shadow-md transition-all transform hover:-translate-y-0.5 active:scale-95
                          bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 
                          text-gray-950 shadow-amber-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    Upload Foto
                </a>

                <!-- Secondary Action -->
                <a href="/kelola/categories/create" 
                   class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-semibold transition-all transform hover:-translate-y-0.5 active:scale-95
                          bg-slate-100 hover:bg-slate-200 dark:bg-gray-800/90 dark:hover:bg-gray-700 
                          text-slate-800 dark:text-gray-200 border border-slate-200/80 dark:border-gray-700">
                    <svg class="w-4 h-4 text-amber-500 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                    Tambah Kategori
                </a>

                <!-- Live Website Outer Link -->
                <a href="/" target="_blank" 
                   class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-medium transition-all transform hover:-translate-y-0.5 active:scale-95
                          bg-slate-50 hover:bg-slate-100 dark:bg-gray-800/50 dark:hover:bg-gray-700/80 
                          text-slate-700 dark:text-slate-300 border border-slate-200/60 dark:border-gray-700/60">
                    <svg class="w-4 h-4 text-emerald-500 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Lihat Web Live
                </a>
            </div>
        </div>
    </div>

    <!-- Live Clock JavaScript Script -->
    <script>
        (function initClock() {
            function render() {
                const clockEl = document.getElementById('live-studio-clock');
                if (!clockEl) return;
                const now = new Date();
                const options = { weekday: 'short', day: 'numeric', month: 'short' };
                const dateStr = now.toLocaleDateString('id-ID', options);
                const timeStr = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
                clockEl.innerHTML = `🗓️ ${dateStr} • ${timeStr} WIB`;
            }
            render();
            if (!window.studioClockInterval) {
                window.studioClockInterval = setInterval(render, 1000);
            }
            document.addEventListener('livewire:navigated', render);
            document.addEventListener('DOMContentLoaded', render);
        })();
    </script>
</x-filament-widgets::widget>
