<?= $this->extend('templates/sidebar'); ?>

<?= $this->section('content'); ?>
<section class="min-h-screen">
    <div class="flex flex-row items-center py-5">
        <h1 class="font-semibold text-lg">Edit Gejala</h1>
    </div>

    <!-- alert -->
     <!-- alert -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div id="validation-alert" class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg  bg-red-200" >
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div>
                <?= session()->getFlashdata('errors')?>
            </div>
        </div>
    <?php endif; ?>

    <div class="relative overflow-x-auto px-5">
        <form action="<?= base_url('dokter/updateGejala/'. $gejala['id_gejala'])?>" method="post" class="flex flex-col gap-y-5" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <!-- ID Gejala -->
            <div class="flex flex-col gap-y-5">
                <label for="id_gejala">ID Gejala</label>
                <input type="text" id="id_gejala" name="id_gejala" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="ID Gejala" value="<?= $gejala['id_gejala']?>">
            </div>

            <!-- Nama Gejala -->
            <div class="flex flex-col gap-y-5">
                <label for="nama_gejala">Nama Gejala</label>
                <input type="text" id="nama_gejala" name="nama_gejala" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Nama Gejala" value="<?= $gejala['nama_gejala']?>">
            </div>

            <!-- Button Upload -->
             <div class=" flex justify-end pr-[530px]">
                 <button type="submit" class="w-[200px] bg-primary hover:bg-primary_hover text-white py-3 px-7 rounded-full text-center">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</section>

<script src="<?= base_url()?>js/alert.js"></script>

<?= $this->endSection('content'); ?>