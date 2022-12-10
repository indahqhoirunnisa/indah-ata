@extends('layouts.admin')

@section('css')
<script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
@endsection

@section('content')
<div class="p-8 flex justify-between">
    <div class="text-2xl">
        Tambah Supplier
    </div>
</div>


<form method="POST" enctype="multipart/form-data" action="{{ route('admin.supplier.simpan') }}" class="px-6">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Supplier</label>
            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
        </div>
        <div>
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="text" name="email" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
        </div>
        <div>
            <label for="berat" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
            <input type="text" name="no_telp" id="berat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
        </div>
        <div>
            <label for="stok" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
            <input type="text" name="alamat" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
        </div>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection

@section('js')

@endsection