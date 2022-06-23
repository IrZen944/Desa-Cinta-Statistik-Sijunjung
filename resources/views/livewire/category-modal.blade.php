<div>
    <x-modal.body>
        <x-input.wrapper>
            <x-input.label for="name" value="Nama Kategori" />
            <x-input.text name="category.name" wire:model.defer="category.name" />
            <x-input.error for="category.name" />
        </x-input.wrapper>
    </x-modal.body>
    <x-modal.footer class="justify-end">
        <x-button.success wire:click="saveCategory">Simpan</x-button.success>
    </x-modal.footer>
</div>
