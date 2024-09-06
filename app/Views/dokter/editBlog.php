<?= $this->extend('templates/sidebar');?>

<?= $this->section('content'); ?>
<section class="min-h-screen">
    <div class="flex flex-row items-center py-5">
        <h1 class="font-semibold text-lg">Tambah Blog</h1>
    </div>

    <!-- alert -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div id="validation-alert" class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg  bg-red-200">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div>
                <?= session()->getFlashdata('errors')?>
            </div>
        </div>
    <?php endif; ?>

    <div class="relative overflow-x-auto px-5">
        <form action="<?= base_url('dokter/updateBlog/'. $blog['id_gambar'])?>" method="post" class="flex flex-col gap-y-5" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <!-- Judul Blog -->
            <div class="flex flex-col gap-y-5">
                <label for="judul">Judul Blog</label>
                <input type="text" id="judul" name="judul" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Judul Blog" value="<?= $blog ['judul']?>">
            </div>

            <!-- Upload Gambar -->
             <div class="flex flex-col gap-y-5">
                <label for="gambar_blog">Upload Gambar</label>
                <input type="file" id="gambar_blog" name="gambar_blog" class="w-[500px] rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" >
            </div>

            <!-- Isi Blog -->
             <div class="flex flex-col gap-y-5">
                <label for="isi_blog">Isi Blog</label>
                <textarea name="isi_blog" id="isi_blog" class="rounded-lg py-3 px-4 outline-none focus:ring-2 focus:ring-primary shadow-lg" placeholder="Tulis isi blog disini ..."> <?= $blog ['isi_blog']?></textarea>
            </div>

            <!-- Button Upload -->
             <div class=" flex justify-end px-10">
                 <button type="submit" class="bg-primary hover:bg-primary_hover text-white py-3 px-7 rounded-full text-center">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</section>

<script src="<?= base_url()?>tinymce/tinymce.min.js"></script>
<script src="<?= base_url()?>js/tiny.js"></script>
<script src="<?= base_url()?>js/alert.js"></script>

<?= $this->endSection(); ?>