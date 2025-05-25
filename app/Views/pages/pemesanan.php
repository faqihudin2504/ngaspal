<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Pemesanan</h1>
        <h2 class="text-primary">DJAYA ASPALT</h2>
        <p class="lead">Pilih layanan yang Anda butuhkan</p>
    </div>

    <div class="row justify-content-center">
        <!-- Card Pemesanan Jasa & Barang -->
        <div class="col-lg-5 col-md-6 mb-4">
            <div class="card h-100 shadow-lg border-primary">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title text-center mb-0">Pemesanan</h3>
                </div>
                <div class="card-body text-center p-0">
                    <img src="/public/images/pemesanan/jasa-barang.jpg" class="img-fluid w-100" alt="Jasa & Barang" style="height: 200px; object-fit: cover;">
                    <div class="p-4">
                        <h4 class="card-title">Jasa & Barang</h4>
                        <p class="card-text">Pesan jasa pengaspalan dan material berkualitas untuk proyek Anda</p>
                        <div class="mt-3">
                            <a href="/pemesanan/jasa" class="btn btn-primary px-4">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Penyewaan Barang -->
        <div class="col-lg-5 col-md-6 mb-4">
            <div class="card h-100 shadow-lg border-success">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title text-center mb-0">Penyewaan</h3>
                </div>
                <div class="card-body text-center p-0">
                    <img src="/public/images/pemesanan/penyewaan-alat.jpg" class="img-fluid w-100" alt="Penyewaan Barang" style="height: 200px; object-fit: cover;">
                    <div class="p-4">
                        <h4 class="card-title">Barang</h4>
                        <p class="card-text">Sewa peralatan dan mesin untuk kebutuhan proyek pengaspalan Anda</p>
                        <div class="mt-3">
                            <a href="/penyewaan/barang" class="btn btn-success px-4">
                                Sewa Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Tambahan -->
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Proses Pemesanan Mudah</h3>
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <img src="/public/images/pemesanan/step1.jpg" class="img-fluid rounded-circle mb-2" style="width: 120px; height: 120px; object-fit: cover;" alt="Pilih Layanan">
                            <h5>Pilih Layanan</h5>
                            <p>Tentukan jenis layanan yang Anda butuhkan</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="/public/images/pemesanan/step2.jpg" class="img-fluid rounded-circle mb-2" style="width: 120px; height: 120px; object-fit: cover;" alt="Isi Formulir">
                            <h5>Isi Formulir</h5>
                            <p>Lengkapi data pemesanan Anda</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="/public/images/pemesanan/step3.jpg" class="img-fluid rounded-circle mb-2" style="width: 120px; height: 120px; object-fit: cover;" alt="Konfirmasi">
                            <h5>Konfirmasi</h5>
                            <p>Tim kami akan menghubungi Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        transition: transform 0.3s;
        border-radius: 15px;
        overflow: hidden;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .card-header {
        font-weight: bold;
        font-size: 1.25rem;
    }
    .btn {
        transition: all 0.3s;
    }
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
</style>

<?= $this->endSection() ?>