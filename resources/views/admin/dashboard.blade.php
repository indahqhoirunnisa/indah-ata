@extends('layouts.admin')

@section('content')
<div class="main-content flex flex-col flex-grow p-4">
    <h1 class="font-bold text-3xl text-gray-700">Dashboard Admin</h1>
    <p class="text-2xl font-thin text-gray-900">Selamat Datang di E-FaGro Intan Tani</p>
    <!--Container-->
 <div class="container w-full mx-auto pt-8">

    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

        <!--Console Content-->

        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-green-600"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-500">TOTAL PUPUK</h5>
                            @php
                                $pupuk = App\Models\Produk::where('kategori', 'pupuk')->count();
                            @endphp
                            <h3 class="font-bold text-3xl">{{ $pupuk }}
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-500">TOTAL BENIH</h5>
                            <h3 class="font-bold text-3xl">
                                @php
                                $benih = App\Models\Produk::where('kategori', 'benih')->count();
                                @endphp
                            {{ $benih }}
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-500">TOTAL PESTISIDA</h5>
                            <h3 class="font-bold text-3xl">
                                @php
                                $pestisida = App\Models\Produk::where('kategori', 'pestisida')->count();
                                @endphp
                                {{ $pestisida }}    
                            </h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-500">TOTAL FUNGISIDA</h5>
                            <h3 class="font-bold text-3xl">
                                @php
                                $fungisida = App\Models\Produk::where('kategori', 'fungisida')->count();
                                @endphp
                                {{ $fungisida }}    
                            </h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-500">TOTAL INSEKTISIDA</h5>
                            <h3 class="font-bold text-3xl">
                                @php
                                $insektisida = App\Models\Produk::where('kategori', 'insektisida')->count();
                                @endphp
                                {{ $insektisida }}    
                            </h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-red-600"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-500">TOTAL HERBISIDA</h5>
                            <h3 class="font-bold text-3xl">
                                @php
                                $herbisida = App\Models\Produk::where('kategori', 'herbisida')->count();
                                @endphp
                                {{ $herbisida }}    
                            </h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
        </div>
    </div>
</div>
@endsection