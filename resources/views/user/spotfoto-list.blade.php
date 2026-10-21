@extends('Templates.User.User-template')

@section('title')
KKH | Spot Foto Kajoetangan
@endsection

@section('body')
<main class="min-h-screen bg-[#FFFCF5] px-4 py-12 font-body sm:px-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <!-- SPOT FOTO SECTION -->
        <header class="mx-auto mb-10 max-w-3xl text-center sm:mb-14">
            <p class="mb-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#4A3627]">Jelajahi Kajoetangan</p>
            <h1 class="font-display text-3xl font-bold leading-tight text-gray-900 sm:text-4xl md:text-5xl">Spot Foto Heritage</h1>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-gray-700 sm:text-base">
                Temukan lorong, rumah, dan peninggalan yang menyimpan cerita Kampoeng Heritage Kajoetangan.
            </p>
        </header>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @php
                $featuredSpots = [
                    ['name' => 'Rumah Namsin & Bangunan Kolonial', 'type' => 'Rumah Heritage', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/ee/Kayutangan_Street_with_Kayutangan_Cathedral_in_the_background%2C_2020.jpg', 'description' => 'Amati suasana jalan dan deretan bangunan lama yang menjadi bagian dari karakter heritage Kajoetangan.'],
                    ['name' => 'Situs Sejarah & Makam Mbah Honggo', 'type' => 'Situs Bersejarah', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Gereja_Kayutangan_Malang_-classic.jpg/800px-Gereja_Kayutangan_Malang_-classic.jpg', 'description' => 'Kenali situs dan kisah lokal yang membentuk sejarah kawasan Kajoetangan. Hormati lingkungan saat berkunjung.'],
                    ['name' => 'Suasana Lorong & Terowongan Air', 'type' => 'Lorong Heritage', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Kajoetangan_met_de_rooms-katholieke_Heilig_Hartkerk_te_Malang%2C_KITLV_19823.tiff/800px-Kajoetangan_met_de_rooms-katholieke_Heilig_Hartkerk_te_Malang%2C_KITLV_19823.tiff.jpg', 'description' => 'Jelajahi sudut lorong dan aliran air yang memberikan pengalaman berbeda saat menyusuri kampung heritage.'],
                ];
            @endphp

            @foreach ($featuredSpots as $spot)
                <article class="group overflow-hidden rounded-2xl border border-[#4A3627]/10 bg-white shadow-md transition-all duration-300 hover:-translate-y-2 hover:border-[#4A3627]/40 hover:shadow-2xl">
                    <div class="relative h-56 overflow-hidden bg-[#F2EBDD] sm:h-64">
                        <img src="{{ $spot['image'] }}" alt="{{ $spot['name'] }}" loading="lazy" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <span class="absolute left-4 top-4 rounded-full border border-[#4A3627]/15 bg-[#FFFCF5]/95 px-3 py-1 text-xs font-semibold text-[#4A3627]">{{ $spot['type'] }}</span>
                    </div>
                    <div class="p-5 sm:p-6">
                        <h2 class="font-display text-xl font-bold text-gray-900">{{ $spot['name'] }}</h2>
                        <p class="mt-2 text-sm leading-relaxed text-gray-700">{{ $spot['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        @if(isset($data) && $data->count())
            <section class="mt-14" aria-labelledby="community-spots-heading">
                <div class="mb-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-[#4A3627]">Tambahan dari pengelola</p>
                    <h2 id="community-spots-heading" class="mt-2 font-display text-2xl font-bold text-gray-900">Koleksi Spot Foto</h2>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($data as $spot)
                        <a href="{{ route('spotfoto.show', $spot->spot_foto_id) }}" class="group overflow-hidden rounded-2xl border border-[#4A3627]/10 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#4A3627]/40 hover:shadow-2xl">
                            <div class="h-52 overflow-hidden bg-[#F2EBDD]">
                                <img src="{{ asset('storage/' . $spot->gambar_spot_foto) }}" alt="{{ $spot->nama_spot_foto }}" loading="lazy" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            </div>
                            <div class="p-5">
                                <span class="text-xs font-semibold uppercase tracking-wide text-[#4A3627]">{{ $spot->jenis_spot_foto }}</span>
                                <h3 class="mt-2 font-display text-lg font-bold text-gray-900">{{ $spot->nama_spot_foto }}</h3>
                                <p class="mt-2 line-clamp-3 text-sm leading-relaxed text-gray-700">{{ $spot->deskripsi_spot_foto }}</p>
                                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#4A3627]">Lihat detail <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i></span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </div>
</main>
@endsection
