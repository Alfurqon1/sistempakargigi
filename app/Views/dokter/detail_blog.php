<?= $this->extend('templates/sidebar');?>

<?= $this->section('content'); ?>
    <section class="min-h-screen">
        <div class="shadow-xl outline-4 bg-white mx-5 lg:mx-28 mt-28 p-5">
            <div class="flex justify-center pt-20">
                <img src="<?= base_url('imgBlog/' . $blog['gambar_blog'])?>" alt="gambar blog">
            </div>
            <h1 class="text-xl lg:text-5xl font-bold mt-20 text-center py-5"><?=$blog['judul']?></h1>
            <?=$blog['isi_blog']?>
        </div>
    </section>

<script src="<?= base_url() ?>js/script.js"></script>
<?= $this->endSection(); ?>
