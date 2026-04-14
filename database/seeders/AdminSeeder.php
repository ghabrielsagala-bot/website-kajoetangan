<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create main admin with demo credentials
        Admin::firstOrCreate(
            ['email' => 'admin@kajoetangan.com'],
            [
                'name' => 'Admin Kampung Kajoetangan',
                'email' => 'admin@kajoetangan.com',
                'username' => 'admin',
                'password' => Hash::make('admin123'),
                'is_active' => true,
                'role' => 'super_admin',
            ]
        );

        // Create secondary admin
        Admin::firstOrCreate(
            ['email' => 'staff@kajoetangan.com'],
            [
                'name' => 'Staff Kajoetangan',
                'email' => 'staff@kajoetangan.com',
                'username' => 'staff',
                'password' => Hash::make('staff123'),
                'is_active' => true,
                'role' => 'admin',
            ]
        );
    }
}
