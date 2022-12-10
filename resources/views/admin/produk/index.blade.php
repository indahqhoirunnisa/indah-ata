@extends('layouts.admin')

@section('content')
<div class="main-content flex flex-col flex-grow p-4">
    <div class="p-8 flex justify-between">
        <div class="text-2xl text-[#E2C2B9] font-bold">
            Table Produk
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>
        <div>
            <a href="{{ route('admin.produk.tambah') }}" class="py-2.5 px-5 bg-[#99A799] text-white">Tambah (+)</a>
        </div>
    </div>
    <div class="overflow-x-auto relative px-6">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-[#99A799]">
                <tr>
                    <th scope="col" class="py-2 px-4">
                        Id Produk
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Nama Produk
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Kategori
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Exp
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Harga
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Deskripsi
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Stok
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Gambar
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($produk))
                @php
                    $no = 1;
                @endphp
                @foreach ($produk as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="py-2 px-3 font-medium text-gray-900 whitespace-nowrap">
                        {{ $no }}
                    </th>
                    <th scope="row" class="py-1 px-2 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->nama_produk }}
                    </th>
                    <td class="py-2 px-3">
                        {{ $item->kategori }}
                    </td>
                    <td class="py-2 px-3 whitespace-nowrap">
                        {{ Carbon\Carbon::parse($item->exp)->format('d-m-Y') }}
                    </td>
                    <td class="py-2 px-3">
                        Rp{{ number_format($item->harga, 0, 0, '.') }}
                    </td>
                    <td class="py-2 px-3">
                        {!! $item->deskripsi !!}
                    </td>
                    <td class="py-2 px-3">
                        {!! $item->stok !!}
                    </td>
                    <td class="py-2 px-3">
                        <img src="{{ asset('image/produk/'.$item->gambar) }}" alt="" class="w-[90]">
                    </td>
                    <td  class="flex items-center py-2 px-3 space-x-3">
                        <button id="btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill text-green-600" viewBox="0 0 16 16">
                           <a href="{{ route('admin.produk.ubah',  $item->id) }} "><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></a></svg>
                        </button>
                        <button id="btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill text-red-700" viewBox="0 0 16 16">
                            <a href="{{ route('admin.produk.hapus', $item->id) }}"> <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></a></svg>
                         </button>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
                @endif
            </tbody>
        </table>

        <div class="mt-4">
            {{ $produk->links() }}
        </div>
    </div>
</div>
@endsection