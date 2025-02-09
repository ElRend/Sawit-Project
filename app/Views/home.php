<?= $this->extend('layouts/guest') ?>

<?= $this->section('content') ?>
<?= $this->include('layouts/navbar') ?>

<!-- Hero Section -->
<section class="hero-section text-white py-5 min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 text-white fw-bold mb-4">Perkebunan Sawit Muhammad Fazil Chandra</h1>
                <p class="lead mb-4">Sebuah Perusahaan yang menjunjung tinggi Kualitas, dan Kenyamanan Pelanggan</p>
                <a href="#seedSection">
                    <button class="btn btn-light btn-lg">Learn More</button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Seed Section -->
<section id="seedSection" class="seed-section py-5 min-vh-100 d-flex align-items-center">
    <div class="container">
        <h1 class="text-center fw-bold mb-5">Company Data</h1>
        
        <<!-- Statistics Cards -->
          <div class="row g-4 justify-content-center mb-5">
              <div class="col-md-5">
                  <div class="card stats-card text-center h-100 border-0">
                      <div class="card-body">
                          <i class="bi bi-tree text-success display-1 mb-3"></i>
                          <h2 class="display-4 fw-bold text-success mb-2"><?= $jenis_bibit_count ?></h2>
                          <h3 class="h5 text-muted mb-3">Jenis Bibit Tersedia</h3>
                          <p class="text-muted">Jumlah jenis bibit yang telah terdaftar dan siap untuk ditanam.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-5">
                  <div class="card stats-card text-center h-100 border-0">
                      <div class="card-body">
                          <i class="bi bi-gear text-primary display-1 mb-3"></i>
                          <h2 class="display-4 fw-bold text-primary mb-2"><?= $produksi_count ?></h2>
                          <h3 class="h5 text-muted mb-3">Data Produksi Aktif</h3>
                          <p class="text-muted">Jumlah data produksi yang sedang berjalan dan diproses saat ini.</p>
                      </div>
                  </div>
              </div>
          </div>


        </div>
    </div>
</section>

<!-- Team Section -->
<section id="portofolio" class="team-section py-5 bg-light min-vh-100 d-flex align-items-center">
    <div class="container">
        <h1 class="text-center my-5 fw-bold">My Portofolio</h1>
        <div class="row mb-5 d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <img src="<?= base_url('assets_bootstrap/img/portofolio.png') ?>" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Fazil Chandra</h5>
                        <p class="card-text text-muted">Full Stack Developer</p>
                        <p class="card-text">210401087 (Universitas Muhammadiyah Riau)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('layouts/footer') ?>

<?= $this->endSection() ?>
