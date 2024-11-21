{{-- Navbar After Login --}}

<nav class="fixed z-50 w-screen border bg-frost-white border-spacing-1 border-slate-300">
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
          <div x-data="{ isOpen: false }">
            <button @click="isOpen = !isOpen" size="md" color="secondary"
              class="flex items-center min-w-56 justify-center rounded-[8px] gap-2 px-10 py-2 text-base font-medium duration-300 border bg-customBlue-100 hover:bg-customBlue-200 text-sky-400 border-sky-400 focus:ring focus:ring-sky-200">
              <div class="p-1 bg-white border rounded-full border-slate-300">
                <img class="overflow-hidden" width="25" height="25"
                  src="https://res.cloudinary.com/mokletorg/image/upload/f_auto,q_auto/user" alt="profile picture">
              </div>
              <p class="text-xl text-slate-950">Brezizi</p>
              <img src="{{ asset('img/chevron-left.svg') }}" alt="chevron left">
            </button>
            <div x-show="isOpen" x-transition:enter="transition ease-out duration-200 transform"
              x-transition:enter-start="ease-in -translate-y-24 opacity-0" x-transition:enter-end=" translate-y-0"
              x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="translate-y-0"
              x-transition:leave-end="-translate-y-24 opacity-0" class="relative">
              <div
                class="absolute bg-white mt-2 space-y-4 rounded-[8px] pt-0 p-3 w-full border border-slate-300 shadow shadow-Shadow/Shadow 3">
                <x-button size="md" color="white" class="flex items-center w-full gap-2 mt-2"
                  onclick="window.location.href = '/profile'">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10ZM8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12Z"
                      fill="#121212" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M8.72946 4.54104C8.72946 3.13766 9.86712 2 11.2705 2H12.7292C14.1325 2 15.2702 3.13766 15.2702 4.54104C15.2702 4.74442 15.4105 5.01577 15.7457 5.19782C15.8488 5.25384 15.9505 5.31209 16.0508 5.37252C16.3851 5.57406 16.6989 5.56113 16.8832 5.45569C18.107 4.75547 19.6665 5.17332 20.3763 6.39162L21.0807 7.60076C21.7918 8.8214 21.3721 10.3877 20.146 11.0892C19.9682 11.1909 19.801 11.4496 19.8092 11.8346C19.8104 11.8896 19.8109 11.9448 19.8109 12C19.8109 12.0552 19.8104 12.1104 19.8092 12.1654C19.801 12.5504 19.9682 12.8091 20.146 12.9108C21.3721 13.6123 21.7917 15.1786 21.0806 16.3992L20.3762 17.6084C19.6665 18.8267 18.107 19.2445 16.8832 18.5443C16.6989 18.4389 16.3851 18.4259 16.0508 18.6275C15.9505 18.6879 15.8488 18.7462 15.7457 18.8022C15.4105 18.9842 15.2702 19.2556 15.2702 19.459C15.2702 20.8623 14.1325 22 12.7292 22H11.2705C9.86712 22 8.72946 20.8623 8.72946 19.459C8.72946 19.2556 8.5892 18.9842 8.254 18.8022C8.15085 18.7462 8.04912 18.6879 7.94888 18.6275C7.61457 18.4259 7.30074 18.4389 7.11648 18.5443C5.89269 19.2445 4.3332 18.8267 3.62346 17.6084L2.91902 16.3992C2.20791 15.1786 2.62757 13.6123 3.8537 12.9108C4.03147 12.8091 4.19861 12.5504 4.19047 12.1654C4.1893 12.1104 4.18872 12.0553 4.18872 12C4.18872 11.9448 4.1893 11.8896 4.19046 11.8346C4.19861 11.4497 4.03146 11.191 3.85369 11.0892C2.62753 10.3877 2.20787 8.82141 2.91899 7.60077L3.62341 6.39163C4.33316 5.17333 5.89265 4.75548 7.11645 5.4557C7.30072 5.56113 7.61455 5.57407 7.94887 5.37253C8.04911 5.3121 8.15085 5.25384 8.254 5.19782C8.5892 5.01577 8.72946 4.74442 8.72946 4.54104ZM11.2705 4C10.9717 4 10.7295 4.24223 10.7295 4.54104C10.7295 5.64708 10.024 6.51246 9.20851 6.95535C9.13175 6.99703 9.05604 7.04039 8.98143 7.08537C8.18596 7.5649 7.08395 7.74134 6.1232 7.19163C5.85285 7.03694 5.50833 7.12925 5.35153 7.39839L4.64711 8.60754C4.49509 8.86848 4.58481 9.20332 4.84693 9.3533C5.80924 9.90391 6.20965 10.9487 6.19002 11.8769C6.18915 11.9178 6.18872 11.9589 6.18872 12C6.18872 12.0412 6.18915 12.0822 6.19002 12.1231C6.20966 13.0513 5.80925 14.0961 4.84695 14.6467C4.58484 14.7967 4.49513 15.1315 4.64714 15.3924L5.35158 16.6016C5.50837 16.8708 5.85288 16.9631 6.12323 16.8084C7.08397 16.2587 8.18597 16.4351 8.98143 16.9146C9.05605 16.9596 9.13176 17.003 9.20851 17.0447C10.024 17.4875 10.7295 18.3529 10.7295 19.459C10.7295 19.7578 10.9717 20 11.2705 20H12.7292C13.028 20 13.2702 19.7578 13.2702 19.459C13.2702 18.3529 13.9757 17.4875 14.7911 17.0447C14.8679 17.003 14.9436 16.9596 15.0182 16.9146C15.8137 16.4351 16.9157 16.2587 17.8764 16.8084C18.1468 16.9631 18.4913 16.8708 18.6481 16.6016L19.3525 15.3924C19.5045 15.1315 19.4148 14.7967 19.1527 14.6467C18.1904 14.0961 17.79 13.0513 17.8096 12.1231C17.8105 12.0822 17.8109 12.0412 17.8109 12C17.8109 11.9589 17.8105 11.9178 17.8096 11.8769C17.79 10.9487 18.1904 9.9039 19.1527 9.35329C19.4149 9.20331 19.5046 8.86848 19.3525 8.60753L18.6481 7.39839C18.4913 7.12924 18.1468 7.03693 17.8764 7.19162C16.9157 7.74134 15.8137 7.5649 15.0182 7.08536C14.9436 7.04039 14.8679 6.99703 14.7911 6.95535C13.9757 6.51246 13.2702 5.64708 13.2702 4.54104C13.2702 4.24223 13.028 4 12.7292 4H11.2705Z"
                      fill="#121212" />
                  </svg>
                  <p class="text-[14px] text-slate-950">Pengaturan Akun</p>
                </x-button>
                <x-button size="md" color="white" class="flex items-center w-full gap-2 mt-2">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M4 6C4 3.79086 5.79086 2 8 2H16C18.2091 2 20 3.79086 20 6V20.0568C20 21.6836 18.1613 22.6298 16.8375 21.6843L12 18.2289L7.16248 21.6843C5.83874 22.6298 4 21.6836 4 20.0568V6ZM8 4C6.89543 4 6 4.89543 6 6V20.0568L10.8375 16.6014C11.5329 16.1047 12.4671 16.1047 13.1625 16.6014L18 20.0568V6C18 4.89543 17.1046 4 16 4H8Z"
                      fill="#121212" />
                  </svg>
                  <p class="text-lg text-slate-950">Wishlist</p>
                </x-button>
                <div class="w-full h-[1px] bg-slate-300"></div>
                <x-button size="md" color="white" class="flex items-center w-full gap-2 mt-2">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2 7C2 4.23858 4.23858 2 7 2H17C19.7614 2 22 4.23858 22 7V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V7ZM7 4C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V7C20 5.34315 18.6569 4 17 4H7Z"
                      fill="#121212" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M7 12C7 12.5523 7.44772 13 8 13L16 13C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11L8 11C7.44772 11 7 11.4477 7 12Z"
                      fill="#121212" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M12.7071 7.29289C13.0976 7.68342 13.0976 8.31658 12.7071 8.70711L9.41421 12L12.7071 15.2929C13.0976 15.6834 13.0976 16.3166 12.7071 16.7071C12.3166 17.0976 11.6834 17.0976 11.2929 16.7071L7.29289 12.7071C6.90237 12.3166 6.90237 11.6834 7.29289 11.2929L11.2929 7.29289C11.6834 6.90237 12.3166 6.90237 12.7071 7.29289Z"
                      fill="#121212" />
                  </svg>
                  <p class="text-lg text-slate-950">Keluar</p>
                </x-button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex md:hidden" x-data="{ isOpen: false }">
        <!-- Mobile menu button -->
        <button @click="isOpen = !isOpen"
          class="relative inline-flex items-center justify-center p-2 duration-300 bg-transparent rounded-md text-sky-600 hover:bg-sky-200 hover:text-sky-950 focus:outline-none focus:ring-2 focus:ring-sky-100 focus:ring-offset-2"
          aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!-- Menu open: "hidden", Menu closed: "block" -->
          <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!-- Menu open: "block", Menu closed: "hidden" -->
          <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden w-6 h-6" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
          x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-75 transform"
          x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
          class="absolute right-0 w-full mt-2 origin-top-right bg-white rounded-md shadow-lg top-20" id="mobile-menu">
          <div class="flex flex-col px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <div class="flex flex-col gap-2 p-4" x-data="{ isOn: false }">
              <button @click="isOn = !isOn"
                class="flex items-center w-full gap-2 font-medium duration-300 border bg-customBlue-50 hover:bg-customBlue-100 text-sky-400 border-sky-400 focus:ring focus:ring-sky-200 px-4 py-2 text-[10px] lg:text-base rounded-lg">
                <div class="p-1 bg-white border border-black rounded-full ">
                  <img class="overflow-hidden" width="25" height="25"
                    src="https://res.cloudinary.com/mokletorg/image/upload/f_auto,q_auto/user" alt="profile picture">
                </div>
                <p class="text-xl text-slate-950">Brezizi</p>
                <div class="flex justify-end w-full">
                  <img src="{{ asset('img/chevron-left.svg') }}" alt="chevron left">
                </div>
              </button>
              <div x-show="isOn" x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="ease-in -translate-y-24 opacity-0" x-transition:enter-end=" translate-y-0"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-24 opacity-0"
                class="relative">
                <div
                  class="absolute bg-white mt-2 space-y-4 rounded-[8px] pt-0 p-3 w-full border border-slate-300 shadow shadow-Shadow/Shadow 3">
                  <x-button size="md" color="white" class="flex items-center w-full gap-2 mt-2"
                    onclick="window.location.href = '/profile'">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10ZM8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12Z"
                        fill="#121212" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.72946 4.54104C8.72946 3.13766 9.86712 2 11.2705 2H12.7292C14.1325 2 15.2702 3.13766 15.2702 4.54104C15.2702 4.74442 15.4105 5.01577 15.7457 5.19782C15.8488 5.25384 15.9505 5.31209 16.0508 5.37252C16.3851 5.57406 16.6989 5.56113 16.8832 5.45569C18.107 4.75547 19.6665 5.17332 20.3763 6.39162L21.0807 7.60076C21.7918 8.8214 21.3721 10.3877 20.146 11.0892C19.9682 11.1909 19.801 11.4496 19.8092 11.8346C19.8104 11.8896 19.8109 11.9448 19.8109 12C19.8109 12.0552 19.8104 12.1104 19.8092 12.1654C19.801 12.5504 19.9682 12.8091 20.146 12.9108C21.3721 13.6123 21.7917 15.1786 21.0806 16.3992L20.3762 17.6084C19.6665 18.8267 18.107 19.2445 16.8832 18.5443C16.6989 18.4389 16.3851 18.4259 16.0508 18.6275C15.9505 18.6879 15.8488 18.7462 15.7457 18.8022C15.4105 18.9842 15.2702 19.2556 15.2702 19.459C15.2702 20.8623 14.1325 22 12.7292 22H11.2705C9.86712 22 8.72946 20.8623 8.72946 19.459C8.72946 19.2556 8.5892 18.9842 8.254 18.8022C8.15085 18.7462 8.04912 18.6879 7.94888 18.6275C7.61457 18.4259 7.30074 18.4389 7.11648 18.5443C5.89269 19.2445 4.3332 18.8267 3.62346 17.6084L2.91902 16.3992C2.20791 15.1786 2.62757 13.6123 3.8537 12.9108C4.03147 12.8091 4.19861 12.5504 4.19047 12.1654C4.1893 12.1104 4.18872 12.0553 4.18872 12C4.18872 11.9448 4.1893 11.8896 4.19046 11.8346C4.19861 11.4497 4.03146 11.191 3.85369 11.0892C2.62753 10.3877 2.20787 8.82141 2.91899 7.60077L3.62341 6.39163C4.33316 5.17333 5.89265 4.75548 7.11645 5.4557C7.30072 5.56113 7.61455 5.57407 7.94887 5.37253C8.04911 5.3121 8.15085 5.25384 8.254 5.19782C8.5892 5.01577 8.72946 4.74442 8.72946 4.54104ZM11.2705 4C10.9717 4 10.7295 4.24223 10.7295 4.54104C10.7295 5.64708 10.024 6.51246 9.20851 6.95535C9.13175 6.99703 9.05604 7.04039 8.98143 7.08537C8.18596 7.5649 7.08395 7.74134 6.1232 7.19163C5.85285 7.03694 5.50833 7.12925 5.35153 7.39839L4.64711 8.60754C4.49509 8.86848 4.58481 9.20332 4.84693 9.3533C5.80924 9.90391 6.20965 10.9487 6.19002 11.8769C6.18915 11.9178 6.18872 11.9589 6.18872 12C6.18872 12.0412 6.18915 12.0822 6.19002 12.1231C6.20966 13.0513 5.80925 14.0961 4.84695 14.6467C4.58484 14.7967 4.49513 15.1315 4.64714 15.3924L5.35158 16.6016C5.50837 16.8708 5.85288 16.9631 6.12323 16.8084C7.08397 16.2587 8.18597 16.4351 8.98143 16.9146C9.05605 16.9596 9.13176 17.003 9.20851 17.0447C10.024 17.4875 10.7295 18.3529 10.7295 19.459C10.7295 19.7578 10.9717 20 11.2705 20H12.7292C13.028 20 13.2702 19.7578 13.2702 19.459C13.2702 18.3529 13.9757 17.4875 14.7911 17.0447C14.8679 17.003 14.9436 16.9596 15.0182 16.9146C15.8137 16.4351 16.9157 16.2587 17.8764 16.8084C18.1468 16.9631 18.4913 16.8708 18.6481 16.6016L19.3525 15.3924C19.5045 15.1315 19.4148 14.7967 19.1527 14.6467C18.1904 14.0961 17.79 13.0513 17.8096 12.1231C17.8105 12.0822 17.8109 12.0412 17.8109 12C17.8109 11.9589 17.8105 11.9178 17.8096 11.8769C17.79 10.9487 18.1904 9.9039 19.1527 9.35329C19.4149 9.20331 19.5046 8.86848 19.3525 8.60753L18.6481 7.39839C18.4913 7.12924 18.1468 7.03693 17.8764 7.19162C16.9157 7.74134 15.8137 7.5649 15.0182 7.08536C14.9436 7.04039 14.8679 6.99703 14.7911 6.95535C13.9757 6.51246 13.2702 5.64708 13.2702 4.54104C13.2702 4.24223 13.028 4 12.7292 4H11.2705Z"
                        fill="#121212" />
                    </svg>

                    <p class="text-lg text-slate-950">Pengaturan Akun</p>
                  </x-button>
                  <x-button size="md" color="white" class="flex items-center w-full gap-2 mt-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4 6C4 3.79086 5.79086 2 8 2H16C18.2091 2 20 3.79086 20 6V20.0568C20 21.6836 18.1613 22.6298 16.8375 21.6843L12 18.2289L7.16248 21.6843C5.83874 22.6298 4 21.6836 4 20.0568V6ZM8 4C6.89543 4 6 4.89543 6 6V20.0568L10.8375 16.6014C11.5329 16.1047 12.4671 16.1047 13.1625 16.6014L18 20.0568V6C18 4.89543 17.1046 4 16 4H8Z"
                        fill="#121212" />
                    </svg>
                    <p class="text-lg text-slate-950">Wishlist</p>
                  </x-button>
                  <div class="w-full h-[1px] bg-slate-300"></div>
                  <x-button size="md" color="white" class="flex items-center w-full gap-2 mt-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2 7C2 4.23858 4.23858 2 7 2H17C19.7614 2 22 4.23858 22 7V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V7ZM7 4C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V7C20 5.34315 18.6569 4 17 4H7Z"
                        fill="#121212" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7 12C7 12.5523 7.44772 13 8 13L16 13C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11L8 11C7.44772 11 7 11.4477 7 12Z"
                        fill="#121212" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.7071 7.29289C13.0976 7.68342 13.0976 8.31658 12.7071 8.70711L9.41421 12L12.7071 15.2929C13.0976 15.6834 13.0976 16.3166 12.7071 16.7071C12.3166 17.0976 11.6834 17.0976 11.2929 16.7071L7.29289 12.7071C6.90237 12.3166 6.90237 11.6834 7.29289 11.2929L11.2929 7.29289C11.6834 6.90237 12.3166 6.90237 12.7071 7.29289Z"
                        fill="#121212" />
                    </svg>
                    <p class="text-lg text-slate-950">Keluar</p>
                  </x-button>
                </div>
              </div>
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
