@extends('layouts.admin')

@section('content')
<div class="main-content flex flex-col flex-grow p-4">
    <div class="p-8 flex justify-between">
        <div class="text-2xl text-[#E2C2B9] font-bold">
            Laporan Retur Pengembalian
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
                        Id Pesanan
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Nama Pemesan
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Alasan
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($retur))
                @php
                    $no = 1;
                @endphp
                @foreach ($retur as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="py-2 px-3 font-medium text-gray-900 whitespace-nowrap">
                        {{ $no++ }}
                    </th>
                    <th scope="row" class="py-1 px-2 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->pesanan->id }}
                    </th>
                    <td class="py-2 px-3">
                        {{ $item->pesanan->user->name }}
                    </td>
                    <td class="py-2 px-3">
                        {{ $item->keterangan }}
                    </td>
                    <td class="py-2 px-3">
                        {{ $item->status }}
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