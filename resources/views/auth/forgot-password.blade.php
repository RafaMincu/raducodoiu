<x-guest-layout>
    <h1 class="text-3xl font-bold tracking-tight playfair mb-2">Ai uitat parola?</h1>
    <p class="text-gray-400 text-sm mb-8">Trimite-ne e-mailul cu linkul de resetare a parolei tale — vei primi un link chiar acolo unde te-ai conectat.</p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-6">
            <label for="email" class="block font-medium text-gray-200 mb-2">E-mailul tău</label>
            <input id="email" name="email" type="email" placeholder="test@gmail.com" class="block w-full mt-1 bg-gray-800 text-white text-base border-gray-600 rounded-xl px-4 py-4 focus:outline-none focus:border-orange-500 focus:ring-orange-500 shadow-md placeholder:text-gray-400" value="{{ old('email') }}" required autocomplete="username">
        </div>

        <div class="flex items-center justify-between px-2">
            <a href="{{ url('/') }}" class="underline text-sm text-gray-300 hover:text-gray-100">Înapoi la Acasă</a>
            <button type="submit" class="inline-flex justify-center items-center gap-2 px-8 py-3 bg-orange-600 hover:bg-orange-500 text-white font-semibold rounded-full transition-all duration-200 shadow-lg shadow-orange-600/30">
                Trimite link →
            </button>
        </div>
    </form>
</x-guest-layout>