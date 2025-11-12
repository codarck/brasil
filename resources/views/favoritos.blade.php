<x-app-layout>
  <div class="max-w-8xl mx-auto">
    <h1 class="text-2xl font-semibold text-white mb-4">Favoritos</h1>

    @php
      // Reemplazamos el set inicial por una lista más completa que refleje
      // las entradas usadas en los templates demo client-side (servico, credenciados, formado, professor).
      // Datos sincronizados con los templates demo (orden acorde al HTML proporcionado)
      $contacts = $contacts ?? collect([
        // Profesores (aparecen primero en el HTML que enviaste)
        /*(object)[
          'id'=>4,
          'nome'=>'Dra Aline Campos',
          'avatar'=>'aline.png',
          'instituicao'=>'Cirurgiã plástica credenciada, Moema, São Paulo',
          'bairro'=>'Moema',
          'cidade'=>'São Paulo',
          'estrelas'=>4.9,
          'category'=>'professor',
          'preferencias'=>'cirurgia estética, cirurgia reparadora',
          'palavras_chave'=>'cirurgia estética mamária, cirurgia reparadora mamária, contorno corporal, cirurgia estética da face, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral',
          'show_gps'=>false,
          'show_stars'=>false
        ],

        (object)[
          'id'=>5,
          'nome'=>'Dr Vitor Zanatta',
          'avatar'=>'aline.png',
          'instituicao'=>'Cirurgião plástico credenciado, Moema, São Paulo',
          'bairro'=>'Moema',
          'cidade'=>'São Paulo',
          'estrelas'=>4.6,
          'category'=>'professor',
          'preferencias'=>'cirurgia estética',
          'palavras_chave'=>'cirurgia mamaria, contorno corporal, cirurgia estética da face, cirurgia estética pós bariátrica, cosmiatria, orbitopalpebral',
          'show_gps'=>false,
          'show_stars'=>false
        ],

        // Servicios (template servico: id 1 y 2)
        (object)[
          'id'=>1,
          'nome'=>'Serviço de Cirurgia Plástica Dr. Oswaldo de Castro',
          'avatar'=>'aline.png',
          'instituicao'=>'Serviço de Cirurgia Plástica — Brooklin, São Paulo',
          'bairro'=>'Brooklin',
          'cidade'=>'São Paulo',
          'estrelas'=>4.5,
          'category'=>'servico',
          'preferencias'=>'contorno corporal, rinoplastia',
          'palavras_chave'=>'contorno corporal, rinoplastia',
          'show_gps'=>false,
          'show_stars'=>false
        ],*/
(object)[
          'id'=>13,
          'nome'=>'Clínica de Cirurgia Plástica - André Parreira de Castro',
          'avatar'=>'Andre_P_Castro.png',
          'instituicao'=>'Clínica André Parreira',
          'bairro'=>'',
          'cidade'=>'São Paulo',
          'km'=>'3.1',
          'estrelas'=>4.0,
          'category'=>'credenciados',
          'preferencias'=>'cirurgia Estética',
          'palavras_chave'=>'contorno corporal, cirurgia mamária, orbitopalpebral, rinoplastia, cirurgia estética da face, Cosmiatria',
          'show_gps'=>false,
          'show_stars'=>false
        ],
        (object)[
          'id'=>11,
          'nome'=>'Dra Aline Campos',
          'avatar'=>'aline.png',
          'instituicao'=>'Cirurgiã plástica credenciada',
          'bairro'=>'Moema',
          'cidade'=>'São Paulo',
          'km'=>'12',
          'estrelas'=>4.0,
          'category'=>'credenciados',
          'preferencias'=>'cirurgia estética, cirurgia reparadora',
          'palavras_chave'=>'cirurgia estética mamária, cirurgia reparadora mamária, contorno corporal',
          'show_gps'=>false,
          'show_stars'=>false
        ],
        (object)[
          'id'=>14,
          'nome'=>'Dr Lucas Rinaldi',
          'avatar'=>'lucas.png',
          'instituicao'=>'Cirurgião plástico credenciado, Tatuapé, São Paulo',
          'bairro'=>'Guarulhos',
          'cidade'=>'São Paulo',
          'km'=>'18',
          'estrelas'=>4.1,
          'category'=>'credenciados',
          'preferencias'=>'cirurgia Estética',
          'palavras_chave'=>'contorno corporal, lipoaspiração de alta definição, cirurgia mamária, orbitopalpebral , rinoplastia , cirurgia estética da face, cirurgia estética pós bariátrica, Cosmiatria',
          'show_gps'=>false,
          'show_stars'=>false
        ],

        (object)[
          'id'=>2,
          'nome'=>'Setor de Cirurgia Plástica e Unidade de Terapia de Queimados ',
          'avatar'=>'Hospital_Vila_Penteado.png',
          'instituicao'=>'Hospital Vila Penteado Hospital',
          'bairro'=>'Jardim Iracema',
          'cidade'=>'São Paulo',
          'km'=>'21',
          'estrelas'=>4.1,
          'category'=>'servico',
          'preferencias'=>'tratamiento de queimados, cirurgia de mão, cirurgia reparadora',
          'palavras_chave'=>'grande queimado, cirurgia reparadora, retalhos, enxertos',
          'show_gps'=>false,
          'show_stars'=>false
        ],

        // Credenciados
       /* (object)[
          'id'=>10,
          'nome'=>'IBCC Oncologia - Instituto Brasileiro de Controle do Câncer',
          'avatar'=>'aline.png',
          'instituicao'=>'IBCC Oncologia',
          'bairro'=>'Mooca',
          'cidade'=>'São Paulo',
          'estrelas'=>4.2,
          'category'=>'credenciados',
          'preferencias'=>'cirurgia reparadora, microcirurgia, cirurgia de mão',
          'palavras_chave'=>'cirurgia reparadora mamária, retalhos, enxertos, microcirurgia',
          'show_gps'=>false,
          'show_stars'=>false
        ],
*/



        (object)[
          'id'=>12,
          'nome'=>'Serviço de Cirurgia Plástica Dr.Oswaldo de Castro',
          'avatar'=>'oswaldo.png',
          'instituicao'=>'Serviço de cirurgia plástica, Guarulhos, São Paulo',
          'bairro'=>'',
          'cidade'=>'São Paulo',
          'km'=>'27',
          'estrelas'=>3.9,
          'category'=>'credenciados',
          'preferencias'=>'cirurgia Estética, cirurgia reparadora',
          'palavras_chave'=>'cirurgia mamaria, contorno corporal, orbitopalpebral',
          'show_gps'=>false,
          'show_stars'=>false
        ],





        // Formados / outros usuarios
        (object)[
          'id'=>20,
          'nome'=>'Dr Sonny Chen',
          'avatar'=>'sony.png',
          'instituicao'=>'Residente de 1• ano, Serviço de Cirurgia Plástica Dr. Oswaldo de Castro — Moema, São Paulo',
          'bairro'=>'Moema',
          'cidade'=>'São Paulo',
          'km'=>'',
          'estrelas'=>4.7,
          'category'=>'formado',
          'preferencias'=>'cirurgia estética, cirurgia reparadora',
          'palavras_chave'=>'cirurgia mamária, contorno corporal, cirurgia estética da face, rinoplastia, cirugía estética pós bariátrica, cosmiatria, orbitopalpebral'
        ],

        (object)[
          'id'=>21,
          'nome'=>'Dr Kaue Sucena',
          'avatar'=>'kague.png',
          'instituicao'=>'Residente de 3º ano - Serviço de Cirurgia Plástica Dr. Oswaldo de Castro — Aclimação, São Paulo',
          'bairro'=>'Aclimação',
          'cidade'=>'São Paulo',
          'km'=>'',
          'estrelas'=>4.6,
          'category'=>'formado',
          'preferencias'=>'cirurgia estética, cirurgia reparadora',
          'palavras_chave'=>'cirurgia mamária, contorno corporal, cirurgia estética da face, rinoplastia, cirugía estética pós bariátrica, cosmiatria, orbitopalpebral'
        ],
      ]);
      $favorites = $favorites ?? [1];
    @endphp

    <div class="bg-white/5 p-4 rounded border border-white/10 mb-4">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
        <div class="relative w-full md:w-1/2">
          <label for="contacts-search" class="sr-only">Buscar contactos</label>
          <svg class="absolute left-3 top-7 -translate-y-1/2 w-5 h-5 text-gray-500  pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 1 1-12 0 6 6 0 0 1 12 0z"/></svg>
          <input id="contacts-search" type="search" placeholder="Buscar todos los contactos" aria-label="Buscar contactos"
              class="w-full p-2 pl-10 rounded bg-white/3 " />
        </div>

        <div class="flex gap-2 items-center">
          <div class="flex gap-2 items-center">

            <button type="button" data-value="servico" class="category-btn px-3 py-1 rounded bg-white/5 text-white text-sm">Serviços de Cirurgias Plástica</button>
            <button type="button" data-value="credenciados" class="category-btn px-3 py-1 rounded bg-white/5 text-white text-sm">Hospitais e Clínicas credenciados</button>
            <button type="button" data-value="professor" class="category-btn px-3 py-1 rounded bg-white/5 text-white text-sm">Professores credenciados</button>
            <button type="button" data-value="formado" class="category-btn px-3 py-1 rounded bg-white/5 text-white text-sm">Otros usuarios</button>
          </div>
          <input id="filter-category" type="hidden" value="" />
        </div>
      </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-4">

      <div class="lg:col-span-3">
        <div class="bg-white/5 p-4 rounded border border-white/10 mb-4">
          <div class="flex items-center justify-between">
            <div class="font-semibold text-white">Todos los contactos</div>
            <div id="results-count" class="text-sm text-white/70">{{ $contacts->count() }} resultados</div>
          </div>
        </div>

        <div id="contacts-list" class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
          @foreach($contacts as $c)
            @php $isFav = in_array($c->id, (array)$favorites); @endphp

            <div class="contact-card bg-white/5 p-5 rounded border border-white/10 flex gap-4 items-start" data-id="{{ $c->id }}" data-nome="{{ $c->nome }}" data-instituicao="{{ $c->instituicao }}" data-bairro="{{ $c->bairro }}" data-cidade="{{ $c->cidade }}" data-category="{{ $c->category ?? '' }}">
              <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
  @if(!empty($c->avatar))
    <img src="{{ asset('storage/' . $c->avatar) }}" alt="{{ $c->nome }}" class="w-12 h-12 rounded-full object-cover">
  @else
    @php
      $parts = preg_split('/\s+/', trim($c->nome));
      $initials = strtoupper(($parts[0][0] ?? '') . ($parts[1][0] ?? ''));
    @endphp
    {{ $initials ?: 'Dr' }}
  @endif
