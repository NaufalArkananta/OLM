<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class propertiController extends Controller
{
    public function index(){
        $data_property = [
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
    ];
    return view("properti", compact("data_property"));
    }
    public function wishlist(){
        $data_property = [
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
        "name" => "Villa elegan Gunung Buring",
        "type" => "Villa",
        "price" => "Rp 950.5 Juta",
        "location" => "Kota Malang, Malang Raya",
        "image" => "img/apartement-dummy.jpg",
        "sales_role" => "Public Sales",
        "sales_name" => "Roberto Santoso",
        "sales_phone" => "+62 855-7749-8231",
        "sales_pic" => "img/sales_img_dummy.jpg"
        ],
    ];
    return view("wishlist", compact("data_property"));
    }

    public function detail($id)
{
    $data_property = [
        [
            "name" => "Villa elegan Gunung Buring",
            "type" => "Villa",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "img/sales_img_dummy.jpg"
        ],
        [
            "name" => "Villa elegan Gunung Buring",
            "type" => "Villa",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "img/sales_img_dummy.jpg"
        ],
    ];

    if (!isset($data_property[$id])) {
        abort(404, "Properti tidak ditemukan.");
    }

    $property = $data_property[$id];

    return view('detail-properti', compact('property'));
}

}