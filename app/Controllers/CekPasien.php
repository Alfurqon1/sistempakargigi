<?php
namespace App\Controllers;

use App\Models\AuthModels;
use App\Models\GejalaModels;
use App\Models\DetailBasisAturanModels;
use App\Models\DiagnosaPasienModel;


class Cekpasien extends BaseController
{
    public function cekKesehatanPasien()
    {
        // Periksa apakah pengguna sudah login
        $session = session();
        if (!$session->get('isLoggedIn')) {
            // Jika belum login, arahkan ke halaman login
            return redirect()->to('/loginPasien');
        }
        
        $gejalaModel = new GejalaModels();
        $gejala = $gejalaModel->findAll();
        $data = [
            'title'=> 'Cek Kesehatan',
            'gejala' => $gejala
        ];
       return view('pasien/ViewCekPasien', $data);
    }

    public function prosesCekKesehatan()
    {
        // Ambil gejala yang dipilih dari form
        $selectedGejala = $this->request->getPost('id_gejala');

        // Load model DetailBasisAturanModel
        $detailBasisAturanModel = new DetailBasisAturanModels();

        //validasi 
        $rules= [
            'id_gejala'=> [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih setidaknya 1 gejala',
                ]
            ],
        ];

        //validasi error
        if(!$this->validate($rules)){
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // Lakukan pencarian penyakit berdasarkan gejala-gejala yang dipilih
        $hasilDiagnosa = $detailBasisAturanModel->diagnosa($selectedGejala);
        
        // Ambil data pengguna yang sedang login dari session
        $username = session()->get('userData')['username'];

        // Ambil satu data penyakit pertama dari hasil diagnosa
        $penyakit = reset($hasilDiagnosa);

        // Simpan data diagnosa ke model DiagnosaPasienModel
        $listPasien = new DiagnosaPasienModel();
        $listPasien->uploadDataDiagnosa([
            'username' => $username,
            'nama_penyakit' => $penyakit->nama_penyakit,
            'waktu_diagnosa' => date('Y-m-d H:i:s'),
        ]);

        $data = [
            'title'=> 'Hasil Diagnosa',
            'hasilDiagnosa' => $hasilDiagnosa
        ];

        // Tampilkan hasil diagnosa kepada pasien
        return view('pasien/hasil_diagnosa', $data);
    }


}
?>