/**
 * Commerce Lab Website Main JavaScript - Optimized Version
 */

// Use DOMContentLoaded for initial loading
document.addEventListener('DOMContentLoaded', function() {
    // Initialize preloader
    initPreloader();
    
    // Defer non-critical initializations
    setTimeout(() => {
        // Initialize fade elements
        initFadeElements();
        
        // Initialize sticky header
        initStickyHeader();
        
        // Initialize active nav on scroll
        initActiveNavOnScroll();
        
        // Initialize smooth scrolling
        initSmoothScrolling();
        
        // Initialize contact form
        initContactForm();
        
        // Initialize contact tabs
        initContactTabs();
        
        // Initialize mobile responsive features
        initMobileResponsive();
        
        // Initialize back-to-top button
        initBackToTopButton();
    }, 100);
    
    // Lazy initialize other features after page is fully loaded
    window.addEventListener('load', function() {
        // Initialize card hover effects
        initCardHoverEffects();
        
        // Initialize Cal.com widget if present
        if (document.querySelector('.cal-embed')) {
            initCalComWidget();
        }
        
        // Initialize image hover effects
        initImageHoverEffects();
        
        // Initialize service popups
        initServicePopups();
        
        // Initialize features tabs
        initFeaturesTabs();
        
        // Initialize count-up animation for stat numbers
        initCountUpAnimation();
        
        // Initialize mobile layouts
        setupMobileLayouts();
    });
    
    // Optimize resize event with debounce
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            updateViewportHeight();
            checkMobileLayout();
        }, 250);
    });
});

/**
 * Updates the viewport height for mobile browsers
 */
