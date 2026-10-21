@extends('template')

@section('title', 'Kampoeng Heritage Kajoetangan — Jelajahi Lorong Waktu di Jantung Kota Malang')

{{-- ============================================================
     CUSTOM STYLES — Modern Vintage theme
     Palette: Charcoal #1B1815 · Sepia #4A3627 · Cream #FFFCF5 · Gold #B08D57
     ============================================================ --}}
@section('custom-styles')
<style>
    html { scroll-behavior: smooth; }

    .font-display { font-family: 'Playfair Display', serif; }

    /* Anchor offset so sections never hide behind the sticky navbar */
    section[id] { scroll-margin-top: 88px; }

    /* ---- Ken Burns: slow, subtle zoom on hero background ---- */
    .ken-burns {
        animation: kenburns 28s ease-out infinite alternate;
        will-change: transform;
    }
    @keyframes kenburns {
        from { transform: scale(1) translate(0, 0); }
        to   { transform: scale(1.14) translate(-1.6%, -1.2%); }
    }

    /* ---- Fade-in-up on scroll (Intersection Observer) ---- */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity .8s ease, transform .8s cubic-bezier(.16, 1, .3, 1);
    }
    .reveal.is-visible { opacity: 1; transform: translateY(0); }

    /* ---- Vintage decorative double rule ---- */
    .gold-rule {
        display: inline-flex;
        flex-direction: column;
        gap: 4px;
    }
    .gold-rule span:first-child { width: 56px; height: 2px; background: #B08D57; }
    .gold-rule span:last-child  { width: 28px; height: 2px; background: #B08D57; opacity: .55; }

    /* ---- Buttons: smooth color transition + soft glow / bounce ---- */
    .btn-gold {
        background-color: #B08D57;
        color: #1B1815;
        transition: background-color .3s ease, box-shadow .35s ease, transform .35s cubic-bezier(.16, 1, .3, 1);
        box-shadow: 0 0 0 0 rgba(176, 141, 87, 0);
    }
    .btn-gold:hover {
        background-color: #C9A468;
        transform: translateY(-3px);
        box-shadow: 0 12px 32px -8px rgba(176, 141, 87, .75);
    }
    .btn-gold:active { transform: translateY(0) scale(.97); }

    .btn-outline {
        border: 1.5px solid rgba(255, 252, 245, .75);
        color: #FFFCF5;
        transition: background-color .3s ease, color .3s ease, border-color .3s ease, transform .35s cubic-bezier(.16, 1, .3, 1), box-shadow .35s ease;
    }
    .btn-outline:hover {
        background-color: #FFFCF5;
        color: #1B1815;
        border-color: #FFFCF5;
        transform: translateY(-3px);
        box-shadow: 0 12px 28px -10px rgba(0, 0, 0, .5);
    }
    .btn-outline:active { transform: translateY(0) scale(.97); }

    .btn-dark {
        background-color: #1B1815;
        color: #FFFCF5;
        transition: background-color .3s ease, transform .35s cubic-bezier(.16, 1, .3, 1), box-shadow .35s ease;
    }
    .btn-dark:hover {
        background-color: #4A3627;
        transform: translateY(-3px);
        box-shadow: 0 14px 30px -12px rgba(27, 24, 21, .8);
    }
    .btn-dark:active { transform: translateY(0) scale(.97); }

    /* ---- Card hover: lift + shadow + overlay sweep ---- */
    .vintage-card {
        transition: transform .45s cubic-bezier(.16, 1, .3, 1), box-shadow .45s ease;
    }
    .vintage-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 28px 60px -22px rgba(27, 24, 21, .45);
    }
    .vintage-card img { transition: transform .8s cubic-bezier(.16, 1, .3, 1), filter .6s ease; }
    .vintage-card:hover img { transform: scale(1.09); filter: saturate(1.05); }
    .vintage-card .card-overlay {
        opacity: 1;
        transition: opacity .45s ease;
    }
    .vintage-card .card-peek {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        transition: max-height .5s ease, opacity .4s ease, margin .5s ease;
    }
    .vintage-card:hover .card-peek { max-height: 120px; opacity: 1; margin-top: .6rem; }

    /* ---- Scroll indicator bounce ---- */
    .scroll-dot { animation: scrollDot 2s ease-in-out infinite; }
    @keyframes scrollDot {
        0%, 100% { transform: translateY(0); opacity: .9; }
        50%      { transform: translateY(9px); opacity: .35; }
    }

    /* ---- Respect users who prefer less motion ---- */
    @media (prefers-reduced-motion: reduce) {
        html { scroll-behavior: auto; }
        .ken-burns { animation: none; }
        .reveal { opacity: 1; transform: none; transition: none; }
        .vintage-card, .vintage-card img, .btn-gold, .btn-outline, .btn-dark { transition: none; }
    }
</style>
@endsection

@section('main')

{{-- ============================================================
     1. HERO SECTION — Ken Burns vintage street photo of Kajoetangan
     Photo: Tropenmuseum collection via Wikimedia Commons (CC BY-SA),
     "De Heilige Hart Kerk aan de Kajoetangan te Malang", ca. 1900-1930.
     ============================================================ --}}
<section id="beranda" class="relative min-h-screen flex items-center overflow-hidden bg-[#1B1815]">

    <!-- Animated background (slow zoom) -->
    <div class="absolute inset-0">
        <div class="ken-burns absolute inset-0 bg-cover bg-center bg-no-repeat"
             style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/b/b8/COLLECTIE_TROPENMUSEUM_De_Heilige_Hart_Kerk_aan_de_Kajoetangan_te_Malang_Oost-Java._TMnr_60005866.jpg');">
        </div>
    </div>

    <!-- Dark overlay for legibility -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#1B1815]/85 via-[#1B1815]/55 to-[#1B1815]"></div>
    <div class="absolute inset-0 bg-[#4A3627]/20 mix-blend-multiply"></div>

    <!-- Hero content -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-24 md:pt-32">
        <div class="max-w-3xl">

            <!-- Eyebrow badge -->
            <div class="reveal inline-flex items-center gap-2 rounded-full border border-[#B08D57]/50 bg-[#1B1815]/40 backdrop-blur-sm px-4 py-2 mb-6">
                <i class="fas fa-trophy text-[#D4B483] text-xs"></i>
                <span class="text-[#FFFCF5]/90 text-[11px] sm:text-xs font-medium tracking-[0.18em] uppercase">
                    Juara 1 Pokdarwis · Wonderful Indonesia Awards 2025
                </span>
            </div>

            <!-- Headline -->
            <h1 class="reveal font-display text-[2.5rem] leading-[1.08] sm:text-6xl lg:text-7xl font-bold text-[#FFFCF5] drop-shadow-lg" style="transition-delay:.1s">
                Jelajahi <span class="text-[#D4B483] italic">Lorong Waktu</span> di Kampoeng Heritage Kajoetangan
            </h1>

            <!-- Subheadline -->
            <p class="reveal mt-6 text-[#FFFCF5]/85 text-base sm:text-lg leading-relaxed max-w-2xl" style="transition-delay:.2s">
                Di jantung Kota Malang berdiri kampung tua yang tumbuh sejak era kolonial Belanda — deretan rumah
                bergaya Indo-Eropa, gang bersejarah, dan terowongan air berusia satu abad. Dahulu pusat perdagangan
                &amp; pemerintahan Malang pada tahun 1900-an, kini Kajoetangan menjadi destinasi wisata sejarah
                paling ikonik di Jawa Timur.
            </p>

            <!-- CTA buttons -->
            <div class="reveal mt-9 flex flex-col sm:flex-row gap-4" style="transition-delay:.3s">
                <a href="{{ route('pemesanan.tiket') }}"
                   class="btn-gold inline-flex items-center justify-center gap-2.5 font-semibold text-sm sm:text-base px-8 py-4 rounded-full">
                    <i class="fas fa-ticket"></i> Beli Tiket
                </a>
                <a href="#lokasi"
                   class="btn-outline inline-flex items-center justify-center gap-2.5 font-semibold text-sm sm:text-base px-8 py-4 rounded-full">
                    <i class="fas fa-route"></i> Jelajahi Rute
                </a>
            </div>
        </div>

        <!-- Quick info strip -->
        <div class="reveal mt-14 grid grid-cols-1 sm:grid-cols-3 gap-px bg-[#FFFCF5]/15 rounded-2xl overflow-hidden border border-[#FFFCF5]/15 backdrop-blur-sm max-w-3xl" style="transition-delay:.4s">
            <div class="flex items-center gap-3 bg-[#1B1815]/60 px-5 py-4">
                <i class="fas fa-ticket text-[#B08D57]"></i>
                <div>
                    <p class="text-[10px] uppercase tracking-[0.2em] text-[#D4B483]">Tiket Masuk</p>
                    <p class="text-[#FFFCF5] text-sm font-semibold">Mulai Rp5.000</p>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-[#1B1815]/60 px-5 py-4">
                <i class="fas fa-clock text-[#B08D57]"></i>
                <div>
                    <p class="text-[10px] uppercase tracking-[0.2em] text-[#D4B483]">Jam Buka</p>
                    <p class="text-[#FFFCF5] text-sm font-semibold">Setiap hari 07.00 – 22.00</p>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-[#1B1815]/60 px-5 py-4">
                <i class="fas fa-location-dot text-[#B08D57]"></i>
                <div>
                    <p class="text-[10px] uppercase tracking-[0.2em] text-[#D4B483]">Lokasi</p>
                    <p class="text-[#FFFCF5] text-sm font-semibold">Kauman, Klojen, Kota Malang</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 hidden md:flex flex-col items-center">
        <span class="text-[#FFFCF5]/50 text-[10px] tracking-[0.3em] uppercase mb-3">Scroll</span>
        <span class="scroll-dot block w-[3px] h-10 rounded-full bg-[#D4B483]"></span>
    </div>
</section>

{{-- ============================================================
     2. SEJARAH SINGKAT — history of Kajoetangan as Malang's
        trading center in the 1900s (real facts)
     ============================================================ --}}
<section id="sejarah" class="relative py-20 md:py-28 bg-[#FFFCF5] overflow-hidden">
    <!-- Decorative oversized quote -->
    <span aria-hidden="true" class="pointer-events-none select-none absolute -top-8 right-4 font-display text-[12rem] leading-none text-[#4A3627]/5">&ldquo;</span>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Text column -->
            <div>
                <div class="reveal flex items-center gap-4 mb-5">
                    <span class="gold-rule"><span></span><span></span></span>
                    <span class="text-[#8C6A3F] text-xs font-semibold uppercase tracking-[0.28em]">Sejarah Singkat</span>
                </div>

                <h2 class="reveal font-display text-3xl sm:text-4xl lg:text-[2.75rem] font-bold text-[#1B1815] leading-tight" style="transition-delay:.08s">
                    Dari Pusat Perdagangan Malang<br class="hidden sm:block">
                    Menjadi Ikon Wisata Tempo Dulu
                </h2>

                <div class="reveal mt-7 space-y-5 text-[#4A3627]/90 leading-relaxed text-[15px] sm:text-base" style="transition-delay:.16s">
                    <p>
                        <strong class="text-[#1B1815]">Kajoetangan</strong> (ditulis juga <em>Kayutangan</em>) adalah
                        salah satu kawasan tertua di Kota Malang, yang berada di Kelurahan Kauman, Kecamatan Klojen.
                        Kawasan ini berkembang sejak masa kolonial Belanda sekitar tahun <strong class="text-[#1B1815]">1870-an</strong>
                        sebagai pusat kegiatan ekonomi sekaligus hunian kaum elite Malang tempo dulu.
                    </p>
                    <p>
                        Memasuki awal abad ke-20, Jalan Kajoetangan menjadi urat nadi perdagangan kota: barisan ruko
                        dan rumah megah bergaya Eropa berdiri di kedua sisi jalan — jendela tinggi berjeruji kayu,
                        teras lengkung, sampai cerobong asap khas Indo-Eropa. Dahulu kawasan ini dikenal sebagai
                        <strong class="text-[#1B1815]">pusat perdagangan, sosial, dan pemerintahan</strong> Kota Malang.
                    </p>
                    <p>
                        Sejak <strong class="text-[#1B1815]">2018</strong>, warga bersama Pokdarwis menata ulang kampung
                        menjadi destinasi <em>heritage</em> yang mengangkat budaya, sejarah, dan ekonomi kreatif.
                        Lebih dari <strong class="text-[#1B1815]">30 bangunan cagar budaya</strong> kini terhubung oleh
                        jalur pejalan kaki dengan mural, pojok baca, dan pemandu wisata tersertifikasi.
                    </p>
                </div>

                <!-- Timeline -->
                <div class="reveal mt-9 border-l-2 border-[#B08D57]/40 pl-6 space-y-5" style="transition-delay:.24s">
                    <div class="relative">
                        <span class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#B08D57] ring-4 ring-[#FFFCF5]"></span>
                        <p class="font-display font-bold text-[#1B1815]">Abad ke-13 · Kampoeng Lahir</p>
                        <p class="text-sm text-[#4A3627]/80">Kawasan Kauman–Kajoetangan mulai dikenal sebagai permukiman tua di pusat Kota Malang.</p>
                    </div>
                    <div class="relative">
                        <span class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#B08D57] ring-4 ring-[#FFFCF5]"></span>
                        <p class="font-display font-bold text-[#1B1815]">1870-an · Era Kolonial</p>
                        <p class="text-sm text-[#4A3627]/80">Bermunculan bangunan bergaya arsitektur Eropa; kawasan jadi pusat ekonomi &amp; hunian elite.</p>
                    </div>
                    <div class="relative">
                        <span class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#B08D57] ring-4 ring-[#FFFCF5]"></span>
                        <p class="font-display font-bold text-[#1B1815]">1920-an · Ikon Budaya</p>
                        <p class="text-sm text-[#4A3627]/80">Dikenal sebagai pusat budaya &amp; sejarah — dasar branding &ldquo;Kawasan Heritage Kajoetangan&rdquo;.</p>
                    </div>
                    <div class="relative">
                        <span class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#B08D57] ring-4 ring-[#FFFCF5]"></span>
                        <p class="font-display font-bold text-[#1B1815]">2018 · Menjadi Desa Wisata</p>
                        <p class="text-sm text-[#4A3627]/80">Kampung ditata menjadi destinasi wisata heritage &amp; kuliner di tengah Kota Malang.</p>
                    </div>
                    <div class="relative">
                        <span class="absolute -left-[31px] top-1.5 w-3.5 h-3.5 rounded-full bg-[#B08D57] ring-4 ring-[#FFFCF5]"></span>
                        <p class="font-display font-bold text-[#1B1815]">2025 · Juara 1 Pokdarwis Nasional</p>
                        <p class="text-sm text-[#4A3627]/80">Meraih Juara 1 Kelompok Sadar Wisata di Wonderful Indonesia Awards (Kemenparekraf).</p>
                    </div>
                </div>
            </div>

            <!-- Image collage column -->
            <div class="relative">
                <div class="reveal relative rounded-2xl overflow-hidden shadow-2xl" style="transition-delay:.1s">
                    <!-- Modern view of the kampung (Wikimedia Commons) -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/View_of_Heritage_Kajoetangan_from_wooden_walkway_along_the_stream.jpg/1280px-View_of_Heritage_Kajoetangan_from_wooden_walkway_along_the_stream.jpg"
                         alt="Panorama Kampoeng Heritage Kajoetangan dari jembatan kayu di tepi saluran air"
                         loading="lazy"
                         class="w-full h-[340px] sm:h-[440px] lg:h-[520px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1B1815]/45 via-transparent to-transparent"></div>
                    <span class="absolute bottom-4 left-4 text-[#FFFCF5]/85 text-xs tracking-wide bg-[#1B1815]/50 backdrop-blur-sm px-3 py-1.5 rounded-full">
                        <i class="fas fa-camera text-[#D4B483] mr-1.5"></i> Kajoetangan hari ini
                    </span>
                </div>

                <!-- Floating vintage card -->
                <div class="reveal absolute -bottom-10 -left-4 sm:left-6 w-44 sm:w-56 rounded-xl overflow-hidden shadow-2xl border-4 border-[#FFFCF5] rotate-[-4deg] hover:rotate-0 transition-transform duration-500" style="transition-delay:.3s">
                    <!-- Colonial-era photo, Tropenmuseum via Wikimedia Commons -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/COLLECTIE_TROPENMUSEUM_De_winkelstraat_Kajoetangan_in_Malang_met_op_de_achtergrond_de_Heilige_Hart_Kerk_Oost-Java._TMnr_60005872.jpg"
                         alt="Jalan Kajoetangan pada masa kolonial Belanda (arsip Tropenmuseum)"
                         loading="lazy"
                         class="w-full h-28 sm:h-36 object-cover sepia">
                    <p class="bg-[#4A3627] text-[#FFFCF5]/90 text-[10px] text-center py-2 tracking-[0.15em] uppercase">
                        Kajoetangan · Kolonial
                    </p>
                </div>
            </div>
        </div>

        <!-- Stats bar -->
        <div class="reveal mt-24 md:mt-28 grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-[#1B1815] rounded-2xl p-6 text-center hover:bg-[#4A3627] transition-colors duration-500">
                <p class="font-display text-4xl font-bold text-[#D4B483]"><span class="counter" data-count="30">0</span>+</p>
                <p class="mt-2 text-[#FFFCF5]/75 text-xs sm:text-sm tracking-wide">Bangunan Cagar Budaya</p>
            </div>
            <div class="bg-[#1B1815] rounded-2xl p-6 text-center hover:bg-[#4A3627] transition-colors duration-500">
                <p class="font-display text-4xl font-bold text-[#D4B483]"><span class="counter" data-count="13">0</span></p>
                <p class="mt-2 text-[#FFFCF5]/75 text-xs sm:text-sm tracking-wide">Pemandu Tersertifikasi</p>
            </div>
            <div class="bg-[#1B1815] rounded-2xl p-6 text-center hover:bg-[#4A3627] transition-colors duration-500">
                <p class="font-display text-4xl font-bold text-[#D4B483]"><span class="counter" data-count="8">0</span></p>
                <p class="mt-2 text-[#FFFCF5]/75 text-xs sm:text-sm tracking-wide">Penghargaan Nasional</p>
            </div>
            <div class="bg-[#1B1815] rounded-2xl p-6 text-center hover:bg-[#4A3627] transition-colors duration-500">
                <p class="font-display text-4xl font-bold text-[#D4B483]"><span class="counter" data-count="3">0</span></p>
                <p class="mt-2 text-[#FFFCF5]/75 text-xs sm:text-sm tracking-wide">Pintu Masuk Legendaris</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     3. SPOT FOTO / DESTINASI — real spots in Kajoetangan
     ============================================================ --}}
<section id="destinasi" class="py-20 md:py-28 bg-[#F5EFE3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section header -->
        <div class="max-w-2xl mb-12 md:mb-16">
            <div class="reveal flex items-center gap-4 mb-5">
                <span class="gold-rule"><span></span><span></span></span>
                <span class="text-[#8C6A3F] text-xs font-semibold uppercase tracking-[0.28em]">Spot Foto &amp; Destinasi</span>
            </div>
            <h2 class="reveal font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#1B1815] leading-tight" style="transition-delay:.08s">
                Sudut-Sudut yang Menyimpan Cerita
            </h2>
            <p class="reveal mt-4 text-[#4A3627]/85 leading-relaxed" style="transition-delay:.16s">
                Enam titik wajib saat berjalan kaki menyusuri Kajoetangan — dari ruko tua milik saudagar
                Tionghoa sampai terowongan air peninggalan zaman kolonial.
            </p>
        </div>

        <!-- Cards grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

            <!-- Card 1: Rumah Namsin -->
            <article class="reveal vintage-card group bg-[#FFFCF5] rounded-2xl overflow-hidden shadow-lg flex flex-col">
                <div class="relative overflow-hidden h-60">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Kajoetangan_Heritage.jpg/1280px-Kajoetangan_Heritage.jpg"
                         alt="Bangunan tua bersejarah di Kampoeng Heritage Kajoetangan"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815]/70 to-transparent"></div>
                    <span class="absolute top-4 left-4 bg-[#B08D57] text-[#1B1815] text-[11px] font-bold px-3 py-1 rounded-full tracking-wide">Ikon Utama</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-display text-xl font-bold text-[#1B1815] group-hover:text-[#8C6A3F] transition-colors">Rumah Namsin</h3>
                    <p class="mt-3 text-sm text-[#4A3627]/85 leading-relaxed flex-grow">
                        Ruko tua nomor 31 di Jalan Basuki Rahmat yang diperkirakan dibangun sekitar 1870-an oleh
                        saudagar Tionghoa bernama Namsin. Fasad, kusen jati, dan papan nama tionghoa-nya
                        masih terjaga keasliannya.
                    </p>
                    <p class="card-peek text-xs text-[#8C6A3F] italic">
                        Fakta: menjadi lokasi ikonik untuk foto prewedding &amp; syuting film bertema tempo dulu.
                    </p>
                    <a href="{{ route('spotfoto') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#8C6A3F] hover:gap-3 transition-all">
                        Lihat detail <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>

            <!-- Card 2: Terowongan Air Kajoetangan -->
            <article class="reveal vintage-card group bg-[#FFFCF5] rounded-2xl overflow-hidden shadow-lg flex flex-col" style="transition-delay:.1s">
                <div class="relative overflow-hidden h-60">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/20_270925_Kampoeng_Heritage_Kayutangan.jpg/1280px-20_270925_Kampoeng_Heritage_Kayutangan.jpg"
                         alt="Jalur tepi saluran air Kampoeng Heritage Kajoetangan"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815]/70 to-transparent"></div>
                    <span class="absolute top-4 left-4 bg-[#B08D57] text-[#1B1815] text-[11px] font-bold px-3 py-1 rounded-full tracking-wide">Favorit Senja</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-display text-xl font-bold text-[#1B1815] group-hover:text-[#8C6A3F] transition-colors">Terowongan Air Kajoetangan</h3>
                    <p class="mt-3 text-sm text-[#4A3627]/85 leading-relaxed flex-grow">
                        Saluran air era kolonial yang dahulu menghubungkan kawasan Kajoetangan dengan kawasan lain
                        di pusat kota. Jalur tepi sungainya kini dipoles menjadi boardwalk kayu dengan lampion dan
                        deretan mural sejarah Malang.
                    </p>
                    <p class="card-peek text-xs text-[#8C6A3F] italic">
                        Fakta: paling dramatis difoto menjelang sore, saat lampion mulai menyala.
                    </p>
                    <a href="{{ route('spotfoto') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#8C6A3F] hover:gap-3 transition-all">
                        Lihat detail <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>

            <!-- Card 3: Pasar Talun & Barang Antik -->
            <article class="reveal vintage-card group bg-[#FFFCF5] rounded-2xl overflow-hidden shadow-lg flex flex-col" style="transition-delay:.2s">
                <div class="relative overflow-hidden h-60">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/18_270925_Kampoeng_Heritage_Kayutangan.jpg/1280px-18_270925_Kampoeng_Heritage_Kayutangan.jpg"
                         alt="Suasana kampung tua Kajoetangan"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815]/70 to-transparent"></div>
                    <span class="absolute top-4 left-4 bg-[#B08D57] text-[#1B1815] text-[11px] font-bold px-3 py-1 rounded-full tracking-wide">Surga Kolektor</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-display text-xl font-bold text-[#1B1815] group-hover:text-[#8C6A3F] transition-colors">Pasar Talun &amp; Barang Antik</h3>
                    <p class="mt-3 text-sm text-[#4A3627]/85 leading-relaxed flex-grow">
                        Pasar tua di ujung Jalan Talun yang menjadi rumah bagi para kolektor: radio tabung, kamera
                        klasik, perabot gaya Belanda, sampai gerabah. Deretan rumah barang antik di Jalan A.R. Hakim
                        melengkapinya.
                    </p>
                    <p class="card-peek text-xs text-[#8C6A3F] italic">
                        Fakta: hidup kembali setiap akhir pekan lewat Festival Pasar Krempyeng.
                    </p>
                    <a href="{{ route('spotfoto') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#8C6A3F] hover:gap-3 transition-all">
                        Lihat detail <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>

            <!-- Card 4: Rumah Jengki & Rumah 1870 -->
            <article class="reveal vintage-card group bg-[#FFFCF5] rounded-2xl overflow-hidden shadow-lg flex flex-col">
                <div class="relative overflow-hidden h-60">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/12_270925_kampoeng_heritage_kayutangan.jpg/1280px-12_270925_kampoeng_heritage_kayutangan.jpg"
                         alt="Rumah bersejarah di Kampoeng Heritage Kajoetangan"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815]/70 to-transparent"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-display text-xl font-bold text-[#1B1815] group-hover:text-[#8C6A3F] transition-colors">Rumah Jengki &amp; Rumah 1870</h3>
                    <p class="mt-3 text-sm text-[#4A3627]/85 leading-relaxed flex-grow">
                        Koleksi rumah bersejarah dengan gaya bertingkat khas Amerika (jengki) serta rumah tertua
                        kawasan yang dibangun pada 1870. Keduanya masih dihuni dan dirawat turun-temurun oleh
                        warga kampung.
                    </p>
                    <p class="card-peek text-xs text-[#8C6A3F] italic">
                        Fakta: lengkap dengan Rumah Penghulu dan Rumah Rindu yang menyimpan artefak zaman dulu.
                    </p>
                    <a href="{{ route('rumahjengki') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#8C6A3F] hover:gap-3 transition-all">
                        Kunjungi rumah <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>

            <!-- Card 5: Gereja Hati Kudus -->
            <article class="reveal vintage-card group bg-[#FFFCF5] rounded-2xl overflow-hidden shadow-lg flex flex-col" style="transition-delay:.1s">
                <div class="relative overflow-hidden h-60">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Gereja_Kayutangan_Malang.jpg"
                         alt="Gereja tua di Kayutangan, Malang"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815]/70 to-transparent"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-display text-xl font-bold text-[#1B1815] group-hover:text-[#8C6A3F] transition-colors">Gereja Hati Kudus Kayutangan</h3>
                    <p class="mt-3 text-sm text-[#4A3627]/85 leading-relaxed flex-grow">
                        Gereja katolik tua di Jalan Kajoetangan yang menara loncengnya menjadi penanda horizon
                        kampung. Keberadaannya sudah terdokumentasi dalam arsip kolonial Hindia Belanda
                        (Tropenmuseum, Belanda).
                    </p>
                    <p class="card-peek text-xs text-[#8C6A3F] italic">
                        Fakta: foto lawasnya memperlihatkan jalan Kajoetangan yang masih berupa jalan kampung.
                    </p>
                    <a href="{{ route('spotfoto') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#8C6A3F] hover:gap-3 transition-all">
                        Lihat detail <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>

            <!-- Card 6: Gang Mural & Pojok Sejarah -->
            <article class="reveal vintage-card group bg-[#FFFCF5] rounded-2xl overflow-hidden shadow-lg flex flex-col" style="transition-delay:.2s">
                <div class="relative overflow-hidden h-60">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Kayutangan_Street_with_Kayutangan_Cathedral_in_the_background%2C_2020.jpg/1280px-Kayutangan_Street_with_Kayutangan_Cathedral_in_the_background%2C_2020.jpg"
                         alt="Jalan Kayutangan dengan gereja di kejauhan, 2020"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815]/70 to-transparent"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-display text-xl font-bold text-[#1B1815] group-hover:text-[#8C6A3F] transition-colors">Gang Mural &amp; Pojok Sejarah</h3>
                    <p class="mt-3 text-sm text-[#4A3627]/85 leading-relaxed flex-grow">
                        Gang-gang sempit penghubung tiga jalan utama — Basuki Rahmat, Semeru, dan Talun —
                        dihiasi mural sejarah Malang, pojok baca, dan selfie area yang dirancang warga
                        secara swadaya.
                    </p>
                    <p class="card-peek text-xs text-[#8C6A3F] italic">
                        Fakta: berjalan kaki dari Alun-Alun Malang ke kampung ini hanya butuh ±10 menit.
                    </p>
                    <a href="{{ route('spotfoto') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#8C6A3F] hover:gap-3 transition-all">
                        Lihat detail <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </article>
        </div>

        <!-- CTA to full gallery -->
        <div class="reveal mt-12 text-center">
            <a href="{{ route('spotfoto') }}" class="btn-dark inline-flex items-center gap-2.5 font-semibold text-sm px-8 py-4 rounded-full">
                Lihat Semua Spot Foto <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

