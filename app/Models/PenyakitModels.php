<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModels extends Model
{
    protected $table      = 'penyakit';
    protected $primaryKey = 'id_penyakit';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_penyakit','nama_penyakit','pengertian_penyakit','penyebab', 'image_penyakit', 'sp_mandiri', 'sp_spesifik'];

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

    public function uploadPenyakit($data)
    {
        return $this->insert($data);
    }
    
    public function getNamaPenyakit($id_penyakit)
    {
        // Mendapatkan nama penyakit berdasarkan ID untuk mengubah id dalam tampilan ViewDataBasisAturan
        $result = $this->find($id_penyakit);
        return ($result) ? $result['nama_penyakit'] : '';   
    }   
}