function updateViewportHeight() {
    // First we get the viewport height and multiply it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}

/**
 * Combine mobile layout functions for better performance
 */
function setupMobileLayouts() {
    setupMobileHeroLayout();
    setupMobileAboutLayout();
    
    // Initial check
    checkMobileLayout();
}

/**
 * Check for mobile layout adjustments
 */
function checkMobileLayout() {
    const isMobile = window.innerWidth < 768;
    const isPhablet = window.innerWidth < 576;
    
    // Add mobile-specific classes
    document.body.classList.toggle('is-mobile', isMobile);
    document.body.classList.toggle('is-small-mobile', isPhablet);
    
    // Apply specific mobile optimizations
    if (isMobile) {
        // Optimize parallax effects for mobile
        const parallaxElements = document.querySelectorAll('.hero-shape, .about-shape, .feature-shape');
        parallaxElements.forEach(el => {
            el.style.transform = 'none';
        });
        
        // Optimize hover effects for cards
        const cards = document.querySelectorAll('.service-card, .testimonial-card');
        cards.forEach(card => {
            card.classList.add('mobile-optimized');
        });
    }
}

/**
 * Initialize preloader functionality
 */
function initPreloader() {
    const preloader = document.getElementById('preloader');
    
    if (!preloader) return;
    
    // Force body to not scroll while preloader is active
    document.body.style.overflow = 'hidden';
    
    // Hide preloader after window loads with a minimum display time
    const minimumLoadingTime = 500; // Reduced from 1000ms for even faster loading
    const startTime = new Date().getTime();
    
    // Add initial viewport height calculation
    updateViewportHeight();
    
    window.addEventListener('load', function() {
        const currentTime = new Date().getTime();
        const elapsedTime = currentTime - startTime;
        const remainingTime = Math.max(0, minimumLoadingTime - elapsedTime);
        
        // Prepare hero elements for animation as soon as the page loads
        prepareHeroAnimation();
        
        // Ensure preloader is displayed for at least the minimum time
        setTimeout(function() {
            preloader.classList.add('hide');
            
            // Trigger animation when the preloader starts fading out
            animateHeroSection();
            
            // Re-enable scrolling after preloader is hidden
            setTimeout(function() {
                document.body.style.overflow = '';
                
                // Remove from DOM after transition completes
                if (preloader.parentNode) {
                    preloader.parentNode.removeChild(preloader);
                }
            }, 400); // Reduced from 600ms to 400ms for faster transition
        }, remainingTime);
    });
    
    // Fallback: Hide preloader after a maximum time (2 seconds) in case load event doesn't trigger
    setTimeout(function() {
        if (preloader && !preloader.classList.contains('hide')) {
            // Prepare hero elements
            prepareHeroAnimation();
            
            preloader.classList.add('hide');
            
            // Trigger animation when the preloader starts fading out
            animateHeroSection();
            
            // Re-enable scrolling
            setTimeout(function() {
                document.body.style.overflow = '';
                
                if (preloader.parentNode) {
                    preloader.parentNode.removeChild(preloader);
                }
            }, 400); // Reduced from 600ms to 400ms for faster transition
        }
    }, 2000); // Reduced from 3000ms to 2000ms
}

/**
 * Prepare hero section elements for animation
 */
function prepareHeroAnimation() {
    const heroElements = {
        badge: document.querySelector('.hero-badge'),
        headline: document.querySelector('.hero-headline'),
        text: document.querySelector('.hero-text'),
        buttons: document.querySelector('.hero-buttons'),
        stats: document.querySelector('.hero-stats'),
        image: document.querySelector('.hero-image-container')
    };
    
    // Reset any AOS animations that might have fired prematurely
    if (typeof AOS !== 'undefined') {
        AOS.refreshHard();
    }
    
    // Set initial state for animation elements
    if (heroElements.badge) {
        heroElements.badge.style.opacity = '0';
        heroElements.badge.style.transform = 'translateY(20px)';
    }
    
    if (heroElements.headline) {
        heroElements.headline.style.opacity = '0';
        heroElements.headline.style.transform = 'translateY(30px)';
    }
    
    if (heroElements.text) {
        heroElements.text.style.opacity = '0';
        heroElements.text.style.transform = 'translateY(30px)';
    }
    
    if (heroElements.buttons) {
        heroElements.buttons.style.opacity = '0';
        heroElements.buttons.style.transform = 'translateY(30px)';
    }
    
    if (heroElements.stats) {
        heroElements.stats.style.opacity = '0';
        heroElements.stats.style.transform = 'translateY(30px)';
    }
    
    if (heroElements.image) {
        heroElements.image.style.opacity = '0';
        heroElements.image.style.transform = 'translateY(40px)';
    }
}

/**
 * Animate hero section elements after preloader
 */
function animateHeroSection() {
    const heroElements = {
        badge: document.querySelector('.hero-badge'),
        headline: document.querySelector('.hero-headline'),
        text: document.querySelector('.hero-text'),
        buttons: document.querySelector('.hero-buttons'),
        stats: document.querySelector('.hero-stats'),
        image: document.querySelector('.hero-image-container')
    };
    
    // Apply sequential animations with increasing delays
    if (heroElements.badge) {
        setTimeout(() => {
            heroElements.badge.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            heroElements.badge.style.opacity = '1';
            heroElements.badge.style.transform = 'translateY(0)';
        }, 100);
    }
    
    if (heroElements.headline) {
        setTimeout(() => {
            heroElements.headline.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            heroElements.headline.style.opacity = '1';
            heroElements.headline.style.transform = 'translateY(0)';
        }, 300);
    }
    
    if (heroElements.text) {
        setTimeout(() => {
            heroElements.text.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            heroElements.text.style.opacity = '1';
            heroElements.text.style.transform = 'translateY(0)';
        }, 500);
    }
    
    if (heroElements.buttons) {
        setTimeout(() => {
            heroElements.buttons.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            heroElements.buttons.style.opacity = '1';
            heroElements.buttons.style.transform = 'translateY(0)';
        }, 700);
    }
    
    if (heroElements.stats) {
        setTimeout(() => {
            heroElements.stats.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            heroElements.stats.style.opacity = '1';
            heroElements.stats.style.transform = 'translateY(0)';
        }, 900);
    }
    
    if (heroElements.image) {
        setTimeout(() => {
            heroElements.image.style.transition = 'opacity 1s ease, transform 1s ease';
            heroElements.image.style.opacity = '1';
            heroElements.image.style.transform = 'translateY(0)';
        }, 400);
    }
}

/**
 * Initialize fade in animations for elements
 */
function initFadeElements() {
    const fadeElements = document.querySelectorAll('.fade-in');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });
    
    fadeElements.forEach(element => {
        observer.observe(element);
    });
}

