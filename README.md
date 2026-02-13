# ZST Technical Services Website

A professional, responsive website for ZST Technical Services L.L.C - a Dubai-based technical services company.

## Features

✅ **Fully Responsive** - Works seamlessly on desktop, tablet, and mobile devices
✅ **Modern Design** - Clean, professional aesthetic with smooth animations
✅ **SEO Optimized** - Proper meta tags and semantic HTML
✅ **Working Contact Forms** - Email integration using FormSubmit
✅ **Lightweight & Fast** - Optimized CSS and minimal JavaScript
✅ **Professional Color Scheme** - Based on company logo colors

## Pages Included

1. **Home** (`index.html`) - Hero section, services overview, features, contact form
2. **Services** (`services.html`) - Detailed service descriptions
3. **About** (`about.html`) - Company information and values
4. **Contact** (`contact.html`) - Contact information and form
5. **Privacy Policy** (`privacy-policy.html`) - Privacy policy
6. **Terms & Conditions** (`terms-conditions.html`) - Terms and conditions

## Technologies Used

- **HTML5** - Semantic markup
- **CSS3** - Modern styling with CSS Grid and Flexbox
- **Vanilla JavaScript** - No dependencies, lightweight
- **Google Fonts** - Montserrat & Inter font families
- **FormSubmit** - Contact form email delivery

## Setup Instructions

### 1. Upload to Web Server

Upload all files to your web server or hosting provider maintaining the folder structure:

```
/
├── index.html
├── services.html
├── about.html
├── contact.html
├── privacy-policy.html
├── terms-conditions.html
├── css/
│   ├── styles.css
│   └── pages.css
├── js/
│   └── main.js
└── assets/
    └── logo.png
```

### 2. Configure Contact Form

The contact forms are configured to send emails to `contact@zsttechnicalsservices.com`.

**To activate the forms:**

1. Go to [FormSubmit.co](https://formsubmit.co/)
2. The first time someone submits a form, FormSubmit will send a confirmation email to `contact@zsttechnicalsservices.com`
3. Click the confirmation link in that email
4. Forms will then work automatically!

**Alternative:** You can replace the FormSubmit URLs in `js/main.js` with your own backend or form service.

### 3. Update Domain

Replace `zsttechnicalsservices.com` references if you use a different domain.

## Customization

### Colors

Colors are defined as CSS variables in `css/styles.css`:

```css
:root {
    --primary-color: #1D4E6F;  /* Navy blue from logo */
    --accent-color: #FF8C42;   /* Orange accent */
    /* ... */
}
```

### Content

- Edit HTML files directly to update content
- Images can be added to the `assets/` folder
- Company information is in the footer of each page

### Fonts

Current fonts:
- **Montserrat** - Headings (professional, bold)
- **Inter** - Body text (clean, readable)

To change fonts, update the Google Fonts link in the `<head>` section.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance

- Lightweight (< 100KB total page weight without images)
- No external dependencies except Google Fonts
- Optimized CSS with minimal specificity
- Efficient JavaScript with event delegation

## Contact Information

**Company:** ZST Technical Services L.L.C  
**Phone:** +971 58 215 8545  
**Email:** contact@zsttechnicalsservices.com  
**Website:** zsttechnicalsservices.com  
**Location:** Dubai, United Arab Emirates  
**License No:** 1567032

## License

© 2025 ZST Technical Services L.L.C. All rights reserved.

---

**Need help?** Contact us at contact@zsttechnicalsservices.com
