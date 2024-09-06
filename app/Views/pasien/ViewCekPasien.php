<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<h1 class="text-2xl mt-20 text-center font-bold">Silahkan Pilih Gejala Yang Kamu Rasakan</h1>

  <div class="relative overflow-x-auto px-5">

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

        <form action="<?= base_url('pasien/prosesCekKesehatan')?>" method="post" class="flex flex-col gap-y-5">
            <?= csrf_field(); ?>  

            <!-- Pilih Gejala -->
            <div class="flex flex-col gap-y-5 shadow-xl p-5 m-auto my-10">
                <?php $i= 1; foreach($gejala as $g) :?>
                    <div >
                        <input type="checkbox" id="id_gejala<?= $i ?>" name="id_gejala[]" value="<?= $g['id_gejala']?>">
                        <label for="gejala <?= $i ?>"><?= $g['nama_gejala']?></label>
                    </div>
                <?php $i++; endforeach; ?>

                <!-- Button Upload -->
                 <div class=" flex justify-end ">
                     <button type="submit" class="w-[200px] bg-primary hover:bg-primary_hover text-white py-4 px-7 rounded-full text-center">Cek Hasil Diagnosa</button>
                </div>
            </div>

        </form>
    </div>

<script src="<?= base_url()?>js/script.js"></script>
<script src="<?= base_url()?>js/alert.js"></script>

<?= $this->endSection(); ?>