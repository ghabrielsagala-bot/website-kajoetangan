@extends('Templates.User.User-template')

@section('title')
KKH | Penghargaan Kajoetangan
@endsection

@section('body')
<main class="min-h-screen bg-[#FFFCF5] px-4 py-12 font-body sm:px-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-6xl">
        <!-- PENGHARGAAN SECTION -->
        <header class="mx-auto mb-12 max-w-3xl text-center sm:mb-16">
            <span class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl border border-[#B08D57]/40 bg-gradient-to-br from-[#B08D57]/20 to-[#4A3627]/10 text-3xl text-[#8A6535] shadow-sm">
                <i class="fas fa-award"></i>
            </span>
            <p class="mb-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#4A3627]">Jelajahi Kajoetangan</p>
            <h1 class="font-display text-3xl font-bold leading-tight text-gray-900 sm:text-4xl md:text-5xl">Penghargaan &amp; Pengakuan</h1>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-gray-700 sm:text-base">
                Apresiasi ini mencerminkan kerja bersama warga dalam menjaga warisan kampung dan mengembangkan pariwisata berbasis masyarakat.
            </p>
        </header>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <article class="relative overflow-hidden rounded-2xl border border-[#B08D57]/35 bg-white p-6 shadow-md sm:p-8">
                <span class="absolute -right-4 -top-5 text-8xl text-[#B08D57]/10"><i class="fas fa-trophy"></i></span>
                <div class="relative">
                    <span class="inline-flex items-center gap-2 rounded-full border border-[#B08D57]/30 bg-[#B08D57]/10 px-3 py-1 text-xs font-semibold text-[#705024]">
                        <i class="fas fa-medal"></i> Nasional · 2023
                    </span>
                    <h2 class="mt-5 font-display text-2xl font-bold leading-snug text-gray-900">Top 75 Anugerah Desa Wisata Indonesia</h2>
                    <p class="mt-3 text-sm leading-relaxed text-gray-700">
                        Kampoeng Heritage Kajoetangan masuk dalam 75 besar Anugerah Desa Wisata Indonesia (ADWI) 2023, program apresiasi desa wisata yang diselenggarakan Kementerian Pariwisata dan Ekonomi Kreatif.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="rounded-full bg-[#4A3627]/5 px-3 py-1 text-xs font-medium text-[#4A3627]">ADWI 2023</span>
                        <span class="rounded-full bg-[#4A3627]/5 px-3 py-1 text-xs font-medium text-[#4A3627]">Top 75</span>
                        <span class="rounded-full bg-[#4A3627]/5 px-3 py-1 text-xs font-medium text-[#4A3627]">Desa Wisata</span>
                    </div>
                </div>
            </article>

            <article class="relative overflow-hidden rounded-2xl border border-[#B08D57]/35 bg-white p-6 shadow-md sm:p-8">
                <span class="absolute -right-4 -top-5 text-8xl text-[#B08D57]/10"><i class="fas fa-star"></i></span>
                <div class="relative">
                    <span class="inline-flex items-center gap-2 rounded-full border border-[#B08D57]/30 bg-[#B08D57]/10 px-3 py-1 text-xs font-semibold text-[#705024]">
                        <i class="fas fa-award"></i> Kota Malang
                    </span>
                    <h2 class="mt-5 font-display text-2xl font-bold leading-snug text-gray-900">Kampoeng Tematik Terbaik Kota Malang</h2>
                    <p class="mt-3 text-sm leading-relaxed text-gray-700">
                        Pengakuan sebagai kampung tematik terbaik di Kota Malang menjadi penghargaan atas partisipasi warga dalam merawat lingkungan, memperkuat identitas lokal, dan menyambut wisatawan.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="rounded-full bg-[#4A3627]/5 px-3 py-1 text-xs font-medium text-[#4A3627]">Kampung Tematik</span>
                        <span class="rounded-full bg-[#4A3627]/5 px-3 py-1 text-xs font-medium text-[#4A3627]">Kota Malang</span>
                        <span class="rounded-full bg-[#4A3627]/5 px-3 py-1 text-xs font-medium text-[#4A3627]">Inisiatif Warga</span>
                    </div>
                </div>
            </article>
        </div>

        <aside class="mt-8 rounded-2xl border border-[#4A3627]/10 bg-[#F2EBDD] p-6 text-center sm:p-8">
            <i class="fas fa-people-group text-2xl text-[#4A3627]"></i>
            <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-gray-800">
                Penghargaan menjadi pengingat atas kerja kolektif Pokdarwis dan masyarakat dalam menjaga Kajoetangan sebagai kampung heritage yang tetap hidup.
            </p>
        </aside>
    </div>
</main>
@endsection
