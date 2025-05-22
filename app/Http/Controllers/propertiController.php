<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PropertyMedia;
use App\Models\PropertySales;
use App\Models\DetailProperty;
use App\Models\PropertyFacilities;
use Illuminate\Support\Facades\DB;
use App\Models\PropertyCertificates;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Validator;

class propertiController extends Controller
{
public function index()
{
    $userId = session('user_id'); // ambil id user dari session

    $data_property = Property::whereHas('sales', function ($query) {
        $query->where('status', 'verified');
    })
    ->whereHas('validator', function ($query) {
        $query->where('status', 'approved');
    })
    ->with([
        'category',
        'media',
        'certificate',
        'details',
        'sales.agent'
    ])->get();

    // Ambil wishlist property_id milik user
    $wishlistPropertyIds = Wishlist::where('user_id', $userId)->pluck('property_id')->toArray();

    return view('properti', compact('data_property', 'wishlistPropertyIds'));
}

    public function create()
    {
        return view('create-properti');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'region' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'area' => 'nullable|string|max:255',
            'agreement_type' => 'required|in:BELI,SEWA',
            'category_id' => 'required|exists:property_categories,id',
            'property_owner_name' => 'required|string|max:255',
            'property_owner_number_phone' => 'required|string|regex:/^[0-9]+$/|min:10|max:15',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'land_area' => 'required|numeric|min:0',
            'building_area' => 'required|numeric|min:0',
            'electricity_power' => 'required|numeric|min:0',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'number_of_floors' => 'required|integer|min:0',
            'fasilitas_internal' => 'nullable|array',
            'fasilitas_internal.*' => 'exists:facilities,id',
            'fasilitas_external' => 'nullable|array',
            'fasilitas_external.*' => 'exists:facilities,id',
            'dokumentasi' => 'nullable|array', // dokumentasi (foto/video)
            'dokumentasi.*' => 'file|mimes:jpeg,png,jpg,gif,mp4,mov|max:10240', // Maksimal 10MB
            'certificate_type' => 'required|in:shm,hgm',
            'tipe_perjanjian' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:10240', 
        ]);
    
        // Jika validasi gagal, kembalikan error JSON
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422); // 422 adalah status code untuk Unprocessable Entity
        }

        if ($request->hasFile('dokumentasi')) {
            $files = $request->file('dokumentasi');
            if (!is_array($files)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'File dokumentasi harus dikirim dalam bentuk array.',
                ], 422);
            }
        }
    
        // Mulai transaksi database
        DB::beginTransaction();
        try {
            // Simpan data ke tabel `properties`
            $property = Property::create([
                'property_owner_name' => $request->property_owner_name,
                'property_owner_number_phone' => $request->property_owner_number_phone,
                'title' => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'price' => $request->price,
                'location' => $request->address,
                'agreement_type' => $request->agreement_type,
                'status'=> 'not verified',
            ]);
    
            // Simpan data ke tabel `property_details`
            $propertyDetail = DetailProperty::create([
                'property_id' => $property->id,
                'land_area' => $request->land_area,
                'building_area' => $request->building_area,
                'electricity_power' => $request->electricity_power,
                'number_of_floors' => $request->number_of_floors,
                'bedrooms' => $request->bedrooms,
                'bathrooms' => $request->bathrooms,
                'region' => $request->region,
                'address' => $request->address,
                'area' => $request->area,
            ]);
    
            // Simpan fasilitas internal ke tabel `property_facilities`
            if ($request->has('fasilitas_internal')) {
                foreach ($request->fasilitas_internal as $facilityId) {
                    PropertyFacilities::create([
                        'property_id' => $property->id,
                        'facility_id' => $facilityId,
                    ]);
                }
            }
    
            // Simpan fasilitas eksternal ke tabel `property_facilities`
            if ($request->has('fasilitas_external')) {
                foreach ($request->fasilitas_external as $facilityId) {
                    PropertyFacilities::create([
                        'property_id' => $property->id,
                        'facility_id' => $facilityId,
                    ]);
                }
            }

            if ($request->hasFile('dokumentasi')) {
                foreach ($request->file('dokumentasi') as $file) {
                    // Pastikan hanya memproses file yang valid
                    if ($file->isValid()) {
                        // Proses penyimpanan file dan data media
                        $mediaType = str_starts_with($file->getMimeType(), 'video') ? 'video' : 'photo';
            
                        // Lakukan validasi untuk batasan jumlah file
                        if ($mediaType === 'video') {
                            $existingVideo = PropertyMedia::where('property_id', $property->id)
                                ->where('media_type', 'video')
                                ->exists();
            
                            if ($existingVideo) {
                                DB::rollBack();
                                return response()->json([
                                    'status' => 'error',
                                    'message' => 'Hanya 1 video yang diizinkan per property.',
                                ], 422);
                            }
                        }
            
                        if ($mediaType === 'photo') {
                            $photoCount = PropertyMedia::where('property_id', $property->id)
                                ->where('media_type', 'photo')
                                ->count();
            
                            if ($photoCount >= 20) {
                                DB::rollBack();
                                return response()->json([
                                    'status' => 'error',
                                    'message' => 'Maksimal 20 foto yang diizinkan per property.',
                                ], 422);
                            }
                        }
            
                        // Simpan file
                        $originalName = $file->getClientOriginalName();
                        $randomString = Str::random(10);
                        $fileName = $randomString . '_' . $originalName;
                        $mediaPath = $file->storeAs("property_media/{$property->id}", $fileName, 'public');
            
                        // Simpan ke database
                        PropertyMedia::create([
                            'property_id' => $property->id,
                            'media_url' => $mediaPath,
                            'media_type' => $mediaType,
                        ]);
                    }
                }
            }

            $certificateType = $request->certificate_type;

            // Proses file sertifikat yang diunggah
            if ($request->hasFile('tipe_perjanjian')) {
                $file = $request->file('tipe_perjanjian');
    
                // Generate nama file baru
                $originalName = $file->getClientOriginalName();
                $randomString = Str::random(10);
                $fileName = $randomString . '_' . $originalName;
    
                // Simpan file ke storage dengan nama baru
                $filePath = $file->storeAs('certificates', $fileName, 'public');
    
                // Simpan informasi ke database (jika diperlukan)
                PropertyCertificates::create([
                    'property_id' => $property->id,
                    'certificate_type' => $certificateType,
                    'certificate_url' => $filePath,
                ]);
            }
    
            // Ambil agen ID dari session
            $userId = session('user_id');

            if (!$userId) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Session agen tidak ditemukan. Pastikan Anda sudah login.',
                ], 401);
            }

            // Cari user berdasarkan ID dari session
            $user = User::find($userId);

            if (!$user) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Agen dengan ID ini tidak ditemukan di sistem.',
                ], 404);
            }

            // Simpan ke tabel `property_sales`
            PropertySales::create([
                'property_id' => $property->id,
                'agent_id' => $userId,
                'commission' => 0,
                'sale_status' => 'in progress',
            ]);

            // Commit transaksi jika semua berhasil
            DB::commit();
    
            // Kembalikan respons redirect sukses
            return redirect()->route('properti.list.not-valid')->with('success', 'Properti berhasil ditambahkan.');

        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi error
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }   
    public function show($id)
    {
        $property = Property::where('id', $id)
            ->whereHas('sales', function ($query) {
                $query->where('status', 'verified');
            })
            ->whereHas('validator', function ($query) {
                $query->where('status', 'approved');
            })
            ->with([
                'category',
                'media',
                'certificate',
                'details',
                'sales.agent'
            ])
            ->firstOrFail(); // Ambil satu objek, bukan koleksi
    
        return view('detail-properti', compact('property'));
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('edit-properti', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'property_owner_name' => 'required|max:100',
            'property_owner_number_phone' => 'required|max:15',
            'title' => 'required|max:100',
            'category_id' => 'required|exists:property_categories,id',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'location' => 'required|max:255',
            'status' => 'required|in:not verified,verified,sold',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $property = Property::findOrFail($id);
        $property->update($request->all());

        return redirect()->route('properti.index')->with('success', 'Property updated successfully!');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('properti.index')->with('success', 'Property deleted successfully!');
    }

    public function wishlist()
{
    $userId = session('user_id');

    $data_property = Wishlist::where('user_id', $userId)
    ->whereHas('property.sales', function ($query) {
        $query->where('status', 'verified');
    })
    ->whereHas('property.validator', function ($query) {
        $query->where('status', 'approved');
    })
    ->with([
        'property.category',
        'property.media',
        'property.certificate',
        'property.details',
        'property.sales.agent'
    ])
    ->get();

    $wishlistPropertyIds = Wishlist::where('user_id', $userId)->pluck('property_id')->toArray();

    // Kirim data wishlist ke view
    return view('wishlist', compact('data_property', 'wishlistPropertyIds'));

    // $userId = session('user_id'); // Ambil user dari session

    // $wishlists = Wishlist::with([
    //     'property.category',
    //     'property.media',
    //     'property.certificate',
    //     'property.details',
    //     'property.sales.agent'
    // ])
    // ->where('user_id', $userId)
    // ->get();

    // // Map ke bentuk array yang bisa langsung dipakai di view
    // $data_property = $wishlists->map(function ($wishlist) {
    //     $property = $wishlist->property;

    //     return [
    //         'image' => $property->media[0]->media_url ?? 'img/default.jpg',
    //         'type' => $property->category->name ?? '-',
    //         'price' => 'Rp ' . number_format($property->price, 0, ',', '.'),
    //         'title' => $property->title,
    //         'location' => $property->location,
    //         'sales_name' => $property->sales->agent->name ?? '-',
    //         'sales_phone' => $property->sales->agent->phone ?? '-',
    //         'sales_pic' => $property->sales->agent->profile_picture ?? 'img/default-profile.jpg',
    //     ];
    // });

    // return view('wishlist', compact('data_property'));
}
}
