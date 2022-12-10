@extends('layouts.app')

@section('content')
<div class="bg-[url('/image/bg.png')]">
    <div class="w-full flex justify-center mt-6 ">
        <span class="text-5xl font-bold text-[#354259]">E-FARM GROCERY INTAN TANI</span>
    </div>
    <div class="w-full flex justify-center mt-8">
        <span class="text-4xl font-bold text-[#2C3639]">KEBUTUHAN TANI UNTUK PERTANIAN MAJU</span>
    </div>
    <div class="w-full flex justify-center mt-8">
        <span class="text-3xl font-bold text-center text-[#557153]">PILIH PRODUK APA AJA <br>
    DIANTAR SAMPAI RUMAH ANDA</span>
    </div>
</div>

{{-- card 1 --}}
<div class="w-full mt-6 h-96 bg-white">
    <div class=" flex justify-center w-full space-x-24 mb-6 pt-6">
        <div class="space-y-4">
            <img src="image/depan/1.png" alt="" class="w-56 h-42 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
            <span class="text-black font-semibold flex justify-center">Produk Lengkap</span>
        </div>
        <div class="space-y-4">
            <img src="image/depan/3.png" alt="..." class="w-56 h-42 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
            <span class="text-black font-semibold flex justify-center">Harga Terjangkau </span>
        </div>
        <div class="space-y-4">
            <img src="image/depan/2.png" alt="..." class="w-56 h-42 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
            <span class="text-black font-semibold flex justify-center">Produk Berkualitas </span>
        </div>
    </div>
</div>

<div class="w-full mt-6 h-full ">
    <div class="grid grid-cols-3 gap-4 "> 
    <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
        <div class="w-full max-w-xs rounded-lg border border-2 shadow-lg">
            <img class="p-4 w-80 h-72 rounded-t-lg" src="/image/produk/gambar (10).png" alt="product image">
            <div class="px-5 pb-5">
              <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900"> Antracol</h5>
              </a>
            </div>
          </a>
        </div>
    </div>
    <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
        <div class="w-full max-w-xs rounded-lg border border-2 shadow-lg">
            <img class="p-4 w-80 h-72 rounded-t-lg" src="/image/produk/gambar (15).png" alt="product image">
            <div class="px-5 pb-5">
              <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900"> Esgrimex</h5>
              </a>
            </div>
          </a>
        </div>
    </div>
    <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
        <div class="w-full max-w-xs rounded-lg border border-2 shadow-lg">
            <img class="p-4 w-80 h-72 rounded-t-lg" src="/image/produk/gambar (35).png" alt="product image">
            <div class="px-5 pb-5">
              <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900"> Et Prorice</h5>
              </a>
            </div>
          </a>
        </div>
    </div>
    <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
        <div class="w-full max-w-xs rounded-lg border border-2 shadow-lg">
            <img class="p-4 w-80 h-72 rounded-t-lg" src="/image/produk/gambar (48).png" alt="product image">
            <div class="px-5 pb-5">
              <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900"> Humustar</h5>
              </a>
            </div>
          </a>
        </div>
    </div>
    <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
        <div class="w-full max-w-xs rounded-lg border border-2 shadow-lg">
            <img class="p-4 w-80 h-72 rounded-t-lg" src="/image/produk/gambar (59).png" alt="product image">
            <div class="px-5 pb-5">
              <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900"> Mestafen</h5>
              </a>
            </div>
          </a>
        </div>
    </div>
    <div class="flex-none mt-auto bg-gray-100 rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
        <div class="w-full max-w-xs rounded-lg border border-2 shadow-lg">
            <img class="p-4 w-80 h-72 rounded-t-lg" src="/image/produk/gambar (60).png" alt="product image">
            <div class="px-5 pb-5">
              <a href="#">
                  <h5 class="text-xl font-semibold tracking-tight text-gray-900"> Mipcindo</h5>
              </a>
            </div>
          </a>
        </div>
    </div>
    </div>
</div>

