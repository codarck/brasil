<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#17466E] text-[#1b1b18] flex items-start min-h-screen flex-col">
    <div class="py-4"></div>
  <div class="w-full max-w-7xl mx-auto bg-white dark:bg-[#00305B] rounded-lg shadow-lg overflow-hidden">
    <div class="p-4">
    <h3 class="text-xl md:text-5xl font-semibold mb-4 text-white">

            @if (request()->routeIs('register1'))
        CIRURGIÃO  PLÁSTICO RESIDENTE
    @elseif (request()->routeIs('register2'))
        CIRURGIÃO PLÁSTICO FORMADO
    @else
        CANDIDATO  A VAGA
    @endif
        </h3></div>
    <div class="md:flex">
      <!-- Left: Form -->

      <div class="hidden md:block md:w-2/5 p-8 md:p-12 bg-gradient-to-br from-[#0f4b5e] to-[#0b6b7a] text-white">

        {{-- <p class="text-sm md:text-base mb-6">Explica aquí los beneficios de registrarse, requisitos o instrucciones breves. Reemplaza este texto por el contenido que desees mostrar al lado del formulario.</p>
        <ul class="text-sm md:text-base list-disc list-inside space-y-2">
          <li>Acceso a contenido exclusivo</li>
          <li>Soporte y actualizaciones</li>
          <li>Gestión de perfil y servicios</li>
        </ul> --}}
        <div class="w-full h-full">
<label for="attachment"
       class="group relative flex flex-col items-center justify-center w-full h-[640px] md:h-[720px] border-2 border-dashed border-white/30 rounded-md cursor-pointer bg-white/5 hover:bg-white/10 transition">
  <input id="attachment" name="attachment" type="file" class="sr-only" />
  {{-- <svg class="w-12 h-12 text-white/80 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
  </svg>
  <span class="text-white text-lg font-semibold opacity-90">Anexar archivo</span> --}}

  <!-- nombre de archivo (se muestra después de seleccionar) -->
  <span id="attachment-name" class="absolute left-3 top-3 text-xs text-white/80"></span>

  <!-- lápiz en la esquina inferior derecha -->
  <span class="absolute bottom-3 right-3 bg-white/10 hover:bg-white/20 text-white p-2 rounded-full shadow-md">
    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15.232 5.232l3.536 3.536M4 20l7.5-1.5L20 9.5a2.121 2.121 0 000-3L17.5 4a2.121 2.121 0 00-3 0L4 14.5V20z"/>
    </svg>
  </span>
