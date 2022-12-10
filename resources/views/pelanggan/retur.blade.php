@extends('layouts.app')

@section('content')
<div class="p-8 flex justify-between">
    <div class="text-2xl">
        Retur Produk {{ $pesanan->id }}
    </div>
</div>


<form method="POST" enctype="multipart/form-data" action="{{ route('retur.simpan') }}" class="px-6">
    @csrf
    <input type="hidden" name="id" value="{{ $pesanan->id }}">
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900">Alasan Retur</label>
            <select id="jenis" name="alasan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option disabled selected>-- Pilih --</option>
                <option>Salah Produk</option>
                <option>Produk Cacat</option>
            </select>
        </div>
    </div>
    <div class="mb-6">
        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900">Bukti</label>
        <input type="file" name="gambar" id="gambar" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer" multiple accept="image/*">
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection
