<x-layout>
    <section class="bg-white" x-data="{ isOpen: false }">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full rounded-[12px] shadow bg-frost-white border border-slate-300 dark:border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 sm:p-8">
                    <h2 class="text-5xl font-bold mb-7 text-start text-sky-400">
                        Logo
                    </h2>
                    <div class="mb-4">
                        <h1 class="text-4xl font-semibold text-gray-900">
                            Selamat Datang Kembali
                        </h1>
                        <p class="font-normal text-slate-600">Belum memiliki akun? <span><a class="font-bold text-sky-400"
                                    href="/register">Daftar</a></span></p>
                    </div>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-xl font-normal text-gray-900">Username /
                                Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-slate-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder:text-slate-400 placeholder:font-normal"placeholder="Masukkan Username/Email Anda"
                                required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-xl font-normal text-gray-900">Kata
                                Sandi</label>
                            <div class="relative flex items-center">
                                <button type="button" @click="isOpen = !isOpen"
                                    class="absolute flex items-center px-2 right-3">
                                    <svg x-show="isOpen" class="w-6 h-6 text-slate-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <svg x-show="!isOpen" class="w-6 h-6 text-slate-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="m4 15.6 3.055-3.056A4.913 4.913 0 0 1 7 12.012a5.006 5.006 0 0 1 5-5c.178.009.356.027.532.054l1.744-1.744A8.973 8.973 0 0 0 12 5.012c-5.388 0-10 5.336-10 7A6.49 6.49 0 0 0 4 15.6Z" />
                                        <path
                                            d="m14.7 10.726 4.995-5.007A.998.998 0 0 0 18.99 4a1 1 0 0 0-.71.305l-4.995 5.007a2.98 2.98 0 0 0-.588-.21l-.035-.01a2.981 2.981 0 0 0-3.584 3.583c0 .012.008.022.01.033.05.204.12.402.211.59l-4.995 4.983a1 1 0 1 0 1.414 1.414l4.995-4.983c.189.091.386.162.59.211.011 0 .021.007.033.01a2.982 2.982 0 0 0 3.584-3.584c0-.012-.008-.023-.011-.035a3.05 3.05 0 0 0-.21-.588Z" />
                                        <path
                                            d="m19.821 8.605-2.857 2.857a4.952 4.952 0 0 1-5.514 5.514l-1.785 1.785c.767.166 1.55.25 2.335.251 6.453 0 10-5.258 10-7 0-1.166-1.637-2.874-2.179-3.407Z" />
                                    </svg>
                                </button>
                                <input :type="isOpen ? 'text' : 'password'" name="password" id="password"
                                    placeholder="Masukkan Kata Sandi Anda"
                                    class="bg-gray-50 border border-slate-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder:text-slate-400 placeholder:font-normal"
                                    required />
                            </div>
                            <a href="#" class="text-xl font-normal text-sky-400 hover:underline mt-0.5 mb-6">Lupa
                                password?</a>
                            <x-button type="submit" color="primary" size="md"
                                class="flex items-center justify-center w-full gap-2 mt-6 text-white">
                                <img class="size-[24px]" src="{{ asset('img/Arrow_Right_rectangle_v1.svg') }}"
                                    alt="image arrow">
                                <p class="text-lg font-medium md:text-xl">Masuk</p>
                            </x-button>
                            <div class="flex items-center justify-center w-full gap-2 my-1">
                                <div class="w-full h-[1px] bg-black"></div>
                                <p class="text-lg font-normal">Atau</p>
                                <div class="w-full h-[1px] bg-black"></div>
                            </div>
                            <x-button type="button" color="secondary" size="md"
                                class="flex items-center justify-center w-full gap-2 text-sky-400">
                                <img class="size-[30px]" src="{{ asset('img/blue-google.svg') }}" alt="Google">
                                <p class="text-lg font-medium md:text-xl">Masuk dengan Google</p>
                            </x-button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-layout>
