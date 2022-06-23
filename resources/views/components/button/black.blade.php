<button
    {{ $attributes->merge([
    'type' => 'button',
    'class' => 'font-semibold text-sm tracking-widest bg-gray-700 hover:bg-gray-500 text-white rounded-md active:bg-gray-500 active:scale-90 focus:border-gray-500 focus:ring-gray-300 anchor-button py-2 px-4',
]) }}>
    {{ $slot }}
</button>
