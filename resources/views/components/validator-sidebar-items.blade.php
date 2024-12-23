<ul class="h-full space-y-2" x-data="{ isOpen: false }">
    <li>
        <a href="/admin/validator/dashboard"
            class="flex items-center px-2.5 py-3 font-medium text-black duration-200 rounded-lg hover:text-white hover:bg-sky-400 group">
            <svg class="w-6 h-6 text-black transition duration-200 group-hover:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                    clip-rule="evenodd" />
            </svg>
            <span class="ms-3">Dashboard</span>
        </a>
    </li>
    <li @click="isOpen = !isOpen">
        <a href="#"
            class="flex items-center w-full relative px-2.5 py-3 font-medium text-black duration-200 rounded-lg hover:text-white hover:bg-sky-400 group">
            <svg class="w-6 h-6 text-black transition duration-200 group-hover:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.5 8H4m0-2v13a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-5.032a1 1 0 0 1-.768-.36l-1.9-2.28a1 1 0 0 0-.768-.36H5a1 1 0 0 0-1 1Z" />
            </svg>
            <span class="text-left ms-3 rtl:text-right whitespace-nowrap">Validasi</span>
            <svg class="absolute w-3 h-3 right-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </a>
    </li>
    <li x-show="isOpen" x-transition:enter="transition ease-out duration-200 transform"
        x-transition:enter-start="ease-in -translate-y-24 opacity-0" x-transition:enter-end=" translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="translate-y-0"
        x-transition:leave-end="-translate-y-24 opacity-0" class="flex items-start pl-4 gap-x-2">
        <ul class="w-full">
            <li class="border-l-[2px] py-2 pl-2 border-sky-400">
                <a href="/admin/validator/prop-need-validate"
                    class="flex items-center relative w-full px-2.5 py-3 font-medium text-black duration-200 rounded-lg hover:text-white hover:bg-sky-400 group">
                    <span class="text-left ms-1">Belum Divalidasi</span>
                </a>
            </li>
            <li class="border-l-[2px] border-sky-400 py-2 pl-2">
                <a href="/admin/validator/prop-validated"
                    class="flex items-center relative w-full px-2.5 py-3 font-medium text-black duration-200 rounded-lg hover:text-white hover:bg-sky-400 group">
                    <span class="text-left ms-1">Sudah Divalidasi</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
