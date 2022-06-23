<div class="grid grid-cols-4 gap-4 pt-4">
    <div class="col-span-4 lg:col-span-1">
        <x-card.base>
            <p class="text-xl font-bold">Kategori</p>
                <div class="flex flex-col pl-4 mt-4">
                    @forelse ($categories as $category)
                        <div class="flex mt-4">
                            @if ($category->id==$selectedCategoryId)
                                <x-anchor.black class="grow" href="#">
                                    {{ $category->name }}
                                </x-anchor.black>
                            @else
                                <x-anchor.white class="grow" href="{{ route('kategori', ['id' => $category->id]) }}">
                                    {{ $category->name }}
                                </x-anchor.white>
                            @endif

                            @auth
                                <div x-data="{ open: false }" class="relative ml-2">
                                    <x-button.white @click="open = true">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </x-button.white>

                                    <ul x-show="open" @click.away="open = false" class="bg-white border border-gray-300 rounded absolute z-10 p-2">
                                        <li><x-button.white class="w-full px-2 py-1"
                                            wire:click="$emit('openModal', 'category-modal', {{ json_encode(['id' => $category->id]) }})">Edit</x-button.white></li>
                                        <li class="mt-2"><x-button.error class="w-full px-2 py-1"
                                            wire:click="$emit('openModal', 'category-delete-modal', {{ json_encode(['id' => $category->id]) }})">Hapus</x-button.error></li>
                                    </ul>
                                </div>
                            @endauth
                        </div>
                    @empty
                        <p class="font-bold text-center mb-0">Belum ada kategori.</p>
                    @endforelse
                </div>

            @auth
                <x-button.success class="mt-10" wire:click="$emit('openModal', 'category-modal', {{ json_encode(['id' => '']) }})">+ Kategori</x-button.success>
            @endauth
        </x-card.base>
    </div>

    <div class="col-span-4 lg:col-span-3">
        @if (!empty($selectedCategoryId))
            @livewire('subcategory', ['categoryId' => $selectedCategoryId, 'year' => $year, 'villageId' => $villageId])
        @endif
    </div>
</div>
