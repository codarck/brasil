<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<style>
  /* backdrop full-viewport y siempre encima */
  .fixed[aria-hidden="false"]{
    position: fixed;
    inset: 0;                 /* top:0; right:0; bottom:0; left:0 */
    height: 100vh !important;
    width: 100%;
    background-color: rgba(0,0,0,0.65); /* ajustar opacidad */
    backdrop-filter: blur(2px);
    -webkit-backdrop-filter: blur(2px);
    display: flex !important;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    z-index: 9999999 !important; /* asegurarse de que esté por encima de widgets */
  }

  /* limitar el contenido del modal sin dejar gaps visibles */
  .fixed[aria-hidden="false"] > .relative {
    max-height: calc(100vh - 4rem);
    overflow: auto;
  }

  /* evitar scroll de página cuando modal abierto */
  body.modal-open { overflow: hidden; }
</style>
<!-- Flowbite JS (necesario para manejar data-modal-toggle / data-modal-target) -->


<!-- Fallback: delegación ligera por si Flowbite no está disponible o en HTML dinámico -->
<script>
  (function(){
    function openModal(id){
      const m = document.getElementById(id);
      if(!m) return;
      m.classList.remove('hidden');
      m.style.display = 'flex';
      m.setAttribute('aria-hidden','false');
      document.body.classList.add('modal-open');
    }
    function closeModal(target){
      const m = typeof target === 'string' ? document.getElementById(target) : target;
      if(!m) return;
      m.classList.add('hidden');
      m.style.display = 'none';
      m.setAttribute('aria-hidden','true');
      document.body.classList.remove('modal-open');
    }
    document.addEventListener('click', function(e){
      const btn = e.target.closest('[data-modal-toggle],[data-modal-target],[data-modal-hide]');
      if(!btn) return;
      if(btn.hasAttribute('data-modal-hide')){
        e.preventDefault();
        const tid = btn.getAttribute('data-modal-hide');
        if(tid) closeModal(tid);
        else {
          const modalAncestor = btn.closest('.fixed[id]');
          closeModal(modalAncestor);
        }
        return;
      }
      const target = btn.getAttribute('data-modal-toggle') || btn.getAttribute('data-modal-target');
      if(target){ e.preventDefault(); openModal(target); }
    });
    document.addEventListener('keydown', function(e){
      if(e.key === 'Escape') document.querySelectorAll('.fixed[aria-hidden="false"]').forEach(m=>closeModal(m));
    });
    document.addEventListener('click', function(e){
      const el = e.target;
      if(el && el.classList && el.classList.contains('fixed') && el.getAttribute('aria-hidden') === 'false') closeModal(el);
    });
  })();
</script>
<style>
    #fullscreen-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
    body.loading {
        overflow: hidden;
    }
    .spinner {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: spin 1s linear infinite;
    }
</style>
    <div id="fullscreen-loader" class="hidden" style="display: none;">
        <div class="spinner"></div> cargando...
    </div>

  <div class=" mx-auto p-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Sidebar: filtros -->
      <aside class="lg:col-span-1 bg-white/5 p-4 rounded border border-white/10 text-white">
        <h3 class="font-semibold mb-3">Filtros</h3>



        <label class="block text-base mb-2">Estado</label>

        <!-- buscador + select (select conserva el valor para el resto del JS) -->
        <div class="relative mb-3">
          <input id="estado-search" type="search" placeholder="Buscar estado..." autocomplete="off"
            class="w-full p-2 rounded bg-white/3 text-black placeholder-black/40" />
          <ul id="estado-list"  class="absolute z-50 mt-1 w-full max-h-40 overflow-auto bg-white/95 text-black rounded shadow-md hidden"></ul>

          <select id="filter-estado" class="hidden">
            <option value="">Todos</option>
            <option value="SP">São Paulo (SP)</option>
            <option value="RJ">Rio de Janeiro (RJ)</option>
          </select>
        </div>

        <label class="block text-base mb-2">Cidade</label>

        <!-- buscador + select para cidades (se carga desde IBGE según estado) -->
        <div class="relative mb-3">
          <input id="cidade-search" type="search" placeholder="Buscar cidade..." autocomplete="off"
            class="w-full p-2 rounded bg-white/3 text-black placeholder-black/40" />
          <ul id="cidade-list" class="absolute z-50 mt-1 w-full max-h-40 overflow-auto bg-white/95 text-black rounded shadow-md hidden"></ul>

          <!-- select oculto que mantiene el valor para el resto del JS -->
          <select id="filter-cidade" class="hidden">
            <option value="">Todas</option>
          </select>
        </div>

        <label class="block text-base mb-2">Bairro</label>
        <div class="relative mb-3">
          <input id="bairro-search" type="search" placeholder="" autocomplete="off"
            class="w-full p-2 rounded bg-white/3 text-black placeholder-black/40" />
          <ul id="bairro-list" class="absolute z-50 mt-1 w-full max-h-40 overflow-auto bg-white/95 text-black rounded shadow-md hidden"></ul>

          <!-- select oculto: lo dejamos para que el JS continúe funcionando, pero el usuario
               interactuará únicamente con el buscador (input + lista) -->
          <select id="filter-bairro" class="hidden">
            <option value="">Todos</option>
            <option value="Brooklin">Brooklin</option>
            <option value="Pinheiros">Pinheiros</option>
            <option value="Copacabana">Copacabana</option>
          </select>

          <div class="relative mb-3">
          <div id="bairro-multi" class="flex flex-wrap items-center gap-2 p-2 rounded bg-white/3">
            <div id="bairro-tags" class="flex flex-wrap gap-2"></div>

          </div>
          <!-- hidden field updated to avoid id collision with the visible <select id="filter-bairro"> -->
          <input id="filter-bairro-hidden" type="hidden" value="" />
          <ul id="bairro-suggestions" class=" absolute z-50 mt-1 w-full max-h-40 overflow-auto bg-white/95 text-black rounded shadow-md hidden"></ul>

          <!-- hidden value para integrarlo con tu JS existente -->

        </div>
        </div>

        <label class="block text-base mb-2">Estagio</label> <!-- escribir o seleccionar -->
        <select id="" class="w-full p-2 rounded bg-white/3 mb-3 text-black">
          <option value="">Todos</option>
          <option value="Brooklin">Cirurgia crânio-maxilo-facial </option>
          <option value="Pinheiros">Tratamento de queimados</option>
          <option value="Copacabana">Microcirurgia</option>
          <option value="Pinheiros">Cirurgia da mão</option>
          <option value="Pinheiros">Cirurgia reparadora</option>
          <option value="Pinheiros">Cirurgia estetica</option>
        </select>
<label class="block text-base mb-2">Preferências do cirurgião (palavras-chave)</label>
<div class="relative mb-3">
  <div id="pref-multi" class="flex flex-wrap items-center gap-2 rounded bg-white/3">

    <input id="pref-search" type="text" placeholder="Escribe y presiona Enter..." autocomplete="off"
      class="w-full p-2 rounded bg-white/3 mb-3 text-black" />
  </div>
<div id="pref-tags" class="flex flex-wrap gap-2"></div>
  <ul id="pref-suggestions" class="absolute z-50 mt-1 w-full max-h-40 overflow-auto bg-white/95 text-black rounded shadow-md hidden"></ul>

  <input id="filter-preferencia" type="hidden" value="" />
</div>
<label class="block text-base mb-2">Local de trabalho</label> <!-- escribir-->
<div class="relative mb-3">
  <div id="local-multi" class="flex flex-wrap items-center gap-2  rounded bg-white/3">
    <input id="local-search" type="text" placeholder="Escribe y presiona Enter..." autocomplete="off"
      class="w-full p-2 rounded bg-white/3 mb-3 text-black" />
  </div>

  <div id="local-tags" class="flex flex-wrap gap-2 mt-2"></div>

  <ul id="local-suggestions" class="absolute z-50 mt-1 w-full max-h-40 overflow-auto bg-white/95 text-black rounded shadow-md hidden"></ul>

  <!-- valor oculto que envía/usa el resto del JS (coma-separado) -->
  <input id="filter-local-hidden" type="hidden" name="local_trabalho" value="" />
</div>
 <label class="block text-base mb-2">Data de início</label> <!-- escribir-->
       <input type="date" class="w-full p-2 rounded bg-white/3 mb-3 text-black">
 <label class="block text-base mb-2">Data de término</label> <!-- escribir-->
       <input type="date" class="w-full p-2 rounded bg-white/3 mb-3 text-black">


         {{-- <label class="block text-base mb-2">Nome do professor credenciado </label>

        <!-- buscador + select (select conserva el valor para el resto del JS) -->
        <div class="relative mb-3">

          <input type="text" placeholder="Nome do professor credenciado " class="w-full p-2 rounded bg-white/3 text-black placeholder-black/40" />
        </div>
<label class="block text-base mb-2">Nome do Serviço, Hospital ou Clinica   </label>

        <!-- buscador + select (select conserva el valor para el resto del JS) -->
        <div class="relative mb-3">

          <input type="text" placeholder="Nome do Serviço, Hospital ou Clinica " class="w-full p-2 rounded bg-white/3 text-black placeholder-black/40" />
        </div> --}}




        <label class="block text-base mb-2"> Faixa de avaliação requerida <br>(mín / máx)</label>

<div class="mb-4">
  <div class="relative px-2 py-4 bg-transparent">
    <div id="stars-markers" class="relative h-6 mb-2">
      <div class="absolute left-0 top-0 ml-4 transform -translate-x-1/2 text-white/50">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.75l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.635-8.694L.6 9.75l7.732-1.732z"/></svg>
      </div>
      <div class="absolute left-1/4 top-0 ml-4 transform -translate-x-1/2 text-white/50">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.75l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.635-8.694L.6 9.75l7.732-1.732z"/></svg>
      </div>
      <div class="absolute left-1/2 top-0 ml-4 transform -translate-x-1/2 text-white/50">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.75l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.635-8.694L.6 9.75l7.732-1.732z"/></svg>
      </div>
      <div class="absolute left-3/4 top-0 ml-4 transform -translate-x-1/2 text-white/50">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.75l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.635-8.694L.6 9.75l7.732-1.732z"/></svg>
      </div>
      <div class="absolute right-0 top-0 mr-2 transform translate-x-1/2 text-white/50">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L23.4 9.75l-5.7 5.556L19.335 24 12 19.897 4.665 24l1.635-8.694L.6 9.75l7.732-1.732z"/></svg>
      </div>
    </div>

    <!-- custom dual-thumb track -->
    <div id="star-range" class="relative mt-2 h-8">
      <div class="absolute inset-0 h-3 bg-white/10  hover:bg-emerald-500 rounded top-2"></div>
      <div id="range-highlight" class="absolute h-3 bg-emerald-500 rounded top-2" style="left:0%; width:100%"></div>

      <!-- thumbs -->
      <div id="thumb-min" class="absolute w-5 h-5 bg-white rounded-full shadow -translate-y-1/2 top-3 cursor-pointer" style="left:0%;"></div>
      <div id="thumb-max" class="absolute w-5 h-5 bg-white rounded-full shadow -translate-y-1/2 top-3 cursor-pointer" style="left:100%;"></div>

      <!-- hidden values usados por applyFilters -->
      <input id="filter-stars-min" type="hidden" value="0" />
      <input id="filter-stars-max" type="hidden" value="5" />
    </div>

    <div class="mt-3 flex justify-between text-base text-white/80">
      <div>Min: <span id="stars-min-val">0</span> ⭐</div>
      <div>Max: <span id="stars-max-val">5</span> ⭐</div>
    </div>
  </div>
</div>
{{-- id="applyFilters" --}}
        <button  onclick="loading()" class="w-full px-4 py-2 bg-white/10  hover:bg-emerald-600 rounded text-white">Aplicar filtros</button>
        <button id="resetFilters" class="w-full mt-2 px-4 py-2 bg-white/10 hover:bg-emerald-600 rounded text-white">Cancelar filtros</button>
        <button id="btnIASBCP" class="w-full mt-2 px-4 py-2 bg-white/10 hover:bg-emerald-600 rounded text-white">Buscar com IASBCP</button>
      </aside>

      <!-- Resultados / lista y mapa -->
      <main class="lg:col-span-3">
        <div class="bg-white/10 px-6 rounded-b-md mb-4">
  <!-- primera fila: botones y contador (sin el buscador) -->
    <div class="flex items-start justify-between gap-4">
    <div>
      <div class="flex gap-2 items-center">
        <button type="button" data-value="servico"
          class="category-btn px-3 py-1 rounded bg-white/5 text-white hover:bg-white/10 transition text-sm">
          Serviços de Cirurgias Plástica
        </button>

        <button type="button" data-value="credenciados"
          class="category-btn px-3 py-1 rounded bg-white/5 text-white hover:bg-white/10 transition text-sm">
          Hospitais e Clínicas credenciados
        </button>



        <button type="button" data-value="professor"
          class="category-btn px-3 py-1 rounded bg-white/5 text-white hover:bg-white/10 transition text-sm">
          Professores credenciados
        </button>
