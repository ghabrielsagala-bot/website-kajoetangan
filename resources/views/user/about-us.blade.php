@extends('template')

@section('main')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600;700&display=swap');
        
        .font-heritage { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Inter', sans-serif; }
    </style>

    <main class="bg-white font-body">
        
        <!-- Hero Section dengan Background Image -->
        <section class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[500px] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1576610616656-570eda14fbf0?w=1200&h=600&fit=crop" 
                 alt="Kampung Kajoetangan Heritage" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="py-12 sm:py-16 md:py-20 px-4 sm:px-6 bg-gray-50">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-heritage font-bold text-center text-black mb-8 sm:mb-12">
                    About Us
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-12 items-center mb-12 sm:mb-16">
                    <!-- Text Content -->
                    <div class="order-2 md:order-1">
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-4">
                            Berawal dari rencana untuk menjangkau para pelaku UMKM di sekitar kawasan Kajoetangan, kami menggerakkan berbagai inisiatif untuk memperkuat perekonomian lokal dan pelestarian budaya warisan setempat. Lewat program Community Based Tourism (CBT), kami memfasilitasi akses pasar dan mengoptimalkan potensi wisata budaya yang ada.
                        </p>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                            Dengan dukungan berbagai pihak, kami terus berinovasi dan berkomitmen untuk memberikan pengalaman wisata yang autentik, edukatif, dan berkelanjutan bagi setiap pengunjung yang datang ke Kampung Kajoetangan.
                        </p>
                    </div>

                    <!-- Image -->
                    <div class="order-1 md:order-2">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=400&fit=crop" 
                             alt="Tentang Kami" 
                             class="w-full h-64 sm:h-80 object-cover rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- Sejarah & Identitas Kami -->
        <section class="py-12 sm:py-16 md:py-20 px-4 sm:px-6 bg-white">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-heritage font-bold text-center text-black mb-12 sm:mb-16">
                    Sejarah &amp; Identitas Kami
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-12 items-center">
                    <!-- Image -->
                    <div class="order-2 md:order-1">
                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69b13d835?w=500&h=400&fit=crop" 
                             alt="Sejarah Kajoetangan" 
                             class="w-full h-64 sm:h-80 object-cover rounded-lg shadow-lg">
                    </div>

                    <!-- Text Content -->
                    <div class="order-1 md:order-2">
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-4">
                            Pelopor bergerak dari tiga orang anak muda UMKM dan perkampungan Kajoetangan, semuanya diajarkan melalui pelatihan dan pendampingan dari berbagai lembaga terkait yang peduli terhadap pengembangan pariwisataan dan pemberdayaan ekonomi lokal.
                        </p>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-4">
                            Identitas kami sebagai komunitas pelestari warisan budaya tercermin dalam setiap aspek kehidupan kampung yang masih mempertahankan nilai-nilai tradisional dan kearifan lokal. Dengan mengintegrasikan modernitas dan tradisi, kami menciptakan destinasi wisata yang unik dan berkesan.
                        </p>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                            Setiap rumah, setiap sudut jalan, dan setiap aktivitas masyarakat menceritakan kisah yang kaya akan makna historis dan budaya yang patut untuk dilestarikan dan dibagikan kepada generasi mendatang.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi & Misi -->
        <section class="py-12 sm:py-16 md:py-20 px-4 sm:px-6 bg-gray-50">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-12">
                    <!-- Visi -->
                    <div>
                        <h3 class="text-2xl sm:text-3xl font-heritage font-bold text-black mb-4">Visi</h3>
                        <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                            Mewujudkan wisata berkelas yang mengangkat nilai-nilai budaya lokal dan mampu memberdayakan masyarakat sekitarnya sehingga menciptakan ekonomi yang berkelanjutan bagi generasi sekarang dan masa depan.
                        </p>
                    </div>

                    <!-- Misi -->
                    <div>
                        <h3 class="text-2xl sm:text-3xl font-heritage font-bold text-black mb-4">Misi</h3>
                        <ul class="text-gray-700 text-sm sm:text-base leading-relaxed space-y-2">
                            <li>1. Menghadirkan informasi yang akurat dan menarik tentang potensi wisata Kajoetangan</li>
                            <li>2. Memfasilitasi kerjasama antar pelaku usaha dan komunitas lokal</li>
                            <li>3. Menyediakan platform digital untuk meningkatkan aksesibilitas produk lokal</li>
                            <li>4. Mendukung pelestarian warisan budaya melalui program-program berkelanjutan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team -->
        <section class="py-12 sm:py-16 md:py-20 px-4 sm:px-6 bg-white">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-heritage font-bold text-center text-black mb-12 sm:mb-16">
                    Our Team
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    <!-- Team Member 1 -->
                    <div class="text-center">
                        <div class="mb-4 overflow-hidden rounded-lg h-64 sm:h-72">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop" 
                                 alt="Team Member" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-black mb-2">Nama Anggota 1</h3>
                        <p class="text-gray-600 text-xs sm:text-sm">Posisi/Role</p>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="text-center">
                        <div class="mb-4 overflow-hidden rounded-lg h-64 sm:h-72">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop" 
                                 alt="Team Member" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-black mb-2">Nama Anggota 2</h3>
                        <p class="text-gray-600 text-xs sm:text-sm">Posisi/Role</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-amber-900 text-white pt-10 sm:pt-12 md:pt-16">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10 pb-8 sm:pb-12">
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                    <h2 class="font-heritage text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Kampoeng Kadjoetangan Heritage</h2>
                    <p class="text-gray-300 text-xs sm:text-sm leading-relaxed max-w-xs mb-4 sm:mb-6">
                        Warisan budaya dan sejarah yang kaya dari Malang, menampilkan keindahan arsitektur kolonial dan kehidupan tradisional yang masih terjaga.
                    </p>
                    
                    <div class="border-t border-white/20 w-24 mb-3 sm:mb-4"></div>
                    <p class="text-xs text-gray-300 mb-2 sm:mb-3">Media Sosial Kami</p>
                    
                    <div class="flex space-x-2 sm:space-x-3 justify-center md:justify-start">
                        <a href="#" class="bg-white text-amber-900 w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center rounded hover:bg-gray-200 transition" title="YouTube">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                        <a href="#" class="bg-white text-amber-900 w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center rounded hover:bg-gray-200 transition" title="Instagram">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="bg-white text-amber-900 w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center rounded hover:bg-gray-200 transition" title="Twitter">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="bg-white text-amber-900 w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center rounded hover:bg-gray-200 transition" title="Facebook">
                            <i class="fab fa-facebook text-sm"></i>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row sm:justify-end gap-6 sm:gap-12 text-xs sm:text-sm text-center sm:text-left">
                    <div>
                        <h3 class="font-bold mb-2 sm:mb-4 text-white text-sm sm:text-base">Website Kami</h3>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="#" class="hover:text-white transition duration-200">Beranda</a></li>
                            <li><a href="#" class="hover:text-white transition duration-200">Beri Masukan</a></li>
                            <li><a href="#" class="hover:text-white transition duration-200">Tentang Kami</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-2 sm:mb-4 text-white text-sm sm:text-base">Pusat Bantuan</h3>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="#" class="hover:text-white transition duration-200">Hubungi Kami</a></li>
                            <li><a href="#" class="hover:text-white transition duration-200">Kebijakan Cookie</a></li>
                            <li><a href="#" class="hover:text-white transition duration-200">Kebijakan Privasi</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-red-700 text-center py-3 sm:py-4 text-xs text-white/90 px-4">
                Copyright © Kampoeng Kadjoetangan Heritage 2025. Hak Cipta Dilindungi.
            </div>
        </footer>
    </main>

@endsection
