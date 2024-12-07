<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-gray-700 font-medium" />
            <x-text-input id="name" class="block mt-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none" 
                          type="text" 
                          name="name" 
                          :value="old('name')" 
                          required 
                          autofocus 
                          autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />
            <x-text-input id="email" class="block mt-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required 
                          autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
            <x-text-input id="password" class="block mt-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none" 
                          type="password" 
                          name="password" 
                          required 
                          autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 font-medium" />
            <x-text-input id="password_confirmation" class="block mt-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none" 
                          type="password" 
                          name="password_confirmation" 
                          required 
                          autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

