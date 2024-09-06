<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<!-- Hero Start -->
<section class="max-w-6xl mx-auto py-20">
    <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="flex flex-col gap-y-10">
            <div class="flex flex-col gap-y-4">
                <h1 class="font-bold text-primary text-4xl lg:text-6xl leading-10 lg:leading-[58px]">Senyum Sehat Hidup <br>
                Bahagia</h1>
                <h3 class="font-medium text-dark text-xl lg:text-2xl">Jelajahi Bersama Sistem Pakar Kami</h3>
            </div>
            <div class="flex flex-row gap-x-10">
                <a href="" class="bg-primary font-bold px-8 py-4 rounded-full text-white flex items-center hover:bg-primary_hover">Cek Kesehatan Gigi</a>
                <a href=""  class="bg-secondary font-bold px-8 py-4 rounded-full text-dark flex flex-row items-center gap-x-2 hover:bg-secondary_hover">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_55_27)">
                    <path d="M0.85526 19.7608C0.854322 23.1216 1.73925 26.4031 3.42191 29.2955L0.694336 39.178L10.886 36.5262C13.7048 38.0491 16.8632 38.847 20.0727 38.8472H20.0811C30.6763 38.8472 39.301 30.2917 39.3055 19.7759C39.3076 14.6802 37.3096 9.88857 33.6796 6.28361C30.0503 2.67896 25.2233 0.692755 20.0803 0.69043C9.48389 0.69043 0.85979 9.24547 0.855416 19.7608" fill="url(#paint0_linear_55_27)"/>
                    <path d="M0.168882 19.7544C0.167788 23.2361 1.08443 26.635 2.82709 29.631L0.00170898 39.8678L10.5588 37.1209C13.4676 38.6947 16.7426 39.5245 20.0751 39.5257H20.0837C31.059 39.5257 39.9936 30.6625 39.9983 19.7702C40.0001 14.4915 37.9303 9.5276 34.1706 5.79349C30.4105 2.05984 25.4109 0.00217054 20.0837 0C9.10655 0 0.173257 8.86202 0.168882 19.7544ZM6.45584 29.115L6.06166 28.4941C4.40461 25.8795 3.53 22.8581 3.53125 19.7557C3.53484 10.7022 10.9598 3.33643 20.09 3.33643C24.5115 3.33829 28.6667 5.04868 31.7921 8.15194C34.9173 11.2555 36.637 15.3811 36.6359 19.769C36.6318 28.8225 29.2067 36.1892 20.0837 36.1892H20.0772C17.1066 36.1876 14.1933 35.396 11.6526 33.9L11.0479 33.5442L4.78317 35.1741L6.45584 29.1149V29.115Z" fill="url(#paint1_linear_55_27)"/>
                    <path d="M15.1063 11.496C14.7336 10.6738 14.3413 10.6573 13.9868 10.6428C13.6965 10.6304 13.3646 10.6314 13.0331 10.6314C12.7012 10.6314 12.1621 10.7552 11.7063 11.249C11.2501 11.7433 9.9646 12.9377 9.9646 15.367C9.9646 17.7965 11.7477 20.1442 11.9963 20.474C12.2452 20.8031 15.4387 25.948 20.4964 27.9272C24.6997 29.572 25.5551 29.2449 26.4674 29.1624C27.3798 29.0802 29.4115 27.9683 29.826 26.8152C30.2408 25.6624 30.2408 24.6742 30.1165 24.4676C29.9921 24.2619 29.6602 24.1383 29.1626 23.8915C28.6649 23.6445 26.2185 22.45 25.7625 22.2852C25.3062 22.1205 24.9746 22.0383 24.6427 22.5328C24.3109 23.0264 23.358 24.1383 23.0675 24.4676C22.7774 24.7977 22.487 24.8388 21.9895 24.5918C21.4916 24.3441 19.8891 23.8233 17.9878 22.1413C16.5086 20.8324 15.5099 19.2162 15.2196 18.7218C14.9293 18.2281 15.1885 17.9605 15.438 17.7145C15.6616 17.4932 15.9358 17.1379 16.1848 16.8497C16.433 16.5613 16.5158 16.3555 16.6817 16.0262C16.8478 15.6966 16.7646 15.4083 16.6404 15.1613C16.5158 14.9143 15.5488 12.4723 15.1063 11.496Z" fill="white"/>
                    </g>
                    <defs>
                    <linearGradient id="paint0_linear_55_27" x1="1931.26" y1="3849.45" x2="1931.26" y2="0.69043" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#1FAF38"/>
                    <stop offset="1" stop-color="#60D669"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_55_27" x1="1999.83" y1="3986.78" x2="1999.83" y2="0" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F9F9F9"/>
                    <stop offset="1" stop-color="white"/>
                    </linearGradient>
                    <clipPath id="clip0_55_27">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                Chat dengan admin</a>
            </div>
        </div>
        <div class="flex flex-row items-center">
            <img src="<?= base_url()?>img/illustration-header.png" class="h-[452px]" alt="">
        </div>
    </div>
