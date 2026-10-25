<x-guest-layout>
    <h1 class="text-3xl font-bold playfair mb-2">Verifică-ți e-mailul</h1>
    <p class="text-gray-400 text-sm mb-6">Mulțumim că te-ai înregistrat! Pentru a începe, trebuie să confirmi adresa ta de e-mail prin linkul trimis în e-mail. Dacă nu ai primit e-mailul, poți solicita altul mai jos.</p>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-400 bg-green-900/20 border border-green-600/30 rounded-xl px-4 py-3">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="flex items-center justify-between pt-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="inline-flex justify-center items-center gap-2 px-6 py-3 bg-orange-600 hover:bg-orange-500 text-white font-semibold rounded-full shadow-lg shadow-orange-600/30 transition-all duration-200">
                Retrimite e-mail
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-orange-400 hover:text-white transition-colors font-medium">
                Ieșire
            </button>
        </form>
    </div>
</x-guest-layout>