<!DOCTYPE html>
<html lang="<?php echo $currentLang ?? 'en'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Wincom - High-Speed Internet'; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <!-- Logo -->
                <a href="/" class="logo-link">
                    <div class="logo">
                        <div class="logo-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12.55a11.001 11.001 0 0 1 14.08 0" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M8.5 16.5a5.5 5.5 0 0 1 7 0" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="12" cy="20" r="1" fill="white"/>
                            </svg>
                        </div>
                        <div class="logo-text">
                            <span class="brand-name">Wincom</span>
                            <span class="brand-tagline">by inwi</span>
                        </div>
                    </div>
                </a>

                <!-- Navigation Menu -->
                <ul class="nav-menu">
                    <li><a href="#offers" class="nav-link"><?php echo t('header.plans'); ?></a></li>
                    <li><a href="/login.php" class="nav-link"><?php echo t('header.sign_in'); ?></a></li>
                </ul>

                <!-- Right Section -->
                <div class="nav-actions">
                    <!-- Dark Mode Toggle -->
                    <button class="icon-btn" id="darkModeToggle" aria-label="Toggle dark mode">
                        <svg class="theme-icon moon-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg class="theme-icon sun-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="2"/>
                            <line x1="12" y1="1" x2="12" y2="3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="12" y1="21" x2="12" y2="23" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="1" y1="12" x2="3" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="21" y1="12" x2="23" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>

                    <!-- Language Selector -->
                    <div class="language-selector">
                        <button class="icon-btn" id="langToggle">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            <span id="currentLang"><?php echo strtoupper($currentLang ?? 'en'); ?></span>
                        </button>
                        <div class="language-dropdown" id="langDropdown">
                            <button class="lang-option <?php echo ($currentLang ?? 'en') === 'en' ? 'active' : ''; ?>" data-lang="en">English</button>
                            <button class="lang-option <?php echo ($currentLang ?? 'en') === 'fr' ? 'active' : ''; ?>" data-lang="fr">Français</button>
                            <button class="lang-option <?php echo ($currentLang ?? 'en') === 'ar' ? 'active' : ''; ?>" data-lang="ar">العربية</button>
                        </div>
                    </div>

                    <!-- Get Started Button -->
                    <a href="/request.php" class="btn btn-primary"><?php echo t('header.get_started'); ?></a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>
