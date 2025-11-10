<x-app-layout>
  <div class="max-w-7xl mx-auto py-8 px-4 space-y-6">
    <h1 class="text-2xl font-semibold text-white">Estágios do Serviço </h1>

    <!-- Tabla estilo "cuadrados" similar a la imagen -->

    <div class="bg-[#17466E] p-4 rounded border border-white/10">
        <div class="flex">
  <div class="text-white font-semibold mb-3 w-full">
    <button type="button" data-value="predefinidos"
      class="category-btn px-3 py-1 rounded w-full bg-white/5 text-white hover:bg-emerald-500 transition text-sm">
      Estágios do Serviço (pré-definidos)
    </button>
  </div>
  &nbsp;
  <div class="text-white font-semibold mb-3 w-full">
    <button type="button" data-value="andamento"
      class="category-btn px-3 py-1 rounded w-full bg-white/5 text-white hover:bg-emerald-500 transition text-sm">
      Processos seletivos em andamento
    </button>
  </div>
  &nbsp;
  <div class="text-white font-semibold mb-3 w-full">
    <button type="button" data-value="realizados"
      class="category-btn px-3 py-1 w-full rounded bg-white/5 text-white hover:bg-emerald-500 transition text-sm">
      Estágios realizados
    </button>
  </div>
</div>
      <!-- CONTENIDO POR CATEGORÍA -->
<div id="category-content" class="mt-4">
  <!-- Predefinidos -->
  <div id="content-predefinidos" class="category-pane">
    <div class="overflow-x-auto bg-white/5 rounded border border-white/10 p-4 flex items-center gap-4">
      <table class="min-w-full border-separate" style="border-spacing: 0 8px;">
        <thead>
          <tr class="text-white text-xl">
            <th class="pb-2">Estágio</th>
            <th class="pb-2">Instituição / Professor </th>
            <th class="pb-2 px-8">Status</th>
            <th class="pb-2 px-8">Duração</th>
            <th class="pb-2 px-8 w-1/6 ">Data de início</th>
            <th class="pb-2 px-8">Data de término</th>
            <th class="pb-2">Ações</th>
          </tr>
        </thead>
        </thead>
        <tbody>


                  <tr>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Cirurgia crânio-maxilo-facial </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Hospital Municipal Infantil Menino Jesus </span></td>
                      <td class=" p-2"> <span class="text-white flex"> Validado✅</td>
                      <td class=" p-2 text-center"> <span class="font-bold text-white text-base"> 28 dias  </span></td>
                          <td class="text-center"> <span class="font-bold text-white text-base"> 01/02/2026  </span> <br>
                          <td class="text-center"> <span class="font-bold text-white text-base"> 28/02/2026  </span>  </td>
                      <td class=" p-2 flex"> <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm" data-trigger-category="andamento" title="Abrir Processos em andamento">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="#ffffff"
    stroke-width="1"
    stroke-linecap="round"
    stroke-linejoin="round"
  >
    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
  </svg>
</button> </span>
                    &nbsp;
                <span class="font-bold text-white text-base"> <button  class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Procurar estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 21l-6 -6" />
</svg>



                    </button> </span>

                </td>
                  </tr>
                  <tr>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Tratamento de queimados </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base">
      Setor de Cirurgia Plástica e Unidade de Terapia de Queimados - Hospital Vila Penteado </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Realizado✅✅ </span></td>
                      <td class=" p-2 text-center"> <span class="font-bold text-white text-base"> 30 dias  </span></td>
                      <td class="text-center"> <span class="font-bold text-white text-base"> 01/04/2025  </span> <br>
                      <td class="text-center"> <span class="font-bold text-white text-base"> 30/04/2025  </span>  </td>
                      <td class=" p-2 flex"> <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm" data-trigger-category="andamento" title="Abrir Processos em andamento">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="#ffffff"
    stroke-width="1"
    stroke-linecap="round"
    stroke-linejoin="round"
  >
    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
  </svg>
</button> </span>
                    &nbsp;
                <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Procurar estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 21l-6 -6" />
