<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="boostrap/css/style.css">
<title>Al - Furqon</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container pb-1">
    <a class="navbar-brand fs-3 fw-bold" href="#">
    <img src="img/sosial/logo.png" width="250" height="75" class="d-inline-block align-text-top">  
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse isi" id="navbarNav">
      <ul class="navbar-nav ms-auto ps-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <div class="btn-group">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Menu
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item" href="?page=jadwal">Jadwal Kajian</a></li>
            <li><a class="dropdown-item" href="?page=organisasi">Struktur Organisas DKM</a></li>
          </ul>
        </div>
        <!-- batad -->  
        <li class="nav-item">
          <a class="nav-link active" href="?page=kegiatan">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=sarana">Sarana</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=kontak">Kontak Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->

<!-- konten -->
<?php 
 error_reporting (E_ALL ^ (E_NOTICE | E_WARNING)); //notif error

  if($_GET['page'] == ''){
    include "halaman.php";
  } 
  else if($_GET['page'] == 'jadwal'){
    include 'frontend/jadwal.php';
  }
  else if($_GET['page'] == 'organisasi'){
    include 'frontend/organisasi.php';
  }
  else if($_GET['page'] == 'kontak'){
    include 'frontend/kontak.php';
  }
  else if($_GET['page'] == 'kegiatan'){
    include 'frontend/kegiatan.php';
  }
  else if($_GET['page'] == 'sarana'){
    include 'frontend/sarana.php';
  }
 
?>
<!-- konten -->

<!-- about -->
<footer class="fot mt-5 py-5 text-white">
  <div class="container">
    <div class="row">
      <div class="col ps-1">
        <h4>Dewan Kemakmuran Masjid</h4>
        <img src="img/sosial/logo2.png" width="200" height="200" class="d-inline-block align-text-top"> 
      </div>
      <!-- batas -->
      <div class="col">
        <h4>Hubungi Kami</h4>
        <p>Jl. Samudra Dumai Barat</p>
        <p>Tlp. 082284207229</p>
        <p>Email. Al-Furqon@gmail.com</p>
          <div class="sosial">
          <img src="img/sosial/facebook.png" width="40">
          <img src="img/sosial/instagram.png" width="40">
          <img src="img/sosial/twitter.png" width="40">
          <img src="img/sosial/youtube.png" width="40">
        </div>
      </div>

      <!-- batas -->
      <div class="col">
        <h4>Q.S At-Taubah: 18</h4>
        <p>“Sesungguhnya yang memakmurkan masjid Allah hanyalah orang-orang yang beriman kepada Allah dan hari akhir, serta (tetap) menegakkan shalat, menunaikan zakat dan tidak takut kecuali hanya kepada Allah. Maka mudah-mudahan mereka termasuk orang-orang yang mendapat petunjuk.”</p>
      </div>

      <!-- batas -->
    </div>
  </div>
  <div class="copy pt-5 text-center">
    Copyright &copy; 2022 by Al-Furqon
  </div>
</footer>

<!-- about -->
<script src="boostrap/umd/popper.min.js"></script>
<script src="boostrap/js/bootstrap.min.js"></script>
  </body>
</html>
