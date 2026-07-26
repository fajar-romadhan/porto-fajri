<x-filament-widgets::widget>
    <div wire:poll.15s class="studio-card relative overflow-hidden rounded-2xl p-6 transition-all duration-500 border">

        <!-- Header -->
        <div class="flex items-center justify-between gap-2 mb-5">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 font-bold text-lg shadow-sm">
                    💾
                </div>
                <div class="min-w-0">
                    <h3 class="studio-title text-sm font-extrabold tracking-tight truncate">Kapasitas Storage</h3>
                    <p class="studio-desc text-[11px] truncate">Supabase Cloud Bucket</p>
                </div>
            </div>
            <div class="shrink-0 inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                24% Terpakai
            </div>
        </div>

        <!-- Metric Display & Progress Bar Section -->
        <div class="studio-subcard p-4 rounded-xl mb-4 border">
            <!-- Row 1: Big Number & Badge -->
            <div class="flex items-center justify-between gap-2 mb-1.5">
                <span class="studio-title text-xl font-black tracking-tight">1.2 GB</span>
                <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30 shrink-0">
                    30 Foto HD
                </span>
            </div>

            <!-- Row 2: Total Capacity Subtitle -->
            <div class="studio-desc text-xs font-semibold mb-3">
                Total Kapasitas: 5.0 GB
            </div>

            <!-- Row 3: Progress Bar with Filled Amber-Emerald Gradient Bar -->
            <div class="w-full h-3.5 rounded-full bg-gray-950 border border-gray-800 p-0.5 overflow-hidden shadow-inner">
                <div class="h-full rounded-full bg-gradient-to-r from-amber-400 via-emerald-400 to-cyan-400 shadow-[0_0_12px_rgba(16,185,129,0.5)] transition-all duration-1000"
                     style="width: 24%;"></div>
            </div>
        </div>

        <!-- Sub Info Footer -->
        <div class="flex items-center justify-between text-xs studio-desc">
            <span>Bucket: <strong class="studio-title font-semibold">porto</strong></span>
            <span>CDN: <strong class="text-emerald-400 font-bold">Aktif</strong></span>
        </div>
    </div>
</x-filament-widgets::widget>
