<header class="fixed top-0 left-0 right-0 z-50 bg-gray-950/90 backdrop-blur-xl border-b border-white/10">
    <!-- Folosim items-center și justify-center pentru a aduna totul la un loc, pe mijlocul ecranului -->
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-center gap-6">

        <!-- Logo-ul stă în stânga meniului, dar adus spre centru -->
        <div class="flex shrink-0 flex-col items-center">
            <div class="flex items-center gap-1">
                <a href="{{ url('/') }}" class="text-2xl font-black tracking-tighter text-white">
                    Coach<span class="text-orange-500">Codoiu</span>
                </a>
                @if (request()->routeIs('home'))
                    <button id="background-audio-toggle" type="button" aria-controls="background-audio"
                        aria-pressed="false" aria-label="Redă melodia"
                        class="rounded-full p-1.5 text-gray-400 opacity-50 transition duration-200 hover:bg-gray-800 hover:text-white hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        <svg id="background-audio-play-icon" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path d="M8 5.5a1 1 0 0 1 1.5-.86l10 6a1 1 0 0 1 0 1.72l-10 6A1 1 0 0 1 8 17.5v-12Z" />
                        </svg>
                        <svg id="background-audio-pause-icon" class="hidden h-4 w-4" viewBox="0 0 24 24"
                            fill="currentColor" aria-hidden="true">
                            <path
                                d="M7 5a2 2 0 0 1 2 2v10a2 2 0 1 1-4 0V7a2 2 0 0 1 2-2Zm10 0a2 2 0 0 1 2 2v10a2 2 0 1 1-4 0V7a2 2 0 0 1 2-2Z" />
                        </svg>
                    </button>
                @endif
            </div>
            @if (request()->routeIs('home'))
                <input id="background-audio-seek" class="audio-seek w-full" type="range" min="0" max="0"
                    value="0" step="0.1" aria-label="Poziția melodiei" aria-controls="background-audio"
                    disabled>
            @endif
        </div>

        <!-- Linia fină despărțitoare (opțională) - oferă un aer premium, de revistă -->
        <div class="hidden md:block h-6 w-px bg-white/10"></div>

        <!-- Meniul stă în dreapta logo-ului, pe același rând, perfect grupate împreună -->
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-300">
            <a href="#despre" class="hover:text-white transition-colors duration-200">Lucrează cu mine</a>
            <a href="#planuri" class="hover:text-white transition-colors duration-200">Planuri</a>
            <a href="#contact" class="hover:text-white transition-colors duration-200">Contacteaza-mă</a>
        </nav>
        <!-- <div class="hidden md:flex items-center gap-3"> -->
        <div class="hidden">
            @auth
                <a href="{{ route('profile') }}"
                    class="text-sm font-medium text-gray-300 hover:text-white transition">Profilul meu</a>
                <form action="{{ route('logout') }}" method="POST" class="inline-flex">
                    @csrf
                    <button type="submit"
                        class="rounded-full px-4 py-2 text-sm font-medium text-gray-300 bg-white/5 hover:bg-white/10 hover:text-white border border-white/10 transition">Ieșire</button>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="rounded-full px-4 py-2 text-sm font-medium text-white bg-orange-600 hover:bg-orange-500 transition shadow-lg shadow-orange-600/20">Autentificare</a>
                <a href="{{ route('register') }}"
                    class="rounded-full px-4 py-2 text-sm font-medium text-gray-300 bg-white/5 hover:bg-white/10 hover:text-white border border-white/10 transition">Înregistrare</a>
            @endauth
        </div>


        <!-- Mobile toggle -->
        <div class="md:hidden">
            <input type="checkbox" id="menu-toggle" class="peer hidden">
            <label for="menu-toggle" class="relative z-50 cursor-pointer text-white p-2 block" aria-label="Meniu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </label>
            <label for="menu-toggle" aria-hidden="true"
                class="absolute top-20 left-0 right-0 z-40 hidden h-screen peer-checked:block"></label>
            <div
                class="peer-checked:block hidden absolute top-20 left-0 right-0 bg-gray-950/95 backdrop-blur-xl border-b border-white/10 z-50 px-6 py-8 shadow-2xl">
                <nav class="flex flex-col gap-4 text-lg font-medium text-gray-200">
                    <a href="#despre" class="hover:text-white">Lucrează cu mine</a>
                    <a href="#planuri" class="hover:text-white">Planuri</a>
                    <a href="#contact" class="hover:text-white">Contactează-mă</a>
                </nav>
                <div class="hidden mt-6 pt-6 border-t border-white/10 flex flex-col gap-3">
                    @auth
                        <a href="{{ route('profile') }}" class="text-gray-200 hover:text-white">Profilul meu</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full text-left text-gray-200 hover:text-white">Ieșire</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-full px-4 py-2 text-center text-white bg-orange-600">Autentificare</a>
                        <a href="{{ route('register') }}"
                            class="rounded-full px-4 py-2 text-center text-gray-200 border border-white/10">Înregistrare</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
