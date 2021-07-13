<?php

namespace App\Controllers;

use \App\Models\AbsenModel;

class Absensi extends BaseController
{
    protected $ModelAbsen;
    protected $hai;
    public function __construct()
    {
        $this->ModelAbsen = new AbsenModel();
    }
    public function index()
    {
        $id = $this->ModelAbsen->FindAll();
        dd($id);
        echo base_url();
        // return view('absensi');

    }
}
