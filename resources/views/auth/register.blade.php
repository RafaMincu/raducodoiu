<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" autocomplete="off">
        @csrf

        <div class="py-8 px-6">
            <h1 class="text-3xl font-bold tracking-tight playfair mb-2">Creează un cont</h1>
            <p class="text-gray-400 text-sm mb-8">
                Înscriu-te chiar acum și începe-ți procesul de transformare în doar câteva minute.
            </p>
        </div>

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-gray-200 mb-2">Nume</label>
            <input id="name" name="name" type="text" class="block mt-1 w-full bg-gray-800 text-white text-base border-gray-600 rounded-xl px-4 py-4 focus:outline-none focus:border-orange-500 focus:ring-orange-500 shadow-md placeholder:text-gray-400" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block font-medium text-gray-200 mb-2">E-mail</label>
            <input id="email" name="email" type="email" placeholder="test@gmail.com" class="block mt-1 w-full bg-gray-800 text-white text-base border-gray-600 rounded-xl px-4 py-4 focus:outline-none focus:border-orange-500 focus:ring-orange-500 shadow-md placeholder:text-gray-400" value="{{ old('email') }}" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block font-medium text-gray-200 mb-2">Parolă</label>
            <input id="password" name="password" type="password" placeholder="Parolă" class="block mt-1 w-full bg-gray-800 text-white text-base border-gray-600 rounded-xl px-4 py-4 focus:outline-none focus:border-orange-500 focus:ring-orange-500 shadow-md placeholder:text-gray-400" required minlength="8" autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block font-medium text-gray-200 mb-2">Confirmare parolă</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="block mt-1 w-full bg-gray-800 text-white text-base border-gray-600 rounded-xl px-4 py-4 focus:outline-none focus:border-orange-500 focus:ring-orange-500 shadow-md placeholder:text-gray-400" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="my-6"></div>

        <div class="flex items-center justify-between">
            <a href="{{ route('login') }}" class="underline text-sm text-orange-400 hover:text-white">Sunt deja autentificat</a>
        </div>

        <div class="px-6 pt-2">
            <button type="submit" class="w-full md:w-auto inline-flex justify-center items-center gap-2 px-8 py-4 bg-orange-600 hover:bg-orange-500 text-white font-semibold rounded-full transition-all duration-200 shadow-lg shadow-orange-600/30">
                Creează cont →
            </button>
        </div>
    </form>
</x-guest-layout>