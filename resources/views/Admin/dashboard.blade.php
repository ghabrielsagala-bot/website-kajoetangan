@extends('template')

@section('main')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600;700&display=swap');
        
        .font-heritage { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        
        .bg-cream-page { background-color: #FFFCF5; }
        .bg-brown-dark { background-color: #4A3627; }
        .bg-red-heritage { background-color: #9D3838; }
    </style>

    <!-- Replace navbar dengan navbar admin -->
    @include('Admin.navbar-admin')

    <main class="bg-cream-page min-h-screen font-body">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8 sm:py-12">
            
            <!-- Page Title -->
            <div class="mb-8 sm:mb-12">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-heritage font-bold text-black mb-2">
                    Dashboard Admin
                </h1>
                <p class="text-gray-700 text-sm sm:text-base">Kelola pembayaran tiket dan transaksi pengunjung</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8 sm:mb-12">
                
                <!-- Card 1: Total Transaksi -->
                <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 border-l-4 border-amber-900 hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-600 text-xs sm:text-sm font-medium mb-1">Total Transaksi</p>
                            <p class="text-2xl sm:text-3xl font-bold text-black">156</p>
                            <p class="text-xs text-green-600 mt-2"><i class="fas fa-arrow-up mr-1"></i>+12% bulan ini</p>
                        </div>
                        <div class="bg-amber-900/10 p-3 rounded-lg">
                            <i class="fas fa-exchange-alt text-amber-900 text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Pending Verifikasi -->
                <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 border-l-4 border-red-heritage hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-600 text-xs sm:text-sm font-medium mb-1">Menunggu Verifikasi</p>
                            <p class="text-2xl sm:text-3xl font-bold text-red-heritage">8</p>
                            <p class="text-xs text-orange-600 mt-2"><i class="fas fa-clock mr-1"></i>Perlu segera diproses</p>
                        </div>
                        <div class="bg-red-heritage/10 p-3 rounded-lg">
                            <i class="fas fa-hourglass-half text-red-heritage text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Terverifikasi -->
                <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 border-l-4 border-green-600 hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-600 text-xs sm:text-sm font-medium mb-1">Terverifikasi</p>
                            <p class="text-2xl sm:text-3xl font-bold text-green-600">142</p>
                            <p class="text-xs text-blue-600 mt-2"><i class="fas fa-check-circle mr-1"></i>Selesai diproses</p>
                        </div>
                        <div class="bg-green-600/10 p-3 rounded-lg">
                            <i class="fas fa-check-circle text-green-600 text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Total Revenue -->
                <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 border-l-4 border-blue-600 hover:shadow-lg transition-shadow duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-600 text-xs sm:text-sm font-medium mb-1">Total Pendapatan</p>
                            <p class="text-2xl sm:text-3xl font-bold text-blue-600">Rp 1.42M</p>
                            <p class="text-xs text-green-600 mt-2"><i class="fas fa-arrow-up mr-1"></i>+8.5% vs bulan lalu</p>
                        </div>
                        <div class="bg-blue-600/10 p-3 rounded-lg">
                            <i class="fas fa-coins text-blue-600 text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Payments Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8 mb-8 sm:mb-12">
                
                <!-- Main Table -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="bg-gradient-to-r from-amber-900 to-amber-800 px-5 sm:px-6 py-4">
                            <h2 class="text-lg sm:text-xl font-bold text-white flex items-center gap-2">
                                <i class="fas fa-list"></i> Pembayaran Terbaru
                            </h2>
                        </div>

                        <!-- Table Container -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead>
                                    <tr class="bg-gray-100 border-b">
                                        <th class="px-4 py-3 text-left font-semibold text-gray-700">ID</th>
                                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Nama</th>
                                        <th class="px-4 py-3 text-left font-semibold text-gray-700 hidden sm:table-cell">Jumlah</th>
                                        <th class="px-4 py-3 text-left font-semibold text-gray-700 hidden md:table-cell">Total</th>
                                        <th class="px-4 py-3 text-center font-semibold text-gray-700">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y">
                                    <!-- Sample Data -->
                                    @forelse([
                                        ['id' => '001', 'name' => 'Budi Santoso', 'qty' => 2, 'total' => 10000, 'status' => 'pending'],
                                        ['id' => '002', 'name' => 'Siti Nurhaliza', 'qty' => 1, 'total' => 5000, 'status' => 'verified'],
                                        ['id' => '003', 'name' => 'Ahmad Syahrul', 'qty' => 3, 'total' => 30000, 'status' => 'pending'],
                                        ['id' => '004', 'name' => 'Eka Putri', 'qty' => 2, 'total' => 20000, 'status' => 'verified'],
                                        ['id' => '005', 'name' => 'Rini Wijaya', 'qty' => 1, 'total' => 10000, 'status' => 'rejected'],
                                    ] as $payment)
                                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                                            <td class="px-4 py-3 font-mono text-xs font-semibold text-amber-900">#{{ $payment['id'] }}</td>
                                            <td class="px-4 py-3">
                                                <div class="font-medium text-gray-900">{{ $payment['name'] }}</div>
                                            </td>
                                            <td class="px-4 py-3 hidden sm:table-cell">
                                                <span class="bg-amber-100 text-amber-900 px-2 py-1 rounded text-xs font-semibold">
                                                    {{ $payment['qty'] }} tiket
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 hidden md:table-cell text-gray-900 font-semibold">
                                                Rp {{ number_format($payment['total'], 0, ',', '.') }}
                                            </td>
                                            <td class="px-4 py-3 text-center">
                                                @if ($payment['status'] === 'pending')
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                        <i class="fas fa-clock mr-1"></i> Pending
                                                    </span>
                                                @elseif ($payment['status'] === 'verified')
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                        <i class="fas fa-check mr-1"></i> Verified
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                        <i class="fas fa-times mr-1"></i> Rejected
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-4 py-8 text-center text-gray-500">
                                                <i class="fas fa-inbox text-3xl mb-2 block opacity-50"></i>
                                                Tidak ada data pembayaran
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="px-5 sm:px-6 py-4 border-t bg-gray-50">
                            <a href="{{ route('admin.pay-history') }}" class="text-amber-900 hover:text-amber-700 font-semibold text-sm flex items-center gap-1 transition-colors duration-200">
                                Lihat Semua <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Stats -->
                <div class="lg:col-span-1 space-y-4 sm:space-y-6">
                    
                    <!-- Status Summary -->
                    <div class="bg-white rounded-lg shadow-md p-5 sm:p-6">
                        <h3 class="text-lg font-bold text-black mb-4 flex items-center gap-2">
                            <i class="fas fa-chart-pie text-amber-900"></i> Ringkasan Status
                        </h3>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between items-center pb-3 border-b">
                                <span class="text-gray-700 text-sm font-medium">Pending</span>
                                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-bold">8</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b">
                                <span class="text-gray-700 text-sm font-medium">Verified</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-bold">142</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b">
                                <span class="text-gray-700 text-sm font-medium">Rejected</span>
                                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-bold">6</span>
                            </div>
                            <div class="flex justify-between items-center pt-2">
                                <span class="text-gray-700 text-sm font-medium font-bold">Total</span>
                                <span class="bg-amber-900 text-white px-3 py-1 rounded-full text-sm font-bold">156</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-lg shadow-md p-5 sm:p-6">
                        <h3 class="text-lg font-bold text-black mb-4 flex items-center gap-2">
                            <i class="fas fa-lightning-bolt text-amber-900"></i> Aksi Cepat
                        </h3>
                        
                        <div class="space-y-2">
                            <a href="{{ route('admin.pay-history') }}" class="w-full bg-amber-900 hover:bg-amber-800 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 text-sm flex items-center justify-center gap-2">
                                <i class="fas fa-check-circle"></i> Verifikasi Pembayaran
                            </a>
                            <a href="{{ route('admin.ticket') }}" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 text-sm flex items-center justify-center gap-2">
                                <i class="fas fa-plus"></i> Kelola Tiket
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-brown-dark text-white pt-10 sm:pt-12 md:pt-16 mt-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10 pb-8 sm:pb-12">
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <h2 class="font-heritage text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Kampoeng Kadjoetangan Heritage</h2>
                <p class="text-gray-300 text-xs sm:text-sm leading-relaxed max-w-xs mb-4 sm:mb-6">
                    Admin Dashboard untuk mengelola pembayaran tiket dan transaksi pengunjung Kampung Kajoetangan Heritage.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row sm:justify-end gap-6 sm:gap-12 text-xs sm:text-sm text-center sm:text-left">
                <div>
                    <h3 class="font-bold mb-2 sm:mb-4 text-white text-sm sm:text-base">Menu Admin</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('admin.dashboard') }}" class="hover:text-white transition duration-200">Dashboard</a></li>
                        <li><a href="{{ route('admin.pay-history') }}" class="hover:text-white transition duration-200">Riwayat Pembayaran</a></li>
                        <li><a href="{{ route('admin.ticket') }}" class="hover:text-white transition duration-200">Kelola Tiket</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2 sm:mb-4 text-white text-sm sm:text-base">Link Pengguna</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="/" class="hover:text-white transition duration-200">Home</a></li>
                        <li><a href="{{ route('pemesanan.tiket') }}" class="hover:text-white transition duration-200">Pesan Tiket</a></li>
                        <li><a href="#" class="hover:text-white transition duration-200">Tentang Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-red-heritage text-center py-3 sm:py-4 text-xs text-white/90 px-4">
            Copyright © Admin Dashboard Kampoeng Kadjoetangan Heritage 2025. Hak Cipta Dilindungi.
        </div>
    </footer>

@endsection
