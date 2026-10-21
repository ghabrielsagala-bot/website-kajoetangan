{{-- ============================================================
     USER NAVBAR — Modern Vintage
     - Landing page (beranda): fixed, transparent → solid on scroll
     - Other pages: solid dark charcoal, sticky
     ============================================================ --}}
@php
    $isLanding = request()->routeIs('beranda', 'user.beranda.index');
    $isFeedbackPage = request()->routeIs('feedback.form');
    $isAboutPage = request()->routeIs('about-us');
    $isTicketPage = request()->routeIs('pemesanan.tiket');
@endphp

<style>
    /* Navbar custom styles (vintage palette) */
    #main-navbar {
        transition: background-color .45s ease, box-shadow .45s ease, border-color .45s ease, backdrop-filter .45s ease;
        border-bottom: 1px solid transparent;
    }
    /* Landing mode when user has scrolled past hero */
    #main-navbar.is-landing.is-scrolled {
        background-color: rgba(27, 24, 21, .94); /* charcoal */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-bottom-color: rgba(176, 141, 87, .25); /* gold/15 */
        box-shadow: 0 10px 30px -12px rgba(0, 0, 0, .55);
    }
    /* Gold glow on the primary CTA */
    .nav-cta {
        box-shadow: 0 0 0 0 rgba(176, 141, 87, 0);
        transition: background-color .3s ease, box-shadow .35s ease, transform .35s cubic-bezier(.16, 1, .3, 1);
    }
    .nav-cta:hover {
        background-color: #C9A468;
        box-shadow: 0 8px 26px -6px rgba(176, 141, 87, .65);
        transform: translateY(-2px);
    }
    .nav-cta:active { transform: translateY(0) scale(.97); }
    /* Dropdown animation */
    .nav-dropdown-menu {
        transform: translateY(8px);
        transition: opacity .28s ease, transform .28s ease, visibility .28s ease;
    }
    .nav-dropdown:hover .nav-dropdown-menu,
    .nav-dropdown:focus-within .nav-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .nav-dropdown:hover .nav-dropdown-caret { transform: rotate(180deg); }
    .nav-dropdown-caret { transition: transform .3s ease; }
    /* Mobile panel slide */
    #mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height .45s ease;
    }
    #mobile-menu.is-open { max-height: 560px; }
    #mobile-menu .fa-chevron-down { transition: transform .3s ease; }
    #mobile-menu .is-open > .mobile-toggle .fa-chevron-down { transform: rotate(180deg); }
</style>

