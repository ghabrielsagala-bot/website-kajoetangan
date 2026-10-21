@extends('Templates.User.User-template')

@section('title')
KKH | Kuliner Kajoetangan
@endsection

@section('body')
<main class="min-h-screen bg-[#FFFCF5] px-4 py-12 font-body sm:px-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <!-- KULINER SECTION -->
        <header class="mx-auto mb-10 max-w-3xl text-center sm:mb-14">
            <p class="mb-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#4A3627]">Jelajahi Kajoetangan</p>
            <h1 class="font-display text-3xl font-bold leading-tight text-gray-900 sm:text-4xl md:text-5xl">Rasa Lokal, Cerita Heritage</h1>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-gray-700 sm:text-base">
                Singgah untuk menikmati sajian dan jajanan yang lekat dengan suasana kampung serta kuliner Malang.
            </p>
        </header>

        @php
            $featuredFoods = [
                ['name' => 'Kopi Kajoetangan', 'badge' => 'Kopi lokal', 'image' => 'FOTO_KOPI_KAJOETANGAN_DISINI', 'description' => 'Nikmati secangkir kopi di tengah suasana kampung heritage dan deretan bangunan bersejarah.'],
                ['name' => 'Onde-onde & Jajanan Pasar Tradisional', 'badge' => 'Jajanan tradisional', 'image' => 'FOTO_ONDE_ONDE_JAJANAN_PASAR_DISINI', 'description' => 'Camilan pasar yang akrab di Malang, cocok dinikmati sambil beristirahat menyusuri kawasan.'],
                ['name' => 'Es Talun', 'badge' => 'Minuman segar', 'image' => 'FOTO_ES_TALUN_DISINI', 'description' => 'Pilihan minuman untuk menyegarkan diri setelah berjalan melewati lorong-lorong Kajoetangan.'],
                ['name' => 'Ronde Titoni', 'badge' => 'Legendaris', 'image' => 'FOTO_RONDE_TITONI_DISINI', 'description' => 'Wedang ronde hangat khas Malang yang dikenal dengan kuah jahe serta isian ronde dan kacang.'],
            ];
        @endphp

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($featuredFoods as $food)
                <article class="group overflow-hidden rounded-2xl border border-[#4A3627]/10 bg-white shadow-md transition-all duration-300 hover:-translate-y-2 hover:border-[#4A3627]/40 hover:shadow-2xl">
                    <div class="relative h-56 overflow-hidden bg-[#F2EBDD] sm:h-64">
                        <img src="{{ $food['image'] }}" alt="{{ $food['name'] }}" loading="lazy" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <span class="absolute left-4 top-4 rounded-full border border-[#4A3627]/15 bg-[#FFFCF5]/95 px-3 py-1 text-xs font-semibold text-[#4A3627]">{{ $food['badge'] }}</span>
                    </div>
                    <div class="p-5 sm:p-6">
                        <h2 class="font-display text-xl font-bold text-gray-900">{{ $food['name'] }}</h2>
                        <p class="mt-2 text-sm leading-relaxed text-gray-700">{{ $food['description'] }}</p>
                        <div class="mt-5 border-t border-[#4A3627]/10 pt-4 text-xs text-gray-600">
                            Kuliner dan pengalaman rasa di sekitar Kampoeng Heritage Kajoetangan.
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        @if(isset($data) && $data->count())
            <section class="mt-14" aria-labelledby="community-food-heading">
                <div class="mb-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-[#4A3627]">Tambahan dari pengelola</p>
                    <h2 id="community-food-heading" class="mt-2 font-display text-2xl font-bold text-gray-900">Kuliner Lainnya</h2>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($data as $kuliner)
                        <a href="{{ route('kuliner.show', $kuliner->kuliner_id) }}" class="group overflow-hidden rounded-2xl border border-[#4A3627]/10 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-[#4A3627]/40 hover:shadow-2xl">
                            <div class="relative h-52 overflow-hidden bg-[#F2EBDD]">
                                <img src="{{ asset('storage/' . $kuliner->gambar_kuliner) }}" alt="{{ $kuliner->nama_kuliner }}" loading="lazy" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                                <span class="absolute left-4 top-4 rounded-full bg-[#FFFCF5]/95 px-3 py-1 text-xs font-semibold text-[#4A3627]">{{ $kuliner->jenis_kuliner }}</span>
                            </div>
                            <div class="p-5">
                                <h3 class="font-display text-lg font-bold text-gray-900">{{ $kuliner->nama_kuliner }}</h3>
                                <p class="mt-2 line-clamp-3 text-sm leading-relaxed text-gray-700">{{ $kuliner->deskripsi_kuliner }}</p>
                                <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#4A3627]">Pelajari <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i></span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </div>
</main>
@endsection
