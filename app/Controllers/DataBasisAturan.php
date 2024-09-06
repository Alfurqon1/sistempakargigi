<?php

namespace App\Controllers;

//kita panggil model untuk menampung Data Basis Aturan
use App\Models\BasisAturanModels;
use App\Models\PenyakitModels;
use App\Models\GejalaModels;
use App\Models\DetailBasisAturanModels;


class DataBasisAturan extends BaseController
{

  //Menampilkan semua data basis aturan yang ada di tabel basis_aturan.
  public function dataBasisAturan()
  {
        //Memeriksa apakah dokter sudah login. Jika belum, maka akan diarahkan ke halaman login.
        $session = session();
        if (!$session->get('isLoggedInDokter')) {
            // Jika belum login, arahkan ke halaman login
            return redirect()->to('/loginDokter');
        }

    $aturan = new BasisAturanModels();
    $penyakitModel = new PenyakitModels();

    $data = [
      'title' => 'Data Basis Aturan',

      'aturan' => $aturan -> findAll(),

      'penyakitModel'=> $penyakitModel
    ];

    //Mengirim data tersebut ke view ViewDataBasisAturan untuk ditampilkan.
    return view('dokter/ViewDataBasisAturan', $data);
  }

  //Menampilkan halaman untuk menambahkan data basis aturan baru.
  public function tambahDataBasisAturan()
  {
    //Mengambil semua data penyakit dan gejala dari database.
    $penyakitModel = new PenyakitModels();
    $gejalaModel = new GejalaModels();
    $penyakit = $penyakitModel->findAll();
    $gejala = $gejalaModel->findAll();
    $data = [
      'title' => 'Tambah Basis Aturan',
      'penyakit' => $penyakit,
      'gejala' => $gejala
    ];
    
    //Mengirim data tersebut ke view tambahDataBasisAturan untuk ditampilkan dalam form.
    return view('dokter/tambahDataBasisAturan', $data);
  }

  //Menyimpan data basis aturan baru yang diinputkan oleh pengguna.
  public function uploadBasisAturan()
  {

    //Mengambil data penyakit dan gejala yang diinputkan dari form.
    $id_penyakit = $this->request->getPost('id_penyakit');
    $gejala_id = $this->request->getPost('id_gejala'); 
    
    //Memvalidasi input untuk memastikan bahwa penyakit dan gejala yang dipilih valid dan unik.
    $rules = [
      'id_penyakit' => [
         'rules'   => 'required|is_unique[basis_aturan.id_penyakit]',
         'errors'  =>  [
            'required' => 'Wajib memilih penyakit',
            'is_unique' => 'Aturan penyakit tersebut sudah ada'
         ]
      ],
        'id_gejala' => [
        'rules'   => 'required',
        'errors'  =>  [
          'required' => 'Wajib memilih gejala'
        ]
      ]
    ];

    //mengecek validasi, jika validasi var rules tidak ada maka kembali ke halaman sebelumnya dan munculkan pesan error
       if(!$this->validate($rules)){
        return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
       }

    //Menyimpan data penyakit ke tabel basis_aturan.
    $aturan = new BasisAturanModels();
    $basis_aturan_id = $aturan->insert([
      'id_penyakit' => $id_penyakit
    ]);

    //Menyimpan data gejala yang terkait ke tabel detail_basis_aturan.
    $detailAturan = new DetailBasisAturanModels();
    foreach($gejala_id as $id_gejala){
      $detailAturan->insert([
        'id_basis_aturan' => $basis_aturan_id,
        'id_gejala' => $id_gejala
      ]);
    }

      //Menampilkan pesan sukses dan mengarahkan kembali ke halaman data basis aturan.
      session()->setFlashdata('success', 'Data basis aturan Berhasil ditambah');

      return redirect()->to('dataBasisAturan');
  }

