<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table          = 'kategori';
    protected $primaryKey     = 'id_jenis';
    protected $allowedFields  = ['jenis_sampah'];
}
