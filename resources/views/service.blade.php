@extends('welcome')

@section('title', 'Home')

@section('content')
 <section id="services" class="services section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Here are the main services I provide as a Software Engineer</p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <a href="#" class="stretched-link">
                <h3>Web Development</h3>
              </a>
              <p>Design and develop modern web applications using Laravel and Angular for scalable and high-performing
                solutions.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <div class="icon"><i class="bi bi-phone"></i></div>
              <a href="#" class="stretched-link">
                <h3>Mobile App Development</h3>
              </a>
              <p>Build cross-platform mobile applications using Flutter integrated with REST APIs and backend services.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <div class="icon"><i class="bi bi-server"></i></div>
              <a href="#" class="stretched-link">
                <h3>API & Microservices</h3>
              </a>
              <p>Design and implement APIs, microservices, and message queues (RabbitMQ) to ensure robust and scalable
                architectures.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <div class="icon"><i class="bi bi-gear"></i></div>
              <a href="#" class="stretched-link">
                <h3>ERP & Business Solutions</h3>
              </a>
              <p>Develop ERP systems and business management applications for multi-company operations with modular
                design.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <a href="#" class="stretched-link">
                <h3>Data & Reporting</h3>
              </a>
              <p>Create interactive dashboards, reports, and KPI monitoring tools for business insights and decision
                making.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <div class="icon"><i class="bi bi-shield-lock"></i></div>
              <a href="#" class="stretched-link">
                <h3>Security & File Management</h3>
              </a>
              <p>Implement secure file handling, user authentication, and encrypted storage for sensitive data.</p>
            </div>
          </div><!-- End Service Item -->

        </div>
      </div>




    </section><!-- /Services Section -->

@endsection
