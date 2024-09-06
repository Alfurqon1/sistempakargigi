<?php

namespace App\Controllers;

//kita panggil model untuk menampung Data Blog
use App\Models\BlogModels;

class DataBlog extends BaseController
{
    
    public function dataBlog()
    {
         // Periksa apakah dokter sudah login
        $session = session();
        if (!$session->get('isLoggedInDokter')) {
            // Jika belum login, arahkan ke halaman login
            return redirect()->to('/loginDokter');
        }

        $blog = new BlogModels();
        
        $data = [
            'title' => 'Data Blog' ,
            'blog'  => $blog->findAll()
        ];

       return view('dokter/ViewDataBlog', $data);
    }

     //tambah blog
    public function tambahBlog()
    {
        $data = [
            'title' => 'Tambah Blog'
        ];

        return view('dokter/tambahBlog', $data);
    }

     //upload blog
    public function upload()
    {
       $blog = new BlogModels();

       //validasi 
       $rules       = [
            'judul' => [
                'rules' => 'required',
                'errors'=> [
                    'required'=> 'Judul Belum di Isi'
                ]
            ],
            'gambar_blog'=>[
                'rules' => 'uploaded[gambar_blog]|max_size[gambar_blog,2048]|mime_in[gambar_blog,image/jpg,image/jpeg,image/png]',
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
        $gambar_blog = $this->request->getFile('gambar_blog');
        //ambil nama file yg di upload
        $namaFoto = $gambar_blog->getRandomName();
        //pindahkan file ke direktori imgBlog
        $gambar_blog->move('imgBlog', $namaFoto);

        $blog->upload([
            'judul'         =>  $this->request->getPost('judul'),
            'isi_blog'      =>  $this->request->getPost('isi_blog'),
            'gambar_blog'   =>  $namaFoto
        ]);

        //validasi berhasil
        session()->setFlashdata('success', 'Berhasil ditambah');
        
        return redirect()->to('dataBlog');
    }

    // detail blog
    public function detail_blog($id_gambar)
    {
        $blog = new BlogModels();

         //cek Jika tidak ada data
        if(empty($blog->where('id_gambar',$id_gambar)->first())){
            return redirect()->to('/dokter/dataBlog');
        }

        $data = [
            'title' => 'Detail Blog',
            'blog'  => $blog->where('id_gambar',$id_gambar)->first()
        ];

        return view('dokter/detail_blog', $data);
    }

    //delete blog
    public function deleteBlog($id_gambar)
    {
        $blog = new BlogModels();
        $blog_data = $blog->find($id_gambar); 

        if (is_array($blog_data)) {
        // Ambil nama file gambar dari data blog
        $gambar_blog = $blog_data['gambar_blog'];

        // Hapus file gambar dari direktori 'imgBlog'
        $path_to_img = FCPATH . 'imgBlog' . DIRECTORY_SEPARATOR . $gambar_blog;
        if (file_exists($path_to_img)) {
            unlink($path_to_img);
        }
    }

        $blog->where('id_gambar', $id_gambar)->delete();

        //validasi berhasil
        session()->setFlashdata('success', 'Berhasil dihapus');

        return redirect()->to('dataBlog');
    }

    //edit blog
    public function editBlog($id_gambar)
    {
        $blog = new BlogModels();
        $data =  [
            'title'=>'Edit Blog',
            'blog'=> $blog->where('id_gambar', $id_gambar)->first()
        ];

        return view('dokter/editBlog', $data);
    }
    
    //update blog
    public function updateBlog($id_gambar)
    {
        $blog   = new BlogModels();

        //validasi
        $rules  = [
            'judul' => [
                'rules'  => 'required',
                'errors' => [
                    'required'=> 'Judul Wajib di isi'
                ]
            ],
             'gambar_blog'=>[
                'rules' => 'max_size[gambar_blog, 2048]|mime_in[gambar_blog, image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max-size'  => 'File Maksimal 2MB',
                    'mime_in'   => 'File harus berupa gambar / foto'
                ]
            ]
       ];
       
       //validasi error
        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }   

        $oldData = $blog ->find($id_gambar);

        //ambil nama file lama
        $oldImage = $oldData['gambar_blog'];

        $gambar_blog = $this->request->getFile('gambar_blog');

        // Jika ada file baru yang diunggah
    if ($gambar_blog->isValid() && !$gambar_blog->hasMoved()) {
        // Hapus file lama
        unlink('imgBlog/' . $oldImage);
        
        // Simpan file baru
        $newImage = $gambar_blog->getRandomName();
        $gambar_blog->move('imgBlog', $newImage);
    } else {
        // Jika tidak ada file baru, gunakan file lama
        $newImage = $oldImage;
    }

        $blog ->where('id_gambar',  $id_gambar)->update(null, [
            'judul'         =>  $this->request->getPost('judul'),
            'isi_blog'      =>  $this->request->getPost('isi_blog'),
            'gambar_blog'   =>  $newImage,
        ]);

        //validasi berhasil
        session()->setFlashdata('success', 'Data Penyakit Berhasil Di Ubah');
        return redirect()->to('dataBlog');
    }
}
?>