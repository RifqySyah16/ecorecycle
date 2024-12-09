<?php

namespace App\Controllers;

class Booking extends BaseController
{
  protected $bookingModel;

  public function button()
  {
    $data = [
      'title' => 'Pilih Jenis Sampah',
    ];

    return view('pages/booking/button', $data);
  }

  public function saveBooking()
  {
    $namaSampah = $this->request->getVar('nama_sampah');
    $jenisSampah = $this->request->getVar('kategori');
    $tanggalBooking = $this->request->getVar('created_at');

    $data = [
      'nama_sampah' => $namaSampah,
      'jenis_sampah' => $jenisSampah,
      'created_at' => $tanggalBooking,
    ];

    // dd($data);

    $this->bookingModel->save($data);

    return redirect()->to('/booking/button');
  }
}
