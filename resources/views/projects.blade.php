@extends('welcome')

@section('title', 'Projects')

@php
    $projects = [
        [
            'icon' => 'bi-clipboard-data',
            'meta' => 'SOFTWIND &middot; 2022 &ndash; 2024',
            'title' => 'FM-Inspection',
            'desc' => "Web and mobile platform to monitor objectives, KPIs and field inspections, with scheduling, user management and automatic report generation.",
            'tags' => ['Laravel', 'Angular', 'REST API'],
            'cats' => ['web', 'api'],
        ],
        [
            'icon' => 'bi-bar-chart-line',
            'meta' => 'SOFTWIND &middot; 2022 &ndash; 2024',
            'title' => 'Dashboard EHC',
            'desc' => "Business dashboard managing project classifications, stages and bid templates, with Excel import/export and interactive reporting for decision-making.",
            'tags' => ['Laravel', 'Angular', 'Excel Import/Export'],
            'cats' => ['web', 'erp'],
        ],
        [
            'icon' => 'bi-trophy',
            'meta' => 'SOFTWIND &middot; 2022 &ndash; 2024',
            'title' => 'Tunisian Football Federation (FTF)',
            'desc' => "Management system for referees, fields, leagues and match scheduling, including payment handling and Google Maps integration for travel distance calculations.",
            'tags' => ['Laravel', 'Angular', 'Google Maps API'],
            'cats' => ['web', 'api'],
        ],
        [
            'icon' => 'bi-diagram-3',
            'meta' => 'WELYNE &middot; 2022 &middot; Final Year Project',
            'title' => 'Modular ERP Platform',
            'desc' => "Multi-company ERP with modular architecture: user management, categories, products, invoicing, and an integrated chat/chatbot module.",
            'tags' => ['Laravel', 'Angular', 'Modular Architecture'],
            'cats' => ['web', 'erp'],
        ],
        [
            'icon' => 'bi-hdd-network',
            'meta' => 'IB Space &middot; 2024 &ndash; Present',
            'title' => 'API Gateway &amp; Account Management',
            'desc' => "API Gateway handling user account and address management, file uploads and company certificate processing, with asynchronous messaging via RabbitMQ.",
            'tags' => ['Laravel', 'RabbitMQ', 'API Gateway'],
            'cats' => ['api'],
        ],
    ];

    $filters = [
        ['key' => 'all', 'label' => 'All'],
        ['key' => 'web', 'label' => 'Web Apps'],
        ['key' => 'erp', 'label' => 'ERP &amp; Business'],
        ['key' => 'api', 'label' => 'API &amp; Backend'],
    ];
@endphp

@section('content')
    <section class="py-20 section-tint">
        <div class="container-app">
            <x-section-heading title="Projects"
                subtitle="A selection of platforms and systems I've designed and built throughout my career" />

            <div x-data="{ filter: 'all' }">
                <div class="flex flex-wrap justify-center gap-2 mb-10">
                    @foreach ($filters as $f)
                        <button @click="filter = '{{ $f['key'] }}'"
                            :class="filter === '{{ $f['key'] }}' ? 'bg-accent-600 text-white' : 'bg-neutral-100 text-neutral-600 hover:bg-neutral-200 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700'"
                            class="rounded-full px-4 py-2 text-sm font-medium transition-colors">
                            {!! $f['label'] !!}
                        </button>
                    @endforeach
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    @foreach ($projects as $p)
                        <div x-show="filter === 'all' || {{ \Illuminate\Support\Js::from($p['cats']) }}.includes(filter)"
                            x-transition.opacity
                            x-intersect.once="$el.classList.remove('opacity-0', 'translate-y-4'); $el.classList.add('opacity-100', 'translate-y-0')"
                            style="transition-delay: {{ $loop->index * 80 }}ms"
                            class="card opacity-0 translate-y-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-accent-50 text-accent-600 text-2xl dark:bg-accent-900/30 dark:text-accent-400">
                                <i class="bi {{ $p['icon'] }}"></i>
                            </div>
                            <p class="mt-4 text-xs font-medium uppercase tracking-wide text-neutral-400 dark:text-neutral-500">{!! $p['meta'] !!}</p>
                            <h3 class="mt-1 text-lg font-semibold text-neutral-900 dark:text-white">{!! $p['title'] !!}</h3>
                            <p class="mt-2 text-sm text-neutral-500 dark:text-neutral-400">{{ $p['desc'] }}</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                @foreach ($p['tags'] as $tag)
                                    <span class="rounded-full bg-neutral-100 px-2.5 py-1 text-xs text-neutral-600 dark:bg-neutral-700 dark:text-neutral-300">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
