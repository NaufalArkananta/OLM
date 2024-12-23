<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validatorController extends Controller
{
    public function index()
    {
        return view('admin.validator.dashboard');
    }

    public $data_property = [
        [
            "name" => "Villa elegan Gunung Buring",
            "type" => "Villa",
            "price" => "Rp 950.5 Juta",
            "location" => "Kota Malang, Malang Raya",
            "image" => "img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12",
            "request_date" => "2022-12-12"
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
            "sales_pic" => "img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12",
            "request_date" => "2022-12-12"
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
            "sales_pic" => "img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12",
            "request_date" => "2022-12-12"
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
            "sales_pic" => "img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12",
            "request_date" => "2022-12-12"
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
            "sales_pic" => "img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12",
            "request_date" => "2022-12-12"
            ],
    ];

    public function validated()
    {
        return view('admin.validator.prop-valid', ['data_property' => $this->data_property]);
    }

    public function needValidate()
    {
        return view('admin.validator.prop-need-valid', ['data_property' => $this->data_property]);
    }
    //
}
