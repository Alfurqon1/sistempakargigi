<?= $this->extend('templates/sidebar'); ?>

<?= $this->section('content'); ?>

<section class="min-h-screen">
    <div class="flex flex-row items-center py-5">
        <h1 class="font-semibold text-lg">Tambah Data Basis Aturan</h1>
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
        <form action="<?= base_url('dokter/uploadBasisAturan')?>" method="post" class="flex flex-col gap-y-5">
            <?= csrf_field(); ?>

            <!-- Pilih Penyakit -->
            <div class="flex flex-col gap-y-5">
                <label>Pilih Penyakit</label>
                <select name="id_penyakit" id="id_penyakit" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" >
                
                <option disabled selected>Pilih Penyakit</option>
                    <?php foreach ($penyakit as $p) : ?>
                        <option value="<?= $p['id_penyakit']?>"><?=$p['nama_penyakit']?></option>
                    <?php endforeach; ?>
                </select>
                
            </div>

            <!-- Pilih Gejala -->
            <div class="flex flex-col gap-y-5">
                <label>Pilih Gejala</label>

                <?php foreach($gejala as $g) :?>
                    <div style="float: left; clear: both;">
                        <input type="checkbox" id="id_gejala[]" name="id_gejala[]" value="<?= $g['id_gejala']?>">
                        <label id="id_gejala" name="id_gejala"><?=$g['nama_gejala']?></label>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Button Upload -->
             <div class=" flex justify-end pr-[530px]">
                 <button type="submit" class="w-[100px] bg-primary hover:bg-primary_hover text-white py-3 px-7 rounded-full text-center">Upload</button>
            </div>
        </form>
    </div>
</section>

<script src="<?= base_url()?>js/alert.js"></script>

<?= $this->endSection('content'); ?>