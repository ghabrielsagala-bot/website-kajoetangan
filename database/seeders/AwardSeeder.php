<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $awards = [
            [
                'nama_award' => 'Penghargaan Kota Budaya Terbaik',
                'jenis_award' => 'Penghargaan Nasional',
                'gambar_award' => 'awards/award-dummie.webp',
                'tanggal_penerimaan_award' => now()->subYears(2),
                'deskripsi_award' => 'Penghargaan diberikan atas dedikasi Malang dalam menjaga dan mengembangkan warisan budaya serta pelestarian nilai-nilai tradisional yang kaya.'
            ],
            [
                'nama_award' => 'Penghargaan Destinasi Pariwisata Unggulan',
                'jenis_award' => 'Penghargaan Pariwisata',
                'gambar_award' => 'awards/award-dummie.webp',
                'tanggal_penerimaan_award' => now()->subYears(1),
                'deskripsi_award' => 'Penghargaan ini mengakui Malang sebagai destinasi pariwisata yang terus berinovasi dan memberikan pengalaman wisata berkualitas tinggi kepada pengunjung.'
            ],
            [
                'nama_award' => 'Penghargaan Pelestarian Heritage 2023',
                'jenis_award' => 'Penghargaan Budaya',
                'gambar_award' => 'awards/award-dummie.webp',
                'tanggal_penerimaan_award' => now()->subMonths(6),
                'deskripsi_award' => 'Penghargaan diberikan sebagai bentuk apresiasi atas komitmen Malang dalam melestarikan banguan-bangunan bersejarah dan situs budaya yang bernilai tinggi.'
            ]
        ];

        foreach ($awards as $award) {
            Award::create($award);
        }
    }
}