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
              Selamat Datang di OLM
            </h1>
            <p class="font-normal text-slate-600">Sudah memiliki akun? <span><a class="font-bold text-sky-400"
                  href="/login">Masuk</a></span></p>
          </div>
          <form class="space-y-4 md:space-y-6" action="#">
            <div>
              <label for="username" class="block mb-2 text-xl font-normal text-gray-900">Username</label>
              <input type="username" name="username" id="username"
                class="bg-gray-50 border border-slate-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder:text-slate-400 placeholder:font-normal"placeholder="Masukkan Username Anda"
                required>
            </div>
            <div>
              <label for="email" class="block mb-2 text-xl font-normal text-gray-900">Email</label>
              <input type="email" name="email" id="email"
                class="bg-gray-50 border border-slate-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder:text-slate-400 placeholder:font-normal"placeholder="Masukkan Email Anda"
                required>
            </div>
            <div>
              <label for="password" class="block mb-2 text-xl font-normal text-gray-900">Kata Sandi</label>
              <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi Anda"
                class="bg-gray-50 border border-slate-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder:text-slate-400 placeholder:font-normal"
                required>
            </div>
            <a href="#" class="text-xl font-normal text-sky-400 hover:underline mt-0.5">Lupa password?</a>
            <x-button type="submit" color="primary" size="md"
              class="flex items-center justify-center w-full gap-2 text-white">
              <img class="size-[24px]" src="{{ asset('img/Arrow_Right_rectangle_v1.svg') }}" alt="image arrow">
              <p class="text-lg font-medium md:text-xl">Masuk</p>
            </x-button>
          </form>
        </div>
      </div>
    </div>
  </section>
</x-layout>
