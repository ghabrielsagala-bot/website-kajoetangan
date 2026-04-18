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
        $faker = Faker::create('id_ID');

        $kuliners = [
            [
                'nama_kuliner' => 'Perkedel Malang',
                'jenis_kuliner' => 'Makanan',
                'deskripsi_kuliner' => 'Perkedel adalah makanan tradisional yang terbuat dari kentang yang dihaluskan dan dicampur dengan telur, kemudian dibentuk dan digoreng. Perkedel Malang terkenal dengan teksturnya yang lembut dan rasa yang gurih.',
                'sejarah_kuliner' => 'Perkedel merupakan warisan kuliner dari zaman penjajahan Belanda yang dilokalisasi dengan cita rasa Indonesia. Di Malang, perkedel menjadi salah satu makanan pendamping nasi yang sangat populer.',
                'fakta_unik_kuliner' => 'Perkedel Malang sering disajikan sebagai hidangan pelengkap makanan berat dan juga dapat menjadi camilan di acara-acara khusus.',
                'gambar_kuliner' => 'kuliners/kuliner-dummie.webp'
            ],
            [
                'nama_kuliner' => 'Nasi Klopyok',
                'jenis_kuliner' => 'Makanan',
                'deskripsi_kuliner' => 'Nasi Klopyok adalah nasi yang di-tumis dengan berbagai macam lauk pauk seperti daging, telur, sayuran, dan rempah-rempah pilihan. Sajian ini kaya akan nutrisi dan sangat lezat di lidah.',
                'sejarah_kuliner' => 'Nasi klopyok memiliki sejarah yang panjang sebagai makanan favorit masyarakat Malang. Nama "klopyok" berasal dari suara yang dihasilkan saat memasak nasi dengan cara tradisional.',
                'fakta_unik_kuliner' => 'Komposisi nasi klopyok bervariasi tergantung preferensi dan ketersediaan bahan-bahan lokal yang digunakan di dapur rumah makan setempat.',
                'gambar_kuliner' => 'kuliners/kuliner-dummie.webp'
            ],
            [
                'nama_kuliner' => 'Soto Ayam Malang',
                'jenis_kuliner' => 'Makanan',
                'deskripsi_kuliner' => 'Soto ayam Malang adalah sup tradisional yang terbuat dari kaldu ayam yang kaya rasa, dienperkaya dengan kunyit, jahe, bawang, dan berbagai rempah pilihan. Soto ayam biasanya disajikan dengan nasi kuning dan telur rebus.',
                'sejarah_kuliner' => 'Soto ayam merupakan hidangan kuliner yang sudah dikenal sejak berabad-abad lalu di Nusantara. Malang memiliki varian soto ayam yang unik dengan cita rasa yang khas.',
                'fakta_unik_kuliner' => 'Soto ayam Malang terkenal dengan rasa kunyitnya yang kuat dan warna kuning cerah yang menggugah selera.',
                'gambar_kuliner' => 'kuliners/kuliner-dummie.webp'
            ]
        ];

        foreach ($kuliners as $kuliner) {
            Kuliner::create($kuliner);
        }
    }
}