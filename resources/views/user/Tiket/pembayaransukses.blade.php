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

        /* Animasi sukses */
        @keyframes bounce-in {
            0% { opacity: 0; transform: scale(0.3); }
            50% { opacity: 1; }
            100% { transform: scale(1); }
        }
        
        @keyframes slide-up {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .animate-bounce-in { animation: bounce-in 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55); }
        .animate-slide-up { animation: slide-up 0.8s ease-out; }

        .success-icon {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        @keyframes checkmark {
            0% { stroke-dashoffset: 50; }
            100% { stroke-dashoffset: 0; }
        }

        .checkmark {
            stroke-dasharray: 50;
            animation: checkmark 0.5s ease-out 0.3s forwards;
        }
    </style>

    <main class="bg-cream-page min-h-screen font-body flex flex-col justify-between">
        
        <!-- Main Content -->
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 py-8 sm:py-10 md:pt-20 md:pb-24 w-full">
            
            <!-- Success Container -->
            <div class="w-full max-w-sm sm:max-w-md md:max-w-2xl">
                
                <!-- Success Card -->
                <div class="bg-white rounded-2xl p-6 sm:p-8 md:p-12 shadow-2xl border-2 border-green-100 animate-slide-up">
                    
                    <!-- Success Icon -->
                    <div class="success-icon w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 mb-6 sm:mb-8 animate-bounce-in">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 md:w-16 md:h-16 text-white checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <!-- Success Message -->
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-heritage font-bold text-center text-black mb-2 sm:mb-3">
                        Pembayaran Berhasil!
                    </h1>
                    
                    <p class="text-center text-gray-700 text-sm sm:text-base md:text-lg mb-6 sm:mb-8 leading-relaxed">
                        Terima kasih atas pembelian tiket Anda. Bukti pembayaran telah kami terima dan sedang diverifikasi.
                    </p>

                    <!-- Status Timeline -->
                    <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-lg p-5 sm:p-6 md:p-8 mb-6 sm:mb-8 border border-green-200">
                        <h3 class="text-base sm:text-lg font-bold text-black mb-4 flex items-center">
                            <i class="fas fa-clipboard-check text-green-600 mr-2"></i>
                            Status Pesanan Anda
                        </h3>

                        <div class="space-y-4">
                            <!-- Step 1 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center bg-green-600 text-white rounded-full font-bold text-sm sm:text-base">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-gray-800 text-sm sm:text-base">Tiket Dipesan</p>
                                    <p class="text-xs sm:text-sm text-gray-600">Pesanan tiket Anda telah diterima</p>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center bg-green-600 text-white rounded-full font-bold text-sm sm:text-base">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-gray-800 text-sm sm:text-base">Pembayaran Dikirim</p>
                                    <p class="text-xs sm:text-sm text-gray-600">Bukti pembayaran Anda telah kami terima</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center bg-yellow-500 text-white rounded-full font-bold text-sm sm:text-base">
                                    <i class="fas fa-hourglass-half"></i>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-gray-800 text-sm sm:text-base">Verifikasi (1-24 Jam)</p>
                                    <p class="text-xs sm:text-sm text-gray-600">Tim kami sedang memverifikasi pembayaran Anda</p>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center bg-gray-300 text-gray-600 rounded-full font-bold text-sm sm:text-base">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-gray-800 text-sm sm:text-base">Tiket Dikirim</p>
                                    <p class="text-xs sm:text-sm text-gray-600">Tiket digital akan dikirim ke email Anda</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Details -->
                    <div class="bg-beige-input rounded-lg p-4 sm:p-5 md:p-6 mb-6 sm:mb-8 border border-amber-900/10">
                        <h4 class="text-base sm:text-lg font-bold text-black mb-3 sm:mb-4">Ringkasan Pesanan</h4>
                        
                        <div class="space-y-3 text-sm sm:text-base">
                            <div class="flex justify-between items-center pb-3 border-b border-gray-300">
                                <span class="text-gray-700">Jenis Tiket:</span>
                                <span class="font-semibold text-black capitalize">{{ session('ticket_type', 'Lokal') }}</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-300">
                                <span class="text-gray-700">Jumlah Tiket:</span>
                                <span class="font-semibold text-black">{{ session('quantity', 1) }} tiket</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-300">
                                <span class="text-gray-700">Metode Pembayaran:</span>
                                <span class="font-semibold text-black">QRIS</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700 font-semibold">Total Pembayaran:</span>
                                <span class="text-xl sm:text-2xl font-heritage font-bold text-black">Rp {{ number_format(session('total', 0), 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="bg-blue-50 border-l-4 border-blue-600 rounded-r-lg p-4 sm:p-5 md:p-6 mb-6 sm:mb-8">
                        <div class="flex gap-3">
                            <i class="fas fa-info-circle text-blue-600 text-lg sm:text-xl flex-shrink-0 mt-0.5"></i>
                            <div class="text-xs sm:text-sm text-gray-700">
                                <p class="font-semibold text-blue-600 mb-2">Informasi Penting:</p>
                                <ul class="space-y-1.5">
                                    <li>✓ Email konfirmasi telah dikirim ke alamat email Anda</li>
                                    <li>✓ Tiket digital akan dikirim setelah verifikasi selesai</li>
                                    <li>✓ Cek folder spam jika email belum diterima</li>
                                    <li>✓ Hubungi kami jika ada pertanyaan</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Next Steps -->
                    <div class="bg-amber-50 rounded-lg p-4 sm:p-5 md:p-6 mb-6 sm:mb-8 border-2 border-amber-200">
                        <h4 class="text-base sm:text-lg font-bold text-amber-900 mb-3 sm:mb-4">
                            <i class="fas fa-lightbulb mr-2"></i> Langkah Selanjutnya
                        </h4>
                        <ol class="space-y-2 sm:space-y-3 text-xs sm:text-sm text-gray-700 list-decimal list-inside">
                            <li>Tunggu konfirmasi verifikasi pembayaran (maksimal 24 jam)</li>
                            <li>Cek email Anda untuk menerima tiket digital</li>
                            <li>Cetak atau simpan tiket untuk ditunjukkan saat kunjungan</li>
                            <li>Datang ke lokasi Kampung Kajoetangan sesuai jadwal yang telah ditetapkan</li>
                        </ol>
                    </div>

                    <!-- Action Buttons -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                        <a href="{{ url('/') }}" class="text-center px-4 sm:px-6 py-3 sm:py-4 bg-amber-900 hover:bg-amber-800 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl text-sm sm:text-base">
                            <i class="fas fa-home mr-2"></i>
                            Kembali ke Beranda
                        </a>
                        <a href="{{ route('pemesanan.tiket') }}" class="text-center px-4 sm:px-6 py-3 sm:py-4 bg-gray-600 hover:bg-gray-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl text-sm sm:text-base">
                            <i class="fas fa-ticket-alt mr-2"></i>
                            Pesan Tiket Lagi
                        </a>
                    </div>
                </div>

                <!-- Contact Support -->
                <div class="text-center mt-8 sm:mt-10 md:mt-12">
                    <p class="text-gray-700 text-xs sm:text-sm mb-3">Ada pertanyaan?</p>
                    <a href="mailto:support@kampungkajoetangan.com" class="text-amber-900 hover:text-amber-800 font-semibold text-xs sm:text-sm transition-colors duration-200">
                        <i class="fas fa-envelope mr-1"></i>
                        Hubungi Tim Support Kami
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-brown-dark text-white pt-10 sm:pt-12 md:pt-16 mt-12 sm:mt-16">
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
