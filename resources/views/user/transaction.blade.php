@extends('user.app')
@section('title', 'Transaction | Yoozh')
@section('content')

    <section class="py-20 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4 ">
                <div class="w-full lg:w-8/12 px-4 mb-8 lg:mb-0 mt-8 mx-auto ">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Transaction History</h1>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full items-center text-center align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No.</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Pay Total</th>
                                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $item)
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->date }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Rp. {{ number_format($item->total, 0, ',', '.') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Rp. {{ number_format($item->pay_total, 0, ',', '.') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="/receipt/{{$item->transaction_id}}" class="text-lightBlue-600 hover:text-blue-900">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