{{-- ============================================================
     4. KULINER KHAS — real culinary icons of Kajoetangan / Malang
     ============================================================ --}}
<section id="kuliner" class="py-20 md:py-28 bg-[#FFFCF5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section header -->
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12 md:mb-16">
            <div class="max-w-2xl">
                <div class="reveal flex items-center gap-4 mb-5">
                    <span class="gold-rule"><span></span><span></span></span>
                    <span class="text-[#8C6A3F] text-xs font-semibold uppercase tracking-[0.28em]">Kuliner Khas</span>
                </div>
                <h2 class="reveal font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#1B1815] leading-tight" style="transition-delay:.08s">
                    Rasa Tempo Dulu di Lidah Masa Kini
                </h2>
                <p class="reveal mt-4 text-[#4A3627]/85 leading-relaxed" style="transition-delay:.16s">
                    Dari kedai kopi di bangunan tua sampai dawet ireng legendaris — kampung ini telah menjadi
                    destinasi kuliner warga Malang sejak 2018, dan tetap hidup sampai hari ini.
                </p>
            </div>
            <a href="{{ route('kuliner') }}" class="reveal shrink-0 inline-flex items-center gap-2 text-sm font-semibold text-[#8C6A3F] hover:gap-3 transition-all">
                Jelajahi semua kuliner <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>

        <!-- Culinary grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Kuliner 1: Kopi Kajoetangan -->
            <article class="reveal vintage-card group bg-[#1B1815] rounded-2xl overflow-hidden shadow-lg flex flex-col">
                <div class="relative overflow-hidden h-52">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=800&q=80" alt="Secangkir kopi manual brew"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815] via-[#1B1815]/20 to-transparent"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow -mt-10 relative z-10">
                    <h3 class="font-display text-lg font-bold text-[#FFFCF5] group-hover:text-[#D4B483] transition-colors">Kopi Kajoetangan</h3>
                    <p class="mt-2 text-sm text-[#FFFCF5]/70 leading-relaxed flex-grow">
                        Kedai kopi di dalam bangunan tua yang menyajikan manual brew arabika &amp; robusta khas Malang Raya.
                    </p>
                    <p class="card-peek text-xs text-[#D4B483] italic">Titik istirahat favorit setelah walking tour.</p>
                    <div class="mt-4">
                        <span class="inline-flex items-center gap-1.5 text-[11px] tracking-[0.15em] uppercase text-[#B08D57] border border-[#B08D57]/40 rounded-full px-3 py-1">
                            <i class="fas fa-mug-hot"></i> Kopi
                        </span>
                    </div>
                </div>
            </article>

            <!-- Kuliner 2: Omah Dawet Ireng -->
            <article class="reveal vintage-card group bg-[#1B1815] rounded-2xl overflow-hidden shadow-lg flex flex-col" style="transition-delay:.08s">
                <div class="relative overflow-hidden h-52">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&q=80" alt="Suasana rumah makan tradisional"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815] via-[#1B1815]/20 to-transparent"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow -mt-10 relative z-10">
                    <h3 class="font-display text-lg font-bold text-[#FFFCF5] group-hover:text-[#D4B483] transition-colors">Omah Dawet Ireng</h3>
                    <p class="mt-2 text-sm text-[#FFFCF5]/70 leading-relaxed flex-grow">
                        Es dawet hitam dengan gula aren khas kampung — tersedia di daftar suvenir resmi desa wisata.
                    </p>
                    <p class="card-peek text-xs text-[#D4B483] italic">Penyejuk paling laris seusai menyusuri gang.</p>
                    <div class="mt-4">
                        <span class="inline-flex items-center gap-1.5 text-[11px] tracking-[0.15em] uppercase text-[#B08D57] border border-[#B08D57]/40 rounded-full px-3 py-1">
                            <i class="fas fa-glass-water"></i> Minuman
                        </span>
                    </div>
                </div>
            </article>

            <!-- Kuliner 3: Nasi Klopyok -->
            <article class="reveal vintage-card group bg-[#1B1815] rounded-2xl overflow-hidden shadow-lg flex flex-col" style="transition-delay:.16s">
                <div class="relative overflow-hidden h-52">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800&q=80" alt="Hidangan nasi dengan lauk pauk"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815] via-[#1B1815]/20 to-transparent"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow -mt-10 relative z-10">
                    <h3 class="font-display text-lg font-bold text-[#FFFCF5] group-hover:text-[#D4B483] transition-colors">Nasi Klopyok</h3>
                    <p class="mt-2 text-sm text-[#FFFCF5]/70 leading-relaxed flex-grow">
                        Nasi campur legendaris Malang dengan beragam lauk, telur, dan sayuran — kuliner wajib pencinta jajanan kampung.
                    </p>
                    <p class="card-peek text-xs text-[#D4B483] italic">Nama &ldquo;klopyok&rdquo; berasal dari bunyi masaknya yang khas.</p>
                    <div class="mt-4">
                        <span class="inline-flex items-center gap-1.5 text-[11px] tracking-[0.15em] uppercase text-[#B08D57] border border-[#B08D57]/40 rounded-full px-3 py-1">
                            <i class="fas fa-bowl-food"></i> Makanan
                        </span>
                    </div>
                </div>
            </article>

            <!-- Kuliner 4: Soto Ayam Malang -->
            <article class="reveal vintage-card group bg-[#1B1815] rounded-2xl overflow-hidden shadow-lg flex flex-col" style="transition-delay:.24s">
                <div class="relative overflow-hidden h-52">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&q=80" alt="Sajian rumah makan"
                         loading="lazy" class="w-full h-full object-cover">
                    <div class="card-overlay absolute inset-0 bg-gradient-to-t from-[#1B1815] via-[#1B1815]/20 to-transparent"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow -mt-10 relative z-10">
                    <h3 class="font-display text-lg font-bold text-[#FFFCF5] group-hover:text-[#D4B483] transition-colors">Soto Ayam Malang</h3>
                    <p class="mt-2 text-sm text-[#FFFCF5]/70 leading-relaxed flex-grow">
                        Sup ayam berkuah kuning rempah dengan taburan koya — klasik Malang yang selalu ada di kampung.
                    </p>
                    <p class="card-peek text-xs text-[#D4B483] italic">Paling pas disantap hangat saat sore hari.</p>
                    <div class="mt-4">
                        <span class="inline-flex items-center gap-1.5 text-[11px] tracking-[0.15em] uppercase text-[#B08D57] border border-[#B08D57]/40 rounded-full px-3 py-1">
                            <i class="fas fa-utensils"></i> Makanan
                        </span>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

