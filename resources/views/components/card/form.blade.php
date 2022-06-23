<div class="m-auto max-w-full">
    <div {{ $attributes->merge(['class' => 'lg:grid lg:grid-cols-3 lg:gap-6 mx-2 my-2']) }}>
        {{-- title --}}
        <div class="lg:col-span-1 flex justify-between">
            <div class="px-4 md:px-0">
                <h3 class="text-lg font-medium text-gray-800">{{ $title }}</h3>
                <p class="mt-1 text-sm text-gray-800">
                    {{ $description }}
                </p>
            </div>
        </div>

        {{-- content --}}
        <div class="mt-5 lg:mt-0 lg:col-span-2">
            <div class="px-4 py-5 md:p-6 bg-white shadow md:rounded-lg text-gray-800">
                {{ $slot }}
            </div>
        </div>

        {{-- action --}}
        <div class="mt-5">

        </div>
    </div>

</div>
