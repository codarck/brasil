<x-app-layout >
  <div class=" p-6">
    <!-- Título (misma tipografía que Perfil) -->
    <header class="mb-6">
      <h1 class="text-2xl font-semibold text-white">Documentação</h1>
      <p class="text-xl text-white/70">Documentação requerida pela SBCP</p>
    </header>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <!-- LISTADO: documentos requeridos -->
      <section class="lg:col-span-2 space-y-4">
        <div class="bg-white/5 p-4 rounded border border-white/10">
          <div class="flex items-center justify-between mb-3">
            <div class="font-semibold text-white text-xl">Listagem de documentos requeridos</div>
            {{-- <div class="text-sm text-white/70">Estado: [Subir → Enviado → Validado]</div> --}}



          </div>

          {{-- <ul id="docsList" class="space-y-3">
            <!-- plantilla por JS -->
          </ul> --}}
        </div> <div>
            <div class="bg-white/5 p-4 rounded border border-white/10">
                 {{-- RESIDENTES --}}
            <table class="w-full text-left  border-collapse ">
              <thead>
                <tr class="text-white text-xl">

                  <th class=" pb-2">Arquivo</th>
                  <th class="  pb-2">Subir</th>
                  <th class="  pb-2 px-8">Visualizar</th>
                  <th class="  pb-2">Status</th>

                </tr>
              </thead>
              <tbody>
                 <tr class="border border-solid border-white ">

                    <td class=" p-2"> <span class="font-bold text-white text-xl"> Curriculum Vitae </span>
                        <span class="text-base text-white">
                        </span></td>
                    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
                    <td class=" p-2 font-bold text-center  "> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button> </td>
                    <td class=" p-2 font-bold text-white flex ">
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
  <path d="M6.5 7h11" />
  <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" />
  <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z" />
</svg>
 Em análise</td>
                 </tr>
<tr class="border border-solid border-white text-white ">
    <td class="px-2">Cartas de recomendação de regentes </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button data-modal-target="static-modal1" data-modal-toggle="static-modal1"  class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<div id="static-modal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal1">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>


            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>

<tr class="border border-solid border-white text-white">
    <td class="px-2">Estágios extracurriculares em cirurgia plástica </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Apresentação como autor em eventos regionais ou nacionais de cirurgia geral ou cirurgia plástica</td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button data-modal-target="static-modal3" data-modal-toggle="static-modal3" class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>

<div id="static-modal3" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal3">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4"> s
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>

            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>


<tr class="border border-solid border-white text-white">
    <td class="px-2">Autor de trabalhos publicados ou aceitos em alguma revista médica; </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Língua estrangeira certificada </td>
    <td class="  font-bold text-white"></td>
    <td class=" p-2 font-bold text-center"> -</td>
    <td class=" p-2 font-bold text-white ">❌ No Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Outras especialidades ou pós-graduações </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Cursos realizados  </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">

                {{-- Título de especialista em ultrassonografia --}}
                <div id="hoverMessage"
     class="hidden bg-gray-900 text-white px-3 py-1 rounded shadow text-sm absolute z-50">
</div>

<button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow msg-btn"
        data-msg="Terapias com ortobiologicos guiadas por ultrassonografia">
    <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png">
</button>

<button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow msg-btn"
        data-msg="Fellowship de Cosmiatria Instituto Boggio">
    <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png">
</button>

<button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow msg-btn"
        data-msg="Terapias com ultrassonografia avançada">
    <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png">
</button>


            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>
<script>
  const hoverMessage = document.getElementById('hoverMessage');
const buttons = document.querySelectorAll('.msg-btn');

