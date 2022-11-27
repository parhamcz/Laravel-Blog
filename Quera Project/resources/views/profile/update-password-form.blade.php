<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        پسورد
    </x-slot>

    <x-slot name="description">
        در این قسمت می توانید پسوردتان را تغییر دهید.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="پسورد کنونی" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full eninputs" wire:model.defer="state.current_password"/>
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="پسورد جدید" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full eninputs" wire:model.defer="state.password"/>
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="تایید پسورد جدید" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full eninputs" wire:model.defer="state.password_confirmation"/>
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            انجام شد
        </x-jet-action-message>

        <x-jet-button>
            ذخیره
        </x-jet-button>
    </x-slot>
</x-jet-form-section>