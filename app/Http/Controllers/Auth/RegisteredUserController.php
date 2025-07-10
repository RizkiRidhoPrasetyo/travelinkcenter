<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'numeric', 'digits_between:8,15'],
            'region' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:male,female'],
            'address' => ['required', 'string', 'max:500'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'region' => $request->region,
            'gender' => $request->gender,
            'address' => $request->address,
        ]);

        event(new Registered($user));

        Auth::login($user);
        // Redirect ke halaman travelinkclub setelah registrasi, namun user tetap harus verifikasi email untuk akses fitur tertentu
        return redirect()->route('travelinkclub');
    }
}
