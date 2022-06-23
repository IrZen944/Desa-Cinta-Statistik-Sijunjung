<div>
    <x-modal.body>
        <x-input.wrapper>
            <x-input.label for="csv" value="File" />
            <x-input.text type="file" name="csv" wire:model.defer="csv" />
            <x-input.error for="csv" />
        </x-input.wrapper>
    </x-modal.body>
    <x-modal.footer class="justify-end">
        <x-button.success wire:click="saveBankers">Simpan</x-button.success>
    </x-modal.footer>
</div>
