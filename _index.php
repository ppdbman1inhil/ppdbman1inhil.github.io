<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Swiper -->
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">

    <link href="./css/carousel.css" rel="stylesheet">
    <!-- Tailwind css -->
    <link href="./css/output.css" rel="stylesheet">

    <!-- icon web title -->
    <link rel="shortcut icon" href="./img/icon.png">

    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* background: #fff; */
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            /* width: 100%; */
            height: 100%;
            /* object-fit: cover; */
        }

        .swiper-horizontal>.swiper-pagination-bullets,
        .swiper-pagination-bullets.swiper-pagination-horizontal,
        .swiper-pagination-custom,
        .swiper-pagination-fraction {
            bottom: var(--swiper-pagination-top, 30px)
        }

        .videowrapper {
            float: none;
            clear: both;
            width: 100%;
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 25px;
            height: 0;
        }

        .videowrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .swiper-pagination-bullet-active {
            background-color: #287E1A !important;
        }

        a {
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <img src="./img/bg-batik.png" class="hidden md:block absolute top-0" style="z-index: -1;">
    <img src="./img/bg-sm-batik.png" class="visible md:hidden absolute top-0" style="width:100%;z-index: -1;">
    <header class="mx-8 lg:mx-24 my-8">
        <nav class="flex justify-between">
            <div class="flex">
                <img src="./img/icon.png" class="w-14" alt="logo PPDB" />
                <p class="text-base md:text-lg font-semibold self-center ml-2">PPDB MAN 1 INHIL</p>
            </div>
            <button data-drawer-target="default-sidebar" aria-controls="default-sidebar" type="button" id="menu-button" class="lg:hidden h-6 my-auto">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>

            <div class="hidden lg:flex lg:justify-end">
                <a href="#slide1" class="text-sm font-semibold mr-35px self-center text-gray-900 hover:text-secondary-darker active:text-secondary-darker">Home</a>
                <a href="#tahapan-ppdb" class="text-sm font-semibold mr-35px self-center text-gray-900 hover:text-secondary-darker active:text-secondary-darker">Tahap
                    PPDB</a>
                <a href="#alur-daftar" class="text-sm font-semibold mr-35px self-center text-gray-900 hover:text-secondary-darker active:text-secondary-darker">Alur
                    Pendaftaran</a>
                <a href="#persyaratan-umum" class="text-sm font-semibold mr-35px self-center text-gray-900 hover:text-secondary-darker active:text-secondary-darker">Persyaratan
                    Umum</a>
                <a href="#jalur-masuk" class="text-sm font-semibold mr-35px self-center text-gray-900 hover:text-secondary-darker active:text-secondary-darker">Jalur
                    Masuk</a>
            </div>

            <aside id="default-sidebar" class="hidden fixed top-0 left-0 z-40 w-64 h-screen transition-transform translate-x-0" aria-label="Sidebar" aria-hidden="true">
                <div class="h-full px-3 py-4 overflow-y-auto bg-white">
                    <div class="relative h-4 w-auto">
                        <!-- <svg id="close-sidebar" class=" absolute right-4 flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                         </svg> -->
                        <img id="close-sidebar" src="./img/close.png" class="absolute right-1 flex-shrink-0 w-8 h-8 cursor-pointer">
                    </div>
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="#slide1" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tahapan-ppdb" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                <span class="flex-1 ms-3 whitespace-nowrap">Tahap PPDB</span>
                            </a>
                        </li>
                        <li>
                            <a href="#alur-daftar" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Alur Pendaftaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="#persyaratan-umum" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                                <span class="flex-1 ms-3 whitespace-nowrap">Persyaratan Umum</span>
                            </a>
                        </li>
                        <li>
                            <a href="#jalur-masuk" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Jalur Masuk</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </nav>
    </header>

    <section id="slide1" class="mt-10 z-10">
        <!-- <img src="./img/bg-batik.svg" class="hidden md:block absolute top-0" style="z-index: -1;">
        <img src="./img/bg-sm-batik.svg" class="w-full visible md:hidden absolute top-0" style="z-index: -1;"> -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <div class="flex flex-col justify-between mx-8 md:ml-8 lg:ml-24">
                <div class="">
                    <p class="text-center md:text-left text-1xl lg:text-2xl 2xl:text-4xl font-semibold">PPDB MAN 1 INHIL
                    </p>
                    <!-- TAMPILKAN PESAN SESUAI WAKTU JADWAL PPDB -->
                    <?php
                    $date = time();

                    $registrationStart = strtotime('2024-05-02 00:00:00');
                    $registrationClosed = strtotime('2024-05-31 23:59:59');

                    if ($date < $registrationStart && $date < $registrationClosed) {
                        //HITUNG SISA WAKTU REGISTRASI DIBUKA
                        $timefromdb = $date;
                        $timeleft = $registrationStart - $timefromdb;
                        // $daysleft = round((($timeleft / 24) / 60) / 60);
                        $daysleft = floor($timeleft / (60 * 60 * 24));
                    ?>
                        <p class="text-center md:text-left text-3xl lg:text-4xl 2xl:text-6xl font-bold">SEGERA DIBUKA!</p>
                        <p class="text-center md:text-left text-sm 2xl:text-base">Ayo segera persiapkan berkas persyaratan
                            Anda.</p>
                        <p class="text-center md:text-left text-xl lg:text-2xl font-semibold">Sisa waktu pendaftaran dibuka
                        </p>
                        <p class="text-center mt-4 md:text-left text-8xl lg:text-9xl font-bold text-secondary-darker">
                            <?php echo $daysleft; ?><span class="text-xl md:text-2xl font-semibold text-text-primary">Hari</span>
                        </p>

                    <?php
                    } else if ($date >= $registrationStart && $date < $registrationClosed) { // rentang jadwal penerimaan
                        //HITUNG SISA WAKTU DAFTAR
                        $timefromdb = $date; //source time
                        $timeleft = $registrationClosed - $timefromdb;
                        $daysleft = round((($timeleft / 24) / 60) / 60);
                    ?>
                        <p class="text-center md:text-left text-3xl lg:text-4xl 2xl:text-6xl font-bold">TELAH DIBUKA!</p>
                        <p class="text-center md:text-left text-sm 2xl:text-base">Ayo segera daftarkan diri Anda segera.</p>

                        <p class="text-center md:text-left text-xl lg:text-2xl font-semibold">Sisa waktu pendaftaran ditutup
                        </p>
                        <p class="text-center mt-4 md:text-left text-8xl lg:text-9xl font-bold text-secondary-darker">
                            <?php echo $daysleft; ?><span class="text-xl md:text-2xl font-semibold text-text-primary">Hari</span>
                        </p>
                    <?php
                    } else if ($date > $registrationClosed) { // di atas jadwal alias TUTUP
                    ?>
                        <p class="text-center md:text-left text-3xl lg:text-4xl 2xl:text-6xl font-bold">TELAH DITUTUP!</p>
                        <p class="text-center md:text-left text-sm 2xl:text-base">Terima kasih atas partisipasi Anda yang
                            telah mendaftar. Silahkan menyerahkan berkas secara langsung di MAN 1 INHIL untuk dilakukan
                            verifikasi berkas.</p>
                    <?php
                    } ?>


                </div>

                <div class="my-10 lg:my-20 2xl:mb-52 2xl:my-16">
                    <p class="text-center md:text-left text-sm 2xl:text-base mb-2">Assalamualaikum Wr Wb</p>
                    <p class="text-justify text-sm 2xl:text-base 2xl:mr-44">MAN 1 Indragiri Hilir merupakan madrasah
                        aliyah yang islami, berteknologi, dan bertaraf nasional, dengan lingkungan yang hijau, asri,
                        teduh, dan indah serta nyaman untuk belajar, mengundang seluruh siswa siswi terbaik dan
                        berprestasi yang berada diwilayah Indragiri Hilir, untuk bergabung menjadi siswa siswi MAN 1
                        Indragiri Hilir melalui Penerimaan Peserta Didik Baru jalur Penerimaan Madrasah, Jalur Prestasi,
                        Jalur Afirmasi dan Jalur Reguler.</p>
                </div>
            </div>
            <div class="order-first md:order-last swiper autoSwiper">
                <!-- <img class="absolute md:w-3/4 xl:w-1/2 top-20" style="z-index: 1;" src="./img/bg-shape-slides.svg" -->
                <!-- <img class="absolute w-3/4 md:1/2 top-20" style="z-index: 1;" src="./img/bg-shape-slides.svg" -->
                <img class="absolute md:1/2 top-20" style="z-index: 1;" src="./img/bg-shape-slides.svg" alt="bg image slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 1.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 2.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 3.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 4.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 5.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 6.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 7.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 8.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 9.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 10.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 11.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 12.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 13.png" alt="image slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-contain w-3/4 sm:w-full 2xl:w-3/4 h-full drop-shadow-xl mx-auto" src="./img/gambar slide 14.png" alt="image slide 1">
                    </div>
                </div>
                <div class="swiper-pagination -mb-8"></div>
            </div>
        </div>
    </section>

    <!-- SECTION TAHAP PPDB -->
    <section id="tahapan-ppdb" class="2xl:mt-20">
        <img class="absolute object-fill w-screen" style="z-index: -1;" src="./img/bg_middle-top.svg" alt="">
        <div class="2xl:mt-20 mx-8 md:mx-24 lg:mx-52">
            <div class="container mx-auto">
                <p class="text-2xl sm:text-4xl font-semibold text-center">Tahapan PPDB</p>
                <p class="text-sm sm:text-base text-center mt-3">Tahapan Penerimaan Peserta Didik Baru (PPDB) MAN 1
                    INHIL Tahun Ajaran 2024/2025 </p>
                <img class="mx-auto mt-8 2xl:w-3/4" src="./img/img_tahap_ppdb.svg" alt="">
            </div>
        </div>
        <!-- <div class="container mx-auto" style="background-image:url(./img/bg_middle-top.svg);"> -->
    </section>

    <!-- SECTION ALUR PENDAFTARAN -->
    <section id="alur-daftar" class="pt-10 sm:mt-20 mb-10 sm:mb-20 relative">
        <!-- <img class="absolute object-fill left-[21%] top-[10%] -z-10" src="./img/bg_middle-bottop.svg" alt=""> -->
        <img class="absolute -bottom-[60%] h-[95%]" src="./img/left.svg" alt="">
        <img class="absolute w-1/5 right-0 -top-[58%] " src="./img/right.svg" alt="">
        <div class="mx-8 md:mx-24 lg:mx-52 z-10 ">
            <div class="container mx-auto">
                <p class="text-2xl sm:text-4xl font-semibold text-center">Alur Pendaftaran</p>
                <p class="text-base text-center mt-3">Alur Proses Pendaftaran Online PPDB MAN I INHIL Tahun Ajaran
                    2024/2025
                </p>
                <img class="mx-auto mt-8 2xl:w-3/4" src="./img/img_alur_registrasi.png" alt="">
            </div>
        </div>
    </section>

    <!-- SECTION PERSYARATAN UMUM -->
    <section id="persyaratan-umum">
        <div class="container mx-auto px-10 lg:px-24 py-10">
            <p class="text-2xl sm:text-4xl font-semibold text-center">Persyaratan Umum</p>
            <p class="text-base text-center mt-3"><!---TODO: ISI KALIMATNYA DI SINI NANTI--> </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-7 sm:mt-14">
                <div class="my-auto mx-auto">
                    <img class="w-1/2 sm:w-auto mx-auto" src="./img/ilustration_persyaratan_umum.png" alt="">
                </div>
                <div class="mx-auto">
                    <ul class="xl:mt-8">
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Scan Kartu Keluarga (KK)
                        </li>
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Scan Akta Kelahiran
                        </li>
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Scan Kartu KIP/PKH/KKS (untuk Jalur Afirmasi)
                        </li>
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Scan Surat Keterangan Lulus dari SMP/MTs
                        </li>
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Scan Pas Foto berwarna
                        </li>
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Scan Surat Berkelakuan baik dari SMP/Mts
                        </li>
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Screenshot NISN dari web Kemdikbud
                        </li>
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Scan Sertifikat/Piagam Prestasi (untuk Jalur Prestasi)
                        </li>
                        <li class="flex text-sm md:text-base lg:text-lg p-1 lg:p-3">
                            <img class="mr-4 w-5 lg:w-auto" src="./img/ic_point.svg" alt="">
                            Map biasa warna kuning (laki-laki)/merah (perempuan)
                        </li>
                        </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION JALUR MASUK -->
    <section id="jalur-masuk" class="flex flex-col container mx-auto py-16">
        <p class="text-2xl sm:text-4xl font-semibold text-center">Jalur Masuk</p>

        <div class="hidden md:block slider mt-8 md:mt-20">
            <input type="radio" name="entrance" id="t-1" checked>
            <input type="radio" name="entrance" id="t-2">
            <input type="radio" name="entrance" id="t-3">
            <input type="radio" name="entrance" id="t-4">
            <input type="radio" name="entrance" id="t-5">
            <input type="radio" name="entrance" id="t-6">

            <div class="entrances">
                <label for="t-1" class="item absolute text-text-primary drop-shadow-md rounded-2xl top-0 text-center cursor-pointer select-none bg-background-secondary">
                    <div id="jalur-madrasah" class="bg-white p-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                            Jalur Madrasah
                        </h5>
                        <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                            Jalur Madrasah adalah pendaftaran PPDB yang memberikan kesempatan
                            kepada peserta didik lulusan madrasah (MTs/Pesantren) untuk melanjutkan jenjang pendidikan
                            berikutnya.
                        </p>
                        <a href="https://forms.gle/EQyhnmY9jExY7NEr7" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                            <span>Daftar</span>
                            <img class="float-right pl-1" src="./img/ic_next.svg" alt="">
                        </a>
                    </div>
                </label>
                <label for="t-2" class="item absolute text-text-primary drop-shadow-md rounded-2xl top-0 text-center cursor-pointer select-none bg-background-secondary">
                    <div id="jalur-reguler" class="bg-white p-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                            Jalur Reguler
                        </h5>
                        <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                            Jalur Reguler adalah jalur pendaftaran PPDB yang memberikan kesempatan kepada peserta didik baik
                            lulusan Sekolah Umum/SMP.
                        </p>
                        <a href="https://forms.gle/tsyaQVVeszCgbaPJ8" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                            <span>Daftar</span>
                            <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                        </a>
                    </div>
                </label>
                <label for="t-3" class="item absolute text-text-primary drop-shadow-md rounded-2xl top-0 text-center cursor-pointer select-none bg-background-secondary">
                    <div id="jalur-afirmasi" class="bg-white p-10  shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                            Jalur Afirmasi
                        </h5>
                        <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                            Jalur Afirmasi adalah jalur pendaftaran PPDB yang memberikan kesempatan yang lebih besar bagi
                            peserta didik dari keluarga tidak mampu untuk mengakses pendidikan bermutu dan disubsidi oleh
                            Pemerintah.
                        </p>
                        <a href="https://forms.gle/NPpjuXfLFchAhXKh8" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                            <span>Daftar</span>
                            <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                        </a>
                    </div>
                </label>
                <label for="t-4" class="item absolute text-text-primary drop-shadow-md rounded-2xl top-0 text-center cursor-pointer select-none bg-background-secondary">
                    <div id="jalur-prestasi-akademik" class="bg-white p-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                            Jalur Prestasi Akademik
                        </h5>
                        <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                            Jalur Prestasi adalah jalur pendaftaran PPDB yang memberikan kesempatan kepada peserta didik
                            berprestasi dari segi akademik (memiliki piagam juara 1-3 KSM/OSN minimal tingkat kabupaten).
                        </p>
                        <a href="https://forms.gle/aaKLNLQmixr7urAM8" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                            <span>Daftar</span>
                            <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                        </a>
                    </div>
                </label>
                <label for="t-5" class="item absolute text-text-primary drop-shadow-md rounded-2xl top-0 text-center cursor-pointer select-none bg-background-secondary">
                    <div id="jalur-prestasi-non-akademik" class="bg-white p-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                            Jalur Prestasi Non-Akademik
                        </h5>
                        <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                            Jalur Prestasi adalah jalur pendaftaran PPDB yang memberikan kesempatan kepada peserta didik
                            berprestasi dari segi non akademik seperti memiliki sertifikat-sertifikat bukti prestasi non
                            akademik atau tahfidz dengan minimal hafalan 3 juz.

                        </p>
                        <a href="https://forms.gle/inXFT7Zaf9FD4LG58" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                            <span>Daftar</span>
                            <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                        </a>
                    </div>
                </label>
                <label for="t-6" class="item absolute text-text-primary drop-shadow-md rounded-2xl top-0 text-center cursor-pointer select-none bg-background-secondary">
                    <div id="jalur-inklusi" class="bg-white p-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                            Jalur Inklusi
                        </h5>
                        <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                            Jalur Inklusi adalah jalur pendaftaran PPDB yang memberikan kesempatan kepada peserta didik yang
                            memiliki kebutuhan khusus.

                        </p>
                        <a href="https://forms.gle/yvZBCeHoz9x1QL3j6" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                            <span>Daftar</span>
                            <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                        </a>
                    </div>
                </label>
            </div>
            <div class="flex justify-center items-center dots">
                <label class="" for="t-1"></label>
                <label class="" for="t-2"></label>
                <label class="" for="t-3"></label>
                <label class="" for="t-4"></label>
                <label class="" for="t-5"></label>
                <label class="" for="t-6"></label>
            </div>
        </div>

        <!-- SWIPER JS -->
        <!-- <div class="visible md:invisible swiper mySwiper"> -->
        <div class="visible md:hidden swiper mySwiper">
            <div class="swiper-wrapper">
                <div id="jalur-madrasah" class="swiper-slide w-[300px] rounded-2xl p-10 h-auto mr-10 my-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                        Jalur Madrasah
                    </h5>
                    <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                        Jalur Madrasah adalah pendaftaran PPDB yang memberikan kesempatan
                        kepada peserta didik lulusan madrasah (MTs/Pesantren) untuk melanjutkan jenjang pendidikan berikutnya.
                    </p>
                    <a href="https://forms.gle/EQyhnmY9jExY7NEr7" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                        <span>Daftar</span>
                        <img class="float-right pl-1" src="./img/ic_next.svg" alt="">
                    </a>
                </div>
                <div id="jalur-reguler" class="swiper-slide w-[300px] rounded-2xl p-10 h-auto mr-10 my-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                        Jalur Reguler
                    </h5>
                    <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                        Jalur Reguler adalah jalur pendaftaran PPDB yang memberikan kesempatan kepada peserta didik baik lulusan Sekolah Umum/SMP.
                    </p>
                    <a href="https://forms.gle/tsyaQVVeszCgbaPJ8" class="flex w-28 mt-10 mb-4 justify-center mx-auto 
                    rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                        <span>Daftar</span>
                        <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                    </a>
                </div>
                <div id="jalur-afirmasi" class="swiper-slide w-[300px] rounded-2xl p-10 h-auto mr-10 my-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                        Jalur Afirmasi
                    </h5>
                    <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                        Jalur Afirmasi adalah jalur pendaftaran PPDB yang memberikan kesempatan yang lebih besar bagi peserta didik dari keluarga tidak mampu untuk mengakses pendidikan bermutu dan disubsidi oleh Pemerintah.
                    </p>
                    <a href="https://forms.gle/NPpjuXfLFchAhXKh8" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                        <span>Daftar</span>
                        <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                    </a>
                </div>
                <div id="jalur-prestasi-akademik" class="swiper-slide w-[300px] rounded-2xl p-10 h-auto mr-10 my-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                        Jalur Prestasi Akademik
                    </h5>
                    <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                        Jalur Prestasi adalah jalur pendaftaran PPDB yang memberikan kesempatan kepada peserta didik berprestasi dari segi akademik (memiliki piagam juara 1-3 KSM/OSN minimal tingkat kabupaten).
                    </p>
                    <a href="https://forms.gle/aaKLNLQmixr7urAM8" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                        <span>Daftar</span>
                        <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                    </a>
                </div>
                <div id="jalur-prestasi-non-akademik" class="swiper-slide w-[300px] rounded-2xl p-10 h-auto mr-10 my-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                        Jalur Prestasi Non-Akademik
                    </h5>
                    <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                        Jalur Prestasi adalah jalur pendaftaran PPDB yang memberikan kesempatan kepada peserta didik berprestasi dari segi non akademik seperti memiliki sertifikat-sertifikat bukti prestasi non akademik atau tahfidz dengan minimal hafalan 3 juz.

                    </p>
                    <a href="https://forms.gle/inXFT7Zaf9FD4LG58" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                        <span>Daftar</span>
                        <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                    </a>
                </div>
                <div id="jalur-inklusi" class=" swiper-slide w-[300px] rounded-2xl p-10 h-auto mr-10 my-10 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-center">
                        Jalur Inklusi
                    </h5>
                    <p class="mt-4 text-base text-neutral-600 dark:text-neutral-200 text-justify">
                        Jalur Inklusi adalah jalur pendaftaran PPDB yang memberikan kesempatan kepada peserta didik yang
                        memiliki kebutuhan khusus.

                    </p>
                    <a href="https://forms.gle/yvZBCeHoz9x1QL3j6" class="flex w-28 mt-10 mb-4 justify-center mx-auto rounded-3xl items-center bg-black-grey text-background-secondary my-4 py-2 text-xs font-medium uppercase leading-normal text-w shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-secondary hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                        <span>Daftar</span>
                        <img class="float-right pl-1" src="././img/ic_next.svg" alt="">
                    </a>
                </div>
            </div>
            <!-- <div class="swiper-pagination -mb-8"></div> -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        </div>
    </section>


    <!-- JURUSAN -->
    <section id="jurusan" class="bg-background mb-10">
        <p class="text-xl sm:text-2xl font-semibold text-center py-2">Program Studi</p>
        <div class="container grid grid-cols-1 my-auto md:grid-cols-3 gap-x-7 py-2 mx-auto ">
            <div id="keagamaan" class=" text-center mx-8 py-4 md:px-4 md:py-2">
                <img class="h-12 mx-auto mb-2" src="./img/logo-kemenag.png" alt="">
                <h3>KEAGAMAAN</h3>
                <p class="text-xs mt-3">Program / Jurusan yang menitikberatkan pada ilmu. ilmu keagamaan seperti Tafsir / Ilmu Tafsir, Fiqih / Ushul Fiqih dan Tasawuf / Ilmu Kalam </p>
            </div>
            <div id="ipa" class=" text-center mx-8 py-4 md:px-4 md:py-2">
                <img class="h-12 mx-auto mb-2" src="./img/logo-kemenag.png" alt="">
                <h3>IPA</h3>
                <p class="text-xs mt-3">Program / Jurusan yang menitikberatkan pada ilmu, ilmu sains seperti Matematika, Kimia, Fisika dan Biologi</p>
            </div>
            <div id="ips" class=" text-center mx-8 py-4 md:px-4 md:py-2">
                <img class="h-12 mx-auto mb-2" src="./img/logo-kemenag.png" alt="">
                <h3>IPS</h3>
                <p class="text-xs mt-3">Program / Jurusan yang menitikberatkan pada ilmu, ilmu sosial seperti Matematika, Ekonomi, Akuntansi, Sosiologi, dan Geografi </p>
            </div>
        </div>
    </section>

    <!-- TUTORIAL VIDEO -->
    <section id="tutorial-ppdb" class="my-10">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-y-4 md:gap-x-16">
            <div class="mx-auto my-auto col-span-2 md:ml-36 relative">
                <img class="absolute top-0 -z-10" src="./img/ornament-tutorial.svg" alt="">
                <p class="text-center md:text-left text-5xl 2xl:text-6xl font-bold">TUTORIAL</p>
                <p class="text-center md:text-left text-xl lg:text-2xl font-semibold">Daftar Online PPDB MAN 1 INHIL
                </p>
            </div>
            <div class="col-span-3 videowrapper">
                <!-- <iframe  src="https://www.youtube.com/embed/bz5q5gl2uZA?si=_rMtGru8F5csYmwD">
                </iframe> -->
                <iframe class="w-screen" src="https://www.youtube.com/embed/eWeNokfbUWo?si=TkkA7lhq-Yl8br0k"></iframe>
            </div>
        </div>
    </section>

    <!-- CONTACT US -->
    <section class="my-10">
        <div class="container mx-auto">
            <p class="text-2xl sm:text-4xl text-center mt-10 font-bold">Hubungi Kami</p>
            <div class="grid  grid-cols-1 md:grid-cols-2 md:gap-8 mt-4 md:mt-20 mx-14 2xl:mx-40">
                <div class="flex flex-col justify-between my-4 mx-4">
                    <p class="text-2xl p-2">Alamat</p>
                    <div id="alamat-man" class="flex border-spacing-0 rounded-xl md:mb-8 px-3 py-4  border-2 border-b-text-primary">
                        <img class="h-1/4 xs:h-full self-center" src="./img/ic_map.svg" alt="">
                        <p class="text-xs md:text-base self-center ml-3">Jl. Pelajar No. 254, Tembilahan Hulu, Tembilahan Hulu, Inhil, Riau
                        </p>
                    </div>

                    <p class="text-2xl p-2 mt-4">Lainnya</p>
                    <div class="flex flex-col border-spacing-0 rounded-xl px-3 py-4 border-2 border-b-text-primary">
                        <div id="kontak-telpon" class="flex">
                            <img class="h-1/4 xs:h-full self-center" src="./img/telephone.svg" alt="">
                            <a class="text-xs md:text-base self-center ml-3  hover:text-secondary-darker font-bold" href="https://linktr.ee/arasyidproject" class="inline ml-3">Daftar Nomor Panitia PPDB MAN 1 INHIL</a>
                        </div>

                        <div id="web-man" class="flex md:mt-6">
                            <img class="h-1/4 xs:h-full self-center" src="./img/wide.svg" alt="">
                            <a class=" text-xs md:text-base self-center ml-3 hover:text-secondary-darker font-bold" href="https://man1inhil.sch.id/">https://man1inhil.sch.id/</a>
                        </div>
                    </div>

                </div>
                <div>
                    <p class="text-2xl p-2">Di Map</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.755845304575!2d103.1423403742441!3d-0.3206379353315465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e28404f33f47607%3A0xdcdf417cfc1fe618!2sMAN%201%20INHIL!5e0!3m2!1sen!2sid!4v1709094602711!5m2!1sen!2sid" width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <!--Copyright section-->
        <div class="bg-background p-6 text-center dark:bg-neutral-700">
            <span>© 2024 Copyright:</span>
            <a class="font-semibold text-neutral-600 dark:text-neutral-400" href="https://man1inhil.sch.id/">
                MAN 1 Indragiri Hilir</a>
        </div>
    </footer>


    <!-- Swiper Js -->
    <script src="./js/swiper-bundle.min.js"></script>

    <!-- My Custom Js -->
    <script src="./js/script.js"></script>

    <script>
        const button = document.querySelector('#menu-button'); // Hamburger Icon
        const close = document.querySelector('#close-sidebar'); // Hamburger Icon
        const sidebar = document.querySelector('#default-sidebar'); // Menu

        button.addEventListener('click', () => {
            // menu.removeAttribute('hidden');
            sidebar.classList.remove("hidden");
            console.log("clicked")
        });
        close.addEventListener('click', () => {
            // menu.removeAttribute('hidden');
            sidebar.classList.add("hidden");
            console.log("clicked")
        });
    </script>
</body>

</html>