buttons.forEach(btn => {
    btn.addEventListener('mouseenter', (e) => {
        hoverMessage.textContent = e.currentTarget.dataset.msg;
        hoverMessage.classList.remove('hidden');
    });

    btn.addEventListener('mousemove', (e) => {
        hoverMessage.style.top = (e.offsetY + e.currentTarget.offsetTop + 20) + "px";
        hoverMessage.style.left = (e.offsetX + e.currentTarget.offsetLeft + 20) + "px";
    });

    btn.addEventListener('mouseleave', () => {
        hoverMessage.classList.add('hidden');
    });
});
</script>
                 <tr >
                    <td class="py-2"></td>
                 </tr>
                  <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white text-xl">Conselho Regional de Medicina (CRM)</td>
                    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
                    <td class=" p-2 font-bold text-center"> <button   class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
                    <td class=" p-2 font-bold text-white ">✅ Validado</td>
                 </tr>

                 <tr>
                     <td class="py-2"></td>
                 </tr>
                 <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white text-xl">Verificação de filiação SBCP</td>
                    <td class="  font-bold text-white"> </td>
                    <td class=" font-bold text-center text-white">  </td>
                    <td class="  font-bold text-white flex p-2"> ✅ Validado</td>
                 </tr>
                 <tr>
                    <td class="py-2"></td>
                 </tr>
                 {{-- <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white ">Documento de Identidade</td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold text-white ">✅ Validado</td>
                 </tr>
                 <tr>
                     <td class="py-2"></td>
                 </tr>
                 <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white ">Certificados / Cursos</td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold text-white ">Validado</td>
                 </tr> --}}
              </tbody>
            </table>















{{-- CIRUJANO PLASTICO FORMADO --}}
 <table class="w-full text-left  border-collapse " hidden>
              <thead>
                <tr class="text-white text-xl">

                  <th class=" pb-2">Arquivo</th>
                  <th class="  pb-2">Subir</th>
                  <th class="  pb-2 px-8">Visualizar</th>
                  <th class="  pb-2">Status</th>

                </tr>
              </thead>
              <tbody>
                 <tr class="border border-solid border-white ">

                    <td class=" p-2"> <span class="font-bold text-white text-xl"> Curriculum Vitae ( Enviar curriculum vitae com os tópicos propostos) </span>
                        <span class="text-base text-white">
                        </span></td>
                    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
                    <td class=" p-2 font-bold text-center  "> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button> </td>
                    <td class=" p-2 font-bold text-white flex ">
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
  <path d="M6.5 7h11" />
  <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" />
  <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z" />
</svg>
 Em análise</td>
                 </tr>
<tr class="border border-solid border-white text-white ">
    <td class="px-2">Cartas de recomendação de regentes </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button data-modal-target="static-modal1" data-modal-toggle="static-modal1"  class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<div id="static-modal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal1">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>


            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>

<tr class="border border-solid border-white text-white">
    <td class="px-2">Estágios extracurriculares em cirurgia plástica </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Apresentação como autor em eventos regionais ou nacionais de cirurgia geral ou cirurgia plástica</td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button data-modal-target="static-modal3" data-modal-toggle="static-modal3" class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>

<div id="static-modal3" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal3">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>

            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>


<tr class="border border-solid border-white text-white">
    <td class="px-2">Autor de trabalhos publicados ou aceitos em alguma revista médica; </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Língua estrangeira certificada </td>
    <td class="  font-bold text-white"><button class="text-black bg-white px-2" style="font-size: 12px">Selecionar Arquivo</button></td>
    <td class=" p-2 font-bold text-center"> -</td>
    <td class=" p-2 font-bold text-white ">❌ No Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Outras especialidades ou pós-graduações </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Cursos realizados  </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
                 <tr >
                    <td class="py-2"></td>
                 </tr>

                 <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white text-xl">Conselho Regional de Medicina (CRM)</td>
                    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
                    <td class=" p-2 font-bold text-center"> <button  data-modal-target="static-modal" data-modal-toggle="static-modal" class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
                    <td class=" p-2 font-bold text-white ">✅ Validado</td>
                 </tr>
                  <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white text-xl">Registro de Qualificação de Especialista (RQE)</td>
                    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
                    <td class=" p-2 font-bold text-center"> <button  data-modal-target="static-modal" data-modal-toggle="static-modal" class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
                    <td class=" p-2 font-bold text-white ">✅ Validado</td>
                 </tr>
                 <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>
                 <tr>
                     <td class="py-2"></td>
                 </tr>
                 <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white text-xl">Verificação de filiação SBCP</td>
                    <td class="  font-bold text-white"> - </td>
                    <td class=" font-bold text-center text-white"> -   </td>
                    <td class="  font-bold text-white flex p-2"> ✅ Validado</td>
                 </tr>
                 <tr>
                    <td class="py-2"></td>
                 </tr>
                 {{-- <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white ">Documento de Identidade</td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold text-white ">✅ Validado</td>
                 </tr>
                 <tr>
                     <td class="py-2"></td>
                 </tr>
                 <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white ">Certificados / Cursos</td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold text-white ">Validado</td>
                 </tr> --}}
              </tbody>
            </table>














