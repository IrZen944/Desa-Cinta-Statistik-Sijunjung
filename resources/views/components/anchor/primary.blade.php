<a
    {{ $attributes->merge(['href' => '#', 'class' => 'font-semibold text-sm tracking-widest bg-sky-500 hover:bg-sky-400 text-white active:bg-sky-400 focus:border-sky-400 focus:ring-sky-300 anchor-button rounded-md py-2 px-4']) }}>
    {{ $slot }}
</a>
