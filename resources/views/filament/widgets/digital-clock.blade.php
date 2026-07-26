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
                    <svg class="h-9 w-9 overflow-visible" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Clock Dial Body -->
                        <circle cx="12" cy="12" r="9" class="stroke-amber-600 dark:stroke-amber-400"></circle>
                        <!-- Center Pin -->
                        <circle cx="12" cy="12" r="1.2" fill="currentColor"></circle>
                        <!-- Hour Hand -->
                        <line x1="12" y1="12" x2="12" y2="7.5" stroke-width="2.5" class="clock-hour-hand"></line>
                        <!-- Minute Hand -->
                        <line x1="12" y1="12" x2="15.5" y2="12" stroke-width="2" class="clock-minute-hand"></line>
                        <!-- Rotating Second Hand -->
                        <line x1="12" y1="12" x2="12" y2="4.5" stroke="#EF4444" stroke-width="1.8" class="clock-second-hand"></line>
                    </svg>
                </div>

                <div>
                    <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold tracking-wider uppercase
                                bg-amber-500/10 border border-amber-500/20 text-amber-700 dark:text-amber-400 mb-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-ping"></span>
                        Live Digital Clock
                    </div>
                    <h3 id="digital-clock-date" class="text-base font-bold text-slate-900 dark:text-white tracking-wide">
                        {{ $initialDate }}
                    </h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400">📍 Palembang, Sumatera Selatan (WIB)</p>
                </div>
            </div>

            <!-- Right: Big Digital Clock Display -->
            <div class="flex items-center justify-center">
                <div class="px-6 py-3 rounded-2xl border bg-slate-50/90 dark:bg-gray-900/90 border-slate-200 dark:border-gray-800 shadow-inner flex items-baseline gap-2">
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
            transform-origin: 12px 12px !important;
            animation: spinClockHand 60s linear infinite !important;
        }
        .clock-minute-hand {
            transform-origin: 12px 12px !important;
            animation: spinClockHand 3600s linear infinite !important;
        }
        .clock-hour-hand {
            transform-origin: 12px 12px !important;
            animation: spinClockHand 43200s linear infinite !important;
        }
        @keyframes spinClockHand {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <script>
        (function startDigitalClock() {
            function updateClockDigits() {
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

            updateClockDigits();

            if (window.studioDigitalClockTimer) {
                clearInterval(window.studioDigitalClockTimer);
            }
            window.studioDigitalClockTimer = setInterval(updateClockDigits, 1000);

            document.addEventListener('livewire:navigated', updateClockDigits);
            document.addEventListener('DOMContentLoaded', updateClockDigits);
        })();
    </script>
</x-filament-widgets::widget>
