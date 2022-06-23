<div>
    <x-modal.body>
        <x-input.wrapper>
            <x-input.label for="banker.value" value="Nilai" />
            <x-input.text name="banker.value" wire:model.defer="banker.value" />
            <x-input.error for="banker.value" />
        </x-input.wrapper>
    </x-modal.body>
    <x-modal.footer class="justify-end">
        <x-button.success wire:click="saveBanker">Simpan</x-button.success>
    </x-modal.footer>
</div>
