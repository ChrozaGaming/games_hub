<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserAdmin;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Redirect ke dashboard jika login berhasil
            return redirect()->route('admin.dashboard');
        }

        // Redirect kembali jika login gagal
        return redirect()->back()->withErrors(['error' => 'Email atau password salah']);
    }


    public function dashboard()
    {
        return view('admin.admindashboard');
    }

    public function addGame(Request $request)
    {
        // Logika menambahkan game
    }

    public function updateUserCredits(Request $request)
    {
        // Logika mengatur credits user
    }
}
