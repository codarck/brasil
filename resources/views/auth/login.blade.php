<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('Email ou CPF')" />
            <x-text-input id="email" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
    <x-input-label for="password" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " :value="__('Senha')" />

    <div class="relative">
        <x-text-input id="password" style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " class="block mt-1 w-full pr-10"
            type="password"
            name="password"
            required autocomplete="current-password" />

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
</div>
        <!-- Remember Me -->
        <div class="mt-4 flex items-center justify-between gap-3">
    <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ms-2 text-base text-gray-600">{{ __('Lembre de mim') }}</span>
    </label>

    @if (Route::has('password.request'))
        <a class="underline text-base text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Esqueceu a senha?') }}
        </a>
    @endif
</div>

        <div class="flex items-center justify-end mt-4">


            <x-primary-button style="font-size: var(--text-xl);line-height: var(--text-xl--line-height); " class="ms-3 w-full  justify-center">
                {{ __('ENTRAR') }}
            </x-primary-button>
        </div>
    </form>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var btn = document.getElementById('toggle-password');
    if (!btn) return;
    var input = document.getElementById('password');
    var eye = btn.querySelector('.eye');
    var eyeOff = btn.querySelector('.eye-off');

    btn.addEventListener('click', function () {
        if (!input) return;
        if (input.type === 'password') {
            input.type = 'text';
            btn.setAttribute('aria-pressed', 'true');
            if (eye) eye.classList.add('hidden');
            if (eyeOff) eyeOff.classList.remove('hidden');
        } else {
            input.type = 'password';
            btn.setAttribute('aria-pressed', 'false');
            if (eye) eye.classList.remove('hidden');
            if (eyeOff) eyeOff.classList.add('hidden');
        }
    });
});
</script>
</x-guest-layout>
