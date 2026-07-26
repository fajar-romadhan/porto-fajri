<x-filament-widgets::widget>
    <!-- Studio Custom Card Container -->
    <div class="studio-card relative overflow-hidden rounded-2xl p-6 sm:p-8 transition-all duration-500 mb-2">

        <!-- Ambient Mesh Aurora Glow Effects -->
        <div class="absolute -right-12 -top-12 h-64 w-64 rounded-full bg-gradient-to-br from-amber-500/20 via-orange-500/15 to-purple-500/20 blur-3xl pointer-events-none animate-pulse"></div>
        <div class="absolute -left-12 -bottom-12 h-64 w-64 rounded-full bg-gradient-to-tr from-emerald-500/20 via-teal-500/15 to-cyan-500/20 blur-3xl pointer-events-none animate-pulse"></div>

        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div>
                <!-- Top Badges Row -->
                <div class="flex flex-wrap items-center gap-2 mb-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold tracking-wider uppercase
                                bg-amber-500/20 border border-amber-500/40 text-amber-700 dark:!text-amber-300 shadow-[0_0_14px_rgba(245,158,11,0.35)]">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400 animate-ping"></span>
                        FAJRI Studio Portal
                    </div>

                    <!-- Cloud Connection Status -->
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold
                                bg-emerald-500/20 border border-emerald-500/40 text-emerald-700 dark:!text-emerald-300 shadow-[0_0_14px_rgba(16,185,129,0.35)]">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        Cloud Connected • Vercel Active
                    </div>
                </div>

                <!-- Main Greeting Title -->
                <h1 class="studio-title text-2xl sm:text-3xl font-extrabold tracking-tight dark:cyber-metallic-text">
                    Yo Fajri! 📸 Porto Kamu Siap Diperbarui.
                </h1>
                <p class="studio-desc mt-2 text-sm max-w-xl leading-relaxed">
                    Kelola foto portofolio, atur kategori galeri, dan perbarui teks website kamu dengan mudah dari satu tempat.
                </p>
            </div>

            <!-- Apple / Linear High-Vibrancy Action Buttons Bar -->
            <div class="flex flex-wrap items-center gap-3">
                <!-- Primary Action: Vibrant Gold/Amber Glowing Button -->
                <a href="/kelola/photos/create" 
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl font-black text-xs transition-all duration-300
                          bg-gradient-to-r from-amber-400 via-amber-500 to-yellow-400 hover:from-amber-300 hover:to-amber-400
                          !text-slate-950 shadow-[0_0_20px_rgba(245,158,11,0.45)] hover:shadow-[0_0_28px_rgba(245,158,11,0.6)]
                          hover:-translate-y-0.5 active:scale-95">
                    <svg class="w-4 h-4 text-slate-950 stroke-[3]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    <span>Upload Foto</span>
                </a>

                <!-- Secondary Action: Neon Indigo Glass Button -->
                <a href="/kelola/categories/create" 
                   class="inline-flex items-center gap-2 px-4.5 py-2.5 rounded-xl text-xs font-bold transition-all duration-300
                          bg-indigo-500/15 hover:bg-indigo-500/25 dark:!bg-indigo-500/20 dark:hover:!bg-indigo-500/35
                          !text-indigo-600 dark:!text-indigo-300 border border-indigo-500/40 dark:!border-indigo-500/50
                          shadow-[0_0_15px_rgba(99,102,241,0.2)] hover:shadow-[0_0_22px_rgba(99,102,241,0.35)]
                          hover:-translate-y-0.5 active:scale-95">
                    <svg class="w-4 h-4 text-indigo-500 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                    <span>Tambah Kategori</span>
                </a>

                <!-- Tertiary Action: Electric Emerald Glass Button -->
                <a href="/" target="_blank" 
                   class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-bold transition-all duration-300
                          bg-emerald-500/15 hover:bg-emerald-500/25 dark:!bg-emerald-500/20 dark:hover:!bg-emerald-500/35
                          !text-emerald-600 dark:!text-emerald-300 border border-emerald-500/40 dark:!border-emerald-500/50
                          shadow-[0_0_15px_rgba(16,185,129,0.2)] hover:shadow-[0_0_22px_rgba(16,185,129,0.35)]
                          hover:-translate-y-0.5 active:scale-95">
                    <svg class="w-4 h-4 text-emerald-500 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    <span>Lihat Web Live</span>
                </a>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
