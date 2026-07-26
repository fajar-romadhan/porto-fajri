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
                </div>

                <!-- Main Greeting Title -->
                <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                    Yo Fajri! 📸 Porto Kamu Siap Diperbarui.
                </h1>
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300 max-w-xl leading-relaxed">
                    Kelola foto portofolio, atur kategori galeri, dan perbarui teks website kamu dengan mudah dari satu tempat.
                </p>
            </div>

            <!-- iOS App Icon Style Action Buttons -->
            <div class="flex flex-wrap items-center gap-3.5">
                <!-- iOS Icon Tile 1: Upload Foto -->
                <a href="/kelola/photos/create" 
                   class="ios-button group flex items-center gap-3 px-4.5 py-3 rounded-2xl transition-all duration-300
                          bg-gradient-to-br from-amber-500 via-amber-600 to-yellow-600 
                          hover:from-amber-400 hover:to-amber-500
                          text-slate-950 font-extrabold text-xs shadow-lg shadow-amber-500/25 
                          border border-amber-300/40 active:scale-95">
                    <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-950/15 border border-slate-950/10 shadow-inner group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <span>Upload Foto</span>
                </a>

                <!-- iOS Icon Tile 2: Tambah Kategori -->
                <a href="/kelola/categories/create" 
                   class="ios-button group flex items-center gap-3 px-4.5 py-3 rounded-2xl transition-all duration-300 border
                          bg-slate-100 hover:bg-slate-200/90 dark:bg-gray-800/90 dark:hover:bg-gray-700
                          border-slate-200/90 dark:border-gray-700
                          text-slate-800 dark:text-gray-100 font-bold text-xs shadow-md shadow-slate-200/50 dark:shadow-none active:scale-95">
                    <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-amber-500/15 text-amber-600 dark:text-amber-400 border border-amber-500/20 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                    </div>
                    <span>Tambah Kategori</span>
                </a>

                <!-- iOS Icon Tile 3: Lihat Web Live -->
                <a href="/" target="_blank" 
                   class="ios-button group flex items-center gap-3 px-4.5 py-3 rounded-2xl transition-all duration-300 border
                          bg-slate-50 hover:bg-slate-100 dark:bg-gray-800/50 dark:hover:bg-gray-700/80
                          border-slate-200/70 dark:border-gray-700/60
                          text-slate-700 dark:text-slate-200 font-semibold text-xs shadow-sm active:scale-95">
                    <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </div>
                    <span>Lihat Web Live</span>
                </a>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
