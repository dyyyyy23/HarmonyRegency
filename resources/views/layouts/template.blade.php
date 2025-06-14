<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="/assets/icons/icon1.ico">
  <title>@yield('title', 'Harmoni Regency- Perumahan Ternyaman Di Rantauprapat')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Aos Animated Biar bisa Gerak -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Summer Note css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css">

  <!-- Magnific -->
  <link rel="stylesheet" href="/assets/css/magnific.css">

  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body style="min-height:100vh; display: flex; flex-direction: column;">

  <!-- Navbar -->
  @include('components.header')

 {{-- Konten Dinamis --}}
 <main style="padding-top: 90px;"> <!-- 90px menyesuaikan tinggi navbar -->
    @yield('content')
</main>

  {{-- Footer --}}
  @include('components.footer')

 


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



  <!-- JQuery 1.7.2 -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="assets/js/magnific.js"></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-HK7U5Cnxlh5ywQfkStj8PCmoN9aaq30gDh27Xcojk="
    crossorigin="anonymous"></script>

  <!-- Summer Note js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

  <!-- Navbar Scroll -->
  <script type="text/javascript">
    $(document).ready(function() {
      $("#summernote").summernote({
        height: 200,
      });
    });

    const navbar = document.querySelector(".fixed-top");
    window.onscroll = () => {
      if (window.scrollY > 100) {
        navbar.classList.add("scroll-nav-active");
        navbar.classList.add("text-nav-active");
        // navbar.classList.remove("navbar-dark");
      } else {
        navbar.classList.remove("scroll-nav-active");
        // navbar.classList.add("navbar-dark");
      }
    };
    // Aos Animasi
    AOS.init();

    // Mgnific
    $(document).ready(function() {
      console.log("Magnific Popup Initialized!");

      $('.image-link').magnificPopup({
        type: 'image',
        retina: {
          ratio: 1,
          replaceSrc: function(item, ratio) {
            return item.src.replace(/\.\w+$/, function(m) {
              return '@2x' + m;
            });
          }
        }
      });
    });
  </script>
  <!-- Navbar Scroll -->

</body>

</html>