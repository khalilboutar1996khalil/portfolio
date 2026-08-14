<footer class="relative overflow-hidden bg-accent-900 text-neutral-300 transition-colors duration-300 dark:bg-surface-950">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_15%_0%,rgba(156,170,118,0.18),transparent_55%)] dark:bg-[radial-gradient(circle_at_15%_0%,rgba(156,170,118,0.10),transparent_55%)]">
    </div>

    <div class="container-app relative py-16">
        <div class="grid gap-12 md:grid-cols-3">
            <x-reveal>
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-xl text-accent-300 dark:text-accent-400">
                    <i class="bi bi-code-slash"></i>
                </div>
                <p class="mt-4 max-w-xs text-sm text-neutral-400">
                    Software Engineer building reliable web platforms, APIs and business systems with Laravel &amp;
                    Angular.
                </p>
                <div class="mt-4 flex gap-4 text-neutral-500">
                    <a href="https://github.com/khalilboutar1996khalil" target="_blank" rel="noopener noreferrer"
                        class="hover:text-accent-300 dark:hover:text-accent-400 transition-colors">
                        <i class="bi bi-github text-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/mohamed-khalil-boutar-6b8654157/" target="_blank"
                        rel="noopener noreferrer" class="hover:text-accent-300 dark:hover:text-accent-400 transition-colors">
                        <i class="bi bi-linkedin text-lg"></i>
                    </a>
                </div>
            </x-reveal>

            <x-reveal :delay="100">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-xl text-accent-300 dark:text-accent-400">
                    <i class="bi bi-compass"></i>
                </div>
                <h3 class="mt-4 text-sm font-semibold uppercase tracking-wide text-white">Navigation</h3>
                <ul class="mt-4 space-y-2 text-sm">
                    @foreach ([['url' => url('/'), 'label' => 'About'], ['url' => url('projects'), 'label' => 'Projects'], ['url' => url('resume'), 'label' => 'Resume'], ['url' => url('service'), 'label' => 'Services'], ['url' => url('contact'), 'label' => 'Contact']] as $link)
                        <li>
                            <a href="{{ $link['url'] }}"
                                class="group inline-flex items-center gap-1.5 text-neutral-400 hover:text-accent-300 dark:hover:text-accent-400 transition-colors">
                                <span>{{ $link['label'] }}</span>
                                <i
                                    class="bi bi-arrow-right text-xs opacity-0 -translate-x-1 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-0"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </x-reveal>

            <x-reveal :delay="200">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-xl text-accent-300 dark:text-accent-400">
                    <i class="bi bi-envelope-open"></i>
                </div>
                <h3 class="mt-4 text-sm font-semibold uppercase tracking-wide text-white">Get in touch</h3>
                <ul class="mt-4 space-y-3 text-sm text-neutral-400">
                    <li class="flex items-center gap-3">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white/10 text-accent-300 dark:text-accent-400">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <a href="mailto:khalilboutar@gmail.com" class="hover:text-accent-300 dark:hover:text-accent-400 transition-colors">khalilboutar@gmail.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white/10 text-accent-300 dark:text-accent-400">
                            <i class="bi bi-telephone"></i>
                        </span>
                        <a href="tel:+21653117158" class="hover:text-accent-300 dark:hover:text-accent-400 transition-colors">+216 53117158</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white/10 text-accent-300 dark:text-accent-400">
                            <i class="bi bi-geo-alt"></i>
                        </span>
                        Ariana, Tunisia
                    </li>
                </ul>
            </x-reveal>
        </div>

      
    </div>
</footer>
