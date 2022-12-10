@extends('layouts.app')

@section('content')
    <div class="bg-[#EDEDED] py-8">
        <div class="mx-12 my-4">
            <div class="w-full p-6 shadow-md bg-white">
                <figure class="max-w-lg m-auto">
                    <img class="max-w-full h-auto rounded-full" src="{{ asset('image/objek.png') }}" alt="">
                    <figcaption class="mt-2 text-lg text-center font-bold tracking-widest text-[#587a41] ">Tentang Kami</figcaption>
                    <p class="mb-4 mt-3 font-light text-gray-500  first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-[#587a41] first-letter:mr-3 first-letter:float-left">E-FaGro Intan Tani (E-Farm Grocery Intan Tani) adalah situs belanja online jual kebutuhan sehari-hari pertanian dengan harga terjangkau, lengkap, dan produk berkualitas.
                        E-FaGro Intan Tani terletak di Kota Wonogiri tepatnya di Desa Tegalharjo, Kecamatan Eromoko yang mayoritas penduduknya adalah Petani.<br>Produk Intan Tani meliputi obat pertanian dan benih.</p>
                    <div class="flex items-center divide-x-2 divide-gray-500 m-auto">
                        <cite class="pr-3 font-medium text-gray-900 dark:text-white">Novi</cite>
                        <cite class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Admin E-FaGro Intan Tani</cite>
                    </div>
                </figure>
            </div>
        </div>
        <div class="mx-12 my-4">
            <div class="w-full p-6 shadow-md bg-white">
                <div class="col-span-2">
                    <ol class="relative border-l border-gray-200 dark:border-gray-700">                  
                        <li class="mb-10 ml-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Temukan Toko Offline Kami</time>
                            <h3 class="text-lg font-semibold text-gray-900">Toko Intan Tani</h3>
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Gabelan Kidul Rt02/05, Tegalharjo, Eromoko, Wonogiri, Jawa Tengah</p>
                        </li>
    
                        <div class="ml-12 mr-12 ">
                            <div class="p-4 w-full shadow-md bg-white">
                                <div class="flex justify-center space-x-8">
                                    <div class="block p-8 space-y-4">
                                        <img class="w-42 h-42 rounded-full border-solid border-8 border-[#587a41] " src="{{ asset('image/toko.jpeg') }}" alt="image description">
                                        <div class="w-full flex justify-center">
                                        </div>
                                    </div>
                                    <div class="block p-8 space-y-4">
                                        <img class="w-42 h-42 rounded-full border-solid border-8 border-[#587a41]" src="{{ asset('image/toko.jpeg') }}" alt="image description">
                                        <div class="w-full flex justify-center">
                                        </div>
                                    </div>
                                    <div class="block p-8 space-y-4">
                                        <img class="w-42 h-42 rounded-full border-solid border-8 border-[#587a41]" src="{{ asset('image/toko.jpeg') }}" alt="image description">
                                        <div class="w-full flex justify-center">
                                        </div>
                                    </div>
                                </div>
                                    {{-- maps --}}
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.20020707292!2d110.8769632142122!3d-7.978247781751134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bcd9f7fe0c205%3A0xd914464e83204909!2sIntan%20Tani!5e0!3m2!1sen!2sid!4v1664941656629!5m2!1sen!2sid" class="w-full h-80" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
