@extends('Templates.User.User-template')

@section('title')
KKH | Spot Foto
@endsection

@section('body')
<main class="bg-gray-50 min-h-screen py-6 sm:py-8 md:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Back Button -->
        <div class="mb-6 md:mb-8">
            <a href="{{ route('user.beranda.index') }}" class="inline-flex items-center gap-2 px-4 py-2 text-amber-900 hover:bg-amber-50 rounded-lg transition-colors duration-300">
                <i class="fas fa-arrow-left text-sm"></i>
                <span class="text-sm font-medium">Kembali ke Beranda</span>
            </a>
        </div>

        <!-- Header Section -->
        <div class="text-center mb-10 sm:mb-12 md:mb-16">
            <div class="flex items-center justify-center mb-4 sm:mb-6">
                <hr class="flex-1 border-gray-300">
                <span class="px-4 text-gray-500 text-sm sm:text-base">
                    <!-- Divider -->
                </span>
                <hr class="flex-1 border-gray-300">
            </div>
            
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-2 sm:mb-3 leading-tight">
                Spot Foto Menarik
            </h1>
            
            <p class="text-gray-700 text-sm sm:text-base md:text-lg px-2 sm:px-4">
                Temukan lokasi-lokasi instagram-worthy terbaik di Kadjoetangan untuk mengabadikan momen berharga Anda
            </p>
        </div>

        <!-- Grid List -->
        @if($data->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            @foreach($data as $spot)
            <a href="{{ route('spotfoto.show', $spot->spot_foto_id) }}" class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
                <div class="relative overflow-hidden h-48 sm:h-56 md:h-64 bg-gray-200">
                    <img src="{{ asset('storage/' . $spot->gambar_spot_foto) }}" 
                         alt="{{ $spot->nama_spot_foto }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
                    <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full flex items-center gap-2 text-amber-900 text-xs sm:text-sm font-semibold">
                        <i class="fas fa-camera"></i>
                        {{ $spot->jenis_spot_foto }}
                    </div>
                </div>
                
                <div class="p-4 sm:p-5 md:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 group-hover:text-amber-900 transition-colors line-clamp-2 mb-2">
                        {{ $spot->nama_spot_foto }}
                    </h3>
                    
                    <p class="text-gray-600 text-sm sm:text-base line-clamp-3 mb-4">
                        {{ $spot->deskripsi_spot_foto }}
                    </p>
                    
                    <div class="flex items-center justify-between text-xs sm:text-sm text-gray-500">
                        <span class="flex items-center gap-1">
                            <i class="fas fa-calendar"></i>
                            {{ $spot->updated_at->format('d M Y') }}
                        </span>
                        <span class="text-amber-900 font-semibold group-hover:translate-x-1 transition-transform">
                            Lihat Detail →
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="bg-white rounded-lg shadow-md p-8 sm:p-12 text-center">
            <i class="fas fa-camera text-4xl sm:text-5xl text-gray-300 mb-4"></i>
            <p class="text-gray-600 text-base sm:text-lg">Data spot foto belum tersedia saat ini</p>
        </div>
        @endif
    </div>
</main>
@endsection
