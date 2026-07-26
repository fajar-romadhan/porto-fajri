<x-filament-widgets::widget>
    <div class="studio-card relative overflow-hidden rounded-2xl p-6 transition-all duration-500 border">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl font-bold text-xl shadow-sm
                            bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:!text-amber-400">
                    ⚡
                </div>
                <div>
                    <h3 class="studio-title text-base font-extrabold tracking-wide">Panduan & Pintasan Cepat Studio</h3>
                    <p class="studio-desc text-xs">Klik kartu di bawah untuk membuka aksi cepat secara instan</p>
                </div>
            </div>
        </div>

        <!-- iOS Control Center Style 4 Interactive Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            
            <!-- Card 1: Kategori (Clickable) -->
            <a href="/kelola/categories/create" 
               class="studio-subcard ios-card block p-4.5 rounded-2xl border transition-all duration-300 group cursor-pointer
                      hover:shadow-lg hover:shadow-emerald-500/10">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-500/15 text-emerald-600 dark:!text-emerald-400 font-bold text-lg shadow-sm">
                        📁
                    </div>
                    <span class="text-xs font-bold text-slate-400 group-hover:text-emerald-500 transition-transform group-hover:translate-x-1">→</span>
                </div>
                <h4 class="studio-title text-xs font-bold uppercase tracking-wider group-hover:text-emerald-600 dark:group-hover:!text-emerald-400 transition-colors">
                    1. Buat Kategori
                </h4>
                <p class="studio-desc mt-1.5 text-xs leading-relaxed">
                    Buat kategori foto sebelum mengunggah karya portofolio.
                </p>
            </a>

            <!-- Card 2: Upload Foto (Clickable) -->
            <a href="/kelola/photos/create" 
               class="studio-subcard ios-card block p-4.5 rounded-2xl border transition-all duration-300 group cursor-pointer
                      hover:shadow-lg hover:shadow-blue-500/10">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/15 text-blue-600 dark:!text-blue-400 font-bold text-lg shadow-sm">
                        📸
                    </div>
                    <span class="text-xs font-bold text-slate-400 group-hover:text-blue-500 transition-transform group-hover:translate-x-1">→</span>
                </div>
                <h4 class="studio-title text-xs font-bold uppercase tracking-wider group-hover:text-blue-600 dark:group-hover:!text-blue-400 transition-colors">
                    2. Upload Karya
                </h4>
                <p class="studio-desc mt-1.5 text-xs leading-relaxed">
                    Dukung foto <strong>4:6 Portrait</strong> &amp; <strong>6:4 / 16:9 Landscape</strong> utuh.
                </p>
            </a>

            <!-- Card 3: Edit Website (Clickable) -->
            <a href="/kelola/contents" 
               class="studio-subcard ios-card block p-4.5 rounded-2xl border transition-all duration-300 group cursor-pointer
                      hover:shadow-lg hover:shadow-purple-500/10">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-500/15 text-purple-600 dark:!text-purple-400 font-bold text-lg shadow-sm">
                        ✍️
                    </div>
                    <span class="text-xs font-bold text-slate-400 group-hover:text-purple-500 transition-transform group-hover:translate-x-1">→</span>
                </div>
                <h4 class="studio-title text-xs font-bold uppercase tracking-wider group-hover:text-purple-600 dark:group-hover:!text-purple-400 transition-colors">
                    3. Edit Teks &amp; Banner
                </h4>
                <p class="studio-desc mt-1.5 text-xs leading-relaxed">
                    Ubah teks About, Logo, &amp; Slide Hero di menu <strong>Teks Website</strong>.
                </p>
            </a>

            <!-- Card 4: Sistem Urutan -->
            <div class="studio-subcard ios-card p-4.5 rounded-2xl border transition-all duration-300 group
                        hover:shadow-lg hover:shadow-amber-500/10">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-500/15 text-amber-600 dark:!text-amber-400 font-bold text-lg shadow-sm">
                        📌
                    </div>
                    <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full bg-amber-500/10 text-amber-600 dark:!text-amber-400">Tips</span>
                </div>
                <h4 class="studio-title text-xs font-bold uppercase tracking-wider group-hover:text-amber-600 dark:group-hover:!text-amber-400 transition-colors">
                    4. Sistem Urutan
                </h4>
                <p class="studio-desc mt-1.5 text-xs leading-relaxed">
                    Angka <strong>kecil (1, 2, 3)</strong> akan tampil paling awal/atas di galeri.
                </p>
            </div>

        </div>
    </div>
</x-filament-widgets::widget>
