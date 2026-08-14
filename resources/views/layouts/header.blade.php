<header x-data="{ open: false }" class="sticky top-0 z-50 border-b border-neutral-200 bg-white/90 backdrop-blur">
    <div class="container-app flex h-16 items-center justify-between">

        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <img src="{{ asset('img/logo.png') }}" alt="Mohamed Khalil Boutar" class="h-8 w-8">
            <span class="font-semibold text-neutral-900">Khalil Boutar</span>
        </a>

        <nav class="hidden md:flex items-center gap-8">
            <x-nav-link :href="url('/')" :active="Request::is('/')">Home</x-nav-link>
            <x-nav-link :href="url('about')" :active="Request::is('about')">About</x-nav-link>
            <x-nav-link :href="url('projects')" :active="Request::is('projects')">Projects</x-nav-link>
            <x-nav-link :href="url('resume')" :active="Request::is('resume')">Resume</x-nav-link>
            <x-nav-link :href="url('service')" :active="Request::is('service')">Services</x-nav-link>
            <x-nav-link :href="url('contact')" :active="Request::is('contact')">Contact</x-nav-link>
        </nav>

        <div class="hidden md:flex items-center gap-4 text-neutral-400">
            <a href="https://github.com/khalilboutar1996khalil" target="_blank" rel="noopener noreferrer"
                class="hover:text-neutral-700 transition-colors">
                <i class="bi bi-github text-lg"></i>
            </a>
            <a href="https://www.linkedin.com/in/mohamed-khalil-boutar-6b8654157/" target="_blank"
                rel="noopener noreferrer" class="hover:text-neutral-700 transition-colors">
                <i class="bi bi-linkedin text-lg"></i>
            </a>
        </div>

        <button @click="open = !open" class="md:hidden text-neutral-700" aria-label="Toggle menu"
            :aria-expanded="open">
            <i class="bi bi-list text-2xl" x-show="!open"></i>
            <i class="bi bi-x text-2xl" x-show="open" x-cloak></i>
        </button>
    </div>

    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        @click.outside="open = false" class="md:hidden absolute inset-x-0 top-16 z-50 bg-white border-b border-neutral-200 shadow-lg">
        <nav class="container-app flex flex-col gap-1 py-4">
            <a href="{{ url('/') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ Request::is('/') ? 'text-accent-600 bg-accent-50' : 'text-neutral-700 hover:bg-neutral-50' }}">Home</a>
            <a href="{{ url('about') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ Request::is('about') ? 'text-accent-600 bg-accent-50' : 'text-neutral-700 hover:bg-neutral-50' }}">About</a>
            <a href="{{ url('projects') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ Request::is('projects') ? 'text-accent-600 bg-accent-50' : 'text-neutral-700 hover:bg-neutral-50' }}">Projects</a>
            <a href="{{ url('resume') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ Request::is('resume') ? 'text-accent-600 bg-accent-50' : 'text-neutral-700 hover:bg-neutral-50' }}">Resume</a>
            <a href="{{ url('service') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ Request::is('service') ? 'text-accent-600 bg-accent-50' : 'text-neutral-700 hover:bg-neutral-50' }}">Services</a>
            <a href="{{ url('contact') }}" @click="open = false"
                class="rounded-lg px-3 py-3 text-sm font-medium {{ Request::is('contact') ? 'text-accent-600 bg-accent-50' : 'text-neutral-700 hover:bg-neutral-50' }}">Contact</a>
        </nav>
        <div class="container-app flex gap-4 border-t border-neutral-200 py-4 text-neutral-400">
            <a href="https://github.com/khalilboutar1996khalil" target="_blank" rel="noopener noreferrer"
                class="hover:text-neutral-700 transition-colors">
                <i class="bi bi-github text-lg"></i>
            </a>
            <a href="https://www.linkedin.com/in/mohamed-khalil-boutar-6b8654157/" target="_blank"
                rel="noopener noreferrer" class="hover:text-neutral-700 transition-colors">
                <i class="bi bi-linkedin text-lg"></i>
            </a>
        </div>
    </div>
</header>