{{-- SERVICIO CIRUJANO PLASTICO --}}
 <table class="w-full text-left  border-collapse " hidden>
              <thead>
                <tr class="text-white text-xl">

                  <th class=" pb-2">Arquivo</th>
                  <th class="  pb-2">Subir</th>
                  <th class="  pb-2 px-8">Visualizar</th>
                  <th class="  pb-2">Status</th>

                </tr>
              </thead>
              <tbody>
                 <tr class="border border-solid border-white ">

                    <td class=" p-2"> <span class="font-bold text-white text-xl"> Curriculum Vitae ( Enviar curriculum vitae com os tópicos propostos) </span>
                        <span class="text-base text-white">
                        </span></td>
                     <td class="font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
                    <td class=" p-2 font-bold text-center  "> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button> </td>
                    <td class=" p-2 font-bold text-white flex ">
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
  <path d="M6.5 7h11" />
  <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" />
  <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z" />
</svg>
 Em análise</td>
                 </tr>
<tr class="border border-solid border-white text-white ">
    <td class="px-2">Cartas de recomendação de regentes </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button data-modal-target="static-modal1" data-modal-toggle="static-modal1"  class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<div id="static-modal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal1">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>


            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>

<tr class="border border-solid border-white text-white">
    <td class="px-2">Estágios extracurriculares em cirurgia plástica </td>
   <td class="font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Apresentação como autor em eventos regionais ou nacionais de cirurgia geral ou cirurgia plástica</td>
  <td class="font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button data-modal-target="static-modal3" data-modal-toggle="static-modal3" class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>

<div id="static-modal3" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal3">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>

            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>


<tr class="border border-solid border-white text-white">
    <td class="px-2">Autor de trabalhos publicados ou aceitos em alguma revista médica; </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Língua estrangeira certificada </td>
    <td class="  font-bold text-white"><button class="text-black bg-white px-2" style="font-size: 12px">Selecionar Arquivo</button></td>
    <td class=" p-2 font-bold text-center"> -</td>
    <td class=" p-2 font-bold text-white ">❌ No Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Outras especialidades ou pós-graduações </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
<tr class="border border-solid border-white text-white">
    <td class="px-2">Cursos realizados  </td>
    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
    <td class=" p-2 font-bold text-center"> <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
    <td class=" p-2 font-bold text-white ">✅ Validado</td>
</tr>
                 <tr >
                    <td class="py-2"></td>
                 </tr>
                  <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white text-xl">Registro de Qualificação de Especialista (RQE)</td>
                    <td class="  font-bold">
    <label class="text-black bg-white px-2 py-1 cursor-pointer rounded inline-block"
           style="font-size: 12px;">
        Selecionar Arquivo
        <input type="file" class="hidden" />
    </label>
