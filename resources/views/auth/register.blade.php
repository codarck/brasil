<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="email" :value="__('Email ou CPF')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
         <div hidden >
            <x-input-label for="name" :value="__('Email ou CPF')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', 'user')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Password -->

        <div class="mt-4">
          <h2 class="text-lg font-medium text-gray-900">Nova Senha</h2>
          <p class="mt-1 text-sm text-gray-600">Por favor, digite uma nova senha nos campos abaixo.</p>
            {{-- <x-input-label for="password" :value="__('Senha')" /> --}}

            <div class="relative">
                <x-text-input id="password" class="block mt-1 w-full pr-10"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <button type="button" id="toggle-password" class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none" aria-label="Mostrar contraseña" aria-pressed="false">
                    <svg class="eye w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg class="eye-off w-5 h-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.965 9.965 0 012.223-3.364m1.77-1.597A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.96 9.96 0 01-1.016 2.238M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
               <span class="text-sm font-bold">Sua senha precisa atender aos seguintes critérios:</span>
                <ul class="list-disc list-inside text-gray-500">
                    <li>Mínimo uma letra minúscula *</li>
                    <li>Mínimo uma letra maiúscula</li>
                    <li>Mínimo um número</li>
                    <li>Mínimo de 8 caracteres *</li>
                </ul>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('
Confirme sua senha')" />

            <div class="relative">
                <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <button type="button" id="toggle-password-confirm" class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none" aria-label="Mostrar confirmar contraseña" aria-pressed="false">
                    <svg class="eye w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg class="eye-off w-5 h-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.965 9.965 0 012.223-3.364m1.77-1.597A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.96 9.96 0 01-1.016 2.238M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="mt-4">
            <div class="text-sm">
            Este site é protegido pelo reCAPTCHA e pelo Google aplicando as seguintes <span class="text-blue-500">Políticas de Segurança</span>  e <span class="text-blue-500">Termos de Serviço</span>.</div>
        <div class="flex items-center gap-4 p-3 border rounded bg-gray-50 ">
            <button type="button" id="decorative-captcha-toggle" aria-pressed="false"
            class="w-6 h-6 flex items-center justify-center rounded border bg-white text-transparent focus:outline-none">
            <!-- check icon (hidden by default) -->
            <svg class="captcha-check hidden w-4 h-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
            </svg>
            </button>

            <div class="flex-1">

            <div class="text-sm font-medium text-gray-700 ">
Eu não sou um robô</div>
            <div class="text-xs text-gray-500 ">Captcha decorativo — não valida no servidor</div>
            </div>

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/RecaptchaLogo.svg/768px-RecaptchaLogo.svg.png" alt="captcha" class="h-10 w-auto rounded">
        </div>
        </div>




        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('
Já está cadastrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>



    </form>


    <script>
document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('decorative-captcha-toggle');
  if (!btn) return;
  const check = btn.querySelector('.captcha-check');

  btn.addEventListener('click', function () {
    const pressed = btn.getAttribute('aria-pressed') === 'true';
    btn.setAttribute('aria-pressed', String(!pressed));

    if (!pressed) {
      check.classList.remove('hidden');
      btn.classList.remove('text-transparent');
    } else {
      check.classList.add('hidden');
      btn.classList.add('text-transparent');
    }
  });
});
</script>

<script>
// filepath: c:\laragon\www\brasil\resources\views\auth\register.blade.php
document.addEventListener('DOMContentLoaded', function () {
    function setupToggle(btnId, inputId) {
        var btn = document.getElementById(btnId);
        var input = document.getElementById(inputId);
        if (!btn || !input) return;
        var eye = btn.querySelector('.eye');
        var eyeOff = btn.querySelector('.eye-off');

        btn.addEventListener('click', function () {
            var showing = input.type !== 'password';
            input.type = showing ? 'password' : 'text';
            btn.setAttribute('aria-pressed', String(!showing));
            if (eye) eye.classList.toggle('hidden', !showing);
            if (eyeOff) eyeOff.classList.toggle('hidden', showing);
        });
    }

    setupToggle('toggle-password', 'password');
    setupToggle('toggle-password-confirm', 'password_confirmation');
});
</script>
</x-guest-layout>
