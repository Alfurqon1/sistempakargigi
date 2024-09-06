<?php
namespace App\Controllers;

//Kita panggil model loginPasienModels
use App\Models\AuthModels;

//login user
class Auth extends BaseController
{
    //login user
    public function loginPasien()
    {
        $data = [
            'title' => 'Login Pasien',
        ];

        //jika form login disumbit
        if($this->request->getMethod() === 'post'){
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            //Periksa apakah username dan password cocok dengan yg ada di database
            $authModel = new AuthModels();
            $user = $authModel->where('username', $username)->first();

            if ($user !== null && is_string($password) && is_string($user['password']))  {
                    if($user && password_verify($password, $user['password'])){
                        // Simpan data pengguna ke dalam session
                        $session = session();
                        $session->set('isLoggedIn', true);
                        $session->set('userData', $user);

                        // Redirect ke halaman home
                        return redirect()->to(base_url('/'));
                    } else{
                        // Jika tidak cocok, set pesan error
                        $data['error'] = 'Username atau password salah.';
                    }
            }   else {
                // Jika user tidak ditemukan, set pesan error
                $data['error'] = 'Username tidak ditemukan.';
            }
        }

        // Tampilkan halaman login dengan pesan error jika ada
        return view('pasien/loginPasien', $data);
    }
        
    //register akun pasien
    public function registrasiAkunPasien()
    {
        $data = [
            'title' => 'Registrasi Akun Pasien',
        ];
        return view('pasien/registrasiPasien', $data);
    }

    //upload registrasi akun pasien
    public function uploadRegistrasiPasien()
    {
        // Ambil data dari form registrasi
        $nama_panjang = $this->request->getPost('nama_panjang');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = (string) $this->request->getPost('password');

        // Validasi data
            $rules = [
                'nama_panjang' => [
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => 'nama belum di isi',
                    ]
                ],
                'tanggal_lahir' => [
                    'rules'     => 'required|valid_date',
                    'errors'    => [
                        'required'  => 'tanggal lahir di isi',
                        'valid_date'  => 'format tanggal lahir tidak benar',
                    ]
                ],
                'email' => [
                    'rules'     => 'required|is_unique[registrasi_pasien.email]',
                    'errors'    => [
                        'required'  => 'email belum di isi',
                        'is_unique'  => 'email sudah digunakan',
                    ]
                ],
                'username' => [
                    'rules'     => 'required|is_unique[registrasi_pasien.username]',
                    'errors'    => [
                        'required'  => 'username belum di isi',
                        'is_unique'  => 'username sudah digunakan',
                    ]
                ],
                'password' => [
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => 'password belum di isi',
                    ]
                ],
            ];
                //validasi error
                if(!$this->validate($rules)){
                    session()->setFlashdata('errors', $this->validator->listErrors());
                    return redirect()->back()->withInput();
                }
                
                // Periksa apakah nilai yang diterima adalah string
                if (!is_string($password)) {
                    // Tampilkan pesan kesalahan atau lakukan tindakan sesuai kebutuhan
                    return redirect()->back()->withInput()->with('error', 'Password harus berupa string.');
                }

                // Hash password sebelum disimpan ke database
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                // Simpan data registrasi ke dalam database
                $authModel = new AuthModels();
                $data = [
                    'nama_panjang' => $nama_panjang,
                    'tanggal_lahir' => $tanggal_lahir,
                    'username' => $username,
                    'email' => $email,
                    'password' => $hashedPassword
                ];
                $authModel->insert($data);
                
                // Redirect ke halaman login setelah registrasi berhasil
                return redirect()->to('/loginPasien')->with('success', 'Registrasi berhasil! Silakan login.');
    }

     protected $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModels();
    }
    //forgot password
    public function forgotPassword()
    {
        $data = [
            'title' => 'Forgot Password'
        ];
    
        //mengembalikan view dan $data di folder pasien>ViewForgotPassword.php
        return view('pasien/forgotPassword', $data);
    }

     public function kirimEmailLupaPassword()
    {
        $email = $this->request->getPost('email');

        // Cek apakah email ada di database
        $user = $this->authModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan.');
        }

        // Generate token untuk reset password
        $token = bin2hex(random_bytes(50));

        // Simpan token ke database atau tabel sementara
        // Misalkan tambahkan kolom 'reset_token' dan 'reset_expires' di tabel registrasi_pasien
        $this->authModel->update($user['id_pasien'], [
            'reset_token' => $token,
            'reset_expires' => date('Y-m-d H:i:s', strtotime('+1 hour'))
        ]);

        // Kirim email dengan link reset password
        $this->_sendResetPasswordEmail($email, $token);

        return redirect()->to('/loginPasien')->with('success', 'Email reset password telah dikirim.');
    }

     private function _sendResetPasswordEmail($email, $token)
    {
        $emailService = \Config\Services::email();

        // $config = [
        //     'protocol' => 'smtp',
        //     'smtp_host' => 'ssl://smtp.googlemail.com',
        //     'smtp_user' => 'aalkailanet@gmail.com',
        //     'smtp_pass' => 'jdpfxcigmuorofnb',
        //     'smtp_port' => 465,
        //     'mailtype' => 'html',
        //     'charset' => 'utf-8',
        //     'newline' => "\r\n"
        // ];

        // $emailService->initialize($config);
        $emailService->setTo($email);
        $emailService->setFrom('admin@sistempakar.com', 'sistempakarg');
        $emailService->setSubject('Reset Password');
        $emailService->setMessage('Klik link berikut untuk reset password: ' . base_url('resetPassword/' . $token));

        if ($emailService->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function resetPassword($token)
    {
        // Cek token valid atau tidak
        $user = $this->authModel->where('reset_token', $token)
        ->where('reset_expires >=', date('Y-m-d H:i:s'))
        ->first();
        
        if (!$user) {
            return redirect()->to('/forgotPassword')->with('error', 'Token tidak valid atau sudah kadaluarsa.');
        }

        return view('pasien/resetPassword', [
            'title' => 'Reset Password',
            'token' => $token
        ]);
    }

    public function simpanPasswordBaru()
    {
        $token = $this->request->getPost('token');
        $passwordBaru = $this->request->getPost('password_baru');
        $passwordConfirm = $this->request->getPost('password_confirm');

        // Validasi password
        if ($passwordBaru !== $passwordConfirm) {
            return redirect()->back()->with('error', 'Konfirmasi password tidak sesuai.');
        }

        // Cek token dan update password
        $user = $this->authModel->where('reset_token', $token)
                                ->where('reset_expires >=', date('Y-m-d H:i:s'))
                                ->first();

        if (!$user) {
            return redirect()->to('/forgotPassword')->with('error', 'Token tidak valid atau sudah kadaluarsa.');
        }

        // Update password dan hapus token
        $this->authModel->update($user['id_pasien'], [
            'password' => password_hash($passwordBaru, PASSWORD_DEFAULT),
            'reset_token' => null,
            'reset_expires' => null
        ]);

        return redirect()->to('/loginPasien')->with('success', 'Password berhasil direset.');
    }

    // Di dalam controller yang meng-handle rute 'Auth'
    public function logout()
    {
        // Hapus session yang terkait dengan login
        $session = session();
        $session->remove(['isLoggedIn', 'userData']);

        // Redirect ke halaman login atau halaman lain yang sesuai setelah logout
        return redirect()->to('/')->with('success', 'Logout berhasil.');
    }        
}
?>