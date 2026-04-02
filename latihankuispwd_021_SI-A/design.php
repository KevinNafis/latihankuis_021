<?php
session_start();
if(!isset($_SESSION['regis'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <style>
        body{
            background-color: bisque;
        }
     </style>
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
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="design.php">Design</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <h1 style="text-align: center; font-weight: bold; font-style: italic;" >Design Laboratory</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h6 style="font-weight: bold;">Image Effects</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-3">
                    <img src="https://asset.kompas.com/crops/PKlVW7OcrH7G8hgiFjmreq966xY=/45x40:973x658/1200x800/data/photo/2022/06/17/62ac4bd1e616b.jpg" alt="gambar kucing" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>