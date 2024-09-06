<?php

namespace App\Models;

use CodeIgniter\Model;

class KonsultasiModels extends Model
{
    protected $table      = 'list_konsultasi_pasien';
    protected $primaryKey = 'id_konsultasi';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username', 'waktu_konsultasi'];

    // Dates
    // protected $useTimestamps = true; // Menggunakan timestamps
    // protected $createdField  = 'created_at'; // Kolom created_at
    // protected $updatedField  = 'updated_at'; // Kolom updated_at

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['setWaktuKonsultasi']; // Panggil method setWaktuKonsultasi sebelum insert

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->db = \Config\Database::connect();
    // }

    public function simpanKonsultasi($data)
    {
        $this->insert($data);
    }

    protected function setWaktuKonsultasi(array $data)
    {
        if (!array_key_exists('waktu_konsultasi', $data)) {
            $data['waktu_konsultasi'] = date('Y-m-d H:i:s');
        }
        return $data;
    }
}
