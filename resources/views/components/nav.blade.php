@empty($funnel)
    <a href="https://smousss.com" target="_blank "class="bg-gradient-to-r from-gray-900 dark:from-gray-800/50 to-gray-700 dark:to-gray-700/50 block">
        <div class="container flex items-center justify-between gap-4 leading-tight py-4 text-sm text-white">
            <div class="text-gray-200">
                <div>
                    <strong class="font-medium">Discover the best AI-powered assistant for Laravel developers.</strong>
                </div>

                <div class="flex items-center gap-[.35rem] mt-2 text-blue-400">
                    <span>Try for free</span>
                    <x-heroicon-o-arrow-right class="w-3 h-3" />
                </div>
            </div>

            <img
                loading="lazy"
                src="{{ Vite::asset('resources/img/smousss.png') }}"
                width="64"
                height="64"
                alt="Smousss"
                class="flex-shrink-0 rounded-full"
            />
        </div>
    </a>
@endempty

<div {{ $attributes->merge(['class' => 'container flex items-center justify-between'])}}>
    <a
        href="{{ route('home') }}"
        class="flex sm:flex-shrink-0 items-center gap-3"
        @click="window.fathom?.trackGoal('XAQUA2K4', 0)"
    >
        <x-icon-logo class="fill-current flex-shrink-0 text-black dark:text-white w-8 h-8 md:w-10 md:h-10" />

        <span class="leading-tight sr-only md:not-sr-only text-sm">
            <span class="block font-medium text-black dark:text-white">Benjamin Crozat</span>
            <span class="block opacity-75">The art of crafting web applications</span>
        </span>
    </a>

    @empty($funnel)
        <button class="flex items-center gap-2 group hover:text-indigo-400 transition-colors" @click="searching = true; window.fathom?.trackGoal('NV4ZNM3W', 0)">
            <x-heroicon-s-magnifying-glass class="-translate-y-[.5px] sm:-translate-y-0 flex-shrink-0 w-4 h-4" />

            Search

            <span class="border dark:border-gray-800 inline-block px-2 py-[.35rem] rounded scale-90 !text-gray-600 dark:!text-gray-300 text-xs sm:translate-y-px uppercase">
                ⌘K
            </span>
        </button>
    @endempty
</div>
