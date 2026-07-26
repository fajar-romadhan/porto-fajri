@php
    \Carbon\Carbon::setLocale('id');
    $initialDate = \Carbon\Carbon::now('Asia/Jakarta')->isoFormat('dddd, D MMMM YYYY');
    $initialTime = \Carbon\Carbon::now('Asia/Jakarta')->format('H:i:s');
@endphp

<x-filament-widgets::widget>
    <div class="relative overflow-hidden rounded-2xl p-6 sm:p-8 transition-all duration-500 mb-2 border
                bg-white dark:bg-[#12141D] 
                border-slate-200/90 dark:border-white/10 
                shadow-xl shadow-slate-200/40 dark:shadow-black/50">

        <!-- Background Ambient Glow -->
        <div class="absolute -right-10 -top-10 h-48 w-48 rounded-full bg-amber-500/10 dark:bg-amber-500/15 blur-3xl pointer-events-none"></div>
        <div class="absolute -left-10 -bottom-10 h-48 w-48 rounded-full bg-blue-500/10 dark:bg-blue-500/15 blur-3xl pointer-events-none"></div>

        <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
            
            <!-- Left: Animated Clock Icon & Title -->
            <div class="flex items-center gap-4">
                <!-- Animated SVG Analog Clock Icon -->
                <div class="relative flex h-14 w-14 items-center justify-center rounded-2xl 
                            bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 shadow-md">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Clock Dial Body -->
                        <circle cx="12" cy="12" r="9"></circle>
                        <!-- Center Pin -->
                        <circle cx="12" cy="12" r="1" fill="currentColor"></circle>
                        <!-- Hour Hand -->
                        <line x1="12" y1="12" x2="12" y2="7" stroke-width="2.2" class="clock-hour-hand" style="transform-origin: 12px 12px;"></line>
                        <!-- Minute Hand -->
                        <line x1="12" y1="12" x2="16" y2="12" stroke-width="1.8" class="clock-minute-hand" style="transform-origin: 12px 12px;"></line>
                        <!-- Rotating Second Hand -->
                        <line x1="12" y1="12" x2="12" y2="5" stroke="#F59E0B" stroke-width="1.5" class="clock-second-hand" style="transform-origin: 12px 12px;"></line>
                    </svg>
                </div>

                <div>
                    <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold tracking-wider uppercase
                                bg-amber-500/10 border border-amber-500/20 text-amber-700 dark:text-amber-400 mb-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-ping"></span>
                        Real-Time Studio Clock
                    </div>
                    <h3 id="digital-clock-date" class="text-base font-bold text-slate-900 dark:text-white tracking-wide">
                        {{ $initialDate }}
                    </h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Asia/Jakarta (WIB) Timezone</p>
                </div>
            </div>

            <!-- Right: Big Digital Clock Display -->
            <div class="flex items-center justify-center">
                <div class="px-6 py-3 rounded-2xl border bg-slate-50/80 dark:bg-gray-900/80 border-slate-200 dark:border-gray-800 shadow-inner flex items-baseline gap-2">
                    <span id="digital-clock-digits" class="font-mono text-3xl sm:text-4xl font-extrabold tracking-widest text-slate-900 dark:text-amber-400 drop-shadow">
                        {{ $initialTime }}
                    </span>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-gray-400">
                        WIB
                    </span>
                </div>
            </div>

        </div>
    </div>

    <!-- Clock Animation & Ticker Script -->
    <style>
        .clock-second-hand {
            animation: spinSecondHand 60s linear infinite;
        }
        .clock-minute-hand {
            animation: spinSecondHand 3600s linear infinite;
        }
        @keyframes spinSecondHand {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>

    <script>
        (function initDigitalClock() {
            function tick() {
                const dateEl = document.getElementById('digital-clock-date');
                const timeEl = document.getElementById('digital-clock-digits');
                if (!timeEl) return;

                const now = new Date();
                const options = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
                if (dateEl) dateEl.innerText = now.toLocaleDateString('id-ID', options);

                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                timeEl.innerText = `${hours}:${minutes}:${seconds}`;
            }

            tick();
            if (!window.studioDigitalClockTimer) {
                window.studioDigitalClockTimer = setInterval(tick, 1000);
            }
            document.addEventListener('livewire:navigated', tick);
            document.addEventListener('DOMContentLoaded', tick);
        })();
    </script>
</x-filament-widgets::widget>