<button type="button" data-value="formado"
          class="category-btn px-3 py-1 rounded bg-white/5 text-white hover:bg-white/10 transition text-sm">
          Otros usuarios
        </button>
        <input id="filter-category" type="hidden" value="" />
      </div>

      <p id="results-count" class="text-sm text-white/70 mt-2">0 resultados</p>
    </div>

    <!-- espacio para controles adicionales a la derecha (vacío por ahora) -->
    <div class="flex items-center"></div>
  </div>


  <!-- segunda fila: buscador ALINEADO A LA DERECHA, separado de la fila de botones -->
  <div class="mt-3 flex justify-end">
    <input id="global-search" type="search" placeholder="Buscar por nombre, clínica..."
      class="pl-10 pr-3 py-2 text-white placeholder-white/70 bg-transparent rounded-md border border-white/10 outline-none focus:ring-2 focus:ring-emerald-400 transition w-56" />
  </div>



  <!-- keep this area empty or use for other controls -->
  <div class="flex items-center">
    <!-- optional right-side controls -->
  </div>
</div>

<div class="grid lg:grid-cols-2 gap-4 mb-4 hidden" id="loading" style="display: none;" hidden>




    <div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Andre_P_Castro.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>


          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Clínica de Cirurgia Plástica - Dr André Parreira de Castro</div>
                <div class="text-base text-white/70">Clínica, Moema, São Paulo</div>
              </div>
              <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">3.1km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia Estética
    </span>

                <br>
                {{-- contorno corporal, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, Cosmiatria --}}
Palavras chave: <br>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    orbitopalpebral
</span>

<div id="keyword1" hidden>
    <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    rinoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cosmiatria
</span>
</div>

</div> <div class="text-white " id="keyword1-toggle"> <button onclick="keyword1();">...</button></div>

            <div class="mt-3 flex gap-2">
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button data-modal-target="detalhes_estagio2" data-modal-toggle="detalhes_estagio2" class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
          </div>
        </div>
      </div>



<!-- Cards estáticos (sin JS) -->
  <div class="bg-white/5 p-4 rounded border border-white/10" >
      <div class="flex items-start gap-3">
        <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/aline.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
        <div class="flex-1">
          <div class="flex justify-between items-start gap-2" >
            <div>
              <div class="font-semibold text-white">Dra Aline Campos</div>
              <div class="text-base text-white/70">Cirurgiã plástica credenciada, Moema, São Paulo </div>
            </div>
            <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="https://www.google.com/maps/place/Hospital+Ruben+Berta/@-23.6024194,-46.6517301,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce5a17deee9531:0x6e8b52fafaffd6e8!8m2!3d-23.6024194!4d-46.6517301!16s%2Fg%2F1tqnmry7?entry=ttu&g_ep=EgoyMDI1MTAyOS4yIKXMDSoASAFQAw%3D%3D"><div class="text-sm">5.2km</div></a>
                  </div>
          </div>
          <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>


<br>
Palavras-chave:
{{-- cirurgia estética da face, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral  --}}
</div>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span id="keyword3" hidden>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética pós bariátrica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cosmiatria
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    orbitopalpebral
</span>
</span>
<span class="text-white" id="keyword3-toggle"> <button onclick="keyword3()">...</button></span>
          <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10 hover:bg-emerald-500 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button data-modal-target="detalhes_estagio2" data-modal-toggle="detalhes_estagio2"  class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
        </div>
      </div>
    </div>


    <div class="bg-white/5 p-4 rounded border border-white/10" >
      <div class="flex items-start gap-3">
        <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/victor.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
        <div class="flex-1">
          <div class="flex justify-between items-start gap-2" >
            <div>
              <div class="font-semibold text-white">Dr Vitor Zanatta</div>
              <div class="text-base text-white/70">Cirurgião plástico credenciado, Moema, São Paulo</div>
            </div>
            <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">5.2km</div></a>
                  </div>
          </div>
          <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética
</span>
            </div>

<br>
<span class="text-white">Palavras-chave:</span>
            <br>

{{-- Palavras-chave: cirurgia mamaria, contorno corporal, cirurgia estética da face, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral --}}

<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamaria
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="text-white">...</span>
          <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button data-modal-target="detalhes_estagio3" data-modal-toggle="detalhes_estagio3" class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
        </div>
      </div>

    </div>































      <div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Hospital_Municipal_Infantil.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Hospital Municipal Infantil Menino Jesus</div>
                <div class="text-base text-white/70">Hospital, Bela Vista, São Paulo</div>
              </div>
<div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">12km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>
                 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia crânio-maxilo-facial
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Tratamento de queimados
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia reparadora
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Microcirurgia
</span>
                 <br>
Palavras chave: <br>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   defeitos da face
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia reparadora de face
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   grande queimado infantil
</span>
<span class="text-white">...</span>
</div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
          </div>
        </div>
      </div>








<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/IBCC_Oncologia.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>

          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">IBCC Oncologia - Instituto Brasileiro de Controle do Câncer</div>
                <div class="text-base text-white/70">Hospital, Mooca, São Paulo
</div>
              </div>
<div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">15km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>


                 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia reparadora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    microcirurgia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia de mão
</span>
Palavras chave: <br>
{{-- Cirurgia reparadora mamária, retalhos, enxertos, microcirurgia --}}
</div>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia reparadora mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    retalhos
</span>


<span class="text-white">...</span>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
          </div>
        </div>
      </div>












<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Clínica_Plastique.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>

          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Clínica Plastiquè</div>
                <div class="text-base text-white/70">Clínica, Tatuapé, São Paulo</div>
              </div>
<div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="https://www.google.com/maps/place/Cl%C3%ADnica+Plastiqu%C3%A8/@-23.5404383,-46.5713929,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce5ee97e81fdff:0xf25dc0edff92161d!8m2!3d-23.5404383!4d-46.5713929!16s%2Fg%2F1pv19p7t9?entry=ttu&g_ep=EgoyMDI1MTAyOS4yIKXMDSoASAFQAw%3D%3D"><div class="text-sm">18km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia Estética
</span>
                <br>
Palavras chave: <br>
 {{-- contorno corporal, lipoaspiração de alta definição, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, cirurgia estética pós bariátrica, Cosmiatria --}}
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   lipoaspiração de alta definição
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia mamária
</span>
<span class="text-white">...</span>
</div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>

          </div>
        </div>
      </div>





 <div class="bg-white/5 p-4 rounded border border-white/10" >
      <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/lucas.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
        <div class="flex-1">
          <div class="flex justify-between items-start gap-2" >
            <div>
              <div class="font-semibold text-white">Dr Lucas Rinaldi</div>
              <div class="text-base text-white/70">Cirurgião plástico credenciado, Tatuapé, São Paulo</div>
            </div>
            <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">18km</div></a>
                  </div>
          </div>
          <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia Estética
</span>
                <br>
Palavras chave: <br>
 {{-- contorno corporal, lipoaspiração de alta definição, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, cirurgia estética pós bariátrica, Cosmiatria --}}
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   lipoaspiração de alta definição
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia mamária
</span>
<span id="keyword5" hidden>
    <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   orbitopalpebral
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   rinoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética pós bariátrica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cosmiatria
</span>
</span>
<span class="text-white" id="keyword5-toggle"> <button onclick="keyword5()">...</button></span>
</div>
          <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button  class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
        </div>
      </div>

    </div>






<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Hospital_Vila_Penteado.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="flex items-start justify-between gap-4">
                  <div class="font-semibold text-white">Setor de Cirurgia Plástica e Unidade de Terapia de Queimados</div>
                  <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">21km</div></a>
                  </div>
                </div>

                <div class="text-base text-white/70">Hospital Vila Penteado
Hospital, Jardim Iracema, São Paulo</div>
              </div>

            </div>
            <div class="mt-3 text-base text-white/70">
                Estágios credenciados:  <br>
                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Tratamento de queimados
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia de mão
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
                 <br >
{{-- Palavras chave: grande queimado, cirurgia reparadora, retalhos, enxertos. --}}
</div>
<span class="text-white">Palavras-chave:</span>
            <br>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    grande queimado
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    retalhos
</span>
<span class="text-white">...</span>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>


          </div>
        </div>
      </div>









<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/stella.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Hospital Stella Maris</div>
                <div class="text-base text-white/70">Hospital, Guarulhos, São Paulo</div>
              </div>
<div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">27km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados:
                  <br>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia Estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia reparadora
</span><br>
Palavras chave: <br>

{{-- contorno corporal, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, cirurgia estética pós bariátrica, enxertos, retalhos, cirurgia oncológica da pele.--}}
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    orbitopalpebral
</span>
<span class="text-white">...</span>
</div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
          </div>
        </div>
      </div>







<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/oswaldo.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="flex items-start justify-between gap-4">
                  <div class="font-semibold text-white">Serviço de Cirurgia Plástica Dr. Oswaldo de Castro</div>
                  <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">27km</div></a>
                  </div>
                </div>

                <div class="text-base text-white/70">Serviço de cirurgia plástica, Guarulhos, São Paulo
</div>
              </div>

            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>
                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia Estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia reparadora
</span>
                  <br >

                {{-- Palavras chave: Cirurgia mamária, contorno corporal, orbitopalpebral, rinoplastia, cirurgia estética da face, cirurgia estética pós bariátrica, cosmiatria, enxertos, retalhos, cirurgia oncológica da pele --}}
<span class="text-white">Palavras-chave:</span>
            <br>

            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamaria
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    orbitopalpebral
</span>
<span class="text-white">...</span>
            </div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>


          </div>
        </div>
      </div>










<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/sony.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Dr Sonny Chen</div>
                <div class="text-base text-white/70">Residente de 1• ano, Serviço de Cirurgia Plástica Dr. Oswaldo de Castro, Moema, São Paulo
</div>
              </div>
