<x-filament-widgets::widget>
    <div wire:poll.15s class="studio-card relative overflow-hidden rounded-2xl p-6 transition-all duration-500 border">

        <!-- Top Header Flex Row -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-purple-500/15 border border-purple-500/30 text-purple-400 font-bold text-xl shadow-sm">
                    💾
                </div>
                <div>
                    <h3 class="studio-title text-base font-extrabold tracking-tight">Kapasitas Storage Studio</h3>
                    <p class="studio-desc text-xs">Supabase Cloud Storage Bucket • Public CDN</p>
                </div>
            </div>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-extrabold bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 shadow-sm self-start sm:self-auto">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Aman (24% Terpakai)
            </div>
        </div>

        <!-- Main Progress Card -->
        <div class="studio-subcard p-5 rounded-xl mb-4 border">
            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                <div class="flex items-baseline gap-2">
                    <span class="studio-title text-2xl font-black">1.2 GB</span>
                    <span class="studio-desc text-xs font-semibold">/ 5.0 GB Total Kapasitas</span>
                </div>
                <span class="px-3 py-1 rounded-full text-xs font-extrabold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                    30 Foto HD
                </span>
            </div>

            <!-- Progress Bar -->
            <div class="w-full h-4 rounded-full bg-gray-950 border border-gray-800 p-0.5 overflow-hidden shadow-inner">
                <div class="h-full rounded-full bg-gradient-to-r from-amber-400 via-emerald-400 to-cyan-400 shadow-[0_0_14px_rgba(16,185,129,0.6)] transition-all duration-1000"
                     style="width: 24%;"></div>
            </div>
        </div>

        <!-- Sub Info Footer -->
        <div class="flex flex-wrap items-center justify-between gap-2 text-xs studio-desc">
            <span>Bucket Public: <strong class="studio-title font-bold">porto</strong></span>
            <span>Status CDN: <strong class="text-emerald-400 font-bold">Aktif (Optimal)</strong></span>
        </div>
    </div>
</x-filament-widgets::widget>
