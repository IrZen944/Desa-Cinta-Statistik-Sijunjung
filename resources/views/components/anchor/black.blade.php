<a
    {{ $attributes->merge(['href' => '#', 'class' => 'font-semibold text-sm tracking-widest bg-gray-700 hover:bg-gray-500 text-white active:bg-gray-500 focus:border-gray-500 focus:ring-gray-300 anchor-button rounded-md py-2 px-4']) }}>
    {{ $slot }}
</a>
