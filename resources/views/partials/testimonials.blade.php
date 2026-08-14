{{--
    Testimonials section — scaffold only, NOT included on any page yet.

    Replace every [placeholder] below with a real quote from someone who
    actually worked with you (manager, colleague, client — e.g. copied from
    a LinkedIn recommendation), then include this partial where you want it
    to appear, for example in resources/views/about.blade.php:

        @include('partials.testimonials')

    Do not publish this section with invented names or quotes.
--}}
<section id="testimonials" class="testimonials section light-background">

    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What colleagues and clients say about working with me</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": { "slidesPerView": 1, "spaceBetween": 20 },
                        "1200": { "slidesPerView": 3, "spaceBetween": 20 }
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                        <h3>[Full Name]</h3>
                        <h4>[Role, Company]</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>[Add a real quote from a client or manager here]</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->
