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
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Initialize contact form submission behavior
 */
function initContactForm() {
    const contactForm = document.querySelector('.contact-form form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalBtnText = submitBtn.textContent;
            
            // Show loading state
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Get form data
            const formData = new FormData(contactForm);
            
            // Simulate form submission
            setTimeout(() => {
                // Show success message
                const formContainer = contactForm.closest('.contact-form');
                const responseMessage = document.createElement('div');
                responseMessage.className = 'alert alert-success mt-4 fade-in active';
                responseMessage.innerHTML = '<strong>Thank you!</strong> Your message has been sent successfully. We\'ll get back to you soon.';
                formContainer.appendChild(responseMessage);
                
                // Reset form
                contactForm.reset();
                
                // Restore button
                submitBtn.textContent = originalBtnText;
                submitBtn.disabled = false;
                
                // Scroll to the message
                responseMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                
                // Remove message after delay
                setTimeout(() => {
                    responseMessage.style.opacity = '0';
                    setTimeout(() => {
                        responseMessage.remove();
                    }, 500);
                }, 5000);
            }, 1500);
            
            // In a real implementation, you would use fetch() to submit the form:
            /*
            fetch(contactForm.getAttribute('action'), {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Handle response
            })
            .catch(error => {
                // Handle error
            });
            */
        });
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