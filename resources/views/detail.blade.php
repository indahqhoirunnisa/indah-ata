@extends('layouts.app')

@section('css')

<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  
    .custom-number-input input:focus {
      outline: none !important;
    }
  
    .custom-number-input button:focus {
      outline: none !important;
    }
  </style>

@endsection

@section('content')
<div class="grid grid-cols-3 gap-4 px-16 py-8">
    <div>
        <img src="{{ asset('/image/produk/'.$produk->gambar) }}" alt="" class="w-full shadow-lg border border-2 rounded-lg">
    </div>
    <div class="space-y-2">
        <h4 class="text-5xl font-semibold">{{ $produk->nama_produk }}</h4>
        <h4 class="text-lg font-semibold">{{ $produk->kategori }}</h4>
        <h4 class="text-3xl font-bold text-[#6D9886]">Rp {{ number_format($produk->harga, 0, 0, '.') }}</h4>
        <p>
            <div class="text-light text-sm">Deskripsi</div>
            {!! ucfirst($produk->deskripsi) !!}
        </p>
        <p>
            <div class="font-semibold">Stok</div>
            {{ $produk->stok }} Buah
        </p>
    </div>
    <div class="flex">
        <div class="custom-number-input h-10 w-full">
            <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">Jumlah</label>
            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                    <span class="m-auto text-2xl font-thin">−</span>
                </button>
                <input type="number" readonly class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="1">
                <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                <span class="m-auto text-2xl font-thin">+</span>
                </button>
            </div>
            <form action="{{ route('cart.post') }}" method="post">
                @csrf
                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                <input type="hidden" name="jumlah" value="1">
                <button type="submit" class="bg-[#6D9886] mt-2 w-full py-2.5 px-2 rounded-md text-white">Tambah Keranjang</button>
            </form>
        </div>
    </div>
</div>

<div class="w-14 h-14 absolute right-16 bottom-8 rounded-full bg-[#6D9886] text-white flex justify-center items-center cursor-pointer">
    <a onclick="window.open('https://wa.me/6285702339724')">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
    </a>
</div>

@endsection

@section('js')
    
<script>
    function decrement(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      if(value > 1) {
        value--;
        target.value = value;
        $('input[name=jumlah]').val(value)
      }
    }
  
    function increment(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      var stok = '{{ $produk->stok }}';
      let value = Number(target.value);
      if(value < stok)
      value++;
      target.value = value;
      $('input[name=jumlah]').val(value)
    }
  
    const decrementButtons = document.querySelectorAll(
      `button[data-action="decrement"]`
    );
  
    const incrementButtons = document.querySelectorAll(
      `button[data-action="increment"]`
    );
  
    decrementButtons.forEach(btn => {
      btn.addEventListener("click", decrement);
    });
  
    incrementButtons.forEach(btn => {
      btn.addEventListener("click", increment);
    });
</script>
@endsection