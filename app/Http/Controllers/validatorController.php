<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validatorController extends Controller
{
    public function index()
    {
        $data_property = [
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
            ]
        ];

        return view("admin.owner.data-validator", compact("data_property"));
    }

    public function edit($id)
    {
        // Edit logic here
        return "Edit user with ID: $id";
    }

    public function destroy($id)
    {
        // Delete logic here
        return "Delete user with ID: $id";
    }

    public function create()
    {
        return view("admin.owner.data-validator-create");
    }
}
