# Wincom - High-Speed Internet Landing Page

A modern, responsive landing page for Wincom internet service provider built with PHP.

## Project Structure

```
inwi-projet/
├── layout/
│   ├── header.php          # Reusable header with navigation
│   └── footer.php          # Footer layout
├── assets/
│   ├── css/
│   │   └── style.css       # Main stylesheet
│   └── js/
│       └── main.js         # JavaScript functionality
├── index.php               # Main landing page with hero section
└── README.md
```

## Features

- ✨ Modern, responsive design with glassmorphism effects
- 🎨 Beautiful gradient hero section with animated floating elements
- 📱 Fully responsive mobile-friendly navigation
- 🌓 Dark mode toggle with icon switching
- 🌍 Multi-language selector (English, Français, العربية)
- 📊 Animated statistics section with scroll-triggered animations
- 🌊 Wave divider with SVG shapes
- ⚡ Smooth scroll navigation
- 🎭 Parallax scrolling effects
- 💫 Hover animations and transformations
- ♿ Accessible markup and ARIA labels

## Setup

1. Make sure you have PHP installed on your system
2. Clone or download this project
3. Run a local PHP server:

```bash
php -S localhost:8000
```

4. Open your browser and navigate to `http://localhost:8000`

## Customization

### Changing Colors

Edit the CSS variables in `assets/css/style.css`:

```css
:root {
    --primary-color: #7c3aed;
    --primary-dark: #6d28d9;
    /* ... other variables */
}
```

### Updating Navigation Links

Edit the navigation menu in `layout/header.php`:

```php
<ul class="nav-menu">
    <li><a href="/plans" class="nav-link">Plans</a></li>
    <!-- Add or modify links here -->
</ul>
```

### Modifying Hero Content

Edit the hero section in `index.php`:

```php
<h1 class="hero-title">
    Your Custom Title
</h1>
```

## Technologies Used

- PHP 7.4+
- HTML5
- CSS3 (with CSS Grid and Flexbox)
- Vanilla JavaScript
- Google Fonts (Inter)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

MIT License - feel free to use this project for your own purposes.
