<?= $this->extend('templates/sidebar'); ?>

<?= $this->section('content'); ?>
<section class="min-h-screen">
    <div class="flex flex-row items-center py-5">
        <h1 class="font-semibold text-lg">Tambah Penyakit</h1>
    </div>

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

        <form action="<?= base_url('dokter/uploadPenyakit')?>" method="post" class="flex flex-col gap-y-5" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <!-- ID Penyakit -->
            <div class="flex flex-col gap-y-5">
                <label for="id_penyakit">ID Penyakit</label>
                <input type="text" id="id_penyakit" name="id_penyakit" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="ID Penyakit" value="<?= $id_penyakit ?>">
            </div>

            <!-- Nama Penyakit -->
            <div class="flex flex-col gap-y-5">
                <label for="nama_penyakit">Nama Penyakit</label>
                <input type="text" id="nama_penyakit" name="nama_penyakit" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Nama Penyakit" value="<?= old('nama_penyakit')?>">
            </div>

             <!-- Pengertian Penyakit -->
            <div class="flex flex-col gap-y-5">
                <label for="pengertian_penyakit">Pengertian Penyakit</label>
                <textarea type="text" id="pengertian_penyakit" name="pengertian_penyakit" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Pengertian Penyakit" ><?= old('pengertian_penyakit')?></textarea>
            </div>

             <!-- Penyebab -->
            <div class="flex flex-col gap-y-5">
                <label for="penyebab">Penyebab</label>
                <textarea type="text" id="penyebab" name="penyebab" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Penyebab"><?= old('penyebab')?></textarea>
            </div>

             <!-- image_penyakit -->
            <div class="flex flex-col gap-y-5">
                <label for="image_penyakit">Image Penyakit</label>
                <input type="file" id="image_penyakit" name="image_penyakit" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Image Penyakit" value="<?= old('image_penyakit')?>">
            </div>

             <!-- Sp Mandiri -->
            <div class="flex flex-col gap-y-5">
                <label for="sp_mandiri">Saran Perawatan Mandiri</label>
                <textarea type="text" id="sp_mandiri" name="sp_mandiri" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Saran Perawatan Mandiri"><?= old('sp_mandiri')?></textarea>
            </div>

             <!-- Sp Spesifik -->
            <div class="flex flex-col gap-y-5">
                <label for="sp_spesifik">Saran Perawatan Khusus</label>
                <textarea type="text" id="sp_spesifik" name="sp_spesifik" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Saran Perawatan Spesifik"><?= old('sp_spesifik')?></textarea>
            </div>
            <!-- Button Upload -->
             <div class=" flex justify-end px-10">
                 <button type="submit" class="w-[100px] bg-primary hover:bg-primary_hover text-white py-3 px-7 rounded-full text-center">Upload</button>
            </div>
        </form>
    </div>
</section>

<script src="<?= base_url()?>tinymce/tinymce.min.js"></script>
<script src="<?= base_url()?>js/tiny.js"></script>
<script src="<?= base_url()?>js/alert.js"></script>

<?= $this->endSection('content'); ?>