</svg>



                    </button> </span>

                </td>
                  </tr>
                  <tr>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Microcirurgia </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Hospital Nossa Senhora do Pari</span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base">  Validado✅ </span></td>
                      <td class=" p-2 text-center"> <span class="font-bold text-white text-base">15 dias</td>
                      <td class="text-center"> <span class="font-bold text-white text-base "> 01/05/2026  </span> <br>
                      <td class="text-center"> <span class="font-bold text-white text-base"> 15/05/2026  </span>  </td>
                      <td class=" p-2 flex"> <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm" data-trigger-category="andamento" title="Abrir Processos em andamento">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="#ffffff"
    stroke-width="1"
    stroke-linecap="round"
    stroke-linejoin="round"
  >
    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
  </svg>
</button> </span>
                    &nbsp;
                <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Procurar estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 21l-6 -6" />
</svg>



                    </button> </span>

                </td>
                  </tr>
      <tr>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Cirurgia da mão </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Hospital Nossa Senhora do Pari</span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base">  Validado✅ </span></td>
                      <td class=" p-2 text-center"> <span class="font-bold text-white text-base">15 dias</td>
                      <td class="text-center"> <span class="font-bold text-white text-base"> 16/05/2026  </span> <br>
                      <td class="text-center"> <span class="font-bold text-white text-base"> 31/05/2026  </span>  </td>
                      <td class=" p-2 flex"> <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm" data-trigger-category="andamento" title="Abrir Processos em andamento">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="#ffffff"
    stroke-width="1"
    stroke-linecap="round"
    stroke-linejoin="round"
  >
    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
  </svg>
</button> </span>
                    &nbsp;
                <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Procurar estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 21l-6 -6" />
</svg>



                    </button> </span>

                </td>
                  </tr>
                  <tr>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Cirurgia reparadora </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> IBCC Oncologia - Instituto Brasileiro de Controle do Câncer </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base">  Validado✅ </span></td>
                      <td class=" p-2 text-center"> <span class="font-bold text-white text-base">61 dias</span></td>
                      <td class="text-center"> <span class="font-bold text-white text-base"> 01/03/2027  </span> <br>
                      <td class="text-center"> <span class="font-bold text-white text-base"> 30/04/2027  </span>  </td>
                      <td class=" p-2 flex "> <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm" data-trigger-category="andamento" title="Abrir Processos em andamento">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="#ffffff"
    stroke-width="1"
    stroke-linecap="round"
    stroke-linejoin="round"
  >
    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
  </svg>
</button> </span>
                    &nbsp;
                <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Procurar estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 21l-6 -6" />
</svg>



                    </button> </span>

                </td>
                  </tr>
                  <tr>
                      <td class=" p-2"> <span class="font-bold text-white text-base"> Optativo </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base" id="optativo-instituicao"> - </span></td>
                      <td class=" p-2"> <span class="font-bold text-white text-base" id="optativo-instituicao2"> A definir </span></td>
                      <td class=" p-2 text-center"> <span class="font-bold text-white text-base"> 15 dias</span></td>
                      <td class=" p-2 text-center"> <span class="font-bold text-white text-base">01/09/2027</span></td>
                      <td class=" p-2 text-center"> <span class="font-bold text-white text-base">15/09/2027</span></td>
                      <td class=" p-2 flex"> <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm" data-trigger-category="andamento" title="Abrir Processos em andamento">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="#ffffff"
    stroke-width="1"
    stroke-linecap="round"
    stroke-linejoin="round"
  >
    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
  </svg>
</button> </span>
                    &nbsp;
                <span class="font-bold text-white text-base"> <button class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Procurar estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
  <path d="M21 21l-6 -6" />
