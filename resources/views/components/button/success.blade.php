<button
    {{ $attributes->merge([
    'type' => 'button',
    'class' => 'font-semibold text-sm tracking-widest bg-green-500 hover:bg-green-400 text-white rounded-md active:bg-green-400 active:scale-90 focus:border-green-400 focus:ring-green-300 anchor-button py-2 px-4',
]) }}>
    {{ $slot }}
</button>