  //Menampilkan detail dari sebuah basis aturan tertentu.
  public function detailBasisAturan($id_penyakit)
  {
    $aturan = new BasisAturanModels();
    $penyakitModel = new PenyakitModels();
    $detailAturan = new DetailBasisAturanModels();
    $gejalaModel = new GejalaModels();

    //Memeriksa apakah id_penyakit valid.
    $penyakit = $penyakitModel->find($id_penyakit);
    if (!$penyakit) {
        return redirect()->to('/dokter/dataBasisAturan');
    }
    
    //Mengambil data basis aturan berdasarkan id_penyakit.
    $basisAturan = $aturan->where('id_penyakit', $id_penyakit)->first();
    
    //Mengambil data gejala-gejala yang terkait dengan basis aturan tersebut.
    $detailBasisAturan = $detailAturan->where('id_basis_aturan', $basisAturan['id_basis_aturan'])->findAll();

    //Ambil nama gejala
    $gejala= [];
    foreach($detailBasisAturan as $detail){
      $gejala[] = $gejalaModel->find($detail['id_gejala']);
    }

    //Mengirim data penyakit dan gejala ke view detailBasisAturan untuk ditampilkan.
    $data = [
        'title' => 'Detail Penyakit',
        'penyakit' => $penyakit,
        'gejala' => $gejala
    ];

    return view('dokter/detailBasisAturan', $data);
  }

  //Menghapus sebuah basis aturan berdasarkan id_penyakit.
  public function deleteBasisAturan($id_penyakit)
  {
    $aturan = new BasisAturanModels();
    $aturan -> where('id_penyakit', $id_penyakit)->delete();

    session()->setFlashdata('success', 'Data Basis Aturan Berhasil diHapus');
    $aturan->resetAutoIncrement();
    return redirect()->to('dataBasisAturan');
  }

  //edit basis aturan
  public function editBasisAturan($id_penyakit)
  {
    $aturan = new BasisAturanModels();

    //Ambil data penyakit berdasarkan id_penyakit
    $penyakitModel = new PenyakitModels();
    $penyakit = $penyakitModel->find($id_penyakit);
    
    //Ambil semua penyakit
    $allPenyakit = $penyakitModel->findAll();

     // Cek apakah id_penyakit valid
    if (!$penyakit) {
        return redirect()->to('/dokter/dataBasisAturan');
    }

    //Ambil  data basis aturan berdasarkan id_penyakit
    $basisAturan = $aturan->where('id_penyakit', $id_penyakit)->first();

    //Ambil gejala-gejala yang terkait dengan basis aturan
    $detailAturan = new DetailBasisAturanModels();
    $detailBasisAturan = $detailAturan->where('id_basis_aturan', $basisAturan['id_basis_aturan'])->findAll();

    //Ambil nama gejala
    $gejalaModel = new GejalaModels();
    $allGejala = $gejalaModel->findAll();
    $gejala = [];
    foreach($allGejala as $g){
      $gejala[] = [
        'id_gejala' =>$g['id_gejala'],
        'nama_gejala'=>$g['nama_gejala'],
        'checked'=>in_array($g['id_gejala'], array_column($detailBasisAturan, 'id_gejala'))
      ];
    }

    //kembalikan view dengan data yang diperlukan
    $data = [
      'title' => 'Edit Basis Aturan',
      'penyakit' => $penyakit,
      'gejala' => $gejala,
      'allPenyakit'=>$allPenyakit,
      'allGejala'=>$allGejala
    ];

    return view('dokter/editBasisAturan', $data);
  }

  //update basis aturan
  public function updateBasisAturan($id_penyakit)
  {
   //mengambil data yang di post dari form
   $id_penyakit = $this->request->getPost('id_penyakit');
   $gejala_id = $this->request->getPost('id_gejala');

   //validasi data yang di post
   $rules = [
    'id_penyakit' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Wajib memilih penyakit',
            ]
        ],
        'id_gejala' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Wajib memilih gejala'
            ]
        ]
  ];

    // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan error
    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
    }

    //Mengambil data basis aturan berdasarkan id_penyakit
    $aturan = new BasisAturanModels();
    $basis_aturan = $aturan->where('id_penyakit', $id_penyakit)->first();

    //Menghapus semua detail basis aturan yang terkait dengan basis aturan yang bersangkutan
    $detailAturanModel = new DetailBasisAturanModels();
    $detailAturanModel->where('id_basis_aturan', $basis_aturan['id_basis_aturan'])->delete();

    //Menyimpan kembali data basis aturan yang telah di ubah
    $aturan->update($basis_aturan['id_basis_aturan'], [
      'id_penyakit' => $id_penyakit
    ]);

    //Menyimpan data detail basis aturan yang baru
    foreach($gejala_id as $id_gejala){
      $detailAturanModel->insert([
        'id_basis_aturan' => $basis_aturan['id_basis_aturan'],
        'id_gejala'=>$id_gejala
      ]);
    }

    // Redirect ke halaman dataBasisAturan setelah operasi berhasil
    session()->setFlashdata('success', 'Data Basis Aturan Berhasil diUpdate');
    return redirect()->to('dataBasisAturan');

  }

}
?>