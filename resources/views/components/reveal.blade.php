@props(['delay' => 0])

<div x-data
    x-intersect.once="$el.classList.remove('opacity-0', 'translate-y-4'); $el.classList.add('opacity-100', 'translate-y-0')"
    style="transition-delay: {{ (int) $delay }}ms"
    {{ $attributes->merge(['class' => 'opacity-0 translate-y-4 transition-all duration-700']) }}>
    {{ $slot }}
</div>
