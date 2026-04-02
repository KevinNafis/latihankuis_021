<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Komunitas Kucing</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Komunitas Kucing</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="design.php">Design</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- container -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 style="font-weight: bold; font-style: italic">
              Selamat Datang di Komunitas Kucing
            </h1>
          </div>
        </div>
        <div class="row py-1">
          <div class="col-lg-6 col-md-12 mt-3">
            <img
              src="gambarkucing.jpg"
              alt="kucing"
              class="img-fluid"
            />
          </div>
          <div class="col-lg-6 col-md-12 mt-3">
            <p class="welcome">
              Selamat datang di komunitas kucing! Di sini, apa pun jenis kucing
              yang Anda miliki, kami yakin Anda akan menemukan teman yang
              memiliki minat yang sama di sini. kucing adalah hewan peliharaan
              yang sangat populer di seluruh dunia, dan sangat menyenangkan
              untuk dipelihara.
            </p>
            <p class="manfaat">
              begitu banyak manfaat yang bisa Anda dapatkan dengan bergabung di
              komunitas kucing ini, seperti mendapatkan informasi tentang
              perawatan kucing, berbagi pengalaman sesama pecinta kucing. Jadi,
              tunggu apa lagi? Bergabunglah dengan komunitas kucing sekarang
              juga.
            </p>
            <h5 style="font-weight: bold">Jenis-Jenis Kucing :</h5>
            <ol class="jenis">
              <li>kucing perisa</li>
              <li>kucing siam</li>
              <li>kucing anggora</li>
              <li>kucing persia</li>
              <li>dll</li>
            </ol>
          </div>
        </div>
        <div class="row py-3">
          <div class="col-lg-4 col-md-5">
            <button type="button" class="btn btn-primary"
             onclick="window.open('https://miawholic.com/forums', '_blank')">
             Informasi lebih lanjut
           </button>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
