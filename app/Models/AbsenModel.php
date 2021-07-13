<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenModel extends Model
{
    // ...
    protected $table = 'user';
    protected $id = 'nik';
    protected $useTimestamps = true;
    // dd($table);
}