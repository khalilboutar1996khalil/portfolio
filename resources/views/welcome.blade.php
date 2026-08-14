<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

    <title>@yield('title', 'Portfolio') &mdash; Mohamed Khalil Boutar</title>
    <meta name="description"
        content="@yield('description', 'Software Engineer specializing in Laravel & Angular full-stack development.')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mohamed Khalil Boutar">
    <meta property="og:title" content="@yield('title', 'Portfolio') &mdash; Mohamed Khalil Boutar">
    <meta property="og:description"
        content="@yield('description', 'Software Engineer specializing in Laravel & Angular full-stack development.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('img/profile-img.jpg') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Portfolio') &mdash; Mohamed Khalil Boutar">
    <meta name="twitter:description"
        content="@yield('description', 'Software Engineer specializing in Laravel & Angular full-stack development.')">
    <meta name="twitter:image" content="{{ asset('img/profile-img.jpg') }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-neutral-800 dark:bg-surface-950 dark:text-neutral-200 transition-colors duration-300">

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    @stack('scripts')
</body>

</html>
