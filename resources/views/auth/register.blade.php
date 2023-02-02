<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-input-label for="name" :value="__('Имя')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <x-input-label for="email" :value="__('Email')" />
        </div>

        <!-- Phone number -->
        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full" type="number" name="phone_num" :value="old('phone_num')" required />
            <x-input-error :messages="$errors->get('phone_num')" class="mt-2" />
            <x-input-label for="phone_num" :value="__('Номер телефона')" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <x-input-label for="password" :value="__('Пароль')" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <x-input-label for="password_confirmation" :value="__('Подтверждение пароля')" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-sky-500 hover:text-sky-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500" href="{{ route('login') }}">
                {{ __('Уже зарегистрированы?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Зарегистрироваться') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
