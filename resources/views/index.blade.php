@extends('welcome')

@section('title', 'Home')

@section('content')
    <section class="hero-gradient relative overflow-hidden">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(255,255,255,0.15),transparent_60%)]"></div>
        <div class="container-app relative flex min-h-[80vh] flex-col items-center justify-center py-20 text-center">
            <x-reveal>
                <h1 class="text-5xl md:text-6xl text-white">Mohamed Khalil Boutar</h1>
                <p class="mt-4 text-xl text-accent-50">Software Engineer &mdash; Laravel &amp; Angular Full-Stack
                    Developer</p>
                <p class="mt-4 max-w-2xl mx-auto text-accent-100/90">
                    I design and build web platforms, APIs and business systems, from ERP modules to microservice
                    architectures.
                </p>

                <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ route('projects') }}" class="btn-on-dark">View My Work</a>
                    <a href="{{ route('contact') }}" class="btn-on-dark-outline">Get In Touch</a>
                </div>

                <div class="mt-6 flex items-center justify-center gap-6 text-sm">
                    <a href="{{ asset('cv/cv_mohamed_khalil_boutar_en.pdf') }}" download target="_blank"
                        class="inline-flex items-center gap-1.5 text-accent-100 hover:text-white transition-colors">
                        <i class="bi bi-download"></i> CV (EN)
                    </a>
                    <a href="{{ asset('cv/cv_mohamed_khalil_boutar_fr.pdf') }}" download target="_blank"
                        class="inline-flex items-center gap-1.5 text-accent-100 hover:text-white transition-colors">
                        <i class="bi bi-download"></i> CV (FR)
                    </a>
                </div>
            </x-reveal>
        </div>
    </section>
@endsection
