<nav class="bg-[#354259]">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-8 py-2.5">
        <a href="{{ route('home') }}" class="flex items-center">
            <span class="self-center text-3xl font-semibold whitespace-nowrap text-[#FCF8E8]">E-FaGro Intan Tani</span>
        </a>
        
        @guest

        <div class="flex items-left">
          <a href="{{ route('login') }}"  class="cursor-pointer text-white font-semibold text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</a>
          <a href="{{ route('register') }}" class="cursor-pointer text-[#AA8B56] bg-[#DAE5D0]  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Register</a>
        </div>

        @endguest
        @auth
        
        <div class="flex items-center md:order-2">
            <button type="button" class="flex mr-3 text-sm  md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
              <span class="block text-sm text-white"> {{ Auth::user()->name }} </span>
            </button>
            <!-- Dropdown menu -->
           
              <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="user-dropdown">
                <div class="py-3 px-4">
                 <a href="{{ route('profil') }}" class="text-gray-700">Profile</a>
                </div>
                <div class="py-3 px-4">
                  <a href="{{ route('riwayat') }}" class="text-gray-700">Riwayat Pesanan</a>
                 </div>
              <ul class="py-1" aria-labelledby="user-menu-button">
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                      @csrf
                  </form>
                </li>
              </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
        @endauth
    </div>
</nav>
<nav class="bg-white">
    <div class="py-3 px-4mx-auto max-w-screen-xl md:px-6">
        <div class="flex items-center justify-between">
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                <li>
                    <a href="{{ route('home') }}" class="text-[#354259] hover:underline bg-[#C2DED1] font-medium rounded-full text-sm px-3 py-1 text-center" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('produk') }}" class="text-[#354259] hover:underline bg-[#C2DED1] font-medium rounded-full text-sm px-3 py-1 text-center">Produk</a>
                </li>
                <li>
                    <a href="{{ route('riwayat') }}" class="text-[#354259] hover:underline bg-[#C2DED1] font-medium rounded-full text-sm px-3 py-1 text-center">Pesanan</a>
                </li>
                <li>
                    <a href="{{ route('tentang') }}" class="text-[#354259] hover:underline bg-[#C2DED1] font-medium rounded-full text-sm px-3 py-1 text-center">Tentang</a>
                </li>
            </ul>      
            <ul class="flex flex-row mt-0 mr-2 space-x-4 text-sm font-medium">
                <a href="{{ route('cart') }}" class="text-[#354259] font-medium text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Keranjang<svg class="ml-2 w-8 h-8" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/></svg></a>
            </ul>
        </div>
    </div>
</nav>