<nav id="main-navbar"
     class="{{ $isLanding
            ? 'is-landing fixed inset-x-0 top-0 z-50 bg-transparent'
            : 'sticky top-0 z-50 bg-[#1B1815] border-b border-[#B08D57]/15' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">

            <!-- ===== Logo / Brand ===== -->
            <a href="{{ route('user.beranda.index') }}" class="group flex items-center gap-3 shrink-0">
                <span class="grid place-items-center w-10 h-10 md:w-11 md:h-11 rounded-full border border-[#B08D57]/70 text-[#D4B483] font-display text-sm md:text-base font-bold group-hover:bg-[#B08D57] group-hover:text-[#1B1815] transition-all duration-300">
                    KH
                </span>
                <span class="leading-tight">
                    <span class="block font-display text-[15px] md:text-lg font-bold text-[#FFFCF5] tracking-wide">
                        Kampoeng Heritage
                    </span>
                    <span class="block text-[10px] md:text-[11px] uppercase tracking-[0.28em] text-[#D4B483]">
                        Kajoetangan · Malang
                    </span>
                </span>
            </a>

            <!-- ===== Navigation Menu — Desktop ===== -->
            <div class="hidden md:flex md:items-center md:gap-6 lg:gap-8">
                <a href="{{ route('user.beranda.index') }}"
                   class="nav-link text-[#FFFCF5]/85 hover:text-[#D4B483] text-sm lg:text-[15px] transition-colors duration-300">Beranda</a>

                <!-- Dropdown: Jelajahi -->
                <div class="nav-dropdown relative">
                    <button class="flex items-center gap-2 text-[#FFFCF5]/85 hover:text-[#D4B483] text-sm lg:text-[15px] transition-colors duration-300">
                        Jelajahi
                        <i class="fas fa-chevron-down nav-dropdown-caret text-[10px] opacity-70"></i>
                    </button>
                    <div class="nav-dropdown-menu absolute left-0 mt-3 w-60 rounded-xl border border-[#B08D57]/25 bg-[#1B1815]/97 backdrop-blur-md py-2 shadow-2xl invisible opacity-0">
                        <a href="{{ route('kuliner') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#FFFCF5]/85 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">
                            <i class="fas fa-utensils w-4 text-center text-[#B08D57]"></i> Kuliner
                        </a>
                        <a href="{{ route('spotfoto') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#FFFCF5]/85 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">
                            <i class="fas fa-camera w-4 text-center text-[#B08D57]"></i> Spot Foto
                        </a>
                        <a href="{{ route('event') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#FFFCF5]/85 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">
                            <i class="fas fa-calendar-alt w-4 text-center text-[#B08D57]"></i> Event
                        </a>
                        <a href="{{ route('award') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#FFFCF5]/85 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">
                            <i class="fas fa-trophy w-4 text-center text-[#B08D57]"></i> Penghargaan
                        </a>
                        <div class="border-t border-[#B08D57]/20 my-1"></div>
                        <a href="{{ route('artikel') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#FFFCF5]/85 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">
                            <i class="fas fa-newspaper w-4 text-center text-[#B08D57]"></i> Blog &amp; Artikel
                        </a>
                    </div>
                </div>

                <a href="{{ route('feedback.form') }}" @if($isFeedbackPage) aria-current="page" @endif
                   class="nav-link text-sm lg:text-[15px] transition-colors duration-300 hover:text-[#D4B483] {{ $isFeedbackPage ? 'border-b-2 border-[#B08D57] pb-1 text-[#D4B483]' : 'text-[#FFFCF5]/85' }}">Beri Masukan</a>
                <a href="{{ route('about-us') }}" @if($isAboutPage) aria-current="page" @endif
                   class="nav-link text-sm lg:text-[15px] transition-colors duration-300 hover:text-[#D4B483] {{ $isAboutPage ? 'border-b-2 border-[#B08D57] pb-1 text-[#D4B483]' : 'text-[#FFFCF5]/85' }}">Tentang Kami</a>

                <!-- CTA: Beli Tiket -->
                <a href="{{ route('pemesanan.tiket') }}"
                   @if($isTicketPage) aria-current="page" @endif
                   class="nav-cta inline-flex items-center gap-2 rounded-full bg-[#B08D57] px-5 py-2.5 text-sm font-semibold text-[#1B1815] hover:bg-[#C9A468] {{ $isTicketPage ? 'ring-2 ring-[#FFFCF5]/70 ring-offset-2 ring-offset-[#1B1815]' : '' }}">
                    <i class="fas fa-ticket-alt"></i>
                    Beli Tiket
                </a>
            </div>

            <!-- ===== Hamburger — Mobile ===== -->
            <button id="mobile-menu-btn" aria-label="Buka menu navigasi"
                    class="md:hidden inline-flex items-center justify-center w-11 h-11 rounded-full border border-[#B08D57]/50 text-[#FFFCF5] hover:text-[#D4B483] hover:border-[#D4B483] transition-colors duration-300">
                <i class="fas fa-bars text-lg"></i>
            </button>
        </div>
    </div>

    <!-- ===== Mobile Menu ===== -->
    <div id="mobile-menu" class="md:hidden bg-[#1B1815]/97 backdrop-blur-md border-t border-[#B08D57]/20">
        <div class="px-4 py-4 space-y-1 max-h-[70vh] overflow-y-auto">
            <a href="{{ route('user.beranda.index') }}" class="block px-3 py-2.5 rounded-lg text-sm text-[#FFFCF5]/90 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">Beranda</a>

            <!-- Accordion: Jelajahi -->
            <div id="mobile-jelajahi">
                <button id="mobile-jelajahi-btn" class="mobile-toggle w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-sm text-[#FFFCF5]/90 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">
                    <span><i class="fas fa-compass w-4 text-center text-[#B08D57] mr-2"></i>Jelajahi</span>
                    <i class="fas fa-chevron-down text-[10px] text-[#B08D57]"></i>
                </button>
                <div class="hidden pl-4 mt-1 space-y-1 border-l border-[#B08D57]/30 ml-3">
                    <a href="{{ route('kuliner') }}" class="block px-3 py-2 rounded-lg text-sm text-[#FFFCF5]/80 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">Kuliner</a>
                    <a href="{{ route('spotfoto') }}" class="block px-3 py-2 rounded-lg text-sm text-[#FFFCF5]/80 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">Spot Foto</a>
                    <a href="{{ route('event') }}" class="block px-3 py-2 rounded-lg text-sm text-[#FFFCF5]/80 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">Event</a>
                    <a href="{{ route('award') }}" class="block px-3 py-2 rounded-lg text-sm text-[#FFFCF5]/80 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">Penghargaan</a>
                    <a href="{{ route('artikel') }}" class="block px-3 py-2 rounded-lg text-sm text-[#FFFCF5]/80 hover:bg-[#B08D57]/15 hover:text-[#D4B483] transition-colors">Blog &amp; Artikel</a>
                </div>
            </div>

            <a href="{{ route('feedback.form') }}" @if($isFeedbackPage) aria-current="page" @endif class="block rounded-lg px-3 py-2.5 text-sm transition-colors hover:bg-[#B08D57]/15 hover:text-[#D4B483] {{ $isFeedbackPage ? 'bg-[#B08D57]/15 text-[#D4B483]' : 'text-[#FFFCF5]/90' }}">Beri Masukan</a>
            <a href="{{ route('about-us') }}" @if($isAboutPage) aria-current="page" @endif class="block rounded-lg px-3 py-2.5 text-sm transition-colors hover:bg-[#B08D57]/15 hover:text-[#D4B483] {{ $isAboutPage ? 'bg-[#B08D57]/15 text-[#D4B483]' : 'text-[#FFFCF5]/90' }}">Tentang Kami</a>

            <a href="{{ route('pemesanan.tiket') }}" @if($isTicketPage) aria-current="page" @endif class="mt-2 flex items-center justify-center gap-2 rounded-full bg-[#B08D57] px-5 py-3 text-sm font-semibold text-[#1B1815] transition-colors duration-300 hover:bg-[#C9A468] {{ $isTicketPage ? 'ring-2 ring-[#FFFCF5]/70 ring-offset-2 ring-offset-[#1B1815]' : '' }}">
                <i class="fas fa-ticket-alt"></i> Beli Tiket
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var navbar   = document.getElementById('main-navbar');
        var menuBtn  = document.getElementById('mobile-menu-btn');
        var menu     = document.getElementById('mobile-menu');
        var jBtn     = document.getElementById('mobile-jelajahi-btn');
        var jWrap    = document.getElementById('mobile-jelajahi');

        /* --- Transparent → solid navbar on scroll (landing page only) --- */
        if (navbar && navbar.classList.contains('is-landing')) {
            var onScroll = function () {
                navbar.classList.toggle('is-scrolled', window.scrollY > 40);
            };
            onScroll(); // run once in case page is loaded scrolled down
            window.addEventListener('scroll', onScroll, { passive: true });
        }

        /* --- Mobile menu toggle --- */
        if (menuBtn && menu) {
            menuBtn.addEventListener('click', function () {
                var open = menu.classList.toggle('is-open');
                var icon = menuBtn.querySelector('i');
                if (icon) {
                    icon.classList.toggle('fa-bars', !open);
                    icon.classList.toggle('fa-xmark', open);
                }
            });
        }

        /* --- Mobile "Jelajahi" accordion --- */
        if (jBtn && jWrap) {
            jBtn.addEventListener('click', function () {
                var panel = jBtn.nextElementSibling;
                if (panel) panel.classList.toggle('hidden');
                jBtn.classList.toggle('is-open');
            });
        }
    });
</script>
