@extends('welcome')

@section('title', 'Resume')

@section('content')
    <section class="py-20">
        <div class="container-app">
            <x-section-heading title="Resume"
                subtitle="Here's a summary of my professional experience and education" />

            <div class="grid md:grid-cols-2 gap-12">

                <div>
                    <h3 class="text-xl mb-6">Education</h3>
                    <div class="space-y-8">
                        <div class="relative border-l-2 border-neutral-200 pl-6 before:absolute before:-left-[5px] before:top-1.5 before:h-2.5 before:w-2.5 before:rounded-full before:bg-accent-600">
                            <h4 class="font-semibold text-neutral-900">Engineering Cycle in Computer Science</h4>
                            <p class="text-sm text-neutral-400">2019 - 2022</p>
                            <p class="mt-1 text-sm text-neutral-500 italic">Private Higher School of Engineering and
                                Technology &ndash; ESPRIT, Ariana</p>
                        </div>
                        <div class="relative border-l-2 border-neutral-200 pl-6 before:absolute before:-left-[5px] before:top-1.5 before:h-2.5 before:w-2.5 before:rounded-full before:bg-accent-600">
                            <h4 class="font-semibold text-neutral-900">Bachelor in Management Information Systems</h4>
                            <p class="text-sm text-neutral-400">2016 - 2019</p>
                            <p class="mt-1 text-sm text-neutral-500 italic">Higher School of Digital Economics (ESEN),
                                Manouba</p>
                        </div>
                    </div>

                    <h3 class="text-xl mb-6 mt-12">Certifications</h3>
                    <div class="space-y-8">
                        <div class="relative border-l-2 border-neutral-200 pl-6 before:absolute before:-left-[5px] before:top-1.5 before:h-2.5 before:w-2.5 before:rounded-full before:bg-accent-600">
                            <h4 class="font-semibold text-neutral-900">Front End Developer &ndash; React JS Certified</h4>
                            <p class="text-sm text-neutral-400">GOMYCODE &ndash; 2024</p>
                        </div>
                        <div class="relative border-l-2 border-neutral-200 pl-6 before:absolute before:-left-[5px] before:top-1.5 before:h-2.5 before:w-2.5 before:rounded-full before:bg-accent-600">
                            <h4 class="font-semibold text-neutral-900">RHCSA &ndash; Red Hat Certified System Administrator</h4>
                            <p class="text-sm text-neutral-400">TEKUP &ndash; 2025</p>
                            <ul class="mt-2 list-disc list-outside ml-4 text-sm text-neutral-500 space-y-1">
                                <li>Acquired advanced Linux administration skills: user management, permissions,
                                    services and security.</li>
                                <li>Mastered Linux commands, file system management, package management and network
                                    configuration.</li>
                                <li>Prepared for and passed the official Red Hat certification exam.</li>
                            </ul>
                        </div>
                        <div class="relative border-l-2 border-neutral-200 pl-6 before:absolute before:-left-[5px] before:top-1.5 before:h-2.5 before:w-2.5 before:rounded-full before:bg-accent-600">
                            <h4 class="font-semibold text-neutral-900">QA Testing (In Progress)</h4>
                            <p class="text-sm text-neutral-400">Gust Training &ndash; 2025</p>
                            <ul class="mt-2 list-disc list-outside ml-4 text-sm text-neutral-500 space-y-1">
                                <li>Writing and executing manual test cases.</li>
                                <li>Detecting and documenting bugs with JIRA.</li>
                                <li>Using test management tools (e.g. TestRail).</li>
                                <li>Introduction to automated testing with Selenium WebDriver.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl mb-6">Professional Experience</h3>
                    <div class="space-y-8">
                        <div class="relative border-l-2 border-neutral-200 pl-6 before:absolute before:-left-[5px] before:top-1.5 before:h-2.5 before:w-2.5 before:rounded-full before:bg-accent-600">
                            <h4 class="font-semibold text-neutral-900">Software Engineer</h4>
                            <p class="text-sm text-neutral-400">May 2024 &ndash; Present</p>
                            <p class="mt-1 text-sm text-neutral-500 italic">IB Space, Ariana, Tunisia</p>
                            <ul class="mt-2 list-disc list-outside ml-4 text-sm text-neutral-500 space-y-1">
                                <li>Designed and developed an API Gateway for user account management.</li>
                                <li>Used RabbitMQ to handle asynchronous messages between services.</li>
                                <li>Managed user account addresses including creation, update, and deletion.</li>
                                <li>Handled file uploads with various file types.</li>
                                <li>Calculated sums and processed uploaded file formats.</li>
                                <li>Calculated and managed company certificates.</li>
                            </ul>
                        </div>
                        <div class="relative border-l-2 border-neutral-200 pl-6 before:absolute before:-left-[5px] before:top-1.5 before:h-2.5 before:w-2.5 before:rounded-full before:bg-accent-600">
                            <h4 class="font-semibold text-neutral-900">FullStack Developer (Laravel / Angular)</h4>
                            <p class="text-sm text-neutral-400">September 2022 &ndash; May 2024</p>
                            <p class="mt-1 text-sm text-neutral-500 italic">SOFTWIND, Ariana, Tunisia</p>
                            <ul class="mt-2 list-disc list-outside ml-4 text-sm text-neutral-500 space-y-1">
                                <li>Project: FM-Inspection &ndash; Developed web and mobile apps to monitor
                                    objectives, KPIs, and field inspections; implemented scheduling, user management,
                                    and automatic report generation.</li>
                                <li>Project: Dashboard EHC &ndash; Managed project classifications, stages, bid
                                    templates, Excel import/export, and created interactive dashboards.</li>
                                <li>Project: Tunisian Football Federation (FTF) &ndash; Developed systems for
                                    referees, fields, leagues, match management, payments, and Google Maps integration
                                    for distance calculations.</li>
                            </ul>
                        </div>
                        <div class="relative border-l-2 border-neutral-200 pl-6 before:absolute before:-left-[5px] before:top-1.5 before:h-2.5 before:w-2.5 before:rounded-full before:bg-accent-600">
                            <h4 class="font-semibold text-neutral-900">FullStack Developer (Laravel / Angular)</h4>
                            <p class="text-sm text-neutral-400">February 2022 &ndash; August 2022</p>
                            <p class="mt-1 text-sm text-neutral-500 italic">WELYNE, Center Urbain Nord, Tunisia</p>
                            <ul class="mt-2 list-disc list-outside ml-4 text-sm text-neutral-500 space-y-1">
                                <li>Designed and developed a modular ERP for multi-company management (final year
                                    project).</li>
                                <li>Developed core modules: user management, categories, products, invoices, chat and
                                    chatbot.</li>
                                <li>Implemented clear and well-structured static modules for better organization and
                                    maintenance.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
