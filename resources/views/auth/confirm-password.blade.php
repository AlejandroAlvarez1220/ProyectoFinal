<x-guest-layout>
    <div class="mb-4 text-sm text-gray-700">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />

            <x-text-input id="password" class="block mt-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
        </div>

        <div class="flex justify-end mt-6">
            <x-primary-button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

