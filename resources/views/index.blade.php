<!DOCTYPE html>
<html>

<head>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <title>Landing | Yoozh</title>

    <style>
        /* CSS untuk Gambar Latar Belakang Penuh di Bagian Detail Fitur */
        .bg-kualitas {
            background-image: url('https://images.unsplash.com/photo-1614632537197-38a17061c2bd?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            height: 511px; /* Tinggi fixed */
            background-size: cover; /* Lebar menyesuaikan, crop jika perlu */
            background-position: center; /* Posisi tengah gambar */
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }

        .bg-pilihan {
            background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            height: 511px; /* Tinggi fixed */
            background-size: cover; /* Lebar menyesuaikan, crop jika perlu */
            background-position: center; /* Posisi tengah gambar */
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }

        .bg-pengiriman {
            background-image: url('https://images.unsplash.com/photo-1633715151359-6fe04c8a0af5?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            height: 511px; /* Tinggi fixed */
            background-size: cover; /* Lebar menyesuaikan, crop jika perlu */
            background-position: center; /* Posisi tengah gambar */
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }

        /* Overlay gelap agar teks lebih terlihat */
        .bg-kualitas::before,
        .bg-pilihan::before,
        .bg-pengiriman::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Overlay hitam 70% opacity */
            z-index: -1;
        }

        /* Atur ulang warna teks dan ikon agar terlihat di atas background gelap */
        .bg-kualitas h3, .bg-kualitas p, .bg-kualitas a,
        .bg-pilihan h3, .bg-pilihan p, .bg-pilihan a,
        .bg-pengiriman h3, .bg-pengiriman p, .bg-pengiriman a {
            color: white !important;
        }

        .bg-kualitas .text-blueGray-500,
        .bg-pilihan .text-blueGray-500,
        .bg-pengiriman .text-blueGray-500 {
            color: white !important;
        }

        .bg-kualitas .bg-white,
        .bg-pilihan .bg-white,
        .bg-pengiriman .bg-white {
            background-color: rgba(255, 255, 255, 0.2); /* Ikon dengan background semi-transparan */
            color: white !important; /* Warna ikon juga putih */
        }
        .bg-black-opacity-70 {
        background-color: rgba(0, 0, 0, 0.7);
        }
    </style>

</head>

<body id="top" class="text-blueGray-700 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="/">
                    <img src="assets/img/yoozh_icon.png" alt="Yoozh Logo" class="h-8 inline-block mr-2">yoozh
                </a>
                <button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-black lg:bg-opacity-0 lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                    <li class="flex items-center">
                        <a class="bg-white text-blueGray-700 active:bg-black text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                            href="/login">
                            <i class="fas fa-arrow-alt-circle-down"></i> Sign In
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1581889470536-467bdbe30cd0?q=80&w=1564&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                Performa Juara Dimulai dari Sini.
                            </h1>
                            <p class="mt-4 text-lg text-blueGray-200">
                               Produk original brand dunia. Untuk tampil maksimal di setiap latihan & pertandingan.
                            </p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
            </div>
        </div>
        <section class="pb-0 -mt-24 bg-black-opacity-70">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <a href="#detail-kualitas-terjamin" class="block">
                            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">100% Original & Resmi</h6>
                                    <p class="mt-2 mb-4 text-blueGray-500">
                                        Produk original dari brand global — kualitas top tanpa kompromi.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <a href="#detail-pilihan-terlengkap" class="block">
                            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                        <i class="fas fa-football-ball"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">Lengkap Semua Kategori</h6>
                                    <p class="mt-2 mb-4 text-blueGray-500">
                                        Sepak bola, gym, lari, hingga yoga — semua ada.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <a href="#detail-pengiriman-cepat" class="block">
                            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">Tanpa Tunggu Lama</h6>
                                    <p class="mt-2 mb-4 text-blueGray-500">
                                        Barang dikirim cepat dan aman. Biar kamu langsung aksi tanpa delay.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> <div class="flex flex-col justify-end bg-kualitas w-full" id="detail-kualitas-terjamin">
                <div class="container mx-auto px-4">
                    <div class="w-full lg:w-5/12 px-4 ml-auto mr-auto pb-6">
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            Kualitas Juara: Barang Asli, Performa Pasti
                        </h3>
                        <p class="text-sm font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                            Kami hanya jual perlengkapan dari brand terpercaya dunia. 100% original, tahan lama, dan siap dukung performa kamu.
                        </p>
                        <p class="text-sm font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
                            Kami pilih item satu per satu, dari material sampai teknologi. Biar kamu nggak cuma kelihatan siap tanding — tapi juga benar-benar siap tempur.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-end bg-pilihan w-full" id="detail-pilihan-terlengkap">
                <div class="container mx-auto px-4">
                    <div class="w-full lg:w-5/12 px-4 ml-auto mr-auto pb-6"> 
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            Lengkap Semua Kategori. Dari Lari sampai Fitness.
                        </h3>
                        <p class="text-sm font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                            Cari jersey tim? Sepatu basket? Alat fitness rumahan? Tenang — semua ada di sini.
                        </p>
                        <p class="text-sm font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
                            Koleksi kami update terus, dari kategori populer sampai niche. Apapun gaya hidup aktifmu, Yoozh punya perlengkapannya.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-end bg-pengiriman w-full" id="detail-pengiriman-cepat">
                <div class="container mx-auto px-4">
                    <div class="w-full lg:w-5/12 px-4 mr-auto ml-auto pb-6">
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            Langsung Dikirim, Siap Dipakai
                        </h3>
                        <p class="text-sm font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                            Pesan sekarang, barang langsung diproses dan dikirim ke depan pintumu. Aman, cepat, tanpa ribet.
                        </p>
                        <p class="text-sm font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
                           Lacak posisi pesananmu secara real-time, jadi kamu tahu kapan harus bersiap untuk sesi latihan berikutnya.
                        </p>
                        <div class="mt-8">
                            <a href="/login" class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none ease-linear transition-all duration-150">
                                Jelajahi Semua Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
    /* Make dynamic date appear */
    (function () {
        if (document.getElementById("get-current-year")) {
            document.getElementById("get-current-year").innerHTML =
                new Date().getFullYear();
        }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }
</script>

</html>