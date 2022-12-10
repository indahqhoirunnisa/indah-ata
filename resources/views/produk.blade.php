@extends('layouts.app')

@section('content')
<div class="bg-[#EDEDED] overflow-x-hidden">
    <div class="rounded-lg border border-grey-600 drop-shadow-md">  
        {{-- flex --}}
        <div class="m-6">
            <div class="flex h-auto">
                <div class="row-span-3"> 
                    <div class="p-4 w-52 h-80 max-w-sm rounded-lg border shadow-md sm:p-6 dark:bg-gray-800 dark:border-gray-700">
                        <!-- Dropdown menu -->
                        <div class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow ">
                            <ul class="py-1 text-sm text-gray-700 ">
                            <li>
                                <a href="{{ route('produk.benih') }}" class="w-full text-left block py-2 px-4 dark:md:hover:bg-gray-400">Benih</a>
                            </li>
                            <li>
                                <a href="{{ route('produk.pupuk') }}" class="w-full text-left block py-2 px-4 dark:md:hover:bg-gray-400">Pupuk</a>
                            </li>
                            <li>
                                <a href="{{ route('produk.pestisida') }}" class="w-full text-left block py-2 px-4 dark:md:hover:bg-gray-400">Pestisida</a>
                            </li>
                            <li>
                                <a href="{{ route('produk.fungisida') }}" class="w-full text-left block py-2 px-4 dark:md:hover:bg-gray-400">Fungisida</a>
                            </li>
                            <li>
                                <a href="{{ route('produk.insektisida') }}" class="w-full text-left block py-2 px-4 dark:md:hover:bg-gray-400">Insektisida</a>
                            </li>
                            <li>
                                <a href="{{ route('produk.herbisida') }}" class="w-full text-left block py-2 px-4 dark:md:hover:bg-gray-400 ">Herbisida</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex-auto w-32 ml-4">
                    <form class="flex items-center">   
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Search" required="">
                        </div>
                        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                    {{-- breadcumb --}}
            <div class="ml-4 mt-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                      <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-yellow-600">
                          E-FaGro Intan Tani 
                        </a>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                          <a href="#" class="ml-1 text-sm font-medium md:ml-2 dark:text-gray-400">Produk</a>
                        </div>
                      </li>
                      <li aria-current="page">
                        <div class="flex items-center">
                          <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                          <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Kategori</span>
                        </div>
                      </li>
                    </ol>
                </nav>
            </div>
            <div class="grid grid-cols-4 gap-4" id="show-produk">
                @if (isset($produk))
                @foreach ($produk as $item)
                <div class="w-full max-w-xs rounded-lg border border-2 shadow-lg">
                    <a href="{{ route('produk.detail', ['id' => $item->id]) }}">
                        <img class="p-4 w-96 h-80 rounded-t-lg" src="/image/produk/{{ $item->gambar }}" alt="product image">
                        <div class="px-5 pb-5">
                            <a href="{{ route('produk.detail', ['id' => $item->id]) }}">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900"> {{ $item->nama_produk }} </h5>
                            </a>
                            <div class="flex justify-between items-center">
                                <span class="text-3xl font-bold text-blue-700">Rp.{{ number_format($item->harga,0,0,'.') }} </span>
                                <a href="{{ route('cart.get', ['id' => $item->id]) }}" class="text-blue-700 bg-slate-300 hover:bg-[#6D9886] hover:text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
