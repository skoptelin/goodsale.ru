@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-sky-500']) }}>
    {{ $value ?? $slot }}
</label>
