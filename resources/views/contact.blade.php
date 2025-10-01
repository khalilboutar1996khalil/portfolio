@extends('welcome')

@section('title', 'Home')


@section('content')

    <section id="contact" class="contact section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Feel free to contact me for any questions or projects.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">


                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Ariana, Tunisia</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+216 53117158</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>khalilboutar@gmail.com</p>
                            </div>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d10.095!3d36.866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd336e6d3e7e01%3A0x0!2sAriana%2C%20Tunisia!5e0!3m2!1sen!2s!4v1695972000000!5m2!1sen!2s"
                            frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>

                <div class="col-lg-7">
                    <form method="post" action="{{ route('contact.store') }}" id="contact-form" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">name</label>
                                <input type="text" name="name" id="name-field" class="form-control" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">subject</label>
                                <input type="text" class="form-control" name="subject" id="subject-field" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Message</label>
                                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">

                                <button type="button" id="btn-send" >Send</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
@endsection
@push('scripts')

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true
            });
        </script>
    @endif
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#btn-send').on('click', function(e) {
            e.preventDefault();
            const form = $("#contact-form");
            $.ajax({
                url: "{{ route('contact.store') }}",
                type: 'POST',
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                   if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Succès',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true
                        }).then(() => {
                            location.reload();
                        });

                    }

                },
                error: function(xhr) {
                    let errorMessage = 'Une erreur est survenue. Veuillez réessayer.';
                   if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: errorMessage,
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    });

                }
            });
        });
    </script>

@endpush
