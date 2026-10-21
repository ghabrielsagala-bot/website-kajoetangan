@extends('Templates.User.User-template')

@section('title')
KKH | Tentang Kami
@endsection

@section('body')
<style>
    .font-display { font-family: 'Playfair Display', serif; }
    .fade-up { opacity: 1; transform: translateY(0); transition: opacity .65s ease, transform .65s cubic-bezier(.16,1,.3,1); }
    .js-reveal .fade-up { opacity: 0; transform: translateY(22px); }
    .fade-up.show { opacity: 1; transform: translateY(0); }
    .hero-img { object-fit: cover; object-position: center 38%; }
    .glass-card { box-shadow: 0 20px 40px -16px rgba(74,54,39,.3), 0 2px 6px -2px rgba(27,24,21,.06); }
    @media (prefers-reduced-motion: reduce) { .fade-up { transition: none; animation: none; } }
</style>

<main class="flex-grow min-h-screen bg-[#FFFCF5] pb-16 font-body sm:pb-20">
    {{-- HERO --}}
    <section
        class="fade-up relative flex min-h-[60vh] w-full items-center justify-center overflow-hidden bg-cover bg-center px-4 py-20 text-center sm:px-6"
        style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/2/23/COLLECTIE_TROPENMUSEUM_De_Kajoetangan_straat_in_Malang_Oost-Java_TMnr_60052028.jpg');"
        aria-label="Kampoeng Heritage Kajoetangan"
    >
        <div class="absolute inset-0 bg-gradient-to-t from-[#1a130f] via-[#1a130f]/55 to-transparent"></div>
        <div class="relative z-10 mx-auto max-w-4xl">
            <span class="mb-4 inline-flex items-center gap-2 rounded-full border border-[#FFFCF5]/20 bg-[#FFFCF5]/10 px-4 py-2 text-xs font-medium uppercase tracking-[0.25em] text-[#FFFCF5]/85">
                <i class="fas fa-compass-drafting"></i> Kampoeng Heritage Kajoetangan
            </span>
            <h1 class="font-display text-4xl font-bold leading-tight text-white drop-shadow-lg sm:text-5xl md:text-6xl">
                Menyelusuri Lorong Waktu Kajoetangan
            </h1>
            <p class="mx-auto mt-5 max-w-2xl font-body text-base leading-relaxed text-white/85 sm:text-lg">
                Dari pusat perdagangan era kolonial hingga kampung heritage yang dibangun warga...
            </p>
        </div>
    </section>

    <div class="mx-auto max-w-7xl px-4 pt-10 sm:px-6 sm:pt-14 lg:px-8">

        {{-- INTRO BANNER --}}
        <div class="text-center mb-12 sm:mb-16 fade-up" style="transition-delay:.1s">
            <p class="text-[#4A3627]/70 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                Jalan Basuki Rahmat, yang dahulu dikenal sebagai Jalan Kajoetangan, merupakan salah satu koridor perdagangan penting di Malang pada masa kolonial. Kini, warisan kawasan ini dirawat dan dihidupkan kembali bersama oleh masyarakat setempat.
            </p>
            <div class="mt-5 flex flex-wrap justify-center gap-3 text-xs sm:text-sm">
                <span class="px-3 py-1.5 rounded-full bg-[#4A3627]/8 border border-[#4A3627]/15 text-[#4A3627] font-medium">Revitalisasi 2018</span>
                <span class="px-3 py-1.5 rounded-full bg-[#4A3627]/8 border border-[#4A3627]/15 text-[#4A3627] font-medium">Pokdarwis Kajoetangan</span>
                <span class="px-3 py-1.5 rounded-full bg-[#4A3627]/8 border border-[#4A3627]/15 text-[#4A3627] font-medium">Heritage Malang</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            {{-- KOLOM KIRI: Sejarah --}}
            <div class="fade-up" style="transition-delay:.2s">
                <div class="bg-white rounded-2xl border border-[#4A3627]/10 p-6 sm:p-8 md:p-10 glass-card h-full">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-10 h-10 rounded-full bg-[#4A3627] text-[#FFFCF5] text-sm font-bold flex items-center justify-center">
                            <i class="fas fa-scroll text-xs"></i>
                        </span>
                        <h2 class="font-display text-xl sm:text-2xl font-bold text-[#1B1815]">Sejarah Kajoetangan</h2>
                    </div>
                    <div class="space-y-4 text-[#1B1815]/90 text-sm sm:text-base leading-relaxed">
                        <p>Jalan Basuki Rahmat, yang dahulu dikenal sebagai <strong class="text-[#4A3627]">Jalan Kajoetangan</strong>, berkembang sebagai koridor penting Kota Malang pada awal abad ke-20. Pada masa pemerintahan kolonial Belanda, kawasan ini tumbuh dengan deretan pertokoan dan bangunan yang mencerminkan perkembangan kota.</p>
                        <p>Kajoetangan menjadi <strong class="text-[#4A3627]">pusat perdagangan</strong> yang mempertemukan warga dan pedagang dari berbagai latar belakang. Bangunan bergaya kolonial, termasuk unsur Indo-Eropa dan Art Deco, masih menjadi bagian dari karakter arsitektur kawasan ini.</p>
                        <p>Banyak bangunan dengan gaya Indo-Eropa, Art Deco, dan arsitektur kolonial lainnya yang tumbuh di sepanjang lorong ini, menjadikannya situs bersejarah yang merefleksikan masa lalu perniagaan dan pertemuan budaya di Malang.</p>
                        <div class="mt-4 flex flex-wrap gap-4 text-xs sm:text-sm text-[#4A3627]/70 bg-[#F7F3EA] rounded-xl p-4 border border-[#4A3627]/10">
                            <div class="flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-[#4A3627]/10 text-[#4A3627] text-xs font-bold flex items-center justify-center">1900</span> <span>Koridor perdagangan berkembang</span></div>
                            <div class="flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-[#4A3627]/10 text-[#4A3627] text-xs font-bold flex items-center justify-center">1920</span> <span>Bangunan kolonial membentuk wajah kawasan</span></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- KOLOM KANAN: Revitalisasi --}}
            <div class="fade-up" style="transition-delay:.3s">
                <div class="bg-[#F7F3EA] rounded-2xl border border-[#4A3627]/15 p-6 sm:p-8 md:p-10 h-full">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-10 h-10 rounded-full bg-[#B08D57] text-[#1B1815] text-sm font-bold flex items-center justify-center">
                            <i class="fas fa-people-arrows text-xs"></i>
                        </span>
                        <h2 class="font-display text-xl sm:text-2xl font-bold text-[#1B1815]">Revitalisasi Kajoetangan</h2>
                    </div>
                    <div class="space-y-4 text-[#1B1815]/90 text-sm sm:text-base leading-relaxed">
                        <p>Kembali ke tahun <strong class="text-[#4A3627]">2018</strong>, warga setempat dan <strong class="text-[#4A3627]">Kelompok Sadar Wisata (Pokdarwis) Kajoetangan</strong> memutuskan untuk merevitalisasi kampung ini. Dengan solidaritas warga, mereka membersihkan lorong dari sampah, mengecat ulang bangunan rumah-rumah yang mulai pudar, dan menata ulang ruang publik agar lebih asri dan layak dikunjungi.</p>
                        <p>Upaya tersebut menghidupkan kembali lingkungan kampung dan membuka ruang bagi wisatawan untuk mengenal sejarah serta kehidupan warga Kajoetangan secara langsung.</p>
                        <p>Hingga kini, warga terus merawat kawasan dan mengembangkan kegiatan wisata berbasis komunitas. Homestay, kuliner, serta pengalaman budaya turut membuka peluang ekonomi lokal tanpa melepaskan identitas heritage kampung.</p>
                        <div class="mt-4 flex flex-wrap gap-4 text-xs sm:text-sm text-[#4A3627]/70 bg-[#FFF8E7] rounded-xl p-4 border border-[#B08D57]/20">
                            <div class="flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-[#B08D57]/15 text-[#4A3627] text-xs font-bold flex items-center justify-center">2018</span> <span>Pokdarwis mulai revitalisasi</span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- VISI & MISI --}}
        <section class="mt-14 sm:mt-18 relative overflow-hidden">
            <div class="relative bg-[#F2EBDD] rounded-2xl p-8 sm:p-10 md:p-12 border border-[#4A3627]/15 shadow-xl">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-10 sm:mb-12">
                        <span class="inline-block w-16 h-[2px] bg-[#B08D57] mb-4"></span>
                        <h2 class="font-display text-2xl sm:text-3xl md:text-4xl font-bold text-[#1B1815]">Visi &amp; Misi Kami</h2>
                        <p class="mt-3 text-[#4A3627]/80 text-sm sm:text-base max-w-xl mx-auto leading-relaxed">Kepedulian warga terhadap peninggalan sejarah dan pemberdayaan ekonomi lokal menjadi landasan setiap langkah kami.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                        <div class="bg-[#FFFCF5] rounded-xl p-6 sm:p-7 border border-[#4A3627]/15">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="w-9 h-9 rounded-full bg-[#4A3627]/10 text-[#4A3627] text-sm font-bold flex items-center justify-center">
                                    <i class="fas fa-eye"></i>
                                </span>
                                <h3 class="font-display text-base sm:text-lg font-bold text-[#1B1815]">Visi</h3>
                            </div>
                            <p class="text-[#1B1815]/85 text-sm sm:text-base leading-relaxed">
                                Menjadi kampung heritage yang hidup dan berkelanjutan, di mana warisan sejarah Kajoetangan tetap lestari, masyarakat lokal berdaya, dan setiap pengunjung merasakan keindahan masa lalu yang terhidupkan kembali.
                            </p>
                        </div>
                        <div class="bg-[#FFFCF5] rounded-xl p-6 sm:p-7 border border-[#4A3627]/15">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="w-9 h-9 rounded-full bg-[#4A3627]/10 text-[#4A3627] text-sm font-bold flex items-center justify-center">
                                    <i class="fas fa-bullseye"></i>
                                </span>
                                <h3 class="font-display text-base sm:text-lg font-bold text-[#1B1815]">Misi</h3>
                            </div>
                            <ul class="space-y-3 text-[#1B1815]/85 text-sm sm:text-base leading-relaxed">
                                <li class="flex gap-3"><span class="text-[#B08D57] mt-0.5"><i class="fas fa-check-circle text-sm"></i></span> Melestarikan dan memulihkan arsitektur serta suasana historis Jalan Basuki Rahmat.</li>
                                <li class="flex gap-3"><span class="text-[#B08D57] mt-0.5"><i class="fas fa-check-circle text-sm"></i></span> Memberdayakan warga lokal melalui pariwisata, homestay, kuliner, serta ekonomi kreatif.</li>
                                <li class="flex gap-3"><span class="text-[#B08D57] mt-0.5"><i class="fas fa-check-circle text-sm"></i></span> Menyediakan pengalaman wisata yang edukatif, autentik, dan berpusat pada masyarakat.</li>
                                <li class="flex gap-3"><span class="text-[#B08D57] mt-0.5"><i class="fas fa-check-circle text-sm"></i></span> Menjaga kebersihan, kenyamanan, dan keamanan bagi pengunjung sekaligus warga.</li>
                                <li class="flex gap-3"><span class="text-[#B08D57] mt-0.5"><i class="fas fa-check-circle text-sm"></i></span> Berkolaborasi dengan pemerintah, komunitas, dan mitra untuk mendukung pariwisata berkelanjutan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var elements = document.querySelectorAll('.fade-up');

        if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            elements.forEach(function (element) { element.classList.add('show'); });
            return;
        }

        document.documentElement.classList.add('js-reveal');
        var observer = new IntersectionObserver(function (entries, currentObserver) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    currentObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        elements.forEach(function (element) { observer.observe(element); });
    });
</script>
@endsection
