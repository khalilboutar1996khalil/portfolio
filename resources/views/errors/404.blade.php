@extends('welcome')

@section('title', 'Page Not Found')
@section('description', 'The page you are looking for could not be found.')

@section('content')
    <section class="section-tint">
        <div class="container-app flex min-h-[70vh] flex-col items-center justify-center py-20 text-center">
            <x-reveal>
                <p class="section-eyebrow mb-2">Error 404</p>
                <h1 class="text-7xl font-bold text-accent-600 md:text-8xl dark:text-accent-400">404</h1>
                <h2 class="mt-4 text-2xl md:text-3xl">Page not found</h2>
                <p class="mt-3 max-w-md mx-auto text-neutral-500 dark:text-neutral-400">
                    The page you're looking for doesn't exist or may have been moved.
                </p>
                <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ url('/') }}" class="btn-primary">Back to Home</a>
                    <a href="{{ route('contact') }}" class="btn-secondary">Contact Me</a>
                </div>
            </x-reveal>
        </div>
    </section>
@endsection
