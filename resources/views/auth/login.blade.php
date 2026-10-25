<x-guest-layout>
    <div class="py-10 px-8 md:px-12">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight playfair mb-3">Autentificare</h1>
        <p class="text-gray-400 text-base md:text-lg mb-10">Bine ai revenit — hai să continuăm transformarea.</p>

        <form method="POST" action="{{ route('login') }}" autocomplete="off" class="space-y-6">
            @csrf
            <!-- Anti-autofill dummy fields -->
            <input type="text" name="fakeuser" style="display:none;" autocomplete="off">
            <input type="password" name="fakepass" style="display:none;" autocomplete="off">

            <div>
                <label for="email" class="block text-base font-semibold text-gray-200 mb-2">E-mail</label>
                <input id="email" name="email" type="email" placeholder="test@gmail.com" class="w-full bg-gray-800/80 text-white border border-gray-600 rounded-2xl px-5 py-4 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/30 transition shadow-inner placeholder:text-gray-500" value="{{ old('email') }}" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-orange-400" />
            </div>

            <div>
                <label for="password" class="block text-base font-semibold text-gray-200 mb-2">Parolă</label>
                <input id="password" name="password" type="password" placeholder="Parolă" class="w-full bg-gray-800/80 text-white border border-gray-600 rounded-2xl px-5 py-4 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/30 transition shadow-inner placeholder:text-gray-500" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-orange-400" />
            </div>

            <div class="flex items-center justify-between pt-2">
                <label for="remember_me" class="inline-flex items-center gap-3 cursor-pointer group">
                    <input id="remember_me" name="remember" type="checkbox" class="w-5 h-5 bg-gray-800 border-gray-500 rounded-md text-orange-500 focus:ring-orange-500 shadow-md focus:outline-none transition">
                    <span class="text-sm font-medium text-gray-300 group-hover:text-white transition">Ține-mă conectat</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm font-medium text-orange-400 hover:text-orange-300 underline underline-offset-4">Am uitat parola</a>
            </div>

            <div class="pt-2 flex items-center justify-between gap-4">
                <a href="{{ route('register') }}" class="text-sm text-gray-400 hover:text-white transition">Nu am cont — creează unul</a>
                <button type="submit" class="inline-flex items-center gap-2 px-8 py-3.5 bg-orange-600 hover:bg-orange-500 text-white font-bold rounded-full shadow-xl shadow-orange-600/20 transition-all duration-200">
                    Intră <span aria-hidden="true">→</span>
                </button>
            </div>
        </form>
        <div class="pt-4 flex justify-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-sm text-gray-400 hover:text-orange-400 underline underline-offset-4 transition">Ieșire din cont</button>
            </form>
        </div>
    </div>
</x-guest-layout>