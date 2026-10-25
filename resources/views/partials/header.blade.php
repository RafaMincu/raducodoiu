<header class="fixed top-0 left-0 right-0 z-50 bg-gray-950/90 backdrop-blur-xl border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
    <a href="{{ url('/') }}" class="text-2xl font-black tracking-tighter text-white">Radu<span class="text-orange-500">Codoiu</span></a>
    <nav class="flex items-center gap-6 text-sm font-medium text-gray-300">
      <a href="{{ url('/') }}" class="hover:text-white transition">Acasă</a>
      <a href="#despre" class="hover:text-white transition">Despre mine</a>
      <a href="#planuri" class="hover:text-white transition">Planuri</a>
    </nav>
    <div class="flex items-center gap-3">
      @auth
        <a href="{{ route('profile') }}" class="text-sm font-medium text-gray-300 hover:text-white transition">Profilul meu</a>
        <form action="{{ route('logout') }}" method="POST" class="inline-flex">
          @csrf
          <button type="submit" class="rounded-full px-4 py-2 text-sm font-medium text-gray-300 bg-white/5 hover:bg-white/10 hover:text-white border border-white/10 transition">Ieșire</button>
        </form>
      @else
        <a href="{{ route('login') }}" class="rounded-full px-4 py-2 text-sm font-medium text-white bg-orange-600 hover:bg-orange-500 transition shadow-lg shadow-orange-600/20">Autentificare</a>
        <a href="{{ route('register') }}" class="rounded-full px-4 py-2 text-sm font-medium text-gray-300 bg-white/5 hover:bg-white/10 hover:text-white border border-white/10 transition">Înregistrare</a>
      @endauth
    </div>
  </div>
</header>