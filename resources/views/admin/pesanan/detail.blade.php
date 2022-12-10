@extends('layouts.admin')

@section('content')
<div class="main-content flex flex-col flex-grow p-4">
    <div class="p-8 flex justify-between">
        <div class="text-2xl text-[#E2C2B9] font-bold">
            Pesanan {{ $keranjang[0]->order_id }}
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
                        Jumlah
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Stok
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($keranjang))
                @php
                    $no = 1;
                @endphp
                @foreach ($keranjang as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="py-2 px-3 font-medium text-gray-900 whitespace-nowrap">
                        {{ $no++ }}
                    </th>
                    <th scope="row" class="py-1 px-2 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->produk->nama_produk }}
                    </th>
                    <td class="py-2 px-3">
                        {{ $item->jumlah }}
                    </td>
                    <td class="py-2 px-3">
                        {{ $item->produk->stok }}
                    </td>
                    <td class="py-2 px-3">
                        @if ($item->produk->stok < $item->jumlah)
                            Stok Tidak Cukup
                        @else
                            Stok Tersedia
                        @endif
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
                @endif
            </tbody>
        </table>

        <form action="{{ route('admin.pesanan.kirim') }}" method="POST" class="mt-5">
            @csrf
            <input type="hidden" name="id" value="{{ $keranjang[0]->order_id }}">
            <div class="mb-6">
              <label for="resi" class="block mb-2 text-sm font-medium text-gray-900">Resi</label>
              <input type="text" name="resi" id="resi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="No Resi" required>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-2 text-center">Kirim</button>
        </form>
    </div>
</div>
@endsection