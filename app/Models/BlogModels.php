<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModels extends Model
{
    protected $table      = 'blog';
    protected $primaryKey = 'id_gambar';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_gambar','gambar_blog','judul','isi_blog'];

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

    public function search ($keyword)
    {
        $this->orLike('judul', $keyword);
        return $this->findAll();
    }
    
    public function upload($data)
    {
        return $this->insert($data);
    }

    public function index()
    {
        // Mendapatkan instance dari model BlogModels
        $blogModel = new BlogModels();

        // Mengambil artikel dengan id_gambar = 1
        $artikel = $blogModel->where('id_gambar', 1)->first();

        // Mengirim data artikel ke view
        return view('nama_view', ['artikel' => $artikel]);
    }

    
}