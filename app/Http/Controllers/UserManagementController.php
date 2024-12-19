<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    // Constructor untuk middleware
    // public function __construct()
    // {
    //     $this->middleware('auth'); // Pastikan pengguna sudah login
    //     $this->middleware('role:owner'); // Pastikan pengguna adalah owner
    // }

    // Menampilkan daftar semua pengguna
    public function index()
    {
        $users = User::all(); // Ambil semua pengguna
    }

    // Menampilkan daftar pengguna dengan role 'agent'
    public function agents()
    {
        $agents = User::where('role', 'agent')->get(); // Ambil pengguna dengan role 'agent'
        return view('admin.owner.data-sales', compact('agents')); // Tampilkan view dengan daftar agent
    }

    // Menampilkan daftar pengguna dengan role 'validator'
    public function validators()
    {
        $validators = User::where('role', 'validator')->get(); // Ambil pengguna dengan role 'validator'
        return view('admin.owner.data-validator', compact('validators')); // Tampilkan view dengan daftar validator
    }

    // Menampilkan form untuk membuat pengguna baru
    // public function create()
    // {
    //     return view('users.create'); // Tampilkan form pembuatan pengguna
    // }

    // Menyimpan pengguna baru
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:agent,validator', // Pastikan role valid
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('#')->with('success', 'User  created successfully.');
    }

    // Menampilkan form untuk mengedit pengguna
    public function edit(User $user)
    {
        return view('#', compact('user')); // Tampilkan form edit pengguna
    }

    // Memperbarui pengguna
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8', // Password bisa kosong
            'role' => 'required|string|in:user,admin,owner,agent,validator',
        ]);

        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password); // Hash password jika diisi
        }

        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User  updated successfully.');
    }

    // Menghapus pengguna
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User  deleted successfully.');
    }
}