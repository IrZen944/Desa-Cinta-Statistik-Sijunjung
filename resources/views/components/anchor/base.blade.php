<a
    {{ $attributes->merge(['href' => '#', 'class' => 'font-semibold hover:underline text-sky-700 active:text-sky-900 focus:text-sky-900']) }}>
    {{ $slot }}
</a>
