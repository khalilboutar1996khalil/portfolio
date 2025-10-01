@extends('welcome')

@section('title', 'Home')

@section('content')
    <!-- Resume Section -->
    <section id="resume" class="resume section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Resume</h2>
            <p>Here’s a summary of my professional experience and education</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row">

                <!-- Summary & Education -->
                <!-- Summary & Education -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>Engineering Cycle in Computer Science</h4>
                        <h5>2019 - 2022</h5>
                        <p><em>Private Higher School of Engineering and Technology – ESPRIT, Ariana</em></p>
                    </div><!-- End Resume Item -->

                    <div class="resume-item">
                        <h4>Bachelor in Management Information Systems</h4>
                        <h5>2016 - 2019</h5>
                        <p><em>Higher School of Digital Economics (ESEN), Manouba</em></p>
                    </div><!-- End Resume Item -->

                    <!-- Certifications Section -->
                    <h3 class="resume-title mt-4">Certifications</h3>

                    <div class="resume-item">
                        <h4>Front End Developer – React JS Certified</h4>
                        <h5>GOMYCODE – 2024</h5>
                    </div>

                    <div class="resume-item">
                        <h4>RHCSA – Red Hat Certified System Administrator</h4>
                        <h5>TEKUP – 2025</h5>
                        <ul>
                            <li>Acquis des compétences avancées en administration Linux : gestion des utilisateurs,
                                permissions, services et sécurité.</li>
                            <li>Maîtrise des commandes Linux, gestion des systèmes de fichiers, gestion des paquets et
                                configuration des réseaux.</li>
                            <li>Préparation et réussite de la certification officielle Red Hat.</li>
                        </ul>
                    </div>

                    <div class="resume-item">
                        <h4>QA Testing (In Progress)</h4>
                        <h5>Gust Training – 2025</h5>
                        <ul>
                            <li>Rédaction et exécution de cas de tests manuels.</li>
                            <li>Détection et documentation de bugs avec JIRA.</li>
                            <li>Utilisation d’outils de gestion de tests (ex. TestRail).</li>
                            <li>Initiation aux tests automatisés avec Selenium WebDriver.</li>
                        </ul>
                    </div>
                </div>


                <!-- Professional Experience -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="resume-title">Professional Experience</h3>

                    <div class="resume-item">
                        <h4>Software Engineer</h4>
                        <h5>May 2024 – Present</h5>
                        <p><em>IB Space, Ariana, Tunisia</em></p>
                        <ul>
                            <li>Designed and developed an API Gateway for user account management.</li>
                            <li>Used RabbitMQ to handle asynchronous messages between services.</li>
                            <li>Managed user account addresses including creation, update, and deletion.</li>
                            <li>Handled file uploads with various file types.</li>
                            <li>Calculated sums and processed uploaded file formats.</li>
                            <li>Calculated and managed company certificates.</li>
                        </ul>
                    </div><!-- End Resume Item -->

                    <div class="resume-item">
                        <h4>FullStack Developer (Laravel / Angular)</h4>
                        <h5>September 2022 – May 2024</h5>
                        <p><em>SOFTWIND, Ariana, Tunisia</em></p>
                        <ul>
                            <li>Project: FM-Inspection – Developed web and mobile apps to monitor objectives, KPIs, and
                                field inspections; implemented scheduling, user management, and automatic report generation.
                            </li>
                            <li>Project: Dashboard EHC – Managed project classifications, stages, bid templates, Excel
                                import/export, and created interactive dashboards.</li>
                            <li>Project: Tunisian Football Federation (FTF) – Developed systems for referees, fields,
                                leagues, match management, payments, and Google Maps integration for distance calculations.
                            </li>
                        </ul>
                    </div><!-- End Resume Item -->

                    <div class="resume-item">
                        <h4>FullStack Developer (Laravel / Angular)</h4>
                        <h5>February 2022 – August 2022</h5>
                        <p><em>WELYNE, Center Urbain Nord, Tunisia</em></p>
                        <ul>
                            <li>Designed and developed a modular ERP for multi-company management (final year project).</li>
                            <li>Developed core modules: user management, categories, products, invoices, chat and chatbot.
                            </li>
                            <li>Implemented clear and well-structured static modules for better organization and
                                maintenance.</li>
                        </ul>
                    </div><!-- End Resume Item -->

                </div>


            </div>
        </div>
    </section><!-- /Resume Section -->
@endsection
