@extends('welcome')

@section('title', __('Resume'))
@section('description', __('Resume of Mohamed Khalil Boutar — education, certifications and professional experience as a Laravel & Angular full-stack developer.'))

@php
    $education = [
        ['icon' => 'bi-mortarboard', 'title' => __('Engineering Cycle in Computer Science'), 'period' => '2019 - 2022', 'org' => __('Private Higher School of Engineering and Technology &ndash; ESPRIT, Ariana')],
        ['icon' => 'bi-mortarboard', 'title' => __('Bachelor in Management Information Systems'), 'period' => '2016 - 2019', 'org' => __('Higher School of Digital Economics (ESEN), Manouba')],
    ];

    $certifications = [
        ['icon' => 'bi-code-slash', 'title' => __('Front End Developer &ndash; React JS Certified'), 'period' => 'GOMYCODE &ndash; 2024', 'items' => []],
        ['icon' => 'bi-terminal', 'title' => __('RHCSA &ndash; Red Hat Certified System Administrator'), 'period' => 'TEKUP &ndash; 2025', 'items' => [
            __('Acquired advanced Linux administration skills: user management, permissions, services and security.'),
            __('Mastered Linux commands, file system management, package management and network configuration.'),
            __('Prepared for and passed the official Red Hat certification exam.'),
        ]],
        ['icon' => 'bi-clipboard-check', 'title' => __('QA Testing'), 'period' => 'Gust Training &ndash; 2025', 'items' => [
            __('Writing and executing manual test cases.'),
            __('Detecting and documenting bugs with JIRA.'),
            __('Using test management tools (e.g. TestRail).'),
            __('Introduction to automated testing with Selenium WebDriver.'),
        ]],
    ];

    $experience = [
        ['icon' => 'bi-rocket-takeoff', 'title' => __('Software Engineer'), 'period' => __('May 2024 &ndash; Present'), 'org' => 'IB Space, Ariana, Tunisia', 'items' => [
            __('Designed and developed an API Gateway for user account management.'),
            __('Used RabbitMQ to handle asynchronous messages between services.'),
            __('Managed user account addresses including creation, update, and deletion.'),
            __('Handled file uploads with various file types.'),
            __('Calculated sums and processed uploaded file formats.'),
            __('Calculated and managed company certificates.'),
        ]],
        ['icon' => 'bi-briefcase', 'title' => __('FullStack Developer (Laravel / Angular)'), 'period' => __('September 2022 &ndash; May 2024'), 'org' => 'SOFTWIND, Ariana, Tunisia', 'items' => [
            __('Project: FM-Inspection &ndash; Developed web and mobile apps to monitor objectives, KPIs, and field inspections; implemented scheduling, user management, and automatic report generation.'),
            __('Project: Dashboard EHC &ndash; Managed project classifications, stages, bid templates, Excel import/export, and created interactive dashboards.'),
            __('Project: Tunisian Football Federation (FTF) &ndash; Developed systems for referees, fields, leagues, match management, payments, and Google Maps integration for distance calculations.'),
        ]],
        ['icon' => 'bi-briefcase', 'title' => __('FullStack Developer (Laravel / Angular)'), 'period' => __('February 2022 &ndash; August 2022'), 'org' => 'WELYNE, Center Urbain Nord, Tunisia', 'items' => [
            __('Designed and developed a modular ERP for multi-company management (final year project).'),
            __('Developed core modules: user management, categories, products, invoices, chat and chatbot.'),
            __('Implemented clear and well-structured static modules for better organization and maintenance.'),
        ]],
    ];
@endphp

