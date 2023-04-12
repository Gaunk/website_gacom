<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['judul']  = 'Gacom - Toko Komputer Online';
        echo view('layout/head', $data);
        echo view('index');
        echo view('layout/foot');
    }
}
