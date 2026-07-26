<x-filament-widgets::widget>
    <div style="background: linear-gradient(135deg, #0d0e15 0%, #161822 50%, #0d0e15 100%) !important; border: 1px solid rgba(212, 175, 55, 0.4) !important; box-shadow: 0 20px 50px -10px rgba(0,0,0,0.5), 0 0 30px rgba(212,175,55,0.15) !important;" class="relative overflow-hidden rounded-2xl p-6 sm:p-8 text-white transition-all duration-500 hover:border-amber-400/70 mb-2">
        <!-- Background Ambient Glow -->
        <div class="absolute -right-10 -top-10 h-48 w-48 rounded-full bg-amber-500/15 blur-3xl pointer-events-none"></div>
        <div class="absolute -left-10 -bottom-10 h-48 w-48 rounded-full bg-purple-500/15 blur-3xl pointer-events-none"></div>

        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div>
                <div style="background: rgba(212, 175, 55, 0.15) !important; border: 1px solid rgba(212, 175, 55, 0.4) !important; color: #D4AF37 !important;" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold tracking-wider uppercase mb-3 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    FAJRI Photography Studio Portal
                </div>
                <h1 style="color: #FFFFFF !important;" class="text-2xl sm:text-3xl font-extrabold tracking-tight drop-shadow-md">
                    Yo Fajri! 📸 Porto Kamu Siap Diperbarui.
                </h1>
                <p style="color: #E2E8F0 !important;" class="mt-2 text-sm max-w-xl leading-relaxed">
                    Kelola foto portofolio, atur kategori galeri, dan perbarui teks website kamu dengan mudah dari satu tempat.
                </p>
            </div>

            <!-- Quick Action Pills dengan 3D Hover Lift -->
            <div class="flex flex-wrap items-center gap-3">
                <a href="/kelola/photos/create" style="background: linear-gradient(135deg, #D4AF37 0%, #B89628 100%) !important; color: #000000 !important; box-shadow: 0 8px 20px rgba(212, 175, 55, 0.35) !important;" class="inline-flex items-center gap-2 px-4.5 py-2.5 rounded-xl font-extrabold text-xs transition-all transform hover:-translate-y-1 hover:scale-105 active:translate-y-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    Upload Foto
                </a>
                <a href="/kelola/categories/create" style="background: rgba(255, 255, 255, 0.1) !important; border: 1px solid rgba(255, 255, 255, 0.2) !important; color: #FFFFFF !important; backdrop-filter: blur(10px);" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-semibold transition-all transform hover:-translate-y-1 hover:bg-white/20 hover:scale-105 active:translate-y-0">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                    Tambah Kategori
                </a>
                <a href="/" target="_blank" style="background: rgba(255, 255, 255, 0.07) !important; border: 1px solid rgba(255, 255, 255, 0.15) !important; color: #E2E8F0 !important; backdrop-filter: blur(10px);" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-medium transition-all transform hover:-translate-y-1 hover:bg-white/15 hover:scale-105 active:translate-y-0">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Lihat Web Live
                </a>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
