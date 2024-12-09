<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section id="ticket-booking" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">Tiket Booking Terakhir</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card booking-ticket p-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4 class="fw-bold">Tiket</h4>
                        </div>
                        <div class="mb-3 text-center">
                            <p>TCKT123456</p>
                        </div>
                        <div class="text-center mt-4">
                            <button id="ticketButton" class="btn btn-success btn-lg" data-aos="zoom-in" data-aos-duration="500">Tampilkan Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ticket-list" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">Daftar Riwayat Tiket Booking</h2>
        <div class="table-responsive" data-aos="fade-up" data-aos-duration="1000">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal Booking</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>12 Juli 2024</td>
                        <td><span class="badge bg-success">Terkonfirmasi</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">Detail</button>
                            <button class="btn btn-danger btn-sm">Batalkan</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>15 Juli 2024</td>
                        <td><span class="badge bg-warning text-dark">Menunggu Konfirmasi</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">Detail</button>
                            <button class="btn btn-danger btn-sm">Batalkan</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>18 Juli 2024</td>
                        <td><span class="badge bg-secondary">Dibatalkan</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">Detail</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticketModalLabel">Ticket Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ticket" data-aos="fade-up">
                    <div class="ticket-body">
                        <div class="ticket-info">
                            <p><strong>Kode Ticket:</strong> TCKT123456</p>
                            <p><strong>NIK:</strong> 1234567890123456</p>
                            <p><strong>Nama:</strong> John Doe</p>
                            <p><strong>Tanggal Booking:</strong> Jumat, 5 Juli 2024</p>
                        </div>
                    </div>
                </div>
                <i class="text-center">Berlaku hingga 5 Juli 2024 23.59.59</i>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();

        var ticketButton = document.getElementById('ticketButton');
        var ticketModal = new bootstrap.Modal(document.getElementById('ticketModal'));

        ticketButton.addEventListener('click', function() {
            ticketModal.show();
        });
    });
</script>

<?= $this->endSection() ?>