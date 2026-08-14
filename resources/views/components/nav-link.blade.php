@props(['href', 'active' => false])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => ($active ? 'text-accent-600 dark:text-accent-400' : 'text-neutral-600 hover:text-neutral-900 dark:text-neutral-400 dark:hover:text-white') . ' text-sm font-medium transition-colors']) }}>
    {{ $slot }}
</a>
