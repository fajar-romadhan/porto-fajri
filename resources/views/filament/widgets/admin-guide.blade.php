<x-filament-widgets::widget>
    <div class="rounded-2xl bg-gray-950/90 border border-gray-800 p-6 shadow-2xl backdrop-blur-xl">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-500/10 text-amber-400 border border-amber-500/20 font-bold text-lg">
                    💡
                </div>
                <div>
                    <h3 class="text-base font-bold text-white tracking-wide">Panduan Cepat Studio</h3>
                    <p class="text-xs text-gray-400">Petunjuk praktis mengelola foto dan tampilan website Anda</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1: Kategori -->
            <div class="p-4 rounded-xl bg-gray-900/80 border border-gray-800 hover:border-amber-500/40 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-2">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400 text-xs font-bold">1</span>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider group-hover:text-amber-400 transition-colors">Kategori Foto</h4>
                </div>
                <p class="text-xs text-gray-300 leading-relaxed">
                    Buat kategori lebih dulu di menu <strong>Kategori</strong> sebelum mengunggah foto portofolio.
                </p>
            </div>

            <!-- Card 2: Upload Foto -->
            <div class="p-4 rounded-xl bg-gray-900/80 border border-gray-800 hover:border-amber-500/40 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-2">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-blue-500/20 text-blue-400 text-xs font-bold">2</span>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider group-hover:text-amber-400 transition-colors">Upload Karya</h4>
                </div>
                <p class="text-xs text-gray-300 leading-relaxed">
                    Dukung foto <strong>4:6 Portrait</strong> &amp; <strong>6:4 / 16:9 Landscape</strong> tanpa terpotong paksa.
                </p>
            </div>

            <!-- Card 3: Edit Website -->
            <div class="p-4 rounded-xl bg-gray-900/80 border border-gray-800 hover:border-amber-500/40 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-2">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-purple-500/20 text-purple-400 text-xs font-bold">3</span>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider group-hover:text-amber-400 transition-colors">Teks &amp; Banner</h4>
                </div>
                <p class="text-xs text-gray-300 leading-relaxed">
                    Ubah teks About, Logo, dan foto Slide Hero di menu <strong>Teks &amp; Gambar Website</strong>.
                </p>
            </div>

            <!-- Card 4: Urutan -->
            <div class="p-4 rounded-xl bg-gray-900/80 border border-gray-800 hover:border-amber-500/40 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-2">
                    <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-amber-500/20 text-amber-400 text-xs font-bold">4</span>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider group-hover:text-amber-400 transition-colors">Sistem Urutan</h4>
                </div>
                <p class="text-xs text-gray-300 leading-relaxed">
                    Angka <strong>kecil (1, 2, 3)</strong> akan tampil paling awal/atas di galeri website.
                </p>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