</section>
<!-- Hero end -->
<!-- Section Pelayanan Kami Start -->
<section class="max-w-full mx-auto  py-20 bg-secondary_bg">
    <h1 class="font-bold text-center text-[40px] py-14">Pelayanan Kami</h1>
    <div class="flex flex-row justify-between">
        <div class="flex flex-col items-center w-[282px] h-100px gap-y-2 text-center">
            <div> <img src="<?= base_url()?>img/poli-gigi.png" class="h-[100px] w-[100px]" alt=""></div>
            <h6 class="text-[28px] font-bold">Poli Gigi</h6>
            <p class="text-2xl font-medium">Senin,Rabu,Jumat</p>
            <p class="text-xl">13:00-17:00 WIB</p>
        </div>
         <div class="flex flex-col items-center w-[282px] h-100px gap-y-2 text-center">
            <div> <img src="<?= base_url()?>img/cek-kesehatan-gigi.png" class="h-[100px] w-[100px]" alt=""></div>
            <h6 class="text-[28px] font-bold">Cek Kesehatan Gigi</h6>
            <p class="text-xl">Cek kesehatan gigi anda <br> dengan sistem pakar kami</p>
        </div>
         <div class="flex flex-col items-center w-[282px] h-100px gap-y-2 text-center">
            <div> <img src="<?= base_url()?>img/buat-janji.png" class="h-[100px] w-[100px]" alt=""></div>
            <h6 class="text-[28px] font-bold">Buat Janji</h6>
            <p class="text-xl">Silahkan hubungi kami untuk buat janji</p>
        </div>
         <div class="flex flex-col items-center w-[282px] h-100px gap-y-2 text-center">
            <div> <img src="<?= base_url()?>img/fasilitas-lainnya.png" class="h-[100px] w-[100px]" alt=""></div>
            <h6 class="text-[28px] font-bold">Fasilitas Lainnya</h6>
            <p class="text-xl">Masih banyak fasilitas lainnya yang kami miliki</p>
        </div>
    </div>
</section>
<!-- Section Pelayanan Kami End -->
<!-- Section main content start -->
<section class="max-w-6xl mx-auto py-20">
    <div class="flex flex-row items-center gap-x-10 justify-between py-7">
        <div>
            <img src="<?= base_url()?>img/content-1.png" class="w-[500px]" alt="">
        </div>
        <div class="flex flex-col gap-y-10">
            <h1 class="text-[50px] font-bold">Mau punya gigi kuat hingga hari tua ?</h1>
            <div>
                <a href="#" class="bg-primary font-bold px-7 py-6 rounded-full text-white  items-center hover:bg-primary_hover">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="flex flex-row items-center gap-x-10 justify-between py-7">
        <div class="flex flex-col gap-y-10">
            <h1 class="text-[50px] font-bold">Gigi anak berlubang, Tips Cara Mengatasinya ?</h1>
            <div class="">
                <a href="#" class="bg-primary font-bold px-7 py-6 rounded-full text-white  items-center hover:bg-primary_hover">Baca Selengkapnya</a>
            </div>
        </div>
        <div>
            <img src="<?= base_url()?>img/content-2.png" class="w-[500px]" alt="">
        </div>
    </div>
</section>
<!-- Section main content end -->
<!-- Section flow Cek Kesehatan Start-->
<section class="max-w-full mx-auto py-20 bg-secondary">
    <div class="flex flex-col max-w-6xl mx-auto items-center justify-between gap-y-10">
        <div class="text-center">
            <h1 class="text-[40px] font-bold">Alur Cek Kesehatan Gigi</h1>
            <p class="text-sm">Dengan menggunakan sistem pakar, anda dapat mengecek penyakit gigi yang sedang anda alami</p>
        </div>
            <div class="flex flex-row gap-4 text-center items-center justify-between">
            <div class="flex flex-col items-center gap-y-2 py-5 px-3 shadow-xl rounded-xl bg-white">
               <img src="<?= base_url()?>img/pilih-gejala.png" class="w-[80px]" alt="">
                <h1 class="text-[22px] font-bold">Pilih Gejala</h1>
                <p class="text-sm">Pilih gejala apa yang <br> sedang anda rasakan pada gigi anda</p>
            </div>
            <div class="flex flex-col items-center gap-y-2 py-5 px-3 shadow-xl rounded-xl bg-white">
                <img src="<?= base_url()?>img/hasil-diagnosa.png" class="w-[80px]" alt="">
                <h1 class="text-[22px] font-bold">Hasil Diagnosa</h1>
                <p class="text-sm">Sistem akan memberikan <br> hasil diagnosa berdasakan gejala anda</p>
            </div>
            <div class="flex flex-col items-center gap-y-2 py-5 px-3 shadow-xl rounded-xl bg-white">
                <img src="<?= base_url()?>img/saran-perawatan.png" class="w-[80px]" alt="">
                <h1 class="text-[22px] font-bold">Lihat Perawatan</h1>
                <p class="text-sm">Lihat  hasil saran <br> perawatan yang tepat untuk gigi anda</p>
            </div>
        </div>
    </div>
