@extends('admin.app')
@section('title','Dashboard')
@section('content-title','Dashboard')
@section('content')
<div class="relative bg-pink-600 md:pt-32 pb-16 pt-12">
    
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-12/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            @yield('content-title')
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection