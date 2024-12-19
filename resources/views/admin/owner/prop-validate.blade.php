<x-admin-layout>
    <section class="flex flex-col gap-6">
        @foreach ($data_property as $property)
            <div x-data="{ isOn: false }"
                class="p-4 bg-frost-white flex rounded-[10px] border w-full justify-between border-slate-300 mb-4 relative">
                <div class="flex gap-6">

                    <img src="{{ $property['image'] }}" class=" h-[210px] rounded-[8px] border border-slate-300"
                        alt="{{ $property['name'] }}">
                    <div class="flex flex-col">

                        <div class="rounded-[8px] bg-customBlue-250 px-3 py-2 my-3 w-fit">
                            <p class="text-xl font-medium text-sky-400">{{ $property['type'] }}</p>
                        </div>
                        <div class="text-start">
                            <h5 class="my-2 text-5xl font-semibold text-sky-600">{{ $property['price'] }}</h5>
                            <p class="text-3xl font-normal text-slate-400">{{ $property['name'] }}</p>
                            <p class="text-xl font-normal text-slate-400">{{ $property['location'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="items-center flex flex-col justify-center border-l-2 border-slate-300 pl-4 gap-5">
                    <h1 class="font-poppins text-3xl text-sky-600">Tangggal Validasi:</h1>
                    <h1 class="font-poppins text-5xl font-semibold text-sky-600">{{ $property['validate_date'] }}</h1>
                    <x-button color="secondary" class="w-full">Lihat Detail</x-button>
                </div>
            </div>
        @endforeach
    </section>
</x-admin-layout>
