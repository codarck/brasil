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
<body class="bg-[#FDFDFC] dark:bg-[#17466E] text-[#1b1b18] min-h-screen">
  <div class="py-8"></div>

  <!-- centered card -->
  <div class="flex justify-center px-4">

    <div class="w-full max-w-4xl mx-auto bg-white dark:bg-[#00305B] rounded-lg shadow-lg overflow-hidden">
        <div class="flex justify-center py-4">
  <img src="{{ asset('logo.png') }}" alt="{{ config('app.name', 'Logo') }}"
       class="h-20 md:h-24 w-auto object-contain rounded-md shadow-sm  p-2">
</div>
      <div class="w-full bg-[#00305B] rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4 text-white">Serviço / Hospital</h2>

        <form method="POST" action="" class="space-y-6 p-4">
  @csrf

  <div class="max-w-full mx-auto">
    <!-- Row helper: label left, input right -->
    <div class="space-y-4">
      <!-- Nome -->
      <div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">Nome</label>
        <div class="flex-1">
          <x-text-input id="name" class="w-full h-10 px-3 rounded-md" type="text" name="name" :value="old('name')" />
          <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs" />
        </div>
      </div>

      <!-- CNPJ + consultar -->
      <div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">CNPJ</label>
        <div class="flex-1 flex gap-2">
          <x-text-input id="cnpj" class="flex-1 h-10 px-3 rounded-md" type="text" name="cnpj" :value="old('cnpj')" />
          <button type="button" class="h-10 px-3 rounded-md bg-teal-500 text-white text-xl">Consultar CNPJ</button>
        </div>
      </div>

      <!-- Razão social / Nome -->
      <div class="flex flex-col sm:flex-row sm:items-start gap-2">
        <label class="sm:w-40 text-xl text-white">Razão social / Nome</label>
        <div class="flex-1">
          <x-text-input id="corporate_name" class="w-full h-10 px-3 rounded-md" type="text" name="corporate_name" :value="old('corporate_name')" />
          <x-input-error :messages="$errors->get('corporate_name')" class="mt-1 text-xs" />
        </div>
      </div>

      <!-- Nome fantasia -->
      <div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">Nome fantasia</label>
        <div class="flex-1">
          <x-text-input id="trade_name" class="w-full h-10 px-3 rounded-md" type="text" name="trade_name" :value="old('trade_name')" />
        </div>
      </div>

      <!-- CEP + Número (same row) -->
      <div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">CEP</label>
        <div class="flex-1 grid grid-cols-3 gap-3">
          <x-text-input id="cep" class="col-span-3 h-10 px-3 rounded-md" type="text" name="cep" :value="old('cep')" />

        </div>
      </div>


      <!-- Endereço -->
      <div class="flex flex-col sm:flex-row sm:items-start gap-2">
        <label class="sm:w-40 text-xl text-white">Endereço</label>
        <div class="flex-1">
          <x-text-input id="address" class="w-full h-10 px-3 rounded-md" type="text" name="address" :value="old('address')" />
        </div>
      </div>
<div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">Número</label>
        <div class="flex-1 grid grid-cols-3 gap-3">
          <x-text-input id="number" class="col-span-3 h-10 px-3 rounded-md" type="text" name="number" :value="old('number')" />

        </div>
      </div>
      <!-- Complemento + Bairro (same row) -->
      <div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">Complemento</label>
        <div class="flex-1 grid grid-cols-3 gap-3">
          <x-text-input id="complement" class="col-span-3 h-10 px-3 rounded-md" type="text" name="complement" :value="old('complement')" />

        </div>
      </div>
<div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">Bairro</label>
        <div class="flex-1 grid grid-cols-3 gap-3">
          <x-text-input id="neighborhood" class="col-span-3 h-10 px-3 rounded-md" type="text" name="neighborhood" :value="old('neighborhood')" />

        </div>
      </div>
      <!-- Município + UF -->
      <div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">Município</label>
        <div class="flex-1 grid grid-cols-3 gap-3">
          <x-text-input id="city" class="col-span-3 h-10 px-3 rounded-md" type="text" name="city" :value="old('city')" />

        </div>
      </div>
      <div class="flex flex-col sm:flex-row sm:items-center gap-2">
        <label class="sm:w-40 text-xl text-white">UF</label>
        <div class="flex-1 grid grid-cols-3 gap-3">
          <x-text-input id="complement" class="col-span-3 h-10 px-3 rounded-md" type="text" name="complement" :value="old('complement')" />

        </div>
      </div>
    </div>

    <!-- actions -->
    <div class="flex items-center justify-between mt-4">
      <a href="/" class="text-xl text-gray-200 hover:underline">Voltar</a>
      <button type="submit" class="inline-flex items-center text-xl px-6 py-2 bg-teal-600 hover:bg-teal-700 text-white rounded-full">Enviar</button>
    </div>
  </div>
</form>
      </div>
    </div>
  </div>
</body>
</html>
