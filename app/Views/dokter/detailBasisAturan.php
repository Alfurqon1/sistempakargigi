<?= $this->extend('templates/sidebar');?>

<?= $this->section('content'); ?>

<section class="min-h-screen">

    <div class="relative overflow-x-auto px-5">
        <form action="<?= base_url('dokter/uploadBasisAturan')?>" method="post" class="flex flex-col gap-y-5">
            <?= csrf_field(); ?>

            <!-- Pilih Penyakit -->
            <div class="flex flex-col gap-y-5">
                <label>Nama Penyakit</label>
                <input type="text" class="w-[500px] rounded-lg py-3 px-4 outline-none bg-gray-100 " value="<?= $penyakit['nama_penyakit'] ?>" readonly>
            </div>

            <!-- Pilih Gejala -->
            <div class="flex flex-col gap-y-5">
                <label>Gejala-Gejala</label>

                <?php foreach($gejala as $g) :?>
                    <div style="float: left; clear: both;">
                        <input type="checkbox" id="id_gejala[]" name="id_gejala[]" value="<?= $g['id_gejala']?>" checked disabled>
                        <label id="id_gejala" name="id_gejala"><?=$g['nama_gejala']?></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>
