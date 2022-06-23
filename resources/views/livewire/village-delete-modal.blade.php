<div>
    <x-modal.body>
        <p class="text-red-500">Apakah Anda yakin ingin menghapus desa {{ $village->name }}?</p>
    </x-modal.body>
    <x-modal.footer class="justify-end">
        <x-button.error wire:click="deleteVillage">Hapus</x-button.error>
    </x-modal.footer>
</div>
