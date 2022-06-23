<button
    {{ $attributes->merge([
    'type' => 'button',
    'class' => 'font-semibold text-sm tracking-widest bg-sky-500 hover:bg-sky-400 text-white rounded-md active:bg-sky-400 active:scale-90 focus:border-sky-400 focus:ring-sky-300 anchor-button py-2 px-4',
]) }}>
    {{ $slot }}
</button>
