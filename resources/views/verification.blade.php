<x-layout>
  <section class="bg-white">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div
        class="w-full rounded-[12px] shadow bg-frost-white border border-slate-300 dark:border md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 sm:p-8">
          <h2 class="text-5xl font-bold mb-7 text-start text-sky-400">
            Logo
          </h2>
          <div class="mb-4">
            <h1 class="text-4xl font-semibold text-gray-900">
              Verifikasi Akun Sekarang
            </h1>
            <p class="text-xl font-normal text-slate-600">Masukkan kode verifikasi yang telah dikirimkan ke Nomor
              Whatsapp</p>
          </div>
          <form class="space-y-4 md:space-y-6" action="{{ route('verification') }}" method="POST">
            @csrf
            <div class="grid items-center justify-between w-full grid-cols-5 gap-x-4">
              <input type="number"
                class="bg-white border border-slate-300 rounded-[8px] w-full h-16 text-5xl text-center"></input>
              <input type="number"
                class="bg-white border border-slate-300 rounded-[8px] w-full h-16 text-5xl text-center"></input>
              <input type="number"
                class="bg-white border border-slate-300 rounded-[8px] w-full h-16 text-5xl text-center"></input>
              <input type="number"
                class="bg-white border border-slate-300 rounded-[8px] w-full h-16 text-5xl text-center"></input>
              <input type="number"
                class="bg-white border border-slate-300 rounded-[8px] w-full h-16 text-5xl text-center"></input>
            </div>
          </form>
          <p class="mt-8 text-xl font-normal text-center text-slate-600">Kirim ulang kode verifikasi <span
              class="text-sky-400">00.32</span></p>
        </div>
      </div>
    </div>
  </section>
</x-layout>
