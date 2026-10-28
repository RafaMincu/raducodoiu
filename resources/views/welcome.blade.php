<x-app-layout>

  @push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/carusel.css') }}">
  @endpush

  @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/carusel.js') }}"></script>
    <script src="{{ asset('js/audio.js') }}"></script>
  @endpush

  {{-- ═══════════════ ACASĂ ═══════════════ --}}
  <section id="acasa" class="bg-gray-950 relative overflow-hidden select-none">
    <div class="max-w-3xl mx-auto px-5 md:px-6 text-center relative z-10">
      <div class="relative inline-block mx-auto md:max-w-lg lg:max-w-xl w-full">
        <img id="radu-photo-base" src="{{ asset('imagini/radu_gluga.jpeg') }}" alt="Radu Codoiu" class="w-full h-auto max-w-xl md:max-w-2xl lg:max-w-[80%] mx-auto block filter brightness-55 contrast-105 rounded-2xl">
        <div id="winamp-body-lights" class="absolute flex justify-between pointer-events-none overflow-hidden mix-blend-color-dodge opacity-0 transition-opacity duration-700 z-20" style="top: -25%; bottom: 0; left: 0; right: 0; height: 125%; -webkit-mask-image: url('{{ asset('imagini/radu_gluga.jpeg') }}'); mask-image: url('{{ asset('imagini/radu_gluga.jpeg') }}'); -webkit-mask-size: contain; mask-size: contain; -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat; -webkit-mask-position: bottom center; mask-position: bottom center;"></div>
      </div>
      <h1 class="text-center text-3xl md:text-6xl font-black tracking-tight playfair mt-8 mb-4 text-white uppercase">Radu Codoiu</h1>
      <p class="text-center text-gray-400 text-lg max-w-xl mx-auto">Sportiv de performanță, antrenor acreditat, nutriționist acreditat, preparator sportiv.</p>
    </div>
  </section>

  <audio id="background-audio" src="{{ asset('audio/incepe-acum.mp3') }}" preload="none" crossorigin="anonymous"></audio>

  {{-- ═══════════════ HERO ═══════════════ --}}
  <section class="pt-24 md:pt-36 lg:pt-48 pb-16 md:pb-24 bg-gray-950">
    <div class="max-w-7xl mx-auto px-5 md:px-6">
      <div class="grid lg:grid-cols-2 gap-10 lg:gap-12 items-center">
        <div>
          <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight playfair mb-6">Fă-ți corpul <span class="text-orange-500">mai puternic</span> și mintea mai clară</h1>
          <p class="text-gray-400 text-lg max-w-xl mb-8">Antrenamente adaptate pentru rezultate reale.</p>
          <a href="#planuri" class="inline-block px-8 py-4 bg-orange-600 text-white font-semibold rounded-full hover:bg-orange-500 hover:shadow-lg hover:shadow-orange-600/30 transition-all duration-300">Începe acum →</a>
        </div>
        <div class="relative">
          <img src="{{ asset('imagini/ridicare.jpg') }}" alt="Antrenament fitness" class="rounded-2xl w-full shadow-2xl shadow-gray-800/50 object-cover">
        </div>
      </div>
    </div>
  </section>

  {{-- ═══════════════ DESPRE ═══════════════ --}}
  <section id="despre" class="py-24 bg-gray-900">
    <div class="max-w-7xl mx-auto px-6 py-10 lg:py-16">
      <div class="text-center mb-10 lg:mb-12">
        <h2 class="text-3xl lg:text-4xl font-bold tracking-tight playfair mb-4 text-white">De ce să lucrezi cu mine?</h2>
        <div class="max-w-2xl mx-auto text-center md:text-left">
          <ul class="text-gray-400 text-base md:text-lg list-none space-y-4 mt-6">
            <li class="flex items-start text-left"><span class="mr-2 text-amber-500 select-none">•</span> <span><strong>Experiență Directă:</strong> Am testat disciplina și optimizarea formei fizice.</span></li>
            <li class="flex items-start text-left"><span class="mr-2 text-amber-500 select-none">•</span> <span><strong>Abordare 360°:</strong> Tehnicile de preparare fizică + planuri nutriționale.</span></li>
            <li class="flex items-start text-left"><span class="mr-2 text-amber-500 select-none">•</span> <span><strong>Acreditări Oficiale:</strong> Programele mele sunt recunoscute oficial.</span></li>
            <li class="flex items-start text-left"><span class="mr-2 text-amber-500 select-none">•</span> <span><strong>Focus pe Rezultate Reale:</strong> Educație sportivă și sprijin constant.</span></li>
          </ul>
        </div>
      </div>
      <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center mt-16 lg:mt-24">
        <div>
          <h3 class="text-3xl lg:text-4xl font-bold tracking-tight playfair mb-4 lg:mb-6 text-center lg:text-left text-white">Pentru fiecare obiectiv</h3>
          <p class="text-gray-400 text-base lg:text-lg mb-6 lg:mb-8 text-center lg:text-left">Indiferent dacă vrei să slăbești, să câștigi masă musculară sau doar să te simți mai bine.</p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <article class="p-5 bg-gray-800 rounded-2xl text-center"><h4 class="font-semibold text-white mb-2">💪 Forță</h4><p class="text-gray-400 text-sm">Planuri progressive.</p></article>
            <article class="p-5 bg-gray-800 rounded-2xl text-center"><h4 class="font-semibold text-white mb-2">🔥 Ardere</h4><p class="text-gray-400 text-sm">Sesiuni HIIT.</p></article>
            <article class="p-5 bg-gray-800 rounded-2xl text-center"><h4 class="font-semibold text-white mb-2">🧘 Recuperare</h4><p class="text-gray-400 text-sm">Mobilitate și stretching.</p></article>
          </div>
        </div>
        <div class="relative pt-6 lg:pt-0">
          <img src="{{ asset('imagini/radu2.jpg') }}" alt="Antrenor și sportiv" class="rounded-2xl shadow-2xl shadow-gray-800/50 w-full object-cover">
        </div>
      </div>
    </div>
  </section>

  {{-- ═══════════════ PLANURI ═══════════════ --}}
  <section id="planuri" class="py-24 bg-gray-950">
    <div class="max-w-7xl mx-auto px-6">
      <div class="mb-12"><h2 class="text-4xl font-bold tracking-tight playfair mb-6">Alege-ți planul</h2><p class="text-gray-400 text-lg">Începe simplu și scalează când ești pregătit.</p></div>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <article class="p-8 bg-gray-800 rounded-3xl border border-gray-700 hover:border-orange-500 transition"><div class="text-4xl font-bold text-orange-500 mb-2">Start</div><p class="text-gray-400 text-sm mb-6">49 lei / lună</p><ul class="space-y-3 text-gray-300 text-sm mb-8"><li>3 antrenamente / săptămână</li><li>Acces video</li><li>Plan nutriție bază</li></ul><a href="#" class="block w-full px-8 py-3 bg-orange-600 text-white font-medium rounded-full hover:bg-orange-500 text-center">Alege Start</a></article>
        <article class="p-8 bg-gray-800 rounded-3xl border border-orange-500/50 hover:border-orange-500 transition"><div class="text-4xl font-bold text-orange-500 mb-2">Pro</div><p class="text-gray-400 text-sm mb-6">Popular · 99 lei / lună</p><ul class="space-y-3 text-gray-300 text-sm mb-8"><li>5 antrenamente / săptămână</li><li>Planuri personalizate</li><li>Consult nutriție lunar</li></ul><a href="#" class="block w-full px-8 py-3 bg-orange-600 text-white font-medium rounded-full hover:bg-orange-500 text-center">Alege Pro</a></article>
        <article class="p-8 bg-gray-800 rounded-3xl border border-gray-700 hover:border-orange-500 transition"><div class="text-4xl font-bold text-orange-500 mb-2">Elite</div><p class="text-gray-400 text-sm mb-6">179 lei / lună</p><ul class="space-y-3 text-gray-300 text-sm mb-8"><li>Antrenamente nelimitate</li><li>1:1 cu antrenorul</li><li>Plan nutriție personalizat</li></ul><a href="#" class="block w-full px-8 py-3 bg-orange-600 text-white font-medium rounded-full hover:bg-orange-500 text-center">Alege Elite</a></article>
      </div>
    </div>
  </section>

  <!-- ════════════════════════════════════════════════════
       🎠 CARUSAL — Coverflow Flat │ Swiper (2+1+2 vizibile)
       ════════════════════════════════════════════════════ -->
  <section class="py-24 bg-gray-950" id="carusel-section">
    <div class="carousel-container">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="{{ asset('imagini/carusel/1.jpg') }}" alt="Carusel 1" /></div>
          <div class="swiper-slide"><img src="{{ asset('imagini/carusel/2.jpg') }}" alt="Carusel 2" /></div>
          <div class="swiper-slide"><img src="{{ asset('imagini/carusel/3.jpg') }}" alt="Carusel 3" /></div>
          <div class="swiper-slide"><img src="{{ asset('imagini/carusel/4.jpg') }}" alt="Carusel 4" /></div>
          <div class="swiper-slide"><img src="{{ asset('imagini/carusel/5.jpg') }}" alt="Carusel 5" /></div>
          <div class="swiper-slide"><img src="{{ asset('imagini/carusel/6.jpg') }}" alt="Carusel 6" /></div>
          <div class="swiper-slide"><img src="{{ asset('imagini/carusel/7.jpg') }}" alt="Carusel 7" /></div>
          <div class="swiper-slide"><img src="{{ asset('imagini/carusel/8.jpg') }}" alt="Carusel 8" /></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <script>
  (function() {
    new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      speed: 600,
      autoplay: { delay: 4000, disableOnInteraction: true, pauseOnMouseEnter: true },
      coverflowEffect: { rotate: 0, stretch: -20, depth: 160, modifier: 1, slideShadows: false },
      pagination: { el: ".swiper-pagination", clickable: true },
      navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
    });
  })();
  </script>

  {{-- ═══════════════ CONTACT ═══════════════ --}}
  <section id="contact" class="py-24 bg-gray-950">
    <div class="max-w-2xl mx-auto px-6">
      <div class="text-center mb-12"><h2 class="text-4xl font-bold tracking-tight playfair mb-4">Hai să începem</h2><p class="text-gray-400">Scrie-mi și îți trimitem un plan gratuit.</p></div>
      <form class="max-w-md mx-auto space-y-4" onsubmit="event.preventDefault(); this.innerHTML='<p class=\'text-center text-orange-400 font-medium py-6\'>Mulțumesc! Te contactez curând.</p>';">
        <input type="text" placeholder="Numele tău" required class="w-full px-6 py-4 bg-gray-800 text-white rounded-xl text-sm border border-gray-700 focus:outline-none focus:border-orange-500 transition-colors">
        <input type="email" placeholder="exemplu@email.com" required class="w-full px-6 py-4 bg-gray-800 text-white rounded-xl text-sm border border-gray-700 focus:outline-none focus:border-orange-500 transition-colors">
        <button type="submit" class="w-full px-8 py-4 bg-orange-600 text-white font-medium rounded-full hover:bg-orange-500 transition-all duration-300">Trimite cererea</button>
      </form>
      <div class="flex items-center justify-center gap-6 mt-10">
        <a href="https://wa.me/+40742604057" aria-label="WhatsApp" class="w-12 h-12 rounded-full bg-green-600/20 border border-green-500/30 flex items-center justify-center text-green-400 hover:bg-green-600 hover:text-white transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg></a>
        <a href="https://www.facebook.com/radu.codoiu" aria-label="Facebook" class="w-12 h-12 rounded-full bg-blue-600/20 border border-blue-500/30 flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
        <a href="https://www.instagram.com/codoiu" aria-label="Instagram" class="w-12 h-12 rounded-full bg-pink-600/20 border border-pink-500/30 flex items-center justify-center text-pink-400 hover:bg-pink-600 hover:text-white transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5"/></svg></a>
      </div>
    </div>
  </section>

</x-app-layout>