<div class="text-right">
            <div class="text-white font-medium">4.5 ⭐</div>

          </div>

            </div>
            <div class="text-base text-white/60">Preferências: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
            </div>
            <div class="mt-3 text-base text-white/70">Palavras-chave: <br>

                {{-- cirurgia mamária, contorno corporal, cirurgia estética da face, rinoplastia, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral  --}}
                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="text-white">...</span>
            </div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>

          </div>
          </div>
        </div>
      </div>

      <div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/kague.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Dr Kaue Sucena</div>
                <div class="text-base text-white/70">Residente de 3º ano - Serviço de Cirurgia Plástica Dr. Oswaldo de Castro — Aclimação, São Paulo</div>
              </div>
              <div class="text-right">
            <div class="text-white font-medium">4.7 ⭐</div>

          </div>
            </div>
            <div class="text-base text-white/60">Preferências: <br>

            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>

            </div>
            <div class="mt-3 text-base text-white/70">Palavras-chave: <br>
                {{-- cirurgia mamária, contorno corporal, cirurgia estética da face, rinoplastia, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral --}}
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="text-white">...</span>
            </div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>

          </div>
          </div>
        </div>
      </div>




















        </div>
      </div>



        {{-- <div class="bg-white/5 p-4 rounded border border-white/10 text-white">
          <div class="font-semibold mb-2">Mapa / Ubicación</div>

          <!-- Reemplazo: mostrar solo lista visual de distancias (km) -->
          <div id="mapPlaceholder" class="w-full h-48 bg-white/6 rounded p-3 text-white/80 overflow-auto" style="display:none;">
            <div id="distance-list" class="space-y-2" >
              <!-- JS llenará aquí: Nombre — X.X km -->
            </div>
          </div>
        </div> --}}
      </main>
    </div>
  </div>

  <script>
    // Datos de ejemplo (reemplazar por backend)
    const DATA = [
      { id:1, tipo:'Cirurgião', nome:'Dra Aline Campos', estado:'SP', cidade:'São Paulo', bairro:'Brooklin', estrelas:4.5, preferencias:['Reconstrução','Estética'], instituicao:'Serviço de Cirurgia Plástica Dr. Oswaldo de Castro' },
      { id:2, tipo:'Serviço', nome:'Dr Vitor Zanatta', estado:'SP', cidade:'São Paulo', bairro:'Pinheiros', estrelas:4.0, preferencias:['Estética'], instituicao:'Clínica Nova Forma' },
      { id:3, tipo:'Hospital', nome:'Hospital Central', estado:'RJ', cidade:'Rio de Janeiro', bairro:'Copacabana', estrelas:3.8, preferencias:['Reconstrução'], instituicao:'Hospital Central' },
      // ...más items
    ];

    // helpers
    const $ = sel => document.querySelector(sel);
    const $$ = sel => Array.from(document.querySelectorAll(sel));

    function populateCidadeOptions() {
      const estado = $('#filter-estado').value;
      const cidadeSel = $('#filter-cidade');
      cidadeSel.innerHTML = '<option value="">Todas</option>';
      const cidadesPorEstado = {
        'SP': ['São Paulo'],
        'RJ': ['Rio de Janeiro']
      };
      (cidadesPorEstado[estado] || []).forEach(c => {
        const opt = document.createElement('option');
        opt.value = c; opt.textContent = c;
        cidadeSel.appendChild(opt);
      });
    }

    function renderCard(item) {
      return `
      <div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">${item.nome.split(' ')[0].slice(0,2)}</div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">${item.nome}</div>
                <div class="text-base text-white/70">${item.instituicao || item.tipo} — ${item.bairro}, ${item.cidade}</div>
              </div>
              <div class="text-right">
                <div class="text-white font-medium">${item.estrelas} ⭐</div>
                <div class="text-xs text-white/60">${item.tipo}</div>
              </div>
            </div>
            <div class="mt-3 text-base text-white/70">Preferências: ${item.preferencias.join(', ')}</div>
            <div class="mt-3 flex gap-2">
              <a href="dashboard" class="px-3 py-1 bg-emerald-600 rounded text-white text-base" ">Contactar</a>
              <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base" onclick="viewProfile(${item.id})">Ver perfil</button>
            </div>
          </div>
        </div>
      </div>`;
    }
   document.addEventListener('DOMContentLoaded', function () {
    const rangeEl = document.getElementById('star-range');
    const thumbMin = document.getElementById('thumb-min');
    const thumbMax = document.getElementById('thumb-max');
    const highlight = document.getElementById('range-highlight');
    const hiddenMin = document.getElementById('filter-stars-min');
    const hiddenMax = document.getElementById('filter-stars-max');
    const minValEl = document.getElementById('stars-min-val');
    const maxValEl = document.getElementById('stars-max-val');
    const starsSvgs = document.querySelectorAll('#stars-markers svg');

    const MIN = 0, MAX = 5, STEP = 0.1;

    function clamp(v, a, b){ return Math.min(b, Math.max(a, v)); }
    function roundStep(v){ return Math.round(v/STEP)*STEP; }
    function percentToValue(p){ return MIN + (p/100)*(MAX-MIN); }
    function valueToPercent(v){ return ((v - MIN) / (MAX - MIN)) * 100; }

    let dragging = null; // 'min' | 'max' | null

    function updateUI(minVal, maxVal){
      minVal = clamp(roundStep(minVal), MIN, MAX);
      maxVal = clamp(roundStep(maxVal), MIN, MAX);
      // ensure order
      if (minVal > maxVal) { const t = minVal; minVal = maxVal; maxVal = t; }

      hiddenMin.value = minVal;
      hiddenMax.value = maxVal;
      minValEl.textContent = (Number(minVal).toFixed(1)).replace('.0','');
      maxValEl.textContent = (Number(maxVal).toFixed(1)).replace('.0','');

      const left = valueToPercent(minVal);
      const right = valueToPercent(maxVal);
      thumbMin.style.left = left + '%';
      thumbMax.style.left = right + '%';
      highlight.style.left = left + '%';
      highlight.style.width = (right - left) + '%';

      // color stars that fall within range
      const positions = [0,25,50,75,100];
      starsSvgs.forEach((svg, i) => {
        const pos = positions[i];
        if (pos >= left && pos <= right) svg.classList.add('text-amber-400'), svg.classList.remove('text-white/50');
        else svg.classList.remove('text-amber-400'), svg.classList.add('text-white/50');
      });
    }

    // start with full range
    updateUI(MIN, MAX);

    function getRelativePercent(clientX){
      const rect = rangeEl.getBoundingClientRect();
      const x = clamp(clientX - rect.left, 0, rect.width);
      return (x / rect.width) * 100;
    }

    function pointerDownHandler(e){
      e.preventDefault();
      const p = getRelativePercent(e.clientX ?? (e.touches && e.touches[0].clientX));
      const v = percentToValue(p);

      // decide thumb más cercano
      const curMin = parseFloat(hiddenMin.value);
      const curMax = parseFloat(hiddenMax.value);
      const dMin = Math.abs(v - curMin);
      const dMax = Math.abs(v - curMax);
      dragging = (dMin <= dMax) ? 'min' : 'max';

      // on pointermove update dragging
      window.addEventListener('pointermove', pointerMoveHandler);
      window.addEventListener('pointerup', pointerUpHandler);

      // immediately set value
      if (dragging === 'min') updateUI(v, curMax);
      else updateUI(curMin, v);
    }

    function pointerMoveHandler(e){
      e.preventDefault();
      if (!dragging) return;
      const p = getRelativePercent(e.clientX ?? (e.touches && e.touches[0].clientX));
      const v = percentToValue(p);
      const curMin = parseFloat(hiddenMin.value);
      const curMax = parseFloat(hiddenMax.value);

      if (dragging === 'min') updateUI(v, curMax);
      else updateUI(curMin, v);
    }

    function pointerUpHandler(e){
      dragging = null;
      window.removeEventListener('pointermove', pointerMoveHandler);
      window.removeEventListener('pointerup', pointerUpHandler);
    }

    // allow dragging by clicking thumbs too
    thumbMin.addEventListener('pointerdown', function(e){ dragging = 'min'; window.addEventListener('pointermove', pointerMoveHandler); window.addEventListener('pointerup', pointerUpHandler); });
    thumbMax.addEventListener('pointerdown', function(e){ dragging = 'max'; window.addEventListener('pointermove', pointerMoveHandler); window.addEventListener('pointerup', pointerUpHandler); });

    // clicking on the track picks nearest thumb
    rangeEl.addEventListener('pointerdown', pointerDownHandler);

    // expose values to applyFilters (button handler uses hiddenMin/hiddenMax)
  });
  </script>

