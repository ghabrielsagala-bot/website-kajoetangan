<?php

namespace Database\Seeders;

use App\Models\Kuliner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KulinerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        Kuliner::query()->update([
            'gambar_kuliner' => 'kuliners/kuliner-dummie.webp'
        ]);
    }
}