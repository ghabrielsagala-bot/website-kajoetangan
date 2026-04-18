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
        $spots = [
            [
                'nama_spot_foto' => 'Alun-Alun Malang',
                'jenis_spot_foto' => 'Jalanan',
                'gambar_spot_foto' => 'spot_fotos/spot-dummie.webp',
                'deskripsi_spot_foto' => 'Alun-alun Malang adalah jantung kota yang menjadi pusat kegiatan sosial dan budaya. Tempat ini sempurna untuk berfoto dengan latar belakang gereja katedral yang megah.',
                'sejarah_spot_foto' => 'Alun-alun Malang telah menjadi tempat berkumpul masyarakat sejak zaman colonial. Dengan pohon-pohon tua yang megah, alun-alun ini menyimpan banyak cerita sejarah kota Malang yang kaya budaya.',
                'fakta_unik_spot_foto' => 'Alun-alun Malang terkenal dengan tradisi "lilipornyono" atau melewati gereja sambil tertutup mata untuk mendapatkan keberuntungan. Spot ini paling indah saat sore hari menjelang sunset.'
            ],
            [
                'nama_spot_foto' => 'Jembatan Merah',
                'jenis_spot_foto' => 'Jalanan',
                'gambar_spot_foto' => 'spot_fotos/spot-dummie.webp',
                'deskripsi_spot_foto' => 'Jembatan Merah adalah ikon Kota Malang yang terkenal dengan warna merahnya yang menyolok. Jembatan ini menawarkan pemandangan aliran sungai yang indah dan cocok untuk fotografi.',
                'sejarah_spot_foto' => 'Jembatan Merah dibangun pada era penjajahan Belanda dan menjadi saksi perkembangan Kota Malang dari zaman ke zaman. Jembatan ini tetap menjadi simbol keindahan arsitektur lama Malang.',
                'fakta_unik_spot_foto' => 'Jembatan Merah paling fotogenik saat malam hari ketika lampu-lampu dinyalakan, menciptakan refleksi indah di permukaan air.'
            ],
            [
                'nama_spot_foto' => 'Taman Kyai Langgeng',
                'jenis_spot_foto' => 'Jalanan',
                'gambar_spot_foto' => 'spot_fotos/spot-dummie.webp',
                'deskripsi_spot_foto' => 'Taman Kyai Langgeng adalah taman hiburan keluarga yang menyediakan berbagai wahana dan atraksi menarik. Tempat ini sempurna untuk menghabiskan waktu sambil berfoto dengan latar belakang alam yang asri.',
                'sejarah_spot_foto' => 'Taman Kyai Langgeng didirikan sebagai ruang rekreasi publik yang dapat dinikmati oleh seluruh kalangan masyarakat Malang.',
                'fakta_unik_spot_foto' => 'Taman ini memiliki area yang luas dengan berbagai vegetasi hijau dan danau buatan yang menambah keindahan natural fotografi.'
            ]
        ];

        foreach ($spots as $spot) {
            SpotFoto::create($spot);
        }
    }
}