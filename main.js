// ==================== MOBILE NAVIGATION ====================
const navMenu = document.getElementById('nav-menu');
const navToggle = document.getElementById('nav-toggle');
const navClose = document.getElementById('nav-close');
const navLinks = document.querySelectorAll('.nav__link');

// Show menu
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu');
    });
}

// Hide menu
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
    });
}

// Close menu when clicking on nav links
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
    });
});

// ==================== ACTIVE LINK ====================
function setActiveLink() {
    const sections = document.querySelectorAll('section[id]');
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 100;
        const sectionId = current.getAttribute('id');
        const navLink = document.querySelector(`.nav__link[href*="${sectionId}"]`);

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            if (navLink) {
                navLink.classList.add('active');
            }
        } else {
            if (navLink) {
                navLink.classList.remove('active');
            }
        }
    });
}

window.addEventListener('scroll', setActiveLink);

// ==================== HEADER SHADOW ON SCROLL ====================
function scrollHeader() {
    const header = document.getElementById('header');
    if (this.scrollY >= 50) {
        header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.boxShadow = '0 1px 3px 0 rgba(0, 0, 0, 0.1)';
    }
}

window.addEventListener('scroll', scrollHeader);

// ==================== CONTACT FORM - HOME PAGE ====================
const homeContactForm = document.getElementById('home-contact-form');

if (homeContactForm) {
    homeContactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            message: document.getElementById('message').value
        };
        
        // Send email using FormSubmit or similar service
        try {
            const response = await fetch('https://formsubmit.co/ajax/contact@zsttechnicalsservices.com', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: formData.name,
                    email: formData.email,
                    phone: formData.phone,
                    message: formData.message,
                    _subject: `New Contact Form Submission from ${formData.name}`,
                    _template: 'table'
                })
            });
            
            const result = await response.json();
            
            if (response.ok) {
                showFormMessage('success', 'Thank you! Your message has been sent successfully. We will contact you soon.');
                homeContactForm.reset();
            } else {
                throw new Error('Form submission failed');
            }
        } catch (error) {
            showFormMessage('error', 'Sorry, there was an error sending your message. Please try again or call us directly.');
        }
    });
}

// ==================== CONTACT FORM - CONTACT PAGE ====================
const contactPageForm = document.getElementById('contact-page-form');

if (contactPageForm) {
    contactPageForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = {
            name: document.getElementById('contact-name').value,
            email: document.getElementById('contact-email').value,
            phone: document.getElementById('contact-phone').value,
            service: document.getElementById('contact-service').value,
            message: document.getElementById('contact-message').value
        };
        
        try {
            const response = await fetch('https://formsubmit.co/ajax/contact@zsttechnicalsservices.com', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: formData.name,
                    email: formData.email,
                    phone: formData.phone,
                    service: formData.service,
                    message: formData.message,
                    _subject: `New Contact Request - ${formData.service}`,
                    _template: 'table'
                })
            });
            
            const result = await response.json();
            
            if (response.ok) {
                showFormMessage('success', 'Thank you for contacting us! We will get back to you within 24 hours.', 'contact-form-message');
                contactPageForm.reset();
            } else {
                throw new Error('Form submission failed');
            }
        } catch (error) {
            showFormMessage('error', 'There was an error submitting your request. Please call us at +971 58 215 8545.', 'contact-form-message');
        }
    });
}

// ==================== FORM MESSAGE HELPER ====================
function showFormMessage(type, message, elementId = 'form-message') {
    const messageElement = document.getElementById(elementId);
    if (messageElement) {
        messageElement.textContent = message;
        messageElement.className = `form-message ${type}`;
        
        // Auto-hide success message after 5 seconds
        if (type === 'success') {
            setTimeout(() => {
                messageElement.style.display = 'none';
            }, 5000);
        }
    }
}

// ==================== SMOOTH SCROLL ====================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }
    });
});

// ==================== SCROLL REVEAL ANIMATION ====================
function reveal() {
    const reveals = document.querySelectorAll('.service-card, .stat-card, .feature');
    
    reveals.forEach(element => {
        const windowHeight = window.innerHeight;
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < windowHeight - elementVisible) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
}

// Initial state for reveal elements
document.querySelectorAll('.service-card, .stat-card, .feature').forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(30px)';
    element.style.transition = 'all 0.6s ease';
});

window.addEventListener('scroll', reveal);
reveal(); // Call on load

// ==================== COUNTER ANIMATION ====================
function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);
    
    const timer = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.textContent = target + (element.dataset.suffix || '');
            clearInterval(timer);
        } else {
            element.textContent = Math.ceil(start) + (element.dataset.suffix || '');
        }
    }, 16);
}

// Initialize counters when they come into view
const counters = document.querySelectorAll('.stat-card__number');
let countersAnimated = false;

function checkCounters() {
    if (countersAnimated) return;
    
    counters.forEach(counter => {
        const rect = counter.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;
        
        if (isVisible) {
            const target = parseInt(counter.textContent);
            const suffix = counter.textContent.replace(/[0-9]/g, '');
            counter.dataset.suffix = suffix;
            animateCounter(counter, target);
            countersAnimated = true;
        }
    });
}

window.addEventListener('scroll', checkCounters);
checkCounters();

// ==================== UTILITY FUNCTIONS ====================
// Get current year for footer
const yearElement = document.querySelector('.footer__bottom p');
if (yearElement) {
    const currentYear = new Date().getFullYear();
    yearElement.textContent = yearElement.textContent.replace('2025', currentYear);
}

// Prevent form resubmission on page refresh
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

console.log('ZST Technical Services - Website Loaded Successfully');
