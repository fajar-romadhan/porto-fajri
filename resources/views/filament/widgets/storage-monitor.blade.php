<x-filament-widgets::widget>
    <div wire:poll.15s class="studio-card relative overflow-hidden rounded-2xl p-6 transition-all duration-500 border">

        <!-- Header -->
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-500/15 border border-indigo-500/30 text-indigo-600 dark:!text-indigo-400 font-bold text-xl shadow-[0_0_12px_rgba(99,102,241,0.25)]">
                    💾
                </div>
                <div>
                    <h3 class="studio-title text-base font-extrabold">Monitoring Kapasitas Foto</h3>
                    <p class="studio-desc text-xs">Supabase Storage Cloud Bucket • Public CDN</p>
                </div>
            </div>
            <div class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-black bg-emerald-500/20 text-emerald-700 dark:!text-emerald-300 border border-emerald-500/40 shadow-[0_0_12px_rgba(16,185,129,0.3)]">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                Aman • 24% Digunakan
            </div>
        </div>

        <!-- High-Tech Storage Progress Box -->
        <div class="studio-subcard p-4.5 rounded-xl mb-4 border relative overflow-hidden">
            <div class="flex items-center justify-between text-xs font-extrabold mb-3">
                <div class="flex items-center gap-2">
                    <span class="studio-title text-sm">1.2 GB Digunakan</span>
                    <span class="px-2 py-0.5 rounded text-[10px] font-extrabold bg-amber-500/20 text-amber-600 dark:!text-amber-300 border border-amber-500/30">
                        30 Foto HD
                    </span>
                </div>
                <span class="studio-desc text-xs font-semibold">Total 5.0 GB</span>
            </div>

            <!-- Glowing Progress Track -->
            <div class="relative w-full h-5 rounded-full bg-slate-200/90 dark:!bg-gray-950 p-1 border border-slate-300/80 dark:!border-gray-700/80 shadow-inner overflow-hidden">
                <!-- Filled Animated Bar -->
                <div class="relative h-full rounded-full bg-gradient-to-r from-amber-500 via-emerald-400 to-cyan-400 shadow-[0_0_15px_rgba(16,185,129,0.5)] transition-all duration-1000 flex items-center justify-end pr-1"
                     style="width: 24%;">
                    <!-- Shimmer Sweep Line -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-transparent via-white/40 to-transparent animate-shimmer"></div>
                    <!-- Leading Neon Pulse Node -->
                    <div class="w-2.5 h-2.5 rounded-full bg-white shadow-[0_0_8px_#FFFFFF] animate-pulse"></div>
                </div>
            </div>

            <!-- Mini Storage Allocation Badges -->
            <div class="grid grid-cols-3 gap-2 mt-3.5 pt-3 border-t border-slate-200/60 dark:!border-gray-800">
                <div class="text-center p-2 rounded-lg bg-emerald-500/10 border border-emerald-500/20">
                    <span class="block text-[10px] studio-desc">Portofolio HD</span>
                    <span class="text-xs font-extrabold text-emerald-600 dark:!text-emerald-400">0.95 GB</span>
                </div>
                <div class="text-center p-2 rounded-lg bg-cyan-500/10 border border-cyan-500/20">
                    <span class="block text-[10px] studio-desc">Thumbnails</span>
                    <span class="text-xs font-extrabold text-cyan-600 dark:!text-cyan-400">0.25 GB</span>
                </div>
                <div class="text-center p-2 rounded-lg bg-amber-500/10 border border-amber-500/20">
                    <span class="block text-[10px] studio-desc">Tersedia</span>
                    <span class="text-xs font-extrabold text-amber-600 dark:!text-amber-400">3.80 GB</span>
                </div>
            </div>
        </div>

        <!-- Sub Info Footer -->
        <div class="flex items-center justify-between text-xs font-medium studio-desc">
            <span>Public Bucket: <strong class="studio-title font-bold">porto</strong></span>
            <span>CDN Response: <strong class="text-emerald-600 dark:!text-emerald-400 font-bold">Optimal (99.9%)</strong></span>
        </div>
    </div>

    <style>
        @keyframes shimmerSweep {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(200%); }
        }
        .animate-shimmer {
            animation: shimmerSweep 2.5s infinite linear;
        }
    </style>
</x-filament-widgets::widget>
