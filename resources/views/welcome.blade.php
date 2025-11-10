<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </head>
   <body class="bg-[#FDFDFC] dark:bg-[#17466E] text-[#1b1b18] flex items-start min-h-screen flex-col">
        <header class="w-full absolute top-0 left-0 z-30 bg-[#17466E]">
            <div class="w-full max-w-6xl mx-auto px-6 lg:px-8 ">

                    <nav class="flex items-center justify-between py-4 ">
                        <!-- Left: Logo -->
                        <div class="flex items-center">
                            <a href="{{ url('/') }}" class="flex items-center gap-3">
                                <img src="{{ asset('logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="h-12 w-auto">
                                <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                            </a>
                        </div>

                        <!-- Center: Buttons -->
                        <div id="header" class="hidden md:flex items-center justify-center flex-1">
                            <div class="inline-flex items-center gap-4">
                                <a href="#features" id="nav-saiba" class="px-4 py-2 rounded-full bg-white/10 text-white font-medium hover:bg-white/20 transition">SAIBA MAIS</a>


                                    {{-- <a href="{{ route('register') }}" class="px-4 py-2 rounded-full bg-emerald-600 text-white font-medium hover:bg-emerald-700 transition">CADASTRAR</a> --}}
                                     <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
    class="px-4 py-2 rounded-full bg-[#01AAAD] text-white font-medium hover:bg-[#029092] transition flex items-center gap-2">
    CADASTRAR
    <svg class="w-3 h-3 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
</button>
                                    <a href="{{ route('login') }}" class="px-4 py-2 rounded-full border border-white/40  font-medium hover:bg-white/5 transition bg-white text-[#17466E] hover:text-white" >INGRESSAR</a>


            <div id="dropdownNavbar" class="mt-1 hidden border-gray-200 shadow-xs   border-y bg-[#17466E] dark:border-gray-600" aria-labelledby="dropdownLargeButton">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
            <ul>
                <li>
                    <a href="{{ route('register1') }}" class="block p-3 rounded-lg hover:hover:bg-[#01AAAD] dark:hover:bg-[#01AAAD]">
                        <div class="font-semibold">Cirurgião plástico residente </div>
                        <span class="text-sm text-gray-500 dark:text-white">Inscriva-se para participar dos intercambios académicos como estagiário.</span>
                    </a>
                </li>
                <li class="relative">
  <a href="{{ route('register2') }}" class="block p-3 rounded-lg hover:hover:bg-[#01AAAD] dark:hover:bg-gray-700 toggle-more-btn" aria-expanded="false" aria-controls="more-results-1">
    <div class="font-semibold">Cirurgião plástico formado</div>
    <span class="text-sm text-gray-500 dark:text-white">Inscreva-se para participar dos intercâmbios acadêmicos como estagiário ou inscreva-se para ser professor credenciado em determinada área de atuação, prévio processo seletivo.</span>
  </a>

  <!-- Panel ahora aparece a la derecha (oculto por defecto) -->
  <div id="more-results-1" class="absolute right-full top-0 border border-[#01AAAD] ml-3 hidden z-50 w-56 bg-white rounded-md shadow-lg dark:bg-[#17466E] py-2">
    <a href="{{ route('register3') }}" class="block px-4 py-2 text-sm text-gray-700 hover:hover:bg-[#01AAAD] dark:text-white dark:hover:bg-[#03616b]">Candidato a vaga</a>
    <a href="{{ route('register4') }}" class="block px-4 py-2 text-sm text-gray-700 hover:hover:bg-[#01AAAD] dark:text-white dark:hover:bg-[#03616b]">Professor credenciado</a>

  </div>
