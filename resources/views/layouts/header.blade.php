@php
    $otherLocale = app()->getLocale() === 'fr' ? 'en' : 'fr';
    $currentRoute = request()->route();
    $switchUrl = $currentRoute
        ? route($currentRoute->getName(), array_merge($currentRoute->parameters(), ['locale' => $otherLocale]))
        : url('/' . $otherLocale);
@endphp

<header x-data="{ open: false, dark: document.documentElement.classList.contains('dark') }"
    x-init="$watch('dark', value => { document.documentElement.classList.toggle('dark', value); localStorage.setItem('theme', value ? 'dark' : 'light') })"
    class="sticky top-0 z-50 border-b border-neutral-200 bg-white/90 backdrop-blur dark:border-surface-800 dark:bg-surface-950/90">
    <div class="container-app flex h-16 items-center justify-between">

        <a href="{{ route('home') }}" class="flex items-center gap-2">

        </a>

        <nav class="hidden md:flex items-center gap-8">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">{{ __('About') }}</x-nav-link>
            <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">{{ __('Projects') }}</x-nav-link>
            <x-nav-link :href="route('resume')" :active="request()->routeIs('resume')">{{ __('Resume') }}</x-nav-link>
            <x-nav-link :href="route('service')" :active="request()->routeIs('service')">{{ __('Services') }}</x-nav-link>
            <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">{{ __('Contact') }}</x-nav-link>
        </nav>

        <div class="hidden md:flex items-center gap-2">
            <div class="flex items-center gap-4 pr-2 text-neutral-400 dark:text-neutral-500">
                <a href="https://github.com/khalilboutar1996khalil" target="_blank" rel="noopener noreferrer"
                    class="hover:text-neutral-700 dark:hover:text-neutral-200 transition-colors">
                    <i class="bi bi-github text-lg"></i>
                </a>
                <a href="https://www.linkedin.com/in/mohamed-khalil-boutar-6b8654157/" target="_blank"
                    rel="noopener noreferrer" class="hover:text-neutral-700 dark:hover:text-neutral-200 transition-colors">
                    <i class="bi bi-linkedin text-lg"></i>
                </a>
            </div>
            <a href="{{ $switchUrl }}" class="theme-toggle text-xs font-semibold" aria-label="{{ __('Switch language') }}">
                {{ strtoupper($otherLocale) }}
            </a>
            <x-theme-toggle />
        </div>

        <div class="flex items-center gap-1 md:hidden">
            <a href="{{ $switchUrl }}" class="theme-toggle text-xs font-semibold" aria-label="{{ __('Switch language') }}">
                {{ strtoupper($otherLocale) }}
            </a>
            <x-theme-toggle />
            <button @click="open = !open" class="theme-toggle" aria-label="{{ __('Toggle menu') }}" :aria-expanded="open">
                <i class="bi bi-list text-2xl" x-show="!open"></i>
                <i class="bi bi-x text-2xl" x-show="open" x-cloak></i>
            </button>
        </div>
    </div>

    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        @click.outside="open = false"
        class="md:hidden absolute inset-x-0 top-16 z-50 bg-white border-b border-neutral-200 shadow-lg dark:bg-surface-950 dark:border-surface-800">
        <nav class="container-app flex flex-col gap-1 py-4">
            <a href="{{ route('home') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-accent-600 bg-accent-50 dark:text-accent-400 dark:bg-accent-900/40' : 'text-neutral-700 hover:bg-neutral-50 dark:text-neutral-300 dark:hover:bg-surface-800' }}">{{ __('About') }}</a>
            <a href="{{ route('projects') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ request()->routeIs('projects') ? 'text-accent-600 bg-accent-50 dark:text-accent-400 dark:bg-accent-900/40' : 'text-neutral-700 hover:bg-neutral-50 dark:text-neutral-300 dark:hover:bg-surface-800' }}">{{ __('Projects') }}</a>
            <a href="{{ route('resume') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ request()->routeIs('resume') ? 'text-accent-600 bg-accent-50 dark:text-accent-400 dark:bg-accent-900/40' : 'text-neutral-700 hover:bg-neutral-50 dark:text-neutral-300 dark:hover:bg-surface-800' }}">{{ __('Resume') }}</a>
            <a href="{{ route('service') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ request()->routeIs('service') ? 'text-accent-600 bg-accent-50 dark:text-accent-400 dark:bg-accent-900/40' : 'text-neutral-700 hover:bg-neutral-50 dark:text-neutral-300 dark:hover:bg-surface-800' }}">{{ __('Services') }}</a>
            <a href="{{ route('contact') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ request()->routeIs('contact') ? 'text-accent-600 bg-accent-50 dark:text-accent-400 dark:bg-accent-900/40' : 'text-neutral-700 hover:bg-neutral-50 dark:text-neutral-300 dark:hover:bg-surface-800' }}">{{ __('Contact') }}</a>
        </nav>
        <div class="container-app flex gap-4 border-t border-neutral-200 py-4 text-neutral-400 dark:border-surface-800 dark:text-neutral-500">
            <a href="https://github.com/khalilboutar1996khalil" target="_blank" rel="noopener noreferrer"
                class="hover:text-neutral-700 dark:hover:text-neutral-200 transition-colors">
                <i class="bi bi-github text-lg"></i>
            </a>
            <a href="https://www.linkedin.com/in/mohamed-khalil-boutar-6b8654157/" target="_blank"
                rel="noopener noreferrer" class="hover:text-neutral-700 dark:hover:text-neutral-200 transition-colors">
                <i class="bi bi-linkedin text-lg"></i>
            </a>
        </div>
    </div>
</header>
