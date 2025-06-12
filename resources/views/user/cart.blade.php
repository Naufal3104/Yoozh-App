@extends('user.app')
@section('title', 'Cart | Yoozh')
@section('content')

    {{-- Menggunakan section yang benar untuk konten halaman --}}
    <section class="py-20 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">

            {{-- Menggunakan Flexbox karena kelas width-nya tersedia di file CSS Anda --}}
            <div class="flex flex-wrap -mx-4 ">

                {{-- Kolom Kiri: Tabel Shopping Cart --}}
                {{-- MENGGUNAKAN KELAS YANG TERSEDIA: lg:w-9/12 (sama dengan 3/4) --}}
                <div class="w-full lg:w-9/12 px-4 mb-8 lg:mb-0 mt-8">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Shopping Cart</h1>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead> {{-- Mengganti bg-gray-50 dengan yang ada di file Anda --}}
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Product
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Price
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantity
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Subtotal
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Remove</span>
                                        </th>
                                        <th>
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    {{-- Contoh Baris Item 1 --}}
                                    @if ($carts->isEmpty())
                                        <tr>
                                            <td colspan="6" class="p-8 text-center">No Carts</td>
                                        </tr>
                                    @else
                                        @foreach ($carts as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items
                                                <td class="px-6
                                                        py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-16 w-16">
                                                                <img class="h-16 w-16 rounded-md object-cover"
                                                                    src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400"
                                                                    alt="Product Image">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-semibold text-gray-900">
                                                                    {{$item->product_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                                <td class="px-2 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    Rp {{number_format($item->price)}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{-- 1. Bungkus semuanya dalam satu div dengan class 'quantity-selector' --}}
<div class="quantity-selector flex items-center justify-center">

    {{-- 2. Tambahkan class 'js-qty-minus' pada tombol kurang --}}
    <button type="button"
        class="js-qty-minus w-8 h-8 border rounded-md flex items-center justify-center text-lg focus:outline-none">
        -
    </button>

    {{-- 3. Tambahkan class 'js-qty-input' pada input --}}
    {{-- Nilai diambil dari $item->qty (dengan asumsi $item adalah model Cart) --}}
    <input type="text" value="{{ $item->carts->qty }}" name="qty"
        class="js-qty-input w-12 h-8 text-center border-t border-b focus:outline-none">

    {{-- 4. Tambahkan class 'js-qty-plus' pada tombol tambah --}}
    <button type="button"
        class="js-qty-plus w-8 h-8 border rounded-md flex items-center justify-center text-lg focus:outline-none">
        +
    </button>
    
</div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    Rp {{number_format($item->price * $item->carts->qty)}}
                                                </td>
                                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <button class="text-red-500 hover:text-red-700"
                                                        style="display: inline">Remove</button>
                                                    <button class="text-orange-500 hover:text-red-700"
                                                        style="display: none;">Edit</button>
                                                </td>
                                            </tr>
                                            {{-- Baris data lainnya bisa ditaruh di sini dengan @foreach --}}
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Form Payment --}}
                <div class="w-full lg:w-3/12 px-4 mt-8">
                    {{-- 1. Judul "Payment" dipindahkan ke luar dan disamakan dengan judul "Shopping Cart" --}}
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Payment</h1>

                    {{-- 2. Kartu ini sekarang hanya berisi form. Kelas p-6 akan memberi padding. --}}
                    <div class="bg-white shadow-md rounded-lg p-5 sticky top-6">
                        <form action="#" method="POST">
                            <div class="space-y-4">
                                <div>
                                    <label for="card_number" class="block text-sm font-medium text-gray-700">Total</label>
                                    <input type="text" name="card_number" id="card_number" placeholder="Total"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <div>
                                    <label for="card_holder" class="block text-sm font-medium text-gray-700">Pay
                                        Total</label>
                                    <input type="number" name="card_holder" id="card_holder" placeholder="Pay Total"
                                        min="1"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <div>
                                    <label for="card_holder" class="block text-sm font-medium text-gray-700">
                                        Change</label>
                                    <input type="text" name="card_holder" id="card_holder" placeholder="Change"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <button type="submit"
                                class="mt-6 w-full bg-lightBlue-500 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition-all duration-150">
                                Pay Now
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
@endsection

{{-- LETAKKAN SCRIPT DI BAWAH INI --}}
<script>
    // Pastikan skrip berjalan setelah semua elemen halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {

        // --- Logika untuk Tombol Tambah (+) ---
        const plusButtons = document.querySelectorAll('.js-qty-plus');
        plusButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Temukan input yang berada dalam satu grup dengan tombol yang diklik
                const input = this.closest('.quantity-selector').querySelector('.js-qty-input');
                let currentValue = parseInt(input.value);
                
                // Tambah nilai input
                input.value = currentValue + 1;
            });
        });

        // --- Logika untuk Tombol Kurang (-) ---
        const minusButtons = document.querySelectorAll('.js-qty-minus');
        minusButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Temukan input yang berada dalam satu grup dengan tombol yang diklik
                const input = this.closest('.quantity-selector').querySelector('.js-qty-input');
                let currentValue = parseInt(input.value);

                // Kurangi nilai input, tapi jangan sampai kurang dari 1
                if (currentValue > 1) {
                    input.value = currentValue - 1;
                }
            });
        });

    });
</script>