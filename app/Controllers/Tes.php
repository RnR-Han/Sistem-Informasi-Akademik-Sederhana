<?php

namespace App\Controllers;

class Tes extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tes',
            'isi'   => 'coba'
        ];
        return view('layout/v_wrapper', $data);
    }
}
