<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailBasisAturanModels extends Model
{
    protected $table      = 'detail_basis_aturan';
    protected $primaryKey = 'id_basis_aturan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_basis_aturan','id_gejala'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    //Metode ini menambahkan data baru ke dalam tabel detail_basis_aturan.
    public function uploadDetailBasisAturan($data)
    {
        //Menerima data dalam bentuk array dan menyimpannya ke database menggunakan fungsi insert().
        return $this->insert($data);
    }

    //Metode ini mengambil informasi tentang penyakit berdasarkan ID penyakit yang diberikan.
    public function getPenyakit($id_penyakit)
    {
        
        //Membuat objek PenyakitModels untuk mengakses tabel penyakit, kemudian mencari data penyakit yang sesuai dengan ID menggunakan metode find().
        $penyakitModel = new PenyakitModels();

        return $penyakitModel->find($id_penyakit);
    }

    //Metode ini mendiagnosa penyakit berdasarkan gejala-gejala yang dipilih oleh pengguna.
    public function diagnosa($selectedGejala)
    {
            // Catat waktu mulai
            // $startTime = microtime(true);

            //Melakukan pencarian di database dengan menghubungkan tabel detail_basis_aturan, basis_aturan, dan penyakit.
            $query = $this->select('penyakit.*')
            
            //Ini menghubungkan tabel detail_basis_aturan dengan tabel basis_aturan menggunakan kolom id_basis_aturan
            ->join('basis_aturan', 'basis_aturan.id_basis_aturan = detail_basis_aturan.id_basis_aturan')

            // tabel basis_aturan dihubungkan dengan tabel penyakit menggunakan kolom id_penyakit.
            ->join('penyakit', 'penyakit.id_penyakit = basis_aturan.id_penyakit')

            //Bagian ini memfilter data berdasarkan gejala-gejala yang dipilih oleh pengguna ($selectedGejala)
            ->whereIn('detail_basis_aturan.id_gejala', $selectedGejala)

            //Data yang ditemukan kemudian dikelompokkan berdasarkan id_penyakit. Artinya, hasil akan dikelompokkan per penyakit
            ->groupBy('penyakit.id_penyakit')
            
            //Hasil kelompok ini diurutkan berdasarkan jumlah gejala yang cocok
            ->orderBy('COUNT(*)', 'DESC')
            
            // Menggunakan get() untuk mendapatkan hasil query
            ->get(); 
            
        // Catat waktu selesai
        // $endTime = microtime(true);

        // Hitung waktu eksekusi
        // $executionTime = $endTime - $startTime;

        // Cetak waktu eksekusi untuk debugging (atau simpan ke log)
        // echo "Waktu eksekusi diagnosa: " . $executionTime . " detik";

        // Mengembalikan hasil query dalam bentuk array atau objek
            return $query->getResult();
    }
}