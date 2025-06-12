@extends('admin.app')
@section('title','Category')
@section('content-title','Category')
@section('content')
<div class="relative bg-orange-500 md:pt-32 pb-16 pt-12">
    
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
    <div class="flex flex-wrap">
        <div class="w-full mb-12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-lg text-blueGray-700">
                                Category
                            </h3>
                        </div>
                        <a class="bg-emerald-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" href="{{ route('category.create') }}">Add</a>

                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    No.
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Name
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1?>
                            @foreach ($categories as $item)
                            <tr>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $i++}}
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $item->category_name}}
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                    <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                        onclick="openDropdown(event,'table-light-{{ $item->category_id }}-dropdown')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                        id="table-light-{{ $item->category_id }}-dropdown">
                                        <a href="/category/{{ $item->category_id}}/edit"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Update</a>
                                            <form action="{{ route('category.destroy', $item->category_id) }}" method="POST" class="inline w-full">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-sm py-2 px-4 font-normal block w-full text-left whitespace-nowrap bg-transparent text-blueGray-700 hover:text-red-500">Delete</button>
                                            </form>
                                        </div>
                                </td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection