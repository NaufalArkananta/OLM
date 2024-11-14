{{-- Navbar After Login --}}

<nav class="fixed w-screen border bg-frost-white border-spacing-1 border-slate-300" x-data="{ isOpen: false }">
  <div class="max-w-full px-4 py-2 mx-auto sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <img class="w-16 h-16" src="{{ asset('/img/Logo.svg') }}" alt="Logo">
        <div class="hidden md:block">
          <div class="flex items-baseline ml-10 space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
            <x-nav-link href="/panduan" :active="request()->is('panduan')">Panduan</x-nav-link>
            <x-nav-link href="/properti" :active="request()->is('properti')">Properti</x-nav-link>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="flex items-center ml-4 gap-x-4 md:ml-6">
          <button type="button" class="flex items-center gap-2 px-3 py-2">
            <img src="{{ asset('img/notification.svg') }}" alt="notification">
            <p class="text-xl text-slate-950">Notifikasi</p>
          </button>
          <x-button size="md" color="secondary" class="flex items-center gap-2">
            <div class="p-1 bg-white border border-black rounded-full">
              <img class="overflow-hidden" width="25" height="25"
                src="https://res.cloudinary.com/mokletorg/image/upload/f_auto,q_auto/user" alt="profile picture">
            </div>
            <p class="text-xl text-slate-950">Brezizi</p>
            <img src="{{ asset('img/chevron-left.svg') }}" alt="chevron left">
          </x-button>
        </div>
      </div>
      <div class="flex md:hidden">
        <!-- Mobile menu button -->
        <button type="button" @click="isOpen = !isOpen"
          class="relative inline-flex items-center justify-center p-2 duration-300 bg-transparent rounded-md text-sky-600 hover:bg-sky-200 hover:text-sky-950 focus:outline-none focus:ring-2 focus:ring-sky-100 focus:ring-offset-2"
          aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!-- Menu open: "hidden", Menu closed: "block" -->
          <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!-- Menu open: "block", Menu closed: "hidden" -->
          <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
          x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-95"
          class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg top-20" id="mobile-menu">
          <div class="flex flex-col px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <div class="flex flex-col gap-2 p-4">
              <x-button size="md" color="secondary" class="flex items-center w-full gap-2">
                <div class="p-1 bg-white border border-black rounded-full ">
                  <img class="overflow-hidden" width="25" height="25"
                    src="https://res.cloudinary.com/mokletorg/image/upload/f_auto,q_auto/user" alt="profile picture">
                </div>
                <p class="text-xl text-slate-950">Brezizi</p>
                <div class="flex justify-end w-full">
                  <img src="{{ asset('img/chevron-left.svg') }}" alt="chevron left">
                </div>
              </x-button>
              <button type="button" class="flex items-center w-full gap-2 px-3 py-2">
                <img src="{{ asset('img/notification.svg') }}" alt="notification">
                <p class="text-xl text-slate-950">Notifikasi</p>
              </button>

            </div>
            <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
            <x-nav-link href="/panduan" :active="request()->is('panduan')">Panduan</x-nav-link>
            <x-nav-link href="/properti" :active="request()->is('properti')">Properti</x-nav-link>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
</nav>
