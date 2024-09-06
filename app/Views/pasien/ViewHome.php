<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
    <!-- Hero Start -->
    <section class="flex flex-col max-w-6xl min-h-screen py-20 mx-auto md:py-20 px-5 lg:py-28 justify-center">
    <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="flex flex-col gap y-5 md:gap-y-8 xl:gap-y-10">
            <div class="flex flex-col gap-2 text-center md:text-left md:gap-y-4" >
                <h1 class="font-bold text-primary text-[22px] leading-10 md:text-4xl md:leading-[40px] lg:text-5xl lg:leading-[58px]">Senyum Sehat Hidup <br class="hidden md:block">
                Bahagia</h1>
                <h3 class="font-medium text-dark text-md md:text-xl lg:text-xl">Jelajahi Bersama Sistem Pakar Kami</h3>
            </div>
    <!-- Mobile image start-->
                <div class="block md:hidden">
                    <img  class="h-[230px] mx-auto"  src="<?= base_url()?>img/illustration-header.png" alt="">
                </div>
    <!-- Mobile image end-->
            <div class="flex flex-col gap-y-5 md:flex-row md:gap-x-8">
                <a href="<?php base_url()?>cekKesehatan" class="bg-primary font-bold px-8 py-4 rounded-full text-white flex justify-center md:text-[12px] md:px-4 md:items-center lg:text-xl lg:px-6 lg:py-5 hover:bg-primary_hover">Cek Kesehatan Gigi</a>
                <!-- <a id="chatAdminBtn" href="https://wa.me/628567844215 " onclick="kirimDataKonsultasi()" class="bg-secondary font-bold px-8 py-4 rounded-full text-dark flex justify-center md:text-[12px] md:px-4 md:flex-row lg:text-xl lg:px-6 lg:py-5 items-center gap-x-2 hover:bg-secondary_hover"> -->
                
                <form action="<?php base_url()?>/dataKonsultasiPasien" method="post">

                <button type="submit" id="chatAdminBtn" class="bg-secondary font-bold px-8 py-4 rounded-full text-dark flex justify-center md:text-[12px] md:px-4 md:flex-row lg:text-xl lg:px-6 lg:py-5 items-center gap-x-2 hover:bg-secondary_hover">
                <svg class="md:w-8 md:h-8" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">                    <g clip-path="url(#clip0_55_27)">
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
                Chat dengan admin</button>
            </form>
            </div>
        </div>
        <div class=" hidden flex-row items-center md:block ">
            <img src="<?= base_url()?>img/illustration-header.png" class="h-[400px] md:h-[350px] lg:h-[450px]" alt="">
        </div>
    </div>
    </section>
    <!-- Hero end -->

    <!-- Section Pelayanan Kami Start -->
    <section class="flex flex-col max-w-full min-h-screen mx-auto py-5 xl:py-20 px-3 bg-secondary_bg items-center justify-center">
    <h1 class="font-bold text-center text-[20px] py-8 md:py-5 lg:text-[30px] lg:py-10 xl:text-[40px] xl:py-14">Pelayanan Kami</h1>
    <div class="flex flex-col gap-y-10 justify-between items-center md:flex-row md:justify-center md:gap-x-4 lg:gap-x-4 xl:gap-x-4 xl:justify-between">
        <div class="flex flex-row gap-x-9 md:gap-0 items-center xl:flex xl:gap-x-20">
            <div class="flex flex-col items-center w-[130px] md:w-[180px] lg:w-[220px] xl:w-[282px] h-100px gap-y-2 text-center">
                <div> <img src="<?= base_url()?>img/poli-gigi.png" class="h-[50px] w-[50px] md:h-[60px] md:w-[60px] lg:h-[80px] lg:w-[80px] xl:h-[100px] lg: xl:w-[100px]" alt=""></div>
                <h6 class="text-[14px] md:text-[14px] lg:text-[20px] xl:text-[28px] font-bold">Poli Gigi</h6>
                <p class="text-[12px] md:text-[14px] lg:text-lg xl:text-2xl font-medium">Senin,Rabu,Jumat</p>
                <p class="text-[12px] md:text-[12px] lg:text-lg xl:text-xl">13:00-17:00 WIB</p>
            </div>
            <div class="flex flex-col items-center w-[130px] md:w-[180px] lg:w-[220px] xl:w-[282px] h-100px gap-y-2 text-center">
                <div> <img src="<?= base_url()?>img/cek-kesehatan-gigi.png" class="h-[50px] w-[50px] md:h-[60px] md:w-[60px] lg:h-[80px] lg:w-[80px] xl:h-[100px] lg: xl:w-[100px]" alt=""></div>
                <h6 class="text-[14px] md:text-[14px] lg:text-[20px] xl:text-[28px] font-bold">Cek Kesehatan Gigi</h6>
                <p class="text-[12px]  md:text-[12px] lg:text-lg xl:text-xl">Cek kesehatan gigi anda <br> dengan sistem pakar kami</p>
            </div>
        </div>
        <div class="flex flex-row gap-x-9 md:gap-0 items-center  xl:flex xl:gap-x-20">
            <div class="flex flex-col items-center w-[130px] md:w-[180px] lg:w-[220px] xl:w-[282px] h-100px gap-y-2 text-center">
                <div> <img src="<?= base_url()?>img/buat-janji.png" class="h-[50px] w-[50px] md:h-[60px] md:w-[60px] lg:h-[80px] lg:w-[80px] xl:h-[100px] lg: xl:w-[100px]" alt=""></div>
                <h6 class="text-[14px] md:text-[14px] lg:text-[20px] xl:text-[28px] font-bold">Buat Janji</h6>
                <p class="text-[12px] md:text-[12px] lg:text-lg xl:text-xl">Silahkan hubungi kami untuk buat janji</p>
            </div>
            <div class="flex flex-col items-center w-[130px] md:w-[180px] lg:w-[220px] xl:w-[282px] h-100px gap-y-2 text-center">
                <div> <img src="<?= base_url()?>img/fasilitas-lainnya.png" class="h-[50px] w-[50px] md:h-[60px] md:w-[60px] lg:h-[80px] lg:w-[80px] xl:h-[100px] lg: xl:w-[100px]" alt=""></div>
                <h6 class="text-[14px] md:text-[14px] lg:text-[20px] xl:text-[28px] font-bold">Fasilitas Lainnya</h6>
                <p class="text-[12px] md:text-[12px] lg:text-lg xl:text-xl">Masih banyak fasilitas lainnya yang kami miliki</p>
            </div>
        </div>
    </div>
    </section>
    <!-- Section Pelayanan Kami End -->
    
    <!-- Section main content start -->
    <section class="flex flex-col max-w-6xl min-h-screen mx-auto md:py-20 py-5 px-5 justify-center gap-y-5">
    <div class="flex flex-col bg-white shadow-xl rounded-3xl md:shadow-none md:flex-row items-center gap-x-10 justify-between py-8 ">
        <div>
            <img src="<?= base_url()?>img/content-1.png" class="w-[200px] md:w-[500px]" alt="">
        </div>
        <div class="flex flex-col gap-y-3">
            <h1 class="text-[16px] text-center py-5 md:text-[40px] md:text-left xl:text-[50px] font-bold">Mau punya gigi kuat hingga hari tua ?</h1>
            <div class="flex justify-center md:flex md:justify-end">
                <a href="<?= base_url()?>blog_1" class="text-[14px] px-6 py-3 bg-primary font-bold md:px-7 md:py-6 rounded-full text-white  items-center hover:bg-primary_hover">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="flex flex-col bg-white shadow-xl rounded-3xl md:shadow-none md:flex-row  items-center gap-x-10 justify-between py-8 ">
         <div class="block md:hidden">
            <img src="<?= base_url()?>img/content-2.png" class="w-[200px] md:w-[500px]" alt="">
        </div>
        <div class="flex flex-col gap-y-3">
            <h1 class="text-[16px] text-center py-5 md:text-[40px] md:text-left xl:text-[50px] font-bold">Gigi anak berlubang, Tips Cara Mengatasinya ?</h1>
             <div class="flex justify-center md:justify-start">
                <a href="<?= base_url()?>blog_2" class="text-[14px] px-6 py-3 bg-primary font-bold md:px-7 md:py-6 rounded-full text-white  items-center hover:bg-primary_hover">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="hidden md:block">
            <img src="<?= base_url()?>img/content-2.png" class="w-[500px]" alt="">
        </div>
    </div>
    </section>
    <!-- Section main content end -->
    
    <!-- Section flow Cek Kesehatan Start-->
    <section class="flex flex-col max-w-full min-h-screen mx-auto py-20 px-5 bg-secondary justify-center">
    <div class="flex flex-col max-w-6xl mx-auto items-center justify-between gap-y-10">
        <div class="text-center">
            <h1 class="text-[20px] md:text-[40px] font-bold">Alur Cek Kesehatan Gigi</h1>
            <p class="text-[14px] md:text-lg">Dengan menggunakan sistem pakar, anda dapat mengecek penyakit gigi yang sedang anda alami</p>
        </div>
            <div class="flex flex-col md:flex-row gap-4 text-center items-center justify-between">
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
    <section class="flex flex-col min-h-screen max-w-6xl mx-auto py-20 px-5 justify-center">
    <h1 class="text-[20px] md:text-[40px] font-bold text-center mb-10">Paling Sering Ditanyakan</h1>
    <div class="grid grid-cols-1 ">
        <!-- Accordion 1 start -->
        <div class="bg-white rounded-t-2xl outline outline-1 outline-gray-400 p-5 gap-x-14 shadow-xl">
            <div id="accordion_header" class="flex flex-row items-center justify-between cursor-pointer">
                <span class="font-bold text-[14px] md:text-xl">Apa Itu Sistem Pakar ?</span>
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M2.97 5.47a.75.75 0 0 1 1.06 0L8 9.44l3.97-3.97a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 0-1.06" clip-rule="evenodd"/></svg></i>
            </div>
            <div id="accordion_body" class="hidden">
                <div class="py-4 border-t">
                    <p class="text-justify text-[14px] xl:text-based"><b>Sistem Pakar</b> adalah jenis sistem kecerdasan buatan yang dirancang untuk menyamai tingkat keahlian manusia dalam suatu domain spesifik atau bidang pengetahuan tertentu. Sistem ini memanfaatkan pengetahuan ahli manusia untuk membuat keputusan atau memberikan solusi dalam situasi yang kompleks. Bayangkan Anda memiliki teman yang sangat berpengetahuan di bidang tertentu, dan teman tersebut dapat memberikan saran atau jawaban atas pertanyaan Anda seputar topik tersebut. Sistem pakar berfungsi mirip dengan teman berpengetahuan ini, tetapi dalam bentuk teknologi.</p>
                </div>
            </div>
        </div>  
        <!-- Accordion 1 end -->
        <!-- Accordion 2 start -->
        <div class="bg-white p-5 gap-x-16 outline outline-1 outline-gray-400 shadow-xl">
            <div id="accordion_header2" class="flex flex-row items-center justify-between cursor-pointer">
                <span class="font-bold text-[14px] md:text-xl">Apa Manfaat Menggunakan Sistem Pakar ?</span>
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M2.97 5.47a.75.75 0 0 1 1.06 0L8 9.44l3.97-3.97a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 0-1.06" clip-rule="evenodd"/></svg></i>
            </div>
            <div id="accordion_body2" class="hidden">
                <div class="py-4 border-t">
                   <p class="text-[14px] xl:text-based">
                        Sistem pakar memberikan sejumlah manfaat yang dapat memudahkan pemahaman. Berikut adalah beberapa manfaat utama sistem pakar :
                        <ul class="list-decimal px-3">
                            <li>
                                <b>Panduan Cepat dan Tepat:</b>
                                <p class="text-[14px] xl:text-based">Sistem pakar memberikan panduan cepat dan tepat seperti memiliki asisten pribadi yang memberikan petunjuk seketika.</p>
                            </>
                             <li>
                                <b>Penghematan Waktu dan Usaha:</b>
                                <p class="text-[14px] xl:text-based">Dengan akses langsung ke pengetahuan ahli, pengguna menghemat waktu dan usaha yang biasanya dibutuhkan untuk mencari informasi atau solusi.</p>
                            </li>
                            <li>
                                <b>Panduan Cepat dan Tepat:</b>
                                <p class="text-[14px] xl:text-based">Seperti memiliki konsultan pribadi yang selalu tersedia, sistem pakar dapat diakses kapan saja sesuai kebutuhan pengguna.</p>
                            </li>
                            <li>
                                <b>Fleksibilitas dan Pembaruan:</b>
                                <p class="text-[14px] xl:text-based">Sistem pakar dapat diperbarui dan dikembangkan seiring berjalannya waktu, memberikan fleksibilitas dan keberlanjutan dalam menyediakan layanan.</p>
                            </li>
                            <li>
                                <b>Pengambilan Keputusan yang Efisien:</b>
                                <p class="text-[14px] xl:text-based">Dengan memberikan informasi yang relevan dan analisis, sistem pakar membantu pengguna mengambil keputusan dengan lebih efisien dan efektif.</p>
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
                <span class="font-bold text-[14px] md:text-xl">Bagaimana Alur Menggunakan Sistem Pakar ?</span>
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M2.97 5.47a.75.75 0 0 1 1.06 0L8 9.44l3.97-3.97a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 0-1.06" clip-rule="evenodd"/></svg></i>
            </div>
            <div id="accordion_body3" class="hidden">
                <div class="py-4 border-t">
                    <p class="text-[14px] xl:text-based">
                        Berikut ini merupakan alur menggunakan sistem pakar diagnosa penyakit pada gigi :
                        <ul class="list-decimal px-3">
                            <li>
                                <p class="text-[14px] xl:text-based">Buka web site Sistem Pakar Diagnosa Pada Gigi</p>
                            </li>
                             <li>
                                <p class="text-[14px] xl:text-based">Daftarkan Akun anda jika belum mendaftarkan akun</p>
                            </li>
                            <li>
                                <p class="text-[14px] xl:text-based">Jika sudah mendaftarkan akun, silahkan anda login dengan <i><b>username</b></i> dan <i> <b>password</b></i> yang sudah anda daftarkan</p>
                            </li>
                            <li>
                                <p class="text-[14px] xl:text-based">Pilih halaman <b>Cek Kesehatan Gigi</b></p>
                            </li>
                            <li>
                                <p class="text-[14px] xl:text-based">Klik tombol periksa dan Pilih gejala-gejala yang anda rasakan</p>
                            </li>
                            <li>
                                <p class="text-[14px] xl:text-based">Jika sudah, sistem akan memberikan diagnosa penyakit, penyebab dan saran perawatan</p>
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
    <!-- Script section -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Fungsi untuk mengirim data konsultasi
    function kirimDataKonsultasi() {
        // Anda perlu mengimplementasikan logika untuk mengecek apakah pengguna sudah login
        let isLoggedIn = false; // Ganti nilai ini dengan logika login yang sesuai

        if (isLoggedIn) {
            // Ambil username dan waktu saat ini
            let username = 'username'; // Ganti 'username' dengan username pengguna yang sebenarnya
            let waktu_konsultasi = new Date().toISOString(); // Dapatkan waktu saat ini dalam format ISO

            // Buat objek dengan data konsultasi
            let data = {
                username: username,
                waktu_konsultasi: waktu_konsultasi,
                // Tambahkan data konsultasi lainnya sesuai kebutuhan
            };

            // Kirim data ke server menggunakan AJAX
            $.ajax({
                type: 'POST',
                url: '/dataKonsultasiPasien', // Perbarui URL sesuai kebutuhan
                data: data,
                success: function(response) {
                    // Tangani respons sukses dari server
                    console.log('Data konsultasi terkirim: ' + response);
                    // Redirect ke WhatsApp atau lakukan tindakan lain sesuai kebutuhan
                },
                error: function(xhr, status, error) {
                    // Tangani respons error dari server
                    console.error('Error saat mengirim data konsultasi:', error);
                }
            });
        } else {
            // Redirect ke WhatsApp karena pengguna belum login
            window.location.href = 'https://wa.me/628567844215'; // Ganti dengan URL WhatsApp yang benar
        }
    }
</script>


    <script src="<?= base_url()?>js/script.js"></script>   
<?= $this->endSection(); ?>