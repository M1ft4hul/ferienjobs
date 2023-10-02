<?php

namespace App\Models;

use CodeIgniter\Model;

class SaldoM extends Model
{
    protected $table            = 'tb_saldo';
    protected $allowedFields    = ['id', 'kode_koord', 'saldo'];

    // Dates
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
}
