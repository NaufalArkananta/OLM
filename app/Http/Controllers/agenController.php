<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class agenController extends Controller
{
    //
    public function valid()
    {
        $data_property = Property::where('status', 'verified')->with(['category', 'media', 'certificate', 'details'])->get();
        return view("admin/agen/prop-active", compact("data_property"));
    }
    public function notValid() {
        $data_property = Property::where('status', 'not verified')->with(['category', 'media', 'certificate', 'details'])->get();
        return view("admin/agen/prop-not-valid", compact("data_property"));
    }
    public function third() {
        $data_property = [
            [
            "name" => "Villa elegan Gunung Buring",
            "type" => "Villa",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "/img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "/img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta"
            ],
            [
            "name" => "Villa elegan Gunung Buring",
            "type" => "Villa",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "/img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "/img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta"
            ],
            [
            "name" => "Villa elegan Gunung Buring",
            "type" => "Villa",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "/img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "/img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta"
            ],
            [
            "name" => "Villa elegan Gunung Buring",
            "type" => "Villa",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "/img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "/img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta"
            ],
            [
            "name" => "Villa elegan Gunung Buring",
            "type" => "Villa",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "/img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "/img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta"
            ],
        ];
        return view("admin/agen/prop-selled", compact("data_property"));
    }
}
