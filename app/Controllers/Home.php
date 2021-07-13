<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('auth/login');
    }
    public function admin($subadmin)
    {
        return view('admin/'.$subadmin);
    }
    public function absensi()
    {
        return view('absensi');
    }
    public function profile()
    {
        return view('profile');
    }
}
