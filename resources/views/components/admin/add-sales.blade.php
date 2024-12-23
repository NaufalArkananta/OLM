        <section class="bg-frost-white rounded-lg p-5 font-poppins flex flex-col gap-3 max-w-4xl w-full mx-auto">
            <div>
                <h1 class="font-bold text-4xl">Tambah Akun Sales</h1>
                <p>Isi data dibawah untuk menambahkan sales</p>
            </div>
            <div class="border border-b-slate-200"></div>
            <form action="" method="POST" class="flex flex-col gap-3">
                <x-textfield name="name" label="Nama Lengkap" placeholder="Masukkan nama lengkap anda" />
                <x-textfield type="number" name="number" label="Nomor Telepon/Whatsapp Aktif"
                    placeholder="+62 000 0000 0000" />
                <x-textarea name="address" label="Alamat"
                    placeholder="Contoh: Jl. Danau Toba, Kec. Kedung Kandang, Kota Malang" />
                <x-textfield name="place" label="Kota Penempatan" placeholder="Masukkan Nama Kota Anda" />
                <x-textfield name="username" label="Username" placeholder="Masukkan Username anda" />
                <x-textfield name="password" label="Password" placeholder="Masukkan Password anda" type="password" />
                <div class="w-full flex gap-4 justify-end">
                    <x-button type="cancel" color="white" onclick="closeModal()">Cancel</x-button>
                    <x-button type="submit">Tambah Sales</x-button>
                </div>
            </form>

        </section>
