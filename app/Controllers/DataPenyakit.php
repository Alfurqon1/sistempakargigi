<?php

namespace App\Controllers;

//Kita panggil model untuk menampung Penyakit
use App\Models\PenyakitModels;

class DataPenyakit extends BaseController
{
    public function dataPenyakit()
    {
        // Periksa apakah dokter sudah login
        $session = session();
        if (!$session->get('isLoggedInDokter')) {
            // Jika belum login, arahkan ke halaman login
            return redirect()->to('/loginDokter');
        }

        $penyakit = new PenyakitModels();
        $data = [
            'title' => 'Data Penyakit',
            'penyakit' => $penyakit->findAll()
        ];
        return view('dokter/ViewDataPenyakit', $data);
    }

    //tambah Penyakit
    public function tambahPenyakit()
    {
        $penyakitModel = new PenyakitModels();

    // Ambil jumlah penyakit yang sudah ada di database
    $jumlahPenyakit = count($penyakitModel->findAll());

    // Tambah 1 untuk mendapatkan id penyakit baru
    $idPenyakitBaru = $jumlahPenyakit + 1;

    $data = [
        'title' => 'Tambah Penyakit',
        'id_penyakit' => $idPenyakitBaru // Mengirimkan id_penyakit baru ke view
    ];
    return view('dokter/tambahPenyakit', $data);
    }

   //upload penyakit
   public function uploadPenyakit()
   {
    $penyakit = new PenyakitModels();

    //validasi 
    $rules= [
         'id_penyakit'=> [
            'rules' => 'required|is_unique[penyakit.id_penyakit]',
            'errors' => [
                'required' => 'ID Penyakit wajib di isi',
                'is_unique' => 'ID sudah ada'
            ]
        ],
        
        'nama_penyakit'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Penyakit wajib di isi',
            ]
        ],

