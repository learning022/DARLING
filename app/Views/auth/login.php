<?= $this->extend('layouts/auth') ?>

<?= $this->section('page_title') ?>
    Login | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="relative overflow-hidden">
        <div class="w-full gap-10 px-20 py-10 sm:flex">
            
            <div class="hidden md:w-1/2 flex justify-center md:justify-start mb-8 md:mb-0 sm:block">
                <div class="h-full max-w-sm rounded-lg overflow-hidden shadow-lg bg-white dark:bg-neutral-800">
                    <img class="w-full px-5 pt-6" src="<?php echo base_url('assets/images/damribumnlogo.png'); ?>" alt="Card Image" style="max-width: 250px; max-height: 250px;">
                    <div class="px-7 py-4">
                        <div class="font-bold text-2xl mb-2">Halo, Selamat Datang di Course Darling</div>
                    </div>  
                    <img class="w-full h-full" src="<?php echo base_url('assets/images/character1.png'); ?>" alt="Card Image" style="height: 400px;">
                </div>
            </div>

            <div class="pt-6 md:pe-8 md:w-1/2 xl:pe-0 xl:w-5/12">
                <div class="mb-16 text-left sm:text-right">
                    <span>Belum memiliki akun? </span>
                    <a href="<?= base_url('auth/register')?>" class="text-blue-600 hover:underline">Daftar sekarang</a>
                </div>
                <h1 class="text-3xl text-gray-800 font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight dark:text-neutral-200">
                    Halaman Login
                </h1>
                <p class="mt-3 mb-6 text-base text-gray-500 dark:text-neutral-500">
                    Silahkan masukan informasi akunmu.
                </p>

                <form action="<?= base_url('auth/login')?>" method="POST">
                    <?php if(session()->getFlashdata('msg')):?>
                        <div>
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif;?>
                    <div class="mb-4" id="form_input">
                        <label for="email" class="block text-sm font-medium dark:text-white">
                            <span class="sr-only">Email address</span>
                        </label>
                        <input name="email" type="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukan Email Anda">
                    </div>

                    <div class="mb-4" id="form_input">
                        <label for="password" class="block text-sm font-medium dark:text-white">
                            <span class="sr-only">Password</span>
                        </label>
                        <input name="password" type="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Masukan Password Anda">
                    </div>

                    <div class="grid" id="from_input">
                        <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-800 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Login
                        </button>
                    </div>
                </form>

                <div class="mt-8 grid">
                    <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                            <path d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z" fill="#4285F4"/>
                            <path d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z" fill="#34A853"/>
                            <path d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z" fill="#FBBC05"/>
                            <path d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z" fill="#EB4335"/>
                        </svg>
                        Login Dengan Google
                    </button>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?> 
