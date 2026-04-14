@extends('template')

@section('main')
<main class="bg-gray-50 min-h-screen pt-8 pb-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section -->
        <section class="mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 font-display">
                Rumah 1870
            </h1>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-gray-600">
                <span class="flex items-center mb-2 sm:mb-0">
                    <i class="fas fa-calendar mr-2 text-amber-900"></i>
                    25 November 2024
                </span>
                <span class="flex items-center">
                    <i class="fas fa-user mr-2 text-amber-900"></i>
                    Admin Kajoetangan
                </span>
            </div>
        </section>

        <!-- Hero Image -->
        <section class="mb-8 md:mb-12">
            <img src="https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=1200&h=600&fit=crop" 
                 alt="Rumah 1870" 
                 class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-lg shadow-lg">
        </section>

        <!-- Main Content -->
        <article class="prose prose-sm sm:prose md:prose-lg max-w-none">
            
            <!-- Introduction Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-display">
                    Tentang Rumah 1870
                </h2>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                    Rumah 1870 merupakan bangunan tertua di kawasan Kajoetangan yang dibangun pada tahun 1870. Dengan identitas sebagai bangunan 
                    atau peninggalan pada zaman kolonial Belanda, rumah ini menjadi saksi sejarah panjang Kota Malang. Rumah ini dinamai Rumah 1870 
                    karena dibangun sekitar tahun 1870 oleh generasi pertama dari keluarga Bapak Nur Wasil.
                </p>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                    Terletak di Jalan Basuki Rahmat gang 6 No. 988, Rumah 1870 berada di tengah pemukiman penduduk dengan orientasi menghadap ke arah 
                    selatan, menghadap jalan setapak yang berada di depan rumah. Jalan setapak tersebut merupakan satu-satunya akses menuju Rumah 1870, 
                    memberikan kesan eksklusif dan tradisional bagi pengunjung.
                </p>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                    Saat ini, Rumah 1870 difungsikan sebagai Basecamp Kelompok Sadar Wisata (Pokdarwis) Kajoetangan, menjadi pusat edukasi dan 
                    pelestarian warisan budaya lokal bagi generasi mendatang.
                </p>
            </section>

            <!-- Sejarah & Perkembangan Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-amber-50 to-orange-50 p-6 sm:p-8 rounded-lg border-l-4 border-amber-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Perjalanan Sejarah Rumah Berusia 150+ Tahun
                </h2>
                <div class="space-y-6 mb-8">
                    <!-- Timeline Item 1 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full bg-amber-600 text-white flex items-center justify-center font-bold text-lg mb-2">
                                1
                            </div>
                            <div class="w-1 h-24 bg-amber-200"></div>
                        </div>
                        <div class="pt-1 pb-6">
                            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Tahun 1870 - Dibangun Era Kolonial</h3>
                            <p class="text-gray-700 text-base leading-relaxed">
                                Rumah 1870 dibangun oleh generasi pertama keluarga Bapak Nur Wasil. Awalnya dihuni oleh orang Belanda asli yang tidak 
                                memiliki banyak anak, sehingga rumah ini hanya memiliki satu kamar utama dan satu kamar untuk anak pemilik rumah. 
                                Desainnya mencerminkan gaya arsitektur kolonial Belanda yang khas.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full bg-amber-600 text-white flex items-center justify-center font-bold text-lg mb-2">
                                2
                            </div>
                            <div class="w-1 h-24 bg-amber-200"></div>
                        </div>
                        <div class="pt-1 pb-6">
                            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Era Penjajahan Hingga Kemerdekaan</h3>
                            <p class="text-gray-700 text-base leading-relaxed">
                                Melalui berbagai masa penjajahan, Rumah 1870 tetap bertahan dengan integritas strukturalnya. Kehadiran bangunan ini 
                                menjadi bukti nyata dari sejarah panjang Malang sebagai kota besar di zaman Hindia Belanda, melintasi periode 
                                perjuangan kemerdekaan Indonesia.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full bg-amber-600 text-white flex items-center justify-center font-bold text-lg mb-2">
                                3
                            </div>
                            <div class="w-1 h-24 bg-amber-200"></div>
                        </div>
                        <div class="pt-1 pb-6">
                            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Perawatan Tradisional & Pemeliharaan Rutin</h3>
                            <p class="text-gray-700 text-base leading-relaxed">
                                Sejak dibangun, Rumah 1870 tidak pernah mengalami pemugaran atau renovasi besar. Hanya perawatan dan pemeliharaan rutin 
                                yang dilakukan, kecuali pada bagian kamar mandi. Pendekatan ini menjaga autentisitas dan karakter asli bangunan 
                                seiring berjalannya waktu.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full bg-amber-600 text-white flex items-center justify-center font-bold text-lg mb-2">
                                4
                            </div>
                        </div>
                        <div class="pt-1">
                            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Saat Ini - Basecamp Pokdarwis Kajoetangan</h3>
                            <p class="text-gray-700 text-base leading-relaxed">
                                Rumah 1870 kini difungsikan sebagai Basecamp Kelompok Sadar Wisata (Pokdarwis) Kajoetangan. Perubahan fungsi ini 
                                memungkinkan bangunan bersejarah untuk terus hidup dan relevan, menjadi pusat edukasi, pelestarian, serta ajang 
                                promosi warisan budaya lokal kepada masyarakat luas dan pengunjung.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Arsitektur Kolonial Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-blue-50 to-indigo-50 p-6 sm:p-8 rounded-lg border-l-4 border-blue-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Arsitektur Kolonial Belanda yang Autentik
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 text-sm font-bold mt-1">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">Dimensi & Bentuk Bangunan</h3>
                                    <p class="text-gray-700 text-base">
                                        Bangunan ini memiliki ukuran 8 x 11 meter persegi dengan atap dominan bermodel perisai. Bentuk geometri dasar 
                                        yang sederhana namun elegan mencerminkan prinsip desain kolonial Belanda yang fungsional dan estetis.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 text-sm font-bold mt-1">
                                    <i class="fas fa-shapes"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">Fasad & Ornamen Dekoratif</h3>
                                    <p class="text-gray-700 text-base">
                                        Fasad rumah didominasi oleh garis-garis vertikal dan horizontal yang membentuk geometri dasar seperti persegi 
                                        dan segitiga. Atap terasnya dihiasi dengan ukiran kayu yang tersusun rapi dengan ornamen khas Betawi yang unik.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 text-sm font-bold mt-1">
                                    <i class="fas fa-door-open"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">Pintu & Jendela Kokoh</h3>
                                    <p class="text-gray-700 text-base">
                                        Pintu rumah terbuat dari kayu berkualitas tinggi yang kokoh. Jendela-jendela besar di sisi kanan dan kiri rumah 
                                        dirancang untuk memaksimalkan cahaya alami dan sirkulasi udara, yang lazim pada era kolonial.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center flex-shrink-0 text-sm font-bold mt-1">
                                    <i class="fas fa-wind"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-900 mb-1">Ventilasi & Pencahayaan Alami</h3>
                                    <p class="text-gray-700 text-base">
                                        Elemen interior seperti ventilasi, jendela, dan pintu mencerminkan gaya rumah kolonial pada zamannya. Desain 
                                        ini memastikan kenyamanan penghuni dalam iklim tropis sambil mempertahankan estetika arsitektur.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="https://images.unsplash.com/photo-1576070162603-3c0db2646ab9?w=600&h=400&fit=crop" 
                         alt="Detail Arsitektur Rumah 1870" 
                         class="w-full h-64 sm:h-80 object-cover rounded-lg shadow-md">
                </div>
            </section>

            <!-- Spesifikasi & Karakteristik Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Spesifikasi & Karakteristik Bangunan
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                    <!-- Spec 1 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="flex items-start gap-3 mb-3">
                            <i class="fas fa-ruler text-2xl text-amber-900 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-gray-900">Luas Bangunan</h3>
                                <p class="text-sm text-gray-600">8 x 11 meter persegi</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Ukuran kompak namun fungsional mencerminkan efisiensi desain kolonial Belanda untuk kehidupan keluarga kecil.
                        </p>
                    </div>

                    <!-- Spec 2 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="flex items-start gap-3 mb-3">
                            <i class="fas fa-bed text-2xl text-amber-900 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-gray-900">Ruang Kamar Tidur</h3>
                                <p class="text-sm text-gray-600">1 kamar utama + 1 kamar anak</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Rumah ini hanya memiliki dua kamar, sesuai dengan kebutuhan pemilik awal yang merupakan keluarga Belanda kecil.
                        </p>
                    </div>

                    <!-- Spec 3 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="flex items-start gap-3 mb-3">
                            <i class="fas fa-roof text-2xl text-amber-900 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-gray-900">Model Atap</h3>
                                <p class="text-sm text-gray-600">Perisai dengan hiasan ukiran kayu</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Atap bermodel perisai yang dihiasi dengan ukiran kayu rapi menciptakan kesan elegan dan mewah di era tersebut.
                        </p>
                    </div>

                    <!-- Spec 4 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="flex items-start gap-3 mb-3">
                            <i class="fas fa-paint-brush text-2xl text-amber-900 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-gray-900">Material Utama</h3>
                                <p class="text-sm text-gray-600">Kayu berkualitas tinggi</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Pintu, jendela, dan ornamen terbuat dari kayu pilihan yang tahan lama dan berkualitas, mencerminkan standar kolonial.
                        </p>
                    </div>

                    <!-- Spec 5 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="flex items-start gap-3 mb-3">
                            <i class="fas fa-compass text-2xl text-amber-900 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-gray-900">Orientasi Bangunan</h3>
                                <p class="text-sm text-gray-600">Menghadap ke arah selatan</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Orientasi selatan menghadap jalan setapak yang menjadi satu-satunya akses menuju rumah, memberikan privasi eksklusif.
                        </p>
                    </div>

                    <!-- Spec 6 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="flex items-start gap-3 mb-3">
                            <i class="fas fa-wrench text-2xl text-amber-900 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-bold text-gray-900">Pemeliharaan</h3>
                                <p class="text-sm text-gray-600">Rutin tanpa renovasi besar</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Hanya perawatan dan pemeliharaan rutin yang dilakukan, kecuali kamar mandi. Pendekatan ini menjaga autentisitas bangunan.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Galeri Rumah 1870 -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Galeri Rumah 1870
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4">
                    <img src="https://images.unsplash.com/photo-1516455207990-7a41e1d4ffd5?w=400&h=300&fit=crop" 
                         alt="Rumah 1870 - Fasad Depan" 
                         class="w-full h-40 sm:h-48 object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1528272293122-cd5f6f00fd12?w=400&h=300&fit=crop" 
                         alt="Rumah 1870 - Detail Jendela" 
                         class="w-full h-40 sm:h-48 object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1509455256554-e75ddf882b52?w=400&h=300&fit=crop" 
                         alt="Rumah 1870 - Pintu Utama" 
                         class="w-full h-40 sm:h-48 object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=400&h=300&fit=crop" 
                         alt="Rumah 1870 - Teras Depan" 
                         class="w-full h-40 sm:h-48 object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?w=400&h=300&fit=crop" 
                         alt="Rumah 1870 - Interior Ruang Utama" 
                         class="w-full h-40 sm:h-48 object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1570129477492-45ea003588af?w=400&h=300&fit=crop" 
                         alt="Rumah 1870 - Ornamen Kayu" 
                         class="w-full h-40 sm:h-48 object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                </div>
            </section>

            <!-- Akses & Pengalaman Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-purple-50 to-pink-50 p-6 sm:p-8 rounded-lg border-l-4 border-purple-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Akses & Pengalaman Berkunjung
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg border-l-4 border-purple-600">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 flex items-center">
                                <i class="fas fa-route text-purple-600 mr-3"></i>
                                Akses Menuju Rumah
                            </h3>
                            <p class="text-gray-700 text-base">
                                Rumah 1870 terletak di tengah pemukiman penduduk dengan jalan setapak sebagai satu-satunya akses menuju rumah. 
                                Akses eksklusif ini memberikan nuansa autentik dan tradisional yang khas kawasan Kajoetangan.
                            </p>
                        </div>

                        <div class="bg-white p-4 rounded-lg border-l-4 border-purple-600">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 flex items-center">
                                <i class="fas fa-history text-purple-600 mr-3"></i>
                                Fungsi Saat Ini
                            </h3>
                            <p class="text-gray-700 text-base">
                                Sebagai Basecamp Pokdarwis Kajoetangan, rumah ini menjadi tempat berkumpul untuk kegiatan wisata lokal, edukasi 
                                budaya, dan pelestarian warisan bersejarah.
                            </p>
                        </div>

                        <div class="bg-white p-4 rounded-lg border-l-4 border-purple-600">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 flex items-center">
                                <i class="fas fa-users text-purple-600 mr-3"></i>
                                Pengalaman Edukatif
                            </h3>
                            <p class="text-gray-700 text-base">
                                Pengunjung dapat mempelajari sejarah kolonial Belanda, arsitektur tradisional, dan perkembangan masyarakat Malang 
                                melalui interaksi langsung dengan pemandu wisata lokal yang berpengalaman.
                            </p>
                        </div>
                    </div>
                    <img src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?w=600&h=400&fit=crop" 
                         alt="Pengalaman Berkunjung Rumah 1870" 
                         class="w-full h-64 sm:h-80 object-cover rounded-lg shadow-md">
                </div>
            </section>

            <!-- Discover Other Places Section -->
            <section class="mt-14 pt-12 border-t border-gray-200">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center font-display">
                    Jelajahi Tempat Lainnya
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6">
                    <!-- Card 1: Rumah Jengki -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=250&fit=crop" 
                             alt="Rumah Jengki" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Jengki</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Tempat ngopi heritage dengan arsitektur Jengki yang autentik dan menawan.
                            </p>
                            <a href="{{ route('rumahjengki') }}" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Rumah Penghulu -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=400&h=250&fit=crop" 
                             alt="Rumah Penghulu" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Penghulu</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Rumah bersejarah milik Penghulu pertama Kajoetangan dari era 1920-an.
                            </p>
                            <a href="{{ route('rumahpenghulu') }}" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Omah Pak Puji -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 ring-2 ring-amber-600">
                        <img src="https://images.unsplash.com/photo-1515182629504-727d7753751f?w=400&h=250&fit=crop" 
                             alt="Omah Pak Puji" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-bold text-gray-900">Omah Pak Puji</h3>
                                <span class="text-xs bg-amber-600 text-white px-2 py-1 rounded-full">Anda di sini</span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Wisata alam alami dengan koleksi barang-barang kuno bersejarah.
                            </p>
                            <a href="#" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </article>

        <!-- Info Box Section -->
        <section class="mt-14 grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
            <!-- Informasi Penting -->
            <div class="bg-amber-50 rounded-lg p-6 sm:p-8 border-l-4 border-amber-900">
                <h3 class="text-xl sm:text-2xl font-bold text-amber-900 mb-4 flex items-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    Informasi Penting
                </h3>
                <ul class="space-y-3 text-gray-700 text-base">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Alamat:</strong> Jl. Basuki Rahmat Gang 6 No. 988, Kajoetangan, Klojen, Malang</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Tahun Dibangun:</strong> Tahun 1870 (Era Kolonial Belanda)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Fungsi Saat Ini:</strong> Basecamp Pokdarwis (Kelompok Sadar Wisata) Kajoetangan</span>
                    </li>
                </ul>
            </div>

            <!-- Jam Operasional -->
            <div class="bg-blue-50 rounded-lg p-6 sm:p-8 border-l-4 border-blue-900">
                <h3 class="text-xl sm:text-2xl font-bold text-blue-900 mb-4 flex items-center">
                    <i class="fas fa-clock mr-3"></i>
                    Jam Akses
                </h3>
                <ul class="space-y-3 text-gray-700 text-base">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Senin - Jumat:</strong> 09:00 - 17:00</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Sabtu - Minggu:</strong> 09:00 - 18:00</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Disarankan:</strong> Hubungi Pokdarwis untuk kunjungan grup</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="mt-12 bg-gradient-to-r from-amber-900 to-amber-800 rounded-lg p-8 sm:p-10 text-white text-center">
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">
                Kunjungi Rumah 1870 Hari Ini!
            </h3>
            <p class="text-base sm:text-lg mb-6 text-amber-100 max-w-2xl mx-auto">
                Rasakan pengalaman unik mengunjungi bangunan tertua Kajoetangan yang berusia lebih dari 150 tahun dan pelajari sejarah kolonial Belanda yang kaya.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-block bg-white text-amber-900 font-bold px-6 md:px-8 py-3 rounded-lg hover:bg-amber-50 transition-colors duration-300 text-sm md:text-base">
                    <i class="fas fa-map-marker-alt mr-2"></i>Lihat Lokasi
                </a>
                <a href="#" class="inline-block bg-amber-700 text-white font-bold px-6 md:px-8 py-3 rounded-lg hover:bg-amber-600 transition-colors duration-300 text-sm md:text-base border-2 border-white">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
            </div>
        </section>

    </div>
</main>
@endsection
