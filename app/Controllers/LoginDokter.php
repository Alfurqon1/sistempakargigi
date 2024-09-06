<?php
namespace App\Controllers;

use App\Models\AuthDokterModels;

class LoginDokter extends BaseController
{
    public function loginDokter()
    {
        $data = [
            'title'=> 'Login Dokter' 
        ];

        //jika form login disumbit
        if($this->request->getMethod()=== 'post'){
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Validasi tipe data password
            if (!is_string($password)) {
                // Handle error or set default value
                return;
            }

            //Periksa apakah username dan password cocok dengan yg ada di database
            $dokterModel = new AuthDokterModels();
            $dokter = $dokterModel->where('username', $username)->first();
            if ($dokter) {
                // Periksa apakah password cocok dengan yang ada di database
                if (sha1($password) === $dokter['password']) { // Sesuaikan dengan metode hashing yang Anda gunakan
                    // Simpan data dokter ke dalam session
                    $session = session();
                    $session->set('isLoggedInDokter', true);
                    $session->set('dokterData', $dokter);

                    // Redirect ke halaman dataPenyakit setelah login berhasil
                    return redirect()->to('dataPenyakit');
                } else {
                    // Jika password tidak cocok, tampilkan pesan kesalahan
                    $data['error'] = 'Username atau password salah.';
                    return view('dokter/ViewLoginDokter', $data);
                }
            } else {
                // Jika username tidak ditemukan, tampilkan pesan kesalahan
                $data['error'] = 'Username atau password salah.';
                return view('dokter/ViewLoginDokter', $data);
            }
        }else{
            return view('dokter/ViewLoginDokter', $data);
        }   
    }

    public function logout()
        {
            // Hapus session yang terkait dengan login
            $session = session();
            $session->remove(['isLoggedInDokter', 'userData']);

            // Redirect ke halaman login atau halaman lain yang sesuai setelah logout
            return redirect()->to('/')->with('success', 'Logout berhasil.');
        }
}
?>