<div class="inline-flex items-center">
    <input {{ $attributes->merge(['type' => 'checkbox', 'class' => 'form-checkbox rounded-sm appearance-none checked:bg-sky-500 checked:border-sky-500 focus:text-sky-500 focus:ring-0 cursor-pointer disabled:opacity-50']) }} />
    @isset($text)
        <span class="ml-2 font-medium text-sm text-gray-800 capitalize">{{ $text }} </span>
    @endisset
</div>
