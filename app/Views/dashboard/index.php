<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
  <div class="header-image">
    <img src="/assets/banner1.png" alt="Banner" style="width: 75%; border-radius: 10px;">
  </div>

  <h5 class="mt-4"><strong>DJAYA ASPALT</strong>, Bisnis yang melakukan apa sih?</h5>

    <div class="row text-center mt-4">
        <div class="col-md-6">
            <a href="<?= base_url('jasa-perbaikan') ?>">
            <img src="/assets/Perbaikan Jalan.png" style="max-width: 180px;">
            <p><strong>Jasa Perbaikan Jalan</strong></p>
            </a>
        </div>
        <div class="col-md-6">
            <a href="<?= base_url('penyewaan-barang') ?>">
            <img src="/assets/Penyewaan Barang.png" style="max-width: 180px;">
            <p><strong>Penyewaan Barang</strong></p>
            </a>
        </div>
    </div>
<?= $this->endSection() ?>