{{-- ============================================================
     5. EVENT & PENGHARGAAN — real agendas & real awards
     ============================================================ --}}
<section id="event" class="py-20 md:py-28 bg-[#1B1815] text-[#FFFCF5] relative overflow-hidden">
    <!-- Decorative pattern -->
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 opacity-[0.05]"
         style="background-image:radial-gradient(#FFFCF5 1px, transparent 1px); background-size:22px 22px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20">

            <!-- Left: Agenda Event -->
            <div>
                <div class="reveal flex items-center gap-4 mb-5">
                    <span class="gold-rule"><span></span><span></span></span>
                    <span class="text-[#D4B483] text-xs font-semibold uppercase tracking-[0.28em]">Agenda Kampoeng</span>
                </div>
                <h2 class="reveal font-display text-3xl sm:text-4xl font-bold leading-tight" style="transition-delay:.08s">
                    Festival yang Menghidupkan Kampung
                </h2>

                <ul class="mt-9 space-y-4">
                    <li class="reveal group flex items-start gap-5 rounded-2xl border border-[#B08D57]/20 bg-[#FFFCF5]/5 p-5 hover:border-[#B08D57]/60 hover:bg-[#FFFCF5]/10 transition-all duration-300">
                        <span class="grid place-items-center w-12 h-12 shrink-0 rounded-xl bg-[#B08D57]/15 text-[#D4B483] group-hover:bg-[#B08D57] group-hover:text-[#1B1815] transition-colors">
                            <i class="fas fa-store"></i>
                        </span>
                        <div>
                            <h3 class="font-display text-lg font-bold">Festival Pasar Krempyeng</h3>
                            <p class="mt-1 text-sm text-[#FFFCF5]/70 leading-relaxed">Pasar kreatif warga kampung: kuliner kaki lima, kerajinan, dan pertunjukan musik lokal di gang-gang Kajoetangan.</p>
                        </div>
                    </li>
                    <li class="reveal group flex items-start gap-5 rounded-2xl border border-[#B08D57]/20 bg-[#FFFCF5]/5 p-5 hover:border-[#B08D57]/60 hover:bg-[#FFFCF5]/10 transition-all duration-300" style="transition-delay:.08s">
                        <span class="grid place-items-center w-12 h-12 shrink-0 rounded-xl bg-[#B08D57]/15 text-[#D4B483] group-hover:bg-[#B08D57] group-hover:text-[#1B1815] transition-colors">
                            <i class="fas fa-palette"></i>
                        </span>
                        <div>
                            <h3 class="font-display text-lg font-bold">Malang Creativa Festival</h3>
                            <p class="mt-1 text-sm text-[#FFFCF5]/70 leading-relaxed">Festival ekonomi kreatif Kota Malang yang rutin menggandeng UMKM dan seniman kampung Kajoetangan.</p>
                        </div>
                    </li>
                    <li class="reveal group flex items-start gap-5 rounded-2xl border border-[#B08D57]/20 bg-[#FFFCF5]/5 p-5 hover:border-[#B08D57]/60 hover:bg-[#FFFCF5]/10 transition-all duration-300" style="transition-delay:.16s">
                        <span class="grid place-items-center w-12 h-12 shrink-0 rounded-xl bg-[#B08D57]/15 text-[#D4B483] group-hover:bg-[#B08D57] group-hover:text-[#1B1815] transition-colors">
                            <i class="fas fa-masks-theater"></i>
                        </span>
                        <div>
                            <h3 class="font-display text-lg font-bold">Pesta Kampung Tematik</h3>
                            <p class="mt-1 text-sm text-[#FFFCF5]/70 leading-relaxed">Perayaan budaya Kota Malang dengan kirab, kesenian, hingga kuliner show di ruang publik kampung.</p>
                        </div>
                    </li>
                    <li class="reveal group flex items-start gap-5 rounded-2xl border border-[#B08D57]/20 bg-[#FFFCF5]/5 p-5 hover:border-[#B08D57]/60 hover:bg-[#FFFCF5]/10 transition-all duration-300" style="transition-delay:.24s">
                        <span class="grid place-items-center w-12 h-12 shrink-0 rounded-xl bg-[#B08D57]/15 text-[#D4B483] group-hover:bg-[#B08D57] group-hover:text-[#1B1815] transition-colors">
                            <i class="fas fa-film"></i>
                        </span>
                        <div>
                            <h3 class="font-display text-lg font-bold">Festival Dewi Cemara</h3>
                            <p class="mt-1 text-sm text-[#FFFCF5]/70 leading-relaxed">Ajang apresiasi desa wisata Jawa Timur — Kajoetangan meraih 10 Penyaji Virtual Tour Terbaik 2024.</p>
                        </div>
                    </li>
                </ul>

                <a href="{{ route('event') }}" class="reveal mt-8 inline-flex items-center gap-2 text-sm font-semibold text-[#D4B483] hover:gap-3 transition-all">
                    Lihat semua event <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>

            <!-- Right: Penghargaan -->
            <div id="penghargaan">
                <div class="reveal flex items-center gap-4 mb-5">
                    <span class="gold-rule"><span></span><span></span></span>
                    <span class="text-[#D4B483] text-xs font-semibold uppercase tracking-[0.28em]">Penghargaan</span>
                </div>
                <h2 class="reveal font-display text-3xl sm:text-4xl font-bold leading-tight" style="transition-delay:.08s">
                    Diakui Nasional, Dicintai Warga
                </h2>

                <div class="mt-9 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="reveal rounded-2xl bg-[#FFFCF5] p-5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                        <i class="fas fa-trophy text-[#B08D57] text-xl"></i>
                        <h3 class="mt-3 font-display font-bold text-[#1B1815] leading-snug">Juara 1 Pokdarwis Nasional</h3>
                        <p class="mt-1 text-xs text-[#4A3627]/80">Wonderful Indonesia Awards, Kemenparekraf 2025</p>
                    </div>
                    <div class="reveal rounded-2xl bg-[#FFFCF5] p-5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300" style="transition-delay:.08s">
                        <i class="fas fa-award text-[#B08D57] text-xl"></i>
                        <h3 class="mt-3 font-display font-bold text-[#1B1815] leading-snug">75 Besar ADWI 2023</h3>
                        <p class="mt-1 text-xs text-[#4A3627]/80">Anugerah Desa Wisata Indonesia — Kemenparekraf</p>
                    </div>
                    <div class="reveal rounded-2xl bg-[#FFFCF5] p-5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300" style="transition-delay:.16s">
                        <i class="fas fa-star text-[#B08D57] text-xl"></i>
                        <h3 class="mt-3 font-display font-bold text-[#1B1815] leading-snug">Juara 5 Digital &amp; Kreativitas</h3>
                        <p class="mt-1 text-xs text-[#4A3627]/80">Kategori Desa Wisata ADWI 2023</p>
                    </div>
                    <div class="reveal rounded-2xl bg-[#FFFCF5] p-5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300" style="transition-delay:.24s">
                        <i class="fas fa-medal text-[#B08D57] text-xl"></i>
                        <h3 class="mt-3 font-display font-bold text-[#1B1815] leading-snug">10 Terbaik Desa Wisata Cerdas</h3>
                        <p class="mt-1 text-xs text-[#4A3627]/80">Mandiri Sejahtera, Provinsi Jawa Timur 2023</p>
                    </div>
                    <div class="reveal rounded-2xl bg-[#FFFCF5] p-5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300" style="transition-delay:.32s">
                        <i class="fas fa-video text-[#B08D57] text-xl"></i>
                        <h3 class="mt-3 font-display font-bold text-[#1B1815] leading-snug">10 Virtual Tour Terbaik</h3>
                        <p class="mt-1 text-xs text-[#4A3627]/80">Penghargaan Dewi Cemara Jawa Timur 2024</p>
                    </div>
                    <div class="reveal rounded-2xl bg-[#FFFCF5] p-5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300" style="transition-delay:.4s">
                        <i class="fas fa-certificate text-[#B08D57] text-xl"></i>
                        <h3 class="mt-3 font-display font-bold text-[#1B1815] leading-snug">Kawasan Berbasis Kekayaan Intelektual</h3>
                        <p class="mt-1 text-xs text-[#4A3627]/80">Kemenkumham RI, Kategori Kawasan Karya Cipta 2025</p>
                    </div>
                </div>

                <a href="{{ route('award') }}" class="reveal mt-8 inline-flex items-center gap-2 text-sm font-semibold text-[#D4B483] hover:gap-3 transition-all">
                    Seluruh penghargaan <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     6. LOKASI & RUTE — map, hours, ticket, access
     ============================================================ --}}
