<?php

namespace App\Controllers;

class Auth extends BaseController
{
  public function login()
  {
    $data = [
      'title' => 'Halaman Login',
    ];

    return view('pages/auth/login', $data);
  }

  public function regist()
  {
    $data = [
      'title' => 'Halaman Registrasi',
    ];

    return view('pages/auth/regist', $data);
  }
}
