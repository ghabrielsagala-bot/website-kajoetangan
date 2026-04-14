@extends('template')

@section('main')
<main class="bg-gray-50 min-h-screen pt-8 pb-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb Navigation -->
        <nav class="mb-8 flex items-center space-x-2 text-sm text-gray-600">
            <a href="{{ route('beranda') }}" class="hover:text-amber-600 transition-colors flex items-center">
                <i class="fas fa-home mr-1"></i>
                Beranda
            </a>
            <span class="text-gray-400">/</span>
            <span class="text-amber-600 font-semibold">Artikel</span>
        </nav>

        <!-- Header Section -->
        <section class="mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 font-display">
                Omah Pak Puji
            </h1>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-gray-600">
                <span class="flex items-center mb-2 sm:mb-0">
                    <i class="fas fa-calendar mr-2 text-amber-900"></i>
                    20 November 2025
                </span>
                <span class="flex items-center">
                    <i class="fas fa-user mr-2 text-amber-900"></i>
                    Admin Kajoetangan
                </span>
            </div>
        </section>

        <!-- Hero Image -->
        <section class="mb-8 md:mb-12">
            <img src="https://images.unsplash.com/photo-1515182629504-727d7753751f?w=1200&h=600&fit=crop" 
                 alt="Omah Pak Puji" 
                 class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-lg shadow-lg">
        </section>

        <!-- Main Content -->
        <article class="prose prose-sm sm:prose md:prose-lg max-w-none">
            
            <!-- Introduction Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-display">
                    Tentang Omah Pak Puji
                </h2>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                    Omah Pak Puji adalah wisata alam alami dengan sejarah bangunan bertaraf tinggi. Rumah ini 
                    dibangun pada zaman Belanda dengan sentuhan arsitektur Eropa yang kental. Dengan demikian, 
                    bangunan yang terletak di kawasan Kajoetangan ini memiliki nilai sejarah dan budaya yang 
                    tinggi untuk pelestarian kawasan bersejarah.
                </p>
                <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                    Omah Pak Puji memiliki koleksi barang-barang kuno dari berbagai era, di mana setiap barang 
                    menceritakan kisah tersendiri. Kunjungi tempat bersejarah di kawasan Kajoetangan ini dan nikmati 
                    pesona budaya lokal yang masih terawat dengan baik.
                </p>
            </section>

            <!-- Sejarah Tempat Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Sejarah Tempat
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center mb-8">
                    <div class="order-2 md:order-1">
                        <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=600&h=400&fit=crop" 
                             alt="Sejarah Omah Pak Puji" 
                             class="w-full h-64 sm:h-72 md:h-80 object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="order-1 md:order-2">
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">
                            Bangunan yang kami percayai sebagai Omah Pak Puji dibangun semenjak zaman penjajahan 
                            Belanda (± 100 tahun yang silam). Bangunan ini tersusun dari batu bata kuno dan struktur 
                            kayu jati yang kokoh dan tahan lama hingga sekarang.
                        </p>
                        <p class="text-base sm:text-lg text-gray-700 leading-relaxed">
                            Perjalanan waktu telah menciptakan patina yang indah pada dinding dan lantai ubin kuno, 
                            membuat setiap sudut ruangan penuh cerita dan kenangan sejarah yang mendalam. Rumah ini 
                            adalah jendela menuju masa lalu yang masih hidup dan berkembang.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Fakta Unik Section -->
            <section class="mb-10 md:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Fakta Unik
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div class="order-2 md:order-1">
                        <ul class="space-y-4 text-base sm:text-lg text-gray-700">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-4 mt-1 text-sm font-bold">
                                    ✓
                                </span>
                                <span>Umur bangunan mencapai lebih dari 100 tahun dengan struktur yang masih kokoh</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-4 mt-1 text-sm font-bold">
                                    ✓
                                </span>
                                <span>Menggunakan material berkualitas tinggi seperti batu bata kuno dan kayu jati asli</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-4 mt-1 text-sm font-bold">
                                    ✓
                                </span>
                                <span>Memiliki koleksi barang-barang antik dari berbagai era dan budaya</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-amber-900 text-white rounded-full mr-4 mt-1 text-sm font-bold">
                                    ✓
                                </span>
                                <span>Dirawat dan dilestarikan dengan sempurna untuk generasi mendatang</span>
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 md:order-2">
                        <img src="https://images.unsplash.com/photo-1560109355-543149e6f031?w=600&h=400&fit=crop" 
                             alt="Fakta Unik Omah Pak Puji" 
                             class="w-full h-64 sm:h-72 md:h-80 object-cover rounded-lg shadow-lg">
                    </div>
                </div>
            </section>

            <!-- Discover Other Places Section -->
            <section class="mt-14 pt-12 border-t border-gray-200">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center font-display">
                    Jelajahi Tempat Lainnya
                </h2>
                
                <!-- Carousel Container -->
                <div class="relative">
                    <!-- Carousel Wrapper -->
                    <div class="overflow-hidden">
                        <div id="carouselTrack" class="flex transition-transform duration-500 ease-out" style="transform: translateX(0)">
                            <!-- Card 1 -->
                            <div class="carousel-card w-full md:w-1/3 flex-shrink-0 px-2 md:px-3">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 h-full">
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
                            </div>

                            <!-- Card 2 -->
                            <div class="carousel-card w-full md:w-1/3 flex-shrink-0 px-2 md:px-3">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 ring-2 ring-amber-600 h-full">
                                    <img src="https://images.unsplash.com/photo-1537457984737-4e49e9c4f6df?w=400&h=250&fit=crop" 
                                         alt="Omah Pak Puji" 
                                         class="w-full h-40 sm:h-48 object-cover">
                                    <div class="p-4">
                                        <h3 class="text-lg font-bold text-gray-900 mb-2">Omah Pak Puji</h3>
                                        <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                            Wisata alam dengan koleksi barang antik dari berbagai era.
                                        </p>
                                        <span class="text-amber-900 font-semibold text-sm flex items-center">
                                            <i class="fas fa-check mr-2 text-green-600"></i> Anda di sini
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="carousel-card w-full md:w-1/3 flex-shrink-0 px-2 md:px-3">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 h-full">
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
                            </div>

                            <!-- Card 4 -->
                            <div class="carousel-card w-full md:w-1/3 flex-shrink-0 px-2 md:px-3">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 h-full">
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
                            </div>

                            <!-- Card 5 -->
                            <div class="carousel-card w-full md:w-1/3 flex-shrink-0 px-2 md:px-3">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 h-full">
                                    <img src="https://images.unsplash.com/photo-1560109355-543149e6f031?w=400&h=250&fit=crop" 
                                         alt="Rumah 1870" 
                                         class="w-full h-40 sm:h-48 object-cover">
                                    <div class="p-4">
                                        <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah 1870</h3>
                                        <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                            Bangunan heritage era 1870 untuk penggemar sejarah.
                                        </p>
                                        <a href="{{ route('rumah1870') }}" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                            Lihat Selengkapnya
                                            <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="carousel-card w-full md:w-1/3 flex-shrink-0 px-2 md:px-3">
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 h-full">
                                    <img src="https://images.unsplash.com/photo-1518156677180-95a2893f3e9f?w=400&h=250&fit=crop" 
                                         alt="Rumah Rindu" 
                                         class="w-full h-40 sm:h-48 object-cover">
                                    <div class="p-4">
                                        <h3 class="text-lg font-bold text-gray-900 mb-2">Rumah Rindu</h3>
                                        <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                            Rumah keluarga 1950s dengan cerita unik tentang sandal tradisional.
                                        </p>
                                        <a href="{{ route('rumahrindu') }}" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center">
                                            Lihat Selengkapnya
                                            <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left Arrow Button -->
                    <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-6 md:-translate-x-12 z-10 w-10 h-10 rounded-full bg-amber-900 text-white flex items-center justify-center hover:bg-amber-800 transition-colors duration-300 hidden md:flex"
                            onclick="moveCarousel(-1)">
                        <i class="fas fa-chevron-left text-lg"></i>
                    </button>

                    <!-- Right Arrow Button -->
                    <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-6 md:translate-x-12 z-10 w-10 h-10 rounded-full bg-amber-900 text-white flex items-center justify-center hover:bg-amber-800 transition-colors duration-300 hidden md:flex"
                            onclick="moveCarousel(1)">
                        <i class="fas fa-chevron-right text-lg"></i>
                    </button>
                </div>

                <!-- Carousel Indicator Dots -->
                <div class="flex justify-center gap-2 mt-6">
                    <button onclick="goToSlide(0)" class="carousel-dot w-2 h-2 rounded-full bg-amber-900 transition-all duration-300 active" data-index="0"></button>
                    <button onclick="goToSlide(1)" class="carousel-dot w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="1"></button>
                    <button onclick="goToSlide(2)" class="carousel-dot w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="2"></button>
                    <button onclick="goToSlide(3)" class="carousel-dot w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="3"></button>
                </div>
            </section>

        </article>

        <!-- Info Box Section -->
        <section class="mt-14 bg-amber-50 rounded-lg p-6 sm:p-8 border-l-4 border-amber-900">
            <h3 class="text-xl sm:text-2xl font-bold text-amber-900 mb-4 flex items-center">
                <i class="fas fa-info-circle mr-3"></i>
                Informasi Penting
            </h3>
            <ul class="space-y-3 text-gray-700 text-base">
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                    <span><strong>Jam Operasional:</strong> Senin - Minggu: 08:00 - 20:00</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                    <span><strong>Lokasi:</strong>Jalan Jenderal Basuki Rachmat Gang VI, Kelurahan Kauman, Kecamatan Klojen, Kota Malang, Jawa Timur.</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-amber-900 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                    <span><strong>Tiket Masuk:</strong> Rp. 5.000 per orang </span>
                </li>
            </ul>
        </section>

    </div>
