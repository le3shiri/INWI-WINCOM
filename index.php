<?php
require_once 'config/lang.php';
$pageTitle = 'Wincom - Experience the Future of High-Speed Internet';
include 'layout/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <!-- Animated Background -->
    <div class="hero-background">
        <div class="hero-gradient-bg"></div>
        <div class="hero-mesh-gradient"></div>
        <div class="hero-background-image"></div>
        <div class="hero-overlay"></div>
    </div>
    
    <!-- Animated Particles -->
    <div class="particles-container">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <!-- Floating Decorative Elements -->
    <div class="floating-elements">
        <div class="float-circle float-1"></div>
        <div class="float-circle float-2"></div>
        <div class="float-circle float-3"></div>
        <div class="float-circle float-4"></div>
        <div class="float-circle float-5"></div>
    </div>
    
    <!-- Geometric Shapes -->
    <div class="geometric-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
    
    <div class="container">
        <div class="hero-content">
            <!-- Award Badge with Animation -->
            <div class="award-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="currentColor"/>
                </svg>
                <span class="badge-text"><?php echo t('hero.badge'); ?></span>
            </div>

            <!-- Main Heading with Typing Effect -->
            <h1 class="hero-title">
                <?php echo t('hero.title_1'); ?>
                <span class="gradient-text">
                    <span class="text-wrapper"><?php echo t('hero.title_2'); ?></span>
                </span>
            </h1>

            <!-- Subtitle with Fade Animation -->
            <p class="hero-subtitle">
                <?php echo t('hero.subtitle_1'); ?> <span class="highlight-number">500,000</span> <?php echo t('hero.subtitle_2'); ?><br>
                <?php echo t('hero.subtitle_3'); ?>
            </p>

            <!-- Enhanced CTA Buttons -->
            <div class="hero-actions">
                <a href="/request.php" class="btn btn-white btn-enhanced">
                    <span class="btn-text"><?php echo t('hero.cta_primary'); ?></span>
                    <span class="btn-shine"></span>
                    <svg class="btn-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="#offers" class="btn btn-outline btn-enhanced">
                    <span class="btn-text"><?php echo t('hero.cta_secondary'); ?></span>
                    <span class="btn-glow"></span>
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="trust-indicators">
                <div class="trust-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span><?php echo t('hero.trust_1'); ?></span>
                </div>
                <div class="trust-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span><?php echo t('hero.trust_2'); ?></span>
                </div>
                <div class="trust-item">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 18v-6a9 9 0 0 1 18 0v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3v5zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3v5z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span><?php echo t('hero.trust_3'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Animated Wave Divider -->
    <div class="wave-divider">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 Q300,80 600,60 T1200,40 L1200,120 L0,120 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="stat-number">500K+</div>
                <div class="stat-label"><?php echo t('stats.customers_title'); ?></div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="stat-number">99.9%</div>
                <div class="stat-label"><?php echo t('stats.uptime_title'); ?></div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12.55a11.001 11.001 0 0 1 14.08 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M8.5 16.5a5.5 5.5 0 0 1 7 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="12" cy="20" r="1" fill="currentColor"/>
                    </svg>
                </div>
                <div class="stat-number">1 Gbps</div>
                <div class="stat-label"><?php echo t('stats.speed_title'); ?></div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="currentColor"/>
                    </svg>
                </div>
                <div class="stat-number">4.9/5</div>
                <div class="stat-label"><?php echo t('stats.support_title'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section" id="offers">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="section-badge"><?php echo t('pricing.badge'); ?></div>
            <h2 class="section-title"><?php echo t('pricing.title'); ?></h2>
            <p class="section-description">
                <?php echo t('pricing.subtitle'); ?>
            </p>
        </div>

        <!-- Pricing Cards Grid -->
        <div class="pricing-grid">
            <!-- Basic Plan -->
            <div class="pricing-card">
                <div class="pricing-card-image">
                    <div class="plan-image plan-basic"></div>
                </div>
                <div class="pricing-card-content">
                    <h3 class="plan-name"><?php echo t('pricing.basic_name'); ?></h3>
                    <p class="plan-description">
                        <?php echo t('pricing.basic_desc'); ?>
                    </p>
                    <div class="plan-price">
                        <span class="price-amount">$29.99</span>
                        <span class="price-period"><?php echo t('pricing.per_month'); ?></span>
                    </div>
                    <ul class="plan-features">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.basic_speed'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.basic_data'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.basic_router'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.basic_support'); ?></span>
                        </li>
                    </ul>
                    <a href="/offer-details.php?plan=basic" class="plan-button"><?php echo t('pricing.view_details'); ?></a>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="pricing-card featured">
                <div class="featured-badge"><?php echo t('pricing.most_popular'); ?></div>
                <div class="pricing-card-image">
                    <div class="plan-image plan-premium"></div>
                </div>
                <div class="pricing-card-content">
                    <h3 class="plan-name"><?php echo t('pricing.premium_name'); ?></h3>
                    <p class="plan-description">
                        <?php echo t('pricing.premium_desc'); ?>
                    </p>
                    <div class="plan-price">
                        <span class="price-amount">$49.99</span>
                        <span class="price-period"><?php echo t('pricing.per_month'); ?></span>
                    </div>
                    <ul class="plan-features">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.premium_speed'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.premium_data'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.premium_router'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.premium_support'); ?></span>
                        </li>
                    </ul>
                    <a href="/offer-details.php?plan=premium" class="plan-button"><?php echo t('pricing.view_details'); ?></a>
                </div>
            </div>

            <!-- Ultimate Plan -->
            <div class="pricing-card">
                <div class="pricing-card-image">
                    <div class="plan-image plan-ultimate"></div>
                </div>
                <div class="pricing-card-content">
                    <h3 class="plan-name"><?php echo t('pricing.ultimate_name'); ?></h3>
                    <p class="plan-description">
                        <?php echo t('pricing.ultimate_desc'); ?>
                    </p>
                    <div class="plan-price">
                        <span class="price-amount">$79.99</span>
                        <span class="price-period"><?php echo t('pricing.per_month'); ?></span>
                    </div>
                    <ul class="plan-features">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.ultimate_speed'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.ultimate_data'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.ultimate_router'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.ultimate_support'); ?></span>
                        </li>
                    </ul>
                    <a href="/offer-details.php?plan=ultimate" class="plan-button"><?php echo t('pricing.view_details'); ?></a>
                </div>
            </div>

            <!-- Business Plan -->
            <div class="pricing-card">
                <div class="pricing-card-image">
                    <div class="plan-image plan-business"></div>
                </div>
                <div class="pricing-card-content">
                    <h3 class="plan-name"><?php echo t('pricing.business_name'); ?></h3>
                    <p class="plan-description">
                        <?php echo t('pricing.business_desc'); ?>
                    </p>
                    <div class="plan-price">
                        <span class="price-amount">$129.99</span>
                        <span class="price-period"><?php echo t('pricing.per_month'); ?></span>
                    </div>
                    <ul class="plan-features">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.business_speed'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.business_data'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.business_equipment'); ?></span>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><?php echo t('pricing.business_support'); ?></span>
                        </li>
                    </ul>
                    <a href="/offer-details.php?plan=business" class="plan-button"><?php echo t('pricing.view_details'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="features-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="section-badge"><?php echo t('features.badge'); ?></div>
            <h2 class="section-title"><?php echo t('features.title'); ?></h2>
            <p class="section-description">
                <?php echo t('features.title'); ?>
            </p>
        </div>

        <!-- Features Grid -->
        <div class="features-grid">
            <!-- Lightning Speed -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12.55a11.001 11.001 0 0 1 14.08 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M8.5 16.5a5.5 5.5 0 0 1 7 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="12" cy="20" r="1" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php echo t('features.feature_1_title'); ?></h3>
                <p class="feature-description">
                    <?php echo t('features.feature_1_desc'); ?>
                </p>
            </div>

            <!-- 99.9% Uptime -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php echo t('features.feature_2_title'); ?></h3>
                <p class="feature-description">
                    <?php echo t('features.feature_2_desc'); ?>
                </p>
            </div>

            <!-- 24/7 Support -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 18v-6a9 9 0 0 1 18 0v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3v5zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3v5z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php echo t('features.feature_3_title'); ?></h3>
                <p class="feature-description">
                    <?php echo t('features.feature_3_desc'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="section-badge"><?php echo t('testimonials.badge'); ?></div>
            <h2 class="section-title"><?php echo t('testimonials.title'); ?></h2>
        </div>

        <!-- Testimonials Grid -->
        <div class="testimonials-grid">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="testimonial-stars">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <p class="testimonial-text">
                    "<?php echo t('testimonials.customer_1_text'); ?>"
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">JD</div>
                    <div class="author-info">
                        <div class="author-name"><?php echo t('testimonials.customer_1_name'); ?></div>
                        <div class="author-role"><?php echo t('testimonials.customer_1_role'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="testimonial-stars">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <p class="testimonial-text">
                    "<?php echo t('testimonials.customer_2_text'); ?>"
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">SM</div>
                    <div class="author-info">
                        <div class="author-name"><?php echo t('testimonials.customer_2_name'); ?></div>
                        <div class="author-role"><?php echo t('testimonials.customer_2_role'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div class="testimonial-stars">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <p class="testimonial-text">
                    "<?php echo t('testimonials.customer_3_text'); ?>"
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">MC</div>
                    <div class="author-info">
                        <div class="author-name"><?php echo t('testimonials.customer_3_name'); ?></div>
                        <div class="author-role"><?php echo t('testimonials.customer_3_role'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'layout/footer.php'; ?>