<div class="w-full bg-white pt-24">
    <div class="flex justify-center space-x-8">
        <div class="flex space-x-4 float-center p-4 bg-white rounded-lg mt-8">
            <div class="mt-4">
                <img src="image/objek.png" alt=""class="w-screen h-80">
            </div>
            <div class="p-4 ml-4 mr-5 offset-mr-1 ">
                <h4 class="text-center text-3xl font-bold text-[#557153]">Tentang Kami</h4>
                <p class="mb-4 mt-3 font-light text-gray-500  first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-[#587a41] first-letter:mr-3 first-letter:float-left">E-FaGro Intan Tani (E-Farm Grocery Intan Tani) adalah situs belanja online jual kebutuhan sehari-hari pertanian dengan harga terjangkau, lengkap, dan produk berkualitas.
                    E-FaGro Intan Tani terletak di Kota Wonogiri tepatnya di Desa Tegalharjo, Kecamatan Eromoko yang mayoritas penduduknya adalah Petani.<br>Produk Intan Tani meliputi pupuk, obat pertanian seperti Pestisida, Fungisida, Herbisida, Insektisida dan benih.</p>
                    <a href="{{ route('tentang') }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-[#557153] bg-[#DAE5D0] rounded-lg hover:bg-[#557153] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Read more
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
            </div>
        </div>
    </div>
</div>

{{-- card 2 --}}
<div class="w-full bg-white pt-8 ">
    <div class=" flex justify-center w-full">
        <h1 class="mb-20 text-4xl font-bold tracking-tight text-caps">KATEGORI PRODUK</h1>
    </div>
    <div class="flex justify-center space-x-8">
        <div class="grid grid-cols-3 gap-4">

        <a href="kategori#Benih">
            <div class="p-6 max-w-sm bg-yellow-500 rounded-lg border shadow-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <svg class="mb-2 w-10 h-10 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
                </svg>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">Benih</h5>
            </div>
        </a>

        <a href="kategori#Pupuk">
            <div class="p-6 max-w-sm bg-blue-500 rounded-lg border shadow-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <svg class="mb-2 w-10 h-10 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
                </svg>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">Pupuk</h5>
            </div>
        </a>

        <a href="kategori#pestisida">
            <div class="p-6 max-w-sm bg-red-500 rounded-lg border shadow-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <svg class="mb-2 w-10 h-10  text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
                </svg>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">Pestisida</h5>
            </div>
        </a>

        <a href="kategori#insektisida">
            <div class="p-6 max-w-sm bg-green-500 rounded-lg border shadow-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <svg class="mb-2 w-10 h-10  text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
                </svg>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">Insektisida</h5>
            </div>
        </a>

        <a href="kategori#fungisida">
            <div class="p-6 max-w-sm bg-purple-500 rounded-lg border shadow-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <svg class="mb-2 w-10 h-10 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
                </svg>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">Fungisida</h5>
            </div>
        </a>

        <a href="kategori#herbisida">
            <div class="p-6 max-w-sm bg-orange-500 rounded-lg border shadow-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <svg class="mb-2 w-10 h-10 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
                </svg>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white">Herbisida</h5>
            </div>
        </a>
    </div>
</div>

{{-- card 3 --}}
<div class="w-full bg-white pt-10">
    <div class=" flex justify-center w-full">
        <h1 class="mb-10 text-4xl font-bold tracking-tight text-caps ">Bagaimana Cara Memesan ?</h1>
    </div>
    <div class="flex justify-center space-x-8">
        <div class="block p-8 space-y-4">
            <img src="image/depan/4.png" alt="" class="w-full h-56 rounded-full hover:animate-bounce w-auto h-auto">
            <div class="w-full flex justify-center">
                <span class="text-xl font-semibold ">Login</span>
            </div>
        </div>
        <div class="block p-8 space-y-4">
            <img src="image/depan/5.png" alt="" class="w-full h-56 rounded-full hover:animate-bounce w-auto h-auto">
            <div class="w-full flex justify-center">
                <span class="text-xl font-semibold">Pilih Produk</span>
            </div>
        </div>
        <div class="block p-8 space-y-4">
            <img src="image/depan/6.png" alt="" class="w-full h-56 rounded-full hover:animate-bounce w-auto h-auto">
            <div class="w-full flex justify-center">
                <span class="text-xl font-semibold">Beli dan Bayar</span>
            </div>
        </div>
        <div class="block p-8 space-y-4">
            <img src="image/depan/7.png" alt="" class="w-full h-56 rounded-full hover:animate-bounce w-auto h-auto ">
            <div class="w-full flex justify-center">
                <span class="text-xl font-semibold">Pengiriman</span>
            </div>
        </div>
    </div>
</div>
@endsection
