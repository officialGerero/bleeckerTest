<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Login -->
            <div class="mt-2">
                <x-label for="login" :value="__('Login')" />
                <x-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus />
            </div>

            <!-- Name -->
            <div class="mt-2">
                <x-label for="full_name" :value="__('Full Name')" />
                <x-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" required />
            </div>

            <!-- Birthday -->
            <div class="mt-2">
                <x-label for="birthday" :value="__('Birthday')" />
                <x-input id="birthday" class="block mt-1 w-full" type="text" name="birthday" :value="old('birthday')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-2">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Address -->
            <div class="mt-2">
                <x-label for="address" :value="__('Address')" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <!-- City -->
            <div class="mt-2">
                <x-label for="city" :value="__('City')" />
                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div>

            <!-- State -->
            <div class="mt-2">
                <x-label for="state" :value="__('State')" />
                <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required />
            </div>

            <!-- Country -->
            <div class="mt-2">
                <x-label for="country" :value="__('Country')" />
                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required />
            </div>

            <!-- Password -->
            <div class="mt-2">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-2">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
