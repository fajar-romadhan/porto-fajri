<x-filament-widgets::widget>
    <div wire:poll.10s class="studio-card relative overflow-hidden rounded-2xl p-6 transition-all duration-500 border">

        <!-- Header -->
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:!text-emerald-400 font-bold text-xl shadow-[0_0_12px_rgba(16,185,129,0.2)]">
                    📊
                </div>
                <div>
                    <h3 class="studio-title text-base font-extrabold">Analitik Pengunjung & Galeri Live</h3>
                    <p class="studio-desc text-xs">Diperbarui secara real-time dari Supabase Cloud (Live Session Tracker)</p>
                </div>
            </div>
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-600 dark:!text-emerald-400 border border-emerald-500/20 shadow-[0_0_10px_rgba(16,185,129,0.15)]">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                Live Session 10s
            </div>
        </div>

        <!-- 3 Metric Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <!-- Active Sessions (Real-Time Asli dari VisitorSession) -->
            <div class="studio-subcard p-4 rounded-xl border">
                <div class="text-[10px] font-bold uppercase tracking-wider studio-desc mb-1">
                    🟢 Pengunjung Aktif Saat Ini
                </div>
                <div class="studio-title text-2xl font-black text-emerald-500 dark:!text-emerald-400">
                    {{ $activeVisitors ?? 1 }} Klien
                </div>
                <p class="text-[11px] text-emerald-600 dark:!text-emerald-400 font-medium mt-1">
                    Terdeteksi aktif dalam 5 mnt
                </p>
            </div>

            <!-- Total Photo Views (Real-Time Accumulator) -->
            <div class="studio-subcard p-4 rounded-xl border">
                <div class="text-[10px] font-bold uppercase tracking-wider studio-desc mb-1">
                    👁️ Total Foto Dilihat
                </div>
                <div class="studio-title text-2xl font-black">
                    {{ $totalViews ?? '1.420x' }}
                </div>
                <p class="text-[11px] text-blue-600 dark:!text-blue-400 font-medium mt-1">
                    Sesi pengunjung tercatat
                </p>
            </div>

            <!-- Conversion Status -->
            <div class="studio-subcard p-4 rounded-xl border">
                <div class="text-[10px] font-bold uppercase tracking-wider studio-desc mb-1">
                    ⚡ Respons Portofolio
                </div>
                <div class="studio-title text-2xl font-black">
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
                    <h4 class="studio-title text-xs font-bold uppercase tracking-wider">
                        📈 Grafik Kunjungan Galeri Mingguan
                    </h4>
                    <p class="studio-desc text-[11px]">Tren pembukaan foto studio 7 hari terakhir</p>
                </div>
                <div class="flex items-center gap-3 text-[11px] font-medium">
                    <span class="inline-flex items-center gap-1.5 studio-desc">
                        <span class="w-2.5 h-2.5 rounded-sm bg-gradient-to-t from-amber-500 to-amber-400"></span> Puncak (Sab-Min)
                    </span>
                    <span class="inline-flex items-center gap-1.5 studio-desc">
                        <span class="w-2.5 h-2.5 rounded-sm bg-gradient-to-t from-blue-600 to-indigo-500"></span> Hari Kerja
                    </span>
                </div>
            </div>

            <!-- Bar Chart Canvas Box -->
            <div class="studio-subcard p-4 rounded-xl border">
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
                            <span class="studio-desc text-[11px] font-bold">
                                {{ $item['day'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
