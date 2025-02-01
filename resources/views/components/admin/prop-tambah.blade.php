<section class="w-full flex flex-col gap-6">

        <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data" class="w-full flex flex-col gap-6">
            @csrf
        <div class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
            <h1 class="font-poppins font-semibold text-4xl">Lokasi</h1>
            <div class="flex gap-20">
                <div class="size-72 rounded-lg bg-slate-300 ">
                    Ini Placeholder Map
                </div>
                <div class=" w-full flex flex-col gap-2">
                    <x-textfield label="Daerah" name="region" value="" placeholder="Cari Nama Daerah"
                        type=""></x-textfield>
                    <x-textfield label="Alamat" name="address" value="" placeholder="Contoh: Jl. Danau Toba"
                        type=""></x-textfield>
                    <x-textfield label="Kawasan" name="area" value="" placeholder="Masukan nama kawasan"
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
                            <label for="beli"
                                class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-400 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300 cursor-pointer has-[:checked]:bg-sky-400 has-[:checked]:text-white">
                                <input type="radio" id="beli" name="agreement_type" value="BELI"
                                    class="hidden peer/beli">Beli
                            </label>
                            <label
                                class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-400 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300 cursor-pointer has-[:checked]:bg-sky-400 has-[:checked]:text-white">
                                <input type="radio" name="agreement_type" value="SEWA" class="hidden peer">Sewa
                            </label>
                        </div>
                    </div>
                    <div class="flex">
                        <h1 class="font-poppins text-xl mr-9 w-56">Tipe Properti</h1>
                        <div class="flex-wrap gap-6 flex">
                            @foreach ($propertyCategories as $category)
                                <label
                                    class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-400 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300 cursor-pointer has-[:checked]:bg-sky-400 has-[:checked]:text-white">
                                    <input type="radio" name="category_id" value="{{ $category->id }}" class="hidden peer">
                                    {{ $category->name }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
        <div
            class="mx-auto -m-4 max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
            <h1 class="font-poppins font-semibold text-4xl">Informasi Properti</h1>
            <div class="flex flex-col gap-5">
                <x-textfield label="Judul" name="title" placeholder="Masukkan Judul Properti"></x-textfield>
                <x-textarea label="Deskripsi" name="description"
                    placeholder="Tambahkan Deskripsi untuk properti anda"></x-textarea>
                <x-textfield label="Harga" name="price" placeholder="RP 1xx.xxx.xxx"></x-textfield>
                <x-textfield label="Komisi Yang Didapat (x %)" name="commission" value="0" type="number" disable></x-textfield>
                <x-textfield label="Pemilik" name="owner" placeholder="Masukkan Nama Owner"></x-textfield>
                <x-textfield label="Nomor Pemilik" name="phone-number" placeholder="Masukkan Nomor Owner"></x-textfield>
            </div>
        </div>
        <div
            class="mx-auto max-w-5xl w-full p-5 rounded-lg mt-4 bg-frost-white flex flex-col gap-5 border border-slate-300">
            <h1 class="font-poppins font-semibold text-4xl">Detail Properti</h1>
            <div class="flex justify-around gap-8">
                <div class="w-full flex flex-col gap-6">
                    <x-textfield label="Luas Tanah" name="land_area"
                        placeholder="Masukkan Luas Tanah (m)"></x-textfield>
                    <x-textfield label="Daya Listrik" name="electricity_power"
                        placeholder="Masukkan Daya Listrik (Watt)"></x-textfield>
                    <x-numberinput label="Kamar Tidur" name="bedrooms"></x-numberinput>
                </div>
                <div class="w-full flex flex-col gap-6">
                    <x-textfield label="Luas Bangunan" name="building_area"
                        placeholder="Masukkan Luas Bangunan (m)"></x-textfield>
                    <x-numberinput label="Jumlah Lantai" name="number_of_floors"></x-numberinput>
                    <x-numberinput label="Kamar Mandi" name="bathrooms"></x-numberinput>
                </div>
            </div>
        </div>
        <div
            class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
            <h1 class="font-poppins font-semibold text-4xl">Fasilitas</h1>
            <!-- Internal Section -->
            <div class="flex flex-col gap-5">
                <div class="flex items-start">
                    <h1 class="font-poppins text-xl font-semibold mr-6">Internal</h1>
                    <div class="flex flex-wrap gap-6">
                        @foreach ($internalFacilities as $facility)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="fasilitas_internal[]" value="{{ $facility->id }}"
                                    class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                                <span class="text-slate-400">{{ $facility->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- External Section -->
                <div class="flex items-start">
                    <h1 class="font-poppins text-xl font-semibold mr-6">External</h1>
                    <div class="flex flex-wrap gap-6">
                        @foreach ($externalFacilities as $facility)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="fasilitas_external[]" value="{{ $facility->id }}"
                                    class="w-4 h-4 text-sky-400 border-gray-300 rounded focus:ring focus:ring-sky-200">
                                <span class="text-slate-400">{{ $facility->name }}</span>
                            </label>
                        @endforeach
                        <!-- Add more options here following the same format -->
                    </div>
                </div>
            </div>
        </div>

        <div
            class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
            <h1 class="font-poppins font-semibold text-4xl">Dokumentasi</h1>
            <input type="file" class="hidden">
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 w-full mx-auto">
                <p class="text-gray-500 text-center">Drag & Drop Foto/Video</p>
                <p class="text-gray-400 text-center my-2">Atau</p>
                <div class="flex justify-center">
                    <label for="dokumentasi"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 cursor-pointer">
                        Upload Foto/Video
                        <input type="file" id="dokumentasi" name="dokumentasi[]" multiple
                            accept="image/*,video/*"
                            class="hidden">
                    </label>
                </div>
            </div>
        </div>
        <div
            class="mx-auto max-w-5xl w-full p-5 rounded-lg bg-frost-white flex flex-col gap-5 border border-slate-300">
            <h1 class="font-poppins font-semibold text-4xl">Sertifikat</h1>
            <div class="flex items-center">
                <h1 class="font-poppins text-xl mr-6 ">Tipe Sertifikat</h1>
                <div class="flex flex-wrap gap-6">
                    <label for="SHM"
                        class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-400 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300 cursor-pointer has-[:checked]:bg-sky-400 has-[:checked]:text-white">
                        <input type="radio" id="SHM" name="certificate_type" value="shm"
                            class="hidden peer/SHM">SHM
                    </label>
                    <label
                        class="p-2 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 hover:bg-sky-400 hover:text-white focus:bg-sky-400 focus:ring-2 focus:ring-sky-100 focus:text-white border-slate-300 cursor-pointer has-[:checked]:bg-sky-400 has-[:checked]:text-white">
                        <input type="radio" name="certificate_type" value="hgm" class="hidden peer">HGM
                    </label>
                </div>

            </div>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 w-full mx-auto">
                <p class="text-gray-500 text-center">Drag & Drop Foto/Video</p>
                <p class="text-gray-400 text-center my-2">Atau</p>
                <div class="flex justify-center">
                    <label for="Sertifikat"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 cursor-pointer has-[:checked]:bg-sky-400 has-[:checked]:text-white">
                        <input type="file" id="Sertifikat" name="tipe_perjanjian" value="Sertifikat"
                            class="hidden peer/Sertifikat">Upload Foto Sertifikat
                    </label>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-5xl w-full ">
            <div class="flex justify-end">

                <button type="submit"
                    class="p-4  bg-sky-600 text-white rounded-lg hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-300">
                    Tambah Properti
                </button>
            </div>
        </div>
    </form>
</section>

<script>
document.getElementById('dokumentasi').addEventListener('change', function (event) {
    const files = event.target.files;
    let videoCount = 0;
    let photoCount = 0;

    // Loop melalui semua file yang dipilih
    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        // Validasi tipe file
        if (!file.type.startsWith('image/') && !file.type.startsWith('video/')) {
            alert('Hanya file foto (JPEG, PNG, JPG, GIF) dan video (MP4, MOV) yang diizinkan.');
            resetInput(event.target);
            return;
        }

        // Hitung jumlah video dan foto
        if (file.type.startsWith('video/')) {
            videoCount++;
        } else if (file.type.startsWith('image/')) {
            photoCount++;
        }
    }

    // Validasi jumlah video
    if (videoCount > 1) {
        alert('Hanya 1 video yang diizinkan.');
        resetInput(event.target);
        return;
    }

    // Validasi jumlah foto
    if (photoCount > 20) {
        alert('Maksimal 20 foto yang diizinkan.');
        resetInput(event.target);
        return;
    }

    // Jika semua validasi lolos
    alert('File berhasil dipilih dan siap diupload.');
});

// Fungsi untuk mereset input file
function resetInput(inputElement) {
    inputElement.value = ''; // Reset input
    // Jika reset tidak berhasil, gunakan trik ini:
    const clone = inputElement.cloneNode(true);
    inputElement.parentNode.replaceChild(clone, inputElement);
    clone.addEventListener('change', inputElement.onchange);
}
</script>
