// Lightbox functionality for project gallery
class Lightbox {
  constructor() {
    this.images = [];
    this.currentIndex = 0;
    this.init();
  }

  init() {
    // Create lightbox HTML elements
    this.createLightbox();
    this.setupEventListeners();
  }

  createLightbox() {
    const lightboxHTML = `
      <div class="lightbox-overlay" id="lightbox-overlay">
        <div class="lightbox-container">
          <button class="lightbox-close" id="lightbox-close">&times;</button>
          <div class="lightbox-content">
            <img class="lightbox-image" id="lightbox-image" src="" alt="">
            <div class="lightbox-caption" id="lightbox-caption"></div>
          </div>
          <button class="lightbox-nav lightbox-prev" id="lightbox-prev">&#10094;</button>
          <button class="lightbox-nav lightbox-next" id="lightbox-next">&#10095;</button>
          <div class="lightbox-counter" id="lightbox-counter"></div>
        </div>
      </div>
    `;

    document.body.insertAdjacentHTML('beforeend', lightboxHTML);
  }

  setupEventListeners() {
    // Collect all clickable project images
    const projectShots = document.querySelectorAll('.project-shot');
    
    projectShots.forEach((shot, index) => {
      const img = shot.querySelector('img');
      const caption = shot.querySelector('figcaption');
      
      shot.addEventListener('click', (e) => {
        e.preventDefault();
        
        // Collect all images in this gallery block
        const articleSection = shot.closest('article');
        const galleryImages = articleSection.querySelectorAll('.project-shot');
        
        this.images = Array.from(galleryImages).map(s => ({
          src: s.querySelector('img').src,
          alt: s.querySelector('img').alt,
          caption: s.querySelector('figcaption')?.textContent || ''
        }));
        
        // Find current image index
        this.currentIndex = Array.from(galleryImages).indexOf(shot);
        
        this.openLightbox();
      });
    });

    // Close button
    document.getElementById('lightbox-close').addEventListener('click', () => this.closeLightbox());

    // Navigation buttons
    document.getElementById('lightbox-prev').addEventListener('click', () => this.previousImage());
    document.getElementById('lightbox-next').addEventListener('click', () => this.nextImage());

    // Overlay click to close
    document.getElementById('lightbox-overlay').addEventListener('click', (e) => {
      if (e.target === document.getElementById('lightbox-overlay')) {
        this.closeLightbox();
      }
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (!document.getElementById('lightbox-overlay').classList.contains('active')) return;
      
      if (e.key === 'ArrowLeft') this.previousImage();
      if (e.key === 'ArrowRight') this.nextImage();
      if (e.key === 'Escape') this.closeLightbox();
    });
  }

  openLightbox() {
    this.showImage();
    document.getElementById('lightbox-overlay').classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  closeLightbox() {
    document.getElementById('lightbox-overlay').classList.remove('active');
    document.body.style.overflow = '';
  }

  showImage() {
    if (this.images.length === 0) return;

    const image = this.images[this.currentIndex];
    document.getElementById('lightbox-image').src = image.src;
    document.getElementById('lightbox-image').alt = image.alt;
    document.getElementById('lightbox-caption').textContent = image.caption;
    document.getElementById('lightbox-counter').textContent = `${this.currentIndex + 1} / ${this.images.length}`;

    // Update navigation buttons visibility
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');
    
    prevBtn.style.display = this.images.length > 1 ? 'flex' : 'none';
    nextBtn.style.display = this.images.length > 1 ? 'flex' : 'none';
  }

  nextImage() {
    this.currentIndex = (this.currentIndex + 1) % this.images.length;
    this.showImage();
  }

  previousImage() {
    this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
    this.showImage();
  }
}

document.addEventListener('DOMContentLoaded', () => {
  new Lightbox();
});
