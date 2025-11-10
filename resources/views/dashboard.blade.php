<x-app-layout >

   <div class="flex items-center gap-4 border border-[#03A6AC]">
      <div class="px-3 py-1 bg-white/8 text-white rounded-md font-semibold tracking-wider text-xl">PERFIL</div>
      <div class="text-xl text-white/80">
        <div class="leading-4 ">Status:

            <span class="font-semibold text-emerald-300"> Validado</span>

            <!-- validado - náo validado  -->

        </div>
      </div>
    </div>
<div class="md:flex border border-[#03A6AC] ">

  <!-- Coluna esquerda: perfil resumido (según tu boceto) -->
  <aside class="md:w-2/5 p-6 bg-gradient-to-br from-[#08adb3] to-[#03A6AC] text-white flex flex-col items-center">

    <div class="w-full max-w-xs flex flex-col items-center">

      <!-- Foto -->

      <div class="relative w-80 h-80 rounded-lg overflow-hidden border-4 border-white/10 bg-white/5">
  <img src="{{ asset('profile.png') }}" alt="Foto" class="w-full h-full object-cover">

  <!-- lápiz en la esquina inferior derecha + input oculto para cargar -->
  <label for="avatarUpload" class="absolute bottom-2 right-2 bg-white/10 hover:bg-white/20 text-white p-2 rounded-full shadow-md cursor-pointer" title="Editar foto">
    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15.232 5.232l3.536 3.536M4 20l7.5-1.5L20 9.5a2.121 2.121 0 000-3L17.5 4a2.121 2.121 0 00-3 0L4 14.5V20z"/>
    </svg>
  </label>
  <input id="avatarUpload" name="avatar" type="file" accept="image/*" class="sr-only" />
</div>

      <!-- Botón de contacto -->


      <!-- Nombre / cargo -->
      <div class="mt-4 text-center">
        <div class="flex items-center justify-center gap-2">
        <h3 class="text-xl font-semibold">Dr. Eduardo Cano
        </h3>
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15.232 5.232l3.536 3.536M4 20l7.5-1.5L20 9.5a2.121 2.121 0 000-3L17.5 4a2.121 2.121 0 00-3 0L4 14.5V20z"/>
    </svg>
    </div>
        <p class="text-xl opacity-80">Cirurgião Plástico — Residente</p>
      </div>
 <select class="mt-4 w-full text-center px-4 py-2 bg-[#17466E] hover:bg-[#1c5281] rounded-md  " name="" id="">
        <option value="" class="text-xl"   hidden>Entrar em contato</option>
        <option value="" class="text-base">Telefone celular: +55 11 93146-5514</option>
        <option value="" class="text-base">Email: edurule@gmail.com</option>
        <option value="" class="text-base">Chat interativo</option>

        <option value="" class="text-base">Agregar a favoritos</option>
      </select>

      <!-- Rating -->


      <!-- Lista de dados / contacto -->
      {{-- <dl class="mt-6 w-full text-xl space-y-2">
        <div class="flex justify-between"><dt class="opacity-80">Idade</dt><dd>35</dd></div>
        <div class="flex justify-between"><dt class="opacity-80">Local</dt><dd>Rio de Janeiro, BR</dd></div>
        <div class="flex justify-between"><dt class="opacity-80">CRM</dt><dd>12345‑RJ</dd></div>
      </dl> --}}

      <div class="mt-4 w-full text-xl space-y-1" hidden>
        <div>Telefone celular profissional: <a href="tel:+550000000000" class="underline">+55 0 0000-0000</a></div>
        <div>Email: <a href="mailto:exemplo@clinica.com" class="underline">exemplo@clinica.com</a></div>
        {{-- <div>Chat interativo: <span class="text-emerald-300 font-medium">Online</span></div> --}}
        <div>Chat interativo </div>
      </div>
    </div>
  </aside>

  <!-- Coluna direita: detalle y actions -->