/**
 * Initialize sticky header behavior
 */
function initStickyHeader() {
    const header = document.querySelector('.header');
    const scrollThreshold = 50;
    
    function toggleHeaderClass() {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    window.addEventListener('scroll', toggleHeaderClass);
    toggleHeaderClass(); // Initial check
}

/**
 * Highlight active navigation item based on scroll position
 */
function initActiveNavOnScroll() {
    const sections = document.querySelectorAll('section[id]');
    
    function highlightNavItem() {
        const scrollPosition = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            const navItem = document.querySelector(`.nav-link[href="#${sectionId}"]`);
            
            if (navItem && scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                navItem.classList.add('active');
            }
        });
        
        // Handle home link active state
        if (scrollPosition < 100) {
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            const homeLink = document.querySelector('.nav-link[href="index.php"]');
            if (homeLink) homeLink.classList.add('active');
        }
    }
    
    window.addEventListener('scroll', highlightNavItem);
    highlightNavItem(); // Initial check
    
    // Close mobile menu when clicking on a nav link
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                // Use Bootstrap's built-in collapse functionality
                bootstrap.Collapse.getInstance(navbarCollapse).hide();
            }
        });
    });
}

/**
 * Add hover effects to cards
 */
function initCardHoverEffects() {
    // 3D hover effect for hero image - REMOVED to prevent rotation on mouse movement
    // const heroImage = document.querySelector('.hero-image');
    // const heroSection = document.querySelector('.hero-section');
    
    // if (heroImage && heroSection) {
    //     heroSection.addEventListener('mousemove', (e) => {
    //         const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
    //         const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
    //         heroImage.style.transform = `perspective(1000px) rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
    //     });
    //     
    //     heroSection.addEventListener('mouseleave', () => {
    //         heroImage.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg)';
    //     });
    // }
    
    // Add hover effect to service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });
    
    // Add hover effect to feature cards
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
            card.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.1)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = '0 8px 30px rgba(0, 0, 0, 0.08)';
        });
    });
    
    // Add hover effect to testimonial cards
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    testimonialCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
            card.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.08)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = '0 8px 30px rgba(0, 0, 0, 0.08)';
        });
    });
}

/**
 * Initialize smooth scrolling for anchor links
 */
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const headerOffset = 100;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                // Remove any overlay that might still exist
                const overlay = document.querySelector('.mobile-menu-overlay');
                if (overlay && overlay.parentNode) {
                    overlay.parentNode.removeChild(overlay);
                }
                
                // Ensure menu is closed
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                }
                
                // Remove body class
                document.body.classList.remove('menu-open');
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add a scroll event handler to check and remove any lingering overlay
    window.addEventListener('scroll', function() {
        // If we're scrolling, ensure any overlay is removed
        const overlay = document.querySelector('.mobile-menu-overlay');
        if (overlay && overlay.parentNode) {
            overlay.parentNode.removeChild(overlay);
            document.body.classList.remove('menu-open');
        }
    }, { passive: true });
}

/**
 * Track a GA4 event
 * @param {string} eventName - The name of the event
 * @param {Object} eventParams - Event parameters
 */
function trackEvent(eventName, eventParams = {}) {
    if (typeof gtag === 'function') {
        gtag('event', eventName, eventParams);
    }
}

/**
 * Initialize contact form
 */
