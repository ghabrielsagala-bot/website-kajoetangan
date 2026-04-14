


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
    </style>

    <main class="bg-cream-page min-h-screen font-body flex flex-col justify-between">
        
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 py-8 sm:py-10 md:pt-20 md:pb-24 w-full">
            
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-10 md:mb-12 w-full max-w-2xl">
                <h1 class="text-2xl sm:text-3xl md:text-5xl font-heritage font-bold text-black mb-2 sm:mb-3 leading-tight">
                    Pemesanan Tiket
                </h1>
                <p class="text-gray-700 text-sm sm:text-base md:text-lg px-2 sm:px-4">
                    Pesan tiket untuk mendapat pengalaman berharga di Kampung Kajoetangan
                </p>
            </div>

            <!-- Form Container -->
            <div class="w-full max-w-sm sm:max-w-md md:max-w-lg bg-transparent">
                <form action="{{ route('pembayaran.index') }}" method="POST" class="space-y-5 sm:space-y-6">
                    @csrf

                    <!-- Pilih Tiket -->
                    <div class="flex flex-col">
                        <label class="mb-2 text-sm sm:text-base font-semibold text-gray-800">Pilih Tiket</label>
                        <div class="relative">
                            <select id="ticketType" name="ticket_type" required class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 pr-10 text-gray-700 appearance-none focus:ring-2 focus:ring-amber-900 focus:outline-none cursor-pointer text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200">
                                <option value="0" data-price="0">--- Pilih Jenis Tiket ---</option>
                                <option value="lokal" data-price="5000">Tiket Pengunjung Lokal - Rp 5.000</option>
                                <option value="mancanegara" data-price="10000">Tiket Pengunjung Mancanegara - Rp 10.000</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 sm:px-4 text-gray-600">
                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Jumlah Tiket -->
                    <div class="flex flex-col">
                        <label class="mb-2 text-sm sm:text-base font-semibold text-gray-800">Jumlah Tiket</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="100" value="1" required class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200">
                    </div>

                    <!-- Total Display -->
                    <div class="bg-white rounded-lg p-4 sm:p-5 border-2 border-amber-900/20 shadow-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700 font-medium text-sm sm:text-base">Total Biaya:</span>
                            <div class="text-right">
                                <span class="text-2xl sm:text-3xl md:text-4xl font-heritage font-bold text-black">
                                    Rp <span id="totalDisplay">0</span>
                                </span>
                                <p class="text-xs text-gray-500 mt-1">Belum termasuk pajak</p>
                            </div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="bg-amber-50 border-l-4 border-amber-900 rounded-r-lg p-4 sm:p-5">
                        <p class="text-xs sm:text-sm text-gray-700">
                            <span class="font-semibold text-amber-900">ℹ️ Informasi:</span> Tiket lokal untuk warga Indonesia, tiket mancanegara untuk wisatawan internasional.
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-[#2D2D2D] hover:bg-black active:bg-gray-900 text-white text-base sm:text-lg font-semibold py-3 sm:py-4 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl focus:ring-4 focus:ring-amber-900/30 focus:outline-none mt-2 sm:mt-4">
                        Lanjut ke Pembayaran
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ticketSelect = document.getElementById('ticketType');
            const quantityInput = document.getElementById('quantity');
            const totalDisplay = document.getElementById('totalDisplay');

            function calculateTotal() {
                const selectedOption = ticketSelect.options[ticketSelect.selectedIndex];
                const price = parseInt(selectedOption.getAttribute('data-price')) || 0;
                const qty = parseInt(quantityInput.value) || 1;
                const total = price * qty;
                totalDisplay.innerText = total.toLocaleString('id-ID'); 
            }

            ticketSelect.addEventListener('change', calculateTotal);
            quantityInput.addEventListener('input', calculateTotal);
            
            // Validasi form sebelum submit
            const form = ticketSelect.closest('form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    if (ticketSelect.value === '0') {
                        e.preventDefault();
                        alert('Pilih jenis tiket terlebih dahulu!');
                        return false;
                    }
                });
            }
        });
    </script>

@endsection