<?php

namespace Database\Seeders;

use App\Models\SpotFoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SpotFotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        
        // Query untuk non static
        // Pakai Paragraf
        SpotFoto::query()->update([
            'sejarah_spot_foto' => $faker->paragraphs(3, true),
            'fakta_unik_spot_foto' => $faker->paragraphs(2, true),
        ]);
    }
}