<section id="lokasi" class="py-20 md:py-28 bg-[#FFFCF5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Map -->
            <div class="reveal order-2 lg:order-1">
                <div class="group relative rounded-2xl overflow-hidden shadow-2xl hover:shadow-[0_32px_70px_-25px_rgba(27,24,21,.5)] transition-shadow duration-500">
                    <div class="aspect-video bg-[#F5EFE3]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.193284446038!2d112.62672157484627!3d-7.978963992046274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6292a5fa96abd%3A0x4c4114e495f92910!2sKampoeng%20Heritage%20Kajoetangan!5e0!3m2!1sid!2sid!4v1764255034667!5m2!1sid!2sid"
                            class="w-full h-full border-0"
                            title="Peta lokasi Kampoeng Heritage Kajoetangan"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Info -->
            <div class="order-1 lg:order-2">
                <div class="reveal flex items-center gap-4 mb-5">
                    <span class="gold-rule"><span></span><span></span></span>
                    <span class="text-[#8C6A3F] text-xs font-semibold uppercase tracking-[0.28em]">Lokasi &amp; Rute</span>
                </div>
                <h2 class="reveal font-display text-3xl sm:text-4xl lg:text-[2.5rem] font-bold text-[#1B1815] leading-tight" style="transition-delay:.08s">
                    10 Menit dari Alun-Alun Malang
                </h2>
                <p class="reveal mt-4 text-[#4A3627]/85 leading-relaxed" style="transition-delay:.16s">
                    Kajoetangan berada di Jl. Jend. Basuki Rachmad Gg. 4, Kelurahan Kauman, Kecamatan Klojen —
                    persis di pusat kota, tak jauh dari Balaikota dan Alun-Alun Malang. Kampung ini punya tiga
                    pintu legendaris: Jalan Basuki Rahmat, Jalan Semeru, dan Jalan Talun.
                </p>

                <div class="reveal mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4" style="transition-delay:.24s">
                    <div class="rounded-xl border border-[#4A3627]/15 bg-white p-5 hover:border-[#B08D57] transition-colors duration-300">
                        <i class="fas fa-ticket text-[#B08D57]"></i>
                        <p class="mt-2 font-semibold text-[#1B1815] text-sm">Harga Tiket Masuk</p>
                        <p class="text-[#4A3627]/80 text-sm mt-1">Rp5.000 (domestik) · Rp10.000 (mancanegara)</p>
                    </div>
                    <div class="rounded-xl border border-[#4A3627]/15 bg-white p-5 hover:border-[#B08D57] transition-colors duration-300">
                        <i class="fas fa-clock text-[#B08D57]"></i>
                        <p class="mt-2 font-semibold text-[#1B1815] text-sm">Jam Operasional</p>
                        <p class="text-[#4A3627]/80 text-sm mt-1">Setiap hari, 07.00 – 22.00 WIB</p>
                    </div>
                    <div class="rounded-xl border border-[#4A3627]/15 bg-white p-5 hover:border-[#B08D57] transition-colors duration-300">
                        <i class="fas fa-route text-[#B08D57]"></i>
                        <p class="mt-2 font-semibold text-[#1B1815] text-sm">Rute Populer</p>
                        <p class="text-[#4A3627]/80 text-sm mt-1">Stasiun Malang Kota Baru → Alun-Alun → Kajoetangan</p>
                    </div>
                    <div class="rounded-xl border border-[#4A3627]/15 bg-white p-5 hover:border-[#B08D57] transition-colors duration-300">
                        <i class="fas fa-user-tie text-[#B08D57]"></i>
                        <p class="mt-2 font-semibold text-[#1B1815] text-sm">Pemandu Tersertifikasi</p>
                        <p class="text-[#4A3627]/80 text-sm mt-1">0812-3022-2880 (Pokdarwis)</p>
                    </div>
                </div>

                <div class="reveal mt-8 flex flex-col sm:flex-row gap-4" style="transition-delay:.32s">
                    <a href="https://maps.app.goo.gl/PhKQF9V8hULE8mxN7" target="_blank" rel="noopener"
                       class="btn-gold inline-flex items-center justify-center gap-2.5 font-semibold text-sm px-7 py-3.5 rounded-full">
                        <i class="fas fa-map-location-dot"></i> Buka di Google Maps
                    </a>
                    <a href="{{ route('pemesanan.tiket') }}"
                       class="btn-dark inline-flex items-center justify-center gap-2.5 font-semibold text-sm px-7 py-3.5 rounded-full">
                        <i class="fas fa-ticket"></i> Beli Tiket Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     7. FINAL CTA BAND — vintage panorama background
     Photo: Tropenmuseum via Wikimedia Commons (CC BY-SA)
     ============================================================ --}}
