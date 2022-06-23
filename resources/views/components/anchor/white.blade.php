<a
    {{ $attributes->merge(['href' => '#', 'class' => 'font-semibold text-sm tracking-widest bg-white hover:bg-gray-100 text-gray-800 border border-gray-300 active:bg-gray-300 focus:border-gray-300 focus:ring-gray-200 anchor-button rounded-md py-2 px-4']) }}>
    {{ $slot }}
</a>
