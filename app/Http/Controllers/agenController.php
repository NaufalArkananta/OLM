<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class agenController extends Controller
{
    //
    public function valid()
    {
        $data_property = Property::whereHas('sales', function ($query) {
            $query->where('status', 'verified');
        })
        ->whereHas('validator', function ($query) {
            $query->where('status', 'approved');
        })
        ->with(['category', 'media', 'certificate', 'details'])->get();

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

    public function notif(Request $request) {
        // Contoh: ambil data notifikasi dari model Notif, relasi agen, dan paginasi
        $data_notif = [
            [
                "title" => "Notifikasi 1",
                "message" => "Pesan notifikasi 1",
                "image" => "/img/apartement-dummy.jpg",
                "created_at" => now()->subDays(1),
            ],
            [
                "title" => "Notifikasi 2",
                "message" => "Pesan notifikasi 2",
                "image" => "/img/apartement-dummy.jpg",
                "created_at" => now()->subDays(2),
            ],
            [
                "title" => "Notifikasi 3",
                "message" => "Pesan notifikasi 3",
                "image" => "/img/apartement-dummy.jpg",
                "created_at" => now()->subDays(3),
            ],
            [
                "title" => "Notifikasi 4",
                "message" => "Pesan notifikasi 4",
                "image" => "/img/apartement-dummy.jpg",
                "created_at" => now()->subDays(4),
            ],
            [
                "title" => "Notifikasi 5",
                "message" => "Pesan notifikasi 5",
                "image" => "/img/apartement-dummy.jpg",
                "created_at" => now()->subDays(5),
            ],
            [
                "title" => "Notifikasi 6",
                "message" => "Pesan notifikasi 6",
                "image" => "/img/apartement-dummy.jpg",
                "created_at" => now()->subDays(6),
            ],
        ];

        $userId = session('user_id');

        if (!$userId) {
            return response()->json([
                'status' => 'error',
                'message' => 'Session agen tidak ditemukan. Pastikan Anda sudah login.',
            ], 401);
        }

        $user = User::find($userId);

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Agen dengan ID ini tidak ditemukan di sistem.',
            ], 404);
        }

        $notifications = Notifications::where('user_id', $userId)->orderBy('created_at', 'desc')->get();


        return view("admin.agen.notif", compact("notifications"));
    }
}
