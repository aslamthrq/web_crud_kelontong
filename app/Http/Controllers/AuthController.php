<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function index()
    {
        // Ambil produk yang aktif saja
        $products = Product::where('status', 'Aktif')->get();

        return view('home', compact('products'));
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Periksa apakah pengguna sudah disetujui
            if (auth()->user()->approved) {
                // Redirect berdasarkan role
                if (auth()->user()->role == 'admin') {
                    return redirect()->intended('/dashboard');
                } else {
                    return redirect()->intended('/');
                }
            } else {
                // Logout pengguna dan kembalikan pesan info jika belum disetujui
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('login')->with('info', 'Akun anda belum disetujui admin.');
            }
        }

        return back()->withErrors([
            'email' => 'Tidak sesuai dengan data kami.',
        ])->onlyInput('email');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi data dari request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Membuat pengguna baru dengan status 'approved' sebagai false
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role', 'customer'),
            'approved' => false,
        ]);

        return redirect()->route('register.form')->with('info', 'Registrasi berhasil, tunggu persetujuan dari admin.');
    }

    public function logout(Request $request)
    {
        $userRole = auth()->user()->role;

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Arahkan berdasarkan peran pengguna yang disimpan
        if ($userRole === 'admin') {
            return redirect()->route('login')->with('info', 'Kamu telah logout.');
        } else {
            return redirect('/')->with('info', 'Kamu telah logout.');
        }
    }
}
