/**
 * Commerce Lab - Image Optimization and Lazy Loading
 * Improves website performance by lazy loading images and optimizing loading process
 */

(function() {
    'use strict';
    
    // Initialize as soon as DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initImageOptimizer();
    });
    
    /**
     * Initialize image optimization and lazy loading
     */
    function initImageOptimizer() {
        // Use Intersection Observer if available
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(onIntersection, {
                rootMargin: '50px 0px',
                threshold: 0.01
            });
            
            // Find all images with data-src attribute
            const lazyImages = document.querySelectorAll('img[data-src]');
            lazyImages.forEach(img => {
                imageObserver.observe(img);
            });
            
            // Find all background elements with data-background attribute
            const lazyBackgrounds = document.querySelectorAll('[data-background]');
            lazyBackgrounds.forEach(element => {
                imageObserver.observe(element);
            });
        } else {
            // Fallback for browsers that don't support Intersection Observer
            loadImagesImmediately(document.querySelectorAll('img[data-src]'));
            loadBackgroundsImmediately(document.querySelectorAll('[data-background]'));
        }
    }
    
    /**
     * Handle intersection observer callback
     * @param {array} entries - Intersection observer entries
     * @param {object} observer - Intersection observer instance
     */
    function onIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                
                // Check if it's an image
                if (element.hasAttribute('data-src')) {
                    element.src = element.getAttribute('data-src');
                    element.removeAttribute('data-src');
                    
                    // Add loaded class
                    element.classList.add('loaded');
                }
                
                // Check if it's a background element
                if (element.hasAttribute('data-background')) {
                    element.style.backgroundImage = `url('${element.getAttribute('data-background')}')`;
                    element.removeAttribute('data-background');
                    
                    // Add loaded class
                    element.classList.add('loaded-bg');
                }
                
                // Stop observing the element
                observer.unobserve(element);
            }
        });
    }
    
    /**
     * Load all images immediately (fallback)
     * @param {NodeList} images - List of images to load
     */
    function loadImagesImmediately(images) {
        Array.from(images).forEach(image => {
            image.src = image.getAttribute('data-src');
            image.removeAttribute('data-src');
            image.classList.add('loaded');
        });
    }
    
    /**
     * Load all background images immediately (fallback)
     * @param {NodeList} elements - List of elements with background images
     */
    function loadBackgroundsImmediately(elements) {
        Array.from(elements).forEach(element => {
            element.style.backgroundImage = `url('${element.getAttribute('data-background')}')`;
            element.removeAttribute('data-background');
            element.classList.add('loaded-bg');
        });
    }
})(); 