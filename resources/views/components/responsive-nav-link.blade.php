@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-r-2 border-white text-right text-base font-medium text-white bg-sky-500 focus:outline-none focus:text-white focus:bg-sky-700 focus:border-white transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-r-2 border-transparent text-right text-base font-medium text-white hover:white hover:bg-sky-700 hover:border-white focus:outline-none focus:text-white focus:bg-sky-700 focus:border-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
