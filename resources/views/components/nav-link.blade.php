@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center border-b-2 border-white text-base font-medium text-white focus:outline-none focus:border-white transition duration-150 ease-in-out'
            : 'inline-flex items-center border-b-2 border-transparent text-base font-medium text-white hover:text-white hover:border-white focus:outline-none focus:text-white focus:border-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
