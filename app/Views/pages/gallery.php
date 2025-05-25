<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="container">
<div class="text-center my-5">
    <h1 class="mt-1" style="font-size: 1.5rem;">Gallery Portfolio Projek yang Telah Kami Selesaikan</h1>
    <h2 class="mt-1" style="font-size: 2rem;">Gallery Portfolio Projek CV. Djana Aspalt</h2>
</div>

    <div class="row gallery-container">
        <!-- Gallery Item 1 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image1.png" class="card-img-top" alt="Projek 1">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 1</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>

        <!-- Gallery Item 2 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image2.png" class="card-img-top" alt="Projek 2">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 2</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>

        <!-- Gallery Item 3 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image3.png" class="card-img-top" alt="Projek 3">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 3</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>

        <!-- Gallery Item 4 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image4.png" class="card-img-top" alt="Projek 4">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 4</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image5.png" class="card-img-top" alt="Projek 5">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 5</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image6.png" class="card-img-top" alt="Projek 6">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 6</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image7.png" class="card-img-top" alt="Projek 7">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 7</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image8.png" class="card-img-top" alt="Projek 8">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 8</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="col-md-4 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/image9.png" class="card-img-top" alt="Projek 9">
                <div class="card-body">
                    <h5 class="card-title">Nama Projek 9</h5>
                    <p class="card-text">Deskripsi singkat projek</p>
                </div>
            </div>
        </div>

        <!-- Tambahkan item gallery lainnya sesuai kebutuhan -->
    </div>
</div>

<style>
    .gallery-item {
        transition: transform 0.3s;
    }
    .gallery-item:hover {
        transform: scale(1.03);
    }
    .card {
        height: 100%;
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>

<?= $this->endSection() ?>