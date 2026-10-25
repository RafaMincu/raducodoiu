<x-guest-layout>
    <h1 class="text-3xl font-bold tracking-tight playfair mb-4">Schimbă parola</h1>
    <p class="text-gray-400 text-sm mb-8">Dacă aveți acces la e-mailul asociat contului, veți primi un link de resetare a parolei înainte de a continua. Intrați emailul dumneavoastră pentru a vedea link-ul.</p>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        @method('put')

        <div class="mb-6">
            <label for="password" class="block font-medium text-gray-200 mb-2">Noua parolă</label>
            <input id="password" name="password" type="password" class="block w-full mt-1 bg-gray-800 text-white text-base border-gray-600 rounded-xl px-4 py-4 focus:outline-none focus:border-orange-500 focus:ring-orange-500 shadow-md placeholder:text-gray-400" required minlength="8" autocomplete="new-password">
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block font-medium text-gray-200 mb-2">Confirmare parolă</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="block w-full mt-1 bg-gray-800 text-white text-base border-gray-600 rounded-xl px-4 py-4 focus:outline-none focus:border-orange-500 focus:ring-orange-500 shadow-md placeholder:text-gray-400" required autocomplete="new-password">
        </div>

        <div class="flex items-center justify-end px-2 pt-4">
            <button type="submit" class="inline-flex justify-center items-center gap-2 px-8 py-3 bg-orange-600 hover:bg-orange-500 text-white font-semibold rounded-full transition-all duration-200 shadow-lg shadow-orange-600/30">
                Schimbă parola
            </button>
        </div>
    </form>
</x-guest-layout>