        'pengertian_penyakit'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pengertian Penyakit wajib di isi',
            ]
        ],

        'penyebab'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Penyebab wajib di isi',
            ]
        ],

        'sp_mandiri'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Saran Perawatan Mandiri wajib di isi',
            ]
        ],

        'sp_spesifik'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Saran Perawatan Spesifik wajib di isi',
            ]
        ],
        
        'image_penyakit'=> [
             'rules' => 'uploaded[image_penyakit]|max_size[image_penyakit, 2048]|mime_in[image_penyakit, image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded'  => 'Image Harus di Isi',
                    'max-size'  => 'File Maksimal 2MB',
                    'mime_in'   => 'File harus berupa gambar / foto'
                ]
        ]
    ];

    //validasi error
    if(!$this->validate($rules)){
        session()->setFlashdata('errors', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }
    

    //ambil file yang di upload
    $image_penyakit = $this->request->getFile('image_penyakit');
    //ambil nama file yg di upload
    $namaFoto = $image_penyakit->getRandomName();
    //pindahkan file ke direktori imgPenyakit
    $image_penyakit->move('imgPenyakit', $namaFoto);

    
    $penyakit -> uploadPenyakit([
        'id_penyakit'=>$this->request->getPost('id_penyakit'),
        'nama_penyakit'=> $this->request->getPost('nama_penyakit'),
        'pengertian_penyakit'=> $this->request->getPost('pengertian_penyakit'),
        'penyebab'=> $this->request->getPost('penyebab'),
        'sp_mandiri'=> $this->request->getPost('sp_mandiri'),
        'sp_spesifik'=> $this->request->getPost('sp_spesifik'),
        'image_penyakit'=> $namaFoto,
    ]);

     //validasi berhasil
    session()->setFlashdata('success', 'Data Penyakit Berhasil Di Upload');

    return redirect()->to('dataPenyakit');
   }

   //detail penyakit
   public function detailPenyakit($id_penyakit)
   {
    $penyakit = new PenyakitModels();

    //cek jika tidak ada data
    if(empty($penyakit->where('id_penyakit', $id_penyakit)->first())){
        return redirect()->to('dataPenyakit');
    }

    $data = [
        'title' => 'Detail Penyakit',
        'penyakit' => $penyakit->where('id_penyakit', $id_penyakit)->first()
    ];

    return view('dokter/detailPenyakit', $data);
   }

   //delete penyakit
   public function deletePenyakit($id_penyakit)
   {
    $penyakit = new PenyakitModels();
    $penyakit_data = $penyakit->find($id_penyakit);

     if (is_array($penyakit_data)) {
        // Ambil nama file gambar dari data blog
        $image_penyakit = $penyakit_data['image_penyakit'];

        // Hapus file gambar dari direktori 'imgBlog'
        $path_to_img = FCPATH . 'imgPenyakit' . DIRECTORY_SEPARATOR . $image_penyakit;
        if (file_exists($path_to_img)) {
            unlink($path_to_img);
        }
    }

    $penyakit -> where('id_penyakit', $id_penyakit)->delete();

    //validasi berhasil
    session()->setFlashdata('success', 'Data Penyakit Berhasil Di Hapus');
    return redirect()->to('dataPenyakit');
   }

   //edit penyakit
   public function editPenyakit ($id_penyakit)
   {
    $penyakit = new PenyakitModels();
    $data = [
        'title' => 'edit penyakit',
        'penyakit' => $penyakit->where('id_penyakit', $id_penyakit)->first()
    ];

    return view('dokter/editPenyakit', $data);
   }

   //update penyakit
   public function updatePenyakit($id_penyakit)
   {
    $penyakit = new PenyakitModels();

        //validasi 
    $rules= [
         'id_penyakit'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'ID Penyakit wajib di isi',
            ]
        ],
        
        'nama_penyakit'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Penyakit wajib di isi',
            ]
        ],
        
        'pengertian_penyakit'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pengertian Penyakit wajib di isi',
            ]
        ],

        'penyebab'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Penyebab wajib di isi',
            ]
        ],

        'sp_mandiri'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Saran Perawatan Mandiri wajib di isi',
            ]
        ],

        'sp_spesifik'=> [
            'rules' => 'required',
            'errors' => [
                'required' => 'Saran Perawatan Spesifik wajib di isi',
            ]
        ],

        'image_penyakit'=> [
             'rules' => 'max_size[image_penyakit, 2048]|mime_in[image_penyakit, image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size'  => 'File Maksimal 2MB',
                    'mime_in'   => 'File harus berupa gambar / foto'
                ]
        ]
    ];

     //validasi error
    if(!$this->validate($rules)){
        session()->setFlashdata('errors', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }


    $oldData = $penyakit->find($id_penyakit);
   
    //ambil nama file lama
    $oldImage = $oldData['image_penyakit'];

    $image_penyakit = $this->request->getFile('image_penyakit');

    // Jika ada file baru yang diunggah
    if ($image_penyakit->isValid() && !$image_penyakit->hasMoved()) {
        // Hapus file lama
        unlink('imgPenyakit/' . $oldImage);
        
        // Simpan file baru
        $newImage = $image_penyakit->getRandomName();
        $image_penyakit->move('imgPenyakit', $newImage);
    } else {
        // Jika tidak ada file baru, gunakan file lama
        $newImage = $oldImage;
    }

    
    $penyakit -> where('id_penyakit', $id_penyakit)->update(null, [
        'id_penyakit'=>$this->request->getPost('id_penyakit'),
        'nama_penyakit'=> $this->request->getPost('nama_penyakit'),
        'pengertian_penyakit'=> $this->request->getPost('pengertian_penyakit'),
        'penyebab'=> $this->request->getPost('penyebab'),
        'sp_mandiri'=> $this->request->getPost('sp_mandiri'),
        'sp_spesifik'=> $this->request->getPost('sp_spesifik'),
        'image_penyakit'=> $newImage,
    ]);

    //validasi berhasil
    session()->setFlashdata('success', 'Data Penyakit Berhasil Di Ubah');
    return redirect()->to('dataPenyakit');

   }
}

?>