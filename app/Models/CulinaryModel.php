<?php

namespace App\Models;

use CodeIgniter\Model;

class CulinaryModel extends Model
{
    protected $table      = 'culinarys';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'jenis', 'alamat', 'telp', 'bintang', 'foto'];
}