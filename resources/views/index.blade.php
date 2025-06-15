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
        /* --- Penambahan untuk Smooth Scroll --- */
        html {
            scroll-behavior: smooth; /* Ini dia propertinya! */
        }
        /* --- Akhir Penambahan Smooth Scroll --- */


        /* CSS untuk Gambar Latar Belakang Penuh di Bagian Detail Fitur */
        .bg-kualitas {
            background-image: url('https://images.unsplash.com/photo-1614632537197-38a17061c2bd?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            height: 511px; /* Tinggi fixed */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }

        .bg-pilihan {
            background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            height: 511px; /* Tinggi fixed */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }

        .bg-pengiriman {
            background-image: url('https://images.unsplash.com/photo-1633715151359-6fe04c8a0af5?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            height: 511px; /* Tinggi fixed */
            background-size: cover;
            background-position: center;
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

        /* --- CSS Kustom untuk Konten Fitur --- */
        .feature-item-content {
            height: 208px; /* Tinggi tetap yang diinginkan */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Untuk mendorong panah ke bawah */
            align-items: center; /* Memusatkan konten horizontal */
            text-align: center;
            box-sizing: border-box; /* Padding tidak menambah ukuran */
            padding: 1rem; /* Padding standar */
            color: white; /* Pastikan teks putih di sini */
            position: relative; /* Untuk posisi panah jika ingin absolut */
        }

        /* Menyesuaikan jarak ikon dan teks di dalam feature-item-content */
        .feature-item-content .w-12.h-12 { /* Ikon */
            margin-bottom: 0.75rem !important; /* Jarak bawah ikon */
            margin-top: 0.5rem; /* Jarak atas ikon */
        }
        .feature-item-content h6 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }
        .feature-item-content p {
            margin-top: 0.25rem !important;
            margin-bottom: 0 !important; /* Hapus margin bawah default */
            flex-grow: 1; /* Biarkan paragraf mengambil ruang yang tersisa */
            font-size: 0.875rem;
            line-height: 1.25;
            color: rgba(255, 255, 255, 0.8); /* Warna paragraf agar sedikit transparan */
        }

        /* --- Style untuk Ikon Panah di Setiap Fitur --- */
        .feature-item-arrow {
            margin-top: 0.75rem; /* Tambahkan margin atas untuk panah */
            color: rgba(255, 255, 255, 0.7); /* Putih transparan */
            font-size: 1.5rem; /* text-2xl */
            transition: color 0.3s ease-in-out;
            cursor: pointer;
        }
        /* Efek hover saat link/kartu di-hover */
        .feature-item-content:hover .feature-item-arrow {
            color: white; /* Lebih solid saat hover */
        }


        /* Media Query untuk mengatur ukuran dan jarak di layar yang lebih kecil */
        @media (max-width: 767px) {
            .feature-item-content {
                height: 180px; /* Lebih kecil di mobile */
                padding: 0.75rem;
                margin-bottom: 1rem; /* Tambahkan margin bawah antar item di mobile */
            }
            .feature-item-content h6 {
                font-size: 1rem;
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }
            .feature-item-content p {
                font-size: 0.75rem;
                line-height: 1.1;
                margin-top: 0.1rem !important;
            }
            .feature-item-content .w-12.h-12 {
                width: 10vw;
                height: 10vw;
                max-width: 48px;
                max-height: 48px;
                margin-bottom: 0.5rem !important;
                margin-top: 0.25rem;
            }
            .feature-item-arrow {
                font-size: 1.25rem; /* text-xl */
                margin-top: 0.5rem;
            }
        }
        
        /* Penyesuaian untuk mengatasi pemotongan gambar utama hero */
        .hero-main-section {
            min-height: 100vh; /* Setidaknya setinggi viewport */
            padding-bottom: 10rem !important; /* Padding cukup untuk teks hero utama */
            position: relative;
        }

        /* Container baru untuk 3 hero cards/fitur */
        .new-features-container {
            position: relative;
            margin-top: 0; /* Hapus margin-top negatif */
            padding-top: 4rem; /* Padding internal di atas konten fitur */
            padding-bottom: 4rem; /* Padding internal di bawah konten fitur */
            background-color: rgba(0, 0, 0, 0.7); /* Latar belakang gelap transparan */
            z-index: 5;
        }
        /* Style untuk ikon panah utama (di hero) */
        .scroll-down-arrow {
            position: absolute;
            bottom: 2.5rem; /* bottom-10 (40px) dari Tailwind */
            left: 50%;
            transform: translateX(-50%);
            z-index: 20;
            font-size: 2.5rem; /* text-4xl */
            color: rgba(255, 255, 255, 0.8); /* Putih transparan */
            cursor: pointer;
            /* Tambah opacity dan pointer-events ke transisi */
            transition: opacity 0.3s ease-in-out, color 0.3s ease-in-out, pointer-events 0s;
            pointer-events: auto; /* Defaultnya clickable */
        }
        .scroll-down-arrow:hover {
            color: white; /* Lebih solid saat hover */
        }
        /* Style saat panah tersembunyi */
        .scroll-down-arrow.hidden-arrow {
            opacity: 0;
            pointer-events: none; /* Nonaktifkan klik saat tersembunyi */
        }

        /* Responsive adjustment for arrow position on smaller screens */
        @media (max-width: 767px) {
            .scroll-down-arrow {
                bottom: 1.5rem; /* bottom-6 (24px) di mobile */
                font-size: 2rem; /* text-3xl */
            }
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
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75 hero-main-section">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1581889470536-467bdbe30cd0?q=80&w=1564&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto z-10">
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
            <a href="#" id="scrollDownArrow" class="scroll-down-arrow">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>

        <section id="new-features-container" class="new-features-container">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center">
                    <div class="lg:pt-0 pt-0 w-full md:w-4/12 px-4 text-center">
                        <a href="#detail-kualitas-terjamin" class="block">
                            <div class="feature-item-content">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <h6 class="text-xl font-semibold">100% Original & Resmi</h6>
                                <p class="mt-2 mb-4">
                                    Produk original dari brand global — kualitas top tanpa kompromi.
                                </p>
                                <span class="feature-item-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="lg:pt-0 pt-0 w-full md:w-4/12 px-4 text-center">
                        <a href="#detail-pilihan-terlengkap" class="block">
                            <div class="feature-item-content">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                    <i class="fas fa-football-ball"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Lengkap Semua Kategori</h6>
                                <p class="mt-2 mb-4">
                                    Sepak bola, gym, lari, hingga yoga — semua ada.
                                </p>
                                <span class="feature-item-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="lg:pt-0 pt-0 w-full md:w-4/12 px-4 text-center">
                        <a href="#detail-pengiriman-cepat" class="block">
                            <div class="feature-item-content">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Tanpa Tunggu Lama</h6>
                                <p class="mt-2 mb-4">
                                    Barang dikirim cepat dan aman. Biar kamu langsung aksi tanpa delay.
                                </p>
                                <span class="feature-item-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="after-features" class="mt-0">
            <div class="flex flex-col justify-end bg-kualitas w-full" id="detail-kualitas-terjamin">
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

        // --- JavaScript untuk Scroll Panah Utama & Visibilitasnya ---
        document.addEventListener('DOMContentLoaded', function() {
            const scrollDownArrow = document.getElementById('scrollDownArrow'); // Gunakan ID
            const newFeaturesContainer = document.getElementById('new-features-container');

            if (scrollDownArrow && newFeaturesContainer) {
                // Fungsi untuk menyembunyikan panah
                function hideArrow() {
                    scrollDownArrow.classList.add('hidden-arrow');
                }

                // Fungsi untuk menampilkan panah
                function showArrow() {
                    scrollDownArrow.classList.remove('hidden-arrow');
                }

                // 1. Sembunyikan panah saat diklik
                scrollDownArrow.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah perilaku default tautan #

                    const targetScrollPosition = newFeaturesContainer.offsetTop + newFeaturesContainer.offsetHeight - window.innerHeight;
                    const finalScrollPosition = Math.max(0, targetScrollPosition);

                    window.scrollTo({
                        top: finalScrollPosition,
                        behavior: 'smooth'
                    });

                    hideArrow(); // Sembunyikan panah setelah diklik
                });

                // 2. Tampilkan/Sembunyikan panah berdasarkan posisi scroll
                window.addEventListener('scroll', function() {
                    if (window.scrollY < 10) { // Jika scroll di paling atas (threshold 10px)
                        showArrow();
                    } else {
                        hideArrow();
                    }
                });

                // Cek posisi scroll saat halaman pertama kali dimuat
                if (window.scrollY > 10) {
                    hideArrow();
                } else {
                    showArrow();
                }
            }
        });
    </script>

</html>