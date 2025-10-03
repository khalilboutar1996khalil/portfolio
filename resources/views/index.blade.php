@extends('welcome')

@section('title', 'Home')

@section('content')
<section id="hero" class="hero section">
  <img src="{{ asset('img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

  <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2>Mohamed Khalil Boutar</h2>
        <p>I'm Software Engineer</p>
        <a href="{{ route('about') }}" class="btn-get-started">About Me</a>
        <a class="btn-get-started" href="/download"  target="_blank">Download CV</a>
      </div>
    </div>
  </div>
</section>
@endsection
