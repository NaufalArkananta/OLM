<x-layout-container>
  <section class="px-6 pt-20 pb-6 mx-auto mb-10 max-w-screen-2xl lg:px-8">
    <div class="grid w-full grid-cols-1 gap-8 my-6 md:grid-cols-2">
      <div>
        <div x-data="{ isOn: false }"
          class="p-4 bg-frost-white rounded-[10px] border border-slate-300 relative w-full shadow-Shadow/Shadow 3">
          <img src="{{ asset('img/villa-dummy.jpg') }}"
            class="object-cover w-full h-[210px] rounded-[8px] border border-slate-300" alt="{{ $property['name'] }}">
          <div class="rounded-[8px] bg-customBlue-250 px-3 py-2 my-3 w-fit">
            <p class="text-xl font-medium text-sky-400">{{ $property['type'] }}</p>
          </div>
          <div class="text-start">
            <h5 class="my-2 text-5xl font-semibold text-sky-600">{{ $property['price'] }}</h5>
            <p class="text-3xl font-normal text-slate-400">{{ $property['name'] }}</p>
            <p class="text-xl font-normal text-slate-400">{{ $property['location'] }}</p>
          </div>
          <button @click="isOn = !isOn" class="absolute p-2 rounded-md top-6 right-6 backdrop-blur-sm bg-white/30">
            <svg x-show="!isOn" width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4 6C4 3.79086 5.79086 2 8 2H16C18.2091 2 20 3.79086 20 6V20.0568C20 21.6836 18.1613 22.6298 16.8375 21.6843L12 18.2289L7.16248 21.6843C5.83874 22.6298 4 21.6836 4 20.0568V6ZM8 4C6.89543 4 6 4.89543 6 6V20.0568L10.8375 16.6014C11.5329 16.1047 12.4671 16.1047 13.1625 16.6014L18 20.0568V6C18 4.89543 17.1046 4 16 4H8Z"
                fill="#121212" />
            </svg>
            <svg x-show="isOn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1" width="24" height="24" viewBox="0 0 1080 1080" xml:space="preserve">
              <desc>Created with Fabric.js 5.2.4</desc>
              <defs>
              </defs>
              <rect x="0" y="0" width="100%" height="100%" fill="transparent"></rect>
              <g transform="matrix(1 0 0 1 540 540)" id="528c9fbf-f05c-4255-a13c-76f0d9fb7386">
                <rect
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;"
                  vector-effect="non-scaling-stroke" x="-540" y="-540" rx="0" ry="0" width="1080"
                  height="1080" />
              </g>
              <g transform="matrix(1 0 0 1 540 540)" id="7acf1abe-92a0-408c-9c3a-9aa479d38607">
              </g>
              <g transform="matrix(45 0 0 45 540 540)">
                <path
                  style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(12,74,110); fill-rule: evenodd; opacity: 1;"
                  transform=" translate(-12, -12.03)"
                  d="M 4 6 C 4 3.79086 5.79086 2 8 2 L 16 2 C 18.2091 2 20 3.79086 20 6 L 20 20.0568 C 20 21.6836 18.1613 22.6298 16.8375 21.6843 L 12 18.2289 L 7.16248 21.6843 C 5.83874 22.6298 4 21.6836 4 20.0568 L 4 6 Z M 8 4 C 6.89543 4 6 4.89543 6 6 L 6 20.0568 L 10.8375 16.6014 C 11.5329 16.1047 12.4671 16.1047 13.1625 16.6014 L 18 20.0568 L 18 6 C 18 4.89543 17.1046 4 16 4 L 8 4 Z"
                  stroke-linecap="round" />
              </g>
              <g transform="matrix(0 0 0 0 0 0)">
                <g style="">
                </g>
              </g>
              <g transform="matrix(8.79 0 0 9.18 542.32 469.55)" id="ec544009-daba-40e8-b526-94c20ef1c372">
                <rect
                  style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(12,74,110); fill-rule: nonzero; opacity: 1;"
                  vector-effect="non-scaling-stroke" x="-33.085" y="-33.085" rx="0" ry="0"
                  width="66.17" height="66.17" />
              </g>
              <g transform="matrix(0 0 0 0 0 0)">
                <g style="">
                </g>
              </g>
              <g transform="matrix(-3.63 -0.45 0.41 -3.31 719.93 788.7)" id="dac27e73-bde9-47dc-8e85-609f39240241">
                <polygon
                  style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(12,74,110); fill-rule: nonzero; opacity: 1;"
                  vector-effect="non-scaling-stroke" points="-30.68,-37.41 30.68,0 -30.68,37.41 " />
              </g>
              <g transform="matrix(NaN NaN NaN NaN 0 0)">
                <g style="">
                </g>
              </g>
              <g transform="matrix(NaN NaN NaN NaN 0 0)">
                <g style="">
                </g>
              </g>
              <g transform="matrix(3.88 0 0 3.55 372.43 782.94)">
                <polygon
                  style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(12,74,110); fill-rule: nonzero; opacity: 1;"
                  vector-effect="non-scaling-stroke" points="-30.68,-37.41 30.68,0 -30.68,37.41 " />
              </g>
            </svg>
          </button>
          <div class="my-4 bg-slate-300 w-full h-0.5"></div>
          <div class="flex items-center w-full gap-4">
            <div class="w-[48px] h-[48px] overflow-hidden border rounded-full border-slate-300">
              <img src="{{ asset('img/sales_img_dummy.jpg') }}" class="object-cover w-full h-full"
                alt="{{ $property['sales_name'] }}">
            </div>
            <div>
              <h6 class="text-3xl font-normal text-slate-950">{{ $property['sales_name'] }}</h6>
              <p class="text-lg font-normal text-slate-400">Public Sales</p>
            </div>
          </div>
          <button
            class="flex items-center justify-center w-full gap-3 p-4 mt-6 text-white duration-300 bg-green-500 rounded-lg hover:bg-green-600 focus:ring-2 focus:ring-green-100">
            <img src="{{ asset('img/WhatsApp.svg') }}" alt="whatsapp logo" class="size-[28px]">
            <p class="text-xl font-medium"><a href="https://wa.me/"></a>{{ $property['sales_phone'] }}</p>
          </button>
        </div>
      </div>
      <div>
        <div id="container-1" class="mb-10">
          <div class="flex items-center justify-start mb-4 gap-x-6">
            <p class="text-4xl font-semibold text-slate-950">Deskripsi</p>
            <div class="w-full bg-slate-300 h-0.5"></div>
          </div>
          <p class="text-2xl font-normal text-slate-600">Spesifikasi: Luas Tanah 902 m² Luas Bangunan 360 m² Bangunan 2
            Lantai Hadap Timur Kamar Tidur 5+4 Kamar Mandi 5+2 Halaman Belakang Luas Listrik 7700 Watt</p>
          <p class="mt-3 text-2xl font-bold duration-300 text-sky-400 hover:underline"><a href="#">Lihat
              Selengkapnya...</a>
          </p>
        </div>
        <div id="container-2" class="mb-10">
          <div class="flex items-center justify-start mb-4 gap-x-6">
            <p class="text-4xl font-semibold text-slate-950">Detail<span class="text-white">i</span>Properti</p>
            <div class="w-full bg-slate-300 h-0.5"></div>
          </div>
          <div class="grid max-w-xl grid-cols-1 space-y-3">
            <div class="flex items-center justify-start">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600">Luas Tanah</p>
              <p class="w-full text-2xl font-normal text-slate-600">902 m²</p>
            </div>
            <div class="flex items-center justify-start">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600">Luas Bangunan</p>
              <p class="w-full text-2xl font-normal text-slate-600">350 m²</p>
            </div>
            <div class="flex items-center justify-start">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600">Sertifikat</p>
              <p class="w-full text-2xl font-normal text-slate-600">SHM</p>
            </div>
            <div class="flex items-center justify-start">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600">Daya Listrik</p>
              <p class="w-full text-2xl font-normal text-slate-600">7700 Watt</p>
            </div>
            <div class="flex items-center justify-start">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600">Kamar Tidur</p>
              <p class="w-full text-2xl font-normal text-slate-600">9</p>
            </div>
            <div class="flex items-center justify-start">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600">Kamar Mandi</p>
              <p class="w-full text-2xl font-normal text-slate-600">7</p>
            </div>
          </div>
          <p class="mt-3 text-2xl font-bold duration-300 text-sky-400 hover:underline"><a href="#">Lihat
              Selengkapnya...</a>
          </p>
        </div>
        <div id="container-3" class="mb-10">
          <div class="flex items-center justify-start mb-4 gap-x-14">
            <p class="text-4xl font-semibold text-slate-950">Fasilitas</p>
            <div class="w-full bg-slate-300 h-0.5"></div>
          </div>
          <div class="grid max-w-full grid-cols-1 space-y-3">
            <div class="flex items-center justify-start max-w-3xl">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600">Interior</p>
              <p class="w-full text-2xl font-normal text-slate-600">902 m²</p>
              <p class="w-full text-2xl font-normal text-slate-600">902 m²</p>
            </div>
            <div class="flex items-center justify-start max-w-3xl">
              <p class="w-full text-2xl font-bold text-slate-600"></p>
              <p class="w-full mt-3 text-xl font-bold duration-300 lg:text-2xl text-sky-400 hover:underline"><a
                  href="#">Lihat
                  Selengkapnya...</a>
              </p>
              <p class="w-full text-2xl font-normal text-slate-600"></p>
            </div>
            <div class="flex items-center justify-start max-w-3xl">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600">Exterior</p>
              <p class="w-full text-2xl font-normal text-slate-600">Keamanan
                24 Jam</p>
              <p class="w-full text-2xl font-normal text-slate-600">Akses Jalan Tol</p>
            </div>
            <div class="flex items-center justify-start max-w-3xl">
              <p class="w-full max-w-sm text-2xl font-bold text-slate-600"></p>
              <p class="w-full text-2xl font-normal text-slate-600">Dekat Tempat Ibadah</p>
              <p class="w-full text-2xl font-normal text-slate-600">Masuk Mobil</p>
            </div>
            <div class="flex items-center justify-start max-w-3xl">
              <p class="w-full text-2xl font-bold text-slate-600"></p>
              <p class="w-full mt-3 text-xl font-bold duration-300 lg:text-2xl text-sky-400 hover:underline"><a
                  href="#">Lihat
                  Selengkapnya...</a>
              </p>
              <p class="w-full text-2xl font-normal text-slate-600"></p>
            </div>
          </div>
        </div>
        <div id="container-4" class="mb-10">
          <div class="flex items-center justify-start mb-4 gap-x-6">
            <p class="text-4xl font-semibold text-slate-950">Lokasi<span class="text-white">i</span>Properti</p>
            <div class="w-full bg-slate-300 h-0.5"></div>
          </div>
          <div>
            <iframe class="w-full h-80"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31560.704426062495!2d112.63560623955077!3d-7.983166460253683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629a8e10d86a3%3A0xa7b2b9e26c4f8e4c!2sGunung%20Buring%2C%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1698153947295!5m2!1sen!2sid"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <button class="flex items-center justify-center w-full mt-6 gap-x-4">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 4C10.4255 4 8.90461 4.65749 7.77503 5.84574C6.64381 7.03572 6 8.66001 6 10.3636C6 12.844 7.53632 15.2652 9.24308 17.1603C10.0789 18.0884 10.9177 18.8486 11.5484 19.3769C11.7154 19.5168 11.8673 19.64 12 19.7453C12.1327 19.64 12.2846 19.5168 12.4516 19.3769C13.0823 18.8486 13.9211 18.0884 14.7569 17.1603C16.4637 15.2652 18 12.844 18 10.3636C18 8.66001 17.3562 7.03572 16.225 5.84574C15.0954 4.65749 13.5745 4 12 4ZM12 21C11.4258 21.8187 11.4256 21.8186 11.4253 21.8184L11.4228 21.8166L11.4172 21.8127L11.3986 21.7994C11.3829 21.7882 11.3607 21.7722 11.3325 21.7517C11.2762 21.7106 11.1956 21.6511 11.0943 21.5741C10.8917 21.4203 10.6058 21.1962 10.2641 20.9101C9.58227 20.3389 8.67111 19.5139 7.75692 18.4988C5.96368 16.5076 4 13.6105 4 10.3636C4 8.16134 4.83118 6.0397 6.32548 4.46777C7.82141 2.89413 9.86146 2 12 2C14.1385 2 16.1786 2.89413 17.6745 4.46777C19.1688 6.0397 20 8.16134 20 10.3636C20 13.6105 18.0363 16.5076 16.2431 18.4988C15.3289 19.5139 14.4177 20.3389 13.7359 20.9101C13.3942 21.1962 13.1083 21.4203 12.9057 21.5741C12.8044 21.6511 12.7238 21.7106 12.6675 21.7517C12.6393 21.7722 12.6171 21.7882 12.6014 21.7994L12.5828 21.8127L12.5772 21.8166L12.5754 21.8179C12.5751 21.8181 12.5742 21.8187 12 21ZM12 21L12.5742 21.8187C12.2295 22.0604 11.7699 22.0601 11.4253 21.8184L12 21Z"
                  fill="#020617" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8ZM8 10C8 7.79086 9.79086 6 12 6C14.2091 6 16 7.79086 16 10C16 12.2091 14.2091 14 12 14C9.79086 14 8 12.2091 8 10Z"
                  fill="#020617" />
              </svg>
              <p class="text-xl font-medium text-slate-950">Lihat di Google Map</p>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout-container>
