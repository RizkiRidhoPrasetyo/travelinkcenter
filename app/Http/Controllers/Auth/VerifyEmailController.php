<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        $user = $request->user();
        if (!$user) {
            // Auto-login user berdasarkan ID dari URL jika belum login
            $userId = $request->route('id');
            $user = User::find($userId);
            if ($user) {
                Auth::login($user);
            } else {
                return redirect()->route('travelinkclub')->with('error', 'User tidak ditemukan.');
            }
        }
        if (! $user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
            // Set status to active after email verification
            $user->status = 'active';
            $user->save();
        }
        return redirect()->route('travelinkclub')->with('success', 'Email berhasil diverifikasi!');
    }
}
