@extends('template')

@section('main')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600;700&display=swap');
        
        .font-heritage { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        
        .bg-cream { background-color: #FFFCF5; }
        .bg-brown { background-color: #6B4423; }
        .bg-brown-dark { background-color: #4A2F1A; }
        .text-brown { color: #6B4423; }
    </style>

    <!-- Navbar Admin -->
    @include('Admin.navbar-admin')

    <main class="bg-cream min-h-screen font-body">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 py-6 sm:py-8">
            
            <!-- Page Title -->
            <div class="mb-6 sm:mb-8">
                <a href="{{ route('admin.orders.index') }}" class="text-brown hover:text-brown-dark text-sm font-semibold mb-3 inline-block">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali
                </a>
                <h1 class="text-3xl sm:text-4xl font-heritage font-bold text-brown-dark">
                    Edit Pesanan
                </h1>
                <p class="text-gray-600 text-sm sm:text-base mt-1">Update informasi pesanan #{{ $order->id }}</p>
            </div>

            <!-- Form -->
            <div class="bg-white rounded-lg shadow-lg p-6 sm:p-8">
                <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="space-y-4 sm:space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Row 1: Nama & Email -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="nama_awalan" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Pengunjung <span class="text-red-600">*</span>
                            </label>
                            <input type="text" id="nama_awalan" name="nama_awalan" value="{{ old('nama_awalan', $order->nama_awalan) }}" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('nama_awalan') border-red-500 @enderror"
                                placeholder="Nama lengkap">
                            @error('nama_awalan')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email <span class="text-red-600">*</span>
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email', $order->email) }}" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('email') border-red-500 @enderror"
                                placeholder="email@example.com">
                            @error('email')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Row 2: Tipe Tiket & Metode Pembayaran -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="tenis_tiket" class="block text-sm font-semibold text-gray-700 mb-2">
                                Jenis Tiket <span class="text-red-600">*</span>
                            </label>
                            <select id="tenis_tiket" name="tenis_tiket" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('tenis_tiket') border-red-500 @enderror">
                                <option value="">-- Pilih Jenis Tiket --</option>
                                <option value="Lokal" {{ old('tenis_tiket', $order->tenis_tiket) === 'Lokal' ? 'selected' : '' }}>Lokal</option>
                                <option value="Mancanegara" {{ old('tenis_tiket', $order->tenis_tiket) === 'Mancanegara' ? 'selected' : '' }}>Mancanegara</option>
                            </select>
                            @error('tenis_tiket')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="metode_pembayaran" class="block text-sm font-semibold text-gray-700 mb-2">
                                Metode Pembayaran <span class="text-red-600">*</span>
                            </label>
                            <select id="metode_pembayaran" name="metode_pembayaran" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('metode_pembayaran') border-red-500 @enderror">
                                <option value="">-- Pilih Metode --</option>
                                <option value="Gopay" {{ old('metode_pembayaran', $order->metode_pembayaran) === 'Gopay' ? 'selected' : '' }}>Gopay</option>
                                <option value="QRIS" {{ old('metode_pembayaran', $order->metode_pembayaran) === 'QRIS' ? 'selected' : '' }}>QRIS</option>
                            </select>
                            @error('metode_pembayaran')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Row 3: Jumlah & Total Harga -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="jumlah_tiket" class="block text-sm font-semibold text-gray-700 mb-2">
                                Jumlah Tiket <span class="text-red-600">*</span>
                            </label>
                            <input type="number" id="jumlah_tiket" name="jumlah_tiket" value="{{ old('jumlah_tiket', $order->jumlah_tiket) }}" min="1"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('jumlah_tiket') border-red-500 @enderror">
                            @error('jumlah_tiket')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="total_harga" class="block text-sm font-semibold text-gray-700 mb-2">
                                Total Harga (Rp) <span class="text-red-600">*</span>
                            </label>
                            <input type="number" id="total_harga" name="total_harga" value="{{ old('total_harga', $order->total_harga) }}" min="0"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('total_harga') border-red-500 @enderror"
                                placeholder="0">
                            @error('total_harga')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Row 4: Status & Bukti Pembayaran -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="status_pembayaran" class="block text-sm font-semibold text-gray-700 mb-2">
                                Status Pembayaran <span class="text-red-600">*</span>
                            </label>
                            <select id="status_pembayaran" name="status_pembayaran" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('status_pembayaran') border-red-500 @enderror">
                                <option value="">-- Pilih Status --</option>
                                <option value="Ditunggu" {{ old('status_pembayaran', $order->status_pembayaran) === 'Ditunggu' ? 'selected' : '' }}>Ditunggu</option>
                                <option value="Diterima" {{ old('status_pembayaran', $order->status_pembayaran) === 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                <option value="Ditolak" {{ old('status_pembayaran', $order->status_pembayaran) === 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </select>
                            @error('status_pembayaran')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="bukti_pembayaran" class="block text-sm font-semibold text-gray-700 mb-2">
                                Bukti Pembayaran (Opsional)
                            </label>
                            <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept=".jpg,.jpeg,.png,.pdf"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('bukti_pembayaran') border-red-500 @enderror">
                            <p class="text-gray-500 text-xs mt-1">Format: JPG, JPEG, PNG, PDF (Max: 2MB)</p>
                            @if ($order->bukti_pembayaran)
                                <p class="text-gray-600 text-xs mt-1">File sekarang: {{ $order->bukti_pembayaran }}</p>
                            @endif
                            @error('bukti_pembayaran')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Row 5: Tanggal Berlaku & Kadaluarsa -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="tanggal_berlaku" class="block text-sm font-semibold text-gray-700 mb-2">
                                Tanggal Berlaku
                            </label>
                            <input type="date" id="tanggal_berlaku" name="tanggal_berlaku" value="{{ old('tanggal_berlaku', $order->tanggal_berlaku?->format('Y-m-d')) }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('tanggal_berlaku') border-red-500 @enderror">
                            @error('tanggal_berlaku')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tanggal_kadaluarsa" class="block text-sm font-semibold text-gray-700 mb-2">
                                Tanggal Kadaluarsa
                            </label>
                            <input type="date" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" value="{{ old('tanggal_kadaluarsa', $order->tanggal_kadaluarsa?->format('Y-m-d')) }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-brown focus:ring-2 focus:ring-brown/20 @error('tanggal_kadaluarsa') border-red-500 @enderror">
                            @error('tanggal_kadaluarsa')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-4 sm:pt-6">
                        <button type="submit" class="flex-1 bg-brown hover:bg-brown-dark text-white font-semibold py-2 px-4 rounded-lg transition duration-200 text-sm sm:text-base">
                            <i class="fas fa-save mr-2"></i>Update Pesanan
                        </button>
                        <a href="{{ route('admin.orders.index') }}" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition duration-200 text-sm sm:text-base text-center">
                            <i class="fas fa-times mr-2"></i>Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-brown-dark text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8 text-center text-sm">
            <p>© 2025 Kampoeng Kajoetangan Heritage. All rights reserved.</p>
        </div>
    </footer>

@endsection
