<!-- Navbar -->
<nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }}">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/assets/icons/icon10.png" height="55" width="82" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/properti">Properti & Fasilitas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar -->
