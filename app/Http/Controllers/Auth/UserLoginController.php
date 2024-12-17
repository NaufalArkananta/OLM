<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, periksa role pengguna
            $user = Auth::user();

            // Simpan data ke session
            session([
                'user_id' => $user->id,
                'role' => $user->role,
                'is_logged_in' => true, // Status login
            ]);

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'number' => 'required|string', // Nomor telepon untuk mengirim OTP
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        // Buat pengguna baru
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->number, // Simpan nomor telepon
            'name' => $request->username,
            'role' => 'user', // Menetapkan role pengguna sebagai 'user'
        ]);
    
        // Generate OTP
        $otp = rand(10000, 99999); // Generate OTP 5 digit
    
        // Kirim OTP melalui WhatsApp
        $this->sendOtp($user->phone_number, $otp); // Pastikan ini adalah field yang benar
    
        // Simpan informasi pengguna di session
        session([
            'user_id' => $user->id,
            'role' => $user->role,
            'is_logged_in' => true, // Status login
            'otp' => $otp,
        ]);
    
        // Redirect ke halaman verifikasi setelah registrasi berhasil
        return redirect()->route('verification');
    }
    
    private function sendOtp($number, $otp)
    {
        $sid = env('TWILIO_ACCOUNT_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilioNumber = env('TWILIO_WHATSAPP_NUMBER');
    
        $client = new Client($sid, $token);
    
        // Pastikan nomor telepon dalam format yang benar
        $formattedNumber = "whatsapp:+$number"; // Pastikan $number memiliki format yang benar
    
        $client->messages->create(
            $formattedNumber,
            [
                'from' => $twilioNumber,
                'body' => "Your OTP is: $otp"
            ]
        );
    }

    public function verifyOtp(Request $request)
    {
        // Validasi input OTP
        $request->validate([
            'otp' => 'required|array',
            'otp.*' => 'required|digits:1', // Setiap input harus berupa digit
        ]);
    
        // Menggabungkan OTP menjadi satu string
        $otp = implode('', $request->otp);
    
        // Cek apakah OTP yang dimasukkan sesuai dengan yang disimpan di session
        if ($otp == session('otp')) {
            // OTP valid, lakukan tindakan selanjutnya
            // Temukan pengguna berdasarkan ID yang disimpan di session
            $userId = session('user_id'); // Pastikan Anda menyimpan user_id saat mengirim OTP
            $user = User::find($userId);
    
            if ($user) {
                // Perbarui status verifikasi pengguna
                $user->is_verify = true; // Atur is_verify menjadi true
                $user->save(); // Simpan perubahan ke database
            }
    
            // Redirect ke halaman login atau halaman utama
            return redirect()->route('login')->with('success', 'Akun Anda telah diverifikasi!');
        } else {
            // OTP tidak valid, kembalikan ke halaman verifikasi dengan pesan kesalahan
            return redirect()->back()->withErrors(['otp' => 'Kode verifikasi tidak valid. Silakan coba lagi.']);
        }
    }

}
