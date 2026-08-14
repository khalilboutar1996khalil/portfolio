@props(['href', 'active' => false])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => ($active ? 'text-accent-600' : 'text-neutral-600 hover:text-neutral-900') . ' text-sm font-medium transition-colors']) }}>
    {{ $slot }}
</a>
