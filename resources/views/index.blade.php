@extends('welcome')

@section('title', 'Home')

@section('content')
    <section class="bg-gradient-to-b from-accent-50/40 to-white">
        <div class="container-app flex min-h-[80vh] flex-col items-center justify-center py-20 text-center">
            <x-reveal>
                <h1 class="text-5xl md:text-6xl">Mohamed Khalil Boutar</h1>
                <p class="mt-4 text-xl text-neutral-600">Software Engineer &mdash; Laravel &amp; Angular Full-Stack
                    Developer</p>
                <p class="mt-4 max-w-2xl mx-auto text-neutral-500">
                    I design and build web platforms, APIs and business systems, from ERP modules to microservice
                    architectures.
                </p>

                <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                    <x-button :href="route('projects')" variant="primary">View My Work</x-button>
                    <x-button :href="route('contact')" variant="secondary">Get In Touch</x-button>
                </div>

                <div class="mt-6 flex items-center justify-center gap-6 text-sm">
                    <a href="{{ asset('cv/cv_mohamed_khalil_boutar_en.pdf') }}" download target="_blank"
                        class="inline-flex items-center gap-1.5 text-neutral-500 hover:text-accent-600 transition-colors">
                        <i class="bi bi-download"></i> CV (EN)
                    </a>
                    <a href="{{ asset('cv/cv_mohamed_khalil_boutar_fr.pdf') }}" download target="_blank"
                        class="inline-flex items-center gap-1.5 text-neutral-500 hover:text-accent-600 transition-colors">
                        <i class="bi bi-download"></i> CV (FR)
                    </a>
                </div>
            </x-reveal>
        </div>
    </section>
@endsection
