@extends('welcome')

@section('title', __('About'))
@section('description', __('Mohamed Khalil Boutar — Software Engineer with 3 years of experience building web platforms with Laravel and Angular. Skills, languages and career highlights.'))

@php
    $skills = [
        ['HTML', 100], ['CSS', 100], ['JavaScript', 75], ['.NET', 50], ['SQL', 80], ['Linux', 80],
        ['Laravel', 90], ['Angular JS', 90], ['SpringBoot', 70], ['React JS', 70], ['Flutter', 40], ['QA Testing', 60],
    ];
    $languages = [
        [__('Arabic'), __('Native')], [__('French'), __('Fluent')], [__('English'), __('Professional')], [__('Italian'), __('Intermediate')],
    ];
    $stats = [
        ['icon' => 'bi-people', 'label' => __('Clients'), 'end' => 2],
        ['icon' => 'bi-kanban', 'label' => __('Projects'), 'end' => 10],
        ['icon' => 'bi-award', 'label' => __('Years of experience'), 'end' => 3],
    ];

    $personalInfo = [
        ['icon' => 'bi-telephone', 'label' => __('Phone'), 'value' => '+216 53117158'],
        ['icon' => 'bi-mortarboard', 'label' => __('Degree'), 'value' => __('Engineer')],
        ['icon' => 'bi-geo-alt', 'label' => __('City'), 'value' => __('Ariana, Tunisia')],
        ['icon' => 'bi-envelope', 'label' => __('Email'), 'value' => 'khalilboutar@gmail.com'],
    ];
@endphp

@section('content')
    <section class="py-20">
        <div class="container-app">
            <x-section-heading eyebrow="{{ __('Get to know me') }}" title="{{ __('About') }}" />

            <div class="grid gap-12 md:grid-cols-3 items-start">
                <x-reveal class="relative mx-auto max-w-xs md:mx-0">
                    <div
                        class="absolute -inset-4 rounded-3xl bg-gradient-to-br from-accent-400/30 to-accent-700/30 blur-2xl dark:from-accent-500/20 dark:to-accent-800/30">
                    </div>
                    <img src="{{ asset('img/profile-img.jpg') }}" alt="Mohamed Khalil Boutar"
                        class="relative w-full rounded-2xl shadow-xl ring-4 ring-white dark:ring-surface-900">
                </x-reveal>

                <div class="md:col-span-2">
                    <x-reveal :delay="80">
                        <p class="section-eyebrow mb-2">{{ __("Hello, I'm Mohamed Khalil Boutar") }}</p>
                        <h3 class="text-2xl md:text-3xl">{{ __('QA Tester &') }}
                            <span class="text-accent-600 dark:text-accent-400">{{ __('Web Developer') }}</span>.
                        </h3>
                        <p class="mt-3 max-w-xl text-neutral-500 dark:text-neutral-400">
                            {{ __('I am a Software Engineer with 3 years of experience in web development. I specialize in building modern applications using Laravel and Angular.') }}
                        </p>
                    </x-reveal>

                    <dl class="mt-8 grid grid-cols-1 gap-4 text-sm sm:grid-cols-2">
                        @foreach ($personalInfo as $i => $info)
                            <x-reveal :delay="160 + $i * 60" class="flex items-center gap-3">
                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-accent-50 text-accent-600 dark:bg-accent-900/30 dark:text-accent-400">
                                    <i class="bi {{ $info['icon'] }}"></i>
                                </span>
                                <div>
                                    <dt class="text-xs uppercase tracking-wide text-neutral-400 dark:text-neutral-500">
                                        {{ $info['label'] }}</dt>
                                    <dd class="font-medium text-neutral-900 dark:text-neutral-100">{{ $info['value'] }}</dd>
                                </div>
                            </x-reveal>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 section-tint">
        <div class="container-app">
            <x-section-heading title="{{ __('Skills') }}" />

            <div class="grid gap-x-12 gap-y-5 md:grid-cols-2 max-w-4xl mx-auto">
                @foreach ($skills as [$name, $pct])
                    <x-reveal :delay="$loop->index * 40">
                        <div x-data="{ pct: 0 }" x-intersect.once="pct = {{ $pct }}">
                            <div class="flex justify-between text-sm mb-1.5">
                                <span class="font-medium text-neutral-700 dark:text-neutral-300">{{ $name }}</span>
                                <span class="text-neutral-400 dark:text-neutral-500" x-text="pct + '%'"></span>
                            </div>
                            <div class="h-1.5 rounded-full bg-neutral-200 dark:bg-surface-800">
                                <div class="h-1.5 rounded-full bg-accent-600 dark:bg-accent-500 transition-all duration-1000"
                                    :style="`width: ${pct}%`"></div>
                            </div>
                        </div>
                    </x-reveal>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container-app">
            <x-section-heading title="{{ __('Languages') }}" subtitle="{{ __('Languages I can speak and work with') }}" />

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ($languages as [$lang, $level])
                    <x-reveal :delay="$loop->index * 80" class="card text-center">
                        <i class="bi bi-translate text-2xl text-accent-600 dark:text-accent-400"></i>
                        <p class="mt-3 font-medium text-neutral-900 dark:text-white">{{ $lang }}</p>
                        <p class="text-sm text-neutral-500 dark:text-neutral-400">{{ $level }}</p>
                    </x-reveal>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 section-tint">
        <div class="container-app">
            <x-section-heading eyebrow="{{ __('By the numbers') }}" title="{{ __('Facts') }}" subtitle="{{ __('Highlights of my profile') }}" />

            <div class="grid grid-cols-1 gap-6 max-w-3xl mx-auto sm:grid-cols-3">
                @foreach ($stats as $i => $stat)
                    <x-reveal :delay="$i * 120" class="card text-center">
                        <div
                            class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-accent-50 text-2xl text-accent-600 dark:bg-accent-900/30 dark:text-accent-400">
                            <i class="bi {{ $stat['icon'] }}"></i>
                        </div>
                        <div x-data="{ n: 0 }"
                            x-intersect.once="let i = setInterval(() => { n++; if (n >= {{ $stat['end'] }}) clearInterval(i) }, {{ $stat['end'] > 0 ? intdiv(1000, $stat['end']) : 1000 }})">
                            <span class="mt-4 block text-4xl font-bold text-accent-600 dark:text-accent-400"
                                x-text="n"></span>
                            <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">{{ $stat['label'] }}</p>
                        </div>
                    </x-reveal>
                @endforeach
            </div>
        </div>
    </section>
@endsection
