<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserAdmin;
use App\Models\Game; // Model Game
use App\Models\User; // Model User untuk user credits

class AdminController extends Controller
{
    /**
     * Handle Admin Login
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Redirect ke dashboard jika login berhasil
            return redirect()->route('admin.dashboard')->with('success', 'Selamat datang di dashboard admin!');
        }

        // Redirect kembali jika login gagal
        return redirect()->back()->withErrors(['error' => 'Email atau password salah']);
    }

    /**
     * Dashboard View
     */
    public function dashboard()
    {
        return view('admin.admindashboard');
    }

    /**
     * Add Game
     */
    public function addGame(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'release_date' => 'required|date',
            'price_credits' => 'required|integer|min:0',
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi ikon
        ]);

        // Simpan file ikon
        $iconPath = $request->file('icon')->store('public/icons');

        // Simpan data game ke database
        Game::create([
            'name' => $request->name,
            'genre' => $request->genre,
            'release_date' => $request->release_date,
            'price_credits' => $request->price_credits,
            'icon_path' => $iconPath, // Path ikon
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Game berhasil ditambahkan!');
    }

    public function updateUserCreditsPage()
    {
        return view('admin.update-credits');
    }

    /**
     * Update User Credits
     */
    public function updateUserCredits(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'credits' => 'required|integer|min:0',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Pengguna tidak ditemukan']);
        }

        $user->credits += $request->credits;
        $user->save();

        return redirect()->route('admin.dashboard')->with('success', 'Credits pengguna berhasil diperbarui!');
    }

    public function addGamePage()
    {
        return view('admin.add-game');
    }


    /**
     * Logout Admin
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login')->with('success', 'Berhasil logout.');
    }
}
