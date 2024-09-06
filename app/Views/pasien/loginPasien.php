<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <!-- Typhography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
   <section class="min-h-screen bg-cover bg-no-repeat bg-center flex justify-center items-center" style="background-image: url(<?= base_url()?>img/login_user.jpg);">
        <div class="text-center flex flex-col gap-y-4">
            <h1 class="text-3xl font-bold text-white">Login Pasien</h1>
                
            <!-- alert -->
            <?php if (session()->getFlashdata('success')): ?>
                <div id="validation-alert" class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg  bg-green-200" >
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <div>
                        <?= session()->getFlashdata('success')?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- alert errors -->
            <?php if (isset($error)): ?>
                <div id="validation-alert" class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg  bg-red-200" >
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <div>
                        <?= $error ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="rounded-3xl w-auto p-10 bg-white shadow-lg">

                <form action="<?= base_url('loginPasien')?>" method="post" class="flex flex-col gap-y-6">
                 <?= csrf_field(); ?>
                    <div class="flex flex-col gap-y-5">
                        <input type="text" id="username" name="username" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="username" value="<?= old('username')?>">
                    </div>
                     <div class="flex flex-col gap-y-5">
                        <input type="password" id="password" name="password" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="password" value="<?= old('password')?>">
                    </div>
                    <div class="flex flex-col gap-y-5 font-bold">
                        <button class="w-[500px] bg-primary hover:bg-primary_hover text-white py-3 px-7 rounded-full text-center">LOGIN</button>                    
                    </div>
                    <div class="flex flex-row justify-center gap-x-2 text-primary">
                        <p>belum punya akun ?</p> <a href="<?=base_url()?>registrasiPasien"><b>Registrasi</b></a>
                    </div>
                    <div class="flex flex-row justify-center gap-x-2 text-primary">
                         <a href="<?=base_url()?>forgotPassword"><b>Forgot Password ?</b></a>
                    </div>
                </form>
            </div>

                <div class="flex flex-col justify-center gap-y-2 text-white">
                    <p>atau</p> <a href="<?= base_url('loginDokter')?>"><b>Login Sebagai Dokter</b></a>
                </div>

        </div>
   </section>

   <script src="<?= base_url()?>js/alert.js"></script>

</body>
</html>