<section class="md:w-3/5 p-6 bg-transparent text-white ">
    <div class="flex items-start justify-between">
      <div>
        <h2 class="text-2xl font-bold">Dr. Eduardo Cano</h2>
        <p class="mt-2 text-xl opacity-90">Residente de 1º ano — Serviço de Cirurgia Plástica Dr. Oswaldo de Castro </p>
      </div>

    </div>

    <div class="mt-6">
      <div class="bg-white/5 p-4 rounded text-white max-w-3xl">
        <h4 class="font-semibold mb-3">Informações do perfil</h4>
        <ul class="text-xl space-y-1">
          <li>Dr. Eduardo Cano Huachin
           </li>
            {{-- (Carlo / Cardo) Hurochin --}}
          <li>35 anos </li>
          {{-- (idade) --}}
          <li>Brooklin, São Paulo </li>
          {{-- (bairro e cidade) --}}
          <li>Residente de 1º ano </li>
          {{-- (cargo ou função) --}}
          <li>Serviço de Cirurgia Plástica Dr. Oswaldo de Castro </li>
          {{-- (instituição) --}}
        </ul>
      </div>
    </div>
    <p class="py-4"></p>
    <label for="" class="font-bold text-xl ml-4">AVALIAÇÃO</label>
    <div class="mt-4 flex items-center gap-3 ml-2">
        <div class="flex text-yellow-400">
          <!-- 4 estrellas llenas + 1 vacía -->
          <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
          <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
          <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
          <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
          <svg class="w-10 h-10 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
        </div>
        <div class="text-xl opacity-90">4.7 </div>
        {{-- (120 avaliações) --}}
      </div>
</section>
  {{-- <div class="text-xl opacity-70">Atualizado: 2 dias</div> --}}
</div>
  <div class="py-4"></div>


  <div class=" mt-8 bg-white/5 p-6 rounded border border-[#03A6AC] text-white"  >

    <div class=" py-1 bg-white/8 text-white rounded-md font-semibold tracking-wider text-xl">
APRESENTAÇÃO</div>


    <div class="text-xl">
    Meu nome é Eduardo Patricio Cano Huachin, sou residente de cirurgia plástica do Serviço Dr Oswaldo de Castro. Sou especialista em Ultrassonografia e membro do Colégio Brasileiro de Radiologia. Com formação e atuação em tratamento com ortobiologicos em lesões esportivas, guiados por ultrassonografia.
Tive experiência como Diretor médico na Clínica Corazón de Jesús em Lima, Perú, onde implementei modelos de gestão e criei um sistema personalizado, inspirado nos melhores padrões internacionais de qualidade hospitalar. Futuramente realizarei projetos de pesquisa que reafirmem a grande importância da ultrassonografia na Cirurgia Plastica.
    </div>

    <div class="mt-6">
    <!-- botón simulación de descarga de CV -->
    <div class="flex items-center gap-3">
      <a
         href="{{ asset('doc/CV.pdf') }}"
         download="EDUARDO.pdf"
         class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow"
         title="Descargar CV">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" width="20" alt="">
        <span class="font-medium text-red-500">Download CV</span>
      </a>

      {{-- <span class="text-sm text-white/70">Formato: simulación (.txt)</span> --}}
    </div>
    <div class="flex flex-row-reverse space-x-4 space-x-reverse">

    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15.232 5.232l3.536 3.536M4 20l7.5-1.5L20 9.5a2.121 2.121 0 000-3L17.5 4a2.121 2.121 0 00-3 0L4 14.5V20z"/>
    </svg>
    </div>
  </div>
  </div>
<div class=" mt-8 bg-white/5 p-6 rounded border border-[#03A6AC]" >
<div class="flex flex-wrap gap-3">
  <h4 class="tab-btn px-4 py-2 rounded-md border border-white/20 text-white text-xl transition-transform hover:scale-105" onclick="showSection('detalhe')" role="button" aria-pressed="false">Detalhe da avaliação</h4>
  <h4 class="tab-btn px-4 py-2 rounded-md border border-white/20 text-white text-xl transition-transform hover:scale-105" onclick="showSection('preferencias')" role="button" aria-pressed="false">Preferências do cirurgião/palavras chave </h4>
  <h4 class="tab-btn px-4 py-2 rounded-md border border-white/20 text-white text-xl transition-transform hover:scale-105" onclick="showSection('descricao')" role="button" aria-pressed="false">Comentários</h4>
</div>
   <div id="detalhe" hidden>
