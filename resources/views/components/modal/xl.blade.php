<div class="fixed hidden z-10 inset-0 overflow-y-auto" {{ $attributes->merge(['id' => '']) }}>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
            <div class="bg-white">
                <div class="flex justify-between items-center rounded-t px-5 pt-5">
                    <p class="text-lg font-bold text-gray-900 lg:text-xl dark:text-white">
                        {{ $title }}
                    </p>
                    <x-button.white class="hover:bg-white text-xl text-gray-400 hover:text-gray-800 border-none hover:border-none py-1 px-1" onclick="document.getElementById('{{ $id }}').style.display='none'">
                        <i class="fas fa-times h-full"></i>
                    </x-button.white>
                </div>

                {{ $slot }}
            </div>
        </div>
    </div>
</div>
