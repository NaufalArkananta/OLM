@props([
    'nama_daerah' => '',
    'location' => '',
    'nama_kawasan' => '',
    'name' => '',
    'price' => '',
    'deskripsi' => '',
    'luas_tanah' => '',
    'luas_bangunan' => '',
    'daya_listrik' => '',
    'jumlah_lantai' => '',
    'jumlah_kamar_tidur' => '',
    'jumlah_kamar_mandi' => '',
    'fasilitas_inter' => [],
    'fasilitas_exter' => [],
    'dokumentasi' => [],
    'sertifikat' => '',
    'tipe_sertifikat' => '',
    'tipe_perjanjian' => '',
])

@php
    $buttonBeliColor = $tipe_perjanjian === 'BELI' ? 'bg-[#0369A140] text-sky-400' : 'bg-slate-200';
    $buttonSewaColor = $tipe_perjanjian === 'SEWA' ? 'bg-[#0369A140] text-sky-400' : 'bg-slate-200';
@endphp
<section class="bg-white border border-slate-200 rounded-lg p-5 gap-7 flex flex-col">
    <div>
        <h1 class="font-semibold text-4xl">Validasi Properti</h1>
        <p class="text-slate-600">Lihat detail properti untuk mengecek apakah propertinya valid</p>
    </div>
    <div class="border border-slate-300"></div>
    <div class="bg-frost-white p-5 rounded-lg flex flex-col gap-5">
        <h1 class="font-semibold text-4xl">Lokasi</h1>
        <div class="flex gap-5">
            <div class="size-96 bg-slate-300 rounded-lg">Ini placeholder map</div>
            <div class="grid grid-rows-1 grid-cols-2 gap-x-5">
                <div class="flex flex-col gap-7 font-medium text-2xl text-slate-800">
                    <h1 class="">
                        Nama Daerah
                    </h1>
                    <h1>
                        Alamat
                    </h1>
                    <h1>
                        Nama Kawasan
                    </h1>
                </div>
                <div class="flex flex-col gap-7 text-2xl text-slate-600">
                    <h1>{{ $nama_daerah }}</h1>
                    <h1>{{ $location }}</h1>
                    <h1>{{ $nama_kawasan }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-frost-white p-5 rounded-lg flex flex-col gap-5">
        <div class="flex gap-5">
            <button
                class="p-2 font-semibold bg-opacity-50 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 border-slate-300 {{ $buttonBeliColor }}">Beli
            </button>
            <button
                class="p-2 font-semibold bg-opacity-50 text-center duration-300 border rounded-lg lg:px-10 bg-slate-200 border-slate-300 {{ $buttonSewaColor }}">Sewa
            </button>
        </div>
        <h1 class="text-sky-600 font-semibold text-5xl">{{ $price }}</h1>
        <h1 class="font-semibold text-3xl">{{ $name }}</h1>
        <p class="text-slate-600 text-2xl">{{ $deskripsi }}</p>
    </div>
    <div class="bg-frost-white p-5 rounded-lg flex flex-col gap-5">
        <h1 class="font-semibold text-4xl">Detail Properti</h1>
        <div class="grid-rows-1 grid grid-cols-4 gap-x-5">
            <div class="flex flex-col gap-7 font-medium text-2xl text-slate-800">
                <h1 class="">
                    Luas Tanah
                </h1>
                <h1>
                    Luas Bangunan
                </h1>
                <h1>
                    Daya Listrik
                </h1>
            </div>
            <div class="flex flex-col gap-7 text-2xl text-slate-600">
                <h1>{{ $luas_tanah }}</h1>
                <h1>{{ $luas_bangunan }}</h1>
                <h1>{{ $daya_listrik }}</h1>
            </div>
            <div class="flex flex-col gap-7 font-medium text-2xl text-slate-800">
                <h1>
                    Jumlah Lantai
                </h1>
                <h1 class="">
                    Kamar Tidur
                </h1>
                <h1>
                    Kamar Mandi
                </h1>
            </div>
            <div class="flex flex-col gap-7 text-2xl text-slate-600">
                <h1>{{ $jumlah_lantai }}</h1>
                <h1>{{ $jumlah_kamar_tidur }}</h1>
                <h1>{{ $jumlah_kamar_mandi }}</h1>
            </div>
        </div>
    </div>
    <div class="bg-frost-white p-5 rounded-lg flex flex-col gap-5">
        <h1 class="font-semibold text-4xl">Fasilitas</h1>
        <div class="grid grid-rows-1 grid-cols-2 gap-x-5">
            <div class="flex-col flex gap-5">
                <h1>Interior</h1>
                <h1>Exterior</h1>
            </div>
            <div class="flex flex-col gap-5">
                <div class="flex gap-2">
                    @foreach ($fasilitas_inter as $fasilitas)
                        <div class="bg-slate-200 p-2 rounded-lg">{{ $fasilitas }}</div>
                    @endforeach
                </div>
                <div class="flex gap-2">
                    @foreach ($fasilitas_exter as $fasilitas)
                        <div class="bg-slate-200 p-2 rounded-lg">{{ $fasilitas }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bg-frost-white p-5 rounded-lg flex flex-col gap-5">
        <h1 class="font-semibold text-4xl">Dokumentasi</h1>
        <div class="grid grid-rows-1 grid-cols-3 gap-5">
            @foreach ($dokumentasi as $dokumentasi)
                <img src={{ $dokumentasi }} alt="dokumentasi" class="rounded-lg " />
            @endforeach
        </div>
    </div>
    <div class="bg-frost-white p-5 rounded-lg flex flex-col gap-5">
        <h1 class="font-semibold text-4xl">Sertifikat</h1>
        <div class="flex gap-7">
            <img src={{ $sertifikat }} alt="" class="rounded-lg">
            <div class="flex gap-16 text-2xl">
                <h1 class="font-semibold">Tipe Sertifikat</h1>
                <h1>{{ $tipe_sertifikat }}</h1>
            </div>
        </div>
    </div>
    <div class="gap-7 w-full flex justify-end">
        <x-button color="secondary" onclick="openDeclineModal()">Tolak</x-button>
        <x-button color="primary" onclick="dummy()">Terima</x-button>
    </div>
</section>
<div id="decline-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
    <div
        class="bg-white w-1/3 p-10 rounded-lg absolute top-1/2 left-1/2 gap-6 flex flex-col transform -translate-x-1/2 -translate-y-1/2">
        <div>
            <h1 class="text-4xl font-semibold">Tolak Properti?</h1>
            <p class="text-xl">Berikan alasan dibawah ini, mengapa properti ditolak</p>
        </div>
        <div class="border border-slate-200"></div>
        <x-textarea placeholder="Tuliskan Alasan Anda Disini" class="h-40 w-full" name="alasan"
            label="Alasan Penolakan"></x-textarea>
        <div class="flex justify-end gap-4">
            <x-button color="white" onclick="closeDeclineModal(event)">Batal</x-button>
            <x-button color="danger" onclick="dummy()">Tolak Properti</x-button>
        </div>
    </div>
    <script>
        function openDeclineModal() {
            document.getElementById('decline-modal').classList.remove('hidden');
        }

        function closeDeclineModal(event) {
            event.preventDefault();
            document.getElementById('decline-modal').classList.add('hidden');
        }

        function dummy() {
            location.reload();
        }
    </script>
