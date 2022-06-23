<div>
    <x-modal.body>
        <x-input.wrapper>
            <x-input.label for="name" value="Nama Subkategori" />
            <x-input.text name="subcategory.name" wire:model.defer="subcategory.name" />
            <x-input.error for="subcategory.name" />
        </x-input.wrapper>
        <x-input.wrapper class="mt-4">
            <x-input.label for="name" value="Gambar Subkategori" />
            <x-input.text type="file" name="photo" wire:model="photo" />
            <x-input.error for="photo" />
        </x-input.wrapper>
    </x-modal.body>
    <x-modal.footer class="justify-end">
        <x-button.success wire:click="saveSubcategory">Simpan</x-button.success>
    </x-modal.footer>
</div>
