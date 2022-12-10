@extends('layouts.admin')

@section('content')
<div class="main-content flex flex-col flex-grow p-4">
    <div class="p-8 flex justify-between">
        <div class="text-2xl text-[#E2C2B9] font-bold">
            Table Supplier
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>
        <div>
            <a href="{{ route('admin.supplier.tambah') }}" class="py-2.5 px-5 bg-[#99A799] text-white">Tambah (+)</a>
        </div>
    </div>
    <div class="overflow-x-auto relative px-6">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-[#99A799]">
                <tr>
                    <th scope="col" class="py-2 px-4">
                        Id Supplier
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Nama Supplier
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Email
                    </th>
                    <th scope="col" class="py-2 px-4">
                        Alamat
                    </th>
                    <th scope="col" class="py-2 px-4">
                        No Telepon
                    </th>
                    <th scope="col" class="py-2 px-4">
                       Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($supplier))
                @php
                    $no = 1;
                @endphp
                @foreach ($supplier as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="py-2 px-3 font-medium text-gray-900 whitespace-nowrap">
                        {{ $no }}
                    </th>
                    <th scope="row" class="py-1 px-2 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->nama_supplier }}
                    </th>
                    <td class="py-2 px-3">
                        {{ $item->email }}
                    </td>
                    <td class="py-2 px-3">
                        {{ $item->alamat }}
                    </td>
                    <td class="py-2 px-3">
                        {{ $item->no_telp }}
                    </td>
                    <td  class="flex items-center py-2 px-3 space-x-3">
                        <button id="btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill text-green-600" viewBox="0 0 16 16"></svg>
                            <a href="{{ route('admin.supplier.produk',  $item->id) }}" class="py-2.5 px-5 bg-[#99A799] text-white" >Tambah Produk (+)</a>
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

    </div>
</div>
@endsection