<?php
// Database configuration
$dbConfig = [
    'host' => 'localhost',
    'username' => 'dcwacvni',
    'password' => '!T~(aJ9gsDlX',
    'database' => 'dcwacvni_commerce_lab'
];

// Page title and meta description for SEO
$pageTitle = "Commerce Lab - Business Simulation & ERP Training Center India";
$metaDescription = "Commerce Lab offers hands-on learning experiences in ERP systems, business process simulation, and practical training since 2009. India's premier business simulation lab for commerce graduates. Book a session today!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    
    <!-- SEO Keywords -->
    <meta name="keywords" content="ERP training, business simulation, commerce lab, practical business training, tally ERP, SAP training, business process simulation, finance practical training, commerce education, business education, India">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $metaDescription; ?>">
    <meta property="og:image" content="https://commercelab.in/images/commerce-lab-og.jpg">
    <meta property="og:url" content="https://commercelab.in">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Commerce Lab">
    <meta property="og:locale" content="en_IN">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription; ?>">
    <meta name="twitter:image" content="https://commercelab.in/images/commerce-lab-og.jpg">
    <meta name="twitter:site" content="@commercelab">
    
    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#336699">
    <meta name="apple-mobile-web-app-status-bar-style" content="#336699">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://commercelab.in">
    
    <!-- Preconnect to External Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- EmailJS Library -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Google Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Commerce Lab",
      "url": "https://commercelab.in",
      "logo": "https://commercelab.in/images/logo.svg",
      "description": "Commerce Lab offers hands-on learning experiences in ERP systems and business process simulation.",
      "foundingDate": "2009",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Your Street Address",
        "addressLocality": "Your City",
        "addressRegion": "Your Region",
        "postalCode": "Your Postal Code",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-234-567-8901",
        "contactType": "customer service",
        "availableLanguage": ["English", "Hindi"]
      },
      "sameAs": [
        "https://www.facebook.com/commercelab",
        "https://www.linkedin.com/company/commercelab",
        "https://twitter.com/commercelab",
        "https://www.instagram.com/commercelab"
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Training Programs",
        "itemListElement": [
          {
            "@type": "Course",
            "name": "ERP Systems Training",
            "description": "Hands-on training on industry standard ERP systems",
            "provider": {
              "@type": "Organization",
              "name": "Commerce Lab"
            }
          },
          {
            "@type": "Course",
            "name": "Business Process Simulation",
            "description": "Real-world business process simulation training",
            "provider": {
              "@type": "Organization",
              "name": "Commerce Lab"
            }
          }
        ]
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://commercelab.in"
      }
    }
    </script>
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Commerce Lab",
      "image": "https://commercelab.in/images/commerce-lab-og.jpg",
      "url": "https://commercelab.in",
      "telephone": "+1-234-567-8901",
      "priceRange": "₹₹",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Your Street Address",
        "addressLocality": "Your City",
        "addressRegion": "Your Region",
        "postalCode": "Your Postal Code",
        "addressCountry": "IN"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "10:00",
          "closes": "15:00"
        }
      ]
    }
    </script>
    
    <!-- Google tag (gtag.js) - Load asynchronously -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GVEN6YSYRN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-GVEN6YSYRN', {
        'send_page_view': true,
        'page_title': '<?php echo $pageTitle; ?>',
        'user_properties': {
          'user_type': 'visitor'
        }
      });
      
      // Enhanced link attribution
      gtag('set', {'link_attribution': true});
      
      // Enable enhanced e-commerce
      gtag('set', {'allow_enhanced_conversions': true});
    </script>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="logo">
            <img src="images/logo.png" alt="Commerce Lab Logo" width="180">
        </div>
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
        <div class="preloader-text">Loading...</div>
    </div>
    
    <!-- Header Section -->
    <?php include 'includes/header.php'; ?>
    
    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="hero-bg-shape"></div>
        <div class="container hero-container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                    <div class="hero-content">
                        <div class="hero-badge">A Unit of Nakshatra Technologies</div>
                        <h1 class="hero-headline">Experience <span class="hero-highlight">Real Business</span> Before Your First Job</h1>
                        <p class="hero-text">Step into our dynamic learning space where you'll solve real business challenges using industry tools. Gain the hands-on experience employers are actively looking for in commerce, finance, and business graduates.</p>
                        <div class="hero-buttons">
                            <a href="#features" class="cta-button">Explore Our Lab</a>
                            <a href="#training" class="hero-second-btn">Training Programs <i class="fas fa-arrow-right"></i></a>
                        </div>
                        
                        <div class="hero-stats">
                            <div class="hero-stat-item">
                                <div class="hero-stat-number">14+</div>
                                <div class="hero-stat-label">Years</div>
                            </div>
                            <div class="hero-stat-item">
                                <div class="hero-stat-number">10K+</div>
                                <div class="hero-stat-label">Students</div>
                            </div>
                            <div class="hero-stat-item">
                                <div class="hero-stat-number">20+</div>
                                <div class="hero-stat-label">ERP Modules</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="hero-image-container">
                        <div class="hero-shape hero-shape-1"></div>
                        <div class="hero-shape hero-shape-2"></div>
                        <img src="images/hero-image.jpg" alt="Commerce Lab Environment" class="img-fluid hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- College Integration Section -->
    <section id="college-integration" class="college-integration-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <div class="section-badge">Our Academic Partners</div>
                <h2>Trusted by Leading Educational Institutions</h2>
                <p>Partnering with prestigious colleges and universities to provide industry-relevant practical training</p>
            </div>
            
            <div class="college-logos-wrapper" data-aos="fade-up" data-aos-delay="200" role="region" aria-label="Academic partner logos">
                <div class="college-logos-track">
                    <!-- First set of logos -->
                    <div class="college-logo-item">
                        <img src="images/logo/Chinmay-degree-logo.png" alt="Chinmay Degree College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/Chinmay-PU-logo.png" alt="Chinmay PU College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/Jain-PUDgree (2).webp" alt="Jain University" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/Kittur-College-Header-Logo (2).jpg" alt="Kittur College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/nehru.png" alt="Nehru College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/Oxford-logo.png" alt="Oxford College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/SJMVS (2).jpeg" alt="SJMVS College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/vivekanand.png" alt="Vivekanand College" class="college-logo">
                    </div>
                    
                    <!-- Duplicate set for seamless loop -->
                    <div class="college-logo-item">
                        <img src="images/logo/Chinmay-degree-logo.png" alt="Chinmay Degree College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/Chinmay-PU-logo.png" alt="Chinmay PU College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/Jain-PUDgree (2).webp" alt="Jain University" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/Kittur-College-Header-Logo (2).jpg" alt="Kittur College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/nehru.png" alt="Nehru College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/Oxford-logo.png" alt="Oxford College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/SJMVS (2).jpeg" alt="SJMVS College" class="college-logo">
                    </div>
                    <div class="college-logo-item">
                        <img src="images/logo/vivekanand.png" alt="Vivekanand College" class="college-logo">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="college-shape college-shape-1"></div>
        <div class="college-shape college-shape-2"></div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container about-container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-image-container">
                        <div class="about-shape about-shape-1"></div>
                        <img src="images/about-image.jpg" alt="Commerce Lab Learning Environment" class="img-fluid about-image">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-content">
                        <div class="about-badge">Our Story</div>
                        <h2 class="about-title">We believe in <span class="about-highlight">learning by doing</span></h2>
                        <p class="about-text">Founded by Nakshatra Technologies in 2009, our lab bridges the gap between theory and practice. We've created an immersive environment where students develop practical skills through real-world business simulations, giving you the competitive edge employers seek.</p>
                        
                        <div class="about-features">
                            <div class="about-feature-item">
                                <div class="about-feature-icon">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <div class="about-feature-text">Immersive business process simulations</div>
                            </div>
                            <div class="about-feature-item">
                                <div class="about-feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="about-feature-text">Industry professional-led training</div>
                            </div>
                            <div class="about-feature-item">
                                <div class="about-feature-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="about-feature-text">Industry-recognized certification</div>
                            </div>
                            <div class="about-feature-item">
                                <div class="about-feature-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="about-feature-text">Real-world portfolio development</div>
                            </div>
                        </div>
                        
                        <a href="#features" class="cta-button">Explore Our Facilities</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services/Core Subsystems Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <div class="section-badge">Enterprise Resource Planning</div>
                <h2>Master Integrated Business Processes with Hands-On Training</h2>
                <p>Gain practical expertise across the essential functions of an enterprise through our comprehensive ERP systems</p>
            </div>
            <div class="card-grid" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card" data-service="sales">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Sales & Marketing</h3>
                    <p>Understand customer interaction and sales processes through hands-on experience</p>
                </div>
                <div class="service-card" data-service="scheduling">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Master Scheduling</h3>
                    <p>Learn to plan and manage production schedules with precision</p>
                </div>
                <div class="service-card" data-service="material">
                    <div class="service-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3>Material Planning</h3>
                    <p>Master inventory control and material procurement processes</p>
                </div>
                <div class="service-card" data-service="capacity">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Capacity Planning</h3>
                    <p>Align production capacity with demand through strategic planning</p>
                </div>
                <div class="service-card" data-service="bom">
                    <div class="service-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Bill of Materials</h3>
                    <p>Understand product structures and component relationships</p>
                </div>
                <div class="service-card" data-service="purchasing">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Purchasing</h3>
                    <p>Get hands-on experience with procurement processes</p>
                </div>
                <div class="service-card" data-service="shopfloor">
                    <div class="service-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Shop Floor Control</h3>
                    <p>Learn to manage and monitor manufacturing activities</p>
                </div>
                <div class="service-card" data-service="accounting">
                    <div class="service-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3>Financial Accounting</h3>
                    <p>Gain practical skills in core accounting principles</p>
                </div>
                <div class="service-card" data-service="logistics">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Logistics</h3>
                    <p>Understand the flow of goods and supply chain coordination</p>
                </div>
                <div class="service-card" data-service="assets">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Asset Management</h3>
                    <p>Learn to track and manage company assets effectively</p>
                </div>
                <div class="service-card" data-service="crm">
                    <div class="service-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3>CRM</h3>
                    <p>Manage customer interactions across the entire customer lifecycle</p>
                </div>
                <div class="service-card" data-service="retail-hardware">
                    <div class="service-icon">
                        <i class="fas fa-barcode"></i>
                    </div>
                    <h3>Retail Hardware</h3>
                    <p>Experience real-time barcode scanners, printers, and POS machines for authentic retail operations</p>
                </div>
            </div>
            
            <div class="services-shape services-shape-1"></div>
            <div class="services-shape services-shape-2"></div>
        </div>
    </section>
    
    <!-- Service Popups -->
    <div class="service-popup-container">
        <div class="service-popup" id="popup-sales">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-chart-line"></i> Sales & Marketing</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Understand customer interaction and sales processes through hands-on experience:</p>
                    <ul>
                        <li>Customer acquisition strategies</li>
                        <li>Sales funnel management</li>
                        <li>Campaign planning and execution</li>
                        <li>Market analysis techniques</li>
                        <li>Customer relationship management (CRM)</li>
                        <li>Sales forecasting methods</li>
                    </ul>
                    <p>Through our simulation environment, you'll create and execute real marketing campaigns, track customer interactions, and analyze sales performance data.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-scheduling">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-calendar-alt"></i> Master Scheduling</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Learn to plan and manage production schedules with precision:</p>
                    <ul>
                        <li>Production planning fundamentals</li>
                        <li>Resource allocation strategies</li>
                        <li>Forecasting and demand planning</li>
                        <li>Master production scheduling</li>
                        <li>Just-in-time production planning</li>
                        <li>Schedule optimization techniques</li>
                    </ul>
                    <p>You'll work with industry-standard scheduling tools to create realistic production plans that balance customer demand with manufacturing capabilities.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-material">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-boxes"></i> Material Planning</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Master inventory control and material procurement processes:</p>
                    <ul>
                        <li>Material Requirements Planning (MRP)</li>
                        <li>Inventory management techniques</li>
                        <li>Lead time management</li>
                        <li>Safety stock calculations</li>
                        <li>Order quantity optimization</li>
                        <li>Supply chain coordination</li>
                    </ul>
                    <p>Practice using MRP systems to determine exact material needs, timing, and quantities to ensure efficient production flow while minimizing inventory costs.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-capacity">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-cogs"></i> Capacity Planning</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Align production capacity with demand through strategic planning:</p>
                    <ul>
                        <li>Capacity Requirements Planning (CRP)</li>
                        <li>Workload balancing techniques</li>
                        <li>Bottleneck identification and management</li>
                        <li>Work center efficiency optimization</li>
                        <li>Labor and machine capacity analysis</li>
                        <li>Capacity expansion planning</li>
                    </ul>
                    <p>Learn how to analyze and adjust production capacity to meet changing demand patterns while maximizing resource utilization and minimizing costs.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-bom">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-clipboard-list"></i> Bill of Materials</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Understand product structures and component relationships:</p>
                    <ul>
                        <li>BOM structure creation and management</li>
                        <li>Multi-level BOM development</li>
                        <li>Engineering change management</li>
                        <li>Product configuration management</li>
                        <li>Component substitution strategies</li>
                        <li>BOM accuracy verification</li>
                    </ul>
                    <p>Practice creating and managing Bills of Materials for various product types, understanding how BOM structure impacts inventory, purchasing, and production processes.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-purchasing">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-shopping-cart"></i> Purchasing</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Get hands-on experience with procurement processes:</p>
                    <ul>
                        <li>Supplier selection and evaluation</li>
                        <li>Purchase order management</li>
                        <li>Price negotiation strategies</li>
                        <li>Vendor relationship management</li>
                        <li>Global sourcing techniques</li>
                        <li>Procurement analytics</li>
                    </ul>
                    <p>Learn to manage the complete purchasing cycle from supplier selection to payment processing, optimizing costs while maintaining quality and delivery performance.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-shopfloor">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-industry"></i> Shop Floor Control</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Learn to manage and monitor manufacturing activities:</p>
                    <ul>
                        <li>Production order release and tracking</li>
                        <li>Work-in-process management</li>
                        <li>Labor and machine efficiency tracking</li>
                        <li>Quality control integration</li>
                        <li>Production reporting systems</li>
                        <li>Real-time production monitoring</li>
                    </ul>
                    <p>Experience how to manage shop floor operations to ensure production goals are met while maintaining quality standards and responding to unexpected events.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-accounting">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-file-invoice-dollar"></i> Financial Accounting</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Gain practical skills in core accounting principles:</p>
                    <ul>
                        <li>General ledger management</li>
                        <li>Accounts payable and receivable processing</li>
                        <li>Financial statement preparation</li>
                        <li>Cost accounting methods</li>
                        <li>Budget development and tracking</li>
                        <li>Financial analysis techniques</li>
                    </ul>
                    <p>Work with industry-standard accounting software to process transactions, create financial reports, and analyze business performance from a financial perspective.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-logistics">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-truck"></i> Logistics</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Master the flow of goods and supply chain coordination:</p>
                    <ul>
                        <li>Transportation management</li>
                        <li>Distribution planning</li>
                        <li>Warehouse operations and layout</li>
                        <li>Inventory tracking systems</li>
                        <li>Shipping documentation</li>
                        <li>Supply chain visibility and analytics</li>
                    </ul>
                    <p>Learn to optimize the movement of goods through the supply chain, from procurement to delivery, ensuring timely and cost-effective fulfillment of customer orders.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-assets">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-building"></i> Asset Management</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Learn to track and manage company assets effectively:</p>
                    <ul>
                        <li>Fixed asset registration and tracking</li>
                        <li>Depreciation calculation methods</li>
                        <li>Asset maintenance scheduling</li>
                        <li>Equipment lifecycle management</li>
                        <li>Capital expenditure planning</li>
                        <li>Asset performance analytics</li>
                    </ul>
                    <p>Understand how businesses track, maintain, and optimize the value of their physical assets while ensuring compliance with accounting standards and regulatory requirements.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-crm">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-user-friends"></i> Customer Relationship Management</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Manage customer interactions across the entire customer lifecycle:</p>
                    <ul>
                        <li>Contact and lead management</li>
                        <li>Sales automation and tracking</li>
                        <li>Customer service and support</li>
                        <li>Marketing campaign management</li>
                        <li>Customer data analysis</li>
                        <li>Loyalty program administration</li>
                    </ul>
                    <p>Gain hands-on experience with CRM software to manage customer relationships effectively, driving customer retention and growth through personalized engagement strategies.</p>
                </div>
            </div>
        </div>
        
        <div class="service-popup" id="popup-retail-hardware">
            <div class="popup-content">
                <div class="popup-header">
                    <h3><i class="fas fa-barcode"></i> Retail Hardware Systems</h3>
                    <button class="popup-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="popup-body">
                    <p>Experience industry-standard retail hardware used in shops and retail establishments:</p>
                    <ul>
                        <li>Real-time Barcode Scanners: Learn inventory tracking and point-of-sale processing with professional barcode scanning technology for efficient retail operations</li>
                        <li>Barcode Printers: Create and print custom barcodes for effective inventory and product management in modern retail environments</li>
                        <li>POS Printing Machines: Generate receipts, invoices, and transaction documentation in a simulated retail environment with industry-standard equipment</li>
                        <li>Integrated Systems: Understand how hardware components connect with inventory and sales software for seamless retail operations</li>
                        <li>Retail Automation: Experience end-to-end retail operations from product labeling to final sale using professional-grade equipment</li>
                        <li>Real-time Shop Simulations: Participate in authentic retail establishment workflows that mirror actual business operations</li>
                    </ul>
                    <p>Work with the same hardware used in modern retail businesses to gain practical skills in inventory management, point-of-sale operations, and retail workflows. This hands-on experience with real-world technology prepares you for immediate productivity in retail and business environments.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Lab Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <div class="section-badge">Our Lab</div>
                <h2>Explore Our State-of-the-Art Commerce Lab Facility</h2>
                <p>Our lab is equipped with the tools and technology you need to succeed</p>
            </div>
            
            <div class="features-tabs" data-aos="fade-up" data-aos-delay="100">
                <div class="features-tab-nav">
                    <button class="tab-btn active" data-tab="equipment"><i class="fas fa-desktop"></i> Workstations</button>
                    <button class="tab-btn" data-tab="software"><i class="fas fa-laptop-code"></i> Software</button>
                    <button class="tab-btn" data-tab="collaboration"><i class="fas fa-users"></i> Collaboration</button>
                    <button class="tab-btn" data-tab="security"><i class="fas fa-shield-alt"></i> Security</button>
                    <button class="tab-btn" data-tab="industry"><i class="fas fa-handshake"></i> Networking</button>
                </div>
                
                <div class="features-tab-content">
                    <div class="tab-pane active" id="equipment">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-image-container" data-aos="fade-right">
                                    <img src="images/workstations.jpg" alt="High-Performance Workstations" class="img-fluid feature-image">
                                    <div class="feature-shape feature-shape-1"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-content" data-aos="fade-left">
                                    <h3>Workstations and Computer Systems</h3>
                                    <p>Our lab features high-performance computing resources that prepare you for professional workplace environments through realistic simulations.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> High-Performance Computers: Utilize machines equipped with dual monitors to handle demanding business software and simulations</li>
                                        <li><i class="fas fa-check-circle"></i> Networked Environment: Facilitates resource sharing and collaborative projects</li>
                                        <li><i class="fas fa-check-circle"></i> Dual high-resolution monitors for enhanced productivity</li>
                                        <li><i class="fas fa-check-circle"></i> Ergonomic workspaces designed for comfort and efficiency</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="software">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div class="feature-image-container" data-aos="fade-left">
                                    <img src="images/software.jpg" alt="Industry-Standard Software" class="img-fluid feature-image">
                                    <div class="feature-shape feature-shape-2"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="feature-content" data-aos="fade-right">
                                    <h3>Software and Applications</h3>
                                    <p>Master the same software tools that businesses rely on daily, giving you practical experience that employers value immediately.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> Accounting Software: Gain hands-on practice with TallyPrime for accounting and inventory management</li>
                                        <li><i class="fas fa-check-circle"></i> ERP Systems: Learn integrated business processes using industry-standard software like SAP, Tally, or Oracle</li>
                                        <li><i class="fas fa-check-circle"></i> Reporting & Analysis Tools: Master data analysis with Power BI and Excel</li>
                                        <li><i class="fas fa-check-circle"></i> CRM Software: Manage customer interactions using systems like Salesforce</li>
                                        <li><i class="fas fa-check-circle"></i> Bloomberg Terminal: Access real-time financial data and professional market analytics used by leading financial institutions</li>
                                        <li><i class="fas fa-check-circle"></i> Market Simulation Tools: Practice buying and selling in realistic stock trading simulators</li>
                                        <li><i class="fas fa-check-circle"></i> Point of Sale (POS) Systems: Get experience with retail transactions and sales management</li>
                                        <li><i class="fas fa-check-circle"></i> GST Simulators: Understand Goods and Services Tax processes</li>
                                        <li><i class="fas fa-check-circle"></i> Inventory Management Systems: Learn supply chain and inventory control principles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="collaboration">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-image-container" data-aos="fade-right">
                                    <img src="images/collaboration.jpg" alt="Interactive Learning Tools" class="img-fluid feature-image">
                                    <div class="feature-shape feature-shape-1"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-content" data-aos="fade-left">
                                    <h3>Collaboration Tools</h3>
                                    <p>Our cutting-edge collaboration tools foster teamwork and facilitate learning from industry experts, developing the communication skills essential for today's business environment.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> Interactive Whiteboards: 2 state-of-the-art boards to enhance learning through interactive teaching and group work</li>
                                        <li><i class="fas fa-check-circle"></i> Video Conferencing System: Advanced conferencing setup to connect with industry experts, attend virtual guest lectures, and collaborate remotely</li>
                                        <li><i class="fas fa-check-circle"></i> Collaborative problem-solving spaces</li>
                                        <li><i class="fas fa-check-circle"></i> Digital presentation equipment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="security">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div class="feature-image-container" data-aos="fade-left">
                                    <img src="images/security.jpg" alt="Security Features" class="img-fluid feature-image">
                                    <div class="feature-shape feature-shape-2"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="feature-content" data-aos="fade-right">
                                    <h3>Security Features</h3>
                                    <p>Our lab implements comprehensive security measures to protect sensitive information and provide a secure learning environment.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> Data Security: Robust measures including firewalls, antivirus software, and data encryption protect sensitive information</li>
                                        <li><i class="fas fa-check-circle"></i> Access Control: Secure login systems and user permissions ensure data privacy</li>
                                        <li><i class="fas fa-check-circle"></i> Ergonomic Design: Comfortable, ergonomically designed furniture supports an effective learning environment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="industry">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-image-container" data-aos="fade-right">
                                    <img src="images/industry.jpg" alt="Industry Connections" class="img-fluid feature-image">
                                    <div class="feature-shape feature-shape-1"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-content" data-aos="fade-left">
                                    <h3>Networking and Professional Development</h3>
                                    <p>Benefit from our extensive network of business partnerships that provide real-world opportunities and connections to jumpstart your career.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> Industry Partnerships: Benefit from collaborations providing internships, live projects, and guest lectures</li>
                                        <li><i class="fas fa-check-circle"></i> Networking Events: Connect with industry professionals to build your professional network</li>
                                        <li><i class="fas fa-check-circle"></i> Guest lectures from industry leaders</li>
                                        <li><i class="fas fa-check-circle"></i> Real-world case studies and projects</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="features-shape features-shape-1"></div>
        <div class="features-shape features-shape-2"></div>
    </section>
    
    <!-- Training Section -->
    <section id="training" class="training-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <div class="section-badge">Training</div>
                <h2>Flexible Learning to Fit Your Goals</h2>
                <p>Programs designed to work with your schedule and career aspirations</p>
            </div>
            
            <div class="training-wrapper" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="training-image-container">
                            <img src="images/training-image.jpg" alt="Training Session at Commerce Lab" class="img-fluid training-image">
                        </div>
                        
                        <div class="training-stats position-relative">
                            <div class="stats-cards">
                                <div class="stat-glass-card">
                                    <div class="stat-number" data-count="95">0<span>%</span></div>
                                    <div class="stat-label">Employment Rate</div>
                                </div>
                                <div class="stat-glass-card">
                                    <div class="stat-number" data-count="45">0<span>+</span></div>
                                    <div class="stat-label">Business Partners</div>
                                </div>
                                <div class="stat-glass-card">
                                    <div class="stat-number" data-count="24">0<span>/7</span></div>
                                    <div class="stat-label">Support Access</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="training-content">
                            <div class="training-accordion accordion" id="trainingAccordion">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fas fa-calendar-alt"></i> Flexible Scheduling Options
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#trainingAccordion">
                                        <div class="accordion-body">
                                            <p>We understand that everyone's learning journey is different. Our programs accommodate busy professionals, full-time students, and corporate teams with options including:</p>
                                            <ul class="training-list">
                                                <li><i class="fas fa-check-circle"></i> Weekend intensive workshops</li>
                                                <li><i class="fas fa-check-circle"></i> Week-long certification programs</li>
                                                <li><i class="fas fa-check-circle"></i> Evening sessions for working professionals</li>
                                                <li><i class="fas fa-check-circle"></i> Custom corporate training schedules</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fas fa-graduation-cap"></i> Industry-Recognized Certification
                                        </button>
                                    </h3>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#trainingAccordion">
                                        <div class="accordion-body">
                                            <p>Our training programs lead to certifications that employers actively seek, giving you a competitive edge in the job market:</p>
                                            <ul class="training-list">
                                                <li><i class="fas fa-check-circle"></i> ERP Implementation Specialist</li>
                                                <li><i class="fas fa-check-circle"></i> Business Process Management</li>
                                                <li><i class="fas fa-check-circle"></i> Supply Chain Analytics</li>
                                                <li><i class="fas fa-check-circle"></i> Financial Systems Administrator</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fas fa-user-tie"></i> Expert Instructors
                                        </button>
                                    </h3>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#trainingAccordion">
                                        <div class="accordion-body">
                                            <p>Learn from industry professionals with extensive real-world experience in business operations and ERP implementation:</p>
                                            <ul class="training-list">
                                                <li><i class="fas fa-check-circle"></i> Former executives from leading companies</li>
                                                <li><i class="fas fa-check-circle"></i> Certified trainers with 10+ years experience</li>
                                                <li><i class="fas fa-check-circle"></i> ERP implementation specialists</li>
                                                <li><i class="fas fa-check-circle"></i> Industry consultants with global exposure</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="training-shape training-shape-1"></div>
        <div class="training-shape training-shape-2"></div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="pattern-overlay"></div>
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <div class="section-badge">Testimonials</div>
                <h2>What Our Students Say</h2>
                <p>Real success stories from our graduates</p>
            </div>
            
            <div class="testimonials-wrapper">
                <div class="testimonials-grid">
                    <div class="testimonial-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testimonial-content">
                            "Commerce Lab transformed my understanding of ERP systems. The practical experience I gained was invaluable for my career in operations management. I recommend this to every business student."
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="images/testimonials/testimonial-1.jpg" alt="Priya Sharma" class="img-fluid">
                            </div>
                            <div class="author-info">
                                <h4>Priya Sharma</h4>
                                <p>Operations Manager, TechVision India</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testimonial-content">
                            "The hands-on approach at Commerce Lab made complex business processes easy to understand. I now have confidence in implementing ERP solutions for clients across different industries."
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="images/testimonials/testimonial-2.jpg" alt="Arjun Mehta" class="img-fluid">
                            </div>
                            <div class="author-info">
                                <h4>Arjun Mehta</h4>
                                <p>IT Consultant, Infosys</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="testimonial-quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testimonial-content">
                            "We sent our entire finance team to Commerce Lab, and the ROI was immediate. Their simulation-based training accelerated our ERP implementation by months. Best decision we made."
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="images/testimonials/testimonial-3.jpg" alt="Meera Patel" class="img-fluid">
                            </div>
                            <div class="author-info">
                                <h4>Meera Patel</h4>
                                <p>CFO, GlobalRetail India</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-shape testimonial-shape-1"></div>
            <div class="testimonial-shape testimonial-shape-2"></div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <div class="section-badge">Contact Us</div>
                <h2>Connect With Commerce Lab</h2>
                <p>Ready to enhance your practical business skills? Reach out to learn more or schedule a visit.</p>
            </div>
            
            <div class="contact-main-wrapper" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-tabs">
                    <button class="contact-tab-btn active" data-contact-tab="form">
                        <i class="fas fa-envelope"></i> Contact Form
                    </button>
                    <button class="contact-tab-btn" data-contact-tab="schedule">
                        <i class="fas fa-calendar-alt"></i> Schedule Meeting
                    </button>
                    <button class="contact-tab-btn" data-contact-tab="map">
                        <i class="fas fa-map-marker-alt"></i> Find Us
                    </button>
                </div>
                
                <div class="contact-content-wrapper">
                    <div class="contact-tab-content active" id="contact-form">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="contact-info-card">
                                    <div class="contact-info-header">
                                        <h3>Contact Information</h3>
                                        <p>Have questions or need help? We're here for you.</p>
                                    </div>
                                    
                                    <div class="contact-info-body">
                                        <div class="contact-info-item">
                                            <div class="contact-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="contact-text">
                                                <h4>Location</h4>
                                                <p>#3, Pooja Arcade, Deshpande Nagar, Hubli<br>Opp. Sawai Gandharwa Hall</p>
                                            </div>
                                        </div>
                                        
                                        <div class="contact-info-item">
                                            <div class="contact-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="contact-text">
                                                <h4>Phone</h4>
                                                <p>0836-2257865<br>0836-2370786<br>9448110341</p>
                                            </div>
                                        </div>
                                        
                                        <div class="contact-info-item">
                                            <div class="contact-icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="contact-text">
                                                <h4>Email</h4>
                                                <p>info@commercelab.in</p>
                                            </div>
                                        </div>
                                        
                                        <div class="contact-info-item">
                                            <div class="contact-icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="contact-text">
                                                <h4>Business Hours</h4>
                                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                                                Saturday: 9:00 AM - 1:00 PM<br>
                                                Sunday: Closed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-7">
                                <div class="contact-form-card">
                                    <h3>Send Us a Message</h3>
                                    <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                                    
                                    <form id="contactForm" novalidate>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="from_name">Your Name</label>
                                                <input type="text" class="form-control" id="from_name" name="from_name" placeholder="Enter your name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="from_email">Your Email</label>
                                                <input type="email" class="form-control" id="from_email" name="from_email" placeholder="Enter your email" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="What is this regarding?">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                                        </div>
                                        
                                        <button type="submit" class="submit-btn" id="submitBtn">
                                            <span class="submit-text">Send Message</span>
                                            <span class="submit-icon"><i class="fas fa-paper-plane"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-tab-content" id="contact-schedule">
                        <div class="schedule-wrapper">
                            <div class="schedule-intro">
                                <h3>Schedule a Meeting</h3>
                                <p>Book a consultation with one of our training advisors to learn more about our programs and facilities.</p>
                            </div>
                            <div class="cal-embed">
                                <!-- Cal.com inline embed code -->
                                <div id="cal-booking-placeholder" style="min-height: 600px;"></div>
                                <script>
                                (function (C, A, L) {
                                    let p = function (a, ar) {
                                        a.q.push(ar);
                                    };
                                    let d = C.document;
                                    C.Cal = C.Cal || function () {
                                        let cal = C.Cal;
                                        let ar = arguments;
                                        if (!cal.loaded) {
                                            cal.ns = {};
                                            cal.q = cal.q || [];
                                            d.head.appendChild(d.createElement("script")).src = A;
                                            cal.loaded = true;
                                        }
                                        if (ar[0] === L) {
                                            const api = function () {
                                                p(api, arguments);
                                            };
                                            const namespace = ar[1];
                                            api.q = api.q || [];
                                            typeof namespace === "string" ? (cal.ns[namespace] = api) && p(api, ar) : p(cal, ar);
                                            return;
                                        }
                                        p(cal, ar);
                                    };
                                })(window, "https://cal.com/embed.js", "init");
                                Cal("init", {origin:"https://cal.com"});
                                
                                Cal("inline", {
                                    elementOrSelector: "#cal-booking-placeholder",
                                    calLink: "commerce-lab/30min",
                                    layout: "column",
                                    hideLogo: true,
                                    hideEventTypeDetails: false,
                                    hideGdprBanner: true,
                                    config: {
                                        theme: "light",
                                        hideEventTypeDetails: false,
                                        disableBranding: true,
                                        ui: {
                                            bookerSectionComponent: {
                                                disableAvatar: true,
                                            },
                                            cssVarsPerTheme: {
                                                light: {
                                                    '--cal-brand': '#336699',
                                                    '--cal-brand-emphasis': '#235689',
                                                    '--cal-brand-text': 'white',
                                                }
                                            }
                                        }
                                    },
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-tab-content" id="contact-map">
                        <div class="map-wrapper">
                            <div class="map-intro">
                                <h3>Visit Our Location</h3>
                                <p>Find us at the following location. We'd be delighted to show you around our facilities.</p>
                            </div>
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.3318883577863!2d75.13607450679451!3d15.35850173983422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d7443ff6a175%3A0xb24338fc6b11c3c9!2sGCOMM%20LAB%20INC%20SAP%20TRAINING!5e0!3m2!1sen!2sin!4v1746027210866!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <div class="map-card">
                                    <h4>Commerce Lab</h4>
                                    <p><i class="fas fa-map-marker-alt"></i> #3, Pooja Arcade, Deshpande Nagar, Hubli</p>
                                    <a href="https://maps.app.goo.gl/CZ4tVDkr7jppgr69A" target="_blank" class="map-directions-btn">
                                        <i class="fas fa-directions"></i> Get Directions
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Include JavaScript files -->
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Image Optimization Script -->
    <script src="js/image-optimizer.js"></script>
    
    <!-- Main JavaScript -->
    <script src="js/main.js"></script>
    
    <!-- Initialize AOS -->
    <script>
        // Initialize AOS with custom settings
        document.addEventListener('DOMContentLoaded', function() {
            // Delay AOS initialization to improve page load performance
            setTimeout(function() {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true,
                    mirror: false,
                    disable: window.innerWidth < 768 ? true : false
                });
            }, 500);
        });
    </script>
    
    <!-- EmailJS Integration -->
    <script>
        // Initialize EmailJS
        (function() {
            emailjs.init('5IbnFnYpBTWNzsSaM'); // Your public key
        })();

        // Contact form handling
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = submitBtn.querySelector('.submit-text');
            const submitIcon = submitBtn.querySelector('.submit-icon i');

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Get form data
                const formData = new FormData(contactForm);
                const templateParams = {
                    from_name: formData.get('from_name'),
                    from_email: formData.get('from_email'),
                    subject: formData.get('subject'),
                    message: formData.get('message'),
                    to_name: 'Commerce Lab Team'
                };

                // Validate required fields
                if (!templateParams.from_name || !templateParams.from_email || !templateParams.message) {
                    showAlert('Please fill in all required fields.', 'error');
                    return;
                }

                // Update button state
                setButtonLoading(true);

                // Send email using EmailJS
                emailjs.send('service_ysh3wii', 'template_rigmswp', templateParams)
                    .then(function(response) {
                        console.log('SUCCESS!', response.status, response.text);
                        showAlert('Thank you for your message! We\'ll get back to you as soon as possible.', 'success');
                        contactForm.reset();
                        
                        // Track successful form submission
                        if (typeof gtag !== 'undefined') {
                            gtag('event', 'contact_form_submit', {
                                event_category: 'engagement',
                                event_label: 'contact_form'
                            });
                        }
                    })
                    .catch(function(error) {
                        console.error('FAILED...', error);
                        showAlert('Sorry, there was a problem sending your message. Please try again later.', 'error');
                    })
                    .finally(function() {
                        setButtonLoading(false);
                    });
            });

            function setButtonLoading(loading) {
                if (loading) {
                    submitBtn.disabled = true;
                    submitText.textContent = 'Sending...';
                    submitIcon.className = 'fas fa-spinner fa-spin';
                } else {
                    submitBtn.disabled = false;
                    submitText.textContent = 'Send Message';
                    submitIcon.className = 'fas fa-paper-plane';
                }
            }

            function showAlert(message, type) {
                // Remove existing alerts
                const existingAlerts = contactForm.querySelectorAll('.alert');
                existingAlerts.forEach(alert => alert.remove());

                // Create new alert
                const alertDiv = document.createElement('div');
                alertDiv.className = `alert alert-${type === 'success' ? 'success' : 'danger'}`;
                alertDiv.textContent = message;

                // Insert alert before the form
                contactForm.parentNode.insertBefore(alertDiv, contactForm);

                // Auto-hide alert after 5 seconds
                setTimeout(() => {
                    alertDiv.remove();
                }, 5000);

                // Scroll to alert
                alertDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    </script>
</body>
</html> 