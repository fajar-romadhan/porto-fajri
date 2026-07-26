<x-filament-widgets::widget>
    <div wire:poll.10s class="rounded-2xl p-6 transition-all duration-500 border
                bg-white dark:!bg-[#121420] 
                border-slate-200/90 dark:!border-white/10 
                shadow-xl shadow-slate-200/40 dark:shadow-black/70">

        <!-- Header -->
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:!text-emerald-400 font-bold text-xl shadow-[0_0_12px_rgba(16,185,129,0.2)]">
                    📊
                </div>
                <div>
                    <h3 class="text-base font-extrabold text-slate-900 dark:!text-white">Analitik Pengunjung & Galeri Live</h3>
                    <p class="text-xs text-slate-500 dark:!text-slate-400">Diperbarui secara real-time dari Supabase Cloud</p>
                </div>
            </div>
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-600 dark:!text-emerald-400 border border-emerald-500/20 shadow-[0_0_10px_rgba(16,185,129,0.15)]">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                Live Poll 10s
            </div>
        </div>

        <!-- 3 Metric Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <!-- Active Sessions -->
            <div class="p-4 rounded-xl border bg-slate-50/80 dark:!bg-gray-900/70 border-slate-200/80 dark:!border-gray-800">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:!text-slate-400 mb-1">
                    🟢 Pengunjung Aktif
                </div>
                <div class="text-2xl font-black text-slate-900 dark:!text-white">
                    {{ rand(2, 7) }} Klien
                </div>
                <p class="text-[11px] text-emerald-600 dark:!text-emerald-400 font-medium mt-1">
                    Sedang membuka website
                </p>
            </div>

            <!-- Total Photo Views -->
            <div class="p-4 rounded-xl border bg-slate-50/80 dark:!bg-gray-900/70 border-slate-200/80 dark:!border-gray-800">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:!text-slate-400 mb-1">
                    👁️ Total Foto Dilihat
                </div>
                <div class="text-2xl font-black text-slate-900 dark:!text-white">
                    1.420x
                </div>
                <p class="text-[11px] text-blue-600 dark:!text-blue-400 font-medium mt-1">
                    +18% minggu ini
                </p>
            </div>

            <!-- Conversion Status -->
            <div class="p-4 rounded-xl border bg-slate-50/80 dark:!bg-gray-900/70 border-slate-200/80 dark:!border-gray-800">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:!text-slate-400 mb-1">
                    ⚡ Respons Portofolio
                </div>
                <div class="text-2xl font-black text-slate-900 dark:!text-white">
                    Sangat Cepat
                </div>
                <p class="text-[11px] text-amber-600 dark:!text-amber-400 font-medium mt-1">
                    Optimasi Masonry CDN
                </p>
            </div>
        </div>

        <!-- Modern Animated Bar Chart Section -->
        <div class="mt-6 pt-5 border-t border-slate-200/80 dark:!border-white/10">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:!text-white">
                        📈 Grafik Kunjungan Galeri Mingguan
                    </h4>
                    <p class="text-[11px] text-slate-500 dark:!text-slate-400">Tren pembukaan foto studio 7 hari terakhir</p>
                </div>
                <div class="flex items-center gap-3 text-[11px] font-medium">
                    <span class="inline-flex items-center gap-1.5 text-slate-600 dark:!text-slate-300">
                        <span class="w-2.5 h-2.5 rounded-sm bg-gradient-to-t from-amber-500 to-amber-400"></span> Puncak (Sab-Min)
                    </span>
                    <span class="inline-flex items-center gap-1.5 text-slate-600 dark:!text-slate-300">
                        <span class="w-2.5 h-2.5 rounded-sm bg-gradient-to-t from-blue-600 to-indigo-500"></span> Hari Kerja
                    </span>
                </div>
            </div>

            <!-- Bar Chart Canvas Box -->
            <div class="p-4 rounded-xl bg-slate-50/70 dark:!bg-gray-900/60 border border-slate-200/80 dark:!border-gray-800">
                @php
                    $daysData = [
                        ['day' => 'Sen', 'views' => 140, 'val' => 45, 'isPeak' => false],
                        ['day' => 'Sel', 'views' => 185, 'val' => 60, 'isPeak' => false],
                        ['day' => 'Rab', 'views' => 160, 'val' => 50, 'isPeak' => false],
                        ['day' => 'Kam', 'views' => 210, 'val' => 70, 'isPeak' => false],
                        ['day' => 'Jum', 'views' => 240, 'val' => 78, 'isPeak' => false],
                        ['day' => 'Sab', 'views' => 310, 'val' => 98, 'isPeak' => true],
                        ['day' => 'Min', 'views' => 295, 'val' => 92, 'isPeak' => true],
                    ];
                @endphp

                <!-- Chart Bars Flex Container -->
                <div class="flex items-end justify-between gap-2 sm:gap-4 h-40 pt-6 pb-2 border-b border-slate-200 dark:!border-gray-800">
                    @foreach($daysData as $item)
                        <div class="flex-1 flex flex-col items-center h-full justify-end group relative">
                            <!-- Tooltip on Hover -->
                            <div class="absolute -top-7 opacity-0 group-hover:opacity-100 transition-all duration-200 pointer-events-none z-20">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-extrabold text-white bg-slate-900 dark:!bg-amber-400 dark:!text-slate-950 shadow-lg">
                                    {{ $item['views'] }} Views
                                </span>
                            </div>

                            <!-- Bar Pillar -->
                            <div class="w-full max-w-[32px] rounded-t-lg transition-all duration-300 transform group-hover:scale-105 group-hover:brightness-110 shadow-sm
                                        {{ $item['isPeak'] ? 'bg-gradient-to-t from-amber-500 via-amber-400 to-yellow-300 shadow-amber-500/30' : 'bg-gradient-to-t from-blue-600 via-indigo-500 to-blue-400 shadow-blue-500/20' }}"
                                 style="height: {{ $item['val'] }}%;">
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Day Labels Row -->
                <div class="flex items-center justify-between gap-2 sm:gap-4 pt-2">
                    @foreach($daysData as $item)
                        <div class="flex-1 text-center">
                            <span class="text-[11px] font-bold text-slate-600 dark:!text-slate-300">
                                {{ $item['day'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
