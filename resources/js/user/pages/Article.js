/**
 * SpotFoto Page - Carousel & Animation Module
 */

document.addEventListener('DOMContentLoaded', function() {
  // ==========================================
  // SCROLL ANIMATIONS (Slide-up)
  // ==========================================
  
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-slide-up');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe all sections with data-aos attribute
  document.querySelectorAll('[data-aos="slide-up"]').forEach(el => {
    observer.observe(el);
  });

  // ==========================================
  // CAROUSEL LOGIC
  // ==========================================

  const carousel = {
    track: document.getElementById('carouselTrack'),
    prevBtn: document.getElementById('prevBtn'),
    nextBtn: document.getElementById('nextBtn'),
    totalCards: document.querySelectorAll('.carousel-card').length,
    currentSlide: 0,
    cardsPerView: 1,

    get maxSlides() {
      return Math.max(0, this.totalCards - this.cardsPerView);
    },

    init() {
      if (this.totalCards === 0) return;
      this.updateCardsPerView();
      this.updateCarousel();
      window.addEventListener('resize', () => this.handleResize());
    },

    updateCardsPerView() {
      if (window.innerWidth >= 768) {
        this.cardsPerView = 3;
      } else {
        this.cardsPerView = 1;
      }
    },

    handleResize() {
      const oldCardsPerView = this.cardsPerView;
      this.updateCardsPerView();
      if (oldCardsPerView !== this.cardsPerView) {
        this.currentSlide = 0;
        this.updateCarousel();
      }
    },

    updateCarousel() {
      if (!this.track) return;

      const offset = -this.currentSlide * (100 / this.cardsPerView);
      this.track.style.transform = `translateX(${offset}%)`;

      this.updateDots();
      this.updateButtonStates();
    },

    updateDots() {
      document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
        const isActive = index === this.currentSlide;
        dot.classList.toggle('active', isActive);
        dot.classList.toggle('bg-amber-900', isActive);
        dot.classList.toggle('bg-gray-300', !isActive);
      });
    },

    updateButtonStates() {
      if (!this.prevBtn || !this.nextBtn) return;

      this.prevBtn.style.opacity = this.currentSlide === 0 ? '0.5' : '1';
      this.prevBtn.style.cursor = this.currentSlide === 0 ? 'not-allowed' : 'pointer';

      this.nextBtn.style.opacity = this.currentSlide >= this.maxSlides ? '0.5' : '1';
      this.nextBtn.style.cursor = this.currentSlide >= this.maxSlides ? 'not-allowed' : 'pointer';
    },

    move(direction) {
      const newSlide = this.currentSlide + direction;
      if (newSlide >= 0 && newSlide <= this.maxSlides) {
        this.currentSlide = newSlide;
        this.updateCarousel();
      }
    },

    goToSlide(index) {
      if (index >= 0 && index <= this.maxSlides) {
        this.currentSlide = index;
        this.updateCarousel();
      }
    }
  };

  carousel.init();

  // Global functions for onclick handlers
  window.moveCarousel = (direction) => carousel.move(direction);
  window.goToSlide = (index) => carousel.goToSlide(index);
});