</div>

              <div class="flex-1">
                <div class="flex items-start justify-between gap-3">
                  <div>
                    <div class="font-semibold text-white text-lg">{{ $c->nome }}</div>
                    <div class="text-sm text-white/70 mt-1">{{ $c->instituicao }} — {{ $c->bairro }}, {{ $c->cidade }}</div>
                  </div>

                  <div class="text-right">
                    @if(!isset($c->show_stars) || $c->show_stars)
                      <div class="text-white font-medium">{{ $c->estrelas }} ⭐</div>
                    @endif
                    @if(!isset($c->show_gps) || $c->show_gps)

                      <div class="text-sm text-white/60 mt-1 flex items-center gap-1">

                      </div>
                    @else
                    {{-- <svg class="w-4 h-4 fill-current text-white/80" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
                        <span class="text-white/70"></span> --}}
                   {{ $c->km }}km
                    @endif
                  </div>
                </div>

                <div class="mt-3 text-white/70">Preferencias: <br>

                   @php
  $prefs = collect(explode(',', $c->preferencias ?? ''))->map(fn($s) => trim($s))->filter()->values();
@endphp

@if($prefs->isEmpty())
  <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">—</span>
@else
  <div class="flex flex-wrap gap-2">
    @foreach($prefs as $p)
      <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
        {{ $p }}
      </span>
    @endforeach
  </div>
