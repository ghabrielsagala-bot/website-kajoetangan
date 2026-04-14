<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create ticket types
        Ticket::create([
            'name' => 'Tiket Lokal',
            'description' => 'Tiket untuk pengunjung lokal dari Indonesia',
            'price' => 5000.00,
            'available' => 500,
            'is_active' => true,
        ]);

        Ticket::create([
            'name' => 'Tiket Mancanegara',
            'description' => 'Tiket untuk pengunjung dari luar negeri',
            'price' => 10000.00,
            'available' => 200,
            'is_active' => true,
        ]);

        Ticket::create([
            'name' => 'Tiket Grup',
            'description' => 'Tiket untuk rombongan minimal 10 orang',
            'price' => 4000.00,
            'available' => 100,
            'is_active' => true,
        ]);
    }
}