</main>

<script>
    let currentSlide = 0;
    const totalCards = 6;
    const cardsPerView = window.innerWidth < 768 ? 1 : 3;
    const maxSlides = totalCards - cardsPerView + 1;

    function updateCarousel() {
        const track = document.getElementById('carouselTrack');
        const offset = -currentSlide * (100 / cardsPerView);
        track.style.transform = `translateX(${offset}%)`;
        
        // Update dots
        document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('active', 'bg-amber-900');
                dot.classList.remove('bg-gray-300');
                dot.style.width = '8px';
                dot.style.height = '8px';
            } else {
                dot.classList.remove('active', 'bg-amber-900');
                dot.classList.add('bg-gray-300');
                dot.style.width = '8px';
                dot.style.height = '8px';
            }
        });

        // Update button states
        document.getElementById('prevBtn').style.opacity = currentSlide === 0 ? '0.5' : '1';
        document.getElementById('nextBtn').style.opacity = currentSlide >= maxSlides - 1 ? '0.5' : '1';
    }

    function moveCarousel(direction) {
        const newSlide = currentSlide + direction;
        if (newSlide >= 0 && newSlide < maxSlides) {
            currentSlide = newSlide;
            updateCarousel();
        }
    }

    function goToSlide(index) {
        if (index >= 0 && index < maxSlides) {
            currentSlide = index;
            updateCarousel();
        }
    }

    // Initialize carousel
    updateCarousel();

    // Handle window resize
    window.addEventListener('resize', () => {
        updateCarousel();
    });
</script>

<!-- Back to Beranda Section -->
<section class="mt-14 pt-12 border-t border-gray-200">
    <div class="flex flex-col sm:flex-row gap-4 justify-between items-center">
        <a href="{{ route('beranda') }}" class="group inline-flex items-center px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-800 font-body font-semibold rounded-lg transition-all duration-300 ease-out transform hover:scale-105 active:scale-95">
            <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i>
            <span>Kembali ke Beranda</span>
        </a>
        <div class="flex items-center gap-3">
            <span class="text-sm text-gray-600 font-body">Bagikan artikel ini:</span>
            <div class="flex gap-2">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->url() }}" target="_blank" class="w-10 h-10 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ request()->url() }}" target="_blank" class="w-10 h-10 bg-blue-400 hover:bg-blue-500 text-white rounded-lg flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://wa.me/?text={{ request()->url() }}" target="_blank" class="w-10 h-10 bg-green-600 hover:bg-green-700 text-white rounded-lg flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection