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

        /* Animasi untuk drag & drop */
        @keyframes pulse-dashed {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .animate-pulse-dashed { animation: pulse-dashed 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; }

        /* File upload area */
        .file-upload-area {
            border: 2px dashed #9D3838;
            border-radius: 0.5rem;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .file-upload-area:hover {
            background-color: rgba(157, 56, 56, 0.05);
            border-color: #4A3627;
        }

        .file-upload-area.dragover {
            background-color: rgba(157, 56, 56, 0.1);
            border-color: #4A3627;
        }

        /* Preview image */
        .preview-image {
            max-width: 100%;
            max-height: 300px;
            object-fit: contain;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

    <main class="bg-cream-page min-h-screen font-body flex flex-col justify-between">
        
        <!-- Main Content -->
        <div class="flex flex-col items-center justify-center px-4 sm:px-6 py-8 sm:py-10 md:pt-20 md:pb-24 w-full">
            
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-10 md:mb-12 w-full max-w-2xl">
                <h1 class="text-2xl sm:text-3xl md:text-5xl font-heritage font-bold text-black mb-2 sm:mb-3 leading-tight">
                    Upload Bukti Pembayaran
                </h1>
                <p class="text-gray-700 text-xs sm:text-sm md:text-lg px-2 sm:px-4">
                    Konfirmasi pembayaran Anda dengan mengunggah bukti transfer
                </p>
            </div>

            <!-- Form Container -->
            <div class="w-full max-w-sm sm:max-w-md md:max-w-lg bg-transparent">
                
                <!-- Order Summary Card -->
                <div class="bg-white rounded-lg p-4 sm:p-5 md:p-6 border-2 border-amber-900/20 shadow-md mb-6 sm:mb-8">
                    <h3 class="text-lg font-bold text-black mb-4 flex items-center">
                        <i class="fas fa-shopping-bag mr-2 text-amber-900"></i>
                        Ringkasan Pesanan
                    </h3>
                    
                    <div class="space-y-3 border-b border-gray-200 pb-4 mb-4">
                        <div class="flex justify-between text-sm sm:text-base">
                            <span class="text-gray-600">Jenis Tiket:</span>
                            <span class="font-semibold text-black capitalize">{{ $ticket_type ?? 'Lokal' }}</span>
                        </div>
                        <div class="flex justify-between text-sm sm:text-base">
                            <span class="text-gray-600">Jumlah Tiket:</span>
                            <span class="font-semibold text-black">{{ $quantity ?? 1 }} tiket</span>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 text-sm sm:text-base">Total Biaya:</span>
                        <p class="text-2xl sm:text-3xl font-heritage font-bold text-black">
                            Rp {{ number_format($total ?? 0, 0, ',', '.') }}
                        </p>
                    </div>
                </div>

                <!-- Upload Form -->
                <form action="{{ route('bukti.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 sm:space-y-5 md:space-y-6">
                    @csrf
                    
                    <!-- Hidden fields untuk data pesanan -->
                    <input type="hidden" name="ticket_type" value="{{ $ticket_type ?? 'lokal' }}">
                    <input type="hidden" name="quantity" value="{{ $quantity ?? 1 }}">
                    <input type="hidden" name="total_price" value="{{ $total ?? 0 }}">

                    <!-- File Upload Area -->
                    <div class="flex flex-col">
                        <label class="mb-2 text-sm sm:text-base font-semibold text-gray-800">Upload Bukti Pembayaran</label>
                        
                        <div class="file-upload-area bg-white" id="fileUploadArea">
                            <input type="file" name="bukti_bayar" id="buktiInput" class="hidden" accept="image/*,.pdf" required>
                            
                            <div class="flex flex-col items-center py-4 sm:py-6 md:py-8">
                                <i class="fas fa-cloud-upload-alt text-4xl sm:text-5xl text-amber-900 mb-3 sm:mb-4"></i>
                                <p class="text-sm sm:text-base font-semibold text-gray-800 mb-2">
                                    Seret atau klik untuk upload
                                </p>
                                <p class="text-xs sm:text-sm text-gray-600 mb-3 sm:mb-4">
                                    Format: JPG, PNG, PDF (Max 5MB)
                                </p>
                                <button type="button" class="px-4 sm:px-6 py-2 sm:py-3 bg-amber-900 text-white text-xs sm:text-sm font-semibold rounded-lg hover:bg-amber-800 transition-all duration-300">
                                    <i class="fas fa-folder-open mr-2"></i>
                                    Pilih File
                                </button>
                            </div>
                        </div>

                        <!-- Preview Area -->
                        <div id="previewArea" class="hidden mt-4 sm:mt-5">
                            <p class="text-xs sm:text-sm font-semibold text-gray-700 mb-3">Preview:</p>
                            <div class="relative bg-gray-100 rounded-lg p-3 sm:p-4">
                                <img id="previewImage" src="" alt="Preview" class="preview-image mx-auto">
                                <button type="button" onclick="document.getElementById('buktiInput').value = ''; document.getElementById('previewArea').classList.add('hidden'); document.getElementById('fileUploadArea').classList.remove('hidden');" class="absolute top-2 right-2 sm:top-3 sm:right-3 bg-red-600 text-white w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center rounded-full hover:bg-red-700 transition text-xs">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="bg-blue-50 border-l-4 border-blue-600 rounded-r-lg p-3 sm:p-4 md:p-5">
                        <p class="text-xs sm:text-sm text-gray-700">
                            <span class="font-semibold text-blue-600">💡 Panduan:</span> Pastikan bukti pembayaran jelas memperlihatkan:
                            <br class="hidden sm:block">• Nama pengirim dan penerima
                            <br>• Nominal transfer (Rp {{ number_format($total ?? 0, 0, ',', '.') }})
                            <br>• Tanggal dan waktu transaksi
                        </p>
                    </div>

                    <!-- Data Pelanggan -->
                    <div class="border-t border-gray-200 pt-4 sm:pt-5 md:pt-6">
                        <h4 class="text-base sm:text-lg font-bold text-black mb-3 sm:mb-4">Data Pelanggan</h4>
                        
                        <div class="space-y-3 sm:space-y-4">
                            <div class="flex flex-col">
                                <label class="mb-2 text-sm font-semibold text-gray-800">Nama Lengkap</label>
                                <input type="text" name="name" required placeholder="Masukkan nama lengkap Anda" class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200 placeholder-gray-400">
                            </div>

                            <div class="flex flex-col">
                                <label class="mb-2 text-sm font-semibold text-gray-800">Email <span class="text-red-600">*</span></label>
                                <input type="email" name="email" required placeholder="example@email.com" class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200 placeholder-gray-400">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                                <div class="flex flex-col">
                                    <label class="mb-2 text-sm font-semibold text-gray-800">No HP</label>
                                    <input type="tel" name="phone" placeholder="08xxxxxxxxxx" class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200 placeholder-gray-400">
                                </div>

                                <div class="flex flex-col">
                                    <label class="mb-2 text-sm font-semibold text-gray-800">Tanggal Transfer</label>
                                    <input type="date" name="tanggal_transfer" required class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200">
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <label class="mb-2 text-sm font-semibold text-gray-800">Catatan (Opsional)</label>
                                <textarea name="catatan" placeholder="Tambahkan catatan jika ada..." rows="3" class="w-full bg-beige-input border-none rounded-lg p-3 sm:p-4 text-gray-700 focus:ring-2 focus:ring-amber-900 focus:outline-none text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200 placeholder-gray-400 resize-none"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="flex items-start space-x-2 sm:space-x-3">
                        <input type="checkbox" name="agree_terms" id="agreeTerms" required class="mt-1 cursor-pointer">
                        <label for="agreeTerms" class="text-xs sm:text-sm text-gray-700 cursor-pointer">
                            Saya menyetujui bahwa semua data dan bukti pembayaran yang saya upload adalah benar dan dapat diverifikasi
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-amber-900 hover:bg-amber-800 active:bg-amber-950 text-white text-base sm:text-lg font-semibold py-3 sm:py-4 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl focus:ring-4 focus:ring-amber-900/30 focus:outline-none mt-4 sm:mt-6 flex items-center justify-center gap-2">
                        <i class="fas fa-check-circle text-sm"></i>
                        Konfirmasi dan Upload
                    </button>

                    <!-- Back to Order -->
                    <a href="{{ route('pemesanan.tiket') }}" class="w-full text-center text-amber-900 hover:text-amber-800 text-sm sm:text-base font-semibold py-2 sm:py-3 transition-colors duration-300">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali ke Pemesanan
                    </a>
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
            const fileUploadArea = document.getElementById('fileUploadArea');
            const buktiInput = document.getElementById('buktiInput');
            const previewArea = document.getElementById('previewArea');
            const previewImage = document.getElementById('previewImage');

            // Klik area untuk upload
            fileUploadArea.addEventListener('click', () => buktiInput.click());

            // Drag dan drop
            fileUploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                fileUploadArea.classList.add('dragover');
            });

            fileUploadArea.addEventListener('dragleave', () => {
                fileUploadArea.classList.remove('dragover');
            });

            fileUploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                fileUploadArea.classList.remove('dragover');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    buktiInput.files = files;
                    handleFileSelect(files[0]);
                }
            });

            // File input change
            buktiInput.addEventListener('change', (e) => {
                if (e.target.files.length > 0) {
                    handleFileSelect(e.target.files[0]);
                }
            });

            // Handle file selection
            function handleFileSelect(file) {
                // Validasi ukuran file (max 5MB)
                const maxSize = 5 * 1024 * 1024; // 5MB
                if (file.size > maxSize) {
                    alert('Ukuran file terlalu besar! Maksimal 5MB');
                    buktiInput.value = '';
                    return;
                }

                // Validasi tipe file
                const validTypes = ['image/jpeg', 'image/png', 'application/pdf'];
                if (!validTypes.includes(file.type)) {
                    alert('Format file tidak didukung! Gunakan JPG, PNG, atau PDF');
                    buktiInput.value = '';
                    return;
                }

                // Preview
                const reader = new FileReader();
                reader.onload = (e) => {
                    if (file.type === 'application/pdf') {
                        previewImage.src = 'data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 200 280%22%3E%3Crect fill=%22%23fff%22 width=%22200%22 height=%22280%22/%3E%3Crect fill=%22%23d32f2f%22 x=%2220%22 y=%2220%22 width=%22160%22 height=%2240%22/%3E%3Ctext x=%22100%22 y=%2248%22 font-size=%2224%22 fill=%22%23fff%22 text-anchor=%22middle%22 font-weight=%22bold%22%3EPDF%3C/text%3E%3Ctext x=%22100%22 y=%22150%22 font-size=%2216%22 fill=%22%23333%22 text-anchor=%22middle%22%3E' + file.name + '%3C/text%3E%3C/svg%3E';
                    } else {
                        previewImage.src = e.target.result;
                    }
                    
                    fileUploadArea.classList.add('hidden');
                    previewArea.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }

            // Form validation sebelum submit
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                if (!buktiInput.value) {
                    e.preventDefault();
                    alert('Silakan upload bukti pembayaran terlebih dahulu!');
                    return false;
                }

                const agreeTerms = document.getElementById('agreeTerms');
                if (!agreeTerms.checked) {
                    e.preventDefault();
                    alert('Silakan setujui syarat dan ketentuan terlebih dahulu!');
                    return false;
                }
            });
        });
    </script>

@endsection
