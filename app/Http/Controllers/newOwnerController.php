<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newOwnerController extends Controller
{
    public function index()
    {
        return view('admin.owner.dashboard'); // Ganti dengan view yang sesuai
    }

    public $data_property = [
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
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12"
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
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12"
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
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12"
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
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12"
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
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12"
            ],
    ];

    public function activeProp() {
        $data_property = $this->data_property;
        return view('admin.owner.prop-active', compact("data_property"));
    }
    public function selledProp() {
        $data_property = $this->data_property;
        return view('admin.owner.prop-selled', compact("data_property"));
    }

    public function needValidateProp() {
        $data_property = $this->data_property;
        return view('admin.owner.prop-validate', compact("data_property"));
    }

    public function tableProp() {
        $data_property = $this->data_property;
        return view('admin.owner.table-prop', compact("data_property"));
    }
    public function settings() {
        return view('admin.owner.settings');
    }
}
