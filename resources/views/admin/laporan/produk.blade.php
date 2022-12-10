@extends('layouts.admin')

@section('content')
<div class="main-content flex flex-col flex-grow p-4">
    <div class="p-8 flex justify-between">
        <div class="text-2xl text-[#E2C2B9] font-bold">
            Laporan Produk
        </div>
      
        <div>
            <a onclick="window.print()" class="py-2.5 px-5 bg-[#99A799] text-white">Cetak</a>
        </div>
    </div>
    <div class="overflow-x-auto relative px-6">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-[#99A799]">
                <tr>
                    <th scope="col" class="py-2 px-4">
                        No
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
                        Stok
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
                        {!! $item->stok !!}
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection