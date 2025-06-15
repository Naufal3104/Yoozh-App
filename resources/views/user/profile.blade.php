<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Profile | {{ $user->fullname ?? 'User' }}</title>

    {{-- Path Aset Diperbaiki dengan Helper asset() --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/tailwind.css') }}" />
</head>

<body class="text-blueGray-700 antialiased">
    {{-- Saya hapus navigasi statis agar bisa digantikan oleh layout app Anda --}}
    @include('user.navbar')

    {{-- Jika ini adalah file mandiri, Anda bisa mengaktifkan kembali navigasi statis di atas --}}
    {{-- <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('home') }}" class="text-xl font-bold">MyApp</a>
                <ul class="flex space
    {{-- Jika ini file mandiri, Anda bisa mengaktifkan kembali navigasinya --}}

    <main class="profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>

        <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="relative">
                                    {{-- Menampilkan Gambar Profil Dinamis --}}
                                    <img alt="Profile Picture"
                                        src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/img/profile.jpg') }}"
                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px" />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                {{-- Bagian ini bisa Anda gunakan untuk tombol lain jika perlu --}}
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                {{-- Bagian ini bisa Anda isi dengan statistik lain jika perlu --}}
                            </div>
                        </div>

                        <div class="text-center mt-24">
                            {{-- Menampilkan Nama dan Data User Dinamis --}}
                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700">
                                {{ $user->fullname }}
                            </h3>
                            <div class="mb-2 text-blueGray-600">
                                <i class="fas fa-envelope mr-2 text-lg text-blueGray-400"></i>
                                {{ $user->email }}
                            </div>
                        </div>

                        {{-- ========================================================== --}}
                        {{--      FORM EDIT PROFIL DIMULAI DI SINI                      --}}
                        {{-- ========================================================== --}}
                        <div class="mt-10 py-10 border-t border-blueGray-200">

                            {{-- Pastikan route 'profile.update' ada di web.php --}}
                            <form action"" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Edit User Information
                                </h6>
                                <div class="flex flex-wrap">
                                    {{-- Input 1: Username --}}
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                for="username">
                                                Username
                                            </label>
                                            <input type="text" id="username" name="username"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{ old('username', $user->username) }}">
                                        </div>
                                    </div>
                                    {{-- Input 2: Full Name --}}
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                for="fullname">
                                                Full Name
                                            </label>
                                            <input type="text" id="fullname" name="fullname"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{ old('fullname', $user->fullname) }}">
                                        </div>
                                    </div>
                                    {{-- Input 3: Email --}}
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                for="email">
                                                Email Address
                                            </label>
                                            <input type="email" id="email" name="email"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{ old('email', $user->email) }}">
                                        </div>
                                    </div>
                                    {{-- Input 4: Phone Number --}}
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                for="phone">
                                                Phone Number
                                            </label>
                                            <input type="text" id="phone" name="phone"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{ old('phone', $user->phone) }}">
                                        </div>
                                    </div>
                                    {{-- Input 5: Birth Date --}}
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                for="birth_date">
                                                Birth Date
                                            </label>
                                            <input type="date" id="birth_date" name="birth_date"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{ old('birth_date', $user->birth_date) }}">
                                        </div>
                                    </div>
                                    {{-- Input 7: File Input for Profile Image --}}
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                for="profile_image">
                                                Profile Image
                                            </label>
                                            <input type="file" id="photo" name="photo"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <div class="text-center mt-6">
                                    <button
                                        class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full lg:w-auto"
                                        type="submit">
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Footer bisa Anda aktifkan kembali jika ini adalah halaman mandiri --}}

    {{-- Script JS juga menggunakan helper asset() --}}
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script>
        /* ... (JavaScript dari template bisa ditaruh di sini jika diperlukan) ... */
    </script>
</body>

</html>
