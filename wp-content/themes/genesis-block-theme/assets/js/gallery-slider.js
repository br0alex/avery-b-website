class GallerySlider {
    constructor(container) {
        this.container = container;
        this.slides = container.querySelectorAll('.gallery-slide');
        this.dots = container.querySelectorAll('.slider-dot');
        this.currentSlide = 0;
        this.totalSlides = this.slides.length;
        this.interval = null;
        this.slideDuration = 5000; // 5 seconds
        
        this.init();
    }
    
    init() {
        if (this.totalSlides === 0) return;
        
        // Show first slide
        this.showSlide(0);
        
        // Start auto-advance
        this.startAutoAdvance();
        
        // Add click handlers to dots
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                this.goToSlide(index);
            });
        });
        
        // Pause on hover
        this.container.addEventListener('mouseenter', () => {
            this.pauseAutoAdvance();
        });
        
        this.container.addEventListener('mouseleave', () => {
            this.startAutoAdvance();
        });
    }
    
    showSlide(index) {
        // Hide all slides
        this.slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Remove active class from all dots
        this.dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Show current slide
        this.slides[index].classList.add('active');
        this.dots[index].classList.add('active');
        
        this.currentSlide = index;
    }
    
    nextSlide() {
        const nextIndex = (this.currentSlide + 1) % this.totalSlides;
        this.showSlide(nextIndex);
    }
    
    goToSlide(index) {
        this.showSlide(index);
        this.restartAutoAdvance();
    }
    
    startAutoAdvance() {
        this.interval = setInterval(() => {
            this.nextSlide();
        }, this.slideDuration);
    }
    
    pauseAutoAdvance() {
        if (this.interval) {
            clearInterval(this.interval);
            this.interval = null;
        }
    }
    
    restartAutoAdvance() {
        this.pauseAutoAdvance();
        this.startAutoAdvance();
    }
}

// Initialize slider when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    const sliderContainers = document.querySelectorAll('.gallery-slider');
    sliderContainers.forEach(container => {
        new GallerySlider(container);
    });
});
