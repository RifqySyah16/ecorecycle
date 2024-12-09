<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Carousel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/dummy.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="img/dummy.jpg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="img/dummy.jpg" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end carousel -->

<!-- about -->
<section id="about" class="py-5">
    <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right">
            <h2>Apa Itu ECORCYCLE?</h2>
            <p><b class="ecorcycle">ECORCYCLE</b> adalah bank sampah dengan solusi inovatif untuk pengelolaan sampah secara terintegrasi, di mana masyarakat dapat menyetorkan sampah, untuk mengurangi jumlah sampah yang menumpuk.</p>
            <ul class="list-unstyled">
                <li><i class="fas fa-recycle"></i> Mengurangi volume sampah di lingkungan</li>
                <li><i class="fas fa-leaf"></i> Mendukung program daur ulang</li>
                <li><i class="fas fa-hand-holding-heart"></i> Meningkatkan kesadaran masyarakat</li>
                <li><i class="fas fa-people-carry"></i> Membantu ekonomi lokal</li>
            </ul>
        </div>
        <div class="col-md-6" data-aos="fade-left">
            <img src="img/recycle.png" alt="Gambar Bank Sampah" class="img-fluid">
        </div>
    </div>
</section>
<!-- end about -->

<!-- Prosedur -->
<section id="prosedur" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">Prosedur Penyetoran Sampah</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card text-center bg-white shadow mb-4 mod">
                    <div class="card-body">
                        <span class="icon"><i class="fas fa-user-plus fa-3x text-success"></i></span>
                        <h5 class="card-title mt-3">Pendaftaran Akun</h5>
                        <p class="card-text text-muted">Daftar akun dengan mengisi data diri pada form.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card text-center bg-white shadow mb-4 mod">
                    <div class="card-body">
                        <span class="icon"><i class="fas fa-sign-in-alt fa-3x text-success"></i></span>
                        <h5 class="card-title mt-3">Login</h5>
                        <p class="card-text text-muted">Masuk ke akun menggunakan kredensial Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card text-center bg-white shadow mb-4 mod">
                    <div class="card-body">
                        <span class="icon"><i class="fas fa-calendar-check fa-3x text-success"></i></span>
                        <h5 class="card-title mt-3">Booking & Ticketing</h5>
                        <p class="card-text text-muted">Booking jadwal kunjungan ke bank sampah dan dapatkan tiket.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card text-center bg-white shadow mb-4 mod">
                    <div class="card-body">
                        <span class="icon"><i class="fas fa-map-marker-alt fa-3x text-success"></i></span>
                        <h5 class="card-title mt-3">Datang ke Bank Sampah</h5>
                        <p class="card-text text-muted">Kunjungi lokasi bank sampah sesuai dengan jadwal.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card text-center bg-white shadow mb-4 mod">
                    <div class="card-body">
                        <span class="icon"><i class="fas fa-ticket-alt fa-3x text-success"></i></span>
                        <h5 class="card-title mt-3">Tunjukkan Tiket</h5>
                        <p class="card-text text-muted">Tunjukkan tiket booking kepada petugas, kemudian scan QR Code.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card text-center bg-white shadow mb-4 mod">
                    <div class="card-body">
                        <span class="icon"><i class="fas fa-recycle fa-3x text-success"></i></span>
                        <h5 class="card-title mt-3">Setor Sampah</h5>
                        <p class="card-text text-muted">Lakukan proses setor sampah sesuai dengan petunjuk.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Prosedur -->

<!-- Kontak -->
<section id="kontak" class="kontak-section py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Kontak Kami</h2>
        <div class="row">
            <!-- Informasi Kontak -->
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow-sm">
                    <div class="card-body text-center shadow-sm">
                        <i class="fas fa-map-marker-alt fa-3x mb-3 text-success"></i>
                        <h5 class="card-title">Alamat</h5>
                        <p class="card-text">Jalan Example No. 123, Jakarta, Indonesia</p>
                    </div>
                </div>
                <div class="card shadow-sm mt-4">
                    <div class="card-body text-center shadow-sm">
                        <i class="fas fa-phone fa-3x mb-3 text-success"></i>
                        <h5 class="card-title">Telepon</h5>
                        <p class="card-text">+62 8XX-XXXX-XXXX</p>
                    </div>
                </div>
                <div class="card shadow-sm mt-4">
                    <div class="card-body text-center shadow-sm">
                        <i class="fas fa-envelope fa-3x mb-3 text-success"></i>
                        <h5 class="card-title">Email</h5>
                        <p class="card-text">info@banksampah.com</p>
                    </div>
                </div>
            </div>
            <!-- Form Kontak -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center shadow-sm">Hubungi Admin</h5>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Kontak -->

<!-- Scroll To Top -->
<a href="#" class="scroll-to-top">
    <i class="fas fa-arrow-up"></i>
</a>
<!-- End Scroll To Top -->
<?= $this->endSection() ?>