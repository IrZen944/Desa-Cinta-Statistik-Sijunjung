@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['type' => 'radio', 'class' => 'form-radio h-5 w-5 text-gray-800']) !!}>
