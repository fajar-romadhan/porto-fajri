<x-filament-widgets::widget>
    <div wire:poll.15s class="studio-card relative overflow-hidden rounded-2xl p-6 transition-all duration-500 border">

        <!-- Header -->
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-500/10 border border-purple-500/30 text-purple-400 font-bold text-lg">
                    💾
                </div>
                <div>
                    <h3 class="studio-title text-sm font-extrabold tracking-tight">Kapasitas Storage Studio</h3>
                    <p class="studio-desc text-xs">Supabase Cloud Bucket</p>
                </div>
            </div>
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                24% Terpakai
            </div>
        </div>

        <!-- Metric Display & Progress Bar Section -->
        <div class="studio-subcard p-4 rounded-xl mb-4 border">
            <!-- Numbers Row -->
            <div class="flex items-baseline justify-between mb-3">
                <div class="flex items-baseline">
                    <span class="studio-title text-2xl font-black">1.2 GB</span>
                    <span class="studio-desc text-xs font-medium ml-1.5">/ 5.0 GB</span>
                </div>
                <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                    30 Foto HD
                </span>
            </div>

            <!-- Sleek Glowing Progress Bar -->
            <div class="w-full h-3 rounded-full bg-gray-900 border border-gray-800 overflow-hidden">
                <div class="h-full rounded-full bg-gradient-to-r from-amber-500 via-emerald-400 to-teal-400 shadow-[0_0_12px_rgba(16,185,129,0.35)] transition-all duration-1000"
                     style="width: 24%;"></div>
            </div>
        </div>

        <!-- Sub Info Footer -->
        <div class="flex items-center justify-between text-xs studio-desc">
            <span>Bucket: <strong class="studio-title font-semibold">porto</strong></span>
            <span>CDN: <strong class="text-emerald-400 font-semibold">Aktif (Optimal)</strong></span>
        </div>
    </div>
</x-filament-widgets::widget>
