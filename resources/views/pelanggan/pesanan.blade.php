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

    
{{-- card alamat pengiriman --}}
<div class="ml-12 mr-12 ">
    <div class="mt-4">
        <div class="p-6 w-full shadow-md bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
              </svg><p class="mb-3 font-medium text-black">Alamat Penerima</p>
              <p class="mb-3 font-normal text-black ">{{ auth()->user()->name}}</p>
              @php
                  $alamat = json_decode(auth()->user()->alamat);
              @endphp
              <p class="mb-3 font-normal text-black ">{{ $alamat->alamat.', '.$alamat->kota.', '.$alamat->provinsi}}</p>
              <p class="mb-3 font-normal text-black ">{{ auth()->user()->no_telp}}</p>
        </div>
    </div>
    
    {{-- card pesanan --}}
    <div class="mt-2">
        <div class="p-6 w-full shadow-md bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
              </svg><p class="mb-3 font-medium text-black">Pesanan</p>
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-sm text-gray-500">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                               No
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nama Produk
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Tanggal Pesan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Harga
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Jumlah
                            </th>
                            <th scope="col" class="py-3 px-6">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($cart))
                        @php
                            $no = 1;
                            $total = 0;
                        @endphp
                            @foreach($cart as $item)
                            <tr class="bg-white border-b ">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $no++; }}
                                </th>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $item->produk->nama_produk }}
                                </th>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ Carbon\Carbon::parse($item->updated_at)->format('d M Y') }}
                                </th>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    Rp{{ number_format($item->produk->harga, 0, 0, '.') }}
                                </th>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $item->jumlah }}
                                    @php
                                        $total += (int) $item->produk->harga * (int) $item->jumlah
                                    @endphp
                                </th>
                                
                                <td class="py-4 px-6">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </table>
    </div>
    </div>
    <div class="mt-2">
        <div class="p-6 w-full shadow-md bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg><p class="mb-3 font-medium text-black">Pengiriman</p>
                <button type="button" onclick="ongkir('jne')" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">JNE</button>
                <button type="button" onclick="ongkir('pos')" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">POS</button>
                <span id="ongkir">Rp0</span>
            </div>
</div>
<div class="mt-2 ">
    <div class="p-6 w-full shadow-md bg-white">
        <p class="text-yellow-600 font-bold">Total: <span>Rp{{ number_format($total,0,0,'.') }}</span></p> 
    </div>
    <div class="p-6 w-full shadow-md bg-white">
        <p class="text-yellow-600 font-bold">Ongkos Kirim: <span id="ongkos"></span></p> 
    </div>
    <div class="p-6 w-full shadow-md bg-white">
        <p class="text-yellow-600 font-bold">Total Yang Harus Dibayar: <span id="total"></span></p> 
    </div>
</div>

<div class="mt-8 ">
    <form action="{{ route('pesanan.bayar') }}" method="post">
        @csrf
        <input type="hidden" name="total">
        <input type="hidden" name="kurir">
        <input type="hidden" name="ongkir">
        <button type="submit" class="cursor-pointer text-white font-semibold bg-[#6D9886] text-sm px-5 py-2.5 text-center mr-2 mb-2">Bayar</button>
    </form>
</div>

</div>

@if (Session::has('token'))
<script type="text/javascript"
src="https://app.midtrans.com/snap/snap.js"
data-client-key="Mid-client-a_WaNKuoPeCxTDEz"></script>

<form action="{{ route('bayar.simpan') }}" method="post" id="form-bayar">
    @csrf
    <input type="hidden" name="json">
</form>

<script type="text/javascript">
    window.snap.pay('{{ Session::get("token") }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
        //   alert("payment success!"); console.log(result);
            resp(result)
        },
        onPending: function(result){
        /* You may add your own implementation here */
        //   alert("wating your payment!"); console.log(result);
            resp(result)
        },
        onError: function(result){
        /* You may add your own implementation here */
        //   alert("payment failed!"); console.log(result);
            resp(result)
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
    })

    function resp(result){
        document.querySelector('input[name=json]').value = JSON.stringify(result);
        document.querySelector('#form-bayar').submit()
    }
  </script>
@endif

<script>
    function ongkir(value){
        console.log(value)
        $.ajax({
            url: "{{ route('ongkir.get') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                kurir: value
            },
            success: function(data){
                console.log(data)
                var tot = parseInt('{{ $total }}');
                var ong = parseInt(data);
                var total = tot + ong;
                $('input[name=kurir]').val(value)
                $('input[name=ongkir]').val(data)
                $('#ongkir').html('Rp'+data)
                $('#ongkos').html('Rp'+data)
                $('#total').html('Rp'+total)
                $('input[name=total]').val(total)
            }
        })
    }
</script>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    @yield('js')
</body>
</html>