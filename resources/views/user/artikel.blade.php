@extends('Templates.User.User-template')

@section('title')
KKH | Blog & Artikel Kajoetangan
@endsection

@section('body')
<main class="min-h-screen bg-[#FFFCF5] px-4 py-12 font-body sm:px-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <!-- BLOG & ARTIKEL SECTION -->
        <header class="mx-auto mb-10 max-w-3xl text-center sm:mb-14">
            <p class="mb-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#4A3627]">Jelajahi Kajoetangan</p>
            <h1 class="font-display text-3xl font-bold leading-tight text-gray-900 sm:text-4xl md:text-5xl">Blog &amp; Artikel</h1>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-gray-700 sm:text-base">
                Baca cerita tentang sejarah, arsitektur, kuliner, dan cara menikmati Kampoeng Heritage Kajoetangan.
            </p>
        </header>

        @php
            $articles = [
                [
                    'image' => 'FOTO_FASAD_ARSITEKTUR_KAJOETANGAN_DISINI',
                    'category' => 'Sejarah',
                    'title' => 'Menelusuri Fasad Arsitektur Belanda di Jalan Basuki Rahmat',
                    'excerpt' => 'Amati jejak perkembangan kota pada bangunan-bangunan bersejarah di koridor Basuki Rahmat dan lingkungan Kajoetangan.',
                    'url' => route('about-us'),
                ],
                [
                    'image' => 'FOTO_LORONG_HERITAGE_KAJOETANGAN_DISINI',
                    'category' => 'Panduan',
                    'title' => 'Panduan Singkat Menyusuri Kampoeng Heritage Kajoetangan',
                    'excerpt' => 'Rencanakan waktu berkunjung, hormati ruang warga, dan nikmati perjalanan menyusuri lorong kampung dengan nyaman.',
                    'url' => route('spotfoto'),
                ],
                [
                    'image' => 'FOTO_KULINER_KAJOETANGAN_DISINI',
                    'category' => 'Kuliner',
                    'title' => 'Beristirahat Sejenak dan Mencicipi Kuliner Khas Malang',
                    'excerpt' => 'Lengkapi perjalanan heritage dengan singgah menikmati kopi, jajanan pasar, dan sajian lokal di sekitar kawasan.',
                    'url' => route('kuliner'),
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($articles as $article)
                <article class="group overflow-hidden rounded-2xl border border-[#4A3627]/10 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#4A3627]/35 hover:shadow-xl">
                    <a href="{{ $article['url'] }}" class="block overflow-hidden bg-[#F2EBDD]">
                        <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" loading="lazy" class="h-56 w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </a>
                    <div class="p-5 sm:p-6">
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <span class="rounded-full bg-[#4A3627]/10 px-3 py-1 text-xs font-semibold text-[#4A3627]">{{ $article['category'] }}</span>
                            <time datetime="{{ now()->toDateString() }}" class="text-xs text-gray-600">{{ now()->translatedFormat('d F Y') }}</time>
                        </div>
                        <h2 class="mt-4 font-display text-xl font-bold leading-snug text-gray-900">
                            <a href="{{ $article['url'] }}" class="transition-colors group-hover:text-[#4A3627]">{{ $article['title'] }}</a>
                        </h2>
                        <p class="mt-3 line-clamp-2 text-sm leading-relaxed text-gray-700">{{ $article['excerpt'] }}</p>
                        <a href="{{ $article['url'] }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#4A3627]">
                            Baca Selengkapnya <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</main>
@endsection
