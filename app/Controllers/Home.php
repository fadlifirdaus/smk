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
    public function register()
    {
        return view('auth/create');
    }
    public function absensi()
    {
        return view('absensi');
    }
}
