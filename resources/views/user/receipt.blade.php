@extends('user.app')
@section('title', 'Dashboard | Yoozh')
@section('content')

    <section class="py-20 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4 ">
                <div class="w-full lg:w-8/12 px-4 mb-8 lg:mb-0 mt-8 mx-auto ">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Transaction Receipt</h1>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="overflow-x-auto">
                            <div class="ml-4 my-6">
                                <p>Date : {{ $detail->created_at }}</p>
                                <p>Customer : {{ $detail->user->fullname }}</p>
                            </div>
                            <table class="min-w-full items-center text-center align-middle my-4">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">

                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No.</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Product</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            QTY</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Price</th>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Sub Total</th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detail->transaction_details as $item)
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->products->product_name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->qty }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->products->price }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->products->price * $item->qty }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-white">-</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-end text-sm text-gray-500">GrandTotal</td>
                                        <td colspan="6" class="text-sm text-gray-500">Rp {{ number_format($detail->total, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-end text-sm text-gray-500">Payment</td>
                                        <td colspan="6" class="text-sm text-gray-500">
                                            Rp {{ number_format($detail->pay_total, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-end text-sm text-gray-500">Change</td>
                                        <td colspan="6" class="text-sm text-gray-500">
                                            Rp {{ number_format($detail->total - $detail->pay_total, 0, ',', '.') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
