<!-- ============================================================
     FOOTER — Modern Vintage (charcoal #1B1815 · gold #B08D57 · cream #FFFCF5)
     Contact data sourced from the official Jadesta (Kemenparekraf)
     profile of Desa Wisata Kampoeng Heritage Kajoetangan.
     ============================================================ -->
<footer class="bg-[#1B1815] text-[#FFFCF5] relative overflow-hidden">
    <!-- Top gold hairline -->
    <div class="h-1 w-full bg-gradient-to-r from-[#4A3627] via-[#B08D57] to-[#4A3627]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">

            <!-- Brand / About -->
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-5">
                    <span class="grid place-items-center w-11 h-11 rounded-full border border-[#B08D57]/70 text-[#D4B483] font-display text-sm font-bold">KH</span>
                    <div class="leading-tight">
                        <p class="font-display text-lg font-bold">Kampoeng Heritage</p>
                        <p class="text-[10px] uppercase tracking-[0.28em] text-[#D4B483]">Kajoetangan · Malang</p>
                    </div>
                </div>
                <p class="text-[#FFFCF5]/70 text-sm leading-relaxed max-w-md">
                    Wisata sejarah &amp; budaya di jantung Kota Malang. Menjaga warisan arsitektur kolonial,
                    menghidupkan kuliner tempo dulu, dan memberdayakan ekonomi kreatif warga kampung.
                </p>

                <!-- Official website -->
                <a href="https://www.heritage-kajoetangan.com" target="_blank" rel="noopener"
                   class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#D4B483] hover:gap-3 transition-all">
                    <i class="fas fa-globe text-xs"></i> www.heritage-kajoetangan.com
                </a>

                <!-- Social media -->
                <div class="flex gap-3 mt-6">
                    <a href="https://www.instagram.com/kampoengkajoetangan/" target="_blank" rel="noopener" aria-label="Instagram"
                       class="grid place-items-center w-10 h-10 rounded-full border border-[#B08D57]/40 text-[#FFFCF5]/80 hover:bg-[#B08D57] hover:text-[#1B1815] hover:border-[#B08D57] transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@kampoengkajoetangan" target="_blank" rel="noopener" aria-label="TikTok"
                       class="grid place-items-center w-10 h-10 rounded-full border border-[#B08D57]/40 text-[#FFFCF5]/80 hover:bg-[#B08D57] hover:text-[#1B1815] hover:border-[#B08D57] transition-all duration-300">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://www.facebook.com/kampoengkajoetangan" target="_blank" rel="noopener" aria-label="Facebook"
                       class="grid place-items-center w-10 h-10 rounded-full border border-[#B08D57]/40 text-[#FFFCF5]/80 hover:bg-[#B08D57] hover:text-[#1B1815] hover:border-[#B08D57] transition-all duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.youtube.com/results?search_query=Kampoeng+Heritage+Kajoetangan" target="_blank" rel="noopener" aria-label="YouTube"
                       class="grid place-items-center w-10 h-10 rounded-full border border-[#B08D57]/40 text-[#FFFCF5]/80 hover:bg-[#B08D57] hover:text-[#1B1815] hover:border-[#B08D57] transition-all duration-300">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Jelajahi -->
            <div>
                <h4 class="font-display text-base font-bold mb-5 relative pb-3 after:absolute after:left-0 after:bottom-0 after:w-10 after:h-[2px] after:bg-[#B08D57]">
                    Jelajahi
                </h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('user.beranda.index') }}" class="text-[#FFFCF5]/70 hover:text-[#D4B483] hover:pl-1 transition-all duration-300">Beranda</a></li>
                    <li><a href="{{ route('kuliner') }}" class="text-[#FFFCF5]/70 hover:text-[#D4B483] hover:pl-1 transition-all duration-300">Kuliner</a></li>
                    <li><a href="{{ route('spotfoto') }}" class="text-[#FFFCF5]/70 hover:text-[#D4B483] hover:pl-1 transition-all duration-300">Spot Foto</a></li>
                    <li><a href="{{ route('event') }}" class="text-[#FFFCF5]/70 hover:text-[#D4B483] hover:pl-1 transition-all duration-300">Event</a></li>
                    <li><a href="{{ route('award') }}" class="text-[#FFFCF5]/70 hover:text-[#D4B483] hover:pl-1 transition-all duration-300">Penghargaan</a></li>
                    <li><a href="{{ route('artikel') }}" class="text-[#FFFCF5]/70 hover:text-[#D4B483] hover:pl-1 transition-all duration-300">Blog &amp; Artikel</a></li>
                </ul>
            </div>

            <!-- Hubungi Kami (real data) -->
            <div>
                <h4 class="font-display text-base font-bold mb-5 relative pb-3 after:absolute after:left-0 after:bottom-0 after:w-10 after:h-[2px] after:bg-[#B08D57]">
                    Hubungi Kami
                </h4>
                <ul class="space-y-4 text-sm text-[#FFFCF5]/70">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt text-[#B08D57] mt-0.5 flex-shrink-0"></i>
                        <span>Jl. Jend. Basuki Rachmad Gg. 4, Kauman,<br>Kec. Klojen, Kota Malang, Jawa Timur 65119</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-phone text-[#B08D57] flex-shrink-0"></i>
                        <a href="tel:+6281230222880" class="hover:text-[#D4B483] transition-colors">0812-3022-2880</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-envelope text-[#B08D57] flex-shrink-0"></i>
                        <a href="mailto:heritagekajoetangan@gmail.com" class="hover:text-[#D4B483] transition-colors break-all">heritagekajoetangan@gmail.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-clock text-[#B08D57] flex-shrink-0"></i>
                        <span>Setiap hari, 07.00 – 22.00 WIB</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="mt-12 pt-6 border-t border-[#B08D57]/20 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-[#FFFCF5]/55">
            <p>&copy; {{ date('Y') }} Kampoeng Heritage Kajoetangan · Pokdarwis Kota Malang. Hak cipta dilindungi.</p>
            <p>
                Foto arsip: <a href="https://commons.wikimedia.org/" target="_blank" rel="noopener" class="text-[#D4B483]/80 hover:text-[#D4B483] transition-colors">Wikimedia Commons / Tropenmuseum</a>
            </p>
        </div>
    </div>
</footer>
