<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(){
        $recomendation_property = [
        [
            "name" => "Rumah mewah Gunung Buring",
            "type" => "Rumah",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "img/apartement-dummy.jpg"
        ],
        [
            "name" => "Kos minimalis 14 Kamar",
            "type" => "Kost",
            "price" => "Rp 3.9 Miliar",
            "location" => "Kota Batu, Malang Raya",
            "image" => "img/villa-dummy.jpg"
        ],
        [
            "name" => "Villa Megah Kota Batu",
            "type" => "Villa",
            "price" => "Rp 3.8 Miliar",
            "location" => "Kota Batu, Malang Raya",
            "image" => "img/apartement-dummy.jpg"
        ],
        [
            "name" => "Rumah minimalis siap tinggal Madyopuro",
            "type" => "Rumah",
            "price" => "Rp 870.8 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "img/apartement-dummy.jpg"
        ],
        [
            "name" => "Rumah mewah Gunung Buring",
            "type" => "Rumah",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "img/apartement-dummy.jpg"
        ],
        [
            "name" => "Kos minimalis 14 Kamar",
            "type" => "Kost",
            "price" => "Rp 3.9 Miliar",
            "location" => "Kota Batu, Malang Raya",
            "image" => "img/villa-dummy.jpg"
        ],
        [
            "name" => "Villa Megah Kota Batu",
            "type" => "Villa",
            "price" => "Rp 3.8 Miliar",
            "location" => "Kota Batu, Malang Raya",
            "image" => "img/apartement-dummy.jpg"
        ],
        [
            "name" => "Rumah minimalis siap tinggal Madyopuro",
            "type" => "Rumah",
            "price" => "Rp 870.8 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "img/apartement-dummy.jpg"
        ],
    ];

    return view("home", compact("recomendation_property"));
}
}

?>
