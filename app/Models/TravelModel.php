<?php

namespace App\Models;

use CodeIgniter\Model;

class TravelModel extends Model
{
    protected $table      = 'travels';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'jenis', 'alamat', 'telp', 'bintang', 'foto'];

}