</section>
<!-- Section flow Cek Kesehatan End-->
<!-- FAQ Start -->
<section class="max-w-6xl mx-auto py-20">
    <h1 class="text-[40px] font-bold text-center mb-10">Paling Sering Ditanyakan</h1>
    <div class="grid grid-cols-1 ">
        <!-- Accordion 1 start -->
        <div class="bg-white rounded-t-2xl outline outline-1 outline-gray-400 p-5 gap-x-14 shadow-xl">
            <div id="accordion_header" class="flex flex-row items-center justify-between cursor-pointer">
                <span class="font-bold text-xl">Apa Itu Sistem Pakar ?</span>
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M2.97 5.47a.75.75 0 0 1 1.06 0L8 9.44l3.97-3.97a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 0-1.06" clip-rule="evenodd"/></svg></i>
            </div>
            <div id="accordion_body" class="hidden">
                <div class="py-4 border-t">
                    <p class="text-justify"><b>Sistem Pakar</b> adalah jenis sistem kecerdasan buatan yang dirancang untuk menyamai tingkat keahlian manusia dalam suatu domain spesifik atau bidang pengetahuan tertentu. Sistem ini memanfaatkan pengetahuan ahli manusia untuk membuat keputusan atau memberikan solusi dalam situasi yang kompleks. Bayangkan Anda memiliki teman yang sangat berpengetahuan di bidang tertentu, dan teman tersebut dapat memberikan saran atau jawaban atas pertanyaan Anda seputar topik tersebut. Sistem pakar berfungsi mirip dengan teman berpengetahuan ini, tetapi dalam bentuk teknologi.</p>
                </div>
            </div>
        </div>  
        <!-- Accordion 1 end -->
        <!-- Accordion 2 start -->
        <div class="bg-white p-5 gap-x-14 outline outline-1 outline-gray-400 shadow-xl">
            <div id="accordion_header2" class="flex flex-row items-center justify-between cursor-pointer">
                <span class="font-bold text-xl">Apa Manfaat Menggunakan Sistem Pakar ?</span>
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M2.97 5.47a.75.75 0 0 1 1.06 0L8 9.44l3.97-3.97a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 0-1.06" clip-rule="evenodd"/></svg></i>
            </div>
            <div id="accordion_body2" class="hidden">
                <div class="py-4 border-t">
                   <p>
                        Sistem pakar memberikan sejumlah manfaat yang dapat memudahkan pemahaman. Berikut adalah beberapa manfaat utama sistem pakar :
                        <ul class="list-decimal px-3">
                            <li>
                                <b>Panduan Cepat dan Tepat:</b>
                                <p>Sistem pakar memberikan panduan cepat dan tepat seperti memiliki asisten pribadi yang memberikan petunjuk seketika.</p>
                            </>
                             <li>
                                <b>Penghematan Waktu dan Usaha:</b>
                                <p>Dengan akses langsung ke pengetahuan ahli, pengguna menghemat waktu dan usaha yang biasanya dibutuhkan untuk mencari informasi atau solusi.</p>
                            </li>
                            <li>
                                <b>Panduan Cepat dan Tepat:</b>
                                <p>Seperti memiliki konsultan pribadi yang selalu tersedia, sistem pakar dapat diakses kapan saja sesuai kebutuhan pengguna.</p>
                            </li>
                            <li>
                                <b>Fleksibilitas dan Pembaruan:</b>
                                <p>Sistem pakar dapat diperbarui dan dikembangkan seiring berjalannya waktu, memberikan fleksibilitas dan keberlanjutan dalam menyediakan layanan.</p>
                            </li>
                            <li>
                                <b>Pengambilan Keputusan yang Efisien:</b>
                                <p>Dengan memberikan informasi yang relevan dan analisis, sistem pakar membantu pengguna mengambil keputusan dengan lebih efisien dan efektif.</p>
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>  
        <!-- Accordion 2 end --> 
        <!--Accordion 3 start  -->
          <div class="bg-white rounded-b-2xl outline outline-1 outline-gray-400 p-5 gap-x-14 shadow-xl">
            <div id="accordion_header3" class="flex flex-row items-center justify-between cursor-pointer">
                <span class="font-bold text-xl">Bagaimana Alur Menggunakan Sistem Pakar ?</span>
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M2.97 5.47a.75.75 0 0 1 1.06 0L8 9.44l3.97-3.97a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 0-1.06" clip-rule="evenodd"/></svg></i>
            </div>
            <div id="accordion_body3" class="hidden">
                <div class="py-4 border-t">
                    <p>
                        Berikut ini merupakan alur menggunakan sistem pakar diagnosa penyakit pada gigi :
                        <ul class="list-decimal px-3">
                            <li>
                                <p>Buka web site Sistem Pakar Diagnosa Pada Gigi</p>
                            </li>
                             <li>
                                <p>Daftarkan Akun anda jika belum mendaftarkan akun</p>
                            </li>
                            <li>
                                <p>Jika sudah mendaftarkan akun, silahkan anda login dengan <i><b>username</b></i> dan <i> <b>password</b></i> yang sudah anda daftarkan</p>
                            </li>
                            <li>
                                <p>Pilih halaman <b>Cek Kesehatan Gigi</b></p>
                            </li>
                            <li>
                                <p>Klik tombol periksa dan Pilih gejala-gejala yang anda rasakan</p>
                            </li>
                            <li>
                                <p>Jika sudah, sistem akan memberikan diagnosa penyakit, penyebab dan saran perawatan</p>
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>  
        <!--Accordion 3 end  -->
   </div>
