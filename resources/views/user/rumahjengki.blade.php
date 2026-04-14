@extends('template')

@section('main')
<main class="bg-gray-50 min-h-screen pt-8 pb-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section -->
        <section class="mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 font-display">
                Rumah Jengki
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
            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1200&h=600&fit=crop" 
                 alt="Rumah Jengki" 
                 class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-lg shadow-lg">
        </section>

        <!-- Main Content -->
        <article class="prose prose-sm sm:prose md:prose-lg max-w-none">
            
            <!-- Introduction Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-display">
                    Tentang Rumah Jengki
                </h2>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                    Rumah Jengki adalah salah satu bangunan heritage bersejarah yang terletak di sebelah Rumah Penghulu. 
                    Tepatnya di Jalan Basuki Rahmat Gang 6 No. 976, rumah ini mengusung gaya arsitektur Jengki yang 
                    merupakan gaya modernis yang mulai berkembang di Indonesia pasca kemerdekaan.
                </p>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                    Berdasarkan survei, rumah Jengki ini termasuk salah satu rumah terluas di wilayah Kajoetangan dengan 
                    luas sekitar 160 meter persegi. Bangunan ini memiliki ciri khas arsitektur yang unik dengan pagar 
                    seluruhnya terbuat dari kayu bambu dan atap yang berbentuk asimetris, menambahkan kesan autentik 
                    arsitektur Jengki pada bangunan ini.
                </p>
            </section>

            <!-- Ciri Khas Arsitektur Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-amber-50 to-orange-50 p-6 sm:p-8 rounded-lg border-l-4 border-amber-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Ciri Khas Arsitektur Jengki
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Gaya arsitektur Jengki adalah gaya modernis yang mulai berkembang di Indonesia pasca kemerdekaan. 
                            Salah satu ciri khasnya adalah variasi desain yang mencolok dan menarik perhatian.
                        </p>
                        <ul class="space-y-3 text-sm md:text-base text-gray-700">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Kerawang sebagai Ventilasi:</strong> Penggunaan kerawang yang indah untuk sirkulasi udara</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Desain Asimetris:</strong> Kusen dan jendela yang tidak simetris namun harmonis</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Atap Asimetris:</strong> Bentuk atap yang unik menambah karakter rumah</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Pagar Kayu Bambu:</strong> Pagar unik yang seluruhnya terbuat dari kayu bambu</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1513377811694-c52646db42da?w=600&h=400&fit=crop" 
                             alt="Detail Arsitektur Jengki" 
                             class="w-full h-64 sm:h-72 md:h-80 object-cover rounded-lg shadow-lg">
                    </div>
                </div>
            </section>

            <!-- Sejarah Rumah Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Sejarah Rumah Jengki
                </h2>
                <div class="space-y-6 mb-8">
                    <!-- Timeline Item 1 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                1
                            </div>
                            <div class="w-1 h-24 bg-amber-200 mt-2"></div>
                        </div>
                        <div class="pb-8 md:pb-12">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Awalnya Milik Hendarto</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Rumah ini awalnya dimiliki oleh Hendarto. Dulu rumah ini adalah bangunan klenengan, 
                                di mana separuh dari strukturnya terbuat dari tembok dan sebagian lainnya dari anyaman bambu.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                2
                            </div>
                            <div class="w-1 h-24 bg-amber-200 mt-2"></div>
                        </div>
                        <div class="pb-8 md:pb-12">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Berpindah ke HSM Ali (~1960-an)</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Rumah ini kemudian beralih kepemilikan pada sekitar tahun 1960-an kepada HSM Ali, 
                                seorang warga negara India. Perubahan kepemilikan ini membawa perspektif baru dalam 
                                pelestarian bangunan bersejarah.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                3
                            </div>
                            <div class="w-1 h-24 bg-amber-200 mt-2"></div>
                        </div>
                        <div class="pb-8 md:pb-12">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Renovasi Tahun 1968</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Pada tahun 1968, dilakukan renovasi pada beberapa bagian rumah. Dibantu dengan arsitek dari 
                                Universitas Airlangga (Unair), yaitu Ir. Daryo, untuk merancang ulang rumah tersebut menjadi 
                                lebih kokoh dan sesuai dengan standar arsitektur modern.
                            </p>
                        </div>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-amber-600 text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                4
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Menjadi Tempat Ngopi (Agustus 2023)</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Rumah Jengki baru-baru ini diubah menjadi tempat ngopi sekitar bulan Agustus 2023 setelah 
                                mendapat persetujuan dari keluarga yang masih tinggal di Rumah Jengki hingga saat ini. 
                                Transformasi ini membuat rumah menjadi lebih hidup dan dapat dinikmati oleh masyarakat luas.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Fitur & Fasilitas Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Fitur & Fasilitas
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                    <!-- Feature 1 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">🏛️</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Luas Bangunan</h3>
                        <p class="text-sm md:text-base text-gray-600">Sekitar 160 meter persegi dengan desain yang efisien</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">🎨</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Arsitektur Jengki</h3>
                        <p class="text-sm md:text-base text-gray-600">Gaya modernis pasca kemerdekaan dengan desain unik</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">☕</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Tempat Ngopi</h3>
                        <p class="text-sm md:text-base text-gray-600">Kafe heritage yang nyaman sejak Agustus 2023</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">🎋</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Pagar Kayu Bambu</h3>
                        <p class="text-sm md:text-base text-gray-600">Pagar unik seluruhnya dari kayu bambu original</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">🪟</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Kerawang Ventilasi</h3>
                        <p class="text-sm md:text-base text-gray-600">Desain kerawang indah untuk sirkulasi udara alami</p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">📸</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Spot Foto</h3>
                        <p class="text-sm md:text-base text-gray-600">Area yang sempurna untuk fotografi heritage</p>
                    </div>
                </div>
            </section>

            <!-- Galeri Rumah Jengki -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Galeri Rumah Jengki
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4">
                    <!-- Gallery Item 1 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=400&fit=crop" 
                             alt="Rumah Jengki Eksterior" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1513377811694-c52646db42da?w=400&h=400&fit=crop" 
                             alt="Detail Arsitektur" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=400&fit=crop" 
                             alt="Interior Rumah Jengki" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 4 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1466214174435-bda6b6da8c45?w=400&h=400&fit=crop" 
                             alt="Sudut Rumah Jengki" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 5 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1523359556388-e5c84e9cf755?w=400&h=400&fit=crop" 
                             alt="Pagar Kayu Bambu" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 6 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=400&h=400&fit=crop" 
                             alt="Suasana Malam" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>
                </div>
            </section>

            <!-- Suasana Era 1950-an Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-orange-50 to-yellow-50 p-6 sm:p-8 rounded-lg border-l-4 border-amber-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Atmosfer Era 1950-an yang Autentik
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Melintasi atau mengunjungi rumah ini, pengunjung akan merasakan atmosfer era 1950-an yang kental. 
                            Setiap sudut ruangan dirancang untuk membawa Anda kembali ke masa lalu yang indah dan penuh kenangan.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Dari dekorasi interior yang vintage, hingga furniture antik yang masih dipertahankan, semuanya 
                            menciptakan pengalaman yang immersive dan memorable untuk setiap pengunjung yang datang.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                            Sebagai tempat ngopi modern yang mempertahankan nilai-nilai heritage, Rumah Jengki menawarkan 
                            kombinasi unik antara kenyamanan modern dan pesona tradisional yang sulit ditemukan di tempat lain.
                        </p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1495521821757-a1efb6729352?w=600&h=400&fit=crop" 
                         alt="Suasana Era 1950-an" 
                         class="w-full h-64 sm:h-72 md:h-80 object-cover rounded-lg shadow-lg">
                </div>
            </section>

            <!-- Discover Other Places Section -->
            <section class="mt-14 pt-12 border-t border-gray-200">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center font-display">
                    Jelajahi Tempat Lainnya
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1518156677180-95a2893f3e9f?w=400&h=250&fit=crop" 
                             alt="Rumah Namsin" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Namsin</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Rumah bersejarah dengan arsitektur tradisional yang memukau.
                            </p>
                            <a href="#" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1515182629504-727d7753751f?w=400&h=250&fit=crop" 
                             alt="Omah Pak Puji" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Omah Pak Puji</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Wisata alam dengan koleksi barang antik dari berbagai era.
                            </p>
                            <a href="#" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 ring-2 ring-amber-600">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=250&fit=crop" 
                             alt="Rumah Jengki" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Jengki</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Destinasi wisata edukatif dan tempat ngopi heritage yang menarik.
                            </p>
                            <span class="text-amber-900 font-semibold text-sm flex items-center">
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
            <div class="bg-amber-50 rounded-lg p-6 sm:p-8 border-l-4 border-amber-900">
                <h3 class="text-xl sm:text-2xl font-bold text-amber-900 mb-4 flex items-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    Informasi Penting
                </h3>
                <ul class="space-y-3 text-gray-700 text-base">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Lokasi:</strong> Jl. Basuki Rahmat Gang 6 No. 976, Kajoetangan, Malang</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Luas Bangunan:</strong> ±160 meter persegi</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Tipe:</strong> Rumah Heritage & Kafe</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Arsitektur:</strong> Gaya Jengki Modernis (1950-an)</span>
                    </li>
                </ul>
            </div>

            <!-- Jam Operasional -->
            <div class="bg-blue-50 rounded-lg p-6 sm:p-8 border-l-4 border-blue-900">
                <h3 class="text-xl sm:text-2xl font-bold text-blue-900 mb-4 flex items-center">
                    <i class="fas fa-clock mr-3"></i>
                    Jam Operasional
                </h3>
                <ul class="space-y-3 text-gray-700 text-base">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Senin - Jumat:</strong> 09:00 - 21:00</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Sabtu - Minggu:</strong> 09:00 - 22:00</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Tiket Masuk:</strong> Gratis (bayar minuman)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Menu Minuman:</strong> Rp. 15.000 - 40.000</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="mt-12 bg-gradient-to-r from-amber-900 to-amber-800 rounded-lg p-8 sm:p-10 text-white text-center">
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">
                Kunjungi Rumah Jengki Hari Ini!
            </h3>
            <p class="text-base sm:text-lg mb-6 text-amber-100 max-w-2xl mx-auto">
                Rasakan atmosfer era 1950-an yang autentik sambil menikmati minuman favorit Anda di tempat ngopi heritage ini.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-block bg-white text-amber-900 font-bold px-6 md:px-8 py-3 rounded-lg hover:bg-amber-50 transition-colors duration-300 text-sm md:text-base">
                    📍 Lihat di Maps
                </a>
                <a href="#" class="inline-block bg-amber-700 text-white font-bold px-6 md:px-8 py-3 rounded-lg hover:bg-amber-600 transition-colors duration-300 text-sm md:text-base border-2 border-white">
                    📞 Hubungi Kami
                </a>
            </div>
        </section>

    </div>
</main>
@endsection
