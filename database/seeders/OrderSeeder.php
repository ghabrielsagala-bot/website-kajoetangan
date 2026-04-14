<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed sample data untuk testing CRUD
        Order::create([
            'nama_awalan' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'tenis_tiket' => 'Lokal',
            'metode_pembayaran' => 'Gopay',
            'jumlah_tiket' => 2,
            'total_harga' => 200000,
            'status_pembayaran' => 'Diterima',
            'bukti_pembayaran' => null,
            'tanggal_berlaku' => now()->addDay(),
            'tanggal_kadaluarsa' => now()->addMonths(3),
        ]);

        Order::create([
            'nama_awalan' => 'Siti Nurhaliza',
            'email' => 'siti@example.com',
            'tenis_tiket' => 'Mancanegara',
            'metode_pembayaran' => 'QRIS',
            'jumlah_tiket' => 1,
            'total_harga' => 350000,
            'status_pembayaran' => 'Ditunggu',
            'bukti_pembayaran' => null,
            'tanggal_berlaku' => now()->addDays(2),
            'tanggal_kadaluarsa' => now()->addMonths(6),
        ]);

        Order::create([
            'nama_awalan' => 'Ahmad Suryanto',
            'email' => 'ahmad@example.com',
            'tenis_tiket' => 'Lokal',
            'metode_pembayaran' => 'Gopay',
            'jumlah_tiket' => 3,
            'total_harga' => 300000,
            'status_pembayaran' => 'Ditolak',
            'bukti_pembayaran' => null,
            'tanggal_berlaku' => now()->addDays(3),
            'tanggal_kadaluarsa' => now()->addMonths(2),
        ]);

        Order::create([
            'nama_awalan' => 'Rina Wijaya',
            'email' => 'rina@example.com',
            'tenis_tiket' => 'Mancanegara',
            'metode_pembayaran' => 'QRIS',
            'jumlah_tiket' => 2,
            'total_harga' => 700000,
            'status_pembayaran' => 'Diterima',
            'bukti_pembayaran' => null,
            'tanggal_berlaku' => now()->addDays(5),
            'tanggal_kadaluarsa' => now()->addMonths(4),
        ]);
    }
}
