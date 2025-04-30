<?php
// Database configuration
$dbConfig = [
    'host' => 'localhost',
    'username' => 'dcwacvni',
    'password' => '!T~(aJ9gsDlX',
    'database' => 'dcwacvni_commerce_lab'
];

// Page title and meta description for SEO
$pageTitle = "Commerce Lab - Business Simulation & ERP Training";
$metaDescription = "Commerce Lab offers hands-on learning experiences in ERP systems, business process simulation, and practical training since 2009. Book a session today!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $metaDescription; ?>">
    <meta property="og:image" content="https://commercelab.in/images/commerce-lab-og.jpg">
    <meta property="og:url" content="https://commercelab.in">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription; ?>">
    <meta name="twitter:image" content="https://commercelab.in/images/commerce-lab-og.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://commercelab.in">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <!-- Google Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Commerce Lab",
      "url": "https://commercelab.in",
      "logo": "https://commercelab.in/images/logo.svg",
      "description": "Commerce Lab offers hands-on learning experiences in ERP systems and business process simulation.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Your Street Address",
        "addressLocality": "Your City",
        "addressRegion": "Your Region",
        "postalCode": "Your Postal Code",
        "addressCountry": "Your Country"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-234-567-8901",
        "contactType": "customer service"
      },
      "sameAs": [
        "https://www.facebook.com/commercelab",
        "https://www.linkedin.com/company/commercelab",
        "https://twitter.com/commercelab"
      ]
    }
    </script>
    
    <!-- Google tag (gtag.js) - GA4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GVEN6YSYRN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-GVEN6YSYRN');
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
        <div class="container hero-container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                    <div class="hero-content">
                        <div class="hero-badge">Established in 2009</div>
                        <h1 class="hero-headline">Experience <span class="hero-highlight">Real Business</span> Before Your First Job</h1>
                        <p class="hero-text">Step into our dynamic learning space where you'll solve real business challenges using industry tools. Gain the hands-on experience employers are actively looking for in commerce, finance, and business graduates.</p>
                        <div class="hero-buttons">
                            <a href="#features" class="cta-button">Explore Our Lab</a>
                            <a href="#training" class="hero-second-btn">Training Programs <i class="fas fa-arrow-right"></i></a>
                        </div>
                        
                        <div class="hero-stats">
                            <div class="hero-stat-item">
                                <div class="hero-stat-number">14+</div>
                                <div class="hero-stat-label">Years<br>Experience</div>
                            </div>
                            <div class="hero-stat-item">
                                <div class="hero-stat-number">5K+</div>
                                <div class="hero-stat-label">Students<br>Trained</div>
                            </div>
                            <div class="hero-stat-item">
                                <div class="hero-stat-number">20+</div>
                                <div class="hero-stat-label">ERP<br>Modules</div>
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
                <div class="section-badge">Core Subsystems</div>
                <h2>Master Integrated Business Processes</h2>
                <p>Gain practical skills across all core business functions</p>
            </div>
            <div class="card-grid" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card" data-service="sales">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Sales & Marketing</h3>
                    <p>Learn how to attract and retain customers through hands-on campaign management</p>
                </div>
                <div class="service-card" data-service="scheduling">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Master Scheduling</h3>
                    <p>Create effective production plans and allocate resources efficiently</p>
                </div>
                <div class="service-card" data-service="material">
                    <div class="service-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3>Material Planning</h3>
                    <p>Calculate exactly what materials you need, when you need them</p>
                </div>
                <div class="service-card" data-service="capacity">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Capacity Planning</h3>
                    <p>Balance workloads and optimize production capabilities</p>
                </div>
                <div class="service-card" data-service="bom">
                    <div class="service-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Bill of Materials</h3>
                    <p>Understand product structures and manage component relationships</p>
                </div>
                <div class="service-card" data-service="purchasing">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Purchasing</h3>
                    <p>Manage vendor relationships and optimize procurement processes</p>
                </div>
                <div class="service-card" data-service="shopfloor">
                    <div class="service-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Shop Floor Control</h3>
                    <p>Monitor and manage manufacturing activities in real-time</p>
                </div>
                <div class="service-card" data-service="accounting">
                    <div class="service-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3>Financial Accounting</h3>
                    <p>Master core accounting principles with hands-on practice</p>
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
    </div>
    
    <!-- Lab Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <div class="section-badge">Our Lab</div>
                <h2>Experience Our State-of-the-Art Environment</h2>
                <p>Everything you need to succeed in one immersive space</p>
            </div>
            
            <div class="features-tabs" data-aos="fade-up" data-aos-delay="100">
                <div class="features-tab-nav">
                    <button class="tab-btn active" data-tab="equipment"><i class="fas fa-desktop"></i> Workstations</button>
                    <button class="tab-btn" data-tab="software"><i class="fas fa-laptop-code"></i> Software</button>
                    <button class="tab-btn" data-tab="collaboration"><i class="fas fa-users"></i> Collaboration</button>
                    <button class="tab-btn" data-tab="industry"><i class="fas fa-handshake"></i> Industry</button>
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
                                    <h3>High-Performance Workstations</h3>
                                    <p>Train on dual-monitor computers powerful enough to handle real business applications and simulations. Our networked environment enables seamless collaboration and mirrors professional workplace setups.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> Dual high-resolution monitors</li>
                                        <li><i class="fas fa-check-circle"></i> Powerful processors for business applications</li>
                                        <li><i class="fas fa-check-circle"></i> Networked environment for realistic workflow</li>
                                        <li><i class="fas fa-check-circle"></i> Ergonomic workspaces designed for productivity</li>
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
                                    <h3>Industry-Standard Software</h3>
                                    <p>Get hands-on with the same tools businesses actually use. Master these platforms before you even start your first job, gaining practical skills that employers value immediately.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> ERP Systems (SAP, Tally, Oracle)</li>
                                        <li><i class="fas fa-check-circle"></i> Data Analysis (Excel, Power BI)</li>
                                        <li><i class="fas fa-check-circle"></i> Accounting Software (TallyPrime)</li>
                                        <li><i class="fas fa-check-circle"></i> CRM Systems (Salesforce)</li>
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
                                    <h3>Interactive Learning Tools</h3>
                                    <p>Our cutting-edge collaboration tools foster teamwork and facilitate learning from industry experts. Develop the communication skills essential for today's collaborative business environment.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> Interactive whiteboards for group projects</li>
                                        <li><i class="fas fa-check-circle"></i> Video conferencing with industry experts</li>
                                        <li><i class="fas fa-check-circle"></i> Collaborative problem-solving spaces</li>
                                        <li><i class="fas fa-check-circle"></i> Digital presentation equipment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="industry">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div class="feature-image-container" data-aos="fade-left">
                                    <img src="images/industry.jpg" alt="Industry Connections" class="img-fluid feature-image">
                                    <div class="feature-shape feature-shape-2"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="feature-content" data-aos="fade-right">
                                    <h3>Industry Connections</h3>
                                    <p>Benefit from our extensive network of business partnerships that provide real-world opportunities. Make valuable connections that can jumpstart your career even before graduation.</p>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check-circle"></i> Guest lectures from industry leaders</li>
                                        <li><i class="fas fa-check-circle"></i> Internship opportunities with partner companies</li>
                                        <li><i class="fas fa-check-circle"></i> Networking events with professionals</li>
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
            
            <div class="testimonials-wrapper" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonials-grid">
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
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
                    
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
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
                    
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
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
                <h2>Get In Touch</h2>
                <p>Have questions about our business simulation lab? We're here to help.</p>
            </div>
            
            <div class="contact-container" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-card contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p>123 Business Avenue, Technology Park<br>Your City, ST 12345</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <p>+1 (234) 567-8901</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <p>info@commercelab.in</p>
                        </div>
                    </div>
                    
                    <div class="contact-divider"></div>
                    
                    <div class="contact-form">
                        <form action="php/send-contact.php" method="post" id="contactForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name *" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email *" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message *" required></textarea>
                            </div>
                            
                            <div class="g-recaptcha" data-sitekey="6LcKoCkrAAAAAN3Dsvc301-zz046ipFlEuHb_TVp"></div>
                            
                            <button type="submit" class="submit-btn">
                                <span class="submit-text">Send Message</span>
                                <span class="submit-icon"><i class="fas fa-paper-plane"></i></span>
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="contact-card cal-card">
                    <h3>Schedule a Meeting</h3>
                    <p>Book a consultation with one of our training advisors.</p>
                    <div class="cal-embed">
                        <!-- Cal.com inline embed code -->
                        <cal-inline-widget src="https://cal.com/commerce-lab/30min" style="min-width:320px;height:550px;"></cal-inline-widget>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contact-shape contact-shape-1"></div>
        <div class="contact-shape contact-shape-2"></div>
    </section>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="js/main.js"></script>
    
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            once: true,
            duration: 800,
            offset: 100,
            easing: 'ease-in-out'
        });
    </script>
</body>
</html> 