<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Djaya Aspalt</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    .sidebar {
      height: 100vh;
      background-color: #f8f9fa;
      color: white;
    }

    .sidebar a {
      color: black;
      text-decoration: none;
    }

    .sidebar a:hover {
      color: #495057;
      padding-left: 10px;
    }

    /* 👉 Tambahkan CSS ini di sini */
    .row .col-md-6 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <!-- TOPBAR -->
  <div class="d-flex justify-content-end align-items-center p-2 bg-light">
    <img src="<?= base_url('assets/profile.jpg') ?>" alt="Foto Profil" class="rounded-circle" width="40" height="40">
    <a href="<?= base_url('keranjang') ?>" class="mx-3">
      <img src="<?= base_url('assets/cart.svg') ?>" alt="Keranjang" width="30">
    </a>
    <form class="d-flex" role="search" action="<?= base_url('search') ?>">
      <input class="form-control" type="search" name="q" placeholder="Cari nama..." aria-label="Search">
    </form>
  </div>

  <!-- SIDEBAR + MAIN CONTENT dibungkus d-flex -->
  <div class="d-flex">
    <!-- SIDEBAR -->
    <div class="sidebar p-3">
      <h4 class="text-center"><img src="<?= base_url('assets/logoSamping.png') ?>" width="160"></h4>
      <ul class="list-unstyled">
        <li><a href="/">🏠 Home</a></li>
        <li><a href="#">👤 Profile</a></li>
        <li><a href="#">🖼️ Gallery</a></li>
        <li><a href="#">📞 Hubungi Kami</a></li>
        <li><a href="#">📄 Artikel</a></li>
        <li><a href="#">📦 Pemesanan</a></li>
        <li><a href="#">❓ Bantuan</a></li>
      </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content flex-grow-1 p-4">
      <?= $this->renderSection('content') ?>
    </div>
  </div>
</body>
</html>