</section>
<!-- FAQ End -->
<!-- Footer Start -->
<footer class="max-w-full mx-auto py-20 bg-footer">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-row justify-between items-start py-10">
            <div class="flex flex-col text-white gap-y-4">
                <h3 class="font-bold text-2xl">Sistem Pakar</h3>
                <p>Klinik Pratama Rosa Kartika</p>
                <p>Jl. Jagakarsa II No.17B, RT.1/RW.7, Jagakarsa</p>
            </div>
            <div class="flex flex-col text-white gap-y-4">
                <h3 class="font-bold text-2xl">Kategori</h3>
                <p>Technology</p>
                <p>Medical</p>
                <p>Programming</p>
            </div>
            <div class="flex flex-col text-white gap-y-4">
                <h3 class="font-bold text-2xl">Tautan</h3>
                <p>Pelayanan Kami</p>
                <p>Cek Kesehatan Gigi</p>
                <p>Blog</p>
                <p>FAQ</p>
            </div>
        </div>
        <div class="flex gap-x-10 justify-center py-10 border-t border-secondary">
            <div class="inline-block outline outline-white  p-2 rounded-full items-center">
                <a href="#">
                   <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="white" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                </a>
            </div>
            <div class="inline-block outline outline-white  p-2 rounded-full items-center">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="white" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95"/></svg>                
                </a>
            </div>
            <div class="inline-block outline outline-white  p-2 rounded-full items-center">
                <a href="#">
                   <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="white" d="M12 4c.855 0 1.732.022 2.582.058l1.004.048l.961.057l.9.061l.822.064a3.802 3.802 0 0 1 3.494 3.423l.04.425l.075.91c.07.943.122 1.971.122 2.954c0 .983-.052 2.011-.122 2.954l-.075.91c-.013.146-.026.287-.04.425a3.802 3.802 0 0 1-3.495 3.423l-.82.063l-.9.062l-.962.057l-1.004.048A61.59 61.59 0 0 1 12 20a61.59 61.59 0 0 1-2.582-.058l-1.004-.048l-.961-.057l-.9-.062l-.822-.063a3.802 3.802 0 0 1-3.494-3.423l-.04-.425l-.075-.91A40.662 40.662 0 0 1 2 12c0-.983.052-2.011.122-2.954l.075-.91c.013-.146.026-.287.04-.425A3.802 3.802 0 0 1 5.73 4.288l.821-.064l.9-.061l.962-.057l1.004-.048A61.676 61.676 0 0 1 12 4m-2 5.575v4.85c0 .462.5.75.9.52l4.2-2.425a.6.6 0 0 0 0-1.04l-4.2-2.424a.6.6 0 0 0-.9.52"/></g></svg>
                </a>
            </div>
        </div>
        <div class="text-center text-white">
            <h1>Dibuat dengan ❤ oleh <b>Muhamad Al Furqon & Laras Cahyaning Pertiwi</b></h1>
        </div>
    </div>
</footer>
<!-- Footer End-->
<script src="<?= base_url()?>js/script.js"></script>
<?= $this->endSection(); ?>