</svg>



                    </button> </span>

                </td>
                  </tr>
                </tbody>
      </table>
    </div>
  </div>

  <!-- Andamento -->
  <div id="content-andamento" class="category-pane hidden">
    <div class="overflow-x-auto bg-white/5 rounded border border-white/10 p-4">
      <!-- Tabla / contenido para 'Processos seletivos em andamento' -->
      <table class="min-w-full border-separate" style="border-spacing: 0 8px;">
        <thead>
          <tr class="text-white text-xl">
            <th class="pb-2">Estágio</th>
            <th class="pb-2 ">Instituição / Professor </th>
            <th class="pb-2 px-8">Status</th>
            <th class="pb-2 px-8">Duração</th>
            <th class="pb-2 px-8 w-1/6 ">Data de início</th>
            <th class="pb-2 px-8">Data de término</th>
            <th class="pb-2 px-8">Vagas disponíveis</th>
            <th class="pb-2">Ações</th>
          </tr>
        </thead>
        </thead>
        <tbody>
            <tr>
            <td class="p-2 text-center"><span class="font-bold text-white">Optativo (Cirurgia estética)</span></td>
            <td class="p-2 text-center" >Dr Lucas Rinaldi</td>
            <td class="p-2 text-center"><span class="text-emerald-300">validado</span></td>
            <td class="p-2 text-center"><span class="text-white">15 dias</span></td>
            <td class="p-2 text-center"><span class="text-white">01/09/2027</span></td>
            <td class="p-2 text-center"><span class="text-white">15/09/2027</span></td>
                <td class="p-2 text-center"><span class="text-white">1/1</span></td>
            <td class="p-2 flex py-6">


              <button data-modal-target="lucas_rindaldi" data-modal-toggle="lucas_rindaldi" class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Trocar estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
  <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
</svg>

              </button>

              &nbsp;

              <button  data-modal-target="detalhes_estagio1" data-modal-toggle="detalhes_estagio1" class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Detalhes do estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
  <path d="M12 9h.01" />
  <path d="M11 12h1v4h1" />
</svg>
              </button>
            </td>
            <tr>
          <tr>
            <td class="p-2 text-center"><span class="font-bold text-white">Optativo (Cirurgia estética)</span></td>
            <td class="p-2 text-center">Clínica de Cirurgia Plástica - Dr André Parreira de Castro</td>
            <td class="p-2 text-center"><span class="text-white">em análise</span></td>
            <td class="p-2 text-center"><span class="text-white">15 dias</span></td>
            <td class="p-2 text-center"><span class="text-white">01/09/2027</span></td>
            <td class="p-2 text-center"><span class="text-white">15/09/2027</span></td>
            <td class="p-2 text-center"><span class="text-white">1/2</span></td>

            <td class="p-2 flex py-6">

              <button class="px-3  bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Trocar estágio">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#ffffff"
                    stroke-width="1"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    </svg>
              </button>
              &nbsp;

              <button data-modal-target="detalhes_estagio2" data-modal-toggle="detalhes_estagio2" class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Detalhes do estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
  <path d="M12 9h.01" />
  <path d="M11 12h1v4h1" />
</svg>
              </button>
            </td>
            <tr>
            <td class="p-2 text-center"><span class="font-bold text-white">Optativo (Cirurgia estética)</span></td>
            <td class="p-2 text-center">Dra Aline Campos</td>
            <td class="p-2 text-center"><span class="text-emerald-300">validado</span></td>
            <td class="p-2 text-center"><span class="text-white">15 dias</span></td>
            <td class="p-2 text-center"><span class="text-white">01/09/2027</span></td>
            <td class="p-2 text-center"><span class="text-white">15/09/2027</span></td>
                <td class="p-2 text-center"><span class="text-white">2/2</span></td>
            <td class="p-2 flex py-6">

              <button class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Trocar estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
  <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
</svg>
              </button>


                &nbsp;

              <button  data-modal-target="detalhes_estagio3" data-modal-toggle="detalhes_estagio3" class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}" title="Detalhes do estágio">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
  <path d="M12 9h.01" />
  <path d="M11 12h1v4h1" />
</svg>
              </button>








            </td>
          </tr>

          <!-- filas adicionales -->
        </tbody>
      </table>
    </div>
  </div>











<div id="lucas_rindaldi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#17466E] rounded-lg shadow-sm ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Confirma que deseja adicionar esse estágio?
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="lucas_rindaldi">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-black ">

<label for="" class="text-white font-bold">Selecione estágio:</label> <br>


<select name="" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400 ">
    <option value="">Cirurgia crânio-maxilo-facial</option>
    <option value="">Tratamento de queimados</option>
    <option value="">Microcirurgia</option>
    <option value="">Cirurgia da mão</option>
    <option value="">Cirurgia reparadora</option>
    <option value="">Optativo</option>
