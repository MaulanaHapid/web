<?php
// file koneksi
include_once("koneksi.php");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&family=Sacramento&family=Work+Sans:wght@100@400&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@500&family=Poppins&family=Sacramento&family=Work+Sans:wght@100&display=swap"
    rel="stylesheet">

  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@500&family=Poppins:wght@400;500&family=Sacramento&family=Work+Sans:wght@100&display=swap"
    rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <!-- NAVBAR START -->
  <nav class="navbar navbar-expand-md bg-transparent mynavbar">
    <img class="logo" src="img/Logo.jpg" alt="">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">JOKUL MOBIL</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body ">
          <div class="navbar-nav ms-auto ">
            <a class="nav-link text-white active" href="#home">Home</a>
            <a class="nav-link text-white" href="product.php">Produk</a>
            <a class="nav-link text-white" href="#Story">About</a>
            <a class="nav-link text-white" href="#gallery">Contact</a>
            <a class="nav-link text-white" href="#rsvp">RSVP</a>
            <a class="nav-link text-white" href="#gifts">Gifts</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVBAR END -->


  <!-- hero -->
  <section id="hero" class="hero">
    <main class="col-lg-12 text-center text-white">


      <h1>SOLUSI JUAL BELI MOBIL BEKAS</h1>
      <h3>Segera dapatkan mobl impian anda dengan kami</h3>

      <a href="product.php"><button class="btn btn-success btn-lg mt-3">KATALOG</button> </a>

    </main>
  </section>

  <!-- Profil Jokul -->

  <section class="profil ">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6">
          <div class=" mt-5 mb-5" style="">
            <img src="img/homeJokul.jpg" class="img-fluid" alt="...">
          </div>
        </div>

        <div class="col-lg-6 col-sm-12 col-12 ">
          <div class=" mt-5 mb-5 ms-4">
            <h1 class="text-center">JOKUL MOBIL</h1>
            <p>Kami adalah sebuah perusahaan yang bergerak di bidang mobil. Sudah lebih dari 4 tahun kami beroperasi,
              dan selama itu kami telah
              membangun reputasi yang baik dalam industri ini.</P>

            <p>Fokus utama perusahaan adalah penjualan mobil bekas dan body repair atau body salon. Tim kami terdiri
              dari orang-orang yang ahli dan berpengalaman yang siap memberikan solusi inovatif dan berkualitas kepada
              pelanggan kami. </p>
            <div class="profil-content row mt-4 d-flex justify-content-center align-items-center text-white ">
              <div class=" col-sm-4 text-center infoe">
                <h3>300+ </h3>
                <h3>Mobil terjual</h3>
              </div>
              <div class="col-sm-2">
              </div>
              <div class="col-sm-4 text-center">
                <h3>300+ </h3>
                <h3>Body Repair</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- offer -->
  <section class="offer">

    <div class="container pt-5">
      <h3 style="" class="text-white ps-5">Yang Kami</h3>
      <h3 class="text-white ps-5">Tawarkan</h3>
    </div>

    <div class="row d-flex justify-content-center align-items-center w-100 text-center pb-4 ">

      <div class="col-sm-3 col-4">
        <div class="card" style="">
          <img src="img/homeJokul.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card">
          <div class="card-body text-white">
            <h6 class="card-title">Mobil Bekas</h6>
            <p class="card-text">Kualitas terbaik, Harga Termurah, aman dan amanah</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-4">
        <div class="card border" style="">
          <img src="img/car-paint-repair.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card">
          <div class="card-body text-white">
            <h6 class="card-title">Body Repair</h6>
            <p class="card-text">Layanan perbaikan body mobil dari baret, hingga cat mobil</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-4">
        <div class="card" style="">
          <img src="img/modifikasi-mobil.jpg" class="img-fluid" alt="...">
        </div>
        <div class="card">
          <div class="card-body text-white">
            <h6 class="card-title">Konsultasi Accessories</h6>
            <p class="card-text">Bagian interior dan eksterior premium</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- product -->
  <section class="product">
    <div class=" container pt-5 pb-4 ">

      <h3 class="text-center mb-4">Ready Stok</h3>

      <div class="row row-cols-1 row-cols-md-5 g-4 d-flex justify-content-center">
        <div class="col-6">
          <div class="card h-100">
            <img src="img/z.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card h-100">
            <img src="img/z.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card h-100">
            <img src="img/z.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card h-100">
            <img src="img/z.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center mt-3 ">
        <a href="product.php"><button class="bg-danger text-white p-2">CEK SELENGKAPNYA</button></a>
      </div>
    </div>
  </section>


  <!-- ratting -->
  <!-- Testimonial Start -->

  <div class="container">
    <div class="text-center mx-auto mb-5  " style="max-width: 600px;">
      <h1 class="mb-3">Our Clients Say!</h1>
      <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit.
        Ipsum diam justo sed rebum vero dolor duo.</p>
    </div>
    <div class="owl-carousel testimonial-carousel  ">
      <div class="testimonial-item bg-light rounded p-3">
        <div class="bg-white border rounded p-4">
          <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
            Est stet ea lorem amet est kasd kasd erat eos</p>
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
            <div class="ps-3">
              <h6 class="fw-bold mb-1">Client Name</h6>
              <small>Profession</small>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-item bg-light rounded p-3">
        <div class="bg-white border rounded p-4">
          <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
            Est stet ea lorem amet est kasd kasd erat eos</p>
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
            <div class="ps-3">
              <h6 class="fw-bold mb-1">Client Name</h6>
              <small>Profession</small>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-item bg-light rounded p-3">
        <div class="bg-white border rounded p-4">
          <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
            Est stet ea lorem amet est kasd kasd erat eos</p>
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
            <div class="ps-3">
              <h6 class="fw-bold mb-1">Client Name</h6>
              <small>Profession</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- rating End -->


  <!-- footer -->
  <div class="container-fluid bg-dark text-white-50 footer pt-1 mt-3 fadeIn">
    <div class="container py-4">
      <div class="row g-4">
        <div class="col-lg-6 col-md-6">
          <h5 class="text-white mb-4"></h5>
          <p class="mb-2"><i class="bi bi-geo-alt"></i> &nbsp; Kalijati timur, RT21/07. Subang</p>
          <p class="mb-2"><i class="bi bi-telephone"></i> &nbsp; 081288011459</p>
          <p class="mb-2"><i class="bi bi-envelope"></i> &nbsp; info@example.com</p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href=""><i class="bi bi-instagram"></i></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="bi bi-facebook"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="bi bi-youtube"></i></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>