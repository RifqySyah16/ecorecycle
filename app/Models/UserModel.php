<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table          = 'user';
    protected $primaryKey     = 'nik';
    protected $allowedFields  = ['nama', 'username', 'email', 'no_telp', 'foto_profil', 'password'];
}
