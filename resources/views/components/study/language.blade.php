<x-anchor.white href="{{ route('study.language', $language->id) }}"
    class="transition-all ease-in-out delay-100 duration-1000 hover:bg-white hover:-translate-y-1 hover:scale-105" >
    <div class="flex justify-{{ auth()->user()->hasRole('user') ? 'center' : 'between' }} mb-4">
        <p class="text-lg lg:text-xl font-bold self-center">{{ $language->name }}</p>

        @if (auth()->user()->hasRole('admin') && empty($language->total))
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <x-button.white class="float-right btn-dropdown"><i class="fas fa-ellipsis-v"></i></x-button.white>
                </x-slot>

                <x-slot name="content">
                    <x-button.white class="text-left border-0 w-full btn-dropdown"
                        wire:click="$emit('openModal', 'language.modal-language', {{ json_encode(['id' => $language->id]) }})">
                        Edit
                    </x-button.white>
                    <x-button.white class="text-red-500 text-left border-0 w-full btn-dropdown"
                        wire:click="$emit('openModal', 'language.modal-delete', {{ json_encode(['id' => $language->id]) }})">
                        Delete
                    </x-button.white>
                </x-slot>
            </x-jet-dropdown>
        @endif
    </div>

    <img src="{{ asset('images/nodejs.png') }}" class="object-scale-down mx-auto my-3 lg:w-4/5" />

    @if (!empty($language->total))
        <div class="bg-gray-200 rounded-full w-1/2 mx-auto mt-6">
            @if ($language->completed!=0)
                <div class="bg-sky-500 text-sm text-white text-center align-middle p-0.5 leading-none rounded-full" style="width: {{ $language->progress }}%"> {{ $language->progress }}%</div>
            @else
                <div class="text-sm text-white align-middle leading-none rounded-full w-full px-2 py-0.5"> {{ $language->progress }}%</div>
            @endif
        </div>
        <div class="flex justify-center mt-2 mb-4">
            <x-badge.primary class="ml-auto mr-auto px-4">{{ $language->point }}pts</x-badge.primary>
        </div>
    @endif
</x-anchor.white>
