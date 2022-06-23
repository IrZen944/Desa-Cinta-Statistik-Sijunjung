@props(['menu' => 'Menu Item', 'active' => false])

<a {{ $attributes->merge(['href']) }} @class([
    'border-sky-700 font-bold' => $active,
    'hover:text-sky-500 border-white hover:border-sky-500 cursor-pointer font-medium ' => !$active,
    'flex items-center border-b-2 px-3 text-gray-800 ',
])>{{ $menu }}</a>
