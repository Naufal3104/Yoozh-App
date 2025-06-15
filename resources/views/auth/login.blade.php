<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
    <title>Login | Yoozh</title>
    <style>
        /* --- Global Reset & Scroll Control --- */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            box-sizing: border-box;
        }
        body {
            color: #4A5568;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* --- Style untuk Background Login yang akan Bertransisi --- */
        .login-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            z-index: 0;
        }

        .login-bg-image.active {
            opacity: 1;
        }

        /* --- CSS KUSTOM UNTUK KOTAK LOGIN --- */
        .login-form-container {
            background-color: rgba(0, 0, 0, 0.6);
            overflow: hidden;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Mengatur warna teks di dalam kotak login menjadi putih secara umum */
        .login-form-container h6,
        .login-form-container small,
        .login-form-container label,
        .login-form-container a {
            color: white;
        }

        /* Override warna placeholder agar terlihat di latar belakang gelap */
        .login-form-container input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Override warna teks input agar putih dan latar belakang transparan */
        .login-form-container input {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border: none !important;
        }

        /* Override warna border HR agar tetap terlihat */
        .login-form-container hr {
            border-color: rgba(255, 255, 255, 0.3);
        }

        /* Efek fokus pada input agar terlihat jelas */
        .login-form-container input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
        }

        /* --- Style khusus untuk Logo + Teks Yoozh --- */
        .yoozh-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.875rem; /* Ukuran teks besar (text-3xl) */
            font-weight: 700; /* font-bold */
            color: white;
            margin-bottom: 2rem; /* Jarak bawah dari form */
        }
        .yoozh-brand img {
            width: 3rem; /* Ukuran logo lebih besar */
            height: 3rem;
            margin-right: 1rem; /* Jarak antara logo dan teks */
        }

        /* --- Penyesuaian Layout untuk Mencegah Scroll Vertikal --- */
        main {
            height: 100%;
            position: relative;
        }

        .section-login-layout {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            box-sizing: border-box;
            overflow: hidden;
        }

        /* Media Query untuk Layar Sangat Kecil (Misal: tinggi <= 650px) */
        @media (max-height: 650px) {
            /* Kurangi padding vertikal di dalam kotak login */
            .login-form-container .rounded-t,
            .login-form-container .flex-auto {
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
            }

            .login-form-container .relative.w-full.mb-3 {
                margin-bottom: 0.6rem;
            }

            .login-form-container .text-right.mt-3.mb-6 {
                margin-top: 0.4rem;
                margin-bottom: 1rem;
            }

            .login-form-container .text-center.mt-6 {
                margin-top: 0.8rem;
            }

            .login-form-container .text-center.mt-4 {
                margin-top: 0.4rem;
            }
            .yoozh-brand {
                font-size: 1.5rem; /* Ukuran teks lebih kecil */
                margin-bottom: 1.5rem;
            }
            .yoozh-brand img {
                width: 2.5rem; /* Ukuran logo lebih kecil */
                height: 2.5rem;
                margin-right: 0.75rem;
            }
        }

        /* Media Query untuk Layar yang Lebih Luas/Tinggi */
        @media (min-height: 651px) {
            .login-form-container .rounded-t {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .login-form-container .flex-auto {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
            }
            .login-form-container .relative.w-full.mb-3 {
                margin-bottom: 1rem;
            }
            .login-form-container .text-right.mt-3.mb-6 {
                margin-top: 0.75rem;
                margin-bottom: 1.5rem;
            }
            .login-form-container .text-center.mt-6 {
                margin-top: 1.5rem;
            }
            .login-form-container .text-center.mt-4 {
                margin-top: 1rem;
            }
        }
    </style>
</head>

<body class="text-blueGray-700 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="/">Back</a>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
                id="example-collapse-navbar">
            </div>
        </div>
    </nav>
    <main>
        <section class="relative w-full h-full overflow-hidden section-login-layout">
            <div id="login-bg-1" class="login-bg-image active"
                style="background-image: url('https://images.unsplash.com/photo-1632061046597-325464194c23?q=80&w=1475&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
            <div id="login-bg-2" class="login-bg-image"
                style="background-image: url('https://hdwallpaperim.com/wp-content/uploads/2017/08/26/199870-fitness_model-women-running-sports.jpg');">
            </div>
            <div id="login-bg-3" class="login-bg-image"
                style="background-image: url('https://images.unsplash.com/photo-1628868190495-b233da5f4190?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            </div>

            <div class="container mx-auto px-4 h-full relative z-10">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg border-0 login-form-container">
                            <div class="rounded-t mb-0 px-6 py-6 text-content" style="display: none;">
                                </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 text-content">
                                <form action='/authenticate' method="post">
                                    @csrf
                                    <div class="yoozh-brand">
                                      <img src="..\assets\img\yoozh_icon.png" alt="yoozh icon" />
                                      <span>Yoozh</span>
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-xs font-bold mb-2"
                                            for="grid-password">Email</label>
                                        <input type="email" id="email" name="email"
                                            class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Email" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-xs font-bold mb-2"
                                            for="grid-password">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="border-0 px-3 py-3 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Password" />
                                    </div>

                                    <div class="text-right mt-3 mb-6">
                                        <a href="#pablo" class="text-white"><small>Forgot password?</small></a>
                                    </div>

                                    <div class="text-center mt-6">
                                        <button
                                            class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                            type="submit">
                                            Sign In
                                        </button>
                                    </div>
                                    <div class="text-center mt-4">
                                        <a href="./register.html" class="text-white"><small>Create new
                                                account</small></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
            <div class="text-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li> @endforeach
                </ul>
            </div>
            @endif
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

    // --- JavaScript untuk Transisi Background Login ---
    const loginBackgrounds = document.querySelectorAll('.login-bg-image');
    let currentLoginBgIndex = 0;

    function changeLoginBackground() {
        // Fade out gambar aktif saat ini
        if (loginBackgrounds.length > 0) {
            loginBackgrounds[currentLoginBgIndex].classList.remove('active');
        }

        // Hitung indeks gambar berikutnya
        currentLoginBgIndex = (currentLoginBgIndex + 1) % loginBackgrounds.length;

        // Fade in gambar berikutnya
        if (loginBackgrounds.length > 0) {
            loginBackgrounds[currentLoginBgIndex].classList.add('active');
        }
    }

    // Ganti gambar setiap 5 detik (5000 milidetik)
    setInterval(changeLoginBackground, 5000);

    // Set gambar pertama aktif saat halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
        if (loginBackgrounds.length > 0) {
            loginBackgrounds[0].classList.add('active');
        }
    });
</script>

</html>