<?= $this->extend('/layout/template') ?>

<?= $this->section('content') ?>
<section id="jenis-sampah" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">Pilih Kategori Sampah</h2>
        <div class="row g-3 justify-content-center">
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <button class="btn jenis-sampah-btn shadow-sm w-100 text-center p-3" data-bs-toggle="modal" data-bs-target="#bookingModal" data-kategori="Plastik" data-contoh="Botol plastik, Kantong plastik">
                    <i class="fas fa-prescription-bottle text-success"></i>
                    <h5 class="mt-2">Sampah Plastik</h5>
                </button>
            </div>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <button class="btn jenis-sampah-btn shadow-sm w-100 text-center p-3" data-bs-toggle="modal" data-bs-target="#bookingModal" data-kategori="Kertas" data-contoh="Kertas koran, Kardus">
                    <i class="fas fa-file-alt text-success"></i>
                    <h5 class="mt-2">Sampah Kertas</h5>
                </button>
            </div>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <button class="btn jenis-sampah-btn shadow-sm w-100 text-center p-3" data-bs-toggle="modal" data-bs-target="#bookingModal" data-kategori="Elektronik" data-contoh="TV rusak, Radio, Komputer bekas">
                    <i class="fas fa-tv text-success"></i>
                    <h5 class="mt-2">Sampah Elektronik</h5>
                </button>
            </div>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                <button class="btn jenis-sampah-btn shadow-sm w-100 text-center p-3" data-bs-toggle="modal" data-bs-target="#bookingModal" data-kategori="Serasah" data-contoh="Daun kering, Ranting pohon">
                    <i class="fas fa-leaf text-success"></i>
                    <h5 class="mt-2">Sampah Daun Kering</h5>
                </button>
            </div>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="500">
                <button class="btn jenis-sampah-btn shadow-sm w-100 text-center p-3" data-bs-toggle="modal" data-bs-target="#bookingModal" data-kategori="B3" data-contoh="Bahan kimia, Obat kadaluarsa">
                    <i class="fas fa-biohazard text-success"></i>
                    <h5 class="mt-2">Sampah B3</h5>
                </button>
            </div>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="600">
                <button class="btn jenis-sampah-btn shadow-sm w-100 text-center p-3" data-bs-toggle="modal" data-bs-target="#bookingModal" data-kategori="Kain" data-contoh="Baju bekas, Seprai, Handuk lama">
                    <i class="fas fa-tshirt text-success"></i>
                    <h5 class="mt-2">Sampah Kain</h5>
                </button>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Booking Penyetoran Sampah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/booking/saveBooking" method="post">
                    <div class="mb-3">
                        <label for="namaSampah" class="form-label">Nama Sampah</label>
                        <input type="text" class="form-control" id="namaSampah" name="nama_sampah" required>
                        <i id="contohSampah">Contoh: </i>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Sampah</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" readonly required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalBooking" class="form-label">Tanggal Booking</label>
                        <input type="date" class="form-control" id="tanggalBooking" name="created_at" required>
                    </div>
                    <button type="submit" class="btn btn-success">Submit Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const bookingModal = document.getElementById('bookingModal');
    bookingModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const kategori = button.getAttribute('data-kategori');
        const contoh = button.getAttribute('data-contoh');

        const modalKategoriInput = bookingModal.querySelector('#kategori');
        modalKategoriInput.value = kategori;

        const modalContohText = bookingModal.querySelector('#contohSampah');
        modalContohText.innerHTML = 'Contoh: ' + contoh;
    });
</script>

<?= $this->endSection() ?>