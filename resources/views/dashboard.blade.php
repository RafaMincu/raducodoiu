<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-3xl text-gray-900 tracking-tight playfair">Dashboard — {{ Auth::user()->name }}</h2>
    </x-slot>

    <div class="py-12 bg-gray-950 bg-pattern min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">

            <!-- Salut -->
            <div class="bg-gradient-to-br from-orange-600/20 to-blue-600/10 border border-white/10 rounded-3xl p-8 backdrop-blur-lg shadow-2xl shadow-black/20">
                <h3 class="text-3xl md:text-4xl font-black text-white tracking-tight mb-2">Bine ai revenit, {{ Auth::user()->name }}.</h3>
                <p class="text-gray-400 text-lg">Urmărește progresul și programările dintr-un singur loc.</p>
            </div>

            <!-- Statistici -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-900/80 border border-white/10 rounded-2xl p-6 shadow-xl">
                    <div class="text-sm text-gray-400 mb-1">Sesiuni completate</div>
                    <div class="text-4xl font-black text-white">12</div>
                    <div class="mt-3 h-2 w-full bg-gray-800 rounded-full overflow-hidden">
                        <div class="h-full w-[60%] bg-gradient-to-r from-orange-500 to-yellow-400 rounded-full"></div>
                    </div>
                </div>
                <div class="bg-gray-900/80 border border-white/10 rounded-2xl p-6 shadow-xl">
                    <div class="text-sm text-gray-400 mb-1">Progres actual</div>
                    <div class="text-4xl font-black text-white">78%</div>
                    <div class="mt-3 h-2 w-full bg-gray-800 rounded-full overflow-hidden">
                        <div class="h-full w-[78%] bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full"></div>
                    </div>
                </div>
                <div class="bg-gray-900/80 border border-white/10 rounded-2xl p-6 shadow-xl">
                    <div class="text-sm text-gray-400 mb-1">Următoarea programare</div>
                    <div class="text-xl font-bold text-white">Miercuri, 28 Oct</div>
                    <div class="text-sm text-orange-400 font-medium mt-1">Antrenament intens — 18:00</div>
                </div>
            </div>

            <!-- Grafic vizual progres -->
            <div class="bg-gray-900/80 border border-white/10 rounded-3xl p-8 shadow-xl">
                <h4 class="text-xl font-black text-white mb-6">Evoluție săptămânală</h4>
                <div class="flex items-end gap-4 h-40">
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <span class="text-xs text-gray-400">Lun</span>
                        <div class="w-full bg-gradient-to-t from-orange-600 to-orange-400 rounded-t-lg" style="height: 40%"></div>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <span class="text-xs text-gray-400">Mar</span>
                        <div class="w-full bg-gradient-to-t from-orange-600 to-orange-400 rounded-t-lg" style="height: 65%"></div>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <span class="text-xs text-gray-400">Mie</span>
                        <div class="w-full bg-gradient-to-t from-orange-600 to-orange-400 rounded-t-lg" style="height: 55%"></div>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <span class="text-xs text-gray-400">Joi</span>
                        <div class="w-full bg-gradient-to-t from-orange-600 to-orange-400 rounded-t-lg" style="height: 90%"></div>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <span class="text-xs text-gray-400">Vin</span>
                        <div class="w-full bg-gradient-to-t from-blue-600 to-blue-400 rounded-t-lg" style="height: 45%"></div>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <span class="text-xs text-gray-400">Sâm</span>
                        <div class="w-full bg-gradient-to-t from-blue-600 to-blue-400 rounded-t-lg" style="height: 70%"></div>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2">
                        <span class="text-xs text-gray-400">Dum</span>
                        <div class="w-full bg-gradient-to-t from-orange-600 to-yellow-400 rounded-t-lg" style="height: 100%"></div>
                    </div>
                </div>
            </div>

            <!-- Programări / Acțiuni -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-gray-900/80 border border-white/10 rounded-3xl p-8 shadow-xl">
                    <h4 class="text-xl font-black text-white mb-6">Programări viitoare</h4>
                    <div class="space-y-4">
                        <a href="#" class="block p-4 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 transition">
                            <div class="flex justify-between items-start">
                                <div>
                                    <div class="font-bold text-white">Antrenament forță</div>
                                    <div class="text-sm text-gray-400">28 Oct • 18:00 • Sală mare</div>
                                </div>
                                <span class="rounded-full px-3 py-1 text-xs font-bold bg-orange-600 text-white">Confirmat</span>
                            </div>
                        </a>
                        <a href="#" class="block p-4 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 transition">
                            <div class="flex justify-between items-start">
                                <div>
                                    <div class="font-bold text-white">Reevaluaie progres</div>
                                    <div class="text-sm text-gray-400">30 Oct • 10:00 • Online</div>
                                </div>
                                <span class="rounded-full px-3 py-1 text-xs font-bold bg-blue-600 text-white">În așteptare</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-orange-600/20 to-blue-600/10 border border-white/10 rounded-3xl p-8 shadow-xl flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-black text-white mb-3">Profil și setări</h4>
                        <p class="text-gray-400 mb-6">Actualizează datele personale, schimbă parola și configurează notificările.</p>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="inline-block w-full text-center rounded-full py-3 bg-orange-600 hover:bg-orange-500 text-white font-bold shadow-lg shadow-orange-600/20 transition">Editează profilul →</a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
