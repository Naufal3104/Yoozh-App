@extends('user.app')
@section('title', 'Dashboard | Yoozh')
@section('content')
    <section class="header relative pt-16 items-center flex h-screen max-h-860-px">
        <div class="container mx-auto items-center flex flex-wrap">
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-6/12 px-4">
                <div class="pt-32 sm:pt-0">
                    <h2 class="font-semibold text-4xl text-slate-600">
                        Notus Tailwind JS - A beautiful extension for Tailwind CSS.
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-slate-500">
                        Notus Tailwind JS is Free and Open Source. It does not change any
                        of the CSS from
                        <a href="https://tailwindcss.com/?ref=creativetim" class="text-slate-600" target="_blank">
                            Tailwind CSS.
                        </a>
                        It features multiple HTML elements and it comes with dynamic
                        components for ReactJS, Vue and Angular.
                    </p>
                    <div class="mt-12">
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus?ref=njs-index"
                            target="_blank"
                            class="get-started text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-pink-500 active:bg-pink-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150">
                            Get started
                        </a>
                        <a href="https://github.com/creativetimofficial/notus-js?ref=njs-index"
                            class="github-star ml-1 text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-slate-700 active:bg-slate-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
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

    <section class="mt-48 md:mt-40 pb-40 relative bg-slate-100">
        <div class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute h-20" style="transform: translateZ(0)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-slate-100 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 pb-32 pt-48">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-5/12 ml-auto px-12 md:px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <i class="fas fa-file-alt text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold">Complex Documentation</h3>
                        <p class="mt-4 text-lg leading-relaxed text-slate-500">
                            This extension comes a lot of fully coded examples that help you
                            get started faster. You can adjust the colors and also the
                            programming language. You can change the text and images and
                            you're good to go.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-slate-500 bg-slate-50 mr-3">
                                            <i class="fas fa-fingerprint"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-slate-500">
                                            Built by Developers for Developers
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-slate-500 bg-slate-50 mr-3">
                                            <i class="fab fa-html5"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-slate-500">
                                            Carefully crafted code for Components
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-slate-500 bg-slate-50 mr-3">
                                            <i class="far fa-paper-plane"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-slate-500">
                                            Dynamic Javascript Components
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
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

        <div class="justify-center text-center flex flex-wrap mt-24">
            <div class="w-full md:w-6/12 px-12 md:px-4">
                <h2 class="font-semibold text-4xl">Catalog</h2>
            </div>
        </div>
    </section>

    <section class="block relative z-1 bg-slate-600">
        <div class="container mx-auto">
            <div class="justify-center flex flex-wrap">
                <div class="w-full lg:w-12/12 px-4 -mt-24">
                    <div class="flex flex-wrap -mx-4">

                        @forelse ($products as $product)
                            {{-- Setiap card dibungkus dengan x-data untuk state modalnya sendiri --}}
                            <div x-data="{ open: false }" class="w-full md:w-6/12 lg:w-4/12 px-4">

                                {{-- Tag <a> yang membungkus seluruh card sudah dihapus --}}
                                <div class="block mb-8">
                                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col h-full">

                                        {{-- AREA GAMBAR SEKARANG MENJADI PEMICU (TRIGGER) --}}
                                        {{-- Ditambahkan @click untuk membuka modal dan cursor-pointer untuk mengubah kursor mouse --}}
                                        <div @click.prevent="open = true" class="relative w-full cursor-pointer group"
                                            style="padding-top: 100%;">
                                            @if ($product->product_image)
                                                <img alt="{{ $product->product_name }}"
                                                    class="absolute top-0 left-0 w-full h-full object-cover group-hover:opacity-90 transition-opacity duration-300"
                                                    src="{{ asset('template/img/' . $product->product_image) }}" />
                                            @else
                                                <div class="absolute top-0 left-0 w-full h-full bg-gray-200"></div>
                                            @endif
                                        </div>

                                        {{-- AREA JUDUL (SEKARANG TIDAK BISA DIKLIK) --}}
                                        <div class="p-4 flex-grow">
                                            <h5 class="text-lg font-semibold text-gray-800 text-center">
                                                {{ $product->product_name }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                {{-- =============================================== --}}
                                {{-- STRUKTUR MODAL (POP-UP) - TIDAK ADA PERUBAHAN DI SINI --}}
                                {{-- =============================================== --}}
                                <div x-show="open" x-transition
                                    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-75"
                                    style="display: none;">

                                    <div @click.away="open = false" @keydown.escape.window="open = false"
                                        class="relative bg-white rounded-lg shadow-lg w-full max-w-2xl max-h-full overflow-auto">

                                        {{-- ... (Isi modal tetap sama seperti sebelumnya) ... --}}

                                    </div>
                                </div>

                            </div>
                        @empty
                            <div class="w-full text-center py-12">
                                <p class="text-white text-lg">Saat ini belum ada produk yang tersedia.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20
        bg-slate-600 overflow-hidden">
    </section>

    <section class="pb-16 bg-slate-200 relative pt-32">
        <div class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute h-20" style="transform: translateZ(0)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-slate-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
@endsection