</td>
                    <td class=" p-2 font-bold text-center"> <button  data-modal-target="static-modal" data-modal-toggle="static-modal" class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button></td>
                    <td class=" p-2 font-bold text-white ">✅ Validado</td>
                 </tr>
                 <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-[#03A6AC]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Lista de arquivos
                </h3>
                <button type="button" class="text-white bg-transparent  hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-hide="static-modal">
                    <svg class="w-3 h-3" class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
                <button class="inline-flex items-center gap-2 px-3 py-2 bg-white hover:bg-gray-100 text-white rounded shadow "> <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/977px-PDF_file_icon.svg.png" alt=""></button>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">fechar</button>
            </div>
        </div>
    </div>
</div>
                 <tr>
                     <td class="py-2"></td>
                 </tr>
                 <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white text-xl">Verificação de filiação SBCP</td>
                    <td class="  font-bold text-white"> </td>
                    <td class=" font-bold text-center text-white">  </td>
                    <td class="  font-bold text-white flex p-2"> ✅ Validado</td>
                 </tr>
                 <tr>
                    <td class="py-2"></td>
                 </tr>
                 {{-- <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white ">Documento de Identidade</td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold text-white ">✅ Validado</td>
                 </tr>
                 <tr>
                     <td class="py-2"></td>
                 </tr>
                 <tr class="border border-solid border-white">

                    <td class=" p-2 font-bold text-white ">Certificados / Cursos</td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold"></td>
                    <td class=" p-2 font-bold text-white ">Validado</td>
                 </tr> --}}
              </tbody>
            </table>






              </div>
          </div>

      </section>




      <!-- PANEL lateral: subir / editar -->
      {{-- <aside class="bg-white/5 p-4 rounded border border-white/10">
        <h3 class="font-semibold text-white mb-2">Subir / Editar</h3>

        <form id="uploadForm" class="space-y-3" onsubmit="return false;">
          <label class="block text-sm text-white/80">Documento</label>
          <select id="docSelect" class="w-full p-2 rounded bg-white/3 ">
            <!-- opciones por JS -->
          </select>

          <label class="block text-sm text-white/80">Arquivo</label>
          <input id="docFile" type="file" accept=".pdf,.doc,.docx,.jpg,.png" class="w-full text-sm text-white" />

          <div class="flex gap-2">
            <button id="btnUpload" class="flex-1 px-3 py-2 bg-emerald-600 rounded text-white">Subir</button>
            <button id="btnReplace" class="flex-1 px-3 py-2 bg-white/10 rounded text-white">Reemplazar</button>
          </div>

          <div id="uploadFeedback" class="text-sm text-white/70"></div>
        </form>

        <hr class="my-4 border-white/10"/>

        <div>
          <div class="font-semibold text-white mb-2">Validación (Sociedad)</div>
          <p class="text-xs text-white/70 mb-2">Solo personal autorizado puede validar.</p>
          <button id="batchValidate" class="w-full px-3 py-2 bg-emerald-500 rounded text-white">Validar seleccionado</button>
          <button id="batchInvalidate" class="w-full mt-2 px-3 py-2 bg-red-500 rounded text-white">Rechazar seleccionado</button>
        </div>
      </aside> --}}
    </div>


  </div>






















  <script>
    // Datos iniciales (reemplazar con backend)
    const REQUIRED_DOCS = [
      { key:'cv', title:'Curriculum Vitae' },
      { key:'crm', title:'Registro Profissional (CRM)' },
      { key:'sbcpmember', title:'Verificação de filiação SBCP' },
      { key:'id', title:'Documento de Identidade' },
      { key:'certs', title:'Certificados / Cursos' }
    ];

    // estado local simulado: { key: { filename, status: 'none'|'sent'|'validated' } }
    const DOC_STATE = {};

    // helpers
    const $ = s => document.querySelector(s);
    const create = (tag, attrs={}, children=[]) => {
      const el = document.createElement(tag);
      Object.entries(attrs).forEach(([k,v])=> el.setAttribute(k,v));
      (Array.isArray(children)?children:[children]).forEach(c => {
        if (typeof c === 'string') el.appendChild(document.createTextNode(c));
        else if (c) el.appendChild(c);
      });
      return el;
    };

    function statusBadge(status){
      if (!status || status === 'none') return '<span class="px-2 py-1 rounded text-xs bg-white/5 text-white/80">Sin archivo</span>';
      if (status === 'sent') return '<span class="px-2 py-1 rounded text-xs bg-amber-500 text-black">Enviado</span>';
      if (status === 'validated') return '<span class="px-2 py-1 rounded text-xs bg-emerald-500 text-white">Validado</span>';
      if (status === 'rejected') return '<span class="px-2 py-1 rounded text-xs bg-red-500 text-white">Rechazado</span>';
      return '';
    }

    function renderList(){
      const ul = $('#docsList');
      ul.innerHTML = '';
      REQUIRED_DOCS.forEach(doc => {
        const state = DOC_STATE[doc.key] || { filename: null, status: 'none' };
        const li = create('li', { class: 'p-3 rounded bg-white/3 border border-white/6 flex items-center justify-between gap-3' }, [
          create('div', { class: 'flex-1' }, [
            create('div', { class: 'font-medium text-white' }, [doc.title]),
            create('div', { class: 'text-sm text-white/70' }, [ state.filename ? state.filename : 'Enviar curriculum vitae com os tópicos propostos: cartas de recomendação de regentes;  estágios extracurriculares em cirurgia plástica; apresentação de trabalhos em eventos regionais ou nacionais de cirurgia geral ou cirurgia plástica; autor de trabalhos publicados ou aceitos em alguma revista médica; língua estrangeira certificada; outras especialidades ou áreas de atuação na Medicina' ])
          ]),
          create('div', { class: 'flex items-center gap-3' }, [
            // status
            create('div', { innerHTML: statusBadge(state.status) }),
            // acciones: subir/editar/ver/validar checkbox
            (() => {
              const container = create('div', { class: 'flex items-center gap-2' });
              // radio/select button to choose for side panel
              const selectBtn = create('button', { class:'px-3 py-1 bg-white/10 rounded text-sm text-white', type:'button' }, ['✅ Validado']);
              selectBtn.addEventListener('click', () => {
                $('#docSelect').value = doc.key;
                $('#uploadFeedback').textContent = '';
              });
              container.appendChild(selectBtn);

            //  validate (simula acción de sociedad)
            //   const validateBtn = create('button', { class:'px-3 py-1 bg-emerald-600 rounded text-sm text-white', type:'button' }, ['Validar']);
            //   validateBtn.addEventListener('click', () => {
            //     if (!state.filename) { alert('No hay archivo para validar.'); return; }
            //     DOC_STATE[doc.key].status = 'validated';
            //     renderList();
            //   });
            //   container.appendChild(validateBtn);

            //   // editar / eliminar
            //   const delBtn = create('button', { class:'px-3 py-1 bg-red-600 rounded text-sm text-white', type:'button' }, ['Eliminar']);
            //   delBtn.addEventListener('click', () => {
            //     if (!confirm('Eliminar archivo enviado?')) return;
            //     delete DOC_STATE[doc.key];
            //     renderList();
            //   });
            //   container.appendChild(delBtn);

              return container;
            })()
          ])
        ]);
        ul.appendChild(li);
      });

      // poblar select lateral
      const sel = $('#docSelect');
      sel.innerHTML = '';
      REQUIRED_DOCS.forEach(d => {
        const opt = document.createElement('option'); opt.value = d.key; opt.textContent = d.title;
        sel.appendChild(opt);
      });
    }

    // handlers subir / reemplazar
    document.addEventListener('DOMContentLoaded', function(){
      renderList();

      $('#btnUpload').addEventListener('click', ()=>{
        const key = $('#docSelect').value;
        const fileEl = $('#docFile');
        if (!fileEl.files.length) { $('#uploadFeedback').textContent = 'Selecciona un archivo.'; return; }
        const file = fileEl.files[0];
        // simulamos subida: en la práctica enviar por fetch a backend (FormData)
        DOC_STATE[key] = { filename: file.name, status: 'sent', uploadedAt: new Date().toISOString() };
        $('#uploadFeedback').textContent = 'Archivo subido (simulado): ' + file.name;
        fileEl.value = '';
        renderList();
      });

      $('#btnReplace').addEventListener('click', ()=>{
        const key = $('#docSelect').value;
        const fileEl = $('#docFile');
        if (!fileEl.files.length) { $('#uploadFeedback').textContent = 'Selecciona un archivo para reemplazar.'; return; }
        const file = fileEl.files[0];
        if (!DOC_STATE[key]) { $('#uploadFeedback').textContent = 'No existe archivo previo. Usa "Subir".'; return; }
        DOC_STATE[key].filename = file.name;
        DOC_STATE[key].status = 'sent';
        DOC_STATE[key].uploadedAt = new Date().toISOString();
        $('#uploadFeedback').textContent = 'Archivo reemplazado (simulado): ' + file.name;
        fileEl.value = '';
        renderList();
      });

      // batch validate / invalidate
      $('#batchValidate').addEventListener('click', ()=>{
        const key = $('#docSelect').value;
        if (!DOC_STATE[key] || !DOC_STATE[key].filename) { alert('Selecciona documento con archivo enviado para validar.'); return; }
        DOC_STATE[key].status = 'validated';
        renderList();
      });
      $('#batchInvalidate').addEventListener('click', ()=>{
        const key = $('#docSelect').value;
        if (!DOC_STATE[key] || !DOC_STATE[key].filename) { alert('Selecciona documento con archivo enviado para rechazar.'); return; }
        DOC_STATE[key].status = 'rejected';
        renderList();
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

</x-app-layout >
