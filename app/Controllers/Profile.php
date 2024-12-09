<?php

namespace App\Controllers;

class Profile extends BaseController
{
  public function ticket()
  {
    $data = [
      'title' => 'Halaman Ticket',
    ];

    return view('pages/profile/ticket', $data);
  }
}
