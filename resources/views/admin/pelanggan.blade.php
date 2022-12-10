@extends('layouts.admin')

@section('content')
<div class="main-content flex flex-col flex-grow p-4">
    <div class="p-8 flex justify-between">
        <div class="text-2xl text-[#E2C2B9] font-bold">
            Table Pelanggan
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
                        Nama
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Email
                    </th>
                    <th scope="col" class="py-2 px-4">
                        No Telp
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Alamat
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($pelanggan))
                @php
                    $no = 1;
                @endphp
                @foreach ($pelanggan as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="py-2 px-3 font-medium text-gray-900 whitespace-nowrap">
                        {{ $no }}
                    </th>
                    <th scope="row" class="py-1 px-2 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->name }}
                    </th>
                    <td class="py-2 px-3">
                        {{ $item->email }}
                    </td>
                    <td class="py-2 px-3">
                        {{ $item->no_telp }}
                    </td>
                    <td class="py-2 px-3">
                        @if (isset($item->alamat))
                        @php
                            $alamat = json_decode($item->alamat);
                        @endphp
                        {{ $alamat->alamat . ', ' . $alamat->kota . ', ' . $alamat->provinsi }}
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

        <div class="mt-4">
            {{ $pelanggan->links() }}
        </div>
    </div>
</div>
@endsection