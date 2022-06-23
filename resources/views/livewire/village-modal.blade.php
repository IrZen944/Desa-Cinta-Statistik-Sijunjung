<div>
    <x-modal.body>
        <x-input.wrapper>
            <x-input.label for="village.id_desa" value="Id Desa" />
            <x-input.text name="village.id_desa" wire:model.defer="village.id_desa" />
            <x-input.error for="village.id_desa" />
        </x-input.wrapper>
        <x-input.wrapper class="mt-2">
            <x-input.label for="village.name" value="Nama Desa" />
            <x-input.text name="village.name" wire:model.defer="village.name" />
            <x-input.error for="village.name" />
        </x-input.wrapper>
        <x-input.wrapper class="mt-2">
            <x-input.label for="village.code" value="Kode Desa" />
            <x-input.text name="village.code" wire:model.defer="village.code" />
            <x-input.error for="village.code" />
        </x-input.wrapper>
        <x-input.wrapper class="mt-2">
            <x-input.label for="village.district_id" value="Nama Kecamatan" />
            <x-input.select name="village.district_id" wire:model.defer="village.district_id">
                <option selected hidden></option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
            </x-input.select>
            <x-input.error for="village.district_id" />
        </x-input.wrapper>
        <x-input.wrapper class="mt-2">
            <x-input.label for="village.description" value="Deskripsi" />
            <x-input.textarea name="village.description" wire:model.defer="village.description"></x-input.textarea>
        </x-input.wrapper>
    </x-modal.body>
    <x-modal.footer class="justify-end">
        <x-button.success wire:click="saveVillage">Simpan</x-button.success>
    </x-modal.footer>
</div>
