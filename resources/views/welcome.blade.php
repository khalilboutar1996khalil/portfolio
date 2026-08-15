<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        (function() {
            var theme = localStorage.getItem('theme');
            if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    <title>@yield('title', __('Portfolio')) &mdash; Mohamed Khalil Boutar</title>
    <meta name="description"
        content="@yield('description', __('Software Engineer specializing in Laravel & Angular full-stack development.'))">
    <link rel="canonical" href="{{ url()->current() }}">

    @if (request()->route())
        <link rel="alternate" hreflang="en"
            href="{{ route(request()->route()->getName(), array_merge(request()->route()->parameters(), ['locale' => 'en'])) }}">
        <link rel="alternate" hreflang="fr"
            href="{{ route(request()->route()->getName(), array_merge(request()->route()->parameters(), ['locale' => 'fr'])) }}">
    @else
        <meta name="robots" content="noindex">
    @endif

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mohamed Khalil Boutar">
    <meta property="og:title" content="@yield('title', __('Portfolio')) &mdash; Mohamed Khalil Boutar">
    <meta property="og:description"
        content="@yield('description', __('Software Engineer specializing in Laravel & Angular full-stack development.'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('img/profile-img.jpg') }}">
    <meta property="og:locale" content="{{ app()->getLocale() === 'fr' ? 'fr_FR' : 'en_US' }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', __('Portfolio')) &mdash; Mohamed Khalil Boutar">
    <meta name="twitter:description"
        content="@yield('description', __('Software Engineer specializing in Laravel & Angular full-stack development.'))">
    <meta name="twitter:image" content="{{ asset('img/profile-img.jpg') }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-neutral-800 dark:bg-surface-950 dark:text-neutral-200 transition-colors duration-300">

    <div id="page-loader"
        class="fixed inset-0 z-[100] flex items-center justify-center bg-white dark:bg-surface-950 transition-opacity duration-500">
        <div class="flex flex-col items-center gap-4">
            <div class="relative flex h-16 w-16 items-center justify-center">
                <span
                    class="absolute inset-0 rounded-full border-4 border-accent-100 dark:border-surface-800"></span>
                <span
                    class="absolute inset-0 animate-spin rounded-full border-4 border-transparent border-t-accent-600 dark:border-t-accent-400"></span>
                <i class="bi bi-code-slash text-xl text-accent-600 dark:text-accent-400"></i>
            </div>
            <span class="text-xs font-medium uppercase tracking-wide text-neutral-400 dark:text-neutral-500">{{ __('Loading') }}&hellip;</span>
        </div>
    </div>
    <script>
        (function() {
            var loader = document.getElementById('page-loader');
            if (!loader) return;
            document.documentElement.classList.add('overflow-hidden');

            function hideLoader() {
                loader.classList.add('opacity-0', 'pointer-events-none');
                document.documentElement.classList.remove('overflow-hidden');
                setTimeout(function() {
                    loader.remove();
                }, 500);
            }

            if (document.readyState === 'complete') {
                hideLoader();
            } else {
                window.addEventListener('load', hideLoader);
            }
        })();
    </script>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    @stack('scripts')
</body>

</html>
