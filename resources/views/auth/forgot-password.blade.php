<x-guest-layout>
    <div class="mb-4 text-sm text-gray-700">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <x-auth-session-status class="mb-4 text-green-600 font-medium" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />
            <x-text-input id="email" class="block mt-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
