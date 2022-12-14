@extends('layouts.app')

@section('content')

<div class="main-content flex flex-col flex-grow p-4 min-h-screen">
    <div class="p-8 flex justify-between">
        <div class="text-2xl text-[#E2C2B9] font-bold">
            Detail Riwayat Pesanan
        </div>
    </div>
    <div class="col-span-1">
      <div class="container bg-white shadow-md mx-auto py-10 px-8">
        <div class="w-full flex">
          <div class="w-full flex justify-between border-b pb-4">
            <div class="font-light">Data Penerima</div>
          </div>
        </div>
        <div class="flex justify-between py-2 mb-4">
          <div class="text-xl font-bold">Nama Penerima</div>
          <div class="text-2xl font-bold">{{ auth()->user()->name}}</div>
          <div class="text-xl font-bold">Alamat Penerima</div>
          @php
                  $alamat = json_decode(auth()->user()->alamat);
              @endphp
              <p class="mb-3 font-normal text-black ">{{ $alamat->alamat.', '.$alamat->kota.', '.$alamat->provinsi}}</p>
              <p class="mb-3 font-normal text-black ">{{ auth()->user()->no_telp}}</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-4 gap-2 mt-10 px-8">
        <div class="col-span-3">
            {{-- keranjang --}}
            <div class="container bg-white shadow-md mx-auto py-10">
                <div class="w-full flex px-16">
                    <div class="w-full flex justify-between border-b pb-8">
                        <div class="font-semibold text-2xl">Detail Pesanan</div>
                <div class="font-semibold text-2xl"> {{ isset($cart) ? $cart->count() : '' }} Items</div>
              </div>
            </div>
            <div class="flex py-2 px-16">
              <div class="font-semibold text-gray-600 text-xs uppercase w-2/5">Produk</div>
              <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Nama Produk</div>
              <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Harga</div>
              <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</div>
            </div>
            @php
                $subtotal = 0;
            @endphp
            @foreach ($cart as $item)
            <div class="flex items-center hover:bg-gray-100 py-5 px-16">
              <div class="flex space-x-2 w-2/5">
                <div class="w-20">
                  <img class="h-24" src="{{ asset('image/produk/'.$item->produk->gambar) }}" alt="">
                </div>
                <div class="flex flex-col justify-between ml-4 flex-grow">
                  <span class="font-bold text-sm"> {{ $item->produk->nama_produk }} </span>
                  <span class="text-red-500 text-xs"> {{ $item->produk->kategori }} </span>
               </div>
              </div>
            
          </div>
        </div>
    </div>
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