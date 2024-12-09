<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table      = 'booking';
    protected $primaryKey = 'id_booking';
    protected $allowedFields = ['nama_sampah', 'kategori', 'created_at'];
}
