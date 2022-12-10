{{-- sidebar --}}
<div class="bg-gray-50 z-50 fixed">
    <div class="overflow-y-auto overflow-x-hidden h-screen z-20 scrolling-touch fixed top-0 md:left-0 -left-64 flex flex-row bg-gray-100 text-gray-800 bg-[#2C3639]">
        <aside class="sidebar h-screen w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-[#D3E4CD]">
            <div class="flex flex-col items-center mt-6 -mx-2">
                <img class="object-cover w-24 h-24 mx-2 rounded-full" src="{{ asset('image/obj.png') }}" alt="">
                <h4 class="mx-2 mt-2 font-medium text-[#205375] hover:underline">{{ Auth::user()->name }}</h4>
                <p class="mx-2 mt-1 text-sm font-medium text-gray-500 hover:underline">{{ Auth::user()->email }}</p>
            </div>
            <div class="sidebar-content px-4 py-6">
                <ul class="flex flex-col w-full h-screen">
                    <li class="my-px">
                        <a href="{{ route('admin.dashboard') }}" class="flex flex-row items-center h-10 px-3 text-gray-700 hover:bg-gray-100">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="{{ route('admin.produk') }}" class="flex flex-row items-center h-10 px-3 text-gray-700 hover:bg-gray-100 {{ Request::is('admin/produk') ? 'bg-gray-100' : '' }}">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75  group-hover:text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            <span class="ml-3">Produk</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="{{ route('admin.supplier') }}" class="flex flex-row items-center h-10 px-3 text-gray-700 hover:bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                  </svg>
                            </span>
                            <span class="ml-3">Supplier</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="{{ route('admin.pelanggan') }}" class="flex flex-row items-center h-10 px-3 text-gray-700 hover:bg-gray-100 {{ Request::is('admin/pelanggan') ? 'bg-gray-100' : '' }}">
                            <span class="flex items-center justify-center text-lg text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                            </span>
                            <span class="ml-3">Pelanggan</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <span class="flex font-medium text-sm text-gray-900 px-4 my-4 uppercase ">Pemesanan</span>
                    </li>
                    <li class="my-px">
                        <a href="{{ route('admin.pesanan') }}" class="flex flex-row items-center h-10 px-3 text-gray-700 hover:bg-gray-100"><span class="flex items-center justify-center text-lg text-gray-500"><svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6"> <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/></svg></span>
                        <span class="ml-3">Pesanan</span>
                        @php
                            $pesanan = App\Models\Pembayaran::where('status_pembayaran', 'settlement')
                                        ->with('pesanan')
                                        ->whereHas('pesanan', function($q) {
                                            $q->where('status', 'pending');
                                        })
                                        ->count();
                        @endphp     
                        @if ($pesanan > 0)
                        <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">{{ $pesanan }}</span>
                        @endif
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="{{ route('admin.retur') }}" class="flex flex-row items-center h-10 px-3 text-gray-700 hover:bg-gray-100"><span class="flex items-center justify-center text-lg text-gray-500"><svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6"><path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/></svg></span>
                        <span class="ml-3">Retur Pengembalian</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <span class="flex font-medium text-sm text-gray-900 px-4 my-4 uppercase">Laporan</span>
                    </li>
                    <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 {{ Request::is('admin/laporan') ? 'bg-gray-100' : '' }}" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                            <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/></svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Laporan</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('admin.laporan.produk') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 transition duration-75 group hover:bg-gray-100">Produk</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.laporan.transaksi') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 transition duration-75 group hover:bg-gray-100">Transaksi</a>
                        </li>
                       
                        <li>
                            <a href="{{ route('admin.laporan.retur') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 transition duration-75 group hover:bg-gray-100">Retur</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </aside>
    </div>

    <div class="fixed w-full">
        <nav class="bg-[#D3E4CD] md:ml-64 py-4 px-3">
            <div class="container max-w-full mx-auto flex items-center justify-between md:pr-8 md:pl-10">
                <div class="flex justify-between items-center w-full">
                    <button class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>                          
                    </button>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="block py-2 px-4 text-sm text-black font-medium hover:text-white rounded-full hover:bg-[#99A799]">Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>