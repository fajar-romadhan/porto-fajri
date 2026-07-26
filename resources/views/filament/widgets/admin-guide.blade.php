<x-filament-widgets::widget>
    <div class="rounded-2xl p-6 transition-all duration-500 border
                bg-white dark:bg-[#12141D] 
                border-slate-200/90 dark:border-white/10 
                shadow-xl shadow-slate-200/40 dark:shadow-black/50">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl font-bold text-lg shadow-sm
                            bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400">
                    💡
                </div>
                <div>
                    <h3 class="text-base font-bold tracking-wide text-slate-900 dark:text-white">Panduan Cepat Studio</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Petunjuk praktis mengelola foto dan tampilan website Anda</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1: Kategori -->
            <div class="p-4 rounded-xl transition-all duration-300 group border
                        bg-slate-50/80 hover:bg-white dark:bg-gray-900/60 dark:hover:bg-gray-800/80
                        border-slate-200/70 hover:border-amber-400/60 dark:border-gray-800 dark:hover:border-amber-400/50">
                <div class="flex items-center gap-3 mb-2">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 text-xs font-bold">1</span>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">Kategori Foto</h4>
                </div>
                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                    Buat kategori lebih dulu di menu <strong>Kategori</strong> sebelum mengunggah foto portofolio.
                </p>
            </div>

            <!-- Card 2: Upload Foto -->
            <div class="p-4 rounded-xl transition-all duration-300 group border
                        bg-slate-50/80 hover:bg-white dark:bg-gray-900/60 dark:hover:bg-gray-800/80
                        border-slate-200/70 hover:border-amber-400/60 dark:border-gray-800 dark:hover:border-amber-400/50">
                <div class="flex items-center gap-3 mb-2">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-blue-500/15 text-blue-600 dark:text-blue-400 text-xs font-bold">2</span>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">Upload Karya</h4>
                </div>
                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                    Dukung foto <strong>4:6 Portrait</strong> &amp; <strong>6:4 / 16:9 Landscape</strong> tanpa terpotong paksa.
                </p>
            </div>

            <!-- Card 3: Edit Website -->
            <div class="p-4 rounded-xl transition-all duration-300 group border
                        bg-slate-50/80 hover:bg-white dark:bg-gray-900/60 dark:hover:bg-gray-800/80
                        border-slate-200/70 hover:border-amber-400/60 dark:border-gray-800 dark:hover:border-amber-400/50">
                <div class="flex items-center gap-3 mb-2">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-purple-500/15 text-purple-600 dark:text-purple-400 text-xs font-bold">3</span>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">Teks &amp; Banner</h4>
                </div>
                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                    Ubah teks About, Logo, dan foto Slide Hero di menu <strong>Teks &amp; Gambar Website</strong>.
                </p>
            </div>

            <!-- Card 4: Urutan -->
            <div class="p-4 rounded-xl transition-all duration-300 group border
                        bg-slate-50/80 hover:bg-white dark:bg-gray-900/60 dark:hover:bg-gray-800/80
                        border-slate-200/70 hover:border-amber-400/60 dark:border-gray-800 dark:hover:border-amber-400/50">
                <div class="flex items-center gap-3 mb-2">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-amber-500/15 text-amber-600 dark:text-amber-400 text-xs font-bold">4</span>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">Sistem Urutan</h4>
                </div>
                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                    Angka <strong>kecil (1, 2, 3)</strong> akan tampil paling awal/atas di galeri website.
                </p>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
