
@extends('layouts.template')

@section('title', 'Harmoni Regency | Berita')

@section('content')


<!-- Berita -->
<section id="Berita" class="py-5">
    <div class="container">
  
      <div class="Header-Berita text-center">
        <h2 class="fw-bold">Berita Terkini Di Harmoni Regency</h2>
      </div>
  
      <div class="row py-5" data-aos="zoom-in-down">
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="/assets/images/1.jpg" class="img-fluid mb-3 rounded-4" alt="">
            <div class="Konten-Berita">
              <p class="mb-3 text-secondary">13/04/2025</p>
              <h2 class="fw-bold mb-3">Kelas Menengah Tanggung Bergaji Rp 14 Juta Masih Bisa Beli Rumah Subsidi</h2>
              <p class="text-secondary">#harmoniregency</p>
              <a href="https://www.kompas.com/properti/read/2025/04/13/070000021/kelas-menengah-tanggung-bergaji-rp-14-juta-masih-bisa-beli-rumah" class="text-decoration-none text-danger">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="/assets/images/2.jpg" class="img-fluid mb-3 rounded-4" alt="">
            <div class="Konten-Berita">
              <p class="mb-3 text-secondary">20/04/2025</p>
              <h2 class="fw-bold mb-3">Rumah Subsidi di Kota Bau Bau: Temukan Impian Anda dengan Harga Murah</h2>
              <p class="text-secondary">#harmoniregency</p>
              <a href="https://www.kompas.com/properti/read/2025/04/20/120246621/rumah-subsidi-di-kota-bau-bau-temukan-impian-anda-dengan-harga-murah" class="text-decoration-none text-danger">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="/assets/images/3.jpeg" class="img-fluid mb-3 rounded-4" alt="">
            <div class="Konten-Berita">
              <p class="mb-3 text-secondary">23/01//2025</p>
              <h2 class="fw-bold mb-3">Cari Rumah Tipe 36 di Bawah Rp 160 Juta? Coba Cek di Brangsong Jateng</h2>
              <p class="text-secondary">#harmoniregency</p>
              <a href="https://www.detik.com/properti/berita/d-7875485/cari-rumah-tipe-36-di-bawah-rp-160-juta-coba-cek-di-brangsong-jateng" class="text-decoration-none text-danger">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
  
      <div class="footer-berita text-center" data-aos="zoom-in-up">
        <a href="https://www.detik.com/properti/berita" class="btn btn-outline-danger">Berita Lainnya</a>
      </div>
    </div>
  </section>
  <!-- Berita -->

  @endsection