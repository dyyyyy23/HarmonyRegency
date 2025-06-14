
@extends('layouts.template')

@section('title', 'Harmoni Regency | Properti & Fasilitas')

@section('content')

<!-- Fotoo -->
<section id="foto" class="section-foto parallax">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
        <div class="stripe me-2" data-aos="zoom-in-right"></div>
        <h5 class="fw-bold text-white">Suasana Di Harmony Regency</h5>
        </div>
        <div>
        <a href="https://www.facebook.com/profile.php?id=61566412801130&sk=photos" class="btn btn-outline-danger">Foto Lainnya</a>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-up">
          <a class="image-link" href="/assets/images/img19.jpg">
          <img src="/assets/images/a.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-6"data-aos="zoom-in-up" >
        <a class="image-link" href="/assets/images/img19.jpg">
          <img src="/assets/images/b.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-up" >
        <a class="image-link" href="/assets/images/img19.jpg">
          <img src="/assets/images/c.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-up">
        <a class="image-link" href="/assets/images/img19.jpg">
          <img src="/assets/images/img19.jpg" class="img-fluid" alt="">
          </a>
        </div>
      </div>
    </div>
        </section>
  
  <!-- Fasilitas -->
  <section id="fasilitas" class="py-5">
    <div class="container py-5" data-aos="fade-up" data-aos-anchor-placement="top-center">
      <div class="text-center mb-5">
        <h3 class="fw-bold">Fasilitas Harmony Regency</h3>
      </div>
  
      <!-- Galeri Gambar -->
      <div class="row g-4 justify-content-center">
        <div class="col-6 col-md-4 col-lg-3">
          <img src="/assets/images/fa1.jpg" class="img-fluid rounded-4 shadow-sm" alt="Kolam Renang">
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img src="/assets/images/fa2.jpg" class="img-fluid rounded-4 shadow-sm" alt="Taman Bermain">
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img src="/assets/images/fa3.jpg" class="img-fluid rounded-4 shadow-sm" alt="Jogging Track">
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <img src="/assets/images/fa4.jpg" class="img-fluid rounded-4 shadow-sm" alt="Keamanan 24 Jam">
        </div>
        <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
      </div>
  
      <!-- Tombol -->
      <div class="text-center mt-5">
        <a href="https://www.facebook.com/photo/?fbid=122146829084547093&set=pb.61566412801130.-2207520000" class="btn btn-outline-danger">
          Fasilitas Lainnya
        </a>
      </div>
    </div>
  </section>
  <!-- Fasilitas -->

  @endsection