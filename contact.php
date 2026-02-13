<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact ZST Technical Services for professional building maintenance and technical services in Dubai">
    <title>Contact Us - ZST Technical Services Dubai</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.html" class="nav__logo">
                <img src="assets/logo.png" alt="ZST Technical Services Logo" class="logo-img">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="services.html" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="contact.html" class="nav__link active">Contact</a></li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </div>
        </nav>
    </header>

    <section class="page-hero">
        <div class="container">
            <div class="page-hero__content">
                <h1 class="page-hero__title">Contact Us</h1>
                <p class="page-hero__description">Get in touch with our team for professional technical services</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="contact-info-grid">
                <div class="contact-info-card">
                    <div class="contact-info-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <h3 class="contact-info-card__title">Phone</h3>
                    <p class="contact-info-card__value"><a href="tel:+971582158545">+971 58 215 8545</a></p>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <h3 class="contact-info-card__title">Email</h3>
                    <p class="contact-info-card__value"><a href="mailto:contact@zsttechnicalsservices.com">contact@zsttechnicalsservices.com</a></p>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-card__icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3 class="contact-info-card__title">Location</h3>
                    <p class="contact-info-card__value">Dubai, United Arab Emirates</p>
                </div>
            </div>

            <div class="contact-form-section">
                <h2>Send Us a Message</h2>
                <form class="contact-form" id="contact-page-form">
                    <div class="form-group">
                        <input type="text" id="contact-name" name="name" placeholder="Your Name *" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="contact-email" name="email" placeholder="Your Email *" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="contact-phone" name="phone" placeholder="Phone Number *" required>
                    </div>
                    <div class="form-group">
                        <select id="contact-service" name="service" required>
                            <option value="">Select Service *</option>
                            <option value="Building Maintenance">Building Maintenance</option>
                            <option value="Plumbing & Sanitary">Plumbing & Sanitary</option>
                            <option value="Electrical Services">Electrical Services</option>
                            <option value="HVAC Systems">HVAC Systems</option>
                            <option value="Painting">Painting</option>
                            <option value="Carpentry">Carpentry</option>
                            <option value="Glass & Aluminum">Glass & Aluminum</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="contact-message" name="message" placeholder="Your Message *" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn--primary btn--full">Send Message</button>
                </form>
                <div id="contact-form-message" class="form-message"></div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <img src="assets/logo.png" alt="ZST Technical Services" class="footer__logo">
                    <p class="footer__description">Professional technical services for building maintenance, construction, and facility management in Dubai and the UAE.</p>
                </div>
                <div class="footer__col">
                    <h4 class="footer__title">Quick Links</h4>
                    <ul class="footer__links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h4 class="footer__title">Services</h4>
                    <ul class="footer__links">
                        <li><a href="services.html#building-maintenance">Building Maintenance</a></li>
                        <li><a href="services.html#plumbing">Plumbing Services</a></li>
                        <li><a href="services.html#electrical">Electrical Services</a></li>
                        <li><a href="services.html#hvac">HVAC Systems</a></li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h4 class="footer__title">Contact Info</h4>
                    <ul class="footer__contact">
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <a href="tel:+971582158545">+971 58 215 8545</a>
                        </li>
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <a href="mailto:contact@zsttechnicalsservices.com">contact@zsttechnicalsservices.com</a>
                        </li>
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>Dubai, United Arab Emirates</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom">
                <p>&copy; 2025 ZST Technical Services L.L.C. All rights reserved.</p>
                <div class="footer__legal">
                    <a href="privacy-policy.html">Privacy Policy</a>
                    <a href="terms-conditions.html">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
