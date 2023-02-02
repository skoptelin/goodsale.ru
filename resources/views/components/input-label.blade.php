@props(['value'])

<label {{ $attributes->merge(['class' => 'mt-3 block font-medium text-sm text-sky-500']) }}>
    {{ $value ?? $slot }}
</label>