function initContactForm() {
    const contactForm = document.getElementById('contact-form');
    
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        const formObject = {};
        
        formData.forEach((value, key) => {
            formObject[key] = value;
        });
        
        // Track form submission in GA4
        trackEvent('form_submit', {
            'form_id': 'contact-form',
            'form_name': 'Contact Form'
        });
        
        // Submit form via AJAX
        fetch('php/contact-process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                showFormMessage('success', data.message || 'Thank you for your message! We will get back to you soon.');
                
                // Reset form
                contactForm.reset();
                
                // Track form submission success in GA4
                trackEvent('form_submit_success', {
                    'form_id': 'contact-form',
                    'form_name': 'Contact Form'
                });
            } else {
                // Show error message
                showFormMessage('error', data.message || 'Something went wrong. Please try again later.');
                
                // Track form submission error in GA4
                trackEvent('form_submit_error', {
                    'form_id': 'contact-form',
                    'form_name': 'Contact Form',
                    'error_message': data.message || 'Unknown error'
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showFormMessage('error', 'Something went wrong. Please try again later.');
            
            // Track form submission error in GA4
            trackEvent('form_submit_error', {
                'form_id': 'contact-form',
                'form_name': 'Contact Form',
                'error_message': 'Network error'
            });
        });
    });
    
    function showFormMessage(type, message) {
        const messageContainer = document.querySelector('.form-message');
        
        if (!messageContainer) return;
        
        // Set message style and content
        messageContainer.className = 'form-message ' + type;
        messageContainer.textContent = message;
        messageContainer.style.display = 'block';
        
        // Hide message after 5 seconds
        setTimeout(() => {
            messageContainer.style.display = 'none';
        }, 5000);
    }
}

/**
 * Initialize Cal.com widget integration
 */
function initCalComWidget() {
    // Load Cal.com script if not already loaded
    if (!document.querySelector('script[src*="cal.com/embed.js"]')) {
        const calScript = document.createElement('script');
        calScript.src = 'https://cal.com/embed.js';
        calScript.async = true;
        document.head.appendChild(calScript);
        
        // Make sure the widget renders properly after load
        calScript.onload = function() {
            // Add a small timeout to ensure Cal components are registered
            setTimeout(() => {
                // Force a refresh of the components if needed
                if (window.Cal && typeof window.Cal.Cal === 'function') {
                    window.Cal.Cal('init');
                    
                    // Track calendar widget initialization in GA4
                    trackEvent('calendar_widget_load', {
                        'widget_type': 'cal.com',
                        'content_type': 'booking_widget'
                    });
                    
                    // Add event listener for booking started
                    document.addEventListener('cal:booking-initiated', function() {
                        trackEvent('booking_initiated', {
                            'event_category': 'Scheduling',
                            'event_label': 'Cal.com Booking Started',
                            'content_type': 'booking'
                        });
                    });
                    
                    // Add event listener for booking events
                    document.addEventListener('cal:booking-completed', function() {
                        // Track booking completed event in GA4
                        trackEvent('booking_completed', {
                            'event_category': 'Scheduling',
                            'event_label': 'Cal.com Booking',
                            'content_type': 'booking',
                            'conversion': true,
                            'value': 1
                        });
                    });
                }
            }, 500);
        };
    }
}

/**
 * Initialize image hover decorations
 */
function initImageHoverEffects() {
    const decoratedImages = document.querySelectorAll('.img-decoration');
    
    decoratedImages.forEach(container => {
        container.addEventListener('mouseenter', () => {
            const pseudoEl = window.getComputedStyle(container, '::before');
            if (pseudoEl) {
                container.style.setProperty('--hover-offset', '-30px');
            }
        });
        
        container.addEventListener('mouseleave', () => {
            container.style.setProperty('--hover-offset', '-20px');
        });
    });
}

/**
 * Initialize service card popups
 */