</label>
</div>
      </div>
      <div class="w-full md:w-3/5 p-8 md:p-12">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6 text-white dark:text-white">Criar  conta</h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
          @csrf

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- First & Last name across two cols on small screens -->
            <div class="sm:col-span-2 lg:col-span-2">
              <x-input-label for="first_name" class="text-white " style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('NOME(S)')" />
              <x-text-input id="first_name" class="block mt-1 w-full " style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="first_name" :value="old('first_name')" required autocomplete="given-name" />
              <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <div class="sm:col-span-2 lg:col-span-2">
              <x-input-label for="last_name" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('SOBRENOME(S)')" />
              <x-text-input id="last_name" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" />
              <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>

            <div class="lg:col-span-2">
              <x-input-label for="birth_date" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('DATA DE NASCIMENTO')" />
              <x-text-input id="birth_date" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="date" name="birth_date" :value="old('birth_date')" required />
              <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
            </div>

            <div class="lg:col-span-2">
              <x-input-label for="cpf" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('CPF')" />
              <x-text-input id="cpf" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="cpf" :value="old('cpf')" required />
              <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
            </div>

            <div class="lg:col-span-2">
              <x-input-label for="rg" class="text-white"  style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('RG(RNE)')" />
              <x-text-input id="rg" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="rg" :value="old('rg')" />
              <x-input-error :messages="$errors->get('rg')" class="mt-2" />
            </div>

            <div class="col-span-2">
              <x-input-label for="gender" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('GÊNERO')" />
               <x-text-input id="rg" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="rg" :value="old('rg')" />


              <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>

            <div class="col-span-2">
              <x-input-label for="marital_status"  class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('ESTADO CIVIL')" />
              <x-text-input id="marital_status" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="marital_status" :value="old('marital_status')" />
              <x-input-error :messages="$errors->get('marital_status')" class="mt-2" />
            </div>


            <div class="col-span-4">
              <x-input-label for="address"  class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('ENDEREÇO DOMICILIAR')" />
              <x-text-input id="address" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="address" :value="old('address')" />
              <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            <div  class="col-span-2">
              <x-input-label for="bairro" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('BAIRRO')" />
              <x-text-input id="bairro" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="bairro" :value="old('bairro')" />
              <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
            </div>

            <div class="col-span-2">
              <x-input-label for="city" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('CIDADE')" />
              <x-text-input id="city" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="city" :value="old('city')" />
              <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>

            <div  class="col-span-2">
              <x-input-label for="state" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('ESTADO')" />
              <x-text-input id="state" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="state" :value="old('state')" />
              <x-input-error :messages="$errors->get('state')" class="mt-2" />
            </div>
            <div  class="col-span-2">
              <x-input-label for="cep" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('CEP')" />
              <x-text-input id="cep" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="cep" :value="old('cep')" />
              <x-input-error :messages="$errors->get('cep')" class="mt-2" />
            </div>




            <div class="col-span-2">
              <x-input-label for="country" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('PAIS')" />
              <x-text-input id="country" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="country" :value="old('country', 'Brasil')" />
              <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>

            <div class="col-span-2">
              <x-input-label for="email" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('EMAIL')" />
              <x-text-input id="email" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="email" name="email" :value="old('email')" required autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="col-span-2">
              <x-input-label for="phone" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('TELEFONE CELULAR')" />
              <x-text-input id="phone" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="phone" :value="old('phone')" />
              <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <div  class="col-span-2">
              <x-input-label for="crm" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('CRM')" />
              <x-text-input id="crm" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="crm" :value="old('crm')" />
              <x-input-error :messages="$errors->get('crm')" class="mt-2" />
            </div>
             @if (!request()->routeIs('register1'))
            <div class="col-span-3">
              <x-input-label for="rqe" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('RQE')" />
              <x-text-input id="rqe" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="rqe" :value="old('rqe')" />
              <x-input-error :messages="$errors->get('rqe')" class="mt-2" />
            </div>
            @endif
            <div class="col-span-2">
              <x-input-label for="role" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('ANO DE RESIDÊNCIA')" />
              <x-text-input id="role" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="role" :value="old('role')" />
              <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>
            <div class="col-span-4">
              <x-input-label for="institution" class="text-white" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('INSTITUIÇÃO')" />
              <x-text-input id="institution" class="block mt-1 w-full" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " type="text" name="institution" :value="old('institution')" />
              <x-input-error :messages="$errors->get('institution')" class="mt-2" />
            </div>


          </div>
          <div class="pt-4 space-y-4">
            <div class="flex items-start gap-3">
              <input id="terms" name="terms" type="checkbox" required
                     class="h-4 w-4 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
              <label for="terms" class="text-xl text-gray-700 dark:text-white">
                Aceito os termos de uso e política de privacidade
              </label>
            </div>

            <div class="flex items-start gap-3">
              <input id="marketing" name="marketing" type="checkbox"
                     class="h-4 w-4 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
              <label for="marketing" class="text-xl text-gray-700 dark:text-white">
                Receber comunicações e promoções
              </label>
            </div>

            <div class="flex items-center justify-between pt-4">
            <a href="{{ route('login') }}" class="text-xl text-gray-600 hover:underline dark:text-gray-300">Já está cadastrado?</a>
             <a href="{{ route('register') }}" class="text-xl inline-flex items-center px-6 py-3 bg-[#0a7f91] hover:bg-[#0a7181] text-white rounded-full">Registrar</a>
          </div>
          </div>



        </form>
      </div>

      <!-- Right: Informational text -->

    </div>
  </div>

   <script>
        document.addEventListener('DOMContentLoaded', function () {
          const input = document.getElementById('attachment');
          const nameEl = document.getElementById('attachment-name');
          if (!input) return;
          input.addEventListener('change', function () {
            const f = input.files && input.files[0];
            nameEl.textContent = f ? f.name : '';
          });
        });
        </script>
</body>
</html>
