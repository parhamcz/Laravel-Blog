<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="mobile" value="موبایل" />
                <x-jet-input id="mobile" class="block mt-1 w-full eninputs" type="text" name="mobile" :value="old('mobile')"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="پسورد" />
                <x-jet-input id="password" class="block mt-1 w-full eninputs" type="password" name="password" required autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="تایید پسورد" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full eninputs" type="password" name="password_confirmation"/>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-jet-button>
                    ثبت نام
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>