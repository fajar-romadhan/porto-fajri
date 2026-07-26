<x-filament-widgets::widget>
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-gray-950 via-gray-900 to-black p-6 sm:p-8 border border-amber-500/20 shadow-2xl backdrop-blur-xl mb-2">
        <!-- Background Ambient Glow -->
        <div class="absolute -right-10 -top-10 h-48 w-48 rounded-full bg-amber-500/10 blur-3xl pointer-events-none"></div>
        <div class="absolute -left-10 -bottom-10 h-48 w-48 rounded-full bg-purple-500/10 blur-3xl pointer-events-none"></div>

        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-semibold tracking-wider uppercase mb-3">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    FAJRI Photography Portal
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    Yo Fajri! 📸 Porto Kamu Siap Diperbarui.
                </h1>
                <p class="mt-2 text-sm text-gray-300 max-w-xl">
                    Kelola foto portofolio, atur kategori galeri, dan perbarui teks website kamu dengan mudah dari satu tempat.
                </p>
            </div>

            <!-- Quick Action Pills -->
            <div class="flex flex-wrap items-center gap-3">
                <a href="/kelola/photos/create" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-gray-950 font-bold text-xs shadow-lg shadow-amber-500/20 transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Upload Foto
                </a>
                <a href="/kelola/categories/create" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-gray-800/90 hover:bg-gray-700 text-gray-200 border border-gray-700/80 text-xs font-semibold transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                    Tambah Kategori
                </a>
                <a href="/" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-gray-800/60 hover:bg-gray-700/90 text-gray-300 border border-gray-700/60 text-xs font-medium transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Lihat Web Live
                </a>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
