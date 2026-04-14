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
        
        .detail-row { display: flex; flex-direction: column; gap: 0.5rem; margin-bottom: 1.5rem; }
        .detail-label { font-size: 0.875rem; font-weight: 600; color: #6B4423; }
        .detail-value { font-size: 1rem; color: #374151; }
        .status-badge { display: inline-block; padding: 0.375rem 0.875rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; }
        .status-ditunggu { background-color: #FEF3C7; color: #92400E; }
        .status-diterima { background-color: #DCFCE7; color: #15803D; }
        .status-ditolak { background-color: #FEE2E2; color: #991B1B; }
    </style>

    @include('Admin.navbar-admin')

    <main class="bg-cream min-h-screen font-body">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-6 sm:py-10">
            
            <!-- Back Button & Title -->
            <div class="mb-6 sm:mb-8">
                <a href="{{ route('admin.orders.index') }}" class="text-brown hover:text-brown-dark text-sm font-semibold mb-3 inline-block">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali ke Daftar
                </a>
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-heritage font-bold text-brown mb-1">
                    Detail Pesanan
                </h1>
                <p class="text-gray-600 text-sm sm:text-base">ID Pesanan: #{{ $order->id }}</p>
            </div>

            <!-- Main Detail Card -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-brown to-brown-dark px-5 sm:px-6 py-4 sm:py-5">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3">
                        <div>
                            <h2 class="text-lg sm:text-xl font-bold text-white">{{ $order->nama_awalan }}</h2>
                            <p class="text-gray-200 text-sm">{{ $order->email }}</p>
                        </div>
                        <span class="status-badge {{ 
                            $order->status_pembayaran === 'Diterima' ? 'status-diterima' :
                            ($order->status_pembayaran === 'Ditunggu' ? 'status-ditunggu' : 'status-ditolak')
                        }}">
                            {{ $order->status_pembayaran }}
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="px-5 sm:px-6 py-6 sm:py-8">
                    
                    <!-- Info Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 mb-6 sm:mb-8">
                        
                        <!-- Left Column -->
                        <div>
                            <div class="detail-row">
                                <span class="detail-label">📋 Jenis Tiket</span>
                                <span class="detail-value">{{ $order->tenis_tiket }}</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">💳 Metode Pembayaran</span>
                                <span class="detail-value">{{ $order->metode_pembayaran }}</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">🎫 Jumlah Tiket</span>
                                <span class="detail-value font-semibold text-lg">{{ $order->jumlah_tiket }}</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">💰 Total Harga</span>
                                <span class="detail-value font-semibold text-lg text-brown">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div>
                            <div class="detail-row">
                                <span class="detail-label">📅 Tanggal Berlaku</span>
                                <span class="detail-value">{{ $order->tanggal_berlaku->format('d M Y') }}</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">⏰ Tanggal Kadaluarsa</span>
                                <span class="detail-value">{{ $order->tanggal_kadaluarsa->format('d M Y') }}</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">📝 Bukti Pembayaran</span>
                                @if($order->bukti_pembayaran)
                                    <span class="detail-value text-blue-600 break-all">{{ $order->bukti_pembayaran }}</span>
                                @else
                                    <span class="detail-value text-gray-500 italic">Belum ada file</span>
                                @endif
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">🕐 Dibuat Pada</span>
                                <span class="detail-value">{{ $order->created_at->format('d M Y H:i') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-200 my-6 sm:my-8"></div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition text-center text-sm sm:text-base">
                            <i class="fas fa-edit mr-2"></i> Edit Pesanan
                        </a>
                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Yakin ingin menghapus pesanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition text-sm sm:text-base">
                                <i class="fas fa-trash mr-2"></i> Hapus Pesanan
                            </button>
                        </form>
                        <a href="{{ route('admin.orders.index') }}" class="flex-1 bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded-lg transition text-center text-sm sm:text-base">
                            <i class="fas fa-arrow-left mr-2"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Info Card -->
            <div class="mt-6 sm:mt-8 bg-blue-50 border border-blue-200 rounded-lg p-4 sm:p-6">
                <h3 class="text-sm font-bold text-blue-900 mb-2">ℹ️ Informasi Sistem</h3>
                <p class="text-xs text-blue-800">
                    <strong>ID Pesanan:</strong> {{ $order->id }}<br>
                    <strong>Dibuat:</strong> {{ $order->created_at }}<br>
                    <strong>Diperbarui:</strong> {{ $order->updated_at }}
                </p>
            </div>
        </div>
    </main>

@endsection
