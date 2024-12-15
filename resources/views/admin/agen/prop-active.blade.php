<x-admin-layout>
    <section class="flex flex-wrap gap-6">
        @foreach ($data_property as $property)
            <div x-data="{ isOn: false }"
                class="p-4 bg-frost-white rounded-[10px] border border-slate-300 mb-4 relative w-96">
                <img src="{{ $property['image'] }}"
                    class="object-cover w-full h-[210px] rounded-[8px] border border-slate-300"
                    alt="{{ $property['name'] }}">
                <div class="rounded-[8px] bg-customBlue-250 px-3 py-2 my-3 w-fit">
                    <p class="text-xl font-medium text-sky-400">{{ $property['type'] }}</p>
                </div>
                <div class="text-start">
                    <h5 class="my-2 text-5xl font-semibold text-sky-600">{{ $property['price'] }}</h5>
                    <p class="text-3xl font-normal text-slate-400">{{ $property['name'] }}</p>
                    <p class="text-xl font-normal text-slate-400">{{ $property['location'] }}</p>
                </div>
                <button @click="isOn = !isOn"
                    class="absolute p-2 rounded-md top-6 right-6 backdrop-blur-sm bg-white/30">
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
                                vector-effect="non-scaling-stroke" x="-540" y="-540" rx="0" ry="0"
                                width="1080" height="1080" />
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
                        <g transform="matrix(-3.63 -0.45 0.41 -3.31 719.93 788.7)"
                            id="dac27e73-bde9-47dc-8e85-609f39240241">
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
                <x-button class="mt-4 w-full">Terjual</x-button>
            </div>
        @endforeach
    </section>
</x-admin-layout>
