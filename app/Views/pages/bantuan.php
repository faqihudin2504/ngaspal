<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="container">
    
    <div class="mb-5">
        <p class="lead">Halo,</p>
        <p class="lead">Apakah ada yang bisa kami bantu?</p>
        <p>Pilih Topik sesuai kendala</p>
    </div>


    <div class="row text-center mb-5">
        <div class="col-md-3">
            <h3>Pemesanan</h3>
        </div>
        <div class="col-md-3">
            <h3>Pembayaran</h3>
        </div>
        <div class="col-md-3">
            <h3>Pembayaran</h3>
        </div>
        <div class="col-md-3">
            <h3>Paket/promo</h3>
        </div>
    </div>

    <h2 class="mb-4">Yang Sering ditanyakan</h2>
    
    <div class="list-group mb-5">
        <a href="#" class="list-group-item list-group-item-action">Bagaimana cara menggunakan paket projek?</a>
        <a href="#" class="list-group-item list-group-item-action">Apa saja metode pembayaran?</a>
        <a href="#" class="list-group-item list-group-item-action">Apa saja paket projek yang sedang berlangsung?</a>
        <a href="#" class="list-group-item list-group-item-action">Bagaimana mengubah metode pembayaran?</a>
        <a href="#" class="list-group-item list-group-item-action">Berapa lama waktu pengiriman?</a>
    </div>

    <hr class="my-4">

    <div class="text-center mt-5">
        <p><strong>Masih ada pertanyaan lagi?</strong></p>
        <p><strong>Tanya</strong></p>
        <p>trik langsung dengan Customer Service kami</p>
    </div>
</div>
<?= $this->endSection() ?>