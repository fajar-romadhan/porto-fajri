<x-filament-widgets::widget>
    <div wire:poll.15s class="studio-card relative overflow-hidden rounded-2xl p-6 transition-all duration-500 border">

        <!-- Header -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-500/10 border border-indigo-500/30 text-indigo-600 dark:!text-indigo-400 font-bold text-xl shadow-[0_0_12px_rgba(99,102,241,0.2)]">
                    💾
                </div>
                <div>
                    <h3 class="studio-title text-base font-extrabold">Monitoring Kapasitas Foto</h3>
                    <p class="studio-desc text-xs">Supabase Storage Cloud Bucket • Public CDN</p>
                </div>
            </div>
            <div class="studio-subcard inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold">
                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                Aman (24%)
            </div>
        </div>

        <!-- Storage Progress Box -->
        <div class="studio-subcard p-4 rounded-xl mb-4">
            <div class="flex items-center justify-between text-xs font-bold mb-2">
                <span class="studio-title">1.2 GB Digunakan</span>
                <span class="studio-desc">Kapasitas 5.0 GB</span>
            </div>
            <!-- Progress Bar Barcode -->
            <div class="w-full h-3 rounded-full bg-slate-200 dark:!bg-gray-800 overflow-hidden p-0.5 border border-slate-300/60 dark:!border-gray-700">
                <div class="h-full rounded-full bg-gradient-to-r from-amber-500 via-indigo-500 to-emerald-500 shadow-md transition-all duration-1000" style="width: 24%;"></div>
            </div>
        </div>

        <!-- Sub Info Footer -->
        <div class="flex items-center justify-between text-xs font-medium studio-desc">
            <span>Bucket Public: <strong class="studio-title">porto</strong></span>
            <span>Foto HD: <strong class="studio-title">30 File</strong></span>
        </div>
    </div>
</x-filament-widgets::widget>
