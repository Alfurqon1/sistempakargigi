<?php

namespace App\Controllers;

use App\Models\KonsultasiModels;

class DataKonsultasiPasien extends BaseController
{
    public function dataKonsultasiPasien()
    {
        $konsultasiModel = new KonsultasiModels();
        $data = $konsultasiModel->findAll();

        return view('dokter/ViewKonsultasiPasien', [
            'title' => 'List Konsultasi Pasien',
            'dataKonsulPasien' => $data
        ]);
    }

    public function dataPostKonsultasiPasien()
    {
        $session = session();

        
        // Periksa apakah pengguna sudah login
        if ($session->has('isLoggedIn')) {
            $konsultasiModel = new KonsultasiModels();
            
            // Ambil nama pengguna dari sesi
            $username = $session->userData['username'];

            // Ambil data konsultasi dari permintaan POST
            $data = [
                'username' => $username,
                'waktu_konsultasi' => date('Y-m-d H:i:s')
            ];

            // Simpan data konsultasi menggunakan model
            $konsultasiModel->insert($data);
        }

        // Alihkan ke WhatsApp
        return redirect()->to('https://wa.me/628567844215');
    }
}
