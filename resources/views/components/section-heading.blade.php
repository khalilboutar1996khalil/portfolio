@props(['eyebrow' => null, 'title', 'subtitle' => null, 'align' => 'center'])

<x-reveal class="{{ $align === 'center' ? 'text-center' : '' }} mb-12">
    @if ($eyebrow)
        <p class="section-eyebrow mb-2">{{ $eyebrow }}</p>
    @endif
    <h2 class="text-3xl md:text-4xl">{{ $title }}</h2>
    @if ($subtitle)
        <p class="mt-3 text-neutral-500 {{ $align === 'center' ? 'mx-auto max-w-2xl' : '' }}">{{ $subtitle }}</p>
    @endif
</x-reveal>
