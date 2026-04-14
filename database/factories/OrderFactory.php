<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_awalan' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'tenis_tiket' => fake()->randomElement(['Lokal', 'Mancanegara']),
            'metode_pembayaran' => fake()->randomElement(['Gopay', 'QRIS']),
            'jumlah_tiket' => fake()->numberBetween(1, 5),
            'total_harga' => fake()->numberBetween(50000, 500000),
            'status_pembayaran' => fake()->randomElement(['Ditolak', 'Ditunggu', 'Diterima']),
            'bukti_pembayaran' => fake()->randomElement([null, 'bukti_1.jpg', 'bukti_2.pdf', 'bukti_3.jpg']),
            'tanggal_berlaku' => fake()->dateTime(),
            'tanggal_kadaluarsa' => fake()->dateTime(),
        ];
    }
}
