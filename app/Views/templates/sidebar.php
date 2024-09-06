<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

</head>
<body>
    <section class="flex flex-row h-screen gap-x-2 bg-gray-100">
        <div class="bg-white w-[250px] flex flex-col items-center gap-y-2 py-10 px-5">
            <h1 class="text-primary font-bold text-xl">Sistem Pakar</h1>
            <div class="flex flex-col gap-2 w-full">
                <div class="flex justify-center py-5 rounded-xl  hover:bg-primary hover:text-white" >
                    <a class="font-medium" href="<?= base_url()?>dataGejala">Data Gejala</a>
                </div>
                <div class="flex justify-center py-5 rounded-xl  hover:bg-primary hover:text-white">
                    <a class="font-medium" href="<?= base_url()?>dataPenyakit">Data Penyakit</a>
                </div>
                <div class="flex justify-center py-5 rounded-xl  hover:bg-primary hover:text-white">
                    <a class="font-medium" href="<?= base_url()?>dataBasisAturan">Basis Aturan</a>
                </div>
                <div class="flex justify-center py-5 rounded-xl  hover:bg-primary hover:text-white">
                    <a class="font-medium" href="<?= base_url()?>dataBlog">Data Blog</a>
                </div>
                 <div class="flex justify-center py-5 rounded-xl  hover:bg-primary hover:text-white">
                    <a class="font-medium" href="<?= base_url()?>dataDiagnosaPasien">List Diagnosa Pasien</a>
                </div>
                 <div class="flex justify-center py-5 rounded-xl  hover:bg-primary hover:text-white">
                    <a class="font-medium" href="<?= base_url()?>dataKonsultasiPasien">List Konsultasi Pasien</a>
                </div>
            </div>
            <div class="mt-5 w-full">
                <div class="flex items-center justify-center py-5 rounded-full border w-full hover:bg-red-600 hover:text-white gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor"><path d="M8.514 20h-4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h4v2h-4v12h4z"/><path d="m13.842 17.385l1.42-1.408l-3.92-3.953h9.144a1 1 0 1 0 0-2h-9.162l3.98-3.947l-1.408-1.42l-6.391 6.337z"/></g></svg>
                    <a class="font-medium" href="<?= base_url('logout') ?>">Logout</a>
                </div>
            </div>
        </div>
        <div class="bg-white w-screen p-5 overflow-y-auto">
            <?= $this->renderSection('content');?>
        </div>
    </section>
</body>
</html>