@endif


                    </div>
                <div class="mt-2 text-white/70">Palavras-chave: <br>
                    @php
  $tags = collect(explode(',', $c->palavras_chave ?? ''))->map(fn($s) => trim($s))->filter()->values();
  $visibleTags = $tags->slice(0, 3);
  $hiddenTags = $tags->slice(3);
@endphp

@if($tags->isEmpty())
  <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">—</span>
@else
  <div class="flex flex-wrap gap-2 items-center">
    @foreach($visibleTags as $t)
      <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
        {{ $t }}
      </span>
    @endforeach

    @if($hiddenTags->isNotEmpty())
      <div class="flex items-center gap-2">
        <div class="hidden rest-tags flex-wrap gap-2" aria-hidden="true">
          @foreach($hiddenTags as $t)
            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
              {{ $t }}
            </span>
          @endforeach
        </div>

        <button type="button" class="toggle-tags text-sm text-white/80 px-2 py-1 rounded hover:bg-white/5" aria-expanded="false">...</button>
      </div>
    @endif
  </div>
@endif
                    </div>

                <div class="mt-4">
                  <div class="flex gap-3">
                    <form method="POST" action="" class="inline-block">
                      @csrf

                    </form>


                  </div>

                  <div class="mt-1 flex  items-center gap-2   ">
                    <a href="#" class="px-4 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Ver perfil</a>
                    <a href="/chat" class="px-3 py-4 bg-white/10 hover:bg-emerald-500 rounded text-white text-base text-center">Conversar</a>
                    <a href="#" class=" py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Detalhes do estágio</a>
                  </div>
                </div>
              </div>
            </div>

          @endforeach
        </div>
      </div>
    </div>
  </div>
