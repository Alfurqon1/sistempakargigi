<?php

namespace App\Models;

use CodeIgniter\Model;

class BasisAturanModels extends Model
{
    protected $table      = 'basis_aturan';
    protected $primaryKey = 'id_basis_aturan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_penyakit'];

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

    //Metode ini digunakan untuk menambahkan data baru ke dalam tabel basis_aturan.
    public function uploadBasisAturan($data)
    {
        //Menerima data dalam bentuk array dan menyimpannya ke dalam tabel menggunakan metode insert($data).
        return $this->insert($data);
    }

    //Metode ini digunakan untuk mengatur ulang nilai auto-increment pada kolom kunci utama (id_basis_aturan).
    public function resetAutoIncrement()
    {
        //Metode ini menjalankan query SQL langsung ALTER TABLE basis_aturan AUTO_INCREMENT = 1 untuk mengatur ulang auto-increment ke 1, sehingga ID berikutnya yang dimasukkan akan dimulai dari 1 lagi.
        $query = "ALTER TABLE basis_aturan AUTO_INCREMENT = 1";
        $this->db->query($query);
    }
    
}