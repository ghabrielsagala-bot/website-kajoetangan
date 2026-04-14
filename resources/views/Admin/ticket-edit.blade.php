@extends('template')

@section('main')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600;700&display=swap');
        
        .font-heritage { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        
        .bg-cream-page { background-color: #FFFCF5; }
        .bg-brown-dark { background-color: #4A3627; }
        .bg-red-heritage { background-color: #9D3838; }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <!-- Admin Navbar -->
    @include('Admin.navbar-admin')

    <main class="bg-cream-page min-h-screen font-body">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8 sm:py-12">
            
            <!-- Page Title -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8 sm:mb-12">
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-heritage font-bold text-black mb-2">
                        Kelola Tiket
                    </h1>
                    <p class="text-gray-700 text-sm sm:text-base">Tambah, edit, dan hapus jenis tiket</p>
                </div>
                <button type="button" onclick="openAddModal()" class="mt-4 sm:mt-0 bg-amber-900 hover:bg-amber-800 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2 w-full sm:w-auto">
                    <i class="fas fa-plus"></i> Tambah Tiket
                </button>
            </div>

            <!-- Tickets Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-12">
                
                @php
                    $tickets = [
                        ['id' => 1, 'name' => 'Tiket Lokal', 'description' => 'Untuk pengunjung dari dalam negeri', 'price' => 5000, 'available' => 245],
                        ['id' => 2, 'name' => 'Tiket Mancanegara', 'description' => 'Untuk pengunjung internasional', 'price' => 10000, 'available' => 156],
                        ['id' => 3, 'name' => 'Paket Grup (10+ orang)', 'description' => 'Diskon khusus untuk grup', 'price' => 4500, 'available' => 50],
                    ];
                @endphp
                
                @forelse($tickets as $ticket)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <div class="bg-gradient-to-r from-amber-900 to-amber-800 h-2"></div>
                        
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-black mb-1">{{ $ticket['name'] }}</h3>
                                    <p class="text-gray-600 text-sm">{{ $ticket['description'] }}</p>
                                </div>
                                <span class="bg-amber-100 text-amber-900 px-3 py-1 rounded-full text-xs font-semibold">ID: {{ $ticket['id'] }}</span>
                            </div>

                            <div class="border-t border-gray-200 py-4 mb-4">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-gray-600 text-sm">Harga Tiket</span>
                                    <span class="text-2xl font-bold text-amber-900">Rp {{ number_format($ticket['price'], 0, ',', '.') }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600 text-sm">Tersedia</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">{{ $ticket['available'] }} tiket</span>
                                </div>
                            </div>

                            <div class="flex gap-2">
                                <button type="button" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 text-sm flex items-center justify-center gap-2">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button type="button" class="flex-1 bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 text-sm flex items-center justify-center gap-2">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <i class="fas fa-inbox text-4xl text-gray-400 mb-4 block"></i>
                        <p class="text-gray-600 text-lg">Tidak ada tiket tersedia</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    <!-- Modal Add/Edit Ticket -->
    <div id="ticketModal" class="modal">
        <div class="bg-white rounded-lg shadow-xl p-6 sm:p-8 w-full max-w-md mx-4 max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 id="modalTitle" class="text-2xl font-bold text-black">Tambah Tiket Baru</h2>
                <button type="button" onclick="closeAddModal()" class="text-gray-600 hover:text-gray-900 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form id="ticketForm" class="space-y-4">
                @csrf
                
                <!-- Nama Tiket -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Tiket</label>
                    <input type="text" id="ticketName" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-900 focus:border-transparent outline-none transition-all duration-200" placeholder="Contoh: Tiket Lokal">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                    <textarea id="ticketDesc" name="description" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-900 focus:border-transparent outline-none transition-all duration-200 resize-none" placeholder="Deskripsi tiket..."></textarea>
                </div>

                <!-- Harga -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Harga (Rp)</label>
                    <input type="number" id="ticketPrice" name="price" required min="0" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-900 focus:border-transparent outline-none transition-all duration-200" placeholder="Contoh: 5000">
                </div>

                <!-- Stok Tersedia -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Stok Tersedia</label>
                    <input type="number" id="ticketStock" name="available" required min="0" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-900 focus:border-transparent outline-none transition-all duration-200" placeholder="Contoh: 500">
                </div>

                <!-- Buttons -->
                <div class="flex gap-3 pt-4">
                    <button type="button" onclick="closeAddModal()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                        Batal
                    </button>
                    <button type="submit" class="flex-1 bg-amber-900 hover:bg-amber-800 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                        Simpan Tiket
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Delete Confirmation -->
    <div id="deleteModal" class="modal">
        <div class="bg-white rounded-lg shadow-xl p-6 sm:p-8 w-full max-w-sm mx-4">
            <div class="text-center mb-6">
                <div class="text-5xl text-red-600 mb-4">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h2 class="text-2xl font-bold text-black mb-2">Hapus Tiket?</h2>
                <p class="text-gray-600">Anda yakin ingin menghapus tiket ini? Tindakan ini tidak dapat dibatalkan.</p>
            </div>

            <div class="flex gap-3">
                <button type="button" onclick="closeDeleteModal()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                    Batal
                </button>
                <button type="button" onclick="confirmDelete()" class="flex-1 bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                    Hapus
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-brown-dark text-white pt-10 sm:pt-12 md:pt-16 mt-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10 pb-8 sm:pb-12">
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <h2 class="font-heritage text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Kampoeng Kadjoetangan Heritage</h2>
                <p class="text-gray-300 text-xs sm:text-sm leading-relaxed max-w-xs mb-4 sm:mb-6">
                    Admin Dashboard untuk mengelola pembayaran tiket dan transaksi pengunjung.
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

    <script>
        let deleteId = null;

        function openAddModal() {
            document.getElementById('modalTitle').textContent = 'Tambah Tiket Baru';
            document.getElementById('ticketForm').reset();
            document.getElementById('ticketModal').classList.add('active');
        }

        function closeAddModal() {
            document.getElementById('ticketModal').classList.remove('active');
        }

        function openEditModal(id) {
            document.getElementById('modalTitle').textContent = 'Edit Tiket';
            document.getElementById('ticketModal').classList.add('active');
            // Load data tiket dari server (implementasi backend)
        }

        function openDeleteModal(id) {
            deleteId = id;
            document.getElementById('deleteModal').classList.add('active');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.remove('active');
            deleteId = null;
        }

        function confirmDelete() {
            if (deleteId) {
                // Implementasi delete ke server
                console.log('Deleting ticket:', deleteId);
                closeDeleteModal();
            }
        }

        document.getElementById('ticketForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Implementasi submit ke server
            console.log('Form submitted');
            closeAddModal();
        });

        // Close modals ketika klik outside
        window.addEventListener('click', function(event) {
            const ticketModal = document.getElementById('ticketModal');
            const deleteModal = document.getElementById('deleteModal');
            
            if (event.target === ticketModal) {
                closeAddModal();
            }
            if (event.target === deleteModal) {
                closeDeleteModal();
            }
        });
    </script>

@endsection
