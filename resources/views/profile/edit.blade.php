<x-app-layout>
    <div class="py-12 max-w-3xl mx-auto px-6 space-y-8">
        <h1 class="text-4xl font-bold tracking-tight playfair">Profilul tău</h1>

        <div class="p-6 bg-gray-900/80 border border-white/10 rounded-3xl shadow-xl">
            <h2 class="text-xl font-semibold mb-4 text-gray-100">Informații personale</h2>
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-6 bg-gray-900/80 border border-white/10 rounded-3xl shadow-xl">
            <h2 class="text-xl font-semibold mb-4 text-gray-100">Parolă</h2>
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-6 bg-red-950/30 border border-red-500/30 rounded-3xl shadow-xl">
            <h2 class="text-xl font-semibold mb-4 text-red-200">Șterge contul</h2>
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
