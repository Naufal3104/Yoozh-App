<!--

=========================================================
* Notus Tailwind JS - v1.1.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="./assets/styles/tailwind.css" />
    <title>Index | Yoozh</title>
</head>

<body class="text-blueGray-700 antialiased">
    <nav
        class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white shadow">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                    href="./index.html">Yoozh</a><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                    <li class="inline-block relative">
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48 navbar-popper"
                            id="demo-pages-dropdown">
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                Admin Layout
                            </span>
                            <a href="./pages/admin/dashboard.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Dashboard
                            </a>
                            <a href="./pages/admin/settings.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Settings
                            </a>
                            <a href="./pages/admin/tables.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Tables
                            </a>
                            <a href="./pages/admin/maps.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Maps
                            </a>
                            <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                Auth Layout
                            </span>
                            <a href="./pages/auth/login.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Login
                            </a>
                            <a href="./pages/auth/register.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Register
                            </a>
                            <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
                                No Layout
                            </span>
                            <a href="./pages/landing.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Landing
                            </a>
                            <a href="./pages/profile.html"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Profile
                            </a>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <a href="/login"
                            class="text-white bg-pink-500 active:bg-pink-600 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                            type="button"> Sign In
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="header relative pt-16 items-center flex h-screen max-h-860-px">
        <div class="container mx-auto items-center flex flex-wrap">
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-6/12 px-4">
                <div class="pt-32 sm:pt-0">
                    <h2 class="font-semibold text-4xl text-blueGray-600">
                        Yoozh: Solusi Olahraga di Rumah & Gym
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                        Yoozh adalah toko online alat olahraga yang menyediakan berbagai perlengkapan fitness, gym, dan
                        olahraga rumahan dengan harga terjangkau dan kualitas terjamin. Kami percaya, olahraga harus
                        bisa diakses semua orang dan kami hadir untuk bantu wujudkan itu.
                    </p>
                    <div class="mt-12">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus?ref=njs-index"
                            target="_blank"
                            class="get-started text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-pink-500 active:bg-pink-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150">
                            Get started
                        </a>
                        <a href="https://github.com/creativetimofficial/notus-js?ref=njs-index"
                            class="github-star ml-1 text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
                            target="_blank">
                            Github Star
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <img class="absolute top-0 b-auto right-0 pt-16 sm:w-6/12 -mt-48 sm:mt-0 w-10/12 max-h-860-px"
            src="./assets/img/ill_header_3.png" alt="..." />
    </section>

    <section class="mt-48 md:mt-40 pb-40 relative bg-blueGray-100">
        <div class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute h-20" style="transform: translateZ(0)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-100 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-32">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500">
                        <img alt="..."
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80"
                            class="w-full align-middle rounded-t-lg" />
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block h-95-px -top-94-px">
                                <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Koleksi Lengkap, Update Terus!
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Dari alat gym, olahraga outdoor, sampai aksesoris kekinian — semua ada di Yoozh. Produk
                                selalu up-to-date biar kamu nggak ketinggalan tren olahraga terbaru.
                            </p>
                        </blockquote>
                    </div>
                </div>

                <div class="w-full md:w-6/12 px-4">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Produk Lengkap & Berkualitas</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Yoozh menyediakan berbagai pilihan alat olahraga mulai dari alat fitness
                                        rumahan, gym, yoga, hingga aksesoris olahraga dengan kualitas terjamin.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-drafting-compass"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">
                                        Harga Terjangkau & Kompetitif
                                    </h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Kami menawarkan harga bersahabat untuk semua kalangan, tanpa mengurangi kualitas
                                        produk.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col min-w-0 mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Garansi Produk & Layanan After-Sales</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Setiap pembelian di Yoozh dilengkapi garansi produk, layanan customer service
                                        responsif, dan dukungan after-sales yang siap membantu.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Cocok untuk Pemula & Profesional</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Produk-produk Yoozh dirancang untuk semua level pengguna mulai dari yang baru
                                        mulai olahraga hingga atlet profesional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto overflow-hidden pb-20">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-48">
                    <div
                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                        <i class="fas fa-sitemap text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Produk Lengkap & Berkualitas di Yoozh
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                        Salah satu keunggulan utama Yoozh terletak pada kelengkapan dan kualitas produk yang ditawarkan.
                        Yoozh menyediakan berbagai jenis alat olahraga, mulai dari alat fitness rumahan, perlengkapan
                        gym profesional, aksesoris olahraga, hingga perlengkapan olahraga outdoor. Dengan banyaknya
                        pilihan ini, pelanggan dapat memenuhi seluruh kebutuhan olahraga mereka di satu tempat tanpa
                        harus berpindah-pindah toko.
                    </p>
                    <a href="" target="_blank"
                        class="font-bold text-blueGray-700 hover:text-blueGray-500 ease-linear transition-all duration-150">
                        View All
                        <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
                    </a>
                </div>

                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto mt-32">
                    <div class="relative flex flex-col min-w-0 w-full mb-6 mt-48 md:mt-0">
                        <img alt="..." src="./assets/img/component-btn.png"
                            class="w-full align-middle rounded absolute shadow-lg max-w-100-px left-145-px -top-29-px z-3" />
                        <img alt="..." src="./assets/img/component-profile-card.png"
                            class="w-full align-middle rounded-lg absolute shadow-lg max-w-210-px left-260-px -top-160-px" />
                        <img alt="..." src="./assets/img/component-info-card.png"
                            class="w-full align-middle rounded-lg absolute shadow-lg max-w-180-px left-40-px -top-225-px z-2" />
                        <img alt="..." src="./assets/img/component-info-2.png"
                            class="w-full align-middle rounded-lg absolute shadow-2xl max-w-200-px -left-50-px top-25-px" />
                        <img alt="..." src="./assets/img/component-menu.png"
                            class="w-full align-middle rounded absolute shadow-lg max-w-580-px -left-20-px top-210-px" />
                        <img alt="..." src="./assets/img/component-btn-pink.png"
                            class="w-full align-middle rounded absolute shadow-xl max-w-120-px left-195-px top-95-px" />
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap items-center pt-32">
                <div class="w-full md:w-6/12 px-4 mr-auto ml-auto mt-32">
                    <div class="justify-center flex flex-wrap relative">
                        <div class="my-4 w-full lg:w-6/12 px-4">
                            <a href="https://www.creative-tim.com/learning-lab/tailwind/svelte/alerts/notus?ref=vtw-index"
                                target="_blank">
                                <div class="bg-red-600 shadow-lg rounded-lg text-center p-8">
                                    <img alt="..."
                                        class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/svelte.jpg" />
                                    <p class="text-lg text-white mt-4 font-semibold">Svelte</p>
                                </div>
                            </a>
                            <a href="https://www.creative-tim.com/learning-lab/tailwind/react/alerts/notus?ref=vtw-index"
                                target="_blank">
                                <div class="bg-lightBlue-500 shadow-lg rounded-lg text-center p-8 mt-8">
                                    <img alt="..."
                                        class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/react.jpg" />
                                    <p class="text-lg text-white mt-4 font-semibold">ReactJS</p>
                                </div>
                            </a>
                            <a href="https://www.creative-tim.com/learning-lab/tailwind/nextjs/alerts/notus?ref=vtw-index"
                                target="_blank">
                                <div class="bg-blueGray-700 shadow-lg rounded-lg text-center p-8 mt-8">
                                    <img alt="..."
                                        class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/nextjs.jpg" />
                                    <p class="text-lg text-white mt-4 font-semibold">NextJS</p>
                                </div>
                            </a>
                        </div>
                        <div class="my-4 w-full lg:w-6/12 px-4 lg:mt-16">
                            <a href="https://www.creative-tim.com/learning-lab/tailwind/js/alerts/notus?ref=vtw-index"
                                target="_blank">
                                <div class="bg-yellow-500 shadow-lg rounded-lg text-center p-8">
                                    <img alt="..."
                                        class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/js.png" />
                                    <p class="text-lg text-white mt-4 font-semibold">
                                        JavaScript
                                    </p>
                                </div>
                            </a>
                            <a href="https://www.creative-tim.com/learning-lab/tailwind/angular/alerts/notus?ref=vtw-index"
                                target="_blank">
                                <div class="bg-red-700 shadow-lg rounded-lg text-center p-8 mt-8">
                                    <img alt="..."
                                        class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/angular.jpg" />
                                    <p class="text-lg text-white mt-4 font-semibold">Angular</p>
                                </div>
                            </a>
                            <a href="https://www.creative-tim.com/learning-lab/tailwind/vue/alerts/notus?ref=vtw-index"
                                target="_blank">
                                <div class="bg-emerald-500 shadow-lg rounded-lg text-center p-8 mt-8">
                                    <img alt="..."
                                        class="shadow-md rounded-full max-w-full w-16 mx-auto p-2 bg-white"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/vue.jpg" />
                                    <p class="text-lg text-white mt-4 font-semibold">Vue.js</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-4/12 px-12 md:px-4 ml-auto mr-auto mt-48">
                    <div
                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                        <i class="fas fa-drafting-compass text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Harga Terjangkau & Kompetitif di Yoozh
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                        Selain menawarkan produk yang lengkap dan berkualitas, Yoozh juga memberikan harga yang
                        terjangkau dan kompetitif di pasaran. Yoozh memahami bahwa salah satu kendala masyarakat dalam
                        membeli alat olahraga adalah harga yang seringkali terlalu tinggi. Karena itu, Yoozh hadir
                        dengan kebijakan harga yang bersahabat, agar siapa pun bisa memiliki perlengkapan olahraga tanpa
                        harus mengeluarkan biaya besar.
                    </p>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                        Yoozh sering banget kasih promo spesial, diskon dadakan, dan cashback buat pelanggan setia.
                    </p>
                    <a href="" target="_blank"
                        class="font-bold text-blueGray-700 hover:text-blueGray-500 ease-linear transition-all duration-150">
                        View all
                        <i class="fa fa-angle-double-right ml-1 leading-relaxed"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 pb-32 pt-48">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-5/12 ml-auto px-12 md:px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <i class="fas fa-file-alt text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold">Cocok untuk Pemula & Profesional di Yoozh</h3>
                        <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                            Yoozh dirancang untuk menjadi toko olahraga yang inklusif, dapat memenuhi kebutuhan berbagai
                            kalangan, baik pemula yang baru memulai aktivitas olahraga maupun profesional yang sudah
                            berpengalaman. Setiap produk yang tersedia dipilih secara cermat agar memiliki fitur,
                            variasi, dan spesifikasi yang sesuai dengan berbagai tingkat kemampuan pengguna.
                        </p>
                    </div>
                </div>

                <div class="w-full md:w-6/12 mr-auto px-4 pt-24 md:pt-0">
                    <img alt="..." class="max-w-full rounded-lg shadow-xl"
                        style="
                transform: scale(1) perspective(1040px) rotateY(-11deg)
                  rotateX(2deg) rotate(2deg);
              "
                        src="./assets/img/documentation.png" />
                </div>
            </div>
        </div>
    </section>
    <footer class="relative bg-blueGray-200 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
            style="transform: translateZ(0)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-center lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i>
                        </button>
                        <button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i>
                        </button>
                        <button
                            class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">
                                Useful Links
                            </span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation?ref=njs-index">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com?ref=njs-index">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial?ref=njs-index">
                                        Github
                                    </a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-index">
                                        Free Products
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">
                                Other Resources
                            </span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-index">
                                        MIT License
                                    </a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-index">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-index">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-index">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright © <span id="get-current-year"></span> Notus Tailwind JS
                        by
                        <a href="https://www.creative-tim.com?ref=njs-index"
                            class="text-blueGray-500 hover:text-blueGray-800">
                            Creative Tim
                        </a>
                        .
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
    /* Make dynamic date appear */
    (function() {
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
