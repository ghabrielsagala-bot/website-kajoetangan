<nav class="bg-amber-900 text-white sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 py-4 md:px-6">
    <!-- Container untuk Desktop dan Mobile -->
    <div class="flex items-center justify-between">
      
      <!-- Logo/Brand -->
      <div class="flex-shrink-0">
        <a href="{{ route('user.beranda.index') }}" class="hover:text-amber-200 transition-colors">
          <h1 class="font-display text-lg md:text-2xl font-bold leading-tight">
            Kampoeng Kadjoetangan<br>
            <span class="font-display text-xs md:text-base">Heritage</span>
          </h1>
        </a>
      </div>

      <!-- Navigation Menu - Desktop (Hidden on Mobile) -->
      <div class="hidden md:flex md:items-center md:space-x-6 lg:space-x-8">
        <a href="{{ route('user.beranda.index') }}" class="font-body hover:text-amber-200 transition-colors duration-200 text-sm lg:text-base">Beranda</a>
        
        <!-- Dropdown Jelajahi - Desktop -->
        <div class="relative group">
          <button class="font-body flex items-center hover:text-amber-200 transition-colors duration-200 text-sm lg:text-base">
            Jelajahi
            <i class="fas fa-chevron-down ml-2 text-xs group-hover:rotate-180 transition-transform duration-300"></i>
          </button>
          
          <!-- Dropdown Menu -->
          <div class="absolute left-0 mt-0 w-48 bg-amber-800 rounded-b-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 py-2">
            <a href="{{ route('kuliner') }}" class="font-body px-4 py-3 hover:bg-amber-700 hover:text-amber-100 transition-colors duration-200 text-sm flex items-center">
              <i class="fas fa-utensils mr-3"></i> Kuliner
            </a>
            <a href="{{ route('spotfoto') }}" class="font-body px-4 py-3 hover:bg-amber-700 hover:text-amber-100 transition-colors duration-200 text-sm flex items-center">
              <i class="fas fa-camera mr-3"></i> Spot Foto
            </a>
            <a href="{{ route('event') }}" class="font-body px-4 py-3 hover:bg-amber-700 hover:text-amber-100 transition-colors duration-200 text-sm flex items-center">
              <i class="fas fa-calendar-alt mr-3"></i> Event
            </a>
            <a href="{{ route('award') }}" class="font-body px-4 py-3 hover:bg-amber-700 hover:text-amber-100 transition-colors duration-200 text-sm flex items-center">
              <i class="fas fa-trophy mr-3"></i> Penghargaan
            </a>
            <div class="border-t border-amber-700 my-1"></div>
            <a href="{{ route('artikel') }}" class="font-body px-4 py-3 hover:bg-amber-700 hover:text-amber-100 transition-colors duration-200 text-sm flex items-center">
              <i class="fas fa-newspaper mr-3"></i> Blog & Artikel
            </a>
          </div>
        </div>

        <a href="{{ route('feedback.form') }}" class="font-body hover:text-amber-200 transition-colors duration-200 text-sm lg:text-base">Beri Masukan</a>
        <a href="{{ route('about-us') }}" class="font-body hover:text-amber-200 transition-colors duration-200 text-sm lg:text-base">Tentang Kami</a>
        <a href="{{ route('pemesanan.tiket') }}" class="font-body bg-amber-700 hover:bg-amber-600 px-4 py-2 rounded transition-colors duration-200 text-sm lg:text-base">Beli Tiket</a>
      </div>

      <!-- Hamburger Menu Icon - Mobile Only -->
      <div class="md:hidden">
        <button class="text-white hover:text-amber-200 transition-colors duration-200 p-2" aria-label="Toggle navigation" id="mobile-menu-btn">
          <i class="fas fa-bars text-2xl"></i>
        </button>
      </div>

    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="hidden md:hidden bg-amber-800 max-w-7xl mx-auto px-4 py-3 space-y-1 border-t border-amber-700" id="mobile-menu">
    <a href="{{ route('user.beranda.index') }}" class="font-body block px-3 py-2 rounded hover:bg-amber-700 transition-colors duration-200 text-sm font-medium">Beranda</a>
    
    <!-- Mobile Dropdown Artikel -->
    <div class="block">
      <button class="font-body w-full text-left px-3 py-2 rounded hover:bg-amber-700 transition-colors duration-200 text-sm font-medium flex items-center justify-between" id="mobile-artikel-btn">
        Artikel
        <i class="fas fa-chevron-down text-xs transition-transform duration-300" id="mobile-artikel-icon"></i>
      </button>
      <div class="hidden bg-amber-700 rounded-b-lg mt-1 space-y-1 ml-3 border-l-2 border-amber-600 pl-2" id="mobile-artikel-menu">
        <a href="{{ route('kuliner') }}" class="font-body px-3 py-2 rounded hover:bg-amber-600 transition-colors duration-200 text-sm flex items-center">
          <i class="fas fa-utensils mr-2"></i> Kuliner
        </a>
        <a href="{{ route('spotfoto') }}" class="font-body px-3 py-2 rounded hover:bg-amber-600 transition-colors duration-200 text-sm flex items-center">
          <i class="fas fa-camera mr-2"></i> Spot Foto
        </a>
        <a href="{{ route('event') }}" class="font-body px-3 py-2 rounded hover:bg-amber-600 transition-colors duration-200 text-sm flex items-center">
          <i class="fas fa-info-circle mr-2"></i> Event
        </a>
        <a href="{{ route('award') }}" class="font-body px-3 py-2 rounded hover:bg-amber-600 transition-colors duration-200 text-sm flex items-center">
          <i class="fas fa-tag mr-2"></i> Penghargaan
        </a>
      </div>
    </div>

    <a href="{{ route('feedback.form') }}" class="font-body block px-3 py-2 rounded hover:bg-amber-700 transition-colors duration-200 text-sm font-medium">Beri Masukan</a>
    <a href="{{ route('about-us') }}" class="font-body block px-3 py-2 rounded hover:bg-amber-700 transition-colors duration-200 text-sm font-medium">Tentang Kami</a>
    <a href="{{ route('pemesanan.tiket') }}" class="font-body block px-3 py-2 rounded hover:bg-amber-700 transition-colors duration-200 text-sm font-medium">Beli Tiket</a>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileArtikelBtn = document.getElementById('mobile-artikel-btn');
    const mobileArtikelMenu = document.getElementById('mobile-artikel-menu');
    const mobileArtikelIcon = document.getElementById('mobile-artikel-icon');

    if (mobileMenuBtn) {
      mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        mobileMenuBtn.querySelector('i').classList.toggle('rotate-90');
      });
    }

    if (mobileArtikelBtn) {
      mobileArtikelBtn.addEventListener('click', function(e) {
        e.preventDefault();
        mobileArtikelMenu.classList.toggle('hidden');
        mobileArtikelIcon.classList.toggle('rotate-180');
      });
    }
  });
</script>
