@extends('layouts.app')

@section('content')
    
{{-- edit profil --}}
<form action="{{ route('profil') }}" method="POST" class="px-6 py-8">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                </div>
                <input datepicker type="text" name="name" id="exp" value="{{ $profil->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="" required="" >
            </div>
        </div>  
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="text" id="harga" value="{{ $profil->email }}" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="otomatis" required="" >
        </div>
    </div>
    <div class="mb-6">
        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
        <input type="text" name="no_telp" id="nama" value="{{ $profil->no_telp }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required="" >
    </div>
    @php
        $alamat = json_decode($profil->alamat);
    @endphp
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-6">
            <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900">Provinsi</label>
            <select id="provinsi" name="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Provinsi</option>
                @if (isset($alamat->provinsi_id))
                @foreach ($provinsi as $item)
                    <option {{ $item->province_id == $alamat->provinsi_id ? 'selected' : '' }} value="{{ $item->province_id.'|'.$item->province }}">{{ $item->province }}</option>
                @endforeach
                @else
                @foreach ($provinsi as $item)
                    <option value="{{ $item->province_id.'|'.$item->province }}">{{ $item->province }}</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="mb-6">
            <label for="Kota" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
            <select id="Kota" name="kota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @if (isset($alamat->kota))
                <option selected>{{ $alamat->kota }}</option>
                @else
                <option selected>Pilih</option>
                @endif
            </select>
        </div>
    </div>
    <div class="mb-6">
        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
        <textarea name="alamat" id="deskripsi"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "> {{ $alamat->alamat ?? null }} </textarea>
    </div>
    <button id="btn" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
</form>

@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('select[name=provinsi]').change(()=>{
            var value = $('select[name=provinsi]').val();
            var province = value.split("|");
            var provinsi = province[0];
            $.ajax({
                url: "{{ route('kota') }}",
                type: "GET",
                data: {
                    provinsi: provinsi
                },
                success: function(data){
                    console.log(data)
                    var div = '';
                    $('select[name=kota]').html(``);
                    div += `<option selected disabled>Pilih</option>`
                    $.each(data, function(key, value){
                        div += `<option value="`+value.city_id+`|`+value.city_name+`">`+value.city_name+`</option>`;
                    });
                    $('select[name=kota]').html(div);
                }
            })
        })
    })
</script>
@endsection
