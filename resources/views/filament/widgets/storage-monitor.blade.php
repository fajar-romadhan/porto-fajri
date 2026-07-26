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
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-700 dark:!text-emerald-300 border border-emerald-500/40 shadow-[0_0_12px_rgba(16,185,129,0.3)]">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                Aman (24%)
            </div>
        </div>

        <!-- Main Storage Gauge Box -->
        <div class="p-5 rounded-xl bg-slate-50/80 dark:!bg-gray-950/70 border border-slate-200/90 dark:!border-gray-800 shadow-inner mb-4">
            <!-- Label Row -->
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-2">
                    <span class="studio-title text-base font-black">1.2 GB Digunakan</span>
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-extrabold bg-amber-500/20 text-amber-600 dark:!text-amber-300 border border-amber-500/30">
                        30 Foto HD
                    </span>
                </div>
                <span class="studio-desc text-xs font-bold">Kapasitas 5.0 GB</span>
            </div>

            <!-- Vibrant Glowing Progress Bar -->
            <div class="relative w-full h-6 rounded-full bg-slate-200 dark:!bg-gray-900 p-1 border border-slate-300 dark:!border-gray-700 overflow-hidden shadow-inner">
                <!-- Glowing Bar Fill -->
                <div class="relative h-full rounded-full bg-gradient-to-r from-amber-400 via-emerald-400 to-cyan-400 shadow-[0_0_18px_rgba(16,185,129,0.6)] transition-all duration-1000 flex items-center justify-end pr-1"
                     style="width: 24%;">
                    <!-- Fast Shimmer Sweep Line -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-transparent via-white/50 to-transparent animate-fast-shimmer"></div>
                    <!-- Leading Pulsing White Node Dot -->
                    <div class="w-3 h-3 rounded-full bg-white shadow-[0_0_10px_#FFFFFF] animate-ping"></div>
                </div>
            </div>

            <!-- Mini Storage Allocation Horizontal Pills (Side-by-Side Flex) -->
            <div class="grid grid-cols-3 gap-2 mt-4 pt-3 border-t border-slate-200/70 dark:!border-gray-800">
                <div class="p-2 rounded-xl text-center bg-emerald-500/10 border border-emerald-500/20">
                    <span class="block text-[10px] studio-desc font-medium">Portofolio HD</span>
                    <span class="text-xs font-black text-emerald-600 dark:!text-emerald-400">0.95 GB</span>
                </div>
                <div class="p-2 rounded-xl text-center bg-cyan-500/10 border border-cyan-500/20">
                    <span class="block text-[10px] studio-desc font-medium">Thumbnails</span>
                    <span class="text-xs font-black text-cyan-600 dark:!text-cyan-400">0.25 GB</span>
                </div>
                <div class="p-2 rounded-xl text-center bg-amber-500/10 border border-amber-500/20">
                    <span class="block text-[10px] studio-desc font-medium">Sisa Tersedia</span>
                    <span class="text-xs font-black text-amber-600 dark:!text-amber-400">3.80 GB</span>
                </div>
            </div>
        </div>

        <!-- Sub Info Footer -->
        <div class="flex items-center justify-between text-xs studio-desc">
            <span>Public Bucket: <strong class="studio-title font-bold">porto</strong></span>
            <span>CDN Status: <strong class="text-emerald-600 dark:!text-emerald-400 font-bold">Aktif (99.9%)</strong></span>
        </div>
    </div>

    <style>
        @keyframes fastShimmerSweep {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(250%); }
        }
        .animate-fast-shimmer {
            animation: fastShimmerSweep 1.5s infinite linear;
        }
    </style>
</x-filament-widgets::widget>