<div class="mt-4 flex items-center gap-3 py-2"  >
        <div class="flex text-yellow-400">
          <!-- 4 estrellas llenas + 1 vacía -->
          <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
          <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
          <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
          <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
          <svg class="w-10 h-10 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.177c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118L10 15.347l-3.553 2.316c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.446 9.397c-.783-.57-.38-1.81.588-1.81h4.177a1 1 0 00.95-.69l1.286-3.97z"/></svg>
        </div>
        <div class="text-xl text-white">4.7 </div>
        {{-- (120 avaliações) --}}
      </div>

  <ul class=" text-xl text-white/90">
    <li class="space-y-4">
      <div class="flex justify-between mb-1 text-xl text-white font-semibold">
        <span>Curriculum vitae</span>
        <span class="font-medium">9.7</span>
      </div>
      <div class="h-2 bg-white/10 rounded overflow-hidden">
        <div class="h-full bg-emerald-500" style="width:97%"></div>
      </div>
    </li>

    <li class="space-y-4">
      <div onclick="functionocultar();" class="flex justify-between mb-1 text-xl text-white font-semibold">
        <span>Nota média dos estágios realizados</span>
        <span class="font-medium">9.7</span>
      </div>
      <div class="h-2 bg-white/10 rounded overflow-hidden">
        <div class="h-full bg-emerald-500" style="width:90%"></div>
      </div>
    </li>
    <ul id="ocultar2" hidden class="text-white/90 space-y-2 text-xl text-white font-semibold px-12 py-4 ">



      {{--
      <li class="flex justify-between">
        <span>Avaliação inicial</span>
        <span class="text-xl opacity-90">--</span>
      </li>
      --}}




    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold ">
            <i>Cirurgia crânio-maxilo-facial</i>
            <span class="font-medium">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>

    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Tratamento de queimados</i>
            <span class="font-medium">9.7</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:97%"></div>
        </div>
    </li>
    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Microcirurgia</i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>
    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Cirurgia da mão</i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>
    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Cirurgia reparadora</i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>
    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Cirurgia estetica </i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>
    {{-- <li class="flex justify-between">
        <span>Cartas de recomendação</span>
        <span class="font-medium">0.4</span>
      </li> --}}
    </ul>
  </ul>
    <div class="space-y-4">
      <div  onclick="mycarta()" class="flex justify-between mb-1 text-xl text-white font-semibold">
        <span>Cartas de recomendação</span>
        <span class="font-medium">10</span>
      </div>
      <div class="h-2 bg-white/10 rounded overflow-hidden">
        <div class="h-full bg-emerald-500" style="width:100%"></div>
      </div>
    </div>
 <ul id="ocultar3" hidden class="text-white/90 space-y-2 text-xl text-white font-semibold px-12 py-4 ">



      {{--
      <li class="flex justify-between">
        <span>Avaliação inicial</span>
        <span class="text-xl opacity-90">--</span>
      </li>
      --}}




    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold ">
            <i>Cirurgia crânio-maxilo-facial</i>
            <span class="font-medium">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>

    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Tratamento de queimados</i>
            <span class="font-medium">10
                <button class="bg-white ml-2 p-1 rounded-full hover-gray-100" title="Mais informações sobre esta avaliação">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" width="20px" alt="">
</button>
            </span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:100%"></div>
        </div>
    </li>
    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Microcirurgia</i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>
    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Cirurgia da mão</i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>
    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Cirurgia reparadora</i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>
    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Cirurgia estetica </i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:0%"></div>
        </div>
    </li>
    {{-- <li class="flex justify-between">
        <span>Cartas de recomendação</span>
        <span class="font-medium">0.4</span>
      </li> --}}
    </ul>
    <div class="">
      <div onclick="myFunction()" class=" space-y-4 flex justify-between mb-1 text-xl text-white font-semibold">
        <span>Nota média das avaliações do DESC <br>
        </span>
        <span class="font-medium">--</span>

      </div>
</div>
      <div class="h-2 bg-white/10 rounded overflow-hidden">
        <div class="h-full bg-emerald-500" style="width:40%"></div>
      </div>

     <ul id="ocultar" hidden class=" text-white/90 space-y-2 text-xl text-white font-semibold px-12 py-4 ">

      {{-- <li class="flex justify-between">
        <span>Avaliação inicial</span>
        <span class="text-xl opacity-90">--</span>
      </li> --}}

    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Prova de R1</i>
            <span class="font-medium">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:40%"></div>
        </div>
    </li>

    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Prova de R2</i>
            <span class="font-medium">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:40%"></div>
        </div>
    </li>

    <li>
        <div class="flex justify-between mb-1 text-xl text-white font-semibold">
            <i>Prova de título</i>
            <span class="text-xl opacity-90">--</span>
        </div>
        <div class="h-2 bg-white/10 rounded overflow-hidden">
            <div class="h-full bg-emerald-500" style="width:40%"></div>
        </div>

    </li>
    {{-- <li class="flex justify-between">
        <span>Cartas de recomendação</span>
        <span class="font-medium">0.4</span>
      </li> --}}
    </ul>
  </ul>

  {{-- <div class="mt-4 text-xs text-white/70">
    Pontuações normalizadas entre 0 e 1. Substitua os valores estáticos por variáveis do backend conforme necessário.
  </div> --}}
