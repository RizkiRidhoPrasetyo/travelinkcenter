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
        if (! $user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
            // Set status to active after email verification
            $user->status = 'active';
            $user->save();
        }
        return redirect()->intended('travelinkclub');
    }
}
