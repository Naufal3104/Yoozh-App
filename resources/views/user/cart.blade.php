@extends('user.app')
@section('title', 'Cart | Yoozh')
@section('content')

    <section class="py-20 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4 ">
                {{-- Kolom Kiri: Tabel Shopping Cart --}}
                <div class="w-full lg:w-9/12 px-4 mb-8 lg:mb-0 mt-8">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Shopping Cart</h1>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Product</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Price</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantity</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Subtotal</th>
                                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @if ($carts->isEmpty())
                                        <tr>
                                            <td colspan="5" class="p-8 text-center">No Carts</td>
                                        </tr>
                                    @else
                                        @foreach ($carts as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-16 w-16">
                                                            @if ($item->product_image)
                                                                <img alt="{{ $item->product_name }}"
                                                                    class="h-16 w-16 rounded-md object-cover"
                                                                    src="{{ asset('template/img/' . $item->product_image) }}" />
                                                            @else
                                                                <div class="h-16 w-16 bg-gray-200 rounded-md"></div>
                                                            @endif
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-semibold text-gray-900">
                                                                {{ $item->product_name }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-4 whitespace-nowrap text-sm text-gray-500">Rp
                                                    {{ number_format($item->price) }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <form action="/update_cart/{{ $item->carts->cart_id }}"
                                                        enctype="multipart/form-data" method="POST"
                                                        class="w-full flex flex-wrap">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="flex items-center justify-center">
                                                            {{-- SAYA PASTIKAN KODE INPUT DAN SCRIPT ANDA TIDAK BERUBAH SAMA SEKALI --}}
                                                            <input type="hidden" name="cart_id" id="cart_id"
                                                                value="{{ $item->carts->cart_id }}">
                                                            <input type="hidden" name="product_id" id="product_id"
                                                                value="{{ $item->product_id }}">
                                                            <input type="number" value="{{ $item->carts->qty }}"
                                                                onchange="ubah{{ $loop->iteration }}()"
                                                                name="qty"
                                                                max="{{ $item->stock + $item->carts->qty }}" min="1"
                                                                class="js-qty-input w-16 h-8 text-center border-t border-b focus:outline-none">
                                                        </div>
                                                        <script>
                                                            function ubah{{ $loop->iteration }}() {
                                                                document.getElementById("update{{ $loop->iteration }}").style.display = "inline";
                                                                document.getElementById("hapus{{ $loop->iteration }}").style.display = "none";
                                                            }
                                                        </script>
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">
                                                    Rp {{ number_format($item->price * $item->carts->qty) }}</td>
                                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    {{-- Tombol-tombol ini juga tetap sama persis --}}
                                                    <button type="submit" id="update{{ $loop->iteration }}"
                                                        class="text-orange-500 hover:text-orange-700"
                                                        style="display: none;">Update</button>
                                                    </form>
                                                    <form action="/delete_cart/{{ $item->carts->cart_id }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" id="hapus{{ $loop->iteration }}"
                                                            class="text-red-500 hover:text-red-700"
                                                            style="display: inline">Remove</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Form Payment --}}
                <div class="w-full lg:w-3/12 px-4 mt-8">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Payment</h1>
                    <div class="bg-white shadow-md rounded-lg p-5 sticky top-6">
                        {{-- Perhatikan: Tag <form> di sini juga dihapus --}}
                        <div class="space-y-4">
                            <div>
                                <input type="hidden" name="users_id" value="{{ Auth::user()->user_id }}">
                                <input type="hidden" name="date" id="" value="{{ now() }}">
                                <label for="card_number" class="block text-sm font-medium text-gray-700">Total</label>
                                <input type="text"
                                    value="{{ $carts->sum(function ($item) {return $item->price * $item->carts->qty;}) }}"
                                    name="total" id="total" placeholder="Total" readonly
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm bg-gray-50">
                            </div>
                            <div>
                                <label for="pay_total" class="block text-sm font-medium text-gray-700">Pay Total</label>
                                <input type="number" name="pay_total" id="pay_total" placeholder="Pay Total"
                                    onchange="ubah_change()"
                                    min="{{ $carts->sum(function ($item) {return $item->price * $item->carts->qty;}) }}"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="change" class="block text-sm font-medium text-gray-700">Change</label>
                                <input type="text" name="change" id="change" placeholder="Change" readonly
                                    id="change"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm bg-gray-50">
                                <script>
                                    function ubah_change() {
                                        document.getElementById("change").value = document.getElementById("pay_total").value - document.getElementById(
                                            "total").value;
                                    }
                                </script>
                            </div>
                        </div>
                        <button type="submit" name="action" value="checkout"
                            class="mt-6 w-full bg-lightBlue-500 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition-all duration-150">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
