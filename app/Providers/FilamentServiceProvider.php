<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Filament::serving(function () {
            // Admin authentication removed; allow all users (or implement user-only logic if needed)
            Filament::authenticateUsing(function ($request) {
                return true;
            });
        });
    }
}
