@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-0 bg-transparent border-b-2 focus:outline-none focus:ring-offset-0 focus:ring-0 border- shadow-sm border-white']) !!}>
