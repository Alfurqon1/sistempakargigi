<?php

namespace App\Models;

use CodeIgniter\Model;

class DiagnosaPasienModel extends Model
{
    protected $table      = 'list_diagnosa_pasien';
    protected $primaryKey = 'id_pasien';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username', 'nama_penyakit', 'waktu_diagnosa'];

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

    public function uploadDataDiagnosa($data)
    {
        return $this->insert($data);  
    }

    public function resetAutoIncrement()
    {
        $query = "ALTER TABLE list_diagnosa_pasien AUTO_INCREMENT = 1";
        $this->db->query($query);
    }
    
}