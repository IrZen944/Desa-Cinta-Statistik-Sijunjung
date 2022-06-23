<div>
    <x-modal.header>
        Desa {{ $this->village->name}}
    </x-modal.header>
    <x-modal.body>
        @foreach ($subcategories as $subcategory)
            <x-input.wrapper>
                <x-input.label for="vals.{{ $subcategory->id }}" value="{{ $subcategory->name }}" />
                <x-input.text name="vals.{{ $subcategory->id }}" wire:model.defer="vals.{{ $subcategory->id }}" />
                <x-input.error for="vals.{{ $subcategory->id }}" />
            </x-input.wrapper>
        @endforeach
    </x-modal.body>
    <x-modal.footer class="justify-end">
        <x-button.success wire:click="saveBankers">Simpan</x-button.success>
    </x-modal.footer>
</div>
