<button type="button" @click="dark = !dark" {{ $attributes->merge(['class' => 'theme-toggle']) }}
    aria-label="Toggle dark mode">
    <i class="bi bi-moon-stars" x-show="!dark"></i>
    <i class="bi bi-sun" x-show="dark" x-cloak></i>
</button>
