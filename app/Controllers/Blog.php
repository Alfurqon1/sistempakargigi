<?php
namespace App\Controllers;
use App\Models\BlogModels;

class Blog extends BaseController
{
    public function halamanBlog()
    {
        $blog = new BlogModels();

        $keyword = $this->request->getPost('keyword');

        if($keyword)
        {
            $result = $blog->search($keyword);
        }else{
            $result = $blog->findAll();
        }

         $data = [
            'title'=> 'Blog',
            'blog'=> $result,
            'keyword'=> $keyword
        ];
        return view('pasien/ViewBlog', $data);
    }
    public function detailBlogPasien($id_gambar)
    {
        $blog = new BlogModels();
        //cek jika tidak ada data
        //tujuannya agar ketika user mencari data lewat url, dan data tersebut tidak ada maka akan dibalikkan ke halaman blog
        if(empty($blog->where('id_gambar', $id_gambar)->first())){
         return redirect()->to('blog');   
        }
        $data = [
            'title' => 'Blog',
            'blog' => $blog->where('id_gambar', $id_gambar)->first()
        ];
        return view('pasien/detailBlogPasien', $data);
    }
    public function blog_1(){
        $data = [
            'title' => 'Blog',  
        ];
        return view('pasien/blog_1', $data);
    }
    public function blog_2(){
        $data = [
            'title' => 'Blog',  
        ];
        return view('pasien/blog_2', $data);
    }
}
?>