<script>
document.addEventListener('DOMContentLoaded', function(){

  // --- IBGE endpoints ---
  const IBGE_STATES = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome';
  function ibgeCitiesUrl(uf){ return `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${encodeURIComponent(uf)}/municipios?orderBy=nome`; }

  // DOM refs (IDs used in markup)
  const estadoSearch = document.getElementById('estado-search');
  const estadoList = document.getElementById('estado-list');
  const estadoSelect = document.getElementById('filter-estado');

  const cidadeSearch = document.getElementById('cidade-search');
  const cidadeList = document.getElementById('cidade-list');
  const cidadeSelect = document.getElementById('filter-cidade');

  const bairroSearch = document.getElementById('bairro-search');
  const bairroList = document.getElementById('bairro-list');
  const bairroSelect = document.getElementById('filter-bairro');

  // guard: stop if essential nodes missing
  if (!estadoSearch || !estadoList || !estadoSelect) return;

  // cache
  let STATES = [];
  const CITIES_CACHE = {}; // { UF: [ {id,nome}, ... ] }

  // helpers
  const hide = el => el && el.classList.add('hidden');
  const show = el => el && el.classList.remove('hidden');

  // load states (IBGE) and populate estado-list + hidden select
  fetch(IBGE_STATES)
    .then(r => r.ok ? r.json() : Promise.reject(r.status))
    .then(data => {
      STATES = data.map(s => ({ sigla: s.sigla, nome: s.nome }));
      // fill hidden select (keeps compatibility)
      STATES.forEach(s => {
        if (![...estadoSelect.options].some(o=>o.value===s.sigla)){
          const opt = document.createElement('option'); opt.value = s.sigla; opt.textContent = `${s.nome} (${s.sigla})`;
          estadoSelect.appendChild(opt);
        }
      });
      renderEstadoSuggestions(STATES.slice(0,20));
      hide(estadoList); // ensure hidden on load
    })
    .catch(err=>{
      console.warn('IBGE estados failed', err);
      const fallback = Array.from(estadoSelect.options).slice(1).map(o=>{
        const m = o.textContent.match(/^(.*)\s\((.*)\)$/);
        return m ? { sigla: m[2], nome: m[1] } : { sigla: o.value, nome: o.textContent };
      });
      STATES = fallback;
      renderEstadoSuggestions(STATES);
      hide(estadoList);
    });

  function renderEstadoSuggestions(list){
    estadoList.innerHTML = '';
    if (!Array.isArray(list) || list.length === 0) {
      hide(estadoList);
      return;
    }
    list.forEach(s=>{
      const li = document.createElement('li');
      li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
      li.textContent = `${s.nome} (${s.sigla})`;
      li.dataset.sigla = s.sigla; li.dataset.nome = s.nome;
      li.addEventListener('click', ()=> {
        estadoSearch.value = `${s.nome} (${s.sigla})`;
        estadoSelect.value = s.sigla;
        hide(estadoList);
        onEstadoSelected(s.sigla, s.nome);
      });
      estadoList.appendChild(li);
    });
  }

  // only open suggestions when user clicks the input (not on focus/input by keyboard)
  let estadoOpenedByClick = false;
  estadoSearch.addEventListener('click', function(e){
    estadoOpenedByClick = true;
    renderEstadoSuggestions(STATES.slice(0,20));
    show(estadoList);
  });

  estadoSearch.addEventListener('input', function(e){
    if (!estadoOpenedByClick) return; // don't open on typing unless previously clicked
    const q = (e.target.value || '').toLowerCase();
    const out = q ? STATES.filter(s => s.nome.toLowerCase().includes(q) || s.sigla.toLowerCase().includes(q)).slice(0,50) : STATES.slice(0,20);
    renderEstadoSuggestions(out);
    out.length ? show(estadoList) : hide(estadoList);
  });

  // close on outside click and reset flag
  document.addEventListener('click', function(ev){
    const path = ev.composedPath ? ev.composedPath() : (ev.path || []);
    if (!path.includes(estadoSearch) && !path.includes(estadoList)) {
      hide(estadoList);
      estadoOpenedByClick = false;
    }
    if (cidadeSearch && cidadeList && !path.includes(cidadeSearch) && !path.includes(cidadeList)) hide(cidadeList);
    if (bairroSearch && bairroList && !path.includes(bairroSearch) && !path.includes(bairroList)) hide(bairroList);
  });

  // keyboard accessibility: hide on blur (small delay)
  estadoSearch.addEventListener('blur', ()=> setTimeout(()=> { hide(estadoList); estadoOpenedByClick = false; }, 150));

  // when estado selected -> fetch cities and populate cidade suggestions/select
  async function onEstadoSelected(uf, nome){
    if (!uf) {
      cidadeSelect.innerHTML = '<option value="">Todas</option>';
      if (cidadeSearch) cidadeSearch.value = '';
      bairroSelect.innerHTML = '<option value="">Todos</option>';
      return;
    }
    if (CITIES_CACHE[uf]) {
      populateCities(CITIES_CACHE[uf]);
      return;
    }
    try {
      const res = await fetch(ibgeCitiesUrl(uf));
      if (!res.ok) throw new Error(res.status);
      const data = await res.json();
      const cities = data.map(c => ({ id: c.id, nome: c.nome }));
      CITIES_CACHE[uf] = cities;
      populateCities(cities);
    } catch(err){
      console.warn('IBGE cities failed', err);
      cidadeSelect.innerHTML = '<option value="">Todas</option>';
    }
  }

  function populateCities(cities){
    if (!cidadeSelect || !cidadeList) return;
    cidadeList.innerHTML = '';
    cidadeSelect.innerHTML = '<option value="">Todas</option>';
    cities.forEach(c=>{
      const opt = document.createElement('option'); opt.value = c.nome; opt.textContent = c.nome;
      cidadeSelect.appendChild(opt);
      const li = document.createElement('li');
      li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
      li.textContent = c.nome;
      li.dataset.nome = c.nome;
      li.addEventListener('click', ()=> {
        if (cidadeSearch) cidadeSearch.value = c.nome;
        cidadeSelect.value = c.nome;
        hide(cidadeList);
        populateBairrosFromData(estadoSelect.value, c.nome);
        if (typeof applyFilters === 'function') applyFilters();
      });
      cidadeList.appendChild(li);
    });
    hide(cidadeList); // keep hidden until user clicks
    populateBairrosFromData(estadoSelect.value, '');
    if (typeof applyFilters === 'function') applyFilters();
  }

  // cidade input: open only on click (similar pattern)
  if (cidadeSearch && cidadeList && cidadeSelect) {
    let cidadeOpenedByClick = false;
    cidadeSearch.addEventListener('click', function(){
      cidadeOpenedByClick = true;
      if (cidadeSelect.options.length > 1) {
        // build list from select options
        const opts = Array.from(cidadeSelect.options).slice(1).map(o => o.value);
        cidadeList.innerHTML = '';
        opts.slice(0,50).forEach(name => {
          const li = document.createElement('li');
          li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
          li.textContent = name;
          li.addEventListener('click', ()=> {
            cidadeSearch.value = name;
            cidadeSelect.value = name;
            hide(cidadeList);
            populateBairrosFromData(estadoSelect.value, name);
            if (typeof applyFilters === 'function') applyFilters();
          });
          cidadeList.appendChild(li);
        });
        show(cidadeList);
      }
    });

    cidadeSearch.addEventListener('input', function(e){
      if (!cidadeOpenedByClick) return;
      const q = (e.target.value || '').toLowerCase();
      const options = Array.from(cidadeSelect.options).slice(1).map(o=>o.value);
      const filtered = options.filter(n => n.toLowerCase().includes(q)).slice(0,50);
      cidadeList.innerHTML = '';
      filtered.forEach(name => {
        const li = document.createElement('li');
        li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
        li.textContent = name;
        li.addEventListener('click', ()=> {
          cidadeSearch.value = name;
          cidadeSelect.value = name;
          hide(cidadeList);
          populateBairrosFromData(estadoSelect.value, name);
          if (typeof applyFilters === 'function') applyFilters();
        });
        cidadeList.appendChild(li);
      });
      filtered.length ? show(cidadeList) : hide(cidadeList);
    });

    cidadeSearch.addEventListener('blur', ()=> setTimeout(()=> hide(cidadeList), 150));
  }

  // --- Bairros: uses DATA local to extract bairros by state+city ---
  function populateBairrosFromData(uf, cidade){
    if (!bairroSelect || !bairroList) return;
    const set = new Set();
    if (Array.isArray(DATA)) {
      DATA.forEach(item => {
        if ((uf === '' || item.estado === uf) && (cidade === '' || item.cidade === cidade) && item.bairro) {
          set.add(item.bairro);
        }
      });
    }
    const arr = Array.from(set).sort();
    // fill select
    bairroSelect.innerHTML = '<option value="">Todos</option>';
    arr.forEach(b => {
      const opt = document.createElement('option'); opt.value = b; opt.textContent = b;
      bairroSelect.appendChild(opt);
    });
    // prepare suggestion list but keep hidden
    bairroList.innerHTML = '';
    arr.slice(0,50).forEach(name => {
      const li = document.createElement('li');
      li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
      li.textContent = name;
      li.addEventListener('click', ()=> {
        if (bairroSearch) bairroSearch.value = name;
        bairroSelect.value = name;
        hide(bairroList);
        if (typeof applyFilters === 'function') applyFilters();
      });
      bairroList.appendChild(li);
    });
    hide(bairroList);
  }

  // bairro input: click to open, typing filters only when opened by click
  if (bairroSearch && bairroList && bairroSelect) {
    let bairroOpenedByClick = false;
    bairroSearch.addEventListener('click', function(){
      bairroOpenedByClick = true;
      if (bairroSelect.options.length > 1) show(bairroList);
    });
    bairroSearch.addEventListener('input', function(e){
      if (!bairroOpenedByClick) return;
      const q = (e.target.value || '').toLowerCase();
      const options = Array.from(bairroSelect.options).slice(1).map(o=>o.value);
      const filtered = options.filter(n => n.toLowerCase().includes(q)).slice(0,50);
      bairroList.innerHTML = '';
      filtered.forEach(name => {
        const li = document.createElement('li');
        li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
        li.textContent = name;
        li.addEventListener('click', ()=> {
          bairroSearch.value = name;
          bairroSelect.value = name;
          hide(bairroList);
          if (typeof applyFilters === 'function') applyFilters();
        });
        bairroList.appendChild(li);
      });
      filtered.length ? show(bairroList) : hide(bairroList);
    });
    bairroSearch.addEventListener('blur', ()=> setTimeout(()=> { hide(bairroList); bairroOpenedByClick = false; }, 150));
  }

  // when selects change (programmatic or user) -> apply filters
  [estadoSelect, cidadeSelect, bairroSelect].forEach(el => {
    if (!el) return;
    el.addEventListener('change', function(){ if (typeof applyFilters === 'function') applyFilters(); });
  });

  // initial population (if there's a preset estado)
  if (estadoSelect.value) onEstadoSelected(estadoSelect.value, '');
  else populateBairrosFromData('', '');

});
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const buttons = Array.from(document.querySelectorAll('.category-btn'));
    const hidden = document.getElementById('filter-category');

    function setActive(btn) {
      // toggle active: clicking an active button clears the filter
      const already = btn.classList.contains('bg-emerald-600');
      buttons.forEach(b => {
        b.classList.remove('bg-emerald-600', 'text-black');
        b.classList.add('bg-white/5', 'text-white');
      });
      if (!already) {
        btn.classList.remove('bg-white/5', 'text-white');
        btn.classList.add('bg-emerald-600', 'text-black');
        hidden.value = btn.dataset.value;
      } else {
        hidden.value = '';
      }
      // trigger global applyFilters if present
      if (typeof applyFilters === 'function') applyFilters();
    }

    buttons.forEach(b => b.addEventListener('click', () => setActive(b)));
  });
