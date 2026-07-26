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
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wider uppercase
                                bg-amber-500/10 border border-amber-500/30 text-amber-700 dark:!text-amber-400">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400 animate-ping"></span>
                        FAJRI Studio Portal
                    </div>

                    <!-- Cloud Connection Status -->
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium
                                bg-emerald-500/10 border border-emerald-500/20 text-emerald-700 dark:!text-emerald-400">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        Cloud Connected • Vercel Active
                    </div>
                </div>

                <!-- Main Greeting Title -->
                <h1 class="studio-title text-2xl sm:text-3xl font-extrabold tracking-tight">
                    Yo Fajri! 📸 Porto Kamu Siap Diperbarui.
                </h1>
                <p class="studio-desc mt-2 text-sm max-w-xl leading-relaxed">
                    Kelola foto portofolio, atur kategori galeri, dan perbarui teks website kamu dengan mudah dari satu tempat.
                </p>
            </div>

            <!-- Apple / Linear Minimalist Action Buttons Bar -->
            <div class="flex flex-wrap items-center gap-3">
                <!-- Primary Action: Gold/Amber Glass Button -->
                <a href="/kelola/photos/create" 
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl font-bold text-xs transition-all duration-300
                          bg-gradient-to-r from-amber-500 via-amber-600 to-yellow-500 hover:from-amber-400 hover:to-amber-500
                          text-gray-950 shadow-md hover:-translate-y-0.5 active:scale-95">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    <span>Upload Foto</span>
                </a>

                <!-- Secondary Action: Clean Slate / Dark Glass Button -->
                <a href="/kelola/categories/create" 
                   class="studio-subcard inline-flex items-center gap-2 px-4.5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-300
                          hover:-translate-y-0.5 active:scale-95">
                    <svg class="w-4 h-4 text-amber-500 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                    <span>Tambah Kategori</span>
                </a>

                <!-- Tertiary Action: Glass Outline Link -->
                <a href="/" target="_blank" 
                   class="studio-subcard inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-medium transition-all duration-300
                          hover:-translate-y-0.5 active:scale-95">
                    <svg class="w-4 h-4 text-emerald-500 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    <span>Lihat Web Live</span>
                </a>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
