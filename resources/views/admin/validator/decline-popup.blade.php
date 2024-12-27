<x-admin-layout>
    <section class="px-14 py-14 bg-white flex flex-col max-w-4xl gap-7 border rounded-lg  ">
        <div>
            <h1 class="text-4xl font-semibold">Tolak Properti?</h1>
            <p class="text-xl">Berikan alasan dibawah ini, mengapa properti ditolak</p>
        </div>
        <div class="border border-slate-200 w-full "></div>
        <x-textarea placeholder="Tuliskan Alasan Anda Disini" class="h-40 w-full" name="alasan"
            label="Alasan Penolakan"></x-textarea>
        <div class="flex justify-end gap-4">
            <x-button color="white">Batal</x-button>
            <x-button color="danger">Tolak Properti</x-button>
        </div>
    </section>
</x-admin-layout>