function initServicePopups() {
    const serviceCards = document.querySelectorAll('.service-card');
    const popupContainer = document.querySelector('.service-popup-container');
    const popups = document.querySelectorAll('.service-popup');
    const closeButtons = document.querySelectorAll('.popup-close');
    
    if (!serviceCards.length || !popupContainer) return;
    
    // Open popup when clicking a service card
    serviceCards.forEach(card => {
        card.addEventListener('click', () => {
            const serviceType = card.getAttribute('data-service');
            const targetPopup = document.getElementById(`popup-${serviceType}`);
            
            if (targetPopup) {
                // Track service card view in GA4
                trackEvent('service_view', {
                    'service_name': serviceType,
                    'service_id': card.getAttribute('data-id') || serviceType,
                    'content_type': 'service'
                });
                
                // First make container visible but transparent
                popupContainer.style.display = 'flex';
                
                // Force reflow
                void popupContainer.offsetWidth;
                
                // Add active class to trigger fade in
                popupContainer.classList.add('active');
                
                // Hide all popups first
                popups.forEach(popup => popup.classList.remove('active'));
                
                // Show the target popup with a slight delay for smoother appearance
                setTimeout(() => {
                    targetPopup.style.display = 'block';
                    
                    // Force reflow 
                    void targetPopup.offsetWidth;
                    
                    targetPopup.classList.add('active');
                }, 150);
                
                // Prevent body scrolling
                document.body.style.overflow = 'hidden';
            }
        });
    });
    
    // Close popup when clicking close button
    closeButtons.forEach(button => {
        button.addEventListener('click', closePopup);
    });
    
    // Close popup when clicking outside content
    popupContainer.addEventListener('click', (e) => {
        if (e.target === popupContainer) {
            closePopup();
        }
    });
    
    // Close popup when pressing escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && popupContainer.classList.contains('active')) {
            closePopup();
        }
    });
    
    function closePopup() {
        // First remove active class from specific popup
        const activePopup = document.querySelector('.service-popup.active');
        if (activePopup) {
            activePopup.classList.remove('active');
            
            // Wait for the animation to complete before hiding
            setTimeout(() => {
                activePopup.style.display = 'none';
            }, 500);
        }
        
        // Then after a small delay, hide the container
        setTimeout(() => {
            popupContainer.classList.remove('active');
            
            // Wait for fade out before removing from DOM flow
            setTimeout(() => {
                popupContainer.style.display = 'none';
                document.body.style.overflow = '';
            }, 500);
        }, 300);
    }
}

/**
 * Initialize features tabs functionality
 */
function initFeaturesTabs() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    if (!tabButtons.length || !tabPanes.length) return;
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const tabId = button.getAttribute('data-tab');
            
            // Track tab click in GA4
            trackEvent('tab_select', {
                'tab_id': tabId,
                'tab_name': button.textContent.trim(),
                'content_type': 'tab'
            });
            
            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            // Add active class to current button and corresponding pane
            button.classList.add('active');
            document.getElementById(tabId).classList.add('active');
        });
    });
}

/**
 * Initialize mobile responsive features
 */
