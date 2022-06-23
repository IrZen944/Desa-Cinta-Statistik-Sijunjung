<div class="w-full lg:w-96 p-2 md:p-4 lg:p-8">
    <x-card.base>
        <p class="text-xl font-bold px-4">Desa</p>
        <div class="flex flex-col mt-4 px-4">
            @forelse ($villages as $village)
                <div class="flex w-full mt-4">
                    <p class="grow align-middle mb-0">{{ $village->name }}</p>
                    @auth
                        <x-button.white class="px-2 py-1"
                            wire:click="$emit('openModal', 'village-modal', {{ json_encode(['id' => $village->id]) }})">Edit</x-button.white>
                        <x-button.error class="px-2 py-1 ml-2"
                            wire:click="$emit('openModal', 'village-delete-modal', {{ json_encode(['id' => $village->id]) }})">Hapus</x-button.error>
                    @else
                        <x-button.white class="px-2 py-1 ml-2"
                            wire:click="$emit('openModal', 'village-description', {{ json_encode(['id' => $village->id]) }})">Detail</x-button.white>
                    @endauth
                </div>
            @empty
                <p class="text-xl text-center">Belum ada data desa</p>
            @endforelse
        </div>
    </x-card.base>
    @auth
        <div class="fixed bottom-12 right-12">
            <x-button.success wire:click="$emit('openModal', 'village-modal', {{ json_encode(['id' => '']) }})">+ Desa</x-button.success>
        </div>
    @endauth
</div>
