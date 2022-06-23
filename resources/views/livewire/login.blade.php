<div class="w-1/2 mx-auto mt-4">
    <x-card.base>
        <x-input.wrapper>
            <x-input.label for="email" value="Email" />
            <x-input.text type="email" name="email" wire:model.defer="email" />
            <x-input.error for="email" />
        </x-input.wrapper>
        <x-input.wrapper class="mt-4">
            <x-input.label for="password" value="Password" />
            <x-input.text type="password" name="password" wire:model.defer="password" />
            <x-input.error for="password" />
        </x-input.wrapper>
        <div class="flex justify-end mt-4">
            <x-button.primary wire:click="login">Log In</x-button.primary>
        </div>
    </x-card.base>
</div>
