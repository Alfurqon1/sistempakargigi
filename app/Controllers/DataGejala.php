<?php

namespace App\Controllers;

use App\Models\GejalaModels;


class DataGejala extends BaseController
{
    public function dataGejala()
    {
         // Periksa apakah dokter sudah login
        $session = session();
        if (!$session->get('isLoggedInDokter')) {
            // Jika belum login, arahkan ke halaman login
            return redirect()->to('/loginDokter');
        }

        $gejala = new GejalaModels();

        $data = [
            'title'=> 'Data Gejala',

            'gejala'=> $gejala->findAll()
        ];
       return view('dokter/ViewDataGejala', $data);
    }

    // tambahGejala
    public function tambahGejala()
    {
        $gejalaModel = new GejalaModels();

        // Ambil ID Gejala terakhir dari database
    $lastGejala = $gejalaModel->orderBy('id_gejala', 'DESC')->first();
    
    // Jika sudah ada ID Gejala sebelumnya
    if ($lastGejala) {
        // Ubah ID Gejala menjadi angka berikutnya
        $newIdGejala = $lastGejala['id_gejala'] + 1;
    } else {
        // Jika belum ada ID Gejala sebelumnya, atur ID Gejala pertama
        $newIdGejala = 1;
    }
    
    $data = [
        'title' => 'Tambah Gejala',
        'id_gejala' => $newIdGejala // Tambahkan ID Gejala ke data yang akan ditampilkan pada view
    ];
    
    return view('dokter/tambahGejala', $data);
    }

    //Upload Gejala
    public function uploadGejala()
    {
       $gejala = new GejalaModels();

       //membuat validasi
       $rules = [
         'id_gejala' => [
            'rules'     => 'required|is_unique[gejala.id_gejala]',
            'errors'    => [
                'required'  => 'ID Gejala Wajib Di Isi',
                'is_unique' => 'ID Gejala Sudah Digunakan'
                ]
            ],
        'nama_gejala' => [
            'rules'        => 'required',
            'errors'       => [
                'required'  => 'Nama Gejala Wajib Di Isi'
                ]
            ],
    ];


       if(!$this->validate($rules)){
        return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
       }
       $gejala->uploadGejala([

        'id_gejala' =>  $this->request->getPost('id_gejala'),

        'nama_gejala' =>  $this->request->getPost('nama_gejala')

       ]);

       session()->setFlashdata('success', 'Data Gejala Berhasil ditambah');
       return redirect()->to('dataGejala');
    }

    //delete gejala
    public function deleteGejala($id_gejala)
    {
        $gejala = new GejalaModels();
        $gejala->where('id_gejala', $id_gejala)->delete();

        $gejala->resetAutoIncrement();

        session()->setFlashdata('success', 'Data Gejala Berhasil diHapus');
        return redirect()->to('dataGejala');
    }

    //edit gejala
    public function editGejala($id_gejala)
    {
        $gejala = new GejalaModels();
        $data = [
            'title' => 'Edit Gejala',
            'gejala' => $gejala->where('id_gejala',$id_gejala)->first()
        ];

        return view('dokter/editGejala', $data);
    }

    //update gejala
    public function updateGejala($id_gejala)
    {
        $gejala = new GejalaModels();

         //membuat validasi
       $rules = [
         'id_gejala' => [
            'rules'     => 'required',
            'errors'    => [
                'required'  => 'ID Gejala Wajib Di Isi',
                ]
            ],
        'nama_gejala' => [
            'rules'        => 'required',
            'errors'       => [
                'required'  => 'Nama Gejala Wajib Di Isi'
                ]
            ],
    ];


       if(!$this->validate($rules)){
        return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
       }

        $gejala->where('id_gejala', $id_gejala)->update(null, $this->request->getGetPost());

        return redirect()->to('dataGejala')->with('success', 'Data Gejala Berhasil Di Ubah');
    }

}
?>