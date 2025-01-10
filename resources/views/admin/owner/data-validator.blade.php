<x-admin-layout>
    <section class="w-full">
        <!-- Add User Button -->
        <div class="flex justify-end mb-4">
            <x-button type="button" color="primary" onclick="openModal()">+ Tambah User Validator</x-button>
        </div>

        <!-- Data Sales Table -->
        <div class="overflow-x-auto border rounded-lg border-slate-300">

            <table class="w-full text-center  ">
                <thead>
                    <tr class="bg-gray-200">
                        <th><input type="checkbox" class="form-checkbox"></th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Penempatan</th>
                        <th>Last Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="border border-slate-300 ">
                    @foreach ($validators as $validator)
                        <tr class="hover:bg-gray-100 border border-slate-300 items-center">
                            <!-- Select Checkbox -->
                            <td class="border border-slate-300 p-2">
                                <input type="checkbox" class="form-checkbox">
                            </td>

                            <!-- User Data -->
                            <td class="border border-slate-300">{{ $validator['username'] }}</td>
                            <td class="border border-slate-300">{{ $validator['password'] }}</td>
                            <td class="border border-slate-300">{{ $validator->city ? $validator->city->name : 'Tidak Diketahui'  }}</td>
                            <td class="border border-slate-300">{{ $validator['last_active'] }}</td>

                            <!-- Action Buttons -->
                            <td class="flex justify-center gap-2">
                                <button type="button" class="text-gray-500 hover:text-gray-700"
                                    onclick="alert('User Info: {{ $validator['username'] }}')">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 4C0 1.79086 1.79086 0 4 0H36C38.2091 0 40 1.79086 40 4V36C40 38.2091 38.2091 40 36 40H4C1.79086 40 0 38.2091 0 36V4Z"
                                            fill="#E2E8F0" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15 10C12.2386 10 10 12.2386 10 15V25C10 27.7614 12.2386 30 15 30H25C27.7614 30 30 27.7614 30 25V15C30 12.2386 27.7614 10 25 10H15ZM20 15C19.4477 15 19 15.4477 19 16C19 16.5523 19.4477 17 20 17H20.01C20.5623 17 21.01 16.5523 21.01 16C21.01 15.4477 20.5623 15 20.01 15H20ZM21 20C21 19.4477 20.5523 19 20 19C19.4477 19 19 19.4477 19 20V24C19 24.5523 19.4477 25 20 25C20.5523 25 21 24.5523 21 24V20Z"
                                            fill="#94A3B8" />
                                    </svg>


                                </button>
                                <!-- Edit Button -->
                                <a href="{{ route('admin.sales.edit', $validator['id']) }}"
                                    class="text-blue-500 hover:text-blue-700">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 4C0 1.79086 1.79086 0 4 0H36C38.2091 0 40 1.79086 40 4V36C40 38.2091 38.2091 40 36 40H4C1.79086 40 0 38.2091 0 36V4Z"
                                            fill="#E0F2FE" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23.9088 11.8735C24.4681 11.3142 25.2267 11 26.0176 11C26.4093 11 26.7971 11.0771 27.1589 11.227C27.5208 11.3769 27.8496 11.5966 28.1265 11.8735C28.4034 12.1505 28.6231 12.4792 28.773 12.8411C28.9229 13.2029 29 13.5907 29 13.9824C29 14.374 28.9229 14.7619 28.773 15.1237C28.6231 15.4855 28.4034 15.8143 28.1265 16.0913L27.0231 17.1947C26.6326 17.5852 25.9994 17.5852 25.6089 17.1947L22.8054 14.3911C22.4148 14.0006 22.4148 13.3675 22.8054 12.9769L23.9088 11.8735ZM21.3911 15.8054C21.0006 15.4148 20.3675 15.4148 19.9769 15.8054L13.0109 22.7714C12.3701 23.4122 11.9155 24.2151 11.6957 25.0943L11.0299 27.7575C10.9447 28.0982 11.0445 28.4587 11.2929 28.7071C11.5413 28.9555 11.9018 29.0553 12.2426 28.9701L14.9057 28.3043C15.7849 28.0846 16.5878 27.63 17.2286 26.9892L24.1947 20.0231C24.5852 19.6326 24.5852 18.9994 24.1947 18.6089L21.3911 15.8054Z"
                                            fill="#0369A1" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20 28C20 27.4477 20.4477 27 21 27L28 27C28.5523 27 29 27.4477 29 28C29 28.5523 28.5523 29 28 29L21 29C20.4477 29 20 28.5523 20 28Z"
                                            fill="#0369A1" />
                                    </svg>


                                </a>

                                <!-- Delete Button -->
                                <button onclick="openDeleteModal()" type="submit"
                                    class="text-red-500 hover:text-red-700">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 4C0 1.79086 1.79086 0 4 0H36C38.2091 0 40 1.79086 40 4V36C40 38.2091 38.2091 40 36 40H4C1.79086 40 0 38.2091 0 36V4Z"
                                            fill="#FFE4E6" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.1111 10C17.3747 10 16.7778 10.597 16.7778 11.3333C16.7778 11.7015 16.4793 12 16.1111 12L16 12L13 12C12.4477 12 12 12.4477 12 13C12 13.5523 12.4477 14 13 14L16 14H16.1111L23.8873 14C23.8878 14 23.8884 14 23.8889 14H24L27 14C27.5523 14 28 13.5523 28 13C28 12.4477 27.5523 12 27 12H23.8881C23.5203 11.9996 23.2222 11.7013 23.2222 11.3333C23.2222 10.597 22.6253 10 21.8889 10H18.1111Z"
                                            fill="#F43F5E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14 16C13.7204 16 13.4535 16.1171 13.2641 16.3229C13.0748 16.5287 12.9802 16.8044 13.0035 17.083L13.7742 26.3322C13.947 28.4054 15.68 30 17.7604 30H22.2396C24.32 30 26.053 28.4054 26.2258 26.3322L26.9965 17.083C27.0198 16.8044 26.9252 16.5287 26.7359 16.3229C26.5465 16.1171 26.2797 16 26 16H14Z"
                                            fill="#F43F5E" />
                                    </svg>
                                </button>

                                <!-- Info Button -->

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <div id="modal-sales" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
        onclick="closeModal(event)">
        <div class="bg-frost-white rounded-lg p-5 font-poppins flex flex-col gap-3 max-w-4xl w-full mx-auto">
            <div>
                <h1 class="font-bold text-4xl">Tambah Akun Validator</h1>
                <p>Isi data di bawah untuk menambahkan validator</p>
            </div>
            <div class="border border-b-slate-200"></div>
            <form action="{{ route('admin.validator.create') }}" method="POST" class="flex flex-col gap-3">
                @csrf
                <x-textfield name="name" label="Nama Lengkap" placeholder="Masukkan nama lengkap anda" />
                <x-textfield type="number" name="number" label="Nomor Telepon/Whatsapp Aktif"
                    placeholder="+62 000 0000 0000" />
                <x-textarea name="address" label="Alamat"
                    placeholder="Contoh: Jl. Danau Toba, Kec. Kedung Kandang, Kota Malang" />
                <x-textfield name="place" label="Kota Penempatan" placeholder="Masukkan Nama Kota Anda" />
                <x-textfield name="username" label="Username" placeholder="Masukkan Username anda" />
                <x-textfield name="password" label="Password" placeholder="Masukkan Password anda" type="password" />
                <div class="w-full flex gap-4 justify-end">
                    <x-button type="button" color="white" onclick="closeModal()">Cancel</x-button>
                    <x-button type="submit">Tambah Validator</x-button>
                </div>
            </form>
        </div>
    </div>
    <div id="modal-delete"
        class="hidden fixed inset-0 flex items-center text-center justify-center bg-black bg-opacity-50"
        onclick="closeDeleteModal(event)">
        <div class="bg-white rounded-lg p-5 font-poppins flex flex-col gap-3 max-w-4xl w-full mx-auto">
            <h1 class="text-5xl font-bold">Apakah Anda Yakin Ingin Menghapus Akun Validator Ini?</h1>
            <p class="text-xl">Jika sudah yakin bisa klik Hapus Akun Validator, jika belum yakin bisa klik Batal</p>
            <div class="flex justify-center gap-4">
                <x-button color="white" onclick="closeDeleteModal()">Batal</x-button>
                <x-button color="red">Hapus Akun Validator</x-button>
            </div>
        </div>
    </div>
    <script>
        // Function to open the modal
        function openModal() {
            const modal = document.getElementById('modal-sales');
            modal.classList.remove('hidden');
        }

        // Function to close the modal
        function closeModal(event) {
            const modal = document.getElementById('modal-sales');

            // Check if event is triggered by background click or direct button click
            if (!event || event.target === modal) {
                modal.classList.add('hidden');
            }
        }

        function openDeleteModal() {
            const modal = document.getElementById('modal-delete');
            modal.classList.remove('hidden');
        }

        function closeDeleteModal(event) {
            const modal = document.getElementById('modal-delete');

            // Check if event is triggered by background click or direct button click
            if (!event || event.target === modal) {
                modal.classList.add('hidden');
            }
        }
    </script>
</x-admin-layout>
