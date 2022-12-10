@extends('layouts.admin')

@section('css')
<script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
@endsection

@section('content')
<div class="p-8 flex justify-between">
    <div class="text-2xl">
        Tambah Produk
    </div>
</div>


<form method="POST" enctype="multipart/form-data" action="{{ route('admin.produk.simpan') }}" class="px-6">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Pupuk ZA" required="">
        </div>
        <div>
            <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900">Jenis Produk</label>
            <select id="jenis" name="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option disabled selected>-- Pilih --</option>
                <option value="Pupuk">Pupuk</option>
                <option value="Benih">Benih</option>
                <option value="Pestisida">Pestisida</option>
                <option value="Insektisida">Insektisida</option>
                <option value="Herbisida">Herbisida</option>
                <option value="Fungisida">Fungisida</option>
            </select>
        </div>
        <div>
            <label for="exp" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Exp</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker type="text" name="exp" id="exp" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Pilih Tanggal">
            </div>
        </div>  
        <div>
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga Produk</label>
            <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="300000" required="">
        </div>
        <div>
            <label for="berat" class="block mb-2 text-sm font-medium text-gray-900">Berat Produk</label>
            <input type="number" name="berat" id="berat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="200 gr" required="">
        </div>
        <div>
            <label for="stok" class="block mb-2 text-sm font-medium text-gray-900">Stok Produk</label>
            <input type="number" name="stok" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="200" required="">
        </div>
    </div>
    <div class="mb-6">
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
    </div> 
    <div class="mb-6">
        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
        <input type="file" name="gambar[]" id="gambar" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer" multiple accept="image/*">
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection

@section('js')
<script>
    ClassicEditor
        .create( document.querySelector( '#deskripsi' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection