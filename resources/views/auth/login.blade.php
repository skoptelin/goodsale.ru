<x-guest-layout>
    <div class="mb-8 text-center text-sky-500 font-bold">Вход</div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <x-input-label for="email" :value="__('Email')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <x-input-label for="password" :value="__('Пароль')" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-sky-500 text-sky-500 shadow-sm focus:ring-sky-500" name="remember">
                <span class="ml-2 text-sm text-sky-500">{{ __('Запомнить меня') }}</span>
            </label>
        </div>

        <div class="">
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-sky-500 hover:text-sky-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500" href="{{ route('password.request') }}">
                        {{ __('Восстановить пароль') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Войти') }}
                </x-primary-button>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-white dark:text-gray-500 underline-none">Зарегистрироваться</a>
                    @endif
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
