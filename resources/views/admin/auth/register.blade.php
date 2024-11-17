<x-guest-layout>
    <form method="POST" action="{{ route('admin.register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- userName -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('UserName')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- NPI ID -->
        <div class="mt-4">
            <x-input-label for="NPI Id" :value="__('NPI Id')" />
            <x-text-input id="npi" class="block mt-1 w-full" type="text" name="npi" :value="old('npi')" required autocomplete="npi" />
            <x-input-error :messages="$errors->get('npi')" class="mt-2" />
        </div>

        <!-- Setting -->
        <div class="mt-4">
            <x-input-label for="setting" :value="__('Setting')" />
            <x-text-input id="setting" class="block mt-1 w-full" type="text" name="setting" :value="old('setting')" required autocomplete="setting" />
            <x-input-error :messages="$errors->get('setting')" class="mt-2" />
        </div>

        <!-- specialty -->
        <div class="mt-4">
            <x-input-label for="specialty" :value="__('Specialty')" />
            <x-text-input id="specialty" class="block mt-1 w-full" type="text" name="specialty" :value="old('specialty')" required autocomplete="specialty" />
            <x-input-error :messages="$errors->get('specialty')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>