<section class="relative py-24 md:py-28 overflow-hidden bg-[#4A3627]">
    <div class="absolute inset-0 bg-cover bg-center opacity-25 sepia"
         style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/a/ac/COLLECTIE_TROPENMUSEUM_De_winkelstraat_Kajoetangan_in_Malang_met_op_de_achtergrond_de_Heilige_Hart_Kerk_Oost-Java._TMnr_60005872.jpg');">
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#1B1815]/90 via-[#4A3627]/75 to-[#1B1815]/90"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="reveal flex justify-center mb-6">
            <span class="gold-rule"><span></span><span></span></span>
        </div>
        <h2 class="reveal font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-[#FFFCF5] leading-tight" style="transition-delay:.08s">
            Sepuasnya Menelusuri Lorong Waktu
        </h2>
        <p class="reveal mt-5 text-[#FFFCF5]/80 max-w-2xl mx-auto leading-relaxed" style="transition-delay:.16s">
            Tiket masuk mulai Rp5.000 — sudah termasuk akses jalur heritage, gang mural, dan saluran air kuno.
            Datang pagi untuk cahaya terbaik, atau sore hari untuk lampion yang menyala.
        </p>
        <div class="reveal mt-9 flex flex-col sm:flex-row justify-center gap-4" style="transition-delay:.24s">
            <a href="{{ route('pemesanan.tiket') }}"
               class="btn-gold inline-flex items-center justify-center gap-2.5 font-semibold text-sm sm:text-base px-9 py-4 rounded-full">
                <i class="fas fa-ticket"></i> Beli Tiket
            </a>
            <a href="{{ route('artikel') }}"
               class="btn-outline inline-flex items-center justify-center gap-2.5 font-semibold text-sm sm:text-base px-9 py-4 rounded-full">
                <i class="fas fa-newspaper"></i> Blog &amp; Artikel
            </a>
        </div>
    </div>
