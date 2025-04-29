/**
 * Commerce Lab Website Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize fading elements
    initFadeElements();
    
    // Header behavior on scroll
    initStickyHeader();
    
    // Highlight active navigation on scroll
    initActiveNavOnScroll();
    
    // Initialize hover effects for cards
    initCardHoverEffects();
    
    // Smooth scrolling for anchor links
    initSmoothScrolling();
    
    // Handle form submissions
    initContactForm();
    
    // Initialize image hover effects
    initImageHoverEffects();
    
    // Initialize service popups
    initServicePopups();
    
    // Initialize features tabs
    initFeaturesTabs();
    
    // Initialize mobile responsive features
    initMobileResponsive();
    
    // Initialize count-up animation for stat numbers
    initCountUpAnimation();
    
    // Call our mobile layout functions
    setupMobileHeroLayout();
    setupMobileAboutLayout();
    
    // Setup resize event listener
    window.addEventListener('resize', function() {
        updateViewportHeight();
    });
});

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
 * Initialize contact form submission behavior
 */
function initContactForm() {
    const contactForm = document.querySelector('#contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalBtnText = submitBtn.querySelector('.submit-text').textContent;
            const formContainer = contactForm.closest('.contact-form');
            
            // Show loading state
            submitBtn.querySelector('.submit-text').textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Remove any existing error or success messages
            const existingMessages = formContainer.querySelectorAll('.alert');
            existingMessages.forEach(message => message.remove());
            
            // Get form data
            const formData = new FormData(contactForm);
            
            // Submit the form using fetch API
            fetch(contactForm.getAttribute('action'), {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Create response message
                const responseMessage = document.createElement('div');
                responseMessage.className = data.success 
                    ? 'alert alert-success mt-4 fade-in active' 
                    : 'alert alert-danger mt-4 fade-in active';
                
                if (data.success) {
                    responseMessage.innerHTML = `<i class="fas fa-check-circle"></i> ${data.message}`;
                    // Reset form on success
                    contactForm.reset();
                } else {
                    responseMessage.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${data.message}`;
                    
                    // Add error details if available
                    if (data.errors && data.errors.length > 0) {
                        const errorList = document.createElement('ul');
                        errorList.className = 'error-list';
                        
                        data.errors.forEach(error => {
                            const errorItem = document.createElement('li');
                            errorItem.textContent = error;
                            errorList.appendChild(errorItem);
                        });
                        
                        responseMessage.appendChild(errorList);
                    }
                }
                
                // Add message to the form
                formContainer.appendChild(responseMessage);
                
                // Restore button
                submitBtn.querySelector('.submit-text').textContent = originalBtnText;
                submitBtn.disabled = false;
                
                // Scroll to the message
                responseMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                
                // Remove success message after delay (errors stay for user to read)
                if (data.success) {
                    setTimeout(() => {
                        responseMessage.style.opacity = '0';
                        setTimeout(() => {
                            responseMessage.remove();
                        }, 500);
                    }, 5000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                
                // Create error message
                const errorMessage = document.createElement('div');
                errorMessage.className = 'alert alert-danger mt-4 fade-in active';
                errorMessage.innerHTML = '<i class="fas fa-exclamation-triangle"></i> A network error occurred. Please try again.';
                
                // Add message to the form
                formContainer.appendChild(errorMessage);
                
                // Restore button
                submitBtn.querySelector('.submit-text').textContent = originalBtnText;
                submitBtn.disabled = false;
            });
        });
    }
    
    // Initialize Cal.com embed
    initCalComWidget();
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
    // Mobile menu toggle functionality
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');
    
    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener('click', function() {
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                // Remove overlay if exists
                removeOverlay();
                document.body.classList.remove('menu-open');
            } else {
                navbarCollapse.classList.add('show');
                // Create overlay for mobile menu background
                if (!document.querySelector('.mobile-menu-overlay')) {
                    const overlay = document.createElement('div');
                    overlay.className = 'mobile-menu-overlay';
                    document.body.appendChild(overlay);
                    setTimeout(() => {
                        overlay.classList.add('active');
                    }, 10);
                    
                    // Close menu when clicking outside
                    overlay.addEventListener('click', function(e) {
                        e.stopPropagation();
                        closeMenu();
                    });
                }
                document.body.classList.add('menu-open');
            }
        });
        
        // Helper function to forcefully remove the overlay
        function removeOverlay() {
            const overlay = document.querySelector('.mobile-menu-overlay');
            if (overlay) {
                overlay.classList.remove('active');
                // Force immediate removal instead of waiting
                if (overlay.parentNode) {
                    overlay.parentNode.removeChild(overlay);
                }
            }
        }
        
        // Handle the close button click
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function(e) {
                e.stopPropagation();
                closeMenu();
            });
        }
        
        // Close menu when clicking a link in mobile
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                    // First remove the collapse class to close the menu
                    navbarCollapse.classList.remove('show');
                    // Then force remove the overlay
                    removeOverlay();
                    document.body.classList.remove('menu-open');
                }
            });
        });
        
        // Function to close the menu and remove overlay
        function closeMenu() {
            navbarCollapse.classList.remove('show');
            removeOverlay();
            document.body.classList.remove('menu-open');
        }
    }
    
    // Close mobile menu when window is resized to desktop size
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 992 && navbarCollapse && navbarCollapse.classList.contains('show')) {
            removeOverlay();
            navbarCollapse.classList.remove('show');
            document.body.classList.remove('menu-open');
        }
    });
    
    // Helper function to force remove overlay
    function removeOverlay() {
        const overlay = document.querySelector('.mobile-menu-overlay');
        if (overlay) {
            overlay.classList.remove('active');
            // Remove immediately, don't wait for animation
            if (overlay.parentNode) {
                overlay.parentNode.removeChild(overlay);
            }
        }
    }
    
    // Convert hover effects to touch events on mobile
    if ('ontouchstart' in window || navigator.msMaxTouchPoints) {
        const cards = document.querySelectorAll('.service-card, .feature-card, .testimonial-card');
        
        cards.forEach(card => {
            card.addEventListener('touchstart', function() {
                this.classList.add('touch-focus');
            }, {passive: true});
            
            card.addEventListener('touchend', function() {
                setTimeout(() => {
                    this.classList.remove('touch-focus');
                }, 300);
            }, {passive: true});
        });
    }
    
    // Fix for 100vh issue on mobile browsers
    function setMobileViewportHeight() {
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }
    
    setMobileViewportHeight();
    window.addEventListener('resize', setMobileViewportHeight);
    
    // Enable horizontal scroll for tabs on mobile with touch
    const tabNavs = document.querySelectorAll('.features-tab-nav');
    tabNavs.forEach(nav => {
        let isDown = false;
        let startX;
        let scrollLeft;
        
        nav.addEventListener('mousedown', (e) => {
            if (window.innerWidth < 992) {
                isDown = true;
                startX = e.pageX - nav.offsetLeft;
                scrollLeft = nav.scrollLeft;
            }
        });
        
        nav.addEventListener('mouseleave', () => {
            isDown = false;
        });
        
        nav.addEventListener('mouseup', () => {
            isDown = false;
        });
        
        nav.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - nav.offsetLeft;
            const walk = (x - startX) * 2;
            nav.scrollLeft = scrollLeft - walk;
        });
        
        // For touch devices
        nav.addEventListener('touchstart', (e) => {
            if (window.innerWidth < 992) {
                startX = e.touches[0].pageX - nav.offsetLeft;
                scrollLeft = nav.scrollLeft;
            }
        }, {passive: true});
        
        nav.addEventListener('touchmove', (e) => {
            if (window.innerWidth < 992) {
                const x = e.touches[0].pageX - nav.offsetLeft;
                const walk = (x - startX) * 2;
                nav.scrollLeft = scrollLeft - walk;
            }
        }, {passive: true});
    });
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

// Lazy load images
if ('loading' in HTMLImageElement.prototype) {
    // Browser supports native lazy loading
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    lazyImages.forEach(img => {
        img.src = img.dataset.src;
    });
} else {
    // Fallback for browsers that don't support native lazy loading
    const lazyLoadScript = document.createElement('script');
    lazyLoadScript.src = 'https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js';
    document.head.appendChild(lazyLoadScript);
    
    lazyLoadScript.onload = function() {
        const observer = lozad('.lozad', {
            rootMargin: '10px 0px',
            threshold: 0.1
        });
        observer.observe();
    };
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