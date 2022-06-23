<a
    {{ $attributes->merge(['href' => '#', 'class' => 'font-semibold text-sm tracking-widest bg-gray-300 hover:bg-gray-500 text-gray-800 active:bg-gray-500 focus:border-gray-600 focus:ring-gray-300 anchor-button rounded-md py-2 px-4']) }}>
    {{ $slot }}
</a>
