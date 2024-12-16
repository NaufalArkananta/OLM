<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ownerController extends Controller
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
        ];

        return view("admin.owner.data-sales", compact("data_property"));
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
        return view("admin.owner.data-sales-create");
    }
}
