<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ZST Technical Services - Professional building maintenance, plumbing, electrical, HVAC, and construction services in Dubai, UAE">
    <meta name="keywords" content="building maintenance dubai, plumbing services uae, electrical services, HVAC installation, painting contractor dubai">
    <title>ZST Technicals Services LLC- Professional Technical Services in Dubai</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header/Navigation -->
    
    <?php include "assets/header.php" ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero__container container">
            <div class="hero__content">
                <span class="hero__subtitle">Excellence in Technical Services</span>
                <h1 class="hero__title">
                    Building Tomorrow's
                    <span class="highlight">Infrastructure</span>
                    Today
                </h1>
                <p class="hero__description">
                    Professional technical services for construction, maintenance, and facility management across Dubai and the UAE. Your trusted partner for quality workmanship.
                </p>
                <div class="hero__buttons">
                    <a href="services" class="btn btn--primary">Our Services</a>
                    <a href="contact" class="btn btn--outline">Get Quote</a>
                </div>
            </div>
            <div class="hero__image">
                <div class="hero__shape">
                    <img src="assets/img/banner.png">
                </div>
            </div>
        </div>
        <div class="hero__scroll">
            <span>Scroll Down</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="services-home section" id="services">
        <div class="container">
            <div class="section__header">
                <span class="section__subtitle">What We Do</span>
                <h2 class="section__title">Comprehensive Technical Solutions</h2>
            </div>
            
            <div class="services__grid">
                <div class="service-card">
                    <div class="service-card__icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                            <line x1="9" y1="3" x2="9" y2="21"></line>
                        </svg>
                    </div>
                    <h3 class="service-card__title">Building Maintenance</h3>
                    <p class="service-card__description">Complete building maintenance solutions to keep your property in prime condition year-round.</p>
                    <a href="services#building-maintenance" class="service-card__link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="18" x2="12" y2="12"></line>
                            <line x1="9" y1="15" x2="15" y2="15"></line>
                        </svg>
                    </div>
                    <h3 class="service-card__title">Plumbing & Sanitary</h3>
                    <p class="service-card__description">Expert plumbing installation and maintenance services for residential and commercial properties.</p>
                    <a href="services#plumbing" class="service-card__link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="service-card__title">Electrical Services</h3>
                    <p class="service-card__description">Comprehensive electrical installation, repair, and maintenance for safe, efficient systems.</p>
                    <a href="services#electrical" class="service-card__link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>
                        </svg>
                    </div>
                    <h3 class="service-card__title">HVAC Systems</h3>
                    <p class="service-card__description">Air conditioning, ventilation, and air filtration systems installation and maintenance.</p>
                    <a href="services#hvac" class="service-card__link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M2 12h20"></path>
                            <path d="M20 12c0 4.418-3.582 8-8 8s-8-3.582-8-8"></path>
                        </svg>
                    </div>
                    <h3 class="service-card__title">Painting Contracting</h3>
                    <p class="service-card__description">Professional painting services for interior and exterior applications with premium finishes.</p>
                    <a href="services#painting" class="service-card__link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-card__icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="10" rx="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <h3 class="service-card__title">Glass & Aluminum</h3>
                    <p class="service-card__description">Installation and maintenance of glass and aluminum fixtures for modern building solutions.</p>
                    <a href="services#glass-aluminum" class="service-card__link">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose section section--alt">
        <div class="container">
            <div class="why-choose__grid">
                <div class="why-choose__content">
                    <span class="section__subtitle">Why ZST Technical Services</span>
                    <h2 class="section__title">Your Trusted Partner in Dubai</h2>
                    <p class="why-choose__text">
                        With years of experience serving Dubai and the UAE, ZST Technical Services has built a reputation for excellence, reliability, and professional craftsmanship.
                    </p>
                    
                    <div class="features">
                        <div class="feature">
                            <div class="feature__icon">✓</div>
                            <div class="feature__content">
                                <h4>Licensed & Certified</h4>
                                <p>Fully licensed by Dubai Department of Economic Development</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature__icon">✓</div>
                            <div class="feature__content">
                                <h4>Experienced Team</h4>
                                <p>Skilled professionals with extensive industry experience</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature__icon">✓</div>
                            <div class="feature__content">
                                <h4>Quality Guaranteed</h4>
                                <p>Premium materials and workmanship on every project</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature__icon">✓</div>
                            <div class="feature__content">
                                <h4>24/7 Support</h4>
                                <p>Round-the-clock customer support for emergencies</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="about.html" class="btn btn--primary">Learn More About Us</a>
                </div>
                
                <div class="why-choose__stats">
                    <div class="stat-card">
                        <div class="stat-card__number">500+</div>
                        <div class="stat-card__label">Projects Completed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-card__number">100%</div>
                        <div class="stat-card__label">Client Satisfaction</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-card__number">24/7</div>
                        <div class="stat-card__label">Available Support</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-card__number">5+</div>
                        <div class="stat-card__label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="cta-section section">
        <div class="container">
            <div class="cta">
                <div class="cta__content">
                    <h2 class="cta__title">Ready to Get Started?</h2>
                    <p class="cta__description">Contact us today for a free consultation and quote for your project</p>
                </div>
                <div class="cta__form">
                    <form class="contact-form-mini" id="home-contact-form">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="How can we help?" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn--primary btn--full">Send Message</button>
                    </form>
                    <div id="form-message" class="form-message"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
     <?php include "assets/footer.php" ?>

    <script src="js/main.js"></script>
</body>
</html>
