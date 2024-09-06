<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 ">
    <div class="container max-w-6xl mx-auto">
        <div class="flex flex-row items-center justify-between relative">

            <div class="px-4">
                <a href="#" class="text-primary font-bold lg:text-2xl block py-6">Sistem Pakar</a>
            </div>

            <div class="flex items-center px-4">

                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-6xl lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a  class="nav-link text-base font-medium text-dark py-2 mx-8 flex group-hover:text-primary" href="<?= base_url()?> ">Home</a>
                        </li>
                        <li class="group">
                            <a  class="nav-link text-base font-medium text-dark py-2 mx-8 flex group-hover:text-primary" href="<?= base_url()?>cekKesehatan">Cek Kesehatan</a>
                        </li>
                        <li class="group">
                            <a  class="nav-link text-base font-medium  text-dark py-2 mx-8 flex group-hover:text-primary" href="<?= base_url()?>blog">Blog</a>
                        </li>
                        
                         <!-- Pengecekan status login -->
                        <?php if(session()->get('isLoggedIn')): ?>
                            <!-- Jika sudah login, tampilkan tombol logout -->
                            <li class="group">
                                <a class="nav-link text-base font-medium text-white py-2 mx-8 flex hover:text-red-800 md:px-6 md:py-3 bg-red-600 rounded-full justify-center" href="<?= base_url('logout') ?>">Logout</a>
                            </li>
                            
                        <?php else: ?>
                            <!-- Jika belum login, tampilkan tombol login dan register -->
                            <div class="flex flex-col lg:flex-row lg:ms-32 gap-y-3">
                                <li class="group">
                                    <a class="text-base font-semibold text-dark py-2 mx-4 flex hover:bg-secondary_hover md:px-6 md:py-3 bg-secondary rounded-full justify-center" href="<?= base_url()?>loginPasien">Login</a>
                                </li>
                                <li class="group">
                                    <a class="text-base font-semibold text-white py-2 mx-4 flex hover:bg-primary_hover md:px-6 md:py-3 bg-primary rounded-full justify-center" href="<?= base_url()?>registrasiPasien">Sign Up</a>
                                </li>
                            </div>
                        <?php endif; ?>
                    </ul>
                </nav>

            </div>

        </div>
    </div>

</header>