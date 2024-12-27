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
            "image" => "/img/apartement-dummy.jpg",
            "sales_role" => "Public Sales",
            "sales_name" => "Roberto Santoso",
            "sales_phone" => "+62 855-7749-8231",
            "sales_pic" => "/img/sales_img_dummy.jpg",
            "komisi" => "Rp 5.5 Juta",
            "komisi_web" => "Rp 5.6 Juta",
            "validate_date" => "2022-12-12",
            "request_date" => "2022-12-12",
            'nama_daerah' => 'Kota Malang',
            'nama_kawasan' => 'Gunung Buring',
            'deskripsi' => 'Villa elegan dengan pemandangan indah di Gunung Buring',
            'luas_tanah' => '500 m2',
            'luas_bangunan' => '300 m2',
            'daya_listrik' => '2200 watt',
            'jumlah_lantai' => '2',
            'jumlah_kamar_tidur' => '4',
            'jumlah_kamar_mandi' => '3',
            'fasilitas_inter' => ['AC', 'Water Heater', 'Kitchen Set'],
            'fasilitas_exter' => ['Kolam Renang', 'Taman', 'Garasi'],
            'dokumentasi' => ['/img/dokumentasi1.jpg', '/img/dokumentasi2.jpg'],
            'sertifikat' => 'SHM',
            'tipe_sertifikat' => 'Hak Milik',
            'tipe_perjanjian' => 'Jual Beli',
            ],
            [
                "name" => "Rumah Mewah di Jakarta",
                "type" => "Rumah",
                "price" => "Rp 2.5 Miliar",
                "location" => "Jakarta Selatan, DKI Jakarta",
                "image" => "/img/rumah-dummy.jpg",
                "sales_role" => "Exclusive Sales",
                "sales_name" => "Andi Wijaya",
                "sales_phone" => "+62 812-3456-7890",
                "sales_pic" => "/img/sales_img_dummy2.jpg",
                "komisi" => "Rp 10 Juta",
                "komisi_web" => "Rp 10.5 Juta",
                "validate_date" => "2022-11-10",
                "request_date" => "2022-11-05",
                'nama_daerah' => 'Jakarta Selatan',
                'nama_kawasan' => 'Kebayoran Baru',
                'deskripsi' => 'Rumah mewah dengan desain modern di Kebayoran Baru',
                'luas_tanah' => '600 m2',
                'luas_bangunan' => '400 m2',
                'daya_listrik' => '3500 watt',
                'jumlah_lantai' => '2',
                'jumlah_kamar_tidur' => '5',
                'jumlah_kamar_mandi' => '4',
                'fasilitas_inter' => ['AC', 'Water Heater', 'Kitchen Set', 'Home Theater'],
                'fasilitas_exter' => ['Kolam Renang', 'Taman', 'Garasi', 'Gazebo'],
                'dokumentasi' => ['/img/dokumentasi3.jpg', '/img/dokumentasi4.jpg'],
                'sertifikat' => 'SHM',
                'tipe_sertifikat' => 'Hak Milik',
                'tipe_perjanjian' => 'Jual Beli',
            ],
            [
                "name" => "Apartemen Modern di Surabaya",
                "type" => "Apartemen",
                "price" => "Rp 1.2 Miliar",
                "location" => "Surabaya, Jawa Timur",
                "image" => "/img/apartemen-dummy.jpg",
                "sales_role" => "Public Sales",
                "sales_name" => "Budi Santoso",
                "sales_phone" => "+62 813-9876-5432",
                "sales_pic" => "/img/sales_img_dummy3.jpg",
                "komisi" => "Rp 7 Juta",
                "komisi_web" => "Rp 7.2 Juta",
                "validate_date" => "2022-10-15",
                "request_date" => "2022-10-10",
                'nama_daerah' => 'Surabaya',
                'nama_kawasan' => 'Dukuh Pakis',
                'deskripsi' => 'Apartemen modern dengan fasilitas lengkap di Dukuh Pakis',
                'luas_tanah' => '200 m2',
                'luas_bangunan' => '150 m2',
                'daya_listrik' => '2200 watt',
                'jumlah_lantai' => '1',
                'jumlah_kamar_tidur' => '3',
                'jumlah_kamar_mandi' => '2',
                'fasilitas_inter' => ['AC', 'Water Heater', 'Kitchen Set'],
                'fasilitas_exter' => ['Kolam Renang', 'Taman', 'Parkir'],
                'dokumentasi' => ['/img/dokumentasi5.jpg', '/img/dokumentasi6.jpg'],
                'sertifikat' => 'SHM',
                'tipe_sertifikat' => 'Hak Milik',
                'tipe_perjanjian' => 'Jual Beli',
            ],
            [
                "name" => "Ruko Strategis di Bandung",
                "type" => "Ruko",
                "price" => "Rp 3 Miliar",
                "location" => "Bandung, Jawa Barat",
                "image" => "/img/ruko-dummy.jpg",
                "sales_role" => "Exclusive Sales",
                "sales_name" => "Citra Dewi",
                "sales_phone" => "+62 814-5678-1234",
                "sales_pic" => "/img/sales_img_dummy4.jpg",
                "komisi" => "Rp 15 Juta",
                "komisi_web" => "Rp 15.5 Juta",
                "validate_date" => "2022-09-20",
                "request_date" => "2022-09-15",
                'nama_daerah' => 'Bandung',
                'nama_kawasan' => 'Cihampelas',
                'deskripsi' => 'Ruko strategis di pusat kota Bandung, cocok untuk usaha',
                'luas_tanah' => '300 m2',
                'luas_bangunan' => '250 m2',
                'daya_listrik' => '4400 watt',
                'jumlah_lantai' => '3',
                'jumlah_kamar_tidur' => '0',
                'jumlah_kamar_mandi' => '2',
                'fasilitas_inter' => ['AC', 'Water Heater'],
                'fasilitas_exter' => ['Parkir', 'Keamanan 24 Jam'],
                'dokumentasi' => ['/img/dokumentasi7.jpg', '/img/dokumentasi8.jpg'],
                'sertifikat' => 'SHM',
                'tipe_sertifikat' => 'Hak Milik',
                'tipe_perjanjian' => 'Jual Beli',
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