</div>
<div id="preferencias" hidden>
<br>
    <div class="py-1 bg-white/8 text-white rounded-md font-semibold tracking-wider text-base">
PREFERÊNCIAS DO CIRURGIÃO</div>

<i class="mt-4 flex items-center gap-3 py-2 text-lg text-white ">
    Cirurgia Estética: contorno corporal. <br>
    Cirurgia reparadora: cirurgia reparadora mamária. <br>
    Cirurgia Estética: rinoplastia. <br>

</i>
<div class="flex flex-row-reverse space-x-4 space-x-reverse">

    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15.232 5.232l3.536 3.536M4 20l7.5-1.5L20 9.5a2.121 2.121 0 000-3L17.5 4a2.121 2.121 0 00-3 0L4 14.5V20z"/>
    </svg>
    </div>
<hr>
<br>
<div class="py-1 bg-white/8 text-white rounded-md font-semibold tracking-wider text-base">
PALAVRAS CHAVE (ASSUNTOS DE INTERESSE)
</div>



<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia reparadora mamária
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    contorno corporal
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    cirurgia estética pós bariátrica
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    cosmiatria
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    orbitopalpebral
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    defeitos da face
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    rinoplastia estruturada
</span>
<span class="inline-flex items-center rounded-md bg-blue-400/10 px-2 py-1 text-base font-medium text-white inset-ring inset-ring-blue-400/30">
    rinoplastia aberta
</span>


<div class="flex flex-row-reverse space-x-4 space-x-reverse ">

    <svg class="w-4 h-4 bg-white/5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15.232 5.232l3.536 3.536M4 20l7.5-1.5L20 9.5a2.121 2.121 0 000-3L17.5 4a2.121 2.121 0 00-3 0L4 14.5V20z"/>
    </svg>
    </div>
</div>
<div id="descricao" hidden>
  <div class="grid gap-4 py-4">
    <div class="bg-white/5 p-4 rounded border border-white/10 ">
        <div class="flex">

       <span
                class="inline-flex items-center justify-center w-12 h-12 rounded-full  shadow-md mb-6"
                style="background-image: url('{{asset('storage/Hospital_Vila_Penteado.png')}}'); background-size:cover; background-position:center;">
                <span class="text-white font-bold text-2xl drop-shadow-md"></span>
            </span>
            <div class="font-semibold text-white ml-4  ">Setor de Cirurgia Plástica e Unidade de Terapia de Queimados - Hospital Vila Penteado</div>
            </div>
      <blockquote class="text-white/90 italic leading-relaxed">
        "Excelente estagiário, muito interessado, proativo e eficiente. Demonstrou evolução em conhecimentos teórico-práticos no Tratamento de Queimados."
      </blockquote>

    </div>


</div>


</div>

 <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('sair') }}
                            </x-dropdown-link>
                        </form>
{{-- <div class="mt-8 bg-white/5 p-6 rounded flex items-center justify-between gap-6 border border-[#03A6AC]">
  <div class="flex-1">
    <h4 class="text-lg font-semibold mb-3 text-white">Resultados resumo</h4>

    <ul class="text-xl text-white/90 space-y-2">
      <li class="flex justify-between">
        <span>Nota média das avaliações do DESC</span>
        <span class="font-medium">1.6</span>
      </li>
      <li class="flex justify-between">
        <span>Avaliação inicial</span>
        <span class="text-xl opacity-90">--</span>
      </li>
      <li class="flex justify-between">
        <span>Prova de E1</span>
        <span class="text-xl opacity-90">--</span>
      </li>
      <li class="flex justify-between">
        <span>Prova de E2</span>
        <span class="text-xl opacity-90">--</span>
      </li>
      <li class="flex justify-between">
        <span>Prova de título</span>
        <span class="text-xl opacity-90">--</span>
      </li>
     <li class="flex justify-between">
        <span>Cartas de recomendação</span>
        <span class="font-medium">0.4</span>
      </li>
    </ul>

    <div class="mt-3 text-xs text-white/70">
      Valores normalizados; substitua pelos dados reais do backend quando disponíveis.
    </div>
  </div> --}}

