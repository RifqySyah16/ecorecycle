<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Halaman Utama',
    ];

    return view('pages/index', $data);
  }
}