function initMobileResponsive() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Create mobile menu overlay if it doesn't exist
    if (!mobileMenuOverlay) {
        const overlay = document.createElement('div');
        overlay.classList.add('mobile-menu-overlay');
        document.body.appendChild(overlay);
    }
    
    if (navbarToggler && navbarCollapse) {
        // Toggle navbar collapse when toggler is clicked
        navbarToggler.addEventListener('click', function() {
            const isExpanding = !navbarCollapse.classList.contains('show');
            navbarCollapse.classList.toggle('show');
            
            // Toggle overlay
            const overlay = document.querySelector('.mobile-menu-overlay');
            if (overlay) {
                overlay.classList.toggle('active');
            }
            
            // Toggle body class to prevent scrolling
            if (isExpanding) {
                document.body.classList.add('menu-open');
            } else {
                document.body.classList.remove('menu-open');
                document.body.style.overflow = '';
            }
            
            // Add close button to mobile menu if it doesn't exist
            if (navbarCollapse.classList.contains('show') && !document.querySelector('.mobile-menu-close')) {
                const closeButton = document.createElement('button');
                closeButton.classList.add('mobile-menu-close');
                closeButton.setAttribute('aria-label', 'Close menu');
                navbarCollapse.appendChild(closeButton);
                
                // Add event listener to close button
                closeButton.addEventListener('click', closeMenu);
            }
        });
        
        // Close menu when overlay is clicked
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('mobile-menu-overlay') && event.target.classList.contains('active')) {
                navbarCollapse.classList.remove('show');
                event.target.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        });
        
        // Close menu when clicking outside navbar area
        document.addEventListener('click', function(event) {
            // Check if menu is open and click is outside the navbar
            if (navbarCollapse.classList.contains('show') && 
                !event.target.closest('.navbar') && 
                !event.target.classList.contains('navbar-toggler')) {
                closeMenu();
            }
        });
        
        // Close menu when nav link is clicked
        navLinks.forEach(function(link) {
            link.addEventListener('click', closeMenu);
        });
        
        /**
         * Helper function to close mobile menu
         */
        function closeMenu() {
            navbarCollapse.classList.remove('show');
            
            const overlay = document.querySelector('.mobile-menu-overlay');
            if (overlay) {
                overlay.classList.remove('active');
            }
            
            document.body.classList.remove('menu-open');
            
            // Ensure the body overflow is restored
            document.body.style.overflow = '';
        }
    }
    
    // Add touch event support for all clickable elements on mobile
    const touchElements = document.querySelectorAll('a, button, .service-card, .testimonial-card');
    touchElements.forEach(function(el) {
        el.addEventListener('touchstart', function() {
            this.classList.add('touch-focus');
        }, { passive: true });
        
        el.addEventListener('touchend', function() {
            this.classList.remove('touch-focus');
        }, { passive: true });
    });
    
    // Set mobile viewport height (fix for 100vh on mobile)
    updateViewportHeight();
    
    // Performance optimization - lazy load images on mobile
    if ('IntersectionObserver' in window) {
        const imgObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-src');
                    
                    if (src) {
                        img.src = src;
                        img.removeAttribute('data-src');
                    }
                    
                    observer.unobserve(img);
                }
            });
        });
        
        // Get all images with data-src attribute
        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => {
            imgObserver.observe(img);
        });
    }
}

/**
 * Initialize count-up animation for stat numbers
 */
function initCountUpAnimation() {
    const statNumbers = document.querySelectorAll('.stat-number[data-count]');
    
    if (!statNumbers.length) return;
    
    const options = {
        threshold: 0.5,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const targetElement = entry.target;
                const targetNumber = parseInt(targetElement.getAttribute('data-count'));
                const suffix = targetElement.querySelector('span')?.textContent || '';
                const duration = 2000; // animation duration in milliseconds
                let startTime;
                let currentNumber = 0;
                
                function updateNumber(timestamp) {
                    if (!startTime) startTime = timestamp;
                    const progress = Math.min((timestamp - startTime) / duration, 1);
                    
                    // Use easeOutExpo for smooth slowing at the end
                    const easeOutExpo = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                    currentNumber = Math.floor(easeOutExpo * targetNumber);
                    
                    // Update the text content, preserving the suffix
                    targetElement.textContent = currentNumber;
                    if (suffix) {
                        const spanElement = document.createElement('span');
                        spanElement.textContent = suffix;
                        targetElement.appendChild(spanElement);
                    }
                    
                    if (progress < 1) {
                        requestAnimationFrame(updateNumber);
                    }
                }
                
                requestAnimationFrame(updateNumber);
                observer.unobserve(targetElement);
            }
        });
    }, options);
    
    statNumbers.forEach(statNumber => {
        observer.observe(statNumber);
    });
}

/**
 * Mobile Hero Image Repositioning for small screens
 */
