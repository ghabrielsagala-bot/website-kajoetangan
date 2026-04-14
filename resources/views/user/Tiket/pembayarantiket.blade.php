@extends('template')

@section('main')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600;700&display=swap');
        
        .font-heritage { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        
        .bg-cream-page { background-color: #FFFCF5; }
        .bg-beige-input { background-color: #F5F5DC; }
        .bg-brown-dark { background-color: #4A3627; }
        .bg-red-heritage { background-color: #9D3838; }
        .text-brown-dark { color: #4A3627; }

        /* Animasi pulse untuk QR Code */
        @keyframes pulse-soft {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        .animate-pulse-soft { animation: pulse-soft 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; }
    </style>

    <main class="bg-cream-page min-h-screen font-body flex flex-col justify-between">
        
        <!-- Main Content -->
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 py-8 sm:py-10 md:pt-20 md:pb-24 w-full">
            
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-10 md:mb-12 w-full max-w-2xl">
                <h1 class="text-2xl sm:text-3xl md:text-5xl font-heritage font-bold text-black mb-2 sm:mb-3 leading-tight">
                    Pembayaran Tiket
                </h1>
                <p class="text-gray-700 text-xs sm:text-sm md:text-lg px-2 sm:px-4">
                    Lengkapi data diri Anda dan pilih metode pembayaran
                </p>
            </div>

            <!-- Form Container -->
            <div class="w-full max-w-sm sm:max-w-md md:max-w-lg bg-transparent">
                <form action="{{ route('pembayaran.store') }}" method="POST" class="space-y-4 sm:space-y-5 md:space-y-6">
                    @csrf
                    
                    <input type="hidden" name="ticket_type" value="{{ $ticket_type }}">
                    <input type="hidden" name="total_price" value="{{ $total }}">
                    <input type="hidden" name="quantity" value="{{ $quantity }}">

                    <!-- Nama Lengkap -->
                    <div class="flex flex-col">
                        <label class="mb-2 text-sm sm:text-base font-semibold text-gray-800">Nama Lengkap</label>
                        <input type="text" name="name" required placeholder="Masukkan nama lengkap Anda" class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200 placeholder-gray-400">
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col">
                        <label class="mb-2 text-sm sm:text-base font-semibold text-gray-800">Email <span class="text-red-600">*</span></label>
                        <input type="email" name="email" required placeholder="example@email.com" class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200 placeholder-gray-400">
                    </div>

                    <!-- No HP & Jumlah Tiket (2 kolom di desktop) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                        <div class="flex flex-col">
                            <label class="mb-2 text-sm sm:text-base font-semibold text-gray-800">No HP</label>
                            <input type="tel" name="phone" placeholder="08xxxxxxxxxx" class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200 placeholder-gray-400">
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-2 text-sm sm:text-base font-semibold text-gray-800">Jumlah Tiket</label>
                            <input type="number" name="quantity" value="{{ $quantity }}" readonly class="w-full bg-gray-200 border-none rounded-lg p-3 sm:p-4 text-gray-600 cursor-not-allowed text-sm sm:text-base shadow-md focus:ring-0 font-semibold">
                        </div>
                    </div>

                    <!-- Total Biaya Display -->
                    <div class="bg-gradient-to-br from-amber-50 to-amber-100 rounded-lg p-4 sm:p-6 border-2 border-amber-900/20 shadow-md">
                        <p class="text-gray-700 text-sm mb-2">Total Biaya</p>
                        <p class="text-3xl sm:text-4xl md:text-5xl font-heritage font-bold text-black">
                            Rp {{ number_format($total, 0, ',', '.') }}
                        </p>
                        <p class="text-xs text-gray-600 mt-2">Jenis Tiket: <span class="font-semibold capitalize">{{ $ticket_type }}</span></p>
                    </div>

                    <!-- Payment Method Section -->
                    <div class="pt-2 sm:pt-4">
                        <h3 class="text-lg sm:text-xl font-bold text-black mb-4 sm:mb-6 flex items-center">
                            <i class="fas fa-credit-card mr-2 text-amber-900"></i>
                            Metode Pembayaran
                        </h3>
                        
                        <!-- QRIS Payment Box -->
                        <div class="border-2 border-dashed border-amber-900/30 rounded-lg p-6 sm:p-8 flex flex-col items-center justify-center bg-white/60 hover:bg-white/100 transition-all duration-300 shadow-sm hover:shadow-md">
                            <div class="text-center">
                                <!-- QRIS Logo -->
                                <div class="inline-block mb-4 p-4 bg-gradient-to-br from-amber-50 to-amber-100 rounded-lg animate-pulse-soft">
                                    <svg class="w-20 h-20 sm:w-24 sm:h-24 text-black" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- QRIS Box Frame -->
                                        <rect x="10" y="10" width="30" height="30" fill="currentColor"/>
                                        <rect x="50" y="10" width="30" height="30" fill="currentColor"/>
                                        <rect x="10" y="50" width="30" height="30" fill="currentColor"/>
                                        <rect x="50" y="50" width="30" height="30" fill="currentColor"/>
                                        
                                        <!-- Grid Pattern -->
                                        <rect x="15" y="15" width="20" height="20" fill="white" opacity="0.3"/>
                                        <rect x="55" y="15" width="20" height="20" fill="white" opacity="0.3"/>
                                        <rect x="15" y="55" width="20" height="20" fill="white" opacity="0.3"/>
                                        <rect x="55" y="55" width="20" height="20" fill="white" opacity="0.3"/>
                                    </svg>
                                </div>
                                
                                <p class="text-lg sm:text-xl font-bold text-black mb-2">QRIS</p>
                                <p class="text-xs sm:text-sm text-gray-600">Scan dengan aplikasi pembayaran Anda</p>
                                <p class="text-xs text-gray-500 mt-3 px-2">Metode pembayaran cepat, aman, dan mudah</p>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Button -->
                    <button type="submit" class="w-full bg-[#2D2D2D] hover:bg-black active:bg-gray-900 text-white text-base sm:text-lg font-semibold py-3 sm:py-4 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl focus:ring-4 focus:ring-amber-900/30 focus:outline-none mt-4 sm:mt-6 flex items-center justify-center gap-2">
                        <i class="fas fa-lock text-sm"></i>
                        Bayar Sekarang
                    </button>

                    <!-- Security Info -->
                    <p class="text-center text-xs text-gray-600 mt-3">
                        <i class="fas fa-shield-alt text-green-600 mr-1"></i>
                        Transaksi Anda aman dan terenkripsi
                    </p>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-brown-dark text-white pt-10 sm:pt-12 md:pt-16 mt-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10 pb-8 sm:pb-12">
                
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                    <h2 class="font-heritage text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Kampoeng Kadjoetangan Heritage</h2>
                    <p class="text-gray-300 text-xs sm:text-sm leading-relaxed max-w-xs mb-4 sm:mb-6">
                        Warisan budaya dan sejarah yang kaya dari Malang, menampilkan keindahan arsitektur kolonial dan kehidupan tradisional.
                    </p>
                    
                    <div class="border-t border-white/20 w-24 mb-3 sm:mb-4"></div>
                    <p class="text-xs text-gray-400 mb-2 sm:mb-3">Media Sosial Kami</p>
                    
                    <div class="flex space-x-2 sm:space-x-3 justify-center md:justify-start">
                        <a href="#" class="bg-white text-brown-dark w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center rounded hover:bg-gray-200 transition" title="YouTube">
                            <i class="fab fa-youtube text-sm"></i>
                        </a>
                        <a href="#" class="bg-white text-brown-dark w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center rounded hover:bg-gray-200 transition" title="Instagram">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="bg-white text-brown-dark w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center rounded hover:bg-gray-200 transition" title="Twitter">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="bg-white text-brown-dark w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center rounded hover:bg-gray-200 transition" title="Facebook">
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

            <div class="bg-red-heritage text-center py-3 sm:py-4 text-xs text-white/90 px-4">
                Copyright © Kampoeng Kadjoetangan Heritage 2025. Hak Cipta Dilindungi.
            </div>
        </footer>
    </main>

@endsection