<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ownerUserController extends Controller
{
    public $data_sales = [
        [
            "id" => 1,
            "username" => "Roberto Santoso",
            "password" => "123",
            "penempatan" => "Malang",
            "last_active" => "2021-12-12",
        ],
        [
            "id" => 2,
            "username" => "Dewi Sari",
            "password" => "456",
            "penempatan" => "Surabaya",
            "last_active" => "2022-01-10",
        ],
        [
            "id" => 3,
            "username" => "Ahmad Faisal",
            "password" => "789",
            "penempatan" => "Jakarta",
            "last_active" => "2022-02-15",
        ],
        [
            "id" => 4,
            "username" => "Siti Aminah",
            "password" => "abc",
            "penempatan" => "Bandung",
            "last_active" => "2022-03-20",
        ],
        [
            "id" => 5,
            "username" => "Budi Hartono",
            "password" => "def",
            "penempatan" => "Yogyakarta",
            "last_active" => "2022-04-25",
        ],
        [
            "id" => 6,
            "username" => "Rina Wijaya",
            "password" => "ghi",
            "penempatan" => "Semarang",
            "last_active" => "2022-05-30",
        ],
        [
            "id" => 7,
            "username" => "Andi Pratama",
            "password" => "jkl",
            "penempatan" => "Bali",
            "last_active" => "2022-06-15",
        ],
        [
            "id" => 8,
            "username" => "Lina Susanti",
            "password" => "mno",
            "penempatan" => "Medan",
            "last_active" => "2022-07-10",
        ],
        [
            "id" => 9,
            "username" => "Bukti Sales",
            "password" => "mno",
            "penempatan" => "Medan",
            "last_active" => "2022-07-10",
        ]
    ];
    public $data_validator = [
        [
            "id" => 1,
            "username" => "Roberto Santoso",
            "password" => "123",
            "penempatan" => "Malang",
            "last_active" => "2021-12-12",
        ],
        [
            "id" => 2,
            "username" => "Dewi Sari",
            "password" => "456",
            "penempatan" => "Surabaya",
            "last_active" => "2022-01-10",
        ],
        [
            "id" => 3,
            "username" => "Ahmad Faisal",
            "password" => "789",
            "penempatan" => "Jakarta",
            "last_active" => "2022-02-15",
        ],
        [
            "id" => 4,
            "username" => "Siti Aminah",
            "password" => "abc",
            "penempatan" => "Bandung",
            "last_active" => "2022-03-20",
        ],
        [
            "id" => 5,
            "username" => "Budi Hartono",
            "password" => "def",
            "penempatan" => "Yogyakarta",
            "last_active" => "2022-04-25",
        ],
        [
            "id" => 6,
            "username" => "Rina Wijaya",
            "password" => "ghi",
            "penempatan" => "Semarang",
            "last_active" => "2022-05-30",
        ],
        [
            "id" => 7,
            "username" => "Andi Pratama",
            "password" => "jkl",
            "penempatan" => "Bali",
            "last_active" => "2022-06-15",
        ],
        [
            "id" => 8,
            "username" => "Lina Susanti",
            "password" => "mno",
            "penempatan" => "Medan",
            "last_active" => "2022-07-10",
        ],
        [
            "id" => 9,
            "username" => "Bukti Validators",
            "password" => "mno",
            "penempatan" => "Medan",
            "last_active" => "2022-07-10",
        ]
    ];

    public function indexS()
    {
        $sales = User::with('city')->where('role', 'agent')->get();
        return view("admin.owner.data-sales", compact("sales"));
    }

    public function editS($id)
    {
        // Edit logic here
        return "Edit user with ID: $id";
    }

    public function destroyS($id)
    {
        // Delete logic here
        return "Delete user with ID: $id";
    }

    public function createS(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string', //|regex:/^\+62[0-9]{10,14}$/
            'address' => 'required|string|max:500', // Validasi alamat
            'place' => 'required|string|exists:cities,name', // Validasi nama kota
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Mencari city_id berdasarkan nama kota
        $city = City::where('name', $request->place)->first();

        // Buat pengguna baru
        User::create([
            'name' => $request->name,
            'number' => $request->number,
            'address' => $request->address, // Menyimpan alamat
            'city_id' => $city->id, // Mengaitkan dengan city_id
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'agent',
        ]);

        return redirect()->route('admin.sales.index')->with('success', 'User  created successfully.');
    }
    public function indexV()
    {
        $validators = User::with('city')->where('role', 'validator')->get();
        return view("admin.owner.data-validator", compact("validators"));
    }

    public function editV($id)
    {
        // Edit logic here
        return "Edit user with ID: $id";
    }

    public function destroyV($id)
    {
        // Delete logic here
        return "Delete user with ID: $id";
    }

    public function createV(Request $request)
    {
                // Validasi input
                $request->validate([
                    'name' => 'required|string|max:255',
                    'number' => 'required|string', //|regex:/^\+62[0-9]{10,14}$/
                    'address' => 'required|string|max:500', // Validasi alamat
                    'place' => 'required|string|exists:cities,name', // Validasi nama kota
                    'username' => 'required|string|max:255|unique:users',
                    'password' => 'required|string|min:8',
                ]);
        
                // Mencari city_id berdasarkan nama kota
                $city = City::where('name', $request->place)->first();
        
                // Buat pengguna baru
                User::create([
                    'name' => $request->name,
                    'number' => $request->number,
                    'address' => $request->address, // Menyimpan alamat
                    'city_id' => $city->id, // Mengaitkan dengan city_id
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'role' => 'validator',
                ]);
        
                return redirect()->route('admin.sales.index')->with('success', 'User  created successfully.');
    }
}
