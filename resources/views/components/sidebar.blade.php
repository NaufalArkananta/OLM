<div class="relative">
  <button id="sidebarToggle"
    class="absolute z-30 flex items-center p-2 text-gray-500 rounded-lg top-4 left-4 lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
  </button>
  <aside
    class="fixed top-0 z-20 flex flex-col flex-shrink-0 h-full min-h-screen pb-4 transition-all duration-300 transform -translate-x-full lg:w-64 lg:translate-x-0 font-lato md:left-0 lg:opacity-100"
    id="sidebar" aria-label="Sidebar">

    <div class="relative flex flex-col flex-1 px-3 py-4 overflow-x-hidden overflow-y-scroll bg-frost-white">
      <div class="mx-auto w-fit">
        <img class="size-[78px]" src="{{ asset('img/Logo.svg') }}" alt="Logo">
      </div>
      <div class="flex flex-col flex-1">
        @if (Request::is('admin/owner/*'))
          <x-owner-sidebar-items></x-owner-sidebar-items>
        @elseif (Request::is('admin/validator/*'))
          <x-validator-sidebar-items></x-validator-sidebar-items>
        @elseif (Request::is('admin/agen/*'))
          <x-agen-sidebar-items />
        @endif
        <ul class="w-full space-y-2">
          <li>
            <a href="#"
              class="flex items-center px-2.5 py-3 w-full font-medium text-black duration-200 rounded-lg hover:text-white hover:bg-sky-400 group">
              <svg class="w-6 h-6 text-black transition duration-200 group-hover:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z" />
              </svg>
              <span class="ms-3">Notifikasi</span>
            </a>
          </li>
          <li>
            <a href="#"
              class="flex items-center px-2.5 py-3 w-full font-medium text-black duration-200 rounded-lg hover:text-white hover:bg-sky-400 group">
              <svg class="w-6 h-6 text-black transition duration-200 group-hover:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>

              <span class="ms-3">Butuh Bantuan?</span>
            </a>
          </li>
          <li>
            <a href="#"
              class="flex items-center px-2.5 py-3 w-full font-medium text-black duration-200 rounded-lg hover:text-white hover:bg-sky-400 group">
              <svg class="w-6 h-6 text-black transition duration-200 group-hover:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m17 16-4-4 4-4m-6 8-4-4 4-4" />
              </svg>
              <span class="ms-3">Kembali Ke Beranda</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </aside>
</div>
