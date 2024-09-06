<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<section class="flex pt-10">
  <div class="flex flex-col items-center mt-10 relative justify-center">
    <img src="<?= base_url()?>img/header-blog.jpg" class="bg-cover bg-no-repeat" alt="">
      <div class="flex flex-col gap-y-2 md:gap-y-5 py-10 absolute text-center px-5">
        <h1 class="text-lg font-bold text-primary md:text-[30px] lg:text-[45px]">Temukan Artikel mengenai Kesehatan Gigi</h1>
        <p class="text-[14px] md:text-[20px] lg:md:text-[30px]">Temukan Artikel mengenai Kesehatan Gigi</p>
        
        <form action="<?= base_url('blog')?>" method="post">
          <?= csrf_field()?>
          <div class="flex flex-row justify-center gap-x-2 py-5">
              <input type="text" name="keyword" id="keyword" value="<?= $keyword ?>" class="rounded-full py-3 px-4 outline-none w-full focus:ring-2 focus:ring-primary shadow-lg" placeholder="Cari Blog">
              <button class="bg-primary hover:bg-primary_hover text-white py-3 px-7 rounded-full text-center" type="submit">Cari</button>
          </div>  
        </form>

      </div>
  </div>
</section>

<section class="min-h-screen flex items-center justify-center lg:py-10">
  <div class="grid p-5 grid-cols-2 grid-rows-2 gap-4 lg:grid-cols-3 lg:grid-rows-3 lg:gap-10">
    <?php foreach ($blog as $blogs): ?>
      <a href="<?= base_url('/blog/'. $blogs['id_gambar']) ?>" class="max-w-sm rounded overflow-hidden shadow-lg bg-white block no-underline">
        <img class="w-full h-[150px] lg:h-[300px] bg-cover bg-no-repeat" src="<?= base_url('imgBlog/' . $blogs['gambar_blog'])?>" alt="gambar blog" alt="Card Image" >
       
        <div class="px-2 py-2 lg:px-6 lg:py-4">
          <div class="font-bold text-sm lg:text-xl mb-2"><?=$blogs['judul']?></div>
        </div>

      </a>     
    <?php endforeach; ?>
  </div>

  <?php if(empty($blog)) :?>
    <div class="flex flex-col gap-y-5 items-center">
        <img class="w-40 lg:w-72 "  src="<?= base_url()?>img/blogNotFound.svg" alt="">
        <h1 class="font-bold  text-xl lg:text-4xl text-primary text-center">Blog Tidak Di Temukan</h1>
    </div>
  <?php endif; ?>

</section>

<script src="<?= base_url()?>js/script.js"></script>
<?= $this->endSection(); ?>