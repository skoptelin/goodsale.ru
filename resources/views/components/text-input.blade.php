@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-sky-500 focus:border-sky-700 focus:ring-sky-700 rounded-none shadow-sm']) !!}>
