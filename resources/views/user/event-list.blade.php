@extends('Templates.User.User-template')

@section('title')
KKH | Event Kajoetangan
@endsection

@section('body')
<main class="min-h-screen bg-[#FFFCF5] px-4 py-12 font-body sm:px-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-5xl">
        <!-- EVENT SECTION -->
        <header class="mb-12 text-center sm:mb-16">
            <p class="mb-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#4A3627]">Jelajahi Kajoetangan</p>
            <h1 class="font-display text-3xl font-bold leading-tight text-gray-900 sm:text-4xl md:text-5xl">Agenda &amp; Kehidupan Kampung</h1>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-gray-700 sm:text-base">
                Dari acara kampung hingga musik di lorong, kegiatan Kajoetangan mengajak pengunjung merasakan suasana heritage bersama warga.
            </p>
        </header>

        <div class="relative">
            <div class="absolute bottom-4 left-5 top-4 w-px bg-[#4A3627]/20 sm:left-8" aria-hidden="true"></div>
            <div class="space-y-6">
                <article class="relative pl-14 sm:pl-20">
                    <span class="absolute left-0 top-5 z-10 flex h-10 w-10 items-center justify-center rounded-full border-4 border-[#FFFCF5] bg-[#4A3627] text-white sm:left-3">
                        <i class="fas fa-calendar-star text-sm"></i>
                    </span>
                    <div class="rounded-2xl border border-[#4A3627]/10 bg-white p-5 shadow-sm sm:p-7">
                        <div class="mb-3 flex flex-wrap items-center gap-2">
                            <span class="rounded-full bg-[#4A3627]/10 px-3 py-1 text-xs font-semibold text-[#4A3627]">Agenda tahunan</span>
                            <span class="text-xs text-gray-600">Tanggal diumumkan penyelenggara</span>
                        </div>
                        <h2 class="font-display text-xl font-bold text-gray-900 sm:text-2xl">Festival Kajoetangan</h2>
                        <p class="mt-2 max-w-3xl text-sm leading-relaxed text-gray-700">
                            Perayaan suasana kampung heritage yang menghadirkan warga, budaya, dan kegiatan untuk pengunjung. Cek pengumuman resmi untuk tanggal dan rangkaian acara terbaru.
                        </p>
                    </div>
                </article>

                <article class="relative pl-14 sm:pl-20">
                    <span class="absolute left-0 top-5 z-10 flex h-10 w-10 items-center justify-center rounded-full border-4 border-[#FFFCF5] bg-[#4A3627] text-white sm:left-3">
                        <i class="fas fa-music text-sm"></i>
                    </span>
                    <div class="rounded-2xl border border-[#4A3627]/10 bg-white p-5 shadow-sm sm:p-7">
                        <div class="mb-3 flex flex-wrap items-center gap-2">
                            <span class="rounded-full bg-[#4A3627]/10 px-3 py-1 text-xs font-semibold text-[#4A3627]">Akhir pekan</span>
                            <span class="text-xs text-gray-600">Jadwal penampilan dapat berubah</span>
                        </div>
                        <h2 class="font-display text-xl font-bold text-gray-900 sm:text-2xl">Live Musik Keroncong &amp; Akustik Jalanan</h2>
                        <p class="mt-2 max-w-3xl text-sm leading-relaxed text-gray-700">
                            Musik jalanan menambah suasana saat pengunjung menyusuri lorong. Pertunjukan umumnya hadir pada akhir pekan; konfirmasi jadwal kepada pengelola sebelum berkunjung.
                        </p>
                    </div>
                </article>

                <article class="relative pl-14 sm:pl-20">
                    <span class="absolute left-0 top-5 z-10 flex h-10 w-10 items-center justify-center rounded-full border-4 border-[#FFFCF5] bg-[#4A3627] text-white sm:left-3">
                        <i class="fas fa-store text-sm"></i>
                    </span>
                    <div class="rounded-2xl border border-[#4A3627]/10 bg-white p-5 shadow-sm sm:p-7">
                        <div class="mb-3 flex flex-wrap items-center gap-2">
                            <span class="rounded-full bg-[#4A3627]/10 px-3 py-1 text-xs font-semibold text-[#4A3627]">Akhir pekan</span>
                            <span class="text-xs text-gray-600">Ikuti pengumuman warga</span>
                        </div>
                        <h2 class="font-display text-xl font-bold text-gray-900 sm:text-2xl">Pasar Krempyeng</h2>
                        <p class="mt-2 max-w-3xl text-sm leading-relaxed text-gray-700">
                            Pasar warga yang menghadirkan jajanan dan produk lokal di suasana kampung. Hari dan jam penyelenggaraan dapat berbeda, jadi periksa informasi terbaru dari pengelola.
                        </p>
                    </div>
                </article>
            </div>
        </div>

        @if(isset($data) && $data->count())
            <section class="mt-16" aria-labelledby="events-list-heading">
                <div class="mb-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-[#4A3627]">Informasi dari pengelola</p>
                    <h2 id="events-list-heading" class="mt-2 font-display text-2xl font-bold text-gray-900">Agenda Lainnya</h2>
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    @foreach($data as $event)
                        <a href="{{ route('event.show', $event->event_id) }}" class="group rounded-2xl border border-[#4A3627]/10 bg-white p-5 shadow-sm transition-all hover:-translate-y-1 hover:border-[#4A3627]/40 hover:shadow-lg">
                            <div class="flex items-start justify-between gap-4">
                                <span class="rounded-full bg-[#4A3627]/10 px-3 py-1 text-xs font-semibold text-[#4A3627]">{{ $event->jenis_event }}</span>
                                <span class="shrink-0 text-xs text-gray-600">{{ \Carbon\Carbon::parse($event->waktu_event)->translatedFormat('d M Y') }}</span>
                            </div>
                            <h3 class="mt-4 font-display text-lg font-bold text-gray-900">{{ $event->nama_event }}</h3>
                            <p class="mt-2 line-clamp-3 text-sm leading-relaxed text-gray-700">{{ $event->deskripsi_event }}</p>
                            <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#4A3627]">Detail agenda <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i></span>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </div>
</main>
@endsection
