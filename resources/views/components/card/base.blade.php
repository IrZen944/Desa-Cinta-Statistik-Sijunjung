<div class="my-2 mx-2">
    <div class="flex justify-between items-center px-4 sm:px-0">
        @isset($title)
            <h4 class="mb-2 flex-1 text-xl font-semibold text-gray-800 dark:text-gray-300 capitalize">
                {{ $title }}
            </h4>
        @endisset
        @isset($aside)
            <div class="mb-2 ">
                {{ $aside }}
            </div>
        @endisset
    </div>
    <div
        {{ $attributes->merge(['class' => 'px-4 py-5 sm:p-6 bg-white sm:rounded-lg shadow-md border border-gray-100 text-gray-800']) }}>
        {{ $slot }}
    </div>
</div>
