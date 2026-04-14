<?php

namespace Database\Seeders;

use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        Events::query()->update([
            'label_event' => $faker->sentences(1, true)
        ]);
    }
}