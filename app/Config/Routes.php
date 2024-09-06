<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//home pasien
$routes->get('/','Home::index');

//Pasien
$routes->get('/loginPasien', 'Auth::loginPasien');
$routes->post('/loginPasien', 'Auth::loginPasien');
$routes->get('/logout', 'Auth::logout');

//registrasi pasien
$routes->get('/registrasiPasien', 'Auth::registrasiAkunPasien');
$routes->post('/uploadRegistrasiPasien', 'Auth::uploadRegistrasiPasien');

//forgot password pasien
$routes->get('/forgotPassword', 'Auth::forgotPassword');
$routes->post('/forgotPassword', 'Auth::kirimEmailLupaPassword'); // Proses forgot password

//reset password pasien
$routes->get('/resetPassword/(:segment)', 'Auth::resetPassword/$1');
$routes->post('/resetPassword', 'Auth::simpanPasswordBaru');

//cek kesehatan
$routes->get('/cekKesehatan','CekPasien::cekKesehatanPasien');
//proses CekKesehatan
$routes->post('/pasien/prosesCekKesehatan', 'CekPasien::prosesCekKesehatan');
//hasil diagnosa
$routes->get('/pasien/hasilDiagnosa', 'CekPasien::hasilDiagnosa');
//blog pasien
$routes->get('/blog','Blog::halamanBlog');
//cari blog
$routes->post('/blog','Blog::halamanBlog');
//detail blog pasien
$routes->get('/blog/(:segment)', 'Blog::detailBlogPasien/$1');
//blog_1
$routes->get('/blog_1', 'Blog::blog_1');
//blog_2
$routes->get('/blog_2', 'Blog::blog_2');

//  Dokter
//login dokter
$routes->get('/loginDokter','LoginDokter::loginDokter');
$routes->post('loginDokter','LoginDokter::loginDokter');
$routes->get('/logout', 'LoginDokter::logout');


//data gejala
$routes->get('/dataGejala','DataGejala::dataGejala');
//tambah gejala
$routes->get('dokter/tambahGejala', 'DataGejala::tambahGejala');
//upload gejala
$routes->post('/dokter/uploadGejala', 'DataGejala::uploadGejala');
//delete gejala
$routes->delete('/dokter/deleteGejala(:segment)', 'DataGejala::deleteGejala/$1');
//edit gejala
$routes->get('/dokter/editGejala/(:segment)', 'DataGejala::editGejala/$1');
//update gejala
$routes->post('dokter/updateGejala/(:segment)', 'DataGejala::updateGejala/$1');

//data penyakit
$routes->get('/dataPenyakit','DataPenyakit::dataPenyakit');
//tambah penyakit
$routes->get('dokter/tambahPenyakit', 'DataPenyakit::tambahPenyakit');
//upload penyakit
$routes->post('/dokter/uploadPenyakit', 'DataPenyakit::uploadPenyakit');
//detail penyakit
$routes->get('/dokter/detailPenyakit(:segment)', 'DataPenyakit::detailPenyakit/$1');
//hapus penyakit
$routes->delete('/dokter/deletePenyakit(:segment)', 'DataPenyakit::deletePenyakit/$1');
//edit penyakit
$routes->get('/dokter/editPenyakit/(:segment)', 'DataPenyakit::editPenyakit/$1');
//update penyakit
$routes->post('dokter/updatePenyakit/(:segment)', 'DataPenyakit::updatePenyakit/$1');


//data basis aturan
$routes->get('/dataBasisAturan','DataBasisAturan::dataBasisAturan');
//tambah basis aturan
$routes->get('dokter/tambahDataBasisAturan', 'DataBasisAturan::tambahDataBasisAturan');
//upload basis aturan
$routes->post('/dokter/uploadBasisAturan', 'DataBasisAturan::uploadBasisAturan');
//detail basis aturan
$routes->get('/dokter/detailBasisAturan(:segment)', 'DataBasisAturan::detailBasisAturan/$1');
//hapus basis aturan
$routes->delete('/dokter/deleteBasisAturan(:segment)', 'DataBasisAturan::deleteBasisAturan/$1');
//edit basis aturan
$routes->get('/dokter/editBasisAturan(:segment)', 'DataBasisAturan::editBasisAturan/$1');
//update basis aturan
$routes->post('dokter/updateBasisAturan/(:segment)', 'DataBasisAturan::updateBasisAturan/$1');


//data blog
$routes->get('/dataBlog','DataBlog::dataBlog');
//tambah blog
$routes->get('dokter/tambahBlog', 'DataBlog::tambahBlog');
//Upload blog
$routes->post('/dokter/upload', 'DataBlog::upload');
//detail blog dokter
$routes->get('/dokter/detail_blog(:segment)', 'DataBlog::detail_blog/$1');
//delete blog
$routes->delete('/dokter/deleteBlog(:segment)', 'DataBlog::deleteBlog/$1');
//edit blog
$routes->get('/dokter/editBlog/(:segment)', 'DataBlog::editBlog/$1'); 
//update blog
$routes->post('/dokter/updateBlog/(:segment)', 'DataBlog::updateBlog/$1'); 

//list diagnosa pasien
$routes->get('/dataDiagnosaPasien', 'DiagnosaPasien::dataDiagnosaPasien');

//list konsultasi pasien
$routes->get('/dataKonsultasiPasien', 'DataKonsultasiPasien::dataKonsultasiPasien');
$routes->post('/dataKonsultasiPasien', 'DataKonsultasiPasien::dataPostKonsultasiPasien');