@extends('welcome')

@section('title', 'Home')

@section('content')
    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>

        </div><!-- End Section Title -->


        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img style="border-radius: 3em" src="img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 content">
                    <h2>QA Tester &amp; Web Developer.</h2>
                    <p>
                        I am a Software Engineer with 3 years of experience in web development.
                        I specialize in building modern applications using Laravel and Angular.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>30 September
                                        1996</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+216 53117158</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Ariana, Tunisia</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>29</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Engineer</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span>khalilboutar@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Skills</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row skills-content skills-animation">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>CSS</span> <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>.NET</span> <i class="val">50%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->
                    <div class="progress">
                        <span class="skill"><span>SQl</span> <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->
                    <div class="progress">
                        <span class="skill"><span>Linux</span> <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill"><span>Laravel</span> <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>Angular JS</span> <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->


                    <div class="progress">
                        <span class="skill"><span>SpringBoot</span> <i class="val">70%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->
                    <div class="progress">
                        <span class="skill"><span>React JS</span> <i class="val">70%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>Flutter</span> <i class="val">40%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->
                    <div class="progress">
                        <span class="skill"><span>QA Testing</span> <i class="val">60%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>

            </div>

    </section><!-- /Skills Section -->
    <!-- Languages Section -->
    <section id="languages" class="languages section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Languages</h2>
            <p>Languages I can speak and work with</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <i class="bi bi-translate" style="font-size: 2rem;"></i>
                        <p><strong>Arabic</strong></p>
                        <span>Native</span>
                    </div>
                </div><!-- End Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <i class="bi bi-translate" style="font-size: 2rem;"></i>
                        <p><strong>French</strong></p>
                        <span>Fluent</span>
                    </div>
                </div><!-- End Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <i class="bi bi-translate" style="font-size: 2rem;"></i>
                        <p><strong>English</strong></p>
                        <span>Professional</span>
                    </div>
                </div><!-- End Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <i class="bi bi-translate" style="font-size: 2rem;"></i>
                        <p><strong>Italian</strong></p>
                        <span>Intermediate</span>
                    </div>
                </div><!-- End Item -->

            </div>
        </div>
    </section>


    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Facts</h2>
            <p>Highlights of my profile</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Years of experience</p>
                    </div>
                </div><!-- End Stats Item -->



            </div>

        </div>

    </section><!-- /Stats Section -->
@endsection
