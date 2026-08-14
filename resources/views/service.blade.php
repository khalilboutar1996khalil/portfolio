@extends('welcome')

@section('title', 'Services')

@php
    $services = [
        ['icon' => 'bi-laptop', 'title' => 'Web Development', 'desc' => 'Design and develop modern web applications using Laravel and Angular for scalable and high-performing solutions.'],
        ['icon' => 'bi-phone', 'title' => 'Mobile App Development', 'desc' => 'Build cross-platform mobile applications using Flutter integrated with REST APIs and backend services.'],
        ['icon' => 'bi-server', 'title' => 'API & Microservices', 'desc' => 'Design and implement APIs, microservices, and message queues (RabbitMQ) to ensure robust and scalable architectures.'],
        ['icon' => 'bi-gear', 'title' => 'ERP & Business Solutions', 'desc' => 'Develop ERP systems and business management applications for multi-company operations with modular design.'],
        ['icon' => 'bi-bar-chart', 'title' => 'Data & Reporting', 'desc' => 'Create interactive dashboards, reports, and KPI monitoring tools for business insights and decision making.'],
        ['icon' => 'bi-shield-lock', 'title' => 'Security & File Management', 'desc' => 'Implement secure file handling, user authentication, and encrypted storage for sensitive data.'],
    ];
@endphp

@section('content')
    <section class="py-20 section-tint">
        <div class="container-app">
            <x-section-heading title="Services" subtitle="Here are the main services I provide as a Software Engineer" />

            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($services as $s)
                    <x-reveal :delay="$loop->index * 80" class="card">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-accent-50 text-accent-600 text-2xl dark:bg-accent-900/30 dark:text-accent-400">
                            <i class="bi {{ $s['icon'] }}"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-neutral-900 dark:text-white">{{ $s['title'] }}</h3>
                        <p class="mt-2 text-sm text-neutral-500 dark:text-neutral-400">{{ $s['desc'] }}</p>
                    </x-reveal>
                @endforeach
            </div>
        </div>
    </section>
@endsection
