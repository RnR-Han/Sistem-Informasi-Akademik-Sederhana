<?php

namespace App\Controllers;

use App\Models\ModelGedung;

class Gedung extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelGedung = new ModelGedung();
    }
    public function index()
    {
        $data = [
            'title'     => 'Gedung',
            'gedung'  => $this->ModelGedung->allData(),
            'isi'       => 'admin/v_gedung'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'gedung' => $this->request->getPost('gedung'),
        ];
        $this->ModelGedung->add($data);
        session()->setFlashdata('pesan','Data Berhasil Di Tambahkan !!');
        return redirect()->to(base_url('gedung'));
    }

    public function edit($id_gedung)
    {
        $data = [
            'id_gedung'=> $id_gedung,
            'gedung' => $this->request->getPost('gedung'),
        ];
        $this->ModelGedung->edit($data);
        session()->setFlashdata('pesan','Data Berhasil Di Update !!');
        return redirect()->to(base_url('gedung'));
    }
    public function delete($id_gedung)
    {
        $data = [
            'id_gedung'=> $id_gedung,
        ];
        $this->ModelGedung->delete_data($data);
        session()->setFlashdata('pesan','Data Berhasil Di Hapus !!');
        return redirect()->to(base_url('gedung'));
    }
}
