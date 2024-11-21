<x-layout-container>
  <section class="px-6 pt-20 pb-6 mx-auto mb-10 max-w-screen-2xl lg:px-8">
    <div class="flex flex-col justify-between md:flex-row mt-14 gap-x-6">
      <div class="flex flex-wrap w-full max-w-xs gap-4 mb-8 space-y-2 font-semibold md:mb-0 md:block">
        <p class="text-3xl duration-100 cursor-pointer text-slate-950 hover:text-sky-400"><a href="#">Informasi
            Profil</a></p>
        <p class="text-3xl duration-100 cursor-pointer text-slate-950 hover:text-sky-400"><a href="#">Privasi &
            Keamanan</a></p>
        <p class="text-3xl duration-100 cursor-pointer text-slate-950 hover:text-sky-400"><a href="#">Notifikasi</a>
        </p>
        <p class="text-3xl duration-100 cursor-pointer text-slate-950 hover:text-sky-400"><a href="#">Lainnya</a>
        </p>
      </div>
      <div class="flex flex-col justify-between w-full max-w-full lg:flex-row gap-x-6">
        <div class="w-full max-w-full lg:max-w-sm">
          <div
            class="p-5 border bg-frost-white shadow-Shadow/Shadow 3 rounded-[8px] border-slate-300 flex gap-x-4 lg:block">
            <img src="{{ asset('img/aziiz_image.png') }}" alt="profile"
              class="rounded-[8px] border border-slate-300 w-full h-[140px] sm:h-[160px] md:h-[200px] lg:h-[296px] object-cover">
            <div>
              <x-button size="lg" color="secondary" type="button" class="w-full lg:mt-6">Pilih
                foto</x-button>
              <p class="mt-4 text-base font-normal lg:mt-6 lg:text-lg text-slate-600">Besar file: maksimum 10 Megabytes.
                Ekstensi file yang
                diperbolehkan: .JPG .JPEG .PNG</p>
            </div>
          </div>
        </div>
        <div class="w-full max-w-full mt-6 lg:mt-0">
          <div>
            <div class="flex items-center justify-start gap-x-3">
              <h5 class="w-full max-w-[160px] text-4xl font-semibold text-slate-950">Biodata Diri</h5>
              <div class="w-full h-0.5 bg-slate-300"></div>
            </div>
            <div class="w-full mt-2 space-y-4">
              <div class="space-y-2">
                <label for="nama_lengkap" class="text-xl font-normal text-gray-900">Nama Lengkap</label>
                <div class="flex items-center gap-x-3">
                  <input type="text" name="nama_lengkap" placeholder="Nama Lengkap"
                    class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300 placeholder:text-slate-400">
                  <button>
                    <img src="{{ asset('img/Edit_rectangle.svg') }}" alt="Edit action">
                  </button>
                </div>
              </div>
              <div class="space-y-2">
                <label for="role" class="text-xl font-normal text-gray-900">Role</label>
                <select
                  class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300"
                  name="property_type">
                  <option class="text-gray-900 peer-aria-selected:text-slate-300" value="customer">Customer</option>
                  <option class="text-gray-900 peer-aria-selected:text-slate-300" value="sales">Sales</option>
                </select>
              </div>
              <div class="space-y-2">
                <label for="NIB" class="text-xl font-normal text-gray-900">NIB</label>
                <input type="text" name="NIB" placeholder="Masukkan Nama Kota Anda"
                  class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300 placeholder:text-slate-400">
              </div>
              <div class="space-y-2">
                <label for="kota_beroprasi" class="text-xl font-normal text-gray-900">Kota Beroperasi</label>
                <input type="text" name="kota_beroprasi" placeholder="Masukkan Nama Kota Anda"
                  class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300 placeholder:text-slate-400">
              </div>
              <div class="space-y-2">
                <label for="alamat" class="text-xl font-normal text-gray-900">Alamat</label>
                <textarea name="kota_beroprasi" placeholder="Contoh: Jl. Danau Toba, Kec. Kedung Kandang, Kota Malang"
                  class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300 placeholder:text-slate-400"></textarea>
              </div>
            </div>
          </div>
          <div class="mt-20">
            <div class="flex items-center justify-start gap-x-3">
              <h5 class="w-full max-w-[160px] text-4xl font-semibold text-slate-950">Kontak</h5>
              <div class="w-full h-0.5 bg-slate-300"></div>
            </div>
            <div class="w-full mt-2 space-y-4">
              <div class="space-y-2">
                <label for="email" class="text-xl font-normal text-gray-900">Email</label>
                <div class="flex items-center gap-x-3">
                  <input type="text" name="email" placeholder="example@moklet.org"
                    class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300 placeholder:text-slate-400">
                  <button>
                    <img src="{{ asset('img/Edit_rectangle.svg') }}" alt="Edit action">
                  </button>
                </div>
              </div>
              <div class="space-y-2">
                <label for="nomor_telepon" class="text-xl font-normal text-gray-900">Nomor Telepon</label>
                <div class="flex items-center gap-x-3">
                  <input type="text" name="nomor_telepon" placeholder="example@moklet.org"
                    class="block w-full p-3 text-sm text-gray-900 duration-200 bg-white border rounded-lg outline-none border-slate-200 focus:ring-2 focus:ring-sky-300 focus:border-slate-300 placeholder:text-slate-400">
                  <button>
                    <img src="{{ asset('img/Edit_rectangle.svg') }}" alt="Edit action">
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout-container>
