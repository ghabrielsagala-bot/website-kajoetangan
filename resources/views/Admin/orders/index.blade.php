@extends('template')

@section('main')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600;700&display=swap');
        
        .font-heritage { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        
        .bg-cream { background-color: #FFFCF5; }
        .bg-brown-primary { background-color: #6B4423; }
        .bg-brown-dark { background-color: #4A2F1A; }
        .bg-brown-light { background-color: #D4A574; }
        .text-brown { color: #6B4423; }
        .border-brown { border-color: #6B4423; }
        
        .status-ditunggu { background-color: #FEF3C7; color: #92400E; }
        .status-diterima { background-color: #DCFCE7; color: #15803D; }
        .status-ditolak { background-color: #FEE2E2; color: #991B1B; }
    </style>

    <!-- Navbar Admin -->
    @include('Admin.navbar-admin')

    <main class="bg-cream min-h-screen font-body">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-6 sm:py-8">
            
            <!-- Page Title -->
            <div class="mb-6 sm:mb-8">
                <h1 class="text-3xl sm:text-4xl font-heritage font-bold text-brown mb-1">
                    Kelola Pesanan
                </h1>
                <p class="text-gray-600 text-sm sm:text-base">Lihat dan kelola semua pesanan tiket</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 mb-6 sm:mb-8">
                
                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-brown-primary">
                    <p class="text-gray-600 text-xs sm:text-sm font-medium">Total</p>
                    <p class="text-2xl sm:text-3xl font-bold text-brown">{{ $totalOrders }}</p>
                </div>

                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-yellow-600">
                    <p class="text-gray-600 text-xs sm:text-sm font-medium">Menunggu</p>
                    <p class="text-2xl sm:text-3xl font-bold text-yellow-600">{{ $pendingOrders }}</p>
                </div>

                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-green-600">
                    <p class="text-gray-600 text-xs sm:text-sm font-medium">Diterima</p>
                    <p class="text-2xl sm:text-3xl font-bold text-green-600">{{ $verifiedOrders }}</p>
                </div>

                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-red-600">
                    <p class="text-gray-600 text-xs sm:text-sm font-medium">Ditolak</p>
                    <p class="text-2xl sm:text-3xl font-bold text-red-600">{{ $rejectedOrders }}</p>
                </div>
            </div>

            <!-- Alert Messages -->
            @if ($errors->any())
                <div class="mb-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="mb-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg flex items-center justify-between">
                    <span>{{ session('success') }}</span>
                    <button onclick="this.parentElement.style.display='none'" class="text-green-600 hover:text-green-800">×</button>
                </div>
            @endif

            <!-- Add Button -->
            <div class="mb-6">
                <a href="{{ route('admin.orders.create') }}" class="inline-block bg-brown-primary hover:bg-brown-dark text-white font-semibold py-2 px-4 rounded-lg transition duration-200 text-sm sm:text-base">
                    <i class="fas fa-plus mr-2"></i> Tambah Pesanan
                </a>
            </div>

            <!-- Table Container -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-brown-primary text-white">
                                <th class="px-4 py-3 text-left font-semibold">ID</th>
                                <th class="px-4 py-3 text-left font-semibold">Nama</th>
                                <th class="px-4 py-3 text-left font-semibold hidden sm:table-cell">Email</th>
                                <th class="px-4 py-3 text-center font-semibold hidden md:table-cell">Tipe</th>
                                <th class="px-4 py-3 text-right font-semibold hidden sm:table-cell">Jumlah</th>
                                <th class="px-4 py-3 text-right font-semibold">Harga</th>
                                <th class="px-4 py-3 text-center font-semibold">Status</th>
                                <th class="px-4 py-3 text-center font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse ($orders as $order)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-3 font-semibold text-brown">#{{ $order->id }}</td>
                                    <td class="px-4 py-3 text-gray-800">{{ $order->nama_awalan }}</td>
                                    <td class="px-4 py-3 text-gray-600 hidden sm:table-cell text-xs">{{ $order->email }}</td>
                                    <td class="px-4 py-3 text-center hidden md:table-cell">
                                        <span class="text-xs px-2 py-1 bg-brown-primary/10 text-brown rounded">
                                            {{ $order->tenis_tiket }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-right font-semibold hidden sm:table-cell">{{ $order->jumlah_tiket }}</td>
                                    <td class="px-4 py-3 text-right font-semibold">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                                    <td class="px-4 py-3 text-center">
                                        @if ($order->status_pembayaran === 'Ditunggu')
                                            <span class="status-ditunggu text-xs px-3 py-1 rounded-full font-semibold">Menunggu</span>
                                        @elseif ($order->status_pembayaran === 'Diterima')
                                            <span class="status-diterima text-xs px-3 py-1 rounded-full font-semibold">Diterima</span>
                                        @else
                                            <span class="status-ditolak text-xs px-3 py-1 rounded-full font-semibold">Ditolak</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <div class="flex justify-center gap-3">
                                            <a href="{{ route('admin.orders.show', $order) }}" class="text-green-600 hover:text-green-800 transition" title="Lihat">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.orders.edit', $order) }}" class="text-blue-600 hover:text-blue-800 transition" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800 transition" title="Hapus">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-8 text-center text-gray-500">
                                        <i class="fas fa-inbox text-4xl mb-2 block opacity-50"></i>
                                        Belum ada pesanan
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $orders->links() }}
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
