<x-admin-layout>
    <section class="flex flex-col flex-wrap gap-6 items-center">
        @foreach ($notifications as $notification)
            <div
                class="p-4 bg-frost-white rounded-[10px] border flex gap-4 items-center border-slate-300 relative w-full">
                {{-- Gambar Notifikasi --}}
                @if (!empty($notification['image']))
                    <img src="{{ $notification['image'] }}" alt="Gambar Notifikasi"
                        class="object-cover w-1/4 h-[200px] rounded-[8px] border border-slate-300 ">
                @endif
                <div class="flex flex-col items-start w-full">

                    {{-- Konten Notifikasi --}}
                    <div class="text-start">
                        <h5 class="my-2 text-3xl font-semibold text-sky-600">{{ $notification['title'] }}</h5>
                        <p class="text-xl font-normal text-slate-600">{{ $notification['message'] }}</p>
                    </div>
                </div>

            </div>
        @endforeach
    </section>
</x-admin-layout>
