<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModels extends Model
{
    protected $table      = 'gejala';
    protected $primaryKey = 'id_gejala';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_gejala','nama_gejala'];

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

    //upload dataGejala
    public function uploadGejala($data)
    {
        return $this->insert($data);
    }
    
    public function resetAutoIncrement()
    {
        // Jalankan query untuk mengatur ulang auto-increment pada kolom id_gambar
        $query = "ALTER TABLE gejala AUTO_INCREMENT = 1";
        $this->db->query($query);
    }

}