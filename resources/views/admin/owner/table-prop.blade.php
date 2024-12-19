<x-admin-layout>
    <section class="w-full">
        <div class="overflow-x-auto border rounded-lg border-slate-300">

            <table class="w-full text-center  ">
                <thead>
                    <tr class="bg-gray-200">
                        <th><input type="checkbox" class="form-checkbox"></th>
                        <th>Nama Properti</th>
                        <th>Harga Jual</th>
                        <th>Komisi Sales</th>
                        <th>Komisi Website</th>
                    </tr>
                </thead>
                <tbody class="border border-slate-300 ">
                    @foreach ($data_property as $sale)
                        <tr class="hover:bg-gray-100 border border-slate-300 items-center">
                            <!-- Select Checkbox -->
                            <td class="border border-slate-300 p-2">
                                <input type="checkbox" class="form-checkbox">
                            </td>

                            <!-- User Data -->
                            <td class="border border-slate-300">{{ $sale['name'] }}</td>
                            <td class="border border-slate-300">{{ $sale['price'] }}</td>
                            <td class="border border-slate-300">{{ $sale['komisi'] }}</td>
                            <td class="border border-slate-300">{{ $sale['komisi_web'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-admin-layout>
