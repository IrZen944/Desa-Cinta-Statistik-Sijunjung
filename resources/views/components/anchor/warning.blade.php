<a
    {{ $attributes->merge(['href' => '#', 'class' => 'font-semibold text-sm tracking-widest bg-yellow-400 hover:bg-yellow-300 text-white active:bg-yellow-300 focus:border-yellow-300 focus:ring-yellow-300 anchor-button rounded-md py-2 px-4']) }}>
    {{ $slot }}
</a>