</select>

                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="lucas_rindaldi" onclick="estagioSelecionado()" type="button" class="text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 hover:bg-[#10B981]  dark:focus:ring-blue-800">Confirmar</button>
                <button data-modal-hide="lucas_rindaldi" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-[#10B981]   focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-white dark:border-gray-600   ">Cancelar</button>
            </div>
        </div>
    </div>
</div>







<script>
    function estagioSelecionado() {
        document.getElementById('optativo-instituicao').innerText = 'Dr Lucas Rinaldi';
        document.getElementById('optativo-instituicao2').innerText = 'Validado✅';
        console.log("doc");
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

                 <button data-modal-hide="detalhes_estagio1" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Fechar</button>


            </div>
        </div>
    </div>
</div>


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

                 <button data-modal-hide="detalhes_estagio1" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Fechar</button>


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

                 <button data-modal-hide="detalhes_estagio2" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Fechar</button>


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
                 <button data-modal-hide="detalhes_estagio3" type="button" class="py-2.5 px-5 ms-3  hover:bg-[#10B981] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200  hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white ">Fechar</button>


            </div>
        </div>
    </div>
</div>














  <!-- Realizados -->
  <div id="content-realizados" class="category-pane hidden">
    <div class="overflow-x-auto bg-white/5 rounded border border-white/10 p-4">
      <!-- Tabla / contenido para 'Estágios realizados' -->
      <table class="min-w-full border-separate" style="border-spacing: 0 8px;">
        <thead>
          <tr class="text-white text-xl">
            <th class="pb-2">Estágio</th>
            <th class="pb-2 w-1/5 ">Instituição / Professor </th>
            <th class="pb-2 px-8">Status</th>
            <th class="pb-2 px-8">Duração</th>
            <th class="pb-2 px-8 w-1/6 ">Data de início</th>
            <th class="pb-2 px-8">Data de término</th>
            <th class="pb-2">Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-2 text-center"><span class="font-bold text-white">Tratamento de queimados</span></td>
            <td class="p-2 text-center"><span class="text-white/70">Setor de Cirurgia Plástica e Unidade de Terapia de Queimados - Hospital Vila Penteado</span></td>
            <td class="p-2 text-center"><span class="text-white">Realizado✅✅	</span></td>
            <td class="p-2 text-center"><span class="text-white">30 dias</span></td>
            <td class="p-2 text-center"><span class="text-white/70">01/04/2025</span></td>
            <td class="p-2 text-center"><span class="text-white/70">30/04/2025</span></td>
            <td class="p-2 text-center">
                <span class="font-bold text-white text-base"> <button data-modal-target="realizados-modal" data-modal-toggle="realizados-modal" class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" title="Visualizar avaliação" data-idx="${idx}">

<svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="1"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
</svg>



                    </button> </span>
            </td>
          </tr>
          <!-- filas adicionales -->
        </tbody>
      </table>
    </div>
  </div>
</div>
    </div>







<div id="realizados-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#17466E] rounded-lg shadow-sm ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white ">
                    FICHA DE AVALIAÇÃO DO ESTÁGIO EXTERNO <br></h3>



                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="realizados-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="flex-1 p-2">
                    <span class="text-white/80 ">Nome: <span class="font-bold">Eduardo Patricio Cano Huachin</span></span><br />
                    <span class="text-white/80 ">Estágio: <span class="font-bold">Cir. Plastica / UTQ</span></span><br />
                    <span class="text-white/80 ">Especialidade: <span class="font-bold">Cirugia Plástica</span></span><br />
                    <span class="text-white/80 ">Período: <span class="font-bold">01/04 a 30/04/2025</span></span><br />
                        </div>

            <!-- Modal body -->
            <div class="body">
      <!-- Reemplazado: tabla -> layout con divs para evitar overflow del modal -->
      <div class="space-y-4 max-h-[60vh] overflow-auto p-2">


        <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">1. Desempenho e conduta ético-moral</div>
            <div class="font-bold text-white">10</div>
        </div>

        <div class="font-semibold text-white p-2">2. Aproveitamento Prático</div>
        <div class="space-y-2">
          <div class="flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="text-white/80">Comparecimento</div>
            <div class="font-bold text-white">10</div>
          </div>

          <div class="flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="text-white/80">Cumprimento das obrigações</div>
            <div class="font-bold text-white">10</div>
          </div>

          <div class="flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="text-white/80">Eficiência clínica</div>
            <div class="font-bold text-white">10</div>
          </div>

          <div class="flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="text-white/80">Interesse e iniciativa</div>
            <div class="font-bold text-white">10</div>
          </div>

          <div class="flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="text-white/80">Participação em sessões, seminários, etc</div>
            <div class="font-bold text-white">7</div>
          </div>

          <div class="flex justify-between items-center p-2 rounded">
            <div class="text-white/80 font-semibold">Média (prática)</div>
            <div class="font-bold  text-white">9.4</div>
          </div>
        </div>


           <div class="font-semibold text-white flex justify-between items-center p-2 bg-white/2 rounded">
            <div class="font-semibold text-white ">3. Aproveitamento Teórico</div>
            <div class="font-bold text-white">9.7</div>
        </div>
        <hr class="border-white/10">

        <div>
          <div class="font-semibold text-white">Resultado final</div>
          <div class="mt-2 flex items-center gap-3">
            <div class="text-xl font-bold bg-emerald-500 px-4 py-2 rounded text-white">9.7</div>
            <div class="text-sm text-white/70">Nota de aproveitamento no estágio</div>
          </div>
        </div>
      </div>
    </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                {{-- <button data-modal-hide="realizados-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="realizados-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button> --}}
            </div>
        </div>
    </div>
</div>
















  <!-- Modal: Detalhes / Avaliação -->
  <div id="details-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
    <div class="bg-white/5 w-full max-w-2xl p-6 rounded border border-white/10">
      <h3 class="text-lg font-semibold text-white mb-3">Avaliação do Estágio</h3>
      <div id="details-content" class="text-sm text-white/70 space-y-2"></div>
      <div class="mt-4 flex justify-end">
        <button id="details-close" class="px-3 py-1 rounded bg-white/10 text-white">Fechar</button>
      </div>
    </div>
  </div>

  <script>
  (function(){
    // datos ficticios
    const stages = [
      { title: 'Cirurgia crânio-maxilo-facial', institution: 'Hospital São Lucas', status: 'análisis', note: '9.0' },
      { title: 'Tratamento de queimados', institution: 'Hospital Vila Penteado', status: 'confirmado', note: '' },
      { title: 'Microcirurgia', institution: 'Clínica Nova Forma', status: 'no_validado', note: '' },
      { title: 'Cirurgia da mão', institution: 'Hospital Central', status: 'validado', note: '' },
      { title: 'Cirurgia reparadora', institution: 'Instituto Reconstrutivo', status: 'análisis', note: '' },
      { title: 'Cirurgia estética', institution: 'Clínica Estética Sol', status: 'confirmado', note: '' }
    ];

    function statusBadge(s){
      if(s === 'confirmado') return { text: 'confirmado', cls: 'bg-emerald-300 text-black' };
      if(s === 'validado') return { text: 'validado', cls: 'bg-emerald-500 text-black' };
      if(s === 'análisis') return { text: 'em análise', cls: 'bg-yellow-500 text-black' };
      return { text: 'no validado', cls: 'bg-red-500 text-white' };
    }

    function renderTable(){
      const tbody = document.getElementById('stages-table-body');
      tbody.innerHTML = '';
      stages.forEach((s, idx) => {
        const st = statusBadge(s.status);
        const tr = document.createElement('tr');
        // cada fila aparece como "cuadro" con borde blanco y fondo ligeramente distinto
        tr.innerHTML = `
          <td colspan="5" class="px-4">
            <div class="bg-white/5 rounded border border-white/10 p-4 flex items-center gap-4">
              <div class="flex-1 min-w-0">
                <div class="flex items-center justify-between gap-4">
                  <div class="min-w-0">
                    <div class="font-medium text-white truncate">${s.title}</div>
                    <div class="text-sm text-white/70 mt-1 truncate">${s.note ? 'Nota: ' + s.note : ''}</div>
                  </div>

                  <div class="hidden md:flex items-center gap-4">
                    <div class="text-sm text-white/70">${s.institution}</div>
                  </div>
                </div>

                <div class="mt-3 flex items-center gap-3">
                  <div class="flex items-center gap-2">
                    <button class="px-3 py-1 bg-emerald-600 rounded text-black text-sm contact-btn">Contactar</button>
                    <button class="px-3 py-1 bg-white/10 rounded text-white text-sm view-profile">Ver perfil</button>
                    <button class="px-3 py-1 bg-white/10 rounded text-white text-sm stage-details">Detalhes</button>
                  </div>

                  <div class="ml-auto flex items-center gap-4">
                    <div class="text-sm ${st.cls} px-2 py-1 rounded text-xs">${st.text}</div>
                    <div>
                      <button class="px-3 py-1 bg-white/10 rounded text-white text-sm edit-btn" data-idx="${idx}">Editar</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- En small screens show institution on right -->
              <div class="md:hidden text-sm text-white/70 ml-4">${s.institution}</div>
            </div>
          </td>
        `;
        tbody.appendChild(tr);

        // attach handlers for the new row
        const detailsBtn = tr.querySelector('.stage-details');
        if(detailsBtn) detailsBtn.addEventListener('click', () => openDetails(idx));
        const editBtn = tr.querySelector('.edit-btn');
        if(editBtn) editBtn.addEventListener('click', () => openEdit(idx));
      });
    }

    // modal logic
    const editModal = document.getElementById('edit-modal');
    const detailsModal = document.getElementById('details-modal');
    const editInstitution = document.getElementById('edit-institution');
    const editStatus = document.getElementById('edit-status');
    const editConfirm = document.getElementById('edit-confirm');
    const editCancel = document.getElementById('edit-cancel');
    const detailsContent = document.getElementById('details-content');
    const detailsClose = document.getElementById('details-close');

    let currentEditIndex = null;

    function openEdit(idx){
      currentEditIndex = idx;
      const s = stages[idx];
      editInstitution.value = s.institution;
      editStatus.value = s.status;
      editModal.classList.remove('hidden');
      editModal.style.display = 'flex';
    }

    function closeEdit(){ editModal.classList.add('hidden'); editModal.style.display='none'; currentEditIndex = null; }

    editConfirm.addEventListener('click', function(){
      if(currentEditIndex === null) return closeEdit();
      stages[currentEditIndex].institution = editInstitution.value;
      stages[currentEditIndex].status = editStatus.value;
      renderTable();
      closeEdit();
    });

    editCancel.addEventListener('click', closeEdit);

    function openDetails(idx){
      const s = stages[idx];
      const st = statusBadge(s.status);
      detailsContent.innerHTML = `
        <div class="text-white font-semibold">${s.title}</div>
        <div class="text-sm text-white/70 mt-2">Instituição: <span class="font-medium text-white">${s.institution}</span></div>
        <div class="mt-2 text-sm text-white/70">Status: <span class="${st.cls} px-2 py-1 rounded text-xs">${st.text}</span></div>
        <div class="mt-3 text-sm text-white/70">Notas: ${s.note || '—'}</div>
        <hr class="my-3 border-white/10" />
        <div class="text-sm text-white/70">Avaliação demostrativa: Lorem ipsum dolor sit amet, consectetur.</div>
      `;
      detailsModal.classList.remove('hidden');
      detailsModal.style.display = 'flex';
    }

    function closeDetails(){ detailsModal.classList.add('hidden'); detailsModal.style.display='none'; }

    detailsClose.addEventListener('click', closeDetails);

    // close modals when click outside content
    [editModal, detailsModal].forEach(mod => {
      mod.addEventListener('click', (e)=> {
        if (e.target === mod) {
          mod.classList.add('hidden');
          mod.style.display = 'none';
        }
      });
    });

    // inicial
    renderTable();
  })();
  </script>

  <script>
document.addEventListener('DOMContentLoaded', function () {
  const buttons = document.querySelectorAll('.category-btn');
  const panes = document.querySelectorAll('.category-pane');

  function showCategory(val, btn) {
    panes.forEach(p => p.classList.add('hidden'));
    const target = document.getElementById('content-' + val);
    if (target) target.classList.remove('hidden');

    buttons.forEach(b => {
      b.classList.remove('bg-emerald-500');
      b.classList.add('bg-white/5');
    });
    if (btn) {
      btn.classList.remove('bg-white/5');
      btn.classList.add('bg-emerald-500');
    }
  }

  buttons.forEach(btn => {
    btn.addEventListener('click', function () {
      const val = this.dataset.value;
      showCategory(val, this);
    });
  });

  // seleccionar primera pestaña por defecto
  const first = document.querySelector('.category-btn[data-value="predefinidos"]') || buttons[0];
  if (first) showCategory(first.dataset.value, first);
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
