@extends('layouts.admin')

@section('content')
<div class="main-content flex flex-col flex-grow p-4">
    <div class="p-8 flex justify-between">
        <div class="text-2xl text-[#E2C2B9] font-bold">
            Table Retur
        </div>
    </div>
    <div class="overflow-x-auto relative px-6">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-[#99A799]">
                <tr>
                    <th scope="col" class="py-2 px-4">
                        Id Pesanan
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Nama Pemesan
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Alamat
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Alasan
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Status
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Action
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
                        {{ $item->pesanan->id }}
                    </th>
                    <th scope="row" class="py-1 px-2 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->pesanan->user->name }}
                    </th>
                    <td class="py-2 px-3">
                        @php
                            $alamat = json_decode($item->pesanan->user->alamat);
                        @endphp
                        {{ $alamat->alamat . ', ' . $alamat->kota . ', ' . $alamat->provinsi }}
                    </td>
                    <td class="py-2 px-3">
                        {{ $item->keterangan }}
                    </td>
                    <td class="py-2 px-3">
                        @if ($item->status == 'pending')
                            Menunggu
                        @elseif ($item->pesanan->status == 'accept')
                            Diterima
                        @elseif ($item->pesanan->status == 'deny')
                            Ditolak
                        @endif
                    </td>
                    <td class="py-2 px-3">
                        <a href="{{ route('admin.pesanan.detail', ['id' => $item->id]) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 mr-2 mb-2">Dikirim</a>
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