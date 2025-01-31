<x-layout-container>
    <section class="w-full h-auto bg-sky-600">
        <div class="px-6 pt-20 pb-6 mx-auto mb-10 max-w-screen-2xl lg:px-8">
            <div class="flex items-end justify-center p-6 mt-10 mb-6 bg-white gap-x-4 rounded-xl">
                <div class="w-full">
                    <label for="lokasi" class="block mb-2 text-xl font-normal text-gray-900">Lokasi</label>
                    <input type="text" name="lokasi" placeholder="Daerah, Kota ataupun Alamat"
                        class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300 placeholder:text-slate-400">
                </div>
                <div class="flex items-end w-auto min-w-52">
                    <x-button size="lg" color="primary" type="button"
                        class="flex items-center justify-center w-full px-16 gap-x-2 lg:w-auto">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                        <p>Cari Properti</p>
                    </x-button>
                </div>
            </div>
        </div>
    </section>
    <section class="px-6 pb-6 mx-auto mb-10 max-w-screen-2xl lg:px-8">
        <div class="w-full border rounded-lg bg-frost-white border-slate-300">
            <div x-data="{ open: null }" class="border-b divide-y divide-slate-300 border-slate-300">
                <div class="p-4">
                    <button @click="open === 1 ? open = null : open = 1"
                        class="flex items-center justify-between w-full text-3xl font-medium text-left text-gray-950">
                        <span>Tipe Perjanjian</span>
                        <svg :class="open === 1 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform transform"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06-.02L10 10.94l3.71-3.75a.75.75 0 111.06 1.06l-4 4.04a.75.75 0 01-1.06 0l-4-4a.75.75 0 01-.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open === 1" x-transition class="mt-2 text-xl text-slate-400">
                        <p class="p-2 text-center rounded-lg bg-customBlue-100">Tidak ada Data</p>
                    </div>
                </div>
            </div>
            <div x-data="{ open: null }" class="border-b divide-y divide-slate-300 border-slate-300">
                <div class="p-4">
                    <button @click="open === 2 ? open = null : open = 2"
                        class="flex items-center justify-between w-full text-3xl font-medium text-left text-gray-950">
                        <span>Tipe Properti</span>
                        <svg :class="open === 2 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform transform"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06-.02L10 10.94l3.71-3.75a.75.75 0 111.06 1.06l-4 4.04a.75.75 0 01-1.06 0l-4-4a.75.75 0 01-.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open === 2" x-transition class="mt-2 text-xl text-slate-400">
                        <p class="p-2 text-center rounded-lg bg-customBlue-100">Tidak ada Data</p>
                    </div>
                </div>
            </div>
            <div x-data="{ open: null }" class="border-b divide-y divide-slate-300 border-slate-300">
                <div class="p-4">
                    <button @click="open === 3 ? open = null : open = 3"
                        class="flex items-center justify-between w-full text-3xl font-medium text-left text-gray-950">
                        <span>Harga</span>
                        <svg :class="open === 3 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform transform"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06-.02L10 10.94l3.71-3.75a.75.75 0 111.06 1.06l-4 4.04a.75.75 0 01-1.06 0l-4-4a.75.75 0 01-.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open === 3" x-transition class="mt-2 text-xl text-slate-400">
                        <p class="p-2 text-center rounded-lg bg-customBlue-100">Tidak ada Data</p>
                    </div>
                </div>
            </div>
            <div x-data="{ open: null }" class="border-b divide-y divide-slate-300 border-slate-300">
                <div class="p-4">
                    <button @click="open === 4 ? open = null : open = 4"
                        class="flex items-center justify-between w-full text-3xl font-medium text-left text-gray-950">
                        <span>Urutkan</span>
                        <svg :class="open === 4 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform transform"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06-.02L10 10.94l3.71-3.75a.75.75 0 111.06 1.06l-4 4.04a.75.75 0 01-1.06 0l-4-4a.75.75 0 01-.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open === 4" x-transition
                        class="flex flex-wrap justify-start gap-4 mx-auto mt-2 text-xl text-slate-400">
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Terbaru
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Harga
                            Terendah</button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Harga
                            Tertinggi</button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Luas
                            Tanah
                            Terbesar</button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Luas
                            Tanah
                            Terkecil</button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Luas
                            Bangunan Terbesar
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Luas
                            Bangunan Terkecil
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div>
                <h4 class="text-4xl font-semibold text-slate-950">Rumah Dijual di Indonesia, Harga Rumah Terbaru 2024
                </h4>
                <p class="text-3xl font-normal text-slate-600">1.009 properti ditemukan</p>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($data_property as $property)
                    <div x-data="{ isOn: false }"
                        class="p-4 bg-frost-white rounded-[10px] border border-slate-300 relative w-full shadow-Shadow/Shadow 3">
                        <img src="{{ asset('storage/' . $property->media->first()->media_url) }}"
                            class="object-cover w-full h-[210px] rounded-[8px] border border-slate-300"
                            alt="{{ $property->title }}">
                        <div class="rounded-[8px] bg-customBlue-250 px-3 py-2 my-3 w-fit">
                            <p class="text-xl font-medium text-sky-400">{{ $property->category->name ?? '-' }}</p>
                        </div>
                        <div class="text-start">
                            <h5 class="my-2 text-5xl font-semibold text-sky-600">{{ $property->price }}</h5>
                            <p class="text-3xl font-normal text-slate-400">{{ $property->description }}</p>
                            <p class="text-xl font-normal text-slate-400">{{ $property->location }}</p>
                        </div>
                        <button @click="isOn = !isOn"
                            class="absolute p-2 rounded-md top-6 right-6 backdrop-blur-sm bg-white/30">
                            <svg x-show="!isOn" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4 6C4 3.79086 5.79086 2 8 2H16C18.2091 2 20 3.79086 20 6V20.0568C20 21.6836 18.1613 22.6298 16.8375 21.6843L12 18.2289L7.16248 21.6843C5.83874 22.6298 4 21.6836 4 20.0568V6ZM8 4C6.89543 4 6 4.89543 6 6V20.0568L10.8375 16.6014C11.5329 16.1047 12.4671 16.1047 13.1625 16.6014L18 20.0568V6C18 4.89543 17.1046 4 16 4H8Z"
                                    fill="#121212" />
                            </svg>
                            <svg x-show="isOn" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24"
                                height="24" viewBox="0 0 1080 1080" xml:space="preserve">
                                <desc>Created with Fabric.js 5.2.4</desc>
                                <defs>
                                </defs>
                                <rect x="0" y="0" width="100%" height="100%" fill="transparent"></rect>
                                <g transform="matrix(1 0 0 1 540 540)" id="528c9fbf-f05c-4255-a13c-76f0d9fb7386">
                                    <rect
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;"
                                        vector-effect="non-scaling-stroke" x="-540" y="-540" rx="0"
                                        ry="0" width="1080" height="1080" />
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
                                <g transform="matrix(8.79 0 0 9.18 542.32 469.55)"
                                    id="ec544009-daba-40e8-b526-94c20ef1c372">
                                    <rect
                                        style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(12,74,110); fill-rule: nonzero; opacity: 1;"
                                        vector-effect="non-scaling-stroke" x="-33.085" y="-33.085" rx="0"
                                        ry="0" width="66.17" height="66.17" />
                                </g>
                                <g transform="matrix(0 0 0 0 0 0)">
                                    <g style="">
                                    </g>
                                </g>
                                <g transform="matrix(-3.63 -0.45 0.41 -3.31 719.93 788.7)"
                                    id="dac27e73-bde9-47dc-8e85-609f39240241">
                                    <polygon
                                        style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(12,74,110); fill-rule: nonzero; opacity: 1;"
                                        vector-effect="non-scaling-stroke"
                                        points="-30.68,-37.41 30.68,0 -30.68,37.41 " />
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
                                        vector-effect="non-scaling-stroke"
                                        points="-30.68,-37.41 30.68,0 -30.68,37.41 " />
                                </g>
                            </svg>
                        </button>
                        @foreach ($property->sales as $sale)
                        <div class="my-4 bg-slate-300 w-full h-0.5"></div>
                        <div class="flex items-center w-full gap-4">
                            <div class="w-[48px] h-[48px] overflow-hidden border rounded-full border-slate-300">
                                <img src="{{ $property['sales_pic'] }}" class="object-cover w-full h-full"
                                    alt="{{ $sale->agent->name }}">
                            </div>
                            <div>
                                <h6 class="text-3xl font-normal text-slate-950">{{ $sale->agent->name ?? 'Tidak Ada Sales' }}</h6>
                                <p class="text-lg font-normal text-slate-400">Public Sales</p>
                            </div>
                        </div>
                        <button
                        class="flex items-center justify-center w-full gap-3 p-4 mt-6 text-white duration-300 bg-green-500 rounded-lg hover:bg-green-600 focus:ring-2 focus:ring-green-100">
                        <img src="{{ asset('img/WhatsApp.svg') }}" alt="whatsapp logo" class="size-[28px]">
                        <p class="text-xl font-medium">{{ $sale->agent->number }}</p>
                    </button>
                </div>
                @endforeach
                @endforeach
            </div>
            <div class="flex justify-center w-full">
                <x-button class="mt-8" type="button" size="lg" color="secondary">Muat Properti
                    Lainya</x-button>
            </div>
        </div>
    </section>
</x-layout-container>
