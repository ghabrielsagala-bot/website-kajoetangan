<footer class="bg-amber-900 text-white mt-12">
  <div class="max-w-7xl mx-auto px-4 py-8 md:px-6">
    <!-- Footer Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
      
      <!-- About Section -->
      <div>
        <h3 class="font-display text-lg md:text-xl font-bold mb-4">Kampoeng Kadjoetangan</h3>
        <p class="text-amber-100 text-sm leading-relaxed mb-4">
          Preserving the cultural heritage and culinary traditions of Malang through authentic experiences.
        </p>
        <div class="flex gap-4">
          <a href="#" class="hover:text-amber-200 transition-colors duration-200" title="Facebook">
            <i class="fab fa-facebook-f text-lg"></i>
          </a>
          <a href="#" class="hover:text-amber-200 transition-colors duration-200" title="Instagram">
            <i class="fab fa-instagram text-lg"></i>
          </a>
          <a href="#" class="hover:text-amber-200 transition-colors duration-200" title="Twitter">
            <i class="fab fa-twitter text-lg"></i>
          </a>
          <a href="#" class="hover:text-amber-200 transition-colors duration-200" title="TikTok">
            <i class="fab fa-tiktok text-lg"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="font-body font-semibold text-base md:text-lg mb-4">Quick Links</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="{{ route('user.beranda.index') }}" class="text-amber-100 hover:text-amber-200 transition-colors duration-200">Beranda</a></li>
          <li><a href="{{ route('kuliner') }}" class="text-amber-100 hover:text-amber-200 transition-colors duration-200">Kuliner</a></li>
          <li><a href="{{ route('spotfoto') }}" class="text-amber-100 hover:text-amber-200 transition-colors duration-200">Spot Foto</a></li>
          <li><a href="{{ route('event') }}" class="text-amber-100 hover:text-amber-200 transition-colors duration-200">Event</a></li>
          <li><a href="{{ route('award') }}" class="text-amber-100 hover:text-amber-200 transition-colors duration-200">Penghargaan</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h4 class="font-body font-semibold text-base md:text-lg mb-4">Hubungi Kami</h4>
        <ul class="space-y-3 text-sm text-amber-100">
          <li class="flex items-start gap-3">
            <i class="fas fa-map-marker-alt text-amber-300 mt-1 flex-shrink-0"></i>
            <span>Jl. Kajoetangan, Malang, Indonesia</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-phone text-amber-300 mt-1 flex-shrink-0"></i>
            <span>(0341) 123-4567</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fas fa-envelope text-amber-300 mt-1 flex-shrink-0"></i>
            <span>info@kadjoetangan.id</span>
          </li>
        </ul>
      </div>

    </div>

    <!-- Divider -->
    <div class="border-t border-amber-700 pt-6">
      <!-- Copyright -->
      <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-amber-100">
        <p>&copy; {{ date('Y') }} Kampoeng Kadjoetangan Heritage Malang. All rights reserved.</p>
        <div class="flex gap-6">
          <a href="#" class="hover:text-amber-200 transition-colors duration-200">Privacy Policy</a>
          <a href="#" class="hover:text-amber-200 transition-colors duration-200">Terms of Service</a>
        </div>
      </div>
    </div>
  </div>
</footer>
