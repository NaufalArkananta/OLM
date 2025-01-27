<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use App\Models\PropertyCategory;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        return view('admin.agen.dashboard'); // Ganti dengan view yang sesuai
    }

    public function create()
    {
        // Ambil data kategori properti dari database
        $propertyCategories = PropertyCategory::all();
        // Ambil data fasilitas internal dan eksternal
        $internalFacilities = Facilities::where('type', 'internal')->get();
        $externalFacilities = Facilities::where('type', 'external')->get();
    
        // Kirim data ke view
        return view('admin.agen.prop-tambah', [
            'propertyCategories' => $propertyCategories,
            'internalFacilities' => $internalFacilities,
            'externalFacilities' => $externalFacilities,
        ]);
    }
}