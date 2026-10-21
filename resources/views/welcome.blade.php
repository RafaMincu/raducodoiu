<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RaduCodoiu — Fitness & Wellness</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;900&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', system-ui, sans-serif; }
    .playfair { font-family: 'Playfair Display', serif; }
    .bg-pattern {
      background-image: radial-gradient(ellipse 80% 50% at 20% -10%, rgba(255,107,53,0.15), transparent),
                        radial-gradient(ellipse 80% 50% at 80% 110%, rgba(59,130,246,0.15), transparent);
    }
  </style>
</head>
<body class="bg-gray-950 bg-pattern text-gray-100 min-h-screen flex flex-col">

  <!-- Header (partial separat) -->
  @include('partials.header')

  <!-- Continut principal -->
  <main class="flex-1">

  <!-- Hero Section -->
  <section class="pt-32 md:pt-64 pb-24 bg-gray-950">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight playfair mb-6">
            Fă-ți corpul <span class="text-orange-500">mai puternic</span> și mintea mai clară
          </h1>
          <p class="text-gray-400 text-lg max-w-xl mb-8">
            Antrenamente adaptate, nutriție inteligentă și o comunitate care te susține — totul într-un singur loc.
          </p>
          <a href="#planuri" class="inline-block px-8 py-4 bg-orange-600 text-white font-semibold rounded-full hover:bg-orange-500 hover:shadow-lg hover:shadow-orange-600/30 transition-all duration-300">
            Începe acum →
          </a>
        </div>
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=1000&auto=format&fit=crop" alt="Antrenament fitness" class="rounded-2xl w-full shadow-2xl shadow-gray-800/50 object-cover">
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="despre" class="py-24 bg-gray-900">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-4xl font-bold tracking-tight playfair mb-6">Pentru fiecare obiectiv</h2>
          <p class="text-gray-400 text-lg mb-6">
            Indiferent dacă vrei să slăbești, să câștigi masă musculară sau doar să te simți mai bine — avem programul potrivit.
          </p>
          <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
            <article class="p-6 bg-gray-800 rounded-2xl hover:bg-gray-700 transition-colors">
              <div class="w-12 h-12 rounded-xl bg-orange-600 flex items-center justify-center text-3xl mb-4">💪</div>
              <h3 class="font-semibold text-white mb-2">Forță & Rezistență</h3>
              <p class="text-gray-400">Planuri progressive pentru creșterea forței.</p>
            </article>
            <article class="p-6 bg-gray-800 rounded-2xl hover:bg-gray-700 transition-colors">
              <div class="w-12 h-12 rounded-xl bg-orange-600 flex items-center justify-center text-3xl mb-4">🔥</div>
              <h3 class="font-semibold text-white mb-2">Ardere & Definiție</h3>
              <p class="text-gray-400">Sesiuni HIIT pentru rezultate vizibile.</p>
            </article>
            <article class="p-6 bg-gray-800 rounded-2xl hover:bg-gray-700 transition-colors">
              <div class="w-12 h-12 rounded-xl bg-orange-600 flex items-center justify-center text-3xl mb-4">🧘</div>
              <h3 class="font-semibold text-white mb-2">Mobilitate & Recuperare</h3>
              <p class="text-gray-400">Yoga și stretching pentru o recuperare rapidă.</p>
            </article>
          </div>
        </div>
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1000&auto=format&fit=crop" alt="Antrenor și sportiv" class="rounded-2xl w-full shadow-2xl shadow-gray-800/50">
        </div>
      </div>
    </div>
  </section>

  <!-- Plans Section -->
  <section id="planuri" class="py-24 bg-gray-950">
    <div class="max-w-7xl mx-auto px-6">
      <div>
        <h2 class="text-4xl font-bold tracking-tight playfair mb-6">Alege-ți planul</h2>
        <p class="text-gray-400 text-lg mb-12">Începe simplu și scalează când ești pregătit. Poți schimba oricând.</p>
      </div>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <!-- Start Plan -->
        <article class="p-8 bg-gray-800 rounded-3xl border border-gray-700 hover:border-orange-500 transition-all duration-300 group">
          <div class="text-4xl font-bold text-orange-500 mb-2">Start</div>
          <p class="text-gray-400 text-sm mb-6">49 lei / lună</p>
          <ul class="space-y-3 text-gray-300 text-sm mb-8">
            <li>3 antrenamente / săptămână</li>
            <li>Acces la biblioteca video</li>
            <li>Plan de bază nutriție</li>
            <li>Comunitate online</li>
          </ul>
          <a href="#" class="w-full px-8 py-3 bg-orange-600 text-white font-medium rounded-full hover:bg-orange-500 transition-all duration-300">Alege Start</a>
        </article>

        <!-- Pro Plan -->
        <article class="p-8 bg-gray-800 rounded-3xl border border-orange-500/50 hover:border-orange-500 transition-all duration-300 group">
          <div class="text-4xl font-bold text-orange-500 mb-2">Pro</div>
          <p class="text-gray-400 text-sm mb-6">Popular</p>
          <div class="text-5xl font-bold text-orange-500 mb-2">99</div>
          <p class="text-gray-400 text-sm mb-6">lei / lună</p>
          <ul class="space-y-3 text-gray-300 text-sm mb-8">
            <li>5 antrenamente / săptămână</li>
            <li>Planuri personalizate</li>
            <li>Consult nutriție lunar</li>
            <li>Urmărire progres avansată</li>
            <li>Acces prioritare la evenimente</li>
          </ul>
          <a href="#" class="w-full px-8 py-3 bg-orange-600 text-white font-medium rounded-full hover:bg-orange-500 transition-all duration-300">Alege Pro</a>
        </article>

        <!-- Elite Plan -->
        <article class="p-8 bg-gray-800 rounded-3xl border border-gray-700 hover:border-orange-500 transition-all duration-300 group">
          <div class="text-4xl font-bold text-orange-500 mb-2">Elite</div>
          <p class="text-gray-400 text-sm mb-6">179 lei / lună</p>
          <ul class="space-y-3 text-gray-300 text-sm mb-8">
            <li>Antrenamente nelimitate</li>
            <li>1:1 cu antrenorul tău</li>
            <li>Plan nutriție personalizat</li>
            <li>Recuperare și wellness</li>
            <li>Acces VIP la toate resursele</li>
          </ul>
          <a href="#" class="w-full px-8 py-3 bg-orange-600 text-white font-medium rounded-full hover:bg-orange-500 transition-all duration-300">Alege Elite</a>
        </article>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-24 bg-gray-950">
    <div class="max-w-2xl mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold tracking-tight playfair mb-4">Hai să începem</h2>
        <p class="text-gray-400">Scrie-ne și îți trimitem un plan gratuit pentru prima săptămână.</p>
      </div>
      <form class="max-w-md mx-auto space-y-4" onsubmit="event.preventDefault(); this.innerHTML='<p class=\"text-center text-orange-400 font-medium py-6\">Mulțumim! Te contactăm curând.</p>';">
        <input type="text" placeholder="Numele tău" required class="w-full px-6 py-4 bg-gray-800 text-white rounded-xl text-sm border border-gray-700 focus:outline-none focus:border-orange-500 transition-colors">
        <input type="email" placeholder="exemplu@email.com" required class="w-full px-6 py-4 bg-gray-800 text-white rounded-xl text-sm border border-gray-700 focus:outline-none focus:border-orange-500 transition-colors">
        <button type="submit" class="w-full px-8 py-4 bg-orange-600 text-white font-medium rounded-full hover:bg-orange-500 transition-all duration-300">Trimite cererea</button>
      </form>
    </div>
  </section>

  <!-- Footer (partial separat) -->
  @include('partials.footer')

  </main>
</body>
</html>