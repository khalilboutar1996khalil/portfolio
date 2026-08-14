@extends('welcome')

@section('title', 'About')

@php
    $skills = [
        ['HTML', 100], ['CSS', 100], ['JavaScript', 75], ['.NET', 50], ['SQL', 80], ['Linux', 80],
        ['Laravel', 90], ['Angular JS', 90], ['SpringBoot', 70], ['React JS', 70], ['Flutter', 40], ['QA Testing', 60],
    ];
    $languages = [
        ['Arabic', 'Native'], ['French', 'Fluent'], ['English', 'Professional'], ['Italian', 'Intermediate'],
    ];
    $stats = [
        ['Clients', 2], ['Projects', 10], ['Years of experience', 3],
    ];
@endphp

@section('content')
    <section class="py-20">
        <div class="container-app">
            <x-section-heading title="About" />

            <x-reveal class="grid gap-12 md:grid-cols-3 items-start">
                <img src="{{ asset('img/profile-img.jpg') }}" alt="Mohamed Khalil Boutar"
                    class="rounded-2xl w-full max-w-xs mx-auto md:mx-0">

                <div class="md:col-span-2">
                    <h3 class="text-2xl">QA Tester &amp; Web Developer.</h3>
                    <p class="mt-3 text-neutral-500 dark:text-neutral-400">
                        I am a Software Engineer with 3 years of experience in web development. I specialize in
                        building modern applications using Laravel and Angular.
                    </p>

                    <dl class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                        <div class="flex gap-2"><dt class="font-medium text-neutral-900 dark:text-neutral-100">Birthday:</dt><dd class="text-neutral-500 dark:text-neutral-400">30 September 1996</dd></div>
                        <div class="flex gap-2"><dt class="font-medium text-neutral-900 dark:text-neutral-100">Age:</dt><dd class="text-neutral-500 dark:text-neutral-400">29</dd></div>
                        <div class="flex gap-2"><dt class="font-medium text-neutral-900 dark:text-neutral-100">Phone:</dt><dd class="text-neutral-500 dark:text-neutral-400">+216 53117158</dd></div>
                        <div class="flex gap-2"><dt class="font-medium text-neutral-900 dark:text-neutral-100">Degree:</dt><dd class="text-neutral-500 dark:text-neutral-400">Engineer</dd></div>
                        <div class="flex gap-2"><dt class="font-medium text-neutral-900 dark:text-neutral-100">City:</dt><dd class="text-neutral-500 dark:text-neutral-400">Ariana, Tunisia</dd></div>
                        <div class="flex gap-2"><dt class="font-medium text-neutral-900 dark:text-neutral-100">Email:</dt><dd class="text-neutral-500 dark:text-neutral-400">khalilboutar@gmail.com</dd></div>
                    </dl>
                </div>
            </x-reveal>
        </div>
    </section>

    <section class="py-20 section-tint">
        <div class="container-app">
            <x-section-heading title="Skills" />

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
            <x-section-heading title="Languages" subtitle="Languages I can speak and work with" />

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
            <x-section-heading title="Facts" subtitle="Highlights of my profile" />

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto text-center">
                @foreach ($stats as [$label, $end])
                    <x-reveal :delay="$loop->index * 100">
                        <div x-data="{ n: 0 }" x-intersect.once="let i = setInterval(() => { n++; if (n >= {{ $end }}) clearInterval(i) }, {{ $end > 0 ? intdiv(1000, $end) : 1000 }})">
                            <span class="text-4xl font-semibold text-neutral-900 dark:text-white" x-text="n"></span>
                            <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">{{ $label }}</p>
                        </div>
                    </x-reveal>
                @endforeach
            </div>
        </div>
    </section>
@endsection
