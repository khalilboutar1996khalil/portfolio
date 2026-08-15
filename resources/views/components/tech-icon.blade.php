@props(['name'])

<span {{ $attributes->merge(['class' => 'inline-flex h-4 w-4 shrink-0 [&_svg]:h-full [&_svg]:w-full']) }}>
    {!! file_get_contents(resource_path("svg/tech/{$name}.svg")) !!}
</span>
