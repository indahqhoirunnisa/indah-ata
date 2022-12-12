<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    
    {{--icons bootsrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    
    @yield('css')

    <title>Intan Tani</title>

</head>
<body class="bg-gray-100">
    <div class="shadow bg-white w-full flex items-center justify-between px-16 py-4">
      <div class="flex items-center">
        <div>
          <a href="{{ route('home') }}" class="inline-flex items-center text-2xl font-bold text-[#557153]">E-FaGro Intan Tani</a>
        </div>
        <div class="flex items-center">
            <svg class="h-12 w-12"  width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19"></svg>
            <a href="cart" class="ml-1 text-2xl font-medium md:ml-2 text-black">Keranjang</a>
        </div>
      </div>
      <a href="" class="flex items-center">
        <div class="">Keranjang</div>
        <div>
          <svg class="ml-2 mt-3 w-8 h-8" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/></svg>
        </div>
      </a>
    </div>

    <div class="grid grid-cols-4 gap-2 mt-10 px-8">
        <div class="col-span-3">
          {{-- keranjang --}}
          <div class="container bg-white shadow-md mx-auto py-10">
            <div class="w-full flex px-16">
              <div class="w-full flex justify-between border-b pb-8">
                <div class="font-semibold text-2xl">Keranjang Belanja</div>
                <div class="font-semibold text-2xl"> {{ isset($cart) ? $cart->count() : '' }} Items</div>
              </div>
            </div>
            <div class="flex py-2 px-16">
              <div class="font-semibold text-gray-600 text-xs uppercase w-2/5">Produk</div>
              <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Jumlah</div>
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
                  <a href="{{ route('cart.hapus', [ 'id' => $item->id ]) }}" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Hapus</a>
                </div>
              </div>
              <div class="flex justify-center w-1/5">
                <a href="{{ route('cart.kurang', ['id' => $item->id]) }}" class="border bg-gray-100 px-2 flex items-center">
                  <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                  </svg>
                </a>      
                <input class="border text-center w-16" type="number" readonly value="{{ $item->jumlah }}">
                <a href="{{ route('cart.tambah', ['id' => $item->id]) }}" class="border bg-gray-100 px-2 flex items-center">
                  <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                    <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                  </svg>
                </a>
              </div>
              <span class="text-center w-1/5 font-semibold text-sm"> Rp{{ number_format($item->produk->harga, 0, 0, '.') }} </span>
              <span class="text-center w-1/5 font-semibold text-sm"> Rp{{ number_format($item->produk->harga * $item->jumlah, 0, 0, '.') }} </span>
            </div>
            @php
                $subtotal += $item->jumlah * $item->produk->harga
            @endphp
            @endforeach
          </div>
          <a href="{{ route('produk') }}" class="flex justify-center font-semibold mt-4 px-4 py-2.5 bg-[#557153] text-white">
            Lanjutkan Belanja
          </a>
        </div>
        <div class="col-span-1">
          <div class="container bg-white shadow-md mx-auto py-10 px-8">
            <div class="w-full flex">
              <div class="w-full flex justify-between border-b pb-4">
                <div class="font-light">Total Belanja</div>
              </div>
            </div>
            <div class="flex justify-between py-2 mb-4">
              <div class="text-xl font-bold">Total</div>
              <div class="text-2xl font-bold">Rp{{ number_format($subtotal, 0, 0, '.') }}</div>
            </div>
            <a href="{{ route('pesanan') }}" class="flex justify-center font-semibold px-8 py-2.5 bg-[#557153] text-white">
              Lanjutkan Bayar
            </a>
          </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    @yield('js')
</body>
</html>