</section>

@endsection

{{-- ============================================================
     PAGE SCRIPTS — scroll reveal (Intersection Observer),
     animated counters, subtle hero parallax
     ============================================================ --}}
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {

        /* ---------- Fade-in-up scroll animations ---------- */
        var revealEls = document.querySelectorAll('.reveal');

        if ('IntersectionObserver' in window) {
            var revealObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

            revealEls.forEach(function (el) { revealObserver.observe(el); });
        } else {
            /* Fallback: show everything at once */
            revealEls.forEach(function (el) { el.classList.add('is-visible'); });
        }

        /* ---------- Animated number counters ---------- */
        var counters = document.querySelectorAll('.counter');

        var runCounter = function (el) {
            var target = parseInt(el.getAttribute('data-count'), 10) || 0;
            var duration = 1400;
            var start = null;
            var step = function (timestamp) {
                if (!start) start = timestamp;
                var progress = Math.min((timestamp - start) / duration, 1);
                /* ease-out cubic */
                var eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.round(eased * target);
                if (progress < 1) window.requestAnimationFrame(step);
            };
            window.requestAnimationFrame(step);
        };

        if ('IntersectionObserver' in window && counters.length) {
            var counterObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        runCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.6 });
            counters.forEach(function (el) { counterObserver.observe(el); });
        } else {
            counters.forEach(function (el) {
                el.textContent = el.getAttribute('data-count') || 0;
            });
        }

        /* ---------- Subtle parallax on hero background ---------- */
        var heroBg = document.querySelector('#beranda .ken-burns');
        if (heroBg && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            var ticking = false;
            window.addEventListener('scroll', function () {
                if (!ticking) {
                    window.requestAnimationFrame(function () {
                        var offset = Math.min(window.scrollY, 600);
                        heroBg.style.backgroundPosition = 'center calc(50% + ' + (offset * 0.12) + 'px)';
                        ticking = false;
                    });
                    ticking = true;
                }
            }, { passive: true });
        }
    });
</script>
@endsection
