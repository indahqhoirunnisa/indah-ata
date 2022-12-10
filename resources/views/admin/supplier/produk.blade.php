@extends('layouts.admin')

@section('css')
<script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
@endsection

@section('content')
<div class="p-8 flex justify-between">
    <div class="text-2xl">
        Tambah Stok Produk
    </div>
</div>


<form method="POST" enctype="multipart/form-data" action="{{ route('admin.supplier.produk.simpan') }}" class="px-6">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div class="col-span-2">
            <input type="hidden" name="supplier" value="{{ $supplier->id }}">
            <label for="supplier" class="block mb-2 text-sm font-medium text-gray-900">Nama Supplier </label>
            <input type="text" id="supplier" value="{{ $supplier->nama_supplier }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" readonly>
        </div>
        <div>
            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Pilih Kategori </label>
            <select id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option disabled selected>-Pilih Kategori-</option>
            <option>Benih</option>
            <option>Pupuk</option>
            <option>Pestisida</option>
            <option>Insektisida</option>
            <option>Fungisida</option>
            <option>Herbsida</option>
            </select>
        </div>
        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Pilih Produk </label>
            <select id="countries" name="produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected disabled>-Pilih Produk-</option>
            </select>
        </div>
        <div>
            <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
        </div>
        <div>
            <label for="total" class="block mb-2 text-sm font-medium text-gray-900">Total</label>
            <input type="number" name="total" id="total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
        </div>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#kategori').change(function(){
                var kategori = $('#kategori').val();
                $.ajax({
                    url: "{{ route('admin.supplier.kategori') }}",
                    type: "GET",
                    data: {
                        id: kategori
                    },
                    success: function(data) {
                        $('select[name=produk]').html(``);
                        $('select[name=produk]').html(`<option selected disabled>-Pilih Produk-</option>`);
                        var div = ``;
                        $.each(data, function(index, value) {
                            div += `<option value="`+value.id+`">`+value.nama_produk+`</option>`
                        })
                        $('select[name=produk]').append(div);
                    }
                })
            })
            $('input[name=jumlah]').change(function(){
                var produk = $('select[name=produk]').val();
                $.ajax({
                    url : "{{ route('admin.supplier.produk.cari') }}",
                    type: "GET",
                    data: {
                        id: produk
                    },
                    success: function(data){
                        var jml = $('input[name=jumlah]').val();
                        var total = parseInt(jml) * parseInt(data.harga);
                        $('input[name=total]').val(total);
                    }
                })
            })
        })
    </script>
@endsection