{{-- <div class="mt-8 bg-white/5 p-6 rounded border border-[#03A6AC]">

</div> --}}
<div class="py-8"></div>
</div>

<script>

  function myFunction() {

    var ocultar = document.getElementById("ocultar");
    if (ocultar.hidden) {
      ocultar.hidden = false;
    } else {
      ocultar.hidden = true;
    }
  }
  function mycarta() {

    var ocultar = document.getElementById("ocultar3");
    if (ocultar.hidden) {
      ocultar.hidden = false;
    } else {
      ocultar.hidden = true;
    }
  }
  function functionocultar() {

    var ocultar2 = document.getElementById("ocultar2");
    if (ocultar2.hidden) {
      ocultar2.hidden = false;
    } else {
      ocultar2.hidden = true;
    }
  }

  const _sections = ['detalhe','preferencias','descricao'];

  // mostra somente a seção selecionada; se já estiver visível, oculta-a
  function showSection(id) {
    _sections.forEach(s => {
      const el = document.getElementById(s);
      if (!el) return;
      if (s === id) {
        // toggle: se já visível => ocultar, senão mostrar
        el.hidden = !el.hidden;
      } else {
        el.hidden = true;
      }
    });
  }

  // mantém as funções já usadas para os sub-toggles (ocultar / ocultar2) se existentes
  function myFunction() {
    var ocultar = document.getElementById("ocultar");
    if (ocultar) ocultar.hidden = !ocultar.hidden;
  }
  function functionocultar() {
    var ocultar2 = document.getElementById("ocultar2");
    if (ocultar2) ocultar2.hidden = !ocultar2.hidden;
  }

  // remove/evita conflito com antigas Detalhe()/Preferencias() definidas antes
  window.Detalhe = function(){ showSection('detalhe'); };
  window.Preferencias = function(){ showSection('preferencias'); };
</script>
<script>
  function handleDescricaoSubmit(e) {
    e.preventDefault();
    const text = document.getElementById('descricaoComment').value.trim();
    if (!text) {
      alert('Escreva algo antes de enviar.');
      return;
    }
    // aquí puedes enviar por fetch a tu backend; por ahora muestra confirmación local
    alert('Comentário enviado (simulado).');
    // opcional: limpiar campo
    // document.getElementById('descricaoComment').value = '';
  }
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const tabs = Array.from(document.querySelectorAll('.tab-btn'));
  const ACTIVE = ['bg-white/10','ring-1','ring-emerald-400','shadow-sm','scale-105'];

  function clearActive() {
    tabs.forEach(t => {
      t.classList.remove(...ACTIVE);
      t.setAttribute('aria-pressed','false');
    });
  }

  function setActiveTab(tabEl) {
    clearActive();
    if (!tabEl) return;
    tabEl.classList.add(...ACTIVE);
    tabEl.setAttribute('aria-pressed','true');
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // wait for showSection toggle to run
      setTimeout(() => {
        const onclick = tab.getAttribute('onclick') || '';
        const match = onclick.match(/'([^']+)'/);
        const targetId = match ? match[1] : null;
        const section = targetId ? document.getElementById(targetId) : null;

        if (section && !section.hidden) {
          setActiveTab(tab);
        } else {
          clearActive();
        }
      }, 0);
    });
  });

  // No tab selected by default:
  clearActive();
});
</script>
 <script>
    // descarga simulada local del CV (no depende de archivo en el servidor)
    document.getElementById('download-cv').addEventListener('click', function (e) {
      e.preventDefault();
      const txt = [
        'Curriculum Vitae - Dr. Eduardo Cano',
        '',
        'Nome: Dr. Eduardo Cano',
        'Especialidade: Cirurgia Plástica',
        'Idade: 35',
        'Local: Brooklin, São Paulo',
        '',
        'Resumo:',
        'Atua no Serviço de Cirurgia Plástica do Dr. Oswaldo de Castro, com foco em reconstrução e cirurgia estética.',
        '',
        '(Este é um archivo de simulación.)'
      ].join('\n');
      const blob = new Blob([txt], { type: 'text/plain;charset=utf-8' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'Dr_Eduardo_Cano_CV.txt';
      document.body.appendChild(a);
      a.click();
      a.remove();
      URL.revokeObjectURL(url);
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
</x-app-layout>
