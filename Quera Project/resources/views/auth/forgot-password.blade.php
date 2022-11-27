<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="ایمیل" />
                <x-jet-input id="email" class="block mt-1 w-full eninputs" type="email" name="email" :value="old('email')"/>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-jet-button>
                    ارسال
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>