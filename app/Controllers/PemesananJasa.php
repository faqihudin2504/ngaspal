<?php

namespace App\Controllers;

use App\Models\PemesananJasaModel;

class PemesananJasa extends BaseController
{
    protected $pemesananModel;

    public function __construct()
    {
        $this->pemesananModel = new PemesananJasaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pemesanan Jasa',
            'validation' => \Config\Services::validation()
        ];
        return view('pemesanan_jasa', $data);
    }

    public function simpan()
    {
        // Validation rules
        $rules = [
            'nama_lengkap' => 'required',
            'no_telepon' => 'required',
            'tanggal_waktu' => 'required',
            'alamat' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/pemesanan-jasa')->withInput();
        }

        $this->pemesananModel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'no_telepon' => $this->request->getVar('no_telepon'),
            'tanggal_waktu' => $this->request->getVar('tanggal_waktu'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        return redirect()->to('/pemesanan-jasa')->with('pesan', 'Pemesanan berhasil dikirim');
    }
}