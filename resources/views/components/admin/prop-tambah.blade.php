<section class="w-full flex flex-col gap-6">
    <div class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
        <h1 class="font-poppins font-semibold text-4xl">Lokasi</h1>
        <div class="flex gap-20">
            <div class="size-72 rounded-lg bg-slate-300 ">
                Ini Placeholder Map
            </div>
            <div class=" w-full flex flex-col gap-2">
                <x-textfield label="Daerah" name="Daerah" value="" placeholder="Cari Nama Daerah"
                    type=""></x-textfield>
                <x-textfield label="Alamat" name="Alamat" value="" placeholder="Contoh: Jl. Danau Toba"
                    type=""></x-textfield>
                <x-textfield label="Kawasan" name="Kawasan" value="" placeholder="Masukan nama kawasan"
                    type=""></x-textfield>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
        <h1 class="font-poppins font-semibold text-4xl">Kategori Properti</h1>
        <div>
            <div class="flex flex-col gap-5">
                <div class="flex items-center">
                    <h1 class="font-poppins text-xl mr-6 ">Tipe Perjanjian</h1>
                    <div class="flex flex-wrap gap-6">
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Beli
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Sewa
                        </button>
                    </div>
                </div>
                <div class="flex">
                    <h1 class="font-poppins text-xl mr-9 w-56">Tipe Properti</h1>
                    <div class="flex-wrap gap-6 flex">
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Rumah
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Apartemen
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Ruko
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Villa
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Tanah
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Kos
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Ruang
                            Kantor
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Gudang
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Hotel
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Kios
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Gedung
                        </button>
                        <button
                            class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">Toko
                        </button>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </div>
    <div class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
        <h1 class="font-poppins font-semibold text-4xl">Informasi Properti</h1>
        <div class="flex flex-col gap-5">
            <x-textfield label="Judul" name="judul" placeholder="Masukkan Judul Properti"></x-textfield>
            <x-textarea label="Deskripsi" name="deskripsi"
                placeholder="Tambahkan Deskripsi untuk properti anda"></x-textarea>
            <x-textfield label="Harga" name="harga" placeholder="RP 1xx.xxx.xxx"></x-textfield>
        </div>
    </div>
    <div class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
        <h1 class="font-poppins font-semibold text-4xl">Detail Properti</h1>
        <div class="flex justify-around gap-8">
            <div class="w-full flex flex-col gap-6">
                <x-textfield label="Luas Tanah" name="luas_tanah" placeholder="Masukkan Luas Tanah (m)"></x-textfield>
                <x-textfield label="Daya Listrik" name="daya_listrik"
                    placeholder="Masukkan Daya Listrik (Watt)"></x-textfield>
                <x-numberinput label="Kamar Tidur" name="kamar_tidur"></x-numberinput>
            </div>
            <div class="w-full flex flex-col gap-6">
                <x-textfield label="Luas Bangunan" name="luas_bangunan"
                    placeholder="Masukkan Luas Bangunan (m)"></x-textfield>
                <x-numberinput label="Jumlah Lantai" name="jumlah_lantai"></x-numberinput>
                <x-numberinput label="Kamar Mandi" name="kamar_mandi"></x-numberinput>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
        <h1 class="font-poppins font-semibold text-4xl">Fasilitas</h1>

        <!-- Internal Section -->
        <div class="flex flex-col gap-5">
            <div class="flex items-start">
                <h1 class="font-poppins text-xl font-semibold mr-6">Internal</h1>
                <div class="flex flex-wrap gap-6">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_internal" value="AC"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">AC</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_internal" value="TV Kabel"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">TV Kabel</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_internal" value="Internet"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Internet</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_internal" value="Kolam Renang"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Kolam Renang</span>
                    </label>
                </div>
            </div>

            <!-- External Section -->
            <div class="flex items-start">
                <h1 class="font-poppins text-xl font-semibold mr-6">External</h1>
                <div class="flex flex-wrap gap-6">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Keamanan 24 Jam"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Keamanan 24 Jam</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Pusat Kebugaran"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Pusat Kebugaran</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Dekat Jalan Raya"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Dekat Jalan Raya</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Dekat Sekolah"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Dekat Sekolah</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Akses Jalan Tol"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Akses Jalan Tol</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Masuk Mobil"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Masuk Mobil</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Pusat Bisnis"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Pusat Bisnis</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Dekat Kawasan Bisnis"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Dekat Kawasan Bisnis</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Dekat Pusat Perbelanjaan"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Dekat Pusat Perbelanjaan</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Dekat Stasiun"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Dekat Stasiun</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Dekat Rumah Sakit"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Dekat Rumah Sakit</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Dekat Tempat Ibadah"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Dekat Tempat Ibadah</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Bebas Banjir"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Bebas Banjir</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Dekat Kolam Renang"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Dekat Kolam Renang</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Taman"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Taman</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Kids Playground"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Kids Playground</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="fasilitas_external" value="Jogging Track"
                            class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                        <span class="text-slate-400">Jogging Track</span>
                    </label>
                    <!-- Add more options here following the same format -->
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
        <h1 class="font-poppins font-semibold text-4xl">Dokumentasi</h1>
        <input type="file" class="hidden">
        <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 w-full mx-auto">
            <p class="text-gray-500 text-center">Drag & Drop Foto/Video</p>
            <p class="text-gray-400 text-center my-2">Atau</p>
            <div class="flex justify-center">
                <button
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    Upload Foto/Video
                </button>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
        <h1 class="font-poppins font-semibold text-4xl">Sertifikat</h1>
        <div class="flex items-center">
            <h1 class="font-poppins text-xl mr-6 ">Tipe Sertifikat</h1>
            <div class="flex flex-wrap gap-6">
                <button
                    class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">SHM
                </button>
                <button
                    class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-300 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300">HGB
                </button>
            </div>

        </div>
        <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 w-full mx-auto">
            <p class="text-gray-500 text-center">Drag & Drop Foto/Video</p>
            <p class="text-gray-400 text-center my-2">Atau</p>
            <div class="flex justify-center">
                <button
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    Upload Foto/Video
                </button>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-5xl w-full ">
        <div class="flex justify-end">

            <button
                class="p-4  bg-sky-600 text-white rounded-lg hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-300">
                Tambah Properti
            </button>
        </div>
    </div>
</section>
