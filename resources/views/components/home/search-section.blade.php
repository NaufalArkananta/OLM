<div class="pt-[152px] my-10 bg-sky-600 pb-14 w-full max-w-full">
  <div class="w-full max-w-full px-4 mx-auto lg:max-w-screen-2xl sm:px-6 lg:px-8">
    <div
      class="flex items-center w-full lg:w-fit gap-2 p-3 mx-auto lg:mx-px bg-white rounded-[10px] shadow-Shadow/Shadow 3">
      <x-button size="lg" color="secondary" type="button" class="w-full lg:w-auto lg:px-20">Beli</x-button>
      <x-button size="lg" color="secondary" type="button" class="w-full lg:w-auto lg:px-20">Sewa</x-button>
    </div>
    <div
      class="w-full space-y-4 lg:space-y-0 lg:flex flex-row p-4 gap-x-3 bg-white rounded-[10px] shadow-Shadow/Shadow 3 my-3">
      <div class="lg:basis-3/12 ">
        <label for="property_type" class="block mb-2 text-xl font-normal text-gray-900">Tipe Properti</label>
        <select
          class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300"
          name="property_type">
          <option class="text-gray-900 peer-aria-selected:text-slate-300" value="Villa">Villa</option>
          <option class="text-gray-900 peer-aria-selected:text-slate-300" value="Hotel">Hotel</option>
        </select>
      </div>
      <div class=" lg:basis-6/12">
        <label for="lokasi" class="block mb-2 text-xl font-normal text-gray-900">Lokasi</label>
        <input type="text" name="lokasi" placeholder="Daerah, Kota ataupun Alamat"
          class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300 placeholder:text-slate-400">
      </div>
      <div class="flex items-end lg:basis-3/12">
        <x-button size="lg" color="primary" type="button"
          class="flex items-center justify-center w-full px-16 gap-x-2 lg:w-auto">
          <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
              d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
          </svg>
          <p>Cari Properti</p>
        </x-button>
      </div>
    </div>
  </div>
</div>
