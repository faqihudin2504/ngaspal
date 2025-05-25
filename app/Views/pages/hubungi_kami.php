<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Hubungi Kami</h1>
        <p class="lead">CV. Djaya Aspati siap melayani kebutuhan pengaspalan jalan Anda</p>
    </div>

    <div class="row">
        <!-- Bagian Deskripsi Perusahaan -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-primary">CV. Djaya Aspati</h2>
                    <p class="card-text">
                        Perusahaan jasa pengaspalan jalan dan kontraktor jalan yang berpengalaman dalam melayani jasa pengaspalan dan pemasangan Paving Block/Conblock.
                    </p>
                    
                    <div class="mt-4">
                        <h4 class="h5">Kenapa memilih kami?</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Tim profesional berpengalaman</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Peralatan modern dan memadai</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Harga kompetitif</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Garansi pekerjaan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Kontak -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Informasi Kontak</h3>
                    
                    <div class="contact-info mt-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt fa-lg text-primary mr-3"></i>
                            <div>
                                <h5 class="mb-0">Alamat</h5>
                                <p class="mb-0">Alamat lengkap perusahaan Anda</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope fa-lg text-primary mr-3"></i>
                            <div>
                                <h5 class="mb-0">Email</h5>
                                <p class="mb-0">perusahaan@yandex.com<br>viktianasekong@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone-alt fa-lg text-primary mr-3"></i>
                            <div>
                                <h5 class="mb-0">Telepon</h5>
                                <p class="mb-0">+62 813 2420 1464</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <i class="fas fa-clock fa-lg text-primary mr-3"></i>
                            <div>
                                <h5 class="mb-0">Jam Operasional</h5>
                                <p class="mb-0">Senin - Sabtu: 08.00 - 17.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Kontak -->
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Kirim Pesan kepada Kami</h3>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .contact-info i {
        width: 24px;
        text-align: center;
    }
    .card {
        border-radius: 10px;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>

<?= $this->endSection() ?>