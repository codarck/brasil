

<div class="bg-[#00305B] px-6 py-4 rounded-b-md flex items-center justify-between gap-4">
    <!-- esquerda: logo + tipo de conta -->
    <div class="flex items-center gap-4">
      {{-- <img src="http://localhost/logo.png" alt="Logo" class="h-10 w-auto rounded"> --}}
      <span
    class="inline-flex items-center justify-center w-20 h-20 rounded-full ring-4 ring-emerald-300 border border-white/20 shadow-md"
    style="background-image: linear-gradient(rgba(3,163,165,0.55), rgba(3,163,165,0.55)), url('https://www.cirurgiaplastica.org.br/wp-content/uploads/2017/10/banner_regionais.jpg'); background-size:cover; background-position:center;">
    <span class="text-white font-bold text-lg drop-shadow-md">IASBCP</span>
  </span>
      <div>
        <div class="text-xl text-white/80">Tipo de conta: Cirurgião Plástico — Residente</div>

      </div>
    </div>



    <!-- direita: buscar, estágio, chat e seguidores -->

      {{-- <div class="flex items-center gap-3 text-white text-xl">
        <div>Estágio: <span class="font-semibold">On-line</span></div>

        <button class="relative inline-flex items-center p-2 bg-white/10 hover:bg-white/15 rounded-full text-white" title="Chat interativo">
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.84L3 21l1.84-4.16A8.96 8.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
          <span class="absolute -top-1 -right-1 bg-emerald-500 text-xs text-white rounded-full px-1">3</span>
        </button>

        <div>Seguidores <span class="font-semibold ml-1">5</span></div>
      </div> --}}


  </div>
<div class="bg-white/10 px-6 rounded-b-md flex items-center justify-between gap-4">
  <nav class="flex-1 flex items-center gap-6 text-xl">
  <a class="flex-1 text-center text-white hover:underline  @if (request()->routeIs('dashboard')) bg-emerald-500 @else bg-[#17466E] @endif" href="/dashboard">Perfil</a>

  <a class="flex-1 text-center text-white hover:underline  @if (request()->routeIs('documentos')) bg-emerald-500 @else bg-[#17466E] @endif" href="/documentos">Documentação</a>
    <a class="flex-1 text-center text-white hover:underline  @if (request()->routeIs('estagio')) bg-emerald-500 @else bg-[#17466E] @endif" href="/estagio">Estágio</a>
  <a class="flex-1 text-center text-white hover:underline  @if (request()->routeIs('solicitudes')) bg-emerald-500 @else bg-[#17466E] @endif" href="/solicitudes">Solicitações</a>


  <a class="flex-1 text-center text-white hover:underline @if (request()->routeIs('favoritos')) bg-emerald-500 @else bg-[#17466E] @endif" href="/favoritos">Favoritos</a>
   <a class="flex-1 text-center text-white hover:underline @if (request()->routeIs('chat')) bg-emerald-500 @else bg-[#17466E] @endif" href="/chat">Chat interativo</a>

</nav>

   <div class="flex items-center gap-4">
  <form role="search" class="relative">
    <!-- lupa a la izquierda dentro del input -->
    <span class="absolute left-3 top-1/2 z-10 -translate-y-1/2 text-white/70 pointer-events-none">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
      </svg>
    </span>

    <input id="nav-search" name="q" type="search" aria-label="Buscar"
      placeholder="Buscar"
      class="pl-10 pr-10 py-2 w-40 sm:w-56 lg:w-80 text-white placeholder-white/70 bg-white/5 backdrop-blur-sm rounded-md border border-white/10 outline-none focus:ring-2 focus:ring-emerald-400 transition" />

    <button type="button" onclick="document.getElementById('nav-search').value='';"
      class="absolute right-1 top-1/2 -translate-y-1/2 text-white/70 hover:text-white p-1 rounded">
      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </form>
</div>


</div>







<div class="pb-8"></div>
