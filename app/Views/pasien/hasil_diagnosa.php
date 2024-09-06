<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
  <section class="min-h-screen">
        <div class="shadow-xl outline-4 bg-white mx-5 lg:mx-28 mt-28 p-5">
             <!-- Tampilkan data penyakit -->
                <div class="flex justify-center pt-20">
                    <img src="<?= base_url('imgPenyakit/' . $hasilDiagnosa[0]->image_penyakit) ?>" alt="gambar penyakit">
                </div>
                <h1 class="text-xl lg:text-5xl font-bold mt-20 text-center py-5"><?= $hasilDiagnosa[0]->nama_penyakit?></h1>
                <p class="text-justify"><?= $hasilDiagnosa[0]->pengertian_penyakit?></p>
                <h4 class="text-xl lg:text-2xl font-bold mt-10">Penyebab Penyakit</h4>
                <p><?= $hasilDiagnosa[0]->penyebab ?></p>
                <div class="bg-blue-300 p-5 mt-10">
                    <h5 class="text-xl lg:text-1xl font-bold">Saran Perawatan Mandiri</h5>
                    <p><?= $hasilDiagnosa[0]->sp_mandiri?></p>
                </div>
                <div class="bg-red-200 p-5 mt-10">
                    <h5 class="text-xl lg:text-1xl font-bold">Saran Perawatan Khusus</h5>
                    <p><?= $hasilDiagnosa[0]->sp_spesifik ?></p>
                </div>
            </div>
    </section>
<script src="<?= base_url()?>js/script.js"></script>
<?= $this->endSection(); ?>

