<x-filament-widgets::widget>
    <div class="rounded-2xl p-6 transition-all duration-500 border
                bg-white dark:bg-[#12141D] 
                border-slate-200/90 dark:border-white/10 
                shadow-xl shadow-slate-200/40 dark:shadow-black/50">

        <!-- Header -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-purple-500/10 border border-purple-500/30 text-purple-600 dark:text-purple-400 font-bold text-xl shadow-sm">
                    💾
                </div>
                <div>
                    <h3 class="text-base font-extrabold text-slate-900 dark:text-white">Supabase Storage</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Monitoring Kapasitas Foto</p>
                </div>
            </div>
            <span class="text-xs font-bold text-emerald-600 dark:text-emerald-400 bg-emerald-500/10 px-2.5 py-1 rounded-full border border-emerald-500/20">
                Aman (24%)
            </span>
        </div>

        <!-- Progress Bar -->
        <div class="mt-4">
            <div class="flex justify-between text-xs font-semibold mb-1.5">
                <span class="text-slate-700 dark:text-slate-300">1.2 GB Digunakan</span>
                <span class="text-slate-500 dark:text-slate-400">Kapasitas 5.0 GB</span>
            </div>
            <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-gray-800 overflow-hidden p-0.5 border border-slate-200 dark:border-gray-700">
                <div class="h-full rounded-full bg-gradient-to-r from-amber-500 to-emerald-500 transition-all duration-1000" style="width: 24%;"></div>
            </div>
        </div>

        <!-- Meta list -->
        <div class="mt-4 pt-3 border-t border-slate-100 dark:border-gray-800 flex justify-between text-xs text-slate-500 dark:text-slate-400">
            <span>Bucket Public: <strong>porto</strong></span>
            <span>Foto HD: <strong>30 File</strong></span>
        </div>
    </div>
</x-filament-widgets::widget>
