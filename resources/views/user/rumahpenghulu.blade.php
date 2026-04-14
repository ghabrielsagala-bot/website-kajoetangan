@extends('template')

@section('main')
<main class="bg-gray-50 min-h-screen pt-8 pb-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section -->
        <section class="mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 font-display">
                Rumah Penghulu
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
            <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=1200&h=600&fit=crop" 
                 alt="Rumah Penghulu" 
                 class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-lg shadow-lg">
        </section>

        <!-- Main Content -->
        <article class="prose prose-sm sm:prose md:prose-lg max-w-none">
            
            <!-- Introduction Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-display">
                    Tentang Rumah Penghulu
                </h2>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                    Rumah Penghulu adalah salah satu bangunan heritage bersejarah yang terletak di Jalan Basuki Rahmat Gang 6 No.974, 
                    dan dibangun pada tahun 1920-an. Bangunan berukuran 80 meter persegi ini terkenal sebagai Rumah Penghulu karena 
                    pemiliknya, Bapak Rodial, bekerja sebagai Penghulu.
                </p>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                    Menurut penduduk sekitar, Bapak Rodial adalah Penghulu pertama di Kampoeng Kajoetangan, dengan kantor di Kantor Agama 
                    di Gang 2 Jl. Basuki Rahmat. Posisinya sebagai Penghulu membuat rumah ini menjadi tempat yang penting secara historis 
                    dalam perkembangan administrasi dan keagamaan di kawasan Kajoetangan.
                </p>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                    Pengunjung dapat menikmati suasana yang tenang di kursi yang tersedia di depan bangunan ini, dan merasakan nuansa 
                    sejarah yang kental dari masa lalu yang masih terpegang dengan kokoh hingga sekarang.
                </p>
            </section>

            <!-- Arsitektur Otentik Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-amber-50 to-orange-50 p-6 sm:p-8 rounded-lg border-l-4 border-amber-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Arsitektur Otentik & Terawat
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Arsitektur lama yang otentik dan terawat dengan baik masih dipertahankan hingga sekarang. Ciri-ciri arsitektur 
                            tradisional yang masih asli dapat dilihat dari berbagai elemen bangunan yang bernilai sejarah tinggi.
                        </p>
                        <ul class="space-y-3 text-sm md:text-base text-gray-700 mb-4">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Pintu Utama:</strong> Desain tradisional yang masih original dan kokoh</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Atap Pelana:</strong> Bentuk atap tradisional yang khas arsitektur lama</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Bentuk Bangunan:</strong> Persegi panjang yang memanjang ke belakang dengan proporsi sempurna</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-3 mt-1 text-xs font-bold">
                                    ✓
                                </span>
                                <span><strong>Material Tradisional:</strong> Batu bata kuno dan kayu yang tahan lama</span>
                            </li>
                        </ul>
                    </div>
                    <img src="https://images.unsplash.com/photo-1518156677180-95a2893f3e9f?w=600&h=400&fit=crop" 
                         alt="Detail Arsitektur Rumah Penghulu" 
                         class="w-full h-64 sm:h-72 md:h-80 object-cover rounded-lg shadow-lg">
                </div>
            </section>

            <!-- Sejarah Rumah Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Perjalanan Sejarah
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Dibangun Tahun 1920-an</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Rumah Penghulu dibangun pada tahun 1920-an dengan arsitektur tradisional yang kokoh dan mempertimbangkan 
                                faktor-faktor iklim tropis. Bangunan ini dirancang dengan bentuk persegi panjang yang memanjang ke belakang 
                                untuk optimasi ruang dan aliran udara.
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Rumah Bapak Rodial, Penghulu Pertama</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Pemiliknya adalah Bapak Rodial yang bekerja sebagai Penghulu - jabatan administratif penting di Kampoeng Kajoetangan. 
                                Menurut penduduk sekitar, Bapak Rodial adalah Penghulu pertama di Kampoeng Kajoetangan, dengan kantor di Kantor Agama 
                                di Gang 2 Jl. Basuki Rahmat. Hal ini membuat Rumah Penghulu menjadi landmark penting dalam sejarah pemerintahan lokal.
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Penambahan Fasilitas (Era Berikutnya)</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Seiring perjalanan waktu, ada beberapa penambahan pada bangunan seperti sebuah toko di sisi bangunan untuk 
                                memenuhi kebutuhan ekonomi keluarga. Namun, tidak ada perubahan signifikan pada keseluruhan struktur bangunan 
                                sejak awal, hanya sedikit renovasi pada tempat-tempat yang membutuhkan perbaikan untuk mempertahankan integritas struktur.
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Pelestarian Hingga Sekarang</h3>
                            <p class="text-base sm:text-lg text-gray-700">
                                Hingga hari ini, Rumah Penghulu masih dirawat dan dilestarikan sebagai situs bersejarah penting di Kampoeng Kajoetangan. 
                                Bangunan ini menjadi saksi hidup dari perjalanan panjang komunitas dan administrasi di kawasan ini, tetap mempertahankan 
                                nilai-nilai historis dan budaya yang mendalam.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Spesifikasi Bangunan Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Spesifikasi & Karakteristik
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                    <!-- Spec 1 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">📐</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Luas Bangunan</h3>
                        <p class="text-sm md:text-base text-gray-600">80 meter persegi dengan layout yang efisien</p>
                    </div>

                    <!-- Spec 2 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">📅</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Tahun Dibangun</h3>
                        <p class="text-sm md:text-base text-gray-600">1920-an dengan arsitektur tradisional</p>
                    </div>

                    <!-- Spec 3 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">🏛️</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Tipe Bangunan</h3>
                        <p class="text-sm md:text-base text-gray-600">Rumah tinggal heritage dengan toko</p>
                    </div>

                    <!-- Spec 4 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">🏠</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Bentuk Bangunan</h3>
                        <p class="text-sm md:text-base text-gray-600">Persegi panjang memanjang ke belakang</p>
                    </div>

                    <!-- Spec 5 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">🚪</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Pintu Utama</h3>
                        <p class="text-sm md:text-base text-gray-600">Desain tradisional yang masih original</p>
                    </div>

                    <!-- Spec 6 -->
                    <div class="bg-white p-5 md:p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border-t-4 border-amber-600">
                        <div class="text-3xl mb-3">📍</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Lokasi Strategis</h3>
                        <p class="text-sm md:text-base text-gray-600">Jl. Basuki Rahmat Gang 6 No.974</p>
                    </div>
                </div>
            </section>

            <!-- Galeri Rumah Penghulu -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Galeri Rumah Penghulu
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4">
                    <!-- Gallery Item 1 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=400&h=400&fit=crop" 
                             alt="Rumah Penghulu Eksterior" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1518156677180-95a2893f3e9f?w=400&h=400&fit=crop" 
                             alt="Pintu Utama" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=400&fit=crop" 
                             alt="Interior Rumah Penghulu" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 4 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1466214174435-bda6b6da8c45?w=400&h=400&fit=crop" 
                             alt="Sudut Rumah Penghulu" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300"></div>
                    </div>

                    <!-- Gallery Item 5 -->
                    <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 h-40 md:h-56">
                        <img src="https://images.unsplash.com/photo-1523359556388-e5c84e9cf755?w=400&h=400&fit=crop" 
                             alt="Atap Pelana" 
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

            <!-- Pengalaman Berkunjung Section -->
            <section class="mb-10 md:mb-14 bg-gradient-to-r from-blue-50 to-indigo-50 p-6 sm:p-8 rounded-lg border-l-4 border-blue-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Pengalaman Berkunjung
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Pengunjung dapat menikmati suasana yang tenang di kursi yang tersedia di depan bangunan ini. Duduk santai sambil 
                            menikmati hembusan angin yang sejuk dan merasakan nuansa sejarah yang kental dari masa lalu.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Setiap sudut dan detail bangunan bercerita tentang kehidupan di era 1920-an, cara hidup Bapak Rodial, dan 
                            perkembangan administratif Kampoeng Kajoetangan. Ini adalah kesempatan unik untuk terhubung dengan sejarah 
                            secara langsung dan personal.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                            Kunjungan Anda akan membawa pemahaman lebih dalam tentang pentingnya pelestarian warisan budaya dan bagaimana 
                            generasi masa lalu membentuk komunitas yang kami huni hari ini.
                        </p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1495521821757-a1efb6729352?w=600&h=400&fit=crop" 
                         alt="Suasana Pengunjung" 
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

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=400&h=250&fit=crop" 
                             alt="Rumah Penghulu" 
                             class="w-full h-40 sm:h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Penghulu</h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                Rumah bersejarah milik Penghulu pertama di Kajoetangan.
                            </p>
                            <span class="text-amber-900 font-semibold text-sm flex items-center">
                                <i class="fas fa-check mr-2 text-green-600"></i> Anda di sini
                            </span>
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
                                Tempat ngopi heritage dengan arsitektur Jengki yang unik.
                            </p>
                            <a href="{{ route('rumahjengki') }}" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                Lihat Selengkapnya
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
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
                        <span><strong>Lokasi:</strong> Jl. Basuki Rahmat Gang 6 No.974, Kajoetangan, Malang</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Luas Bangunan:</strong> 80 meter persegi</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Tahun Dibangun:</strong> 1920-an</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Pemilik Awal:</strong> Bapak Rodial (Penghulu Pertama)</span>
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
                        <span><strong>Senin - Minggu:</strong> 08:00 - 18:00 WIB</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Tiket Masuk:</strong> Gratis (donasi sukarela)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Fasilitas:</strong> Area duduk di depan bangunan</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-blue-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Catatan:</strong> Jam akses dapat berubah pada hari libur nasional</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="mt-12 bg-gradient-to-r from-amber-900 to-amber-800 rounded-lg p-8 sm:p-10 text-white text-center">
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">
                Kunjungi Rumah Penghulu Hari Ini!
            </h3>
            <p class="text-base sm:text-lg mb-6 text-amber-100 max-w-2xl mx-auto">
                Rasakan suasana tenang dan nuansa sejarah yang kental dari era 1920-an di kawasan Kajoetangan yang bersejarah ini.
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
