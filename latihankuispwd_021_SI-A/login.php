<?php
session_start();
include('config.php');
if (isset($_POST['kirim'])) {
  $nama = $_POST['nama'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $kelompok_umur = $_POST['kelompok_umur'];
  $jenis_kelamin = $_POST['jk'];
  $hobi = isset($_POST['hobi']) ? implode(', ', $_POST['hobi']) : '';
  $asal_daerah = $_POST['asal_daerah'];
  $alasan = $_POST['alasan'];

   // VALIDASI
  if (
    empty($nama) || 
    empty($tgl_lahir) || 
    empty($kelompok_umur) || 
    empty($jenis_kelamin) || 
    empty($asal_daerah) || 
    empty($alasan)
  ) {
    echo "<script>alert('Semua data wajib diisi!');</script>";
  } else {

  $sql = "INSERT INTO user (nama_lengkap, tanggal_lahir, umur, jenis_kelamin, hobi, asal_daerah, alasan) VALUES ('$nama', '$tgl_lahir', '$kelompok_umur', '$jenis_kelamin', '$hobi', '$asal_daerah', '$alasan')";
  // session 
  if (mysqli_query($con, $sql)) {
    $_SESSION['regis'] = true;
    header("Location: design.php");
    exit();
  } else {
    echo "Error: " . mysqli_error($con);
  }
}
}
?>

<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Komunitas Kucing</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
      body {
        background-color: bisque;
      }
      .form-container {
        max-width: 800px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .table-form td {
        padding: 12px;
        border-bottom: 1px solid #dee2e6;
      }
      .label-cell {
        width: 40%;
      }
      .btn-submit {
        background-color: #437e55;
        color: white;
      }
      .btn-submit:hover {
        background-color: #356343;
        color: white;
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
              <a class="nav-link active" href="login.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="design.php">Design</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- judul -->
    <center>
      <h3 class="text-center mb-4 py-4">Pendaftaran Komunitas Kucing</h3>
    </center>
    <!-- form tabel -->
     <form action="" method="post">
         <div class="form-container">
             <table class="table table-borderless table-form">
                 <tr>
                     <td class="label-cell">Nama Lengkap</td>
                     <td><input type="text" class="form-control" name="nama" required /></td>
                    </tr>
                    <tr>
                        <td class="label-cell">Tanggal Lahir</td>
                        <td><input type="date" class="form-control" name="tgl_lahir" required /></td>
                    </tr>
                    <tr>
                        <td class="label-cell">Kelompok Umur</td>
          <td>
            <select class="form-select" name="kelompok_umur" required>
                <option selected disabled>Pilih kelompok umur</option>
                <option value="Anak-anak">Anak-anak</option>
                <option value="Remaja">Remaja</option>
                <option value="Dewasa">Dewasa</option>
            </select>
        </td>
    </tr>
    <tr>
        <td class="label-cell">Jenis Kelamin</td>
        <td>
            <div class="form-check">
                <input
                class="form-check-input"
                type="radio"
                name="jk"
                id="laki"
                value="laki-laki"
                required
                />
                <label class="form-check-label" for="laki">Laki-Laki</label>
            </div>
            <div class="form-check">
                <input
                class="form-check-input"
                type="radio"
                name="jk"
                id="perempuan"
                value="perempuan"
                required
                />
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </td>
    </tr>
    <tr>
        <td class="label-cell">Hobi</td>
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="game" name="hobi[]" value="Main Game" />
                <label class="form-check-label" for="game">Main Game</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ngoding" name="hobi[]" value="Ngoding" />
                <label class="form-check-label" for="ngoding">Ngoding</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="kucing" name="hobi[]" value="Bermain dengan kucing" />
                <label class="form-check-label" for="kucing"
                >Bermain dengan kucing</label
                >
            </div>
        </td>
    </tr>
    <tr>
        <td class="label-cell">Asal Daerah</td>
        <td><input type="text" class="form-control" name="asal_daerah" required /></td>
    </tr>
    <tr>
        <td class="label-cell">Alasan Ingin Bergabung</td>
        <td><textarea class="form-control" name="alasan" rows="4" required></textarea></td>
    </tr>
</table>

<div class="text-center mt-3">
    <button type="submit" class="btn btn-submit text-uppercase" name="kirim">
        Kirim Pendaftaran
    </button>
</div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>