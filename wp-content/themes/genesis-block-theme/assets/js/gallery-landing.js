/**
 * Gallery Landing Page JavaScript
 * Handles gallery filtering and interactive functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Gallery filtering functionality
    const filterButtons = document.querySelectorAll('.nav-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    // Add click event listeners to filter buttons
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter gallery items
            filterGallery(category);
        });
    });

    // Filter gallery items based on category
    function filterGallery(category) {
        galleryItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            
            if (category === 'all' || itemCategory === category) {
                item.style.display = 'block';
                // Add fade-in animation
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    item.style.transition = 'all 0.4s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, 50);
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Add hover effects for gallery items
    galleryItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Lazy loading for images (optional performance enhancement)
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        // Observe all gallery images
        document.querySelectorAll('.gallery-image img').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Smooth scrolling for navigation (if needed)
    function smoothScrollTo(element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    // Add click event to gallery items for potential lightbox or detail view
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            // You can add lightbox functionality here
            console.log('Gallery item clicked:', this);
            
            // Example: Open in new tab or show modal
            // const imageSrc = this.querySelector('img').src;
            // window.open(imageSrc, '_blank');
        });
    });
});
