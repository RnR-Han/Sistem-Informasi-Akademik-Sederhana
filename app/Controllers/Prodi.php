<?php

namespace App\Controllers;
use App\Models\ModelProdi;

class Prodi extends BaseController
{
    public function __construct()
    {
        $this->ModelProdi=new ModelProdi();
    }
    public function index()
    {
        $data = [
            'title' => 'Program Studi',
            'prodi' => $this->ModelProdi->allData(),
            'isi'   => 'admin/prodi/v_index'
        ];
        return view('layout/v_wrapper', $data);
    }
}
