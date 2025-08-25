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
    
    // Initialize infinite banner scroll
    initializeInfiniteBanner();
    
    // Handle window resize for banner
    window.addEventListener('resize', debounce(initializeInfiniteBanner, 250));
});

// Debounce function to limit resize events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Function to create infinite banner scroll
function initializeInfiniteBanner() {
    const bannerContainer = document.querySelector('.banner-text-container');
    if (!bannerContainer) return;
    
    // Get the first banner text span
    const firstSpan = bannerContainer.querySelector('.banner-text');
    if (!firstSpan) return;
    
    // Get the text content
    const bannerText = firstSpan.textContent;
    
    // Clear the container
    bannerContainer.innerHTML = '';
    
    // Create enough spans to fill the screen width plus extra for seamless scrolling
    const screenWidth = window.innerWidth;
    const spanWidth = 300; // Approximate width of one span
    const numSpans = Math.ceil((screenWidth / spanWidth) * 3); // 3x screen width for seamless loop
    
    for (let i = 0; i < numSpans; i++) {
        const span = document.createElement('span');
        span.className = 'banner-text';
        span.textContent = bannerText;
        bannerContainer.appendChild(span);
    }
}
