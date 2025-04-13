@extends('admin.app')
@section('title', 'Product')
@section('content-title', 'Product')
@section('content')
    <div class="relative bg-orange-500 md:pt-32 pb-16 pt-12">

    </div>
    <div class="px-4 md:px-12 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-full px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                Add New Product
                            </h6>
                        </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        <!-- Error Messages -->
                        @if ($errors->any())
                            <div x-data="{ show: true }" x-show="show" x-transition
                                class="mb-6 bg-red-50 border-l-4 border-red-500 p-4">
                                <div class="flex justify-between">
                                    <div class="flex items-center">
                                        <svg class="h-5 w-5 text-red-500 mr-3" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-red-700 font-medium">Please fix these errors:</p>
                                    </div>
                                    <button @click="show = false" class="text-red-500 hover:text-red-700">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <ul class="mt-2 list-disc list-inside text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Success Message -->
                        @if (session('success'))
                            <div x-data="{ show: true }" x-show="show" x-transition
                                class="mb-6 bg-green-50 border-l-4 border-green-500 p-4">
                                <div class="flex justify-between">
                                    <div class="flex items-center">
                                        <svg class="h-5 w-5 text-green-500 mr-3" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-green-700 font-medium">{{ session('success') }}</p>
                                    </div>
                                    <button @click="show = false" class="text-green-500 hover:text-green-700">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Product Information
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Product Name
                                        </label>
                                        <input type="text"
                                            id="product_name" name="product_name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ old('product_name') }}" />
                                    </div>
                                </div>
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                          htmlFor="grid-password">
                                          Product Category
                                      </label>
                                      <select class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" id="id_category" name="id_category">
                                          @foreach ($categories as $item)
                                              @if ($item->id_category == $item->id)
                                                  <option value ="{{ $item->id }}" selected>{{ $item->category_name }}</option>
                                                  </option>
                                              @else
                                                  <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                              @endif
                                          @endforeach
                                      </select>
                                  </div>
                              </div>
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                          htmlFor="grid-password">
                                          Product Image
                                      </label>
                                      <input type="file" id="product_image" name="product_image" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                  </div>
                              </div>

                                
                            </div>

                            <hr class="mt-6 border-b-1 border-blueGray-300" />

                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Product Tags
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Price
                                        </label>
                                        <input type="number" id="price" name="price"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Price" value="{{ old('price') }}" />
                                    </div>
                                </div>
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Stock
                                        </label>
                                        <input type="number" id="stock" name="stock"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Stock" value="{{ old('stock') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                              <input
                                  class="bg-teal-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                  type="submit" name="" id="">
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
