<x-filament-widgets::widget>
    <div wire:poll.15s class="studio-card relative overflow-hidden rounded-2xl p-5 sm:p-6 transition-all duration-500 border">

        <!-- Header -->
        <div class="flex flex-wrap items-center justify-between gap-2 mb-4">
            <div class="flex items-center gap-2.5 min-w-0">
                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 font-bold text-base shadow-sm">
                    💾
                </div>
                <div class="min-w-0">
                    <h3 class="studio-title text-xs font-extrabold tracking-tight truncate">Kapasitas Storage</h3>
                    <p class="studio-desc text-[10px] truncate">Supabase Cloud Bucket</p>
                </div>
            </div>
            <div class="shrink-0 inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 shadow-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                24% Terpakai
            </div>
        </div>

        <!-- Metric Display & Progress Bar Section -->
        <div class="studio-subcard p-3.5 rounded-xl mb-4 border">
            <!-- Row 1: Big Number & Badge -->
            <div class="flex items-center justify-between gap-2 mb-1">
                <span class="studio-title text-lg font-black tracking-tight">1.2 GB</span>
                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30 shrink-0">
                    30 Foto HD
                </span>
            </div>

            <!-- Row 2: Total Capacity Subtitle -->
            <div class="studio-desc text-[11px] font-medium mb-2.5">
                Total Kapasitas: 5.0 GB
            </div>

            <!-- Row 3: Progress Bar with Filled Amber-Emerald Gradient Bar -->
            <div class="w-full h-3 rounded-full bg-gray-800/90 border border-gray-700/80 p-0.5 overflow-hidden shadow-inner">
                <div class="h-full rounded-full bg-gradient-to-r from-amber-400 via-emerald-400 to-cyan-400 shadow-[0_0_10px_rgba(16,185,129,0.6)] transition-all duration-1000"
                     style="width: 24%; min-width: 24%;"></div>
            </div>
        </div>

        <!-- Sub Info Footer -->
        <div class="flex items-center justify-between text-[11px] studio-desc">
            <span>Bucket: <strong class="studio-title font-semibold">porto</strong></span>
            <span>CDN: <strong class="text-emerald-400 font-bold">Aktif</strong></span>
        </div>
    </div>
</x-filament-widgets::widget>