</script>
<script>
document.addEventListener('DOMContentLoaded', function(){

  // deterministic pseudo-random generator (reproducible por id pair)
  function mulberry32(a){
    return function(){
      let t = a += 0x6D2B79F5;
      t = Math.imul(t ^ t >>> 15, t | 1);
      t ^= t + Math.imul(t ^ t >>> 7, t | 61);
      return ((t ^ t >>> 14) >>> 0) / 4294967296;
    };
  }

  // genera distancia pseudoaleatoria (0.1 .. 120 km) basada en dos ids / seeds
  function distanceKm(seedA, seedB, maxKm = 120){
    const s = Math.abs((seedA|0) * 397 ^ (seedB|0) );
    const rnd = mulberry32(s)();
    return Math.round((0.1 + rnd * (maxKm - 0.1)) * 10) / 10;
  }

  // normaliza y aplica mismos filtros que la UI para obtener items visibles
  function getFilteredItems(){
    const estado = (document.getElementById('filter-estado')||{}).value || '';
    const cidade = (document.getElementById('filter-cidade')||{}).value || '';
    // prefer the hidden multi-select value if present (comma-separated), otherwise fall back to the select
    const bairroHiddenEl = document.getElementById('filter-bairro-hidden');
    const bairro = (bairroHiddenEl && bairroHiddenEl.value) ? bairroHiddenEl.value : ((document.getElementById('filter-bairro')||{}).value || '');
    const pref = (document.getElementById('filter-preferencia')||{}).value || '';
    const minStars = parseFloat((document.getElementById('filter-stars-min')||{}).value || 0);
    const maxStars = parseFloat((document.getElementById('filter-stars-max')||{}).value || 5);
    const q = (document.getElementById('global-search')||{}).value?.trim().toLowerCase() || '';
    const category = (document.getElementById('filter-category')||{}).value || '';

    return (Array.isArray(DATA) ? DATA : []).filter(item=>{
      if (estado && item.estado !== estado) return false;
      if (cidade && item.cidade !== cidade) return false;
      if (bairro) {
        const bairros = String(bairro).split(',').map(s=>s.trim()).filter(Boolean);
        if (bairros.length && !bairros.includes(item.bairro)) return false;
      }
      if (pref && (!item.preferencias || !item.preferencias.includes(pref))) return false;
      if (category) {
        // ejemplo simple: map category keys a tipos (ajusta según tu data)
        if (category === 'servico' && item.tipo !== 'Serviço') return false;
        if (category === 'credenciados' && item.tipo !== 'Hospital' && item.tipo !== 'Serviço') return false;
        if (category === 'formado' && item.tipo !== 'Cirurgião') return false;
      }
      if (typeof item.estrelas === 'number') {
        if (item.estrelas < minStars || item.estrelas > maxStars) return false;
      }
      if (q) {
        const hay = ((item.nome||'') + ' ' + (item.instituicao||'') + ' ' + (item.bairro||'') + ' ' + (item.cidade||'')).toLowerCase();
        if (!hay.includes(q)) return false;
      }
      return true;
    });
  }

  // render simple list: Nombre — X.X km (distancia entre "usuario" simulado y cada item)
  const distanceListEl = document.getElementById('distance-list');

  function renderDistances(){
    const items = getFilteredItems();
    // elegir "referencia": puede ser primer item o un seed fijo (aquí usamos id 0 como 'usuario')
    const referenceId = 0; // cambia si quieres referencia distinta
    const rows = items.map(it => {
      const km = distanceKm(referenceId, it.id || (it.nome||'').length);
      return { id: it.id, nome: it.nome, cidade: it.cidade, bairro: it.bairro, km };
    }).sort((a,b)=> a.km - b.km);

    if (!distanceListEl) return;
    if (!rows.length) {
      distanceListEl.innerHTML = `<div class="text-white/70">No hay items filtrados</div>`;
      return;
    }

    distanceListEl.innerHTML = rows.map(r => {
      return `<div class="flex items-center justify-between bg-white/3 rounded px-3 py-2">
        <div class="text-base text-white/90">${escapeHtml(r.nome)} <span class="text-xs text-white/60">• ${escapeHtml(r.bairro || r.cidade || '')}</span></div>
        <div class="text-base font-medium text-emerald-300">${r.km.toFixed(1)} km</div>
      </div>`;
    }).join('');
  }

  // small helper para evitar inyección de HTML
  function escapeHtml(s){ return (s||'').toString().replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":"&#39;"}[c])); }

  // actualizar cuando cambian filtros / búsqueda
  ['filter-estado','filter-cidade','filter-bairro','filter-bairro-hidden','filter-preferencia','filter-category','filter-stars-min','filter-stars-max','global-search'].forEach(id=>{
    const el = document.getElementById(id);
    if (!el) return;
    el.addEventListener('change', renderDistances);
    el.addEventListener('input', renderDistances);
  });

  // inicial
  renderDistances();

  // opcional: refrescar cada vez que DATA cambia (si lo actualizas dinámicamente)
  // window.addEventListener('dataUpdated', renderDistances);

});
</script>


<script>
document.addEventListener('DOMContentLoaded', function(){

  // deterministic pseudo-random generator (reproducible por id pair)
  function mulberry32(a){
    return function(){
      let t = a += 0x6D2B79F5;
      t = Math.imul(t ^ t >>> 15, t | 1);
      t ^= t + Math.imul(t ^ t >>> 7, t | 61);
      return ((t ^ t >>> 14) >>> 0) / 4294967296;
    };
  }

  // genera distancia pseudoaleatoria (0.1 .. 120 km) basada en dos ids / seeds
  function distanceKm(seedA, seedB, maxKm = 120){
    const s = Math.abs((seedA|0) * 397 ^ (seedB|0) );
    const rnd = mulberry32(s)();
    return Math.round((0.1 + rnd * (maxKm - 0.1)) * 10) / 10;
  }

  // normaliza y aplica mismos filtros que la UI para obtener items visibles
  function getFilteredItems(){
    const estado = (document.getElementById('filter-estado')||{}).value || '';
    const cidade = (document.getElementById('filter-cidade')||{}).value || '';
    const bairroHiddenEl = document.getElementById('filter-bairro-hidden');
    const bairro = (bairroHiddenEl && bairroHiddenEl.value) ? bairroHiddenEl.value : ((document.getElementById('filter-bairro')||{}).value || '');
    const pref = (document.getElementById('filter-preferencia')||{}).value || '';
    const minStars = parseFloat((document.getElementById('filter-stars-min')||{}).value || 0);
    const maxStars = parseFloat((document.getElementById('filter-stars-max')||{}).value || 5);
    const q = (document.getElementById('global-search')||{}).value?.trim().toLowerCase() || '';
    const category = (document.getElementById('filter-category')||{}).value || '';

    return (Array.isArray(DATA) ? DATA : []).filter(item=>{
      if (estado && item.estado !== estado) return false;
      if (cidade && item.cidade !== cidade) return false;
      if (bairro && item.bairro !== bairro) return false;
      if (pref && (!item.preferencias || !item.preferencias.includes(pref))) return false;
      if (category) {
        // ejemplo simple: map category keys a tipos (ajusta según tu data)
        if (category === 'servico' && item.tipo !== 'Serviço') return false;
        if (category === 'credenciados' && item.tipo !== 'Hospital' && item.tipo !== 'Serviço') return false;
        if (category === 'formado' && item.tipo !== 'Cirurgião') return false;
      }
      if (typeof item.estrelas === 'number') {
        if (item.estrelas < minStars || item.estrelas > maxStars) return false;
      }
      if (q) {
        const hay = ((item.nome||'') + ' ' + (item.instituicao||'') + ' ' + (item.bairro||'') + ' ' + (item.cidade||'')).toLowerCase();
        if (!hay.includes(q)) return false;
      }
      return true;
    });
  }

  // render simple list: Nombre — X.X km (distancia entre "usuario" simulado y cada item)
  const distanceListEl = document.getElementById('distance-list');

  function renderDistances(){
    const items = getFilteredItems();
    // elegir "referencia": puede ser primer item o un seed fijo (aquí usamos id 0 como 'usuario')
    const referenceId = 0; // cambia si quieres referencia distinta
    const rows = items.map(it => {
      const km = distanceKm(referenceId, it.id || (it.nome||'').length);
      return { id: it.id, nome: it.nome, cidade: it.cidade, bairro: it.bairro, km };
    }).sort((a,b)=> a.km - b.km);

    if (!distanceListEl) return;
    if (!rows.length) {
      distanceListEl.innerHTML = `<div class="text-white/70">No hay items filtrados</div>`;
      return;
    }

    distanceListEl.innerHTML = rows.map(r => {
      return `<div class="flex items-center justify-between bg-white/3 rounded px-3 py-2">
        <div class="text-base text-white/90">${escapeHtml(r.nome)} <span class="text-xs text-white/60">• ${escapeHtml(r.bairro || r.cidade || '')}</span></div>
        <div class="text-base font-medium text-emerald-300">${r.km.toFixed(1)} km</div>
      </div>`;
    }).join('');
  }

  // small helper para evitar inyección de HTML
  function escapeHtml(s){ return (s||'').toString().replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":"&#39;"}[c])); }

  // actualizar cuando cambian filtros / búsqueda
  ['filter-estado','filter-cidade','filter-bairro','filter-bairro-hidden','filter-preferencia','filter-category','filter-stars-min','filter-stars-max','global-search'].forEach(id=>{
    const el = document.getElementById(id);
    if (!el) return;
    el.addEventListener('change', renderDistances);
    el.addEventListener('input', renderDistances);
  });

  // inicial
  renderDistances();

  // opcional: refrescar cada vez que DATA cambia (si lo actualizas dinámicamente)
  // window.addEventListener('dataUpdated', renderDistances);

});
</script>

<!-- Quick init: mostrar DATA sin filtros al cargar -->
<script>
  (function(){
    function showAllData(){
      try {
        // limpiar filtros para mostrar sin filtrar
  const ids = ['filter-estado','filter-cidade','filter-bairro','filter-bairro-hidden','filter-preferencia','filter-category','global-search'];
        ids.forEach(id => { const el = document.getElementById(id); if (el && 'value' in el) el.value = ''; });
        const min = document.getElementById('filter-stars-min'); if (min) min.value = 0;
        const max = document.getElementById('filter-stars-max'); if (max) max.value = 5;

        // Delegate rendering to applyFilters if available (keeps single rendering path)
        if (typeof applyFilters === 'function') {
          applyFilters();
        } else {
          // fallback: simple render of DATA
          const list = Array.isArray(window.DATA) ? window.DATA : [];
          const resultsList = document.getElementById('resultsList');
          const countEl = document.getElementById('results-count');
          if (resultsList) {
            try {
              resultsList.innerHTML = list.map(item => `
                <div class="bg-white/5 p-4 rounded border border-white/10">
                  <div class="font-semibold text-white">${(item.nome||'')}</div>
                  <div class="text-base text-white/70">${(item.instituicao||item.tipo||'')} — ${(item.bairro||'')}, ${(item.cidade||'')}</div>
                </div>
              `).join('');
            } catch(e){ console.warn('fallback render error', e); }
          }
          if (countEl) countEl.textContent = `${list.length} resultado${list.length !== 1 ? 's' : ''}`;
        }

        if (typeof renderDistances === 'function') renderDistances();
      } catch(e) { console.warn('showAllData', e); }
    }

    if (document.readyState === 'complete' || document.readyState === 'interactive') setTimeout(showAllData, 80);
    else document.addEventListener('DOMContentLoaded', () => setTimeout(showAllData, 80));
  })();
</script>

<!-- applyFilters: filtra SOLO por estrellas -->
<script>
  function applyFilters() {
    try {
      const min = parseFloat(document.getElementById('filter-stars-min')?.value || 0);
      const max = parseFloat(document.getElementById('filter-stars-max')?.value || 5);
      const list = Array.isArray(window.DATA) ? window.DATA : [];

      const filtered = list.filter(item => {
        const v = parseFloat(item.estrelas || 0);
        return v >= min && v <= max;
      });

      const resultsList = document.getElementById('resultsList');
      const countEl = document.getElementById('results-count');

      if (resultsList) {
        if (typeof renderCard === 'function') resultsList.innerHTML = filtered.map(renderCard).join('');
        else resultsList.innerHTML = filtered.map(item => `
          <div class="bg-white/5 p-4 rounded border border-white/10">
            <div class="font-semibold text-white">${(item.nome||'')}</div>
            <div class="text-base text-white/70">${(item.instituicao||item.tipo||'')} — ${(item.bairro||'')}, ${(item.cidade||'')}</div>
          </div>
        `).join('');
      }

      if (countEl) countEl.textContent = `${filtered.length} resultado${filtered.length !== 1 ? 's' : ''}`;

      if (typeof renderDistances === 'function') renderDistances();
    } catch (e) {
      console.warn('applyFilters error', e);
    }
  }

  // conectar botones/inputs relacionados
  document.addEventListener('DOMContentLoaded', function(){
    const minEl = document.getElementById('filter-stars-min');
    const maxEl = document.getElementById('filter-stars-max');
    const applyBtn = document.getElementById('applyFilters');
    const resetBtn = document.getElementById('resetFilters');

    if (minEl) minEl.addEventListener('input', applyFilters);
    if (maxEl) maxEl.addEventListener('input', applyFilters);
    if (applyBtn) applyBtn.addEventListener('click', applyFilters);
    if (resetBtn) resetBtn.addEventListener('click', function(){
      if (minEl) minEl.value = 0;
      if (maxEl) maxEl.value = 5;
      applyFilters();
    });
  });
</script>


<script>

    let _loadingTimer = null;

  function loading(duration = 300) {
    const loader = document.getElementById('fullscreen-loader');
    const container = document.getElementById('loading');
    const mapPlaceholder = document.getElementById('mapPlaceholder');

    if (!loader) return console.warn('fullscreen-loader no encontrado');

    // Mostrar loader
    loader.style.display = 'flex';
    loader.classList.remove('hidden');
    document.body.classList.add('loading');

    if (container) {
      container.hidden = false;
      container.style.display = 'grid';
    }
    if (mapPlaceholder) {
      mapPlaceholder.style.display = 'grid';
    }

    // cancelar timer anterior si existe
    if (_loadingTimer) {
      clearTimeout(_loadingTimer);
      _loadingTimer = null;
    }

    // Ocultar después de duration ms
    _loadingTimer = setTimeout(() => {
      stopLoading();
    }, Math.max(100, Number(duration)));
  }

  function stopLoading() {
    const loader = document.getElementById('fullscreen-loader');
    const container = document.getElementById('loading');
    const mapPlaceholder = document.getElementById('mapPlaceholder');

    if (!loader) return;

    // Ocultar loader
    loader.style.display = 'none';
    loader.classList.add('hidden');
    document.body.classList.remove('loading');

    if (container) {
      // deja el grid visible pero sin el overlay (si quieres ocultarlo, pon container.style.display='none')
      container.hidden = false;
      container.style.display = 'grid';
    }
    if (mapPlaceholder) {
      mapPlaceholder.style.display = 'grid';
    }

    // detener spinner si estaba animando
    const spinner = loader.querySelector('.spinner');
    if (spinner) spinner.style.animation = 'none';

    if (_loadingTimer) {
      clearTimeout(_loadingTimer);
      _loadingTimer = null;
    }
  }

</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const profBtn = document.querySelector('.category-btn[data-value="professor"]');
  const container = document.getElementById('loading');
  const countEl = document.getElementById('results-count');
  if (!profBtn || !container) return;

  if (!container.dataset.initialHtml) container.dataset.initialHtml = container.innerHTML;
  const originalCount = countEl ? countEl.textContent : '';

  const professorHtml = `













    <div class="bg-white/5 p-4 rounded border border-white/10" >
      <div class="flex items-start gap-3">
        <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/aline.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
        <div class="flex-1">
          <div class="flex justify-between items-start gap-2" >
            <div>
              <div class="font-semibold text-white">Dra Aline Campos</div>
              <div class="text-base text-white/70">Cirurgiã plástica credenciada, Moema, São Paulo </div>
            </div>
            <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="https://www.google.com/maps/place/Hospital+Ruben+Berta/@-23.6024194,-46.6517301,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce5a17deee9531:0x6e8b52fafaffd6e8!8m2!3d-23.6024194!4d-46.6517301!16s%2Fg%2F1tqnmry7?entry=ttu&g_ep=EgoyMDI1MTAyOS4yIKXMDSoASAFQAw%3D%3D"><div class="text-sm">5.2km</div></a>
                  </div>
          </div>
          <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>


<br>
Palavras-chave:
{{-- cirurgia estética da face, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral  --}}
</div>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span id="keyword4" hidden>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética pós bariátrica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cosmiatria
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    orbitopalpebral
</span>
</span>
<span class="text-white" id="keyword4-toggle"> <button onclick="keyword4()">...</button></span>
          <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10 hover:bg-emerald-500 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button data-modal-target="detalhes_estagio3" data-modal-toggle="detalhes_estagio3" class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white/5 p-4 rounded border border-white/10" >
      <div class="flex items-start gap-3">
        <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/victor.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
        <div class="flex-1">
          <div class="flex justify-between items-start gap-2" >
            <div>
              <div class="font-semibold text-white">Dr Vitor Zanatta</div>
              <div class="text-base text-white/70">Cirurgião plástico credenciado, Moema, São Paulo</div>
            </div>
            <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">5.2km</div></a>
                  </div>
          </div>
          <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética
</span>
            </div>

<br>
<span class="text-white">Palavras-chave:</span>
            <br>

{{-- Palavras-chave: cirurgia mamaria, contorno corporal, cirurgia estética da face, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral --}}

<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamaria
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="text-white">...</span>
          <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
        </div>
      </div>

    </div>



   <div class="bg-white/5 p-4 rounded border border-white/10" >
      <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/lucas.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
        <div class="flex-1">
          <div class="flex justify-between items-start gap-2" >
            <div>
              <div class="font-semibold text-white">Dr Lucas Rinaldi</div>
              <div class="text-base text-white/70">Cirurgião plástico credenciado, Tatuapé, São Paulo</div>
            </div>
            <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">18km</div></a>
                  </div>
          </div>
          <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia Estética
</span>
                <br>
Palavras chave: <br>
 {{-- contorno corporal, lipoaspiração de alta definição, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, cirurgia estética pós bariátrica, Cosmiatria --}}
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   lipoaspiração de alta definição
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia mamária
</span>
<span id="keyword6" hidden>
    <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   orbitopalpebral
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   rinoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética pós bariátrica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cosmiatria
</span>
</span>

<span class="text-white" id="keyword6-toggle"> <button onclick="keyword6()">...</button></span>
</div>
          <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button data-modal-target="detalhes_estagio1" data-modal-toggle="detalhes_estagio1" class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
        </div>
      </div>

    </div>



  `;

  profBtn.addEventListener('click', function () {
    const isActive = profBtn.dataset.fakeActive === '1';
    if (!isActive) {
      // activar visualmente
      profBtn.dataset.fakeActive = '1';
      profBtn.classList.remove('bg-white/5','text-white');
      profBtn.classList.add('bg-emerald-600','text-black');
      // mostrar tarjetas de demo
      container.innerHTML = professorHtml;
      if (countEl) countEl.textContent = '2 resultados';
    } else {
      // desactivar / restaurar
      profBtn.dataset.fakeActive = '0';
      profBtn.classList.remove('bg-emerald-600','text-black');
      profBtn.classList.add('bg-white/5','text-white');
      container.innerHTML = container.dataset.initialHtml || '';
      if (countEl) countEl.textContent = originalCount;
    }
  });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const container = document.getElementById('loading');
  const countEl = document.getElementById('results-count');
  const hidden = document.getElementById('filter-category');
  if (!container) return;
  if (!container.dataset.initialHtml) container.dataset.initialHtml = container.innerHTML;
  const originalCount = countEl ? countEl.textContent : '';

  // fake HTML for each category (estético/demo)
  const fake = {
    servico: `


      <div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Hospital_Vila_Penteado.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="flex items-start justify-between gap-4">
                  <div class="font-semibold text-white">Setor de Cirurgia Plástica e Unidade de Terapia de Queimados</div>
                  <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">21km</div></a>
                  </div>
                </div>

                <div class="text-base text-white/70">Hospital Vila Penteado
Hospital, Jardim Iracema, São Paulo</div>
              </div>

            </div>
            <div class="mt-3 text-base text-white/70">
                Estágios credenciados:  <br>
                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Tratamento de queimados
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia de mão
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
                 <br >
{{-- Palavras chave: grande queimado, cirurgia reparadora, retalhos, enxertos. --}}
</div>
<span class="text-white">Palavras-chave:</span>
            <br>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    grande queimado
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    retalhos
</span>
<span class="text-white">...</span>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>


          </div>
        </div>
      </div>





      <div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/oswaldo.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="flex items-start justify-between gap-4">
                  <div class="font-semibold text-white">Serviço de Cirurgia Plástica Dr. Oswaldo de Castro</div>
                  <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">27km</div></a>
                  </div>
                </div>

                <div class="text-base text-white/70">Serviço de cirurgia plástica, Guarulhos, São Paulo
</div>
              </div>

            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>
                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia Estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia reparadora
</span>
                  <br >

                {{-- Palavras chave: Cirurgia mamária, contorno corporal, orbitopalpebral, rinoplastia, cirurgia estética da face, cirurgia estética pós bariátrica, cosmiatria, enxertos, retalhos, cirurgia oncológica da pele --}}
<span class="text-white">Palavras-chave:</span>
            <br>

            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamaria
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    orbitopalpebral
</span>
<span class="text-white">...</span>
            </div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>


          </div>
        </div>
      </div>
    `,
    credenciados: `
<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Andre_P_Castro.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Clínica de Cirurgia Plástica - Dr André Parreira de Castro</div>
                <div class="text-base text-white/70">Clínica, Moema, São Paulo</div>
              </div>
              <div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">3.1km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia Estética
    </span>

                <br>
                {{-- contorno corporal, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, Cosmiatria --}}
Palavras chave: <br>
    <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
        contorno corporal
    </span>
    <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
        cirurgia mamária
    </span>
    <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
        orbitopalpebral
    </span>


</div>

<div id="keyword2" hidden>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
        rinoplastia
    </span>
    <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
        cirurgia estética da face
    </span>
    <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
        Cosmiatria
    </span>
</div>
<div class="text-white" id="keyword2-toggle"> <button onclick="keyword2()">...</button></div>

            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button data-modal-target="detalhes_estagio2" data-modal-toggle="detalhes_estagio2" class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
          </div>
        </div>
      </div>


<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Hospital_Municipal_Infantil.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Hospital Municipal Infantil Menino Jesus</div>
                <div class="text-base text-white/70">Hospital, Bela Vista, São Paulo</div>
              </div>
<div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">12km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>
                 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia crânio-maxilo-facial
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Tratamento de queimados
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia reparadora
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Microcirurgia
</span>
                 <br>
Palavras chave: <br>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   defeitos da face
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia reparadora de face
</span>
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   grande queimado infantil
</span>
<span class="text-white">...</span>
</div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
          </div>
        </div>
      </div>


<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/IBCC_Oncologia.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">IBCC Oncologia - Instituto Brasileiro de Controle do Câncer</div>
                <div class="text-base text-white/70">Hospital, Mooca, São Paulo
</div>
              </div>
<div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">15km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>


                 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia reparadora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    microcirurgia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia de mão
</span>
Palavras chave: <br>
{{-- Cirurgia reparadora mamária, retalhos, enxertos, microcirurgia --}}
</div>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia reparadora mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    retalhos
</span>


<span class="text-white">...</span>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
          </div>
        </div>
      </div>

<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Clínica_Plastique.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Clínica Plastiquè</div>
                <div class="text-base text-white/70">Clínica, Tatuapé, São Paulo</div>
              </div>
<div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="https://www.google.com/maps/place/Cl%C3%ADnica+Plastiqu%C3%A8/@-23.5404383,-46.5713929,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce5ee97e81fdff:0xf25dc0edff92161d!8m2!3d-23.5404383!4d-46.5713929!16s%2Fg%2F1pv19p7t9?entry=ttu&g_ep=EgoyMDI1MTAyOS4yIKXMDSoASAFQAw%3D%3D"><div class="text-sm">18km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cirurgia Estética
</span>
                <br>
Palavras chave: <br>
 {{-- contorno corporal, lipoaspiração de alta definição, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, cirurgia estética pós bariátrica, Cosmiatria --}}
 <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   lipoaspiração de alta definição
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia mamária
</span>
<span class="text-white">...</span>
</div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>

          </div>
        </div>
      </div>

<div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/stella.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Hospital Stella Maris</div>
                <div class="text-base text-white/70">Hospital, Guarulhos, São Paulo</div>
              </div>
<div class="flex items-center gap-2 text-white/80">
                    <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>
                    <a href="#"><div class="text-sm">27km</div></a>
                  </div>
            </div>
            <div class="mt-3 text-base text-white/70">Estágios credenciados:
                  <br>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia Estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia reparadora
</span><br>
Palavras chave: <br>

{{-- contorno corporal, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, cirurgia estética pós bariátrica, enxertos, retalhos, cirurgia oncológica da pele.--}}
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    orbitopalpebral
</span>
<span class="text-white">...</span>
</div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Detalhes do estágio</button>
          </div>
          </div>
        </div>
      </div>






    `,
    formado: `
      <div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/sony.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Dr Sonny Chen</div>
                <div class="text-base text-white/70">Residente de 1• ano, Serviço de Cirurgia Plástica Dr. Oswaldo de Castro, Moema, São Paulo
</div>
              </div>
<div class="text-right">
            <div class="text-white font-medium">4.5 ⭐</div>

          </div>

            </div>
            <div class="text-base text-white/60">Preferências: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
            </div>
            <div class="mt-3 text-base text-white/70">Palavras-chave: <br>

                {{-- cirurgia mamária, contorno corporal, cirurgia estética da face, rinoplastia, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral  --}}
                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="text-white">...</span>
            </div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>

          </div>
          </div>
        </div>
      </div>

      <div class="bg-white/5 p-4 rounded border border-white/10">
        <div class="flex items-start gap-3">
          <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/kague.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
          <div class="flex-1">
            <div class="flex justify-between items-start gap-2">
              <div>
                <div class="font-semibold text-white">Dr Kaue Sucena</div>
                <div class="text-base text-white/70">Residente de 3º ano - Serviço de Cirurgia Plástica Dr. Oswaldo de Castro — Aclimação, São Paulo</div>
              </div>
              <div class="text-right">
            <div class="text-white font-medium">4.7 ⭐</div>

          </div>
            </div>
            <div class="text-base text-white/60">Preferências: <br>

            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cirurgia estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>

            </div>
            <div class="mt-3 text-base text-white/70">Palavras-chave: <br>
                {{-- cirurgia mamária, contorno corporal, cirurgia estética da face, rinoplastia, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral --}}
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="text-white">...</span>
            </div>
            <div class="mt-3 flex gap-2">
            <a href="dashboard" class="px-3 py-1 bg-white/10  hover:bg-emerald-600 rounded text-white text-base">Agregar a favoritos</a>
            <button class="px-3 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>

          </div>
          </div>
        </div>
      </div>
    `
  };

  // helper to reset visual state of all category buttons
  function resetButtons() {
    document.querySelectorAll('.category-btn').forEach(b => {
      b.dataset.fakeActive = '0';
      b.classList.remove('bg-emerald-600','text-black');
      b.classList.add('bg-white/5','text-white');
    });
  }

  // attach listeners for the three buttons
  ['servico','credenciados','formado'].forEach(key => {
    const btn = document.querySelector(`.category-btn[data-value="${key}"]`);
    if (!btn) return;
    btn.addEventListener('click', function () {
      // small delay so existing handlers run first
      setTimeout(() => {
        const wasActive = btn.dataset.fakeActive === '1';
        // deactivate all first
        resetButtons();
        if (!wasActive) {
          // activate this one visually
          btn.dataset.fakeActive = '1';
          btn.classList.remove('bg-white/5','text-white');
          btn.classList.add('bg-emerald-600','text-black');
          // show fake HTML
          container.innerHTML = fake[key] || '';
          if (countEl) {
            // approximate count by number of top-level cards in fake[key]
            const matches = (fake[key] || '').match(/class="bg-white\/5/g) || [];
            countEl.textContent = `${matches.length} resultado${matches.length !== 1 ? 's' : ''}`;
          }
        } else {
          // restore original
          btn.dataset.fakeActive = '0';
          container.innerHTML = container.dataset.initialHtml || '';
          if (countEl) countEl.textContent = originalCount;
        }
        // also clear hidden category so other logic doesn't keep it
        if (hidden) hidden.value = '';
        // trigger distances rerender if available
        if (typeof renderDistances === 'function') renderDistances();
      }, 60);
    });
  });
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
  const input = document.getElementById('bairro-search');
  const tagsContainer = document.getElementById('bairro-tags');
  const suggestions = document.getElementById('bairro-suggestions');
  const hidden = document.getElementById('filter-bairro-hidden');

  // lista de ejemplo — opcional: generar desde DATA o desde <select> existente
  const OPTIONS = Array.from(document.querySelectorAll('#filter-bairro option')).map(o => o.value).filter(Boolean);
  if (!OPTIONS.length && window.DATA) {
    OPTIONS.push(...Array.from(new Set(window.DATA.map(d => d.bairro).filter(Boolean))));
  }

  let selected = [];

  function renderTags(){
    tagsContainer.innerHTML = '';
    selected.forEach((t, i) => {
      const tag = document.createElement('span');
      tag.className = 'flex items-center gap-2 bg-white text-black px-2 py-1 rounded text-sm';
      tag.innerHTML = `${escapeHtml(t)} <button data-i="${i}" type="button" class="ml-1 text-xs text-black ">✕</button>`;
      tagsContainer.appendChild(tag);
    });
    hidden.value = selected.join(',');
    // opcional: disparar filtro
    if (typeof applyFilters === 'function') applyFilters();
  }

  function escapeHtml(s){ return (s||'').toString().replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":"&#39;"}[c])); }

  function showSuggestions(q){
    const ql = (q||'').toLowerCase();
    const list = OPTIONS.filter(x => x.toLowerCase().includes(ql) && !selected.includes(x)).slice(0,50);
    suggestions.innerHTML = '';
    if (!list.length) { suggestions.classList.add('hidden'); return; }
    list.forEach(v=>{
      const li = document.createElement('li');
      li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
      li.textContent = v;
      li.addEventListener('click', ()=> { addTag(v); hideSuggestions(); input.focus(); });
      suggestions.appendChild(li);
    });
    suggestions.classList.remove('hidden');
  }

  function hideSuggestions(){ suggestions.classList.add('hidden'); suggestions.innerHTML = ''; }

  function addTag(value){
    value = (value||'').trim();
    if (!value) return;
    if (!selected.includes(value)) selected.push(value);
    renderTags();
  }

  input.addEventListener('input', (e)=> {
    showSuggestions(e.target.value);
  });

  input.addEventListener('keydown', (e)=>{
    if (e.key === 'Enter') {
      e.preventDefault();
      const v = input.value.trim();
      if (v) addTag(v);
      input.value = '';
      hideSuggestions();
    } else if (e.key === 'Backspace' && !input.value) {
      // eliminar último
      selected.pop();
      renderTags();
    }
  });

  // remover tag con delegación
  tagsContainer.addEventListener('click', function(e){
    const btn = e.target.closest('button[data-i]');
    if (!btn) return;
    const i = Number(btn.dataset.i);
    if (!Number.isNaN(i)) {
      selected.splice(i,1);
      renderTags();
    }
  });

  // clic fuera cierra sugerencias
  document.addEventListener('click', (e)=>{
    if (!e.composedPath().includes(suggestions) && !e.composedPath().includes(input)) hideSuggestions();
  });

  // inicializar desde hidden si ya tiene valores
  if (hidden.value) {
    selected = hidden.value.split(',').map(s=>s.trim()).filter(Boolean);
    renderTags();
  }

  // si hay un select oculto con opciones, llenar OPTIONS desde él (prioriza el <select id="filter-bairro">)
  const selectHidden = document.querySelector('#filter-bairro') || document.querySelector('#filter-bairro-hidden');
  if (selectHidden && selectHidden.options) {
    const opts = Array.from(selectHidden.options).map(o=>o.value).filter(Boolean);
    opts.forEach(o => { if (!OPTIONS.includes(o)) OPTIONS.push(o); });
  }
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
  const input = document.getElementById('pref-search');
  const tagsContainer = document.getElementById('pref-tags');
  const suggestions = document.getElementById('pref-suggestions');
  const hidden = document.getElementById('filter-preferencia');

  // Opciones comunes; opcionalmente genera desde DATA
  const DEFAULTS = ['estética','reconstrução','cirurgia mamária','rinoplastia','microcirurgia','queimados','reparadora','contorno corporal','lipoescultura HD','defeitos da face','cirurgia reparadora mamária'];
  const OPTIONS = Array.from(new Set([
    ...DEFAULTS,
    ...(window.DATA ? [].concat(...(window.DATA.map(d=>d.preferencias||[]))) : [])
  ])).filter(Boolean);

  let selected = [];

  function escapeHtml(s){ return (s||'').toString().replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":"&#39;"}[c])); }

  function renderTags(){
    tagsContainer.innerHTML = '';
    selected.forEach((t,i)=> {
      const span = document.createElement('span');
      span.className = 'flex items-center gap-2 bg-white text-black px-2 py-1 rounded text-sm';
      span.innerHTML = `${escapeHtml(t)} <button data-i="${i}" type="button" class="ml-1 text-xs text-black">✕</button>`;
      tagsContainer.appendChild(span);
    });
    hidden.value = selected.join(',');
    if (typeof applyFilters === 'function') applyFilters();
  }

  function showSuggestions(q){
    const ql = (q||'').toLowerCase();
    const list = OPTIONS.filter(x => x.toLowerCase().includes(ql) && !selected.includes(x)).slice(0,50);
    suggestions.innerHTML = '';
    if (!list.length) { suggestions.classList.add('hidden'); return; }
    list.forEach(v=>{
      const li = document.createElement('li');
      li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
      li.textContent = v;
      li.addEventListener('click', ()=> { addTag(v); input.value=''; hideSuggestions(); input.focus(); });
      suggestions.appendChild(li);
    });
    suggestions.classList.remove('hidden');
  }

  function hideSuggestions(){ suggestions.classList.add('hidden'); suggestions.innerHTML = ''; }

  function addTag(value){
    value = (value||'').trim();
    if (!value) return;
    if (!selected.includes(value)) selected.push(value);
    renderTags();
  }

  input.addEventListener('input', (e)=> showSuggestions(e.target.value));
  input.addEventListener('keydown', (e)=>{
    if (e.key === 'Enter') {
      e.preventDefault();
      const v = input.value.trim();
      if (v) addTag(v);
      input.value = '';
      hideSuggestions();
    } else if (e.key === 'Backspace' && !input.value) {
      selected.pop();
      renderTags();
    }
  });

  tagsContainer.addEventListener('click', function(e){
    const btn = e.target.closest('button[data-i]');
    if (!btn) return;
    const i = Number(btn.dataset.i);
    if (!Number.isNaN(i)) {
      selected.splice(i,1);
      renderTags();
    }
  });

  document.addEventListener('click', (e)=>{
    const path = e.composedPath ? e.composedPath() : (e.path || []);
    if (!path.includes(suggestions) && !path.includes(input)) hideSuggestions();
  });

  // iniciar si hidden ya tiene valores
  if (hidden.value) {
    selected = hidden.value.split(',').map(s=>s.trim()).filter(Boolean);
    renderTags();
  }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const input = document.getElementById('local-search');
  const tagsContainer = document.getElementById('local-tags');
  const suggestions = document.getElementById('local-suggestions');
  const hidden = document.getElementById('filter-local-hidden');

  // Inicializa opciones desde DATA o usa lista vacía
  const OPTIONS = [];
  if (Array.isArray(window.DATA)) {
    // usa instituicao + bairro como ejemplos de lugares
    window.DATA.forEach(d => {
      if (d.instituicao) OPTIONS.push(d.instituicao);
      if (d.bairro) OPTIONS.push(d.bairro);
    });
  }
  // dedupe y limpiar
  const UNIQUE_OPTIONS = Array.from(new Set(OPTIONS)).filter(Boolean);

  let selected = [];

  function escapeHtml(s){ return (s||'').toString().replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":"&#39;"}[c])); }

  function renderTags(){
    tagsContainer.innerHTML = '';
    selected.forEach((t, i) => {
      const tag = document.createElement('span');
      tag.className = 'flex items-center gap-2 bg-white text-black px-2 py-1 rounded text-sm';
      tag.innerHTML = `${escapeHtml(t)} <button data-i="${i}" type="button" class="ml-1 text-xs text-black">✕</button>`;
      tagsContainer.appendChild(tag);
    });
    hidden.value = selected.join(',');
    if (typeof applyFilters === 'function') applyFilters();
  }

  function showSuggestions(q){
    const ql = (q||'').toLowerCase();
    const list = UNIQUE_OPTIONS.filter(x => x.toLowerCase().includes(ql) && !selected.includes(x)).slice(0,50);
    suggestions.innerHTML = '';
    if (!list.length) { suggestions.classList.add('hidden'); return; }
    list.forEach(v=>{
      const li = document.createElement('li');
      li.className = 'px-3 py-2 hover:bg-gray-200 cursor-pointer';
      li.textContent = v;
      li.addEventListener('click', ()=> { addTag(v); hideSuggestions(); input.focus(); });
      suggestions.appendChild(li);
    });
    suggestions.classList.remove('hidden');
  }

  function hideSuggestions(){ suggestions.classList.add('hidden'); suggestions.innerHTML = ''; }

  function addTag(value){
    value = (value||'').trim();
    if (!value) return;
    if (!selected.includes(value)) selected.push(value);
    renderTags();
  }

  input.addEventListener('input', (e)=> {
    showSuggestions(e.target.value);
  });

  input.addEventListener('keydown', (e)=>{
    if (e.key === 'Enter') {
      e.preventDefault();
      const v = input.value.trim();
      if (v) addTag(v);
      input.value = '';
      hideSuggestions();
    } else if (e.key === 'Backspace' && !input.value) {
      selected.pop();
      renderTags();
    }
  });

  // eliminar tag con delegación
  tagsContainer.addEventListener('click', function(e){
    const btn = e.target.closest('button[data-i]');
    if (!btn) return;
    const i = Number(btn.dataset.i);
    if (!Number.isNaN(i)) {
      selected.splice(i,1);
      renderTags();
    }
  });

  // clic fuera cierra sugerencias
  document.addEventListener('click', (e)=>{
    const path = e.composedPath ? e.composedPath() : (e.path || []);
    if (!path.includes(suggestions) && !path.includes(input)) hideSuggestions();
  });

  // inicia desde valor oculto si ya existe
  if (hidden && hidden.value) {
    selected = hidden.value.split(',').map(s=>s.trim()).filter(Boolean);
    renderTags();
  }
});
</script>

<script>
 function keyword1(){
    document.getElementById("keyword1").hidden = false;
    document.getElementById("keyword1-toggle").hidden = true;
 }
    function keyword2(){
        document.getElementById("keyword2").hidden = false;
        document.getElementById("keyword2-toggle").hidden = true;
    }
    function keyword3(){
        document.getElementById("keyword3").hidden = false;
        document.getElementById("keyword3-toggle").hidden = true;
    }
    function keyword4(){
        document.getElementById("keyword4").hidden = false;
        document.getElementById("keyword4-toggle").hidden = true;
    }
    function keyword5(){
        document.getElementById("keyword5").hidden = false;
        document.getElementById("keyword5-toggle").hidden = true;
    }
    function keyword6(){
        document.getElementById("keyword6").hidden = false;
        document.getElementById("keyword6-toggle").hidden = true;
    }

</script>






<div id="detalhes_estagio1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#17466E] rounded-lg shadow-sm ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white ">
                    DETALHES DO ESTÁGIO<br></h3>



                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="detalhes_estagio1">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>


            <!-- Modal body -->
            <div class="body">
      <!-- Reemplazado: tabla -> layout con divs para evitar overflow del modal -->
      <div class="space-y-4 max-h-[60vh] overflow-auto p-2">




        <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Duração</div>

        </div>

        <div class="space-y-2">
          <div class="font-semibold text-white  flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Data de início:</div>
            <div class="font-bold text-black "><input type="text" class="bg-[#1c5180] px-20 border-white text-white "  value="01/09/2027" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Data de término:</div>
            <div class="font-bold text-black "><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="15/09/2027" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Tipo do estágio: </div>
            <div class="font-bold text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="Cirugia estética" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2  bg-white/2 rounded">
            <div class="font-semibold text-white ">Número de vagas: </div>
            <div class="font-bold text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="1" ></div>
          </div>



          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Auxílio econômico: </div>
            <div class="font-bold  text-white"><input type="text" class="bg-[#1c5180] px-20  border-white text-white"  value="Não" ></div>
          </div>
          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Nota de avaliação mínima requerida do candidato: </div>
            <div class="font-bold  text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="4.0" ></div>
          </div>

<div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Principais locais de trabalho: </div>

          </div>
          <div>
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
BP Mirante
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
Hospital Santa Catarina - Paulista
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
Hospital Alemão Oswaldo Cruz
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
BP - A Beneficência Portuguesa de São Paulo
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
Hospital Paulistano
</span>

          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Procedimentos cirúrgicos realizados pela equipe da Plástica: </div>

          </div>
          <div>
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia convencional
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia em âncora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia 360
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Lipoescultura de baixa definição
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Lipoescultura de média definição
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Lipoescultura de média definição
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Lipoenxertia guiada por ultrassonografia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Braquioplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cruroplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Rinoplastia fechada
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Rinoplastia aberta
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Ritidoplastia convencional
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Blefaroplastia superior
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Blefaroplastia inferior
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Frontoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastoplastia redutora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastopexia com prótese
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastopexia sem prótese
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Aplicação de toxina botulínica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Preenchimento com ácido hialurônico
</span>



</div>



          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  font-semibold">Palavras chave: </div>




          </div>
          <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   lipoaspiração de alta definição
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   orbitopalpebral
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   rinoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética pós bariátrica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cosmiatria
</span>
        </div>

      </div>
    </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                 <button data-modal-hide="detalhes_estagio1" type="button" class="text-white bg-blue-700 hover:bg-[#10B981] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Participar do processo seletivo </button>
                <button data-modal-hide="detalhes_estagio1" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Cancelar</button>
                 {{-- <button data-modal-hide="detalhes_estagio1" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Fechar</button> --}}


            </div>
        </div>
    </div>
</div>

<div id="detalhes_estagio2" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#17466E] rounded-lg shadow-sm ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white ">
                    DETALHES DO ESTÁGIO<br></h3>



                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="detalhes_estagio2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>


            <!-- Modal body -->
            <div class="body">
      <!-- Reemplazado: tabla -> layout con divs para evitar overflow del modal -->
      <div class="space-y-4 max-h-[60vh] overflow-auto p-2">




        <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Duração</div>

        </div>

        <div class="space-y-2">
          <div class="font-semibold text-white  flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Data de início:</div>
            <div class="font-bold text-black "><input type="text" class="bg-[#1c5180] px-20 border-white text-white "  value="01/09/2027" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Data de término:</div>
            <div class="font-bold text-black "><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="15/09/2027" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Tipo do estágio: </div>
            <div class="font-bold text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="Cirugia estética" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2  bg-white/2 rounded">
            <div class="font-semibold text-white ">Número de vagas: </div>
            <div class="font-bold text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="2" ></div>
          </div>



          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Auxílio econômico: </div>
            <div class="font-bold  text-white"><input type="text" class="bg-[#1c5180] px-20  border-white text-white"  value="Não" ></div>
          </div>
          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Nota de avaliação mínima requerida do candidato: </div>
            <div class="font-bold  text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="4.0" ></div>
          </div>

<div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Principais locais de trabalho: </div>

          </div>
          <div>
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
Hospital Ruben Berta
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
Clínica de Cirurgia Plástica - Dr Andre Parreira de Castro
</span>


          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Procedimentos cirúrgicos realizados pela equipe da Plástica: </div>

          </div>
          <div>
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia convencional
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia em âncora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia 360
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Lipoescultura
</span>

<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Braquioplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cruroplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Rinoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Ritidoplastia
</span>

<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Blefaroplastia superior
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Blefaroplastia inferior
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Frontoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastoplastia redutora
</span>


<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastopexia com prótese
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastopexia sem prótese
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mamoplastia de aumento
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Aplicação de toxina botulínica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Preenchimento com ácido hialurônico
</span>



</div>



          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Palavras chave: </div>




          </div>
          <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   orbitopalpebral
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   rinoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    Cosmiatria
</span>

        </div>

      </div>
    </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                 <button data-modal-hide="detalhes_estagio2" type="button" class="text-white bg-blue-700 hover:bg-[#10B981] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Participar do processo seletivo </button>
                <button data-modal-hide="detalhes_estagio2" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Cancelar</button>
                 {{-- <button data-modal-hide="detalhes_estagio2" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Fechar</button> --}}


            </div>
        </div>
    </div>
</div>





<div id="detalhes_estagio3" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#17466E] rounded-lg shadow-sm ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white ">
                    DETALHES DO ESTÁGIO<br></h3>



                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="detalhes_estagio3">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>


            <!-- Modal body -->
            <div class="body">
      <!-- Reemplazado: tabla -> layout con divs para evitar overflow del modal -->
      <div class="space-y-4 max-h-[60vh] overflow-auto p-2">




        <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Duração</div>

        </div>

        <div class="space-y-2">
          <div class="font-semibold text-white  flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Data de início:</div>
            <div class="font-bold text-black "><input type="text" class="bg-[#1c5180] px-20 border-white text-white "  value="01/09/2027" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Data de término:</div>
            <div class="font-bold text-black "><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="15/09/2027" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">Tipo do estágio: </div>
            <div class="font-bold text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="Cirugia estética" ></div>
          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2  bg-white/2 rounded">
            <div class="font-semibold text-white ">Número de vagas: </div>
            <div class="font-bold text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="2" ></div>
          </div>



          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Auxílio econômico: </div>
            <div class="font-bold  text-white"><input type="text" class="bg-[#1c5180] px-20  border-white text-white"  value="Não" ></div>
          </div>
          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Nota de avaliação mínima requerida do candidato: </div>
            <div class="font-bold  text-white"><input type="text" class="bg-[#1c5180] px-20 border-white text-white"  value="4.0" ></div>
          </div>

<div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Principais locais de trabalho: </div>

          </div>
          <div>
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
Hospital Ruben Berta
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
Clínica Plastiquè
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
Clínica de Cirurgia Plástica - Dr Andre Parreira de Castro
</span>


          </div>

          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Procedimentos cirúrgicos realizados pela equipe da Plástica: </div>

          </div>
          <div>
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia convencional
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia em âncora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Abdominoplastia 360
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Lipoescultura
</span>


<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Braquioplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Cruroplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Rinoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Ritidoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Blefaroplastia superior
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Blefaroplastia inferior
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Frontoplastia
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastoplastia redutora
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastopexia com prótese
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mastopexia sem prótese
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Mamoplastia de aumento
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Aplicação de toxina botulínica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   Preenchimento com ácido hialurônico
</span>



</div>



          <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white  ">Palavras chave: </div>




          </div>
          <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia reparadora mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia estética pós bariátrica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cosmiatria
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   orbitopalpebral
</span>

        </div>

      </div>
    </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                 <button data-modal-hide="detalhes_estagio3" type="button" class="text-white bg-blue-700 hover:bg-[#10B981] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Participar do processo seletivo </button>
                <button data-modal-hide="detalhes_estagio3" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Cancelar</button>
                 {{-- <button data-modal-hide="detalhes_estagio3" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Fechar</button> --}}

            </div>
        </div>
    </div>
</div>









































<style>
    body {
      margin: 0;
      background: #0d1117;
      color: #fff;
      font-family: system-ui, sans-serif;
    }
    .chat-widget{
        position:fixed;
        bottom:20px;
        right: 20px;
        widows: 350px;
        transition: all .3d ease;
        font-family: Arial, sans-serif;
    }
    .chat-widget.minimized{
        height:50px;
        width: 180px;
        cursor:pointer;
        overflow: hidden;
    }
    .chat-widget:not(.minimized) .chat-toggle{
        display: none;
    }


    .chat-toggle{
        background: #007Bff;
        color: white;
        padding:10px;
        border-radius:10px;
        text-align:center;
        font-weight: bold;
        user-select: none;

    }
    /* Contenedor general */
    .chat-container {
      /*position: fixed;*/
      /*right: 20px;
      bottom: 20px;
      width: 320px;

      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.5);*/
      background: #161b22;
      bottom: 20px;
      width: 320px;
      border-radius: 10px;
      display: flex;
      overflow: hidden;
      flex-direction: column;
      animation: slide-up 0.4s ease;
    }

    .chat-header {
      background: #1f6feb;
      padding: 10px 14px;
      font-weight: bold;
      font-size: 15px;
    }

    .chat-body {
      padding: 10px;
      height: 260px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .chat-footer {
      display: flex;
      border-top: 1px solid #2d333b;
      background: #0d1117;
    }

    .chat-footer input {
      flex: 1;
      border: none;
      background: transparent;
      padding: 10px;
      color: #fff;
      font-size: 14px;
      outline: none;
    }

    .chat-footer button {
      background: #1f6feb;
      border: none;
      color: #fff;
      padding: 10px 14px;
      cursor: pointer;
      transition: background 0.2s;
      font-weight: bold;
    }

    .chat-footer button:hover {
      background: #2b7cff;
    }

    /* Burbujas */
    .bubble {
      max-width: 80%;
      padding: 10px 12px;
      border-radius: 12px;
      font-size: 14px;
      line-height: 1.4;
      word-wrap: break-word;
      animation: fade-in 0.3s ease;
    }

    .me {
      background: linear-gradient(180deg,#2b7cff,#1b5fd3);
      align-self: flex-end;
    }

    .bot {
      background: #30363d;
      align-self: flex-start;
    }

    /* Efecto escribiendo */
    .typing {
      display: flex;
      align-items: center;
      gap: 4px;
      height: 16px;
      background: #30363d;
      border-radius: 12px;
      padding: 8px 10px;
      align-self: flex-start;
    }

    .dot {
      width: 6px;
      height: 6px;
      background-color: #fff;
      border-radius: 50%;
      opacity: 0.3;
      animation: blink 1.4s infinite;
    }

    .dot:nth-child(2) { animation-delay: 0.2s; }
    .dot:nth-child(3) { animation-delay: 0.4s; }

    @keyframes blink {
      0%, 80%, 100% { opacity: 0.3; transform: translateY(0); }
      40% { opacity: 1; transform: translateY(-2px); }
    }

    @keyframes slide-up {
      from { transform: translateY(10px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fade-in {
      from { opacity: 0; transform: scale(0.98); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>

<div id="chatWidget" class="chat-widget minimized">
    <div class="chat-toggle" >
        💬 Chat IASBCP
    </div>

  <div class="chat-container ">
    <div class="chat-header ">💬 Chat IASBCP</div>
    <div class="chat-body " id="chatBody">
      <div class="bubble bot">  Ola 🤚  sou a inteligência artificial da SBCP. Percebi que está procurando vagas de estágio. Qual tipo de estágio seria para ajudá-lo?</div>
    </div>

    <div class="chat-footer">
      <input type="text" id="chatInput" placeholder="Escribe un mensaje..." autocomplete="off">
      <button id="sendBtn">Enviar</button>
    </div>
  </div>
</div>
  <script>
    const chatWidget = document.getElementById('chatWidget');
    const toggleBtn = chatWidget.querySelector('.chat-toggle');
    const chatBody = document.getElementById('chatBody');
    const chatInput = document.getElementById('chatInput');
    const sendBtn = document.getElementById('sendBtn');

    toggleBtn.addEventListener('click', ()=>{
        chatWidget.classList.toggle('minimized');

    });
const btnIASBCP = document.getElementById('btnIASBCP');

btnIASBCP.addEventListener('click', () => {
  chatWidget.classList.remove('minimized');
});

    function appendMessage(text, type = 'me') {
      const div = document.createElement('div');
      div.classList.add('bubble', type);
      div.textContent = text;
      chatBody.appendChild(div);
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    function appendTyping() {
      const typing = document.createElement('div');
      typing.classList.add('typing');
      typing.innerHTML = '<div class="dot"></div><div class="dot"></div><div class="dot"></div>';
      chatBody.appendChild(typing);
      chatBody.scrollTop = chatBody.scrollHeight;
      return typing;
    }

    sendBtn.addEventListener('click', () => {

      const text = chatInput.value.trim();
      if (!text) return;
      appendMessage(text, 'me');
      chatInput.value = '';

      const typing = appendTyping();

      setTimeout(() => {
        typing.remove();
        appendMessage('Muito obrigado', 'bot');
         loading();
      }, 2000);
    });

    chatInput.addEventListener('keypress', e => {

      if (e.key === 'Enter') sendBtn.click();
    });
  </script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Delegación: escucha clicks en <a> o <button> y detecta los "favoritos"
  document.addEventListener('click', function (e) {
    const btn = e.target.closest('a,button');
    if (!btn) return;

    const txt = (btn.textContent || '').trim().toLowerCase();
    const isFavCandidate =
      txt.includes('agregar a favoritos') ||
      txt.includes('adicionar aos favoritos') ||
      txt.includes('adicionado aos favoritos') ||
      btn.hasAttribute('data-fav-btn') ||
      btn.classList.contains('fav-action');

    if (!isFavCandidate) return;

    e.preventDefault(); // evita navegación si es <a>

    // guardar texto original la primera vez
    if (!btn.dataset.origText) btn.dataset.origText = btn.textContent.trim();

    const isFav = btn.dataset.fav === '1';

    if (!isFav) {
      // marcar como favorito (solo este botón)
      btn.textContent = 'Adicionado aos favoritos';
      btn.dataset.fav = '1';
      btn.classList.remove('bg-white/10', 'hover:bg-emerald-600', 'hover:bg-emerald-500', 'text-white');
      btn.classList.add('bg-emerald-600', 'text-black');
    } else {
      // revertir
      btn.textContent = btn.dataset.origText || 'Agregar a favoritos';
      btn.dataset.fav = '0';
      btn.classList.remove('bg-emerald-600', 'text-black');
      btn.classList.add('bg-white/10', 'text-white');
    }
  }, false);
});
</script>


<script>
document.addEventListener('click', function(e){
  const btn = e.target.closest('button');
  if (!btn) return;

  // identificar botones por texto exacto o por atributo data-detail-btn
  const text = (btn.textContent || '').trim();
  if (text !== 'Detalhes do estágio' && btn.dataset.detailBtn !== '1') return;

  // guardar estado original la primera vez
  if (!btn.dataset.origText) btn.dataset.origText = btn.textContent.trim();
  if (!btn.dataset.origClass) btn.dataset.origClass = btn.className;

  const isInscrito = btn.dataset.inscrito === '1';

  if (!isInscrito) {
    // marcar como inscrito
    btn.textContent = 'Inscrito';
    btn.classList.remove('bg-white/10','hover:bg-emerald-500','text-white');
    btn.classList.add('bg-emerald-600','text-black');
    btn.dataset.inscrito = '1';
  } else {
    // restaurar
    btn.textContent = btn.dataset.origText;
    btn.className = btn.dataset.origClass;
    btn.dataset.inscrito = '0';
  }
});
</script>

</x-app-layout>
