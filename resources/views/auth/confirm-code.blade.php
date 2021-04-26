<x-guest-layout>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by writing the code we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('verify.code') }}">
                    @csrf
                    <x-label for="code" :value="__('Verification Code')" />
                    <div class="flex items-center">
                        <div class="float-left">
                            <x-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required />
                        </div>
                        <div class="float-right ml-10">
                            <x-button>
                                {{ __('Verify code') }}
                            </x-button>
                        </div>
                    </div>
                </form><br>
                <div class="mt-4 items-center">
                    <div class="float-left">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <div>
                                <x-button>
                                    {{ __('Resend Verification Email') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                    <div class="float-right">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                {{ __('Log out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
