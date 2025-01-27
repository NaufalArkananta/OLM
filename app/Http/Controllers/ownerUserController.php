<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ownerUserController extends Controller
{
    public function indexS()
    {
        $sales = User::with('city')->where('role', 'agent')->get();
        $cities = City::orderBy('name')->get();
        
        return view("admin.owner.data-sales", 
        [
            'sales' => $sales,
            'cities' => $cities
        ]);
    }

    public function editS($id)
    {
        // Edit logic here
        return "Edit user with ID: $id";
    }

    public function destroyS($id)
    {
        // Delete logic here
        return "Delete user with ID: $id";
    }

    public function createS(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string', //|regex:/^\+62[0-9]{10,14}$/
            'address' => 'required|string|max:500', // Validasi alamat
            'place' => 'required|string|exists:cities,name', // Validasi nama kota
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Mencari city_id berdasarkan nama kota
        $city = City::where('name', $request->place)->first();

        // Buat pengguna baru
        User::create([
            'name' => $request->name,
            'phone_number' => $request->number,
            'address' => $request->address, // Menyimpan alamat
            'city_id' => $city->id, // Mengaitkan dengan city_id
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'agent',
        ]);

        return redirect()->route('admin.sales.index')->with('success', 'User  created successfully.');
    }

    public function show($id)
    {
        $agent = User::with('city')->find($id); // Mengambil agen beserta data kota
    
        if ($agent) {
            return response()->json($agent); // Mengembalikan data agen dalam format JSON
        }
    
        return response()->json(['error' => 'Agent not found'], 404);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'edit-name' => 'nullable|string|max:255',
            'edit-number' => 'nullable|string|max:15', // Sesuaikan dengan format nomor telepon
            'edit-address' => 'nullable|string|max:255',
            'edit-username' => 'nullable|string|max:50',
            'edit-city' => 'nullable|string|max:255',
        ]);

        // Temukan agen berdasarkan ID
        $agent = User::find($id);

        if (!$agent) {
            return response()->json(['error' => 'Agent not found'], 404);
        }

        // Cari kota berdasarkan nama
        $cityName = $request->input('edit-city');
        $city = City::where('name', $cityName)->first(); // Ganti 'name' dengan kolom yang sesuai di tabel cities

        if ($city) {
            $agent->city_id = $city->id; // Ambil ID kota
        } else {
            return response()->json(['error' => 'City not found'], 404);
        }

        // Update data agen
        $agent->name = $request->input('edit-name');
        $agent->phone_number = $request->input('edit-number');
        $agent->address = $request->input('edit-address');
        $agent->username = $request->input('edit-username');

        // Simpan perubahan
        $agent->save();
        
        $role = $agent->role;

        return response()->json(['success' => 'Updated successfully']);
        
    }
    public function indexV()
    {
        $validators = User::with('city')->where('role', 'validator')->get();
        $cities = City::orderBy('name')->get();
            
        return view("admin.owner.data-validator", 
        [
            'validators' => $validators,
            'cities' => $cities
        ]);
    }

    public function editV($id)
    {
        // Edit logic here
        return "Edit user with ID: $id";
    }

    public function destroy($id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User  not found'], 404);
        }

        // Hapus pengguna
        $user->delete();

        return response()->json(['success' => 'User  deleted successfully']);
    }

    public function createV(Request $request)
    {
                // Validasi input
                $request->validate([
                    'name' => 'required|string|max:255',
                    'phone_number' => 'required|string', //|regex:/^\+62[0-9]{10,14}$/
                    'address' => 'required|string|max:500', // Validasi alamat
                    'place' => 'required|string|exists:cities,name', // Validasi nama kota
                    'username' => 'required|string|max:255|unique:users',
                    'password' => 'required|string|min:8',
                ]);
        
                // Mencari city_id berdasarkan nama kota
                $city = City::where('name', $request->place)->first();
        
                // Buat pengguna baru
                User::create([
                    'name' => $request->name,
                    'phone_number' => $request->number,
                    'address' => $request->address, // Menyimpan alamat
                    'city_id' => $city->id, // Mengaitkan dengan city_id
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'role' => 'validator',
                ]);
        
                return redirect()->route('admin.validator.index')->with('success', 'User  created successfully.');
    }
}
