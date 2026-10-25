<x-guest-layout>
    <h1 class="text-3xl font-bold playfair mb-2">Confirmă parola</h1>
    <p class="text-gray-400 text-sm mb-6">Pentru securitate, confirmă parola ta pentru a continua.</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="mb-6">
            <label for="password" class="block font-medium text-gray-200 mb-2">Parolă</label>
            <input id="password" name="password" type="password" class="block w-full bg-gray-800 text-white text-base border-gray-600 rounded-xl px-4 py-4 focus:outline-none focus:border-orange-500 focus:ring-orange-500 shadow-md placeholder:text-gray-400" required autocomplete="current-password">
        </div>
        <button type="submit" class="inline-flex justify-center items-center gap-2 px-8 py-3 bg-orange-600 hover:bg-orange-500 text-white font-semibold rounded-full transition-all shadow-lg shadow-orange-600/30">
            Confirmă →
        </button>
    </form>
</x-guest-layout>