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
        $faker = Faker::create('id_ID');

        $events = [
            [
                'nama_event' => 'Festival Kuliner Malang 2024',
                'jenis_event' => 'Festival Kuliner',
                'waktu_event' => now()->addDays(15),
                'penyelenggara_event' => 'Dinas Pariwisata Kota Malang',
                'gambar_event' => 'events/event-dummie.webp',
                'lokasi_event' => 'Alun-Alun Malang',
                'deskripsi_event' => 'Festival kuliner terbesar di Malang yang menghadirkan berbagai kuliner khas Malang dan Jawa Timur. Acara ini menampilkan lebih dari 100 pedagang kuliner dengan berbagai jenis makanan tradisional dan modern.'
            ],
            [
                'nama_event' => 'Pasar Malam Malang Heritage',
                'jenis_event' => 'Pasar Malam',
                'waktu_event' => now()->addDays(7),
                'penyelenggara_event' => 'Tim Budaya Malang',
                'gambar_event' => 'events/event-dummie.webp',
                'lokasi_event' => 'Jalan Kembang Malang',
                'deskripsi_event' => 'Pasar malam yang menampilkan produk lokal, kerajinan tangan, dan kuliner tradisional Malang. Event ini juga menampilkan pertunjukan seni dan budaya lokal yang memukau.'
            ],
            [
                'nama_event' => 'Workshop Sejarah Malang',
                'jenis_event' => 'Workshop Edukatif',
                'waktu_event' => now()->addDays(30),
                'penyelenggara_event' => 'Balai Pelestarian Nilai Budaya Malang',
                'gambar_event' => 'events/event-dummie.webp',
                'lokasi_event' => 'Museum Malang Tempo Doeloe',
                'deskripsi_event' => 'Workshop interaktif tentang sejarah Kota Malang, mulai dari era penjajahan hingga masa modern. Peserta akan mendapat pengetahuan mendalam tentang evolusi budaya dan arsitektur Malang.'
            ]
        ];

        foreach ($events as $event) {
            Events::create($event);
        }
    }
}