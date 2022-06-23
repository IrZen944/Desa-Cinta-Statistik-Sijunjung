<a
    {{ $attributes->merge(['href' => '#', 'class' => 'font-semibold text-sm tracking-widest bg-green-500 hover:bg-green-400 text-white active:bg-green-400 focus:border-green-400 focus:ring-green-300 anchor-button rounded-md py-2 px-4']) }}>
    {{ $slot }}
</a>