</li>

            </ul>
            <ul>
                <li>
                    <a href="{{ route('register-service') }}" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-[#01AAAD]">
                        <div class="font-semibold">Serviço de Cirurgia Plástica </div>
                        <span class="text-sm text-gray-500 dark:text-white">Inscriva-se para ofertar suas vagas de estágio em determinada área de atuação, pela plataforma de intercâmbio acadêmico.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register-service') }}" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-[#01AAAD]">
                        <div class="font-semibold">Hospitais e Clínicas credenciados</div>
                        <span class="text-sm text-gray-500 dark:text-white">Inscriva-se para obter a autorização para receber estagiários em diferentes áreas de atuação da especialidade, prévio processo seletivo.</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

                                @auth
                                    {{-- <a href="{{ url('/dashboard') }}" class="px-4 py-2 rounded-full bg-white/10 text-white font-medium hover:bg-white/20 transition">INGRESSAR</a> --}}
                                @endauth
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
</svg>

                            </div>
                        </div>

                        {{-- <!-- Right: Auth links (fallback for small screens) -->
                        <div class="flex items-center gap-6 text-sm md:gap-8">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-white font-medium">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-white font-medium underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-white font-medium">Register</a>
                                @endif
                            @endauth
                        </div> --}}
                    </nav>

            </div>
        </header>
        <!-- Polished full-bleed hero -->
        <div class="relative w-full -mx-0 lg:-mx-0 overflow-hidden">
            <!-- Background (full-bleed) -->
            <div id="hero-bg" class="absolute left-1/2 top-0 w-screen h-screen  bg-cover bg-center pointer-events-none" style="background-image:
            linear-gradient(rgba(11, 149, 183, 0.45), rgba(11, 157, 183, 0.45)),
            url('https://www.cirurgiaplastica.org.br/wp-content/uploads/2017/10/banner_regionais.jpg');
            transform: translateX(-50%); will-change: transform;"></div>
            <!-- Overlay for contrast (simplified) -->
            <div class="absolute inset-0 bg-black/55"></div>

            <!-- Content on top -->
            <main class="relative z-10 w-full  h-screen flex items-center ">
                <section class="w-full text-center">
                    <h1 class="text-4xl sm:text-5xl lg:text-5xl font-extrabold tracking-tight text-white drop-shadow-md mb-4">PLATAFORMA DE INTEGRAÇÃO ACADÊMICA DE <br> CIRURGIÕES PLÁSTICOS</h1>

                    <p class="mx-auto max-w-2xl text-lg text-white/90 mb-8">Plataforma digital voltada para promover o intercâmbio educacional entre residentes, serviços de residência, clínica e hospitais credenciados, assim como cirurgiões plásticos com experiência em determinada área de atuação na Cirurgia Plástica.</p>

                    {{-- <div class="flex items-center justify-center gap-4 mb-12">
                        <a href="{{ route('login') }}" class="inline-flex items-center gap-3 px-6 py-3 bg-[#01AAAD] hover:from-emerald-600 hover:to-teal-700 text-white rounded-full font-medium shadow-lg transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                            Ingressar
                        </a>


                    </div> --}}
                </section>
            </main>
        </div>

        <!-- White features section below hero (now with background image) -->
        <section id="why" class="relative w-full bg-cover bg-center py-16"  style="background-image:

           url('https://www.cirurgiaplastica.org.br/wp-content/uploads/2024/04/sbcp-pattern-02.png');">
            <div class="absolute inset-0 bg-[#17466E]/70"></div>
            <div id="features" class="relative max-w-6xl mx-auto px-6 lg:px-8">
                {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <article class="p-6 bg-white rounded-lg shadow-md text-left">
                        <h3 class="text-lg font-semibold mb-2 text-[#111827]">Payments, Usage & Billing</h3>
                        <p class="text-sm text-[#374151]">Create digital products and SaaS billing with flexible pricing models and seamless payment processing.</p>
                    </article>

                    <article class="p-6 bg-white rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-2 text-[#111827]">Customer Management</h3>
                        <p class="text-sm text-[#374151]">Streamlined customer lifecycle management with detailed profiles and analytics.</p>
                    </article>

                    <article class="p-6 bg-white rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-2 text-[#111827]">Global Merchant of Record</h3>
                        <p class="text-sm text-[#374151]">Focus on your product while we handle tax compliance and payouts worldwide.</p>
                    </article>
                </div> --}}

            </div>





        </section>
<footer class="bg-white dark:bg-[#17466E] w-full">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-white sm:text-center dark:text-white">© 2025 <a href="" class="hover:underline">SOCIEDADE BRASILEIRA DE CIRUGIA PLÁSTICA</a>. Todos os direitos reservados.</span>

      <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li><a href="#header" id="nav-header" class="px-4 py-2 rounded-full bg-[#01AAAD] text-white font-medium hover:bg-[#05989b] transition">CADASTRAR</a></li>


      </ul>
    </div>
</footer>
        <script>
            (function(){
                var bg = document.getElementById('hero-bg');
                if (!bg) return;
                var ticking = false;
                function onScroll(){
                    if (!ticking) {
                        window.requestAnimationFrame(function(){
                            var sc = window.pageYOffset || document.documentElement.scrollTop;
                            var offset = Math.round(sc * 0.35); // parallax factor
                            bg.style.transform = 'translate3d(-50%,' + offset + 'px, 0)';
                            ticking = false;
                        });
                        ticking = true;
                    }
                }
                window.addEventListener('scroll', onScroll, { passive: true });
                // initialize
                onScroll();
            })();
        </script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const link = document.getElementById('nav-saiba');
    if (!link) return;
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.getElementById('features');
        if (!target) return;
        const header = document.querySelector('header');
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const gap = 16; // ajuste espacio entre header y sección
        const top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - gap;
        window.scrollTo({ top, behavior: 'smooth' });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var link = document.getElementById('nav-header');
    if (!link) return;
    link.addEventListener('click', function (e) {
        e.preventDefault();
        var headerEl = document.querySelector('header');
        if (!headerEl) return;
        var headerTop = headerEl.getBoundingClientRect().top + window.pageYOffset;
        var offset = 8; // ajuste si quieres un pequeño espacio entre top y header
        window.scrollTo({ top: headerTop - offset, behavior: 'smooth' });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.toggle-more-btn').forEach(function(btn){
    btn.addEventListener('click', function(e){
      e.preventDefault();
      var id = btn.getAttribute('aria-controls');
      var panel = document.getElementById(id);
      if (!panel) return;

      // Cerrar otros panels
      document.querySelectorAll('.more-results').forEach(function(p){
        if (p !== panel) {
          p.classList.add('hidden');
          p.setAttribute('aria-hidden', 'true');
        }
      });

      var expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      panel.classList.toggle('hidden');
      panel.setAttribute('aria-hidden', expanded ? 'true' : 'false');
    });
  });

  // Cerrar al hacer click fuera
  document.addEventListener('click', function(e){
    if (!e.target.closest('.toggle-more-btn') && !e.target.closest('.more-results')) {
      document.querySelectorAll('.more-results').forEach(function(p){
        p.classList.add('hidden');
        p.setAttribute('aria-hidden', 'true');
      });
      document.querySelectorAll('.toggle-more-btn').forEach(function(b){ b.setAttribute('aria-expanded','false'); });
    }
  });
});
</script>
    </body>
</html>
