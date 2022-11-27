<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="mobile" value="{{ __('validation.attributes.mobile') }}" />
                <x-jet-input id="mobile" class="block mt-1 w-full eninputs" type="text" name="mobile" :value="old('mobile')"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('validation.attributes.password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full eninputs" type="password" name="password"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="mr-2 text-sm text-gray-600"> {{ __('admin::admin.remember_me') }} </span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="ml-2 text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        فراموشی رمز
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('admin::admin.login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>