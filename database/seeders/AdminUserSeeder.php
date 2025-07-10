<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [ 'email' => 'travelink@admin.com' ],
            [
                'name' => 'Admin Travelink',
                'phone' => null,
                'password' => Hash::make('passwordadmin'),
                'role' => 'admin',
            ]
        );
    }
}
