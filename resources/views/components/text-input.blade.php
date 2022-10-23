@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-0 bg-transparent border-b-2 shadow-sm border-gray-300']) !!}>