@section('content')
    <section class="py-20">
        <div class="container-app">
            <x-section-heading eyebrow="{{ __("Where I've been") }}" title="{{ __('Resume') }}"
                subtitle="{{ __("Here's a summary of my professional experience and education") }}" />

            <x-reveal class="flex flex-wrap items-center justify-center gap-4 mb-16">
                <a href="{{ asset('cv/cv_mohamed_khalil_boutar_en.pdf') }}" download target="_blank" class="btn-primary">
                    <i class="bi bi-download mr-2"></i> {{ __('Download CV (EN)') }}
                </a>
                <a href="{{ asset('cv/cv_mohamed_khalil_boutar_fr.pdf') }}" download target="_blank" class="btn-secondary">
                    <i class="bi bi-download mr-2"></i> {{ __('Download CV (FR)') }}
                </a>
            </x-reveal>

            <div class="grid md:grid-cols-2 gap-12">

                <div>
                    <h3 class="text-xl mb-6 flex items-center gap-2">
                        <i class="bi bi-mortarboard text-accent-600 dark:text-accent-400"></i> {{ __('Education') }}
                    </h3>
                    <div class="relative">
                        <div class="absolute left-[18px] top-2 bottom-2 w-px bg-neutral-200 dark:bg-surface-700"></div>
                        <div class="space-y-8">
                            @foreach ($education as $i => $entry)
                                <x-reveal :delay="$i * 80" class="relative pl-14">
                                    <div class="absolute left-0 top-0 z-10 flex h-9 w-9 items-center justify-center rounded-full bg-accent-50 text-accent-600 ring-4 ring-white dark:bg-accent-900/30 dark:text-accent-400 dark:ring-surface-950">
                                        <i class="bi {{ $entry['icon'] }}"></i>
                                    </div>
                                    <h4 class="font-semibold text-neutral-900 dark:text-white">{{ $entry['title'] }}</h4>
                                    <p class="text-sm text-neutral-400 dark:text-neutral-500">{{ $entry['period'] }}</p>
                                    <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400 italic">{!! $entry['org'] !!}</p>
                                </x-reveal>
                            @endforeach
                        </div>
                    </div>

                    <h3 class="text-xl mb-6 mt-12 flex items-center gap-2">
                        <i class="bi bi-patch-check text-accent-600 dark:text-accent-400"></i> {{ __('Certifications') }}
                    </h3>
                    <div class="relative">
                        <div class="absolute left-[18px] top-2 bottom-2 w-px bg-neutral-200 dark:bg-surface-700"></div>
                        <div class="space-y-8">
                            @foreach ($certifications as $i => $entry)
                                <x-reveal :delay="$i * 80" class="relative pl-14">
                                    <div class="absolute left-0 top-0 z-10 flex h-9 w-9 items-center justify-center rounded-full bg-accent-50 text-accent-600 ring-4 ring-white dark:bg-accent-900/30 dark:text-accent-400 dark:ring-surface-950">
                                        <i class="bi {{ $entry['icon'] }}"></i>
                                    </div>
                                    <h4 class="font-semibold text-neutral-900 dark:text-white">{!! $entry['title'] !!}</h4>
                                    <p class="text-sm text-neutral-400 dark:text-neutral-500">{!! $entry['period'] !!}</p>
                                    @if (count($entry['items']))
                                        <ul class="mt-2 list-disc list-outside ml-4 text-sm text-neutral-500 dark:text-neutral-400 space-y-1">
                                            @foreach ($entry['items'] as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </x-reveal>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl mb-6 flex items-center gap-2">
                        <i class="bi bi-briefcase text-accent-600 dark:text-accent-400"></i> {{ __('Professional Experience') }}
                    </h3>
                    <div class="relative">
                        <div class="absolute left-[18px] top-2 bottom-2 w-px bg-neutral-200 dark:bg-surface-700"></div>
                        <div class="space-y-8">
                            @foreach ($experience as $i => $entry)
                                <x-reveal :delay="$i * 80" class="relative pl-14">
                                    <div class="absolute left-0 top-0 z-10 flex h-9 w-9 items-center justify-center rounded-full bg-accent-50 text-accent-600 ring-4 ring-white dark:bg-accent-900/30 dark:text-accent-400 dark:ring-surface-950">
                                        <i class="bi {{ $entry['icon'] }}"></i>
                                    </div>
                                    <h4 class="font-semibold text-neutral-900 dark:text-white">{{ $entry['title'] }}</h4>
                                    <p class="text-sm text-neutral-400 dark:text-neutral-500">{!! $entry['period'] !!}</p>
                                    <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400 italic">{{ $entry['org'] }}</p>
                                    <ul class="mt-2 list-disc list-outside ml-4 text-sm text-neutral-500 dark:text-neutral-400 space-y-1">
                                        @foreach ($entry['items'] as $item)
                                            <li>{!! $item !!}</li>
                                        @endforeach
                                    </ul>
                                </x-reveal>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
