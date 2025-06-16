<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|regex:/^[0-9]{10,15}$/', // Validasi hanya angka 10-15 digit
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6', // password minimal 6 karakter
            ]);

            User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => 'pending', // User belum aktif
            ]);

            // Kembalikan ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('register_success', true);
        } catch (\Exception $e) {
            return redirect()->back()->with('register_failed', $e->getMessage());
        }
    }
}
