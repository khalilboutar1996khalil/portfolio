<footer class="border-t border-neutral-200 dark:border-surface-800">
    <div class="container-app py-16">
        <div class="grid gap-10 md:grid-cols-3">
            <div>
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <img src="{{ asset('img/logo.png') }}" alt="Mohamed Khalil Boutar" class="h-8 w-8">
                    <span class="font-semibold text-neutral-900 dark:text-white">Khalil Boutar</span>
                </a>
                <p class="mt-3 max-w-xs text-sm text-neutral-500 dark:text-neutral-400">
                    Software Engineer building reliable web platforms, APIs and business systems with Laravel &amp;
                    Angular.
                </p>
                <div class="mt-4 flex gap-4 text-neutral-400 dark:text-neutral-500">
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

            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wide text-neutral-900 dark:text-white">Navigation</h3>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="{{ url('/') }}" class="text-neutral-500 hover:text-accent-600 dark:text-neutral-400 dark:hover:text-accent-400 transition-colors">Home</a></li>
                    <li><a href="{{ url('about') }}" class="text-neutral-500 hover:text-accent-600 dark:text-neutral-400 dark:hover:text-accent-400 transition-colors">About</a></li>
                    <li><a href="{{ url('projects') }}" class="text-neutral-500 hover:text-accent-600 dark:text-neutral-400 dark:hover:text-accent-400 transition-colors">Projects</a></li>
                    <li><a href="{{ url('resume') }}" class="text-neutral-500 hover:text-accent-600 dark:text-neutral-400 dark:hover:text-accent-400 transition-colors">Resume</a></li>
                    <li><a href="{{ url('service') }}" class="text-neutral-500 hover:text-accent-600 dark:text-neutral-400 dark:hover:text-accent-400 transition-colors">Services</a></li>
                    <li><a href="{{ url('contact') }}" class="text-neutral-500 hover:text-accent-600 dark:text-neutral-400 dark:hover:text-accent-400 transition-colors">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wide text-neutral-900 dark:text-white">Get in touch</h3>
                <ul class="mt-4 space-y-3 text-sm text-neutral-500 dark:text-neutral-400">
                    <li class="flex items-center gap-2">
                        <i class="bi bi-envelope text-accent-600 dark:text-accent-400"></i>
                        <a href="mailto:khalilboutar@gmail.com" class="hover:text-accent-600 dark:hover:text-accent-400 transition-colors">khalilboutar@gmail.com</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="bi bi-telephone text-accent-600 dark:text-accent-400"></i>
                        <a href="tel:+21653117158" class="hover:text-accent-600 dark:hover:text-accent-400 transition-colors">+216 53117158</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="bi bi-geo-alt text-accent-600 dark:text-accent-400"></i>
                        Ariana, Tunisia
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center gap-3 border-t border-neutral-200 pt-6 text-xs text-neutral-400 dark:border-surface-800 dark:text-neutral-500 md:flex-row md:justify-between">
            <p>&copy; {{ date('Y') }} Mohamed Khalil Boutar. All rights reserved.</p>
            <p>Built with Laravel &amp; Tailwind CSS.</p>
        </div>
    </div>
</footer>