<script>
document.addEventListener('click', function(e){
  const btn = e.target.closest('.toggle-tags');
  if (!btn) return;
  const wrapper = btn.previousElementSibling; // .rest-tags
  if (!wrapper) return;
  const expanded = btn.getAttribute('aria-expanded') === 'true';
  if (expanded) {
    wrapper.classList.add('hidden');
    btn.setAttribute('aria-expanded','false');
   /* btn.textContent = '...';*/
  } else {
    wrapper.classList.remove('hidden');
    btn.setAttribute('aria-expanded','true');
   /* btn.textContent = 'Menos';*/
  }
});
</script>
  <script>
document.addEventListener('DOMContentLoaded', function () {
  const container = document.getElementById('contacts-list');
  const countEl = document.getElementById('results-count');
  const hidden = document.getElementById('filter-category');
  if (!container) return;
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
              <div class="text-base text-white/70">Cirurgiã plástica credenciada, Moema, São Paulo</div>
            </div>
            <div class="text-right">


            </div>
            <div class="flex items-center gap-2 text-white/80">
              <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>5.2km
              <a href="#"><div class="text-sm"></div></a>
            </div>
          </div>

           <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

            <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética
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
          <div class="mt-1 flex  items-center gap-2   ">
                    <a href="#" class="px-4 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Ver perfil</a>
                    <a href="/chat" class="px-3 py-4 bg-white/10 hover:bg-emerald-500 rounded text-white text-base text-center">Conversar</a>
                    <a href="#" class="px-2 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Detalhes do estágio</a>
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
              <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>5.2km
              <a href="#"><div class="text-sm"></div></a>

            </div>
          </div>
         <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
   cirurgia Estética
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

          <div class="mt-1 flex  items-center gap-2   ">
                    <a href="#" class="px-4 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Ver perfil</a>
                    <a href="/chat" class="px-3 py-4 bg-white/10 hover:bg-emerald-500 rounded text-white text-base text-center">Conversar</a>
                    <a href="#" class="px-2 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Detalhes do estágio</a>
                  </div>
        </div>
      </div>
    </div>
  `;

  const fake = {
    servico: `


      <div class="contact-card bg-white/5 p-5 rounded border border-white/10 flex gap-4 items-start" data-id="2" data-nome="Setor de Cirurgia Plástica e Unidade de Terapia de Queimados " data-bairro="Vila Penteado" data-cidade="São Paulo" data-category="servico">
        <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Hospital_Vila_Penteado.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
        <div class="flex-1">
          <div class="flex items-start justify-between gap-3">
            <div>
              <div class="font-semibold text-white text-lg">Setor de Cirurgia Plástica e Unidade de Terapia de Queimados </div>

              <div class="text-sm text-white/70 mt-1">Hospital Vila Penteado
Hospital, Jardim Iracema, São Paulo</div>
            </div>
            <div class="text-right">

                <div class="flex items-center gap-2 text-white/80">
              <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>21km
              <a href="#"><div class="text-sm"></div></a>

            </div>
              <div class="text-xs text-white/60 mt-1"></div>
            </div>
          </div>
          <div class="mt-3 text-base text-white/70">
                Estágios credenciados:  <br>
                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    tratamento de queimados
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
          <div class="mt-1 flex  items-center gap-2   ">
                    <a href="#" class="px-4 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Ver perfil</a>
                    <a href="/chat" class="px-3 py-4 bg-white/10 hover:bg-emerald-500 rounded text-white text-base text-center">Conversar</a>
                    <a href="#" class="px-2 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Detalhes do estágio</a>
                  </div>
        </div>
      </div>


      <div class="contact-card bg-white/5 p-5 rounded border border-white/10 flex gap-4 items-start" data-id="1" data-nome="Serviço de Cirurgia Plástica Dr. Oswaldo de Castro" data-instituicao="Serviço de Cirurgia Plástica — Brooklin, São Paulo" data-bairro="Brooklin" data-cidade="São Paulo" data-category="servico">
        <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/oswaldo.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">
           </div>
        <div class="flex-1">

          <div class="flex items-start justify-between gap-3">

            <div>
              <div class="font-semibold text-white text-lg">Serviço de Cirurgia Plástica Dr. Oswaldo de Castro</div>

              <div class="text-sm text-white/70 mt-1">Serviço de Cirurgia Plástica — Brooklin, São Paulo</div>
            </div>
            <div class="text-right">
                <div class="flex items-center gap-2 text-white/80">
              <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>27km
              <a href="#"><div class="text-sm"></div></a>

            </div>
              <div class="text-xs text-white/60 mt-1"></div>
            </div>
          </div>

          <div class="mt-3 text-white/70">Estágios credenciados: <br>
                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia Estética
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora
</span>
                  <br >
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
          <div class="mt-1 flex  items-center gap-2   ">
                    <a href="#" class="px-4 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Ver perfil</a>
                    <a href="/chat" class="px-3 py-4 bg-white/10 hover:bg-emerald-500 rounded text-white text-base text-center">Conversar</a>
                    <a href="#" class="px-2 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Detalhes do estágio</a>
                  </div>
        </div>
      </div>
    `,

    credenciados: `






      <div class="contact-card bg-white/5 p-5 rounded border border-white/10 flex gap-4 items-start" data-id="13" data-nome="Clínica de Cirurgia Plástica - André Parreira de Castro" data-instituicao="Clínica André Parreira" data-bairro="" data-cidade="São Paulo" data-category="credenciados">
         <div class="w-14 h-14 bg-white/6 rounded flex items-center justify-center text-white/80 font-semibold text-base">
<img src="{{ asset('storage/Andre_P_Castro.png') }}" alt="" class="w-12 h-12 rounded-full object-cover">

           </div>
        <div class="flex-1">

             <div class="flex items-start justify-between gap-3">
                <div>
<div class="font-semibold text-white">Clínica de Cirurgia Plástica - André Parreira de Castro</div>

          <div class="text-sm text-white/70 mt-1">Clínica, Moema, São Paulo</div>
          </div>
<div class="text-right">
                <div class="flex items-center gap-2 text-white/80">
              <svg class="w-4 h-4 fill-current text-white" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/></svg>3.1km
              <a href="#"><div class="text-sm"></div></a>

            </div>
            </div>
          </div>


         <div class="mt-3 text-base text-white/70">Estágios credenciados: <br>

                <span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia Estética
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


            <div class="mt-1 flex  items-center gap-2   ">
                    <a href="#" class="px-4 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Ver perfil</a>
                    <a href="/chat" class="px-3 py-4 bg-white/10 hover:bg-emerald-500 rounded text-white text-base text-center">Conversar</a>
                    <a href="#" class="px-2 py-1 bg-white/10  hover:bg-emerald-500 rounded text-white text-base text-center">Detalhes do estágio</a>
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
    cirurgia estética
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
            <div class="mt-1 flex  items-center gap-2">
            <a href="/chat" class="px-3 py-4 bg-white/10 hover:bg-emerald-500 rounded text-white text-base text-center">Conversar</a>
            <button class="px-3 py-4 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>

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
    cirurgia estética
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
            <div class="mt-1 flex  items-center gap-2">
            <a href="/chat" class="px-3 py-4 bg-white/10 hover:bg-emerald-500 rounded text-white text-base text-center">Conversar</a>
            <button class="px-3 py-4 bg-white/10  hover:bg-emerald-500 rounded text-white text-base">Ver perfil</button>

          </div>




          </div>
        </div>
      </div>
    `
  };

  function resetButtons() {
    document.querySelectorAll('.category-btn').forEach(b => {
      b.dataset.fakeActive = '0';
      b.classList.remove('bg-emerald-600','text-black');
      b.classList.add('bg-white/5','text-white');
    });
  }

  document.querySelectorAll('.category-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const key = btn.dataset.value || '';
      const wasActive = btn.dataset.fakeActive === '1';
      resetButtons();

      if (!wasActive && key !== '') {
        btn.dataset.fakeActive = '1';
        btn.classList.remove('bg-white/5','text-white');
        btn.classList.add('bg-emerald-600','text-black');

        if (key === 'professor') {
          container.innerHTML = professorHtml || container.dataset.initialHtml;
          if (countEl) countEl.textContent = '2 resultados';
          if (hidden) hidden.value = 'professor';
        } else {
          container.innerHTML = fake[key] || container.dataset.initialHtml || '';
          const matches = (fake[key] || '').match(/class="bg-white\/5/g) || [];
          if (countEl) countEl.textContent = `${matches.length} resultado${matches.length !== 1 ? 's' : ''}`;
          if (hidden) hidden.value = key;
        }
      } else {
        container.innerHTML = container.dataset.initialHtml || '';
        if (countEl) countEl.textContent = originalCount;
        if (hidden) hidden.value = '';
        const allBtn = document.getElementById('cat-all');
        if (allBtn) { resetButtons(); allBtn.classList.add('bg-emerald-600'); }
      }

      if (typeof renderDistances === 'function') renderDistances();
    });
  });

  const allBtn = document.getElementById('cat-all');
  if (allBtn) allBtn.classList.add('bg-emerald-600');

  const searchEl = document.getElementById('contacts-search');
  searchEl && searchEl.addEventListener('input', function () {
    const q = (this.value || '').trim().toLowerCase();
    const cards = Array.from(document.querySelectorAll('#contacts-list .contact-card'));
    let visible = 0;
    cards.forEach(card => {
      const text = [
        card.dataset.nome,
        card.dataset.instituicao,
        card.dataset.bairro,
        card.dataset.cidade
      ].join(' ').toLowerCase();
      const show = !q || text.includes(q);
      card.style.display = show ? '' : 'none';
      if (show) visible++;
    });
    if (countEl) countEl.textContent = `${visible} resultados`;
    const favItems = Array.from(document.querySelectorAll('.fav-item'));
    favItems.forEach(item => {
      const id = Number(item.dataset.id);
      const card = document.querySelector(`#contacts-list .contact-card[data-id="${id}"]`);
      item.style.display = (card && card.style.display !== 'none') ? '' : 'none';
    });
  });
});
  </script>
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
      <div class="bubble bot">  Olá 👋, sou a inteligência artificial da SBCP, me diga como posso te ajudar hoje?</div>
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
        appendMessage('Claro. Dr Eduardo Cano. Se já completou todas as informações do seu perfil. É só entrar na aba Solicitações, ali consegue fazer a busca do estágio da sua preferência. 👍', 'bot');
      }, 1500);
    });

    chatInput.addEventListener('keypress', e => {
      if (e.key === 'Enter') sendBtn.click();
    });
  </script>

<script>
document.addEventListener('click', function(e){
  const trigger = e.target.closest('[data-trigger-category]');
  if (!trigger) return;

  const cat = trigger.dataset.triggerCategory;
  if (!cat) return;

  // busca el botón de pestaña correspondiente (prioriza el primero visible)
  const tabBtn = document.querySelector('.category-btn[data-value="'+cat+'"]');
  if (tabBtn) {
    tabBtn.click(); // simula la selección
    // opcional: desplazar al área de contenido
    const pane = document.getElementById('content-' + cat);
    if (pane) pane.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
});
</script>



</x-app-layout>
