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
    
    <style>
        @media print {
            .no-print {
                visibility: hidden;
            }
        }
    </style>

    @yield('css')

    <title>Intan Tani</title>

</head>
<body class="bg-gray-100">
    <div class="shadow bg-white w-full flex items-center justify-between px-16 py-4 no-print">
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

    <div class="grid grid-cols-1 gap-2 mt-10 px-8">
        <div>
            <div class="flex justify-end px-4 mb-4 no-print">
                @if ($pembayaran->status_pembayaran == 'pending')
                <a href="{{ $pembayaran->pdf_url }}" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Cara Pembayaran</a>
                @endif
                <button onclick="window.print()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Cetak</button>
            </div>
          {{-- keranjang --}}
            <div class="container bg-white shadow-md mx-auto py-10">
                <div class="w-full flex px-16">
                    <div class="w-full flex justify-between border-b pb-8">
                        <div>
                            <div class="font-semibold text-2xl">Nota #{{ $pembayaran->order_id }}</div>
                            @if ($pembayaran->status_pembayaran == 'pending')
                            <div class="text-lg text-red-600">Status: Belum Dibayar</div>
                            @endif
                            <div>Pengiriman: {{ strtoupper($pembayaran->pesanan->ekspedisi) }}</div>
                        </div>
                        <div> 
                            <div class="font-semibold text-xl">Intan Tani</div>    
                            <div>Alamate</div>
                            <div class="text-sm">{{ Carbon\Carbon::parse($pembayaran->tgl_bayar)->format('d M Y') }}</div>
                        </div>
                    </div>
                </div>
                <div class="flex py-2 px-16">
                    <div class="font-semibold text-gray-600 text-xs uppercase w-2/5">Produk</div>
                    <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Jumlah</div>
                    <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Harga</div>
                    <div class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-right">Total</div>
                </div>
                @php
                    $keranjang = App\Models\Keranjang::where('order_id', $pembayaran->order_id)->get();
                    $subtotal = 0;
                @endphp
                @foreach ($keranjang as $item)
                @php
                    $subtotal += $item->produk->harga * $item->jumlah;
                @endphp
                <div class="flex py-2 px-16">
                <div class="font-semibold text-gray-600 text-xs uppercase w-2/5">{{ $item->produk->nama_produk }}</div>
                <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">{{ $item->jumlah }}</div>
                <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">{{ $item->produk->harga }}</div>
                <div class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-right">{{ $item->produk->harga * $item->jumlah }}</div>
                </div>
                @endforeach
                <div class="flex py-4 px-16">
                    <div class="font-semibold text-gray-600 text-xs uppercase w-2/5"></div>
                    <div class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center"></div>
                    <div class="font-semibold text-right text-gray-600 text-lg uppercase w-2/5">
                        <div>Subtotal : {{ $subtotal }}</div>
                        <div>Ongkir : {{ $pembayaran->pesanan->ongkir }}</div>
                        <div>Total : {{ (int) $pembayaran->total_bayar }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    @yield('js')
</body>
</html>