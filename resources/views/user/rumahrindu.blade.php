@extends('template')

@section('main')
<main class="bg-gray-50 min-h-screen pt-8 pb-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section -->
        <section class="mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 font-display">
                Rumah Rindu
            </h1>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-gray-600">
                <span class="flex items-center mb-2 sm:mb-0">
                    <i class="fas fa-calendar mr-2 text-amber-900"></i>
                    25 November 2025
                </span>
                <span class="flex items-center">
                    <i class="fas fa-user mr-2 text-amber-900"></i>
                    Admin Kajoetangan
                </span>
            </div>
        </section>

        <!-- Hero Image -->
        <section class="mb-8 md:mb-12">
            <img src="https://images.unsplash.com/photo-1523359556388-e5c84e9cf755?w=1200&h=600&fit=crop" 
                 alt="Rumah Rindu" 
                 class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-lg shadow-lg">
        </section>

        <!-- Main Content -->
        <article class="prose prose-sm sm:prose md:prose-lg max-w-none">
            
            <!-- Introduction Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-display">
                    Tentang Rumah Rindu
                </h2>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                    Rumah Rindu adalah sebuah bangunan bersejarah yang berlokasi di Jalan Basuki Rahmat Gang 6 No. 177, 
                    dengan luas 78 meter persegi. Rumah ini dibangun pada tahun 1950-an dan mengalami renovasi pada tahun 1960. 
                    Awalnya dibangun oleh keluarga H. Nur Rochim dan saat ini dimiliki oleh generasi ketiga dari keluarga tersebut.
                </p>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                    Rumah Rindu menampilkan arsitektur kolonial yang indah, terlihat jelas dari desain sistem ventilasi, 
                    jendela, pintu, dan dinding rumah yang masih terawat dengan baik. Nama 'Rumah Rindu' memiliki cerita unik yang 
                    berkaitan dengan sejarah awal rumah dan usaha pembuat sandal kayu (bakiak) milik H. Nur Rochim.
                </p>
            </section>

            <!-- Cerita Unik Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-purple-50 to-pink-50 p-6 sm:p-8 rounded-lg border-l-4 border-purple-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Cerita Unik di Balik Nama "Rindu"
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            H. Nur Rochim, pemilik awal Rumah Rindu, adalah seorang pengrajin bakiak (sandal kayu tradisional). 
                            Bakiak adalah sejenis sandal kayu yang terkenal dengan suara letup yang khas saat dikenakan. Suara 
                            "klak-klak" yang unik ini menjadi ciri khas produk bakiak berkualitas.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Bakiak yang diproduksi oleh H. Nur Rochim diberi merek "Sandal Rindu" yang pada saat itu sangat 
                            populer di Malang. Dari merek ikonik ini, rumahnya kemudian dinamai "Rumah Rindu" sebagai penghormatan 
                            terhadap warisan usaha keluarga.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                            Meskipun produksi Bakiak Rindu sudah tidak dilanjutkan lagi oleh keluarga, nama "Rumah Rindu" tetap 
                            menjadi peninggalan berharga yang mencerminkan sejarah perdagangan lokal Malang yang kaya dan penuh 
                            inovasi.
                        </p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=600&h=400&fit=crop" 
                         alt="Cerita Bakiak Rindu" 
                         class="w-full h-64 sm:h-72 md:h-80 object-cover rounded-lg shadow-lg">
                </div>
            </section>

            <!-- Sejarah Rumah Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Sejarah Perkembangan
                </h2>
                <div class="space-y-6 mb-8">
                    <!-- Timeline Item 1 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                1
                            </div>
                            <div class="w-1 h-24 bg-purple-200 mt-2"></div>
                        </div>
                        <div class="pb-8 md:pb-12">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Dibangun Tahun 1950-an</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Rumah Rindu dibangun pada tahun 1950-an oleh H. Nur Rochim, seorang pengrajin bakiak terkenal. 
                                Bangunan ini dirancang dengan arsitektur kolonial yang elegan dengan mempertimbangkan kebutuhan 
                                keluarga dan iklim tropis di Malang.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                2
                            </div>
                            <div class="w-1 h-24 bg-purple-200 mt-2"></div>
                        </div>
                        <div class="pb-8 md:pb-12">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Renovasi Tahun 1960</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Pada tahun 1960, Rumah Rindu mengalami renovasi untuk mempertahankan struktur dan meningkatkan 
                                fungsi beberapa ruangan. Renovasi dilakukan dengan tetap mempertahankan desain arsitektur kolonial 
                                original dan karakter historis bangunan.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                3
                            </div>
                            <div class="w-1 h-24 bg-purple-200 mt-2"></div>
                        </div>
                        <div class="pb-8 md:pb-12">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Generasi Ketiga Keluarga</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Rumah Rindu telah diwariskan ke generasi ketiga keluarga H. Nur Rochim. Keluarga dengan penuh 
                                dedikasi terus memelihara dan melestarikan rumah bersejarah ini agar tetap menjadi saksi hidup 
                                dari sejarah perdagangan dan kerajinan lokal Malang.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                4
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Pelestarian hingga Sekarang</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Rumah Rindu tetap dirawat dan dilestarikan sebagai bagian penting dari warisan budaya Kajoetangan. 
                                Dengan perabotan antik yang masih terjaga dengan baik, rumah ini menjadi destinasi wisata yang penting 
                                untuk mempelajari sejarah dan budaya Malang.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Arsitektur Kolonial Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-amber-50 to-orange-50 p-6 sm:p-8 rounded-lg border-l-4 border-amber-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Arsitektur Kolonial yang Elegan
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Rumah Rindu menampilkan arsitektur kolonial yang indah dan otentik. Setiap elemen desain, dari sistem 
                            ventilasi yang canggih hingga jendela dan pintu yang besar, dirancang dengan mempertimbangkan kebutuhan 
                            iklim tropis dan estetika pada era 1950-an.
                        </p>
                        <ul class="space-y-3 text-sm md:text-base text-gray-700 mb-4">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Ventilasi:</strong> Sistem ventilasi yang baik untuk sirkulasi udara alami</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Jendela Besar:</strong> Jendela berukuran besar untuk masuknya cahaya alami</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Pintu Kayu:</strong> Pintu kayu kokoh dengan desain tradisional yang indah</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Dinding:</strong> Dinding berkualitas dengan dekorasi yang mencerminkan era 1950-an</span>
                            </li>
                        </ul>
                    </div>
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop" 
                         alt="Detail Arsitektur Kolonial" 
                         class="w-full h-64 sm:h-72 md:h-80 object-cover rounded-lg shadow-lg">
                </div>
            </section>

            <!-- Interior Antik Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Interior Antik yang Terjaga
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                    <!-- Item 1 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-purple-600">
                        <div class="text-3xl mb-3">📻</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Radio Antik</h3>
                        <p class="text-sm md:text-base text-gray-600">Radio vintage yang masih berfungsi dengan baik, peninggalan era emas radio di Malang</p>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-purple-600">
                        <div class="text-3xl mb-3">⏰</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Jam Dinding Antik</h3>
                        <p class="text-sm md:text-base text-gray-600">Jam dinding bersejarah yang masih menunjukkan waktu dengan akurat</p>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-purple-600">
                        <div class="text-3xl mb-3">💡</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Kronor Vintage</h3>
                        <p class="text-sm md:text-base text-gray-600">Kronor (lampu gantung) vintage dengan desain elegan era kolonial</p>
                    </div>

                    <!-- Item 4 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-purple-600">
                        <div class="text-3xl mb-3">🛋️</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Furnitur Kayu</h3>
                        <p class="text-sm md:text-base text-gray-600">Perabotan kayu berkualitas tinggi yang tahan lama dan elegan</p>
                    </div>

                    <!-- Item 5 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-purple-600">
                        <div class="text-3xl mb-3">🖼️</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Hiasan Dinding</h3>
                        <p class="text-sm md:text-base text-gray-600">Koleksi hiasan dinding yang mencerminkan selera seni keluarga</p>
                    </div>

                    <!-- Item 6 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-purple-600">
                        <div class="text-3xl mb-3">👠</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Bakiak Rindu</h3>
                        <p class="text-sm md:text-base text-gray-600">Koleksi bakiak original produksi H. Nur Rochim era 1950-an</p>
                    </div>
                </div>
            </section>

            <!-- Galeri Rumah Rindu -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Galeri Rumah Rindu
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4">
                    <!-- Gallery Item 1 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1523359556388-e5c84e9cf755?w=400&h=400&fit=crop" 
                             alt="Rumah Rindu Eksterior" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=400&fit=crop" 
                             alt="Interior Rumah Rindu" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1513377811694-c52646db42da?w=400&h=400&fit=crop" 
                             alt="Detail Arsitektur" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 4 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1466214174435-bda6b6da8c45?w=400&h=400&fit=crop" 
                             alt="Ruang Tamu" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 5 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=400&h=400&fit=crop" 
                             alt="Furnitur Antik" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 6 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1495521821757-a1efb6729352?w=400&h=400&fit=crop" 
                             alt="Suasana Rumah Rindu" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>
                </div>
            </section>

            <!-- Warisan Budaya Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-indigo-50 to-blue-50 p-6 sm:p-8 rounded-lg border-l-4 border-indigo-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Warisan Budaya & Nilai Historis
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Rumah Rindu bukan hanya sekadar bangunan bersejarah, tetapi juga simbol dari semangat kewirausahaan 
                            dan kerajinan lokal Malang. Melalui cerita H. Nur Rochim dan Bakiak Rindu, rumah ini mengajarkan kita 
                            tentang pentingnya inovasi dan kualitas dalam bisnis tradisional.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Koleksi perabotan antik yang terjaga dengan baik menjadi bukti nyata dari cara hidup keluarga pada era 
                            1950-an. Setiap objek menceritakan kisah tentang kehidupan sehari-hari, hobi, dan preferensi estetika 
                            keluarga.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                            Dengan tetap melestarikan Rumah Rindu, generasi saat ini berkontribusi dalam menjaga warisan budaya 
                            Indonesia yang kaya dan membantu generasi mendatang memahami sejarah lokal Malang dengan lebih baik.
                        </p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=600&h=400&fit=crop" 
                         alt="Warisan Budaya" 
                         class="w-full h-64 sm:h-72 md:h-80 object-cover rounded-lg shadow-lg">
                </div>
            </section>

            <!-- Discover Other Places Section -->
            <section class="mt-14 pt-12 border-t border-gray-200">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center font-display">
                    Jelajahi Tempat Lainnya
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1518156677180-95a2893f3e9f?w=400&h=250&fit=crop" 
                             alt="Rumah Namsin" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Namsin</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Rumah bersejarah dengan arsitektur tradisional.
                            </p>
                            <a href="#" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1537457984737-4e49e9c4f6df?w=400&h=250&fit=crop" 
                             alt="Omah Pak Puji" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Omah Pak Puji</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Wisata alam dengan koleksi barang antik.
                            </p>
                            <a href="#" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=250&fit=crop" 
                             alt="Rumah Jengki" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Jengki</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Tempat ngopi heritage dengan arsitektur Jengki.
                            </p>
                            <a href="{{ route('rumahjengki') }}" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=400&h=250&fit=crop" 
                             alt="Rumah Penghulu" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Penghulu</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Rumah bersejarah milik Penghulu pertama Kajoetangan.
                            </p>
                            <a href="{{ route('rumahpenghulu') }}" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 ring-2 ring-purple-600">
                        <img src="https://images.unsplash.com/photo-1523359556388-e5c84e9cf755?w=400&h=250&fit=crop" 
                             alt="Rumah Rindu" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Rindu</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Rumah warisan dari pengrajin bakiak era 1950-an.
                            </p>
                            <span class="text-purple-900 font-semibold text-sm flex items-center">
                                <i class="fas fa-check mr-2 text-green-600"></i> Anda di sini
                            </span>
                        </div>
                    </div>
                </div>
            </section>

        </article>

        <!-- Info Box Section -->
        <section class="mt-14 grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
            <!-- Informasi Penting -->
            <div class="bg-purple-50 rounded-lg p-6 sm:p-8 border-l-4 border-purple-900">
                <h3 class="text-xl sm:text-2xl font-bold text-purple-900 mb-4 flex items-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    Informasi Penting
                </h3>
                <ul class="space-y-3 text-gray-700 text-base">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-purple-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Lokasi:</strong> Jl. Basuki Rahmat Gang 6 No. 177, Kajoetangan, Malang</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-purple-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Luas Bangunan:</strong> 78 meter persegi</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-purple-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Tahun Dibangun:</strong> 1950-an</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-purple-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Renovasi:</strong> 1960</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-purple-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Pemilik Awal:</strong> H. Nur Rochim (Pengrajin Bakiak)</span>
                    </li>
                </ul>
            </div>

            <!-- Jam Akses -->
            <div class="bg-indigo-50 rounded-lg p-6 sm:p-8 border-l-4 border-indigo-900">
                <h3 class="text-xl sm:text-2xl font-bold text-indigo-900 mb-4 flex items-center">
                    <i class="fas fa-clock mr-3"></i>
                    Jam Akses
                </h3>
                <ul class="space-y-3 text-gray-700 text-base">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-indigo-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Senin - Minggu:</strong> 09:00 - 17:00 WIB</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-indigo-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Tiket Masuk:</strong> Gratis (donasi sukarela)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-indigo-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Fasilitas:</strong> Area duduk santai & pemandu wisata</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-indigo-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Catatan:</strong> Jam dapat berubah pada hari libur nasional</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="mt-12 bg-gradient-to-r from-purple-900 to-indigo-800 rounded-lg p-8 sm:p-10 text-white text-center">
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">
                Kunjungi Rumah Rindu Hari Ini!
            </h3>
            <p class="text-base sm:text-lg mb-6 text-purple-100 max-w-2xl mx-auto">
                Rasakan pesona sejarah Bakiak Rindu dan koleksi antik yang menawan di rumah warisan H. Nur Rochim yang berkarakter.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-block bg-white text-purple-900 font-bold px-6 md:px-8 py-3 rounded-lg hover:bg-purple-50 transition-colors duration-300 text-sm md:text-base">
                    📍 Lihat di Maps
                </a>
                <a href="#" class="inline-block bg-purple-700 text-white font-bold px-6 md:px-8 py-3 rounded-lg hover:bg-purple-600 transition-colors duration-300 text-sm md:text-base border-2 border-white">
                    📞 Hubungi Kami
                </a>
            </div>
        </section>

    </div>
</main>
@endsection