function setupMobileHeroLayout() {
    const heroTextElement = document.querySelector('.hero-text');
    const heroImageContainer = document.querySelector('.hero-image-container');
    const heroHeadline = document.querySelector('.hero-headline');
    
    function adjustHeroLayout() {
        if (window.innerWidth <= 576) {
            // Only in mobile view
            if (heroTextElement && heroImageContainer && heroHeadline) {
                const parent = heroTextElement.parentNode;
                
                // Insert image container after headline but before text
                if (heroHeadline.nextElementSibling !== heroImageContainer) {
                    parent.insertBefore(heroImageContainer, heroTextElement);
                }
            }
        } else {
            // Reset layout for larger screens
            const row = document.querySelector('.hero-section .row');
            const rightColumn = row.querySelector('.col-lg-6:last-child');
            
            if (heroImageContainer && rightColumn && heroImageContainer.parentNode !== rightColumn) {
                rightColumn.appendChild(heroImageContainer);
            }
        }
    }
    
    // Run on load and resize
    adjustHeroLayout();
    window.addEventListener('resize', adjustHeroLayout);
}

/**
 * Mobile About Image Repositioning for small screens
 */
function setupMobileAboutLayout() {
    const aboutTextElement = document.querySelector('.about-text');
    const aboutImageContainer = document.querySelector('.about-image-container');
    const aboutTitle = document.querySelector('.about-title');
    
    function adjustAboutLayout() {
        if (window.innerWidth <= 576) {
            // Only in mobile view
            if (aboutTextElement && aboutImageContainer && aboutTitle) {
                const parent = aboutTextElement.parentNode;
                
                // Insert image container after title but before text
                if (aboutTitle.nextElementSibling !== aboutImageContainer) {
                    parent.insertBefore(aboutImageContainer, aboutTextElement);
                }
            }
        } else {
            // Reset layout for larger screens
            const row = document.querySelector('.about-section .row');
            const leftColumn = row.querySelector('.col-lg-6:first-child');
            
            if (aboutImageContainer && leftColumn && aboutImageContainer.parentNode !== leftColumn) {
                leftColumn.appendChild(aboutImageContainer);
            }
        }
    }
    
    // Run on load and resize
    adjustAboutLayout();
    window.addEventListener('resize', adjustAboutLayout);
}

/**
 * Initialize back-to-top button functionality
 */
function initBackToTopButton() {
    const backToTopButton = document.getElementById('back-to-top');
    const scrollThreshold = 300; // Show button after user scrolls this many pixels
    
    // Show/hide the button based on scroll position
    function toggleBackToTopButton() {
        if (window.scrollY > scrollThreshold) {
            backToTopButton.classList.add('show');
        } else {
            backToTopButton.classList.remove('show');
        }
    }
    
    // Scroll to top when button is clicked
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Smooth scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Add scroll event listener
    window.addEventListener('scroll', toggleBackToTopButton);
    
    // Check initial scroll position
    toggleBackToTopButton();
}

/**
 * Initialize contact tabs functionality
 * Handles tab switching in the contact section
 */
function initContactTabs() {
    const tabButtons = document.querySelectorAll('.contact-tab-btn');
    const tabContents = document.querySelectorAll('.contact-tab-content');
    
    if (!tabButtons.length || !tabContents.length) return;
    
    // Set default active tab (first tab)
    document.getElementById('contact-form').classList.add('active');
    tabButtons[0].classList.add('active');
    
    // Add click event listeners to tab buttons
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get the target tab to show
            const targetTab = this.getAttribute('data-contact-tab');
            
            // Remove active class from all buttons and tabs
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to current button and corresponding tab
            this.classList.add('active');
            document.getElementById('contact-' + targetTab).classList.add('active');
            
            // If Cal.com widget is in the activated tab, refresh it
            if (targetTab === 'schedule' && typeof Cal !== 'undefined') {
                try {
                    Cal('ui', {theme: 'light'});
                } catch (e) {
                    console.log('Cal.com widget refresh failed:', e);
                }
            }
        });
    });
    
    // Check if there's a hash in the URL that matches a tab
    const hash = window.location.hash.substring(1);
    if (hash) {
        const tabMatch = Array.from(tabButtons).find(btn => 
            btn.getAttribute('data-contact-tab') === hash
        );
        
        if (tabMatch) {
            tabMatch.click();
        }
    }
    
    // Update URL hash when tabs change (for shareable links)
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-contact-tab');
            history.replaceState(null, null, '#' + targetTab);
        });
    });
} 