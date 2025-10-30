<?php
// Get plan ID from URL (default to premium if not specified)
$planId = $_GET['plan'] ?? 'premium';

// Plan data (will be from database later)
$plans = [
    'basic' => [
        'name' => 'Basic Plan',
        'price' => '29.99',
        'speed' => '100 Mbps',
        'download' => '100 Mbps',
        'upload' => '50 Mbps',
        'data' => 'Unlimited',
        'description' => 'Perfect for light internet users, streaming, and casual browsing. Ideal for small households with 1-2 devices.',
        'features' => [
            'Up to 100 Mbps download speed',
            '50 Mbps upload speed',
            'Unlimited data usage',
            'Free router included',
            '24/7 customer support',
            'No contracts - cancel anytime',
            'Easy self-installation',
            'WiFi 5 router included'
        ],
        'ideal_for' => [
            'Small apartments or homes',
            '1-2 users',
            'Streaming in HD',
            'Web browsing and email',
            'Social media usage',
            'Light online gaming'
        ],
        'color' => '#3b82f6'
    ],
    'premium' => [
        'name' => 'Premium Plan',
        'price' => '49.99',
        'speed' => '500 Mbps',
        'download' => '500 Mbps',
        'upload' => '100 Mbps',
        'data' => 'Unlimited',
        'description' => 'Our most popular plan! Perfect for families and power users who need reliable, fast internet for streaming, gaming, and working from home.',
        'features' => [
            'Up to 500 Mbps download speed',
            '100 Mbps upload speed',
            'Unlimited data usage',
            'Premium WiFi 6 router included',
            'Priority customer support',
            'No contracts - cancel anytime',
            'Professional installation included',
            'Advanced security features',
            'Parental controls',
            'Guest WiFi network'
        ],
        'ideal_for' => [
            'Medium to large families',
            '3-5 users',
            'Multiple 4K streaming',
            'Online gaming',
            'Video conferencing',
            'Smart home devices',
            'Remote work'
        ],
        'color' => '#ff33da',
        'featured' => true
    ],
    'ultimate' => [
        'name' => 'Ultimate Plan',
        'price' => '79.99',
        'speed' => '1 Gbps',
        'download' => '1000 Mbps',
        'upload' => '200 Mbps',
        'data' => 'Unlimited',
        'description' => 'Experience lightning-fast speeds with our Ultimate Plan. Perfect for tech enthusiasts, large families, and those who demand the absolute best performance.',
        'features' => [
            'Up to 1 Gbps (1000 Mbps) download speed',
            '200 Mbps upload speed',
            'Unlimited data usage',
            'WiFi 6E router included',
            'VIP customer support',
            'No contracts - cancel anytime',
            'Professional installation included',
            'Advanced security suite',
            'Whole-home mesh WiFi available',
            'Cloud backup service (100GB)',
            'Static IP address available'
        ],
        'ideal_for' => [
            'Large families',
            '5+ users',
            'Multiple 4K/8K streaming',
            'Competitive online gaming',
            'Content creation & streaming',
            '4K video conferencing',
            'Large file downloads',
            'Smart home with many devices'
        ],
        'color' => '#8b5cf6'
    ],
    'business' => [
        'name' => 'Business Plan',
        'price' => '149.99',
        'speed' => '2 Gbps',
        'download' => '2000 Mbps',
        'upload' => '500 Mbps',
        'data' => 'Unlimited',
        'description' => 'Enterprise-grade internet designed for businesses. Get the speed, reliability, and support your business needs to succeed.',
        'features' => [
            'Up to 2 Gbps (2000 Mbps) download speed',
            '500 Mbps upload speed',
            'Unlimited data usage',
            'Business-grade equipment',
            'Dedicated account manager',
            'SLA guarantee (99.9% uptime)',
            'Priority installation & support',
            'Advanced security & firewall',
            'Static IP addresses (5 included)',
            'Cloud backup service (1TB)',
            'VPN service included',
            'Business email hosting',
            '24/7 priority technical support'
        ],
        'ideal_for' => [
            'Small to medium businesses',
            'Offices with 10+ employees',
            'Multiple video conferences',
            'Cloud-based applications',
            'VoIP phone systems',
            'Large file transfers',
            'E-commerce platforms',
            'Content creators'
        ],
        'color' => '#f59e0b'
    ]
];

$plan = $plans[$planId] ?? $plans['premium'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $plan['name']; ?> - Wincom Internet Plans</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        .offer-details-page {
            padding-top: 80px;
            min-height: 100vh;
            background: #f5f5f5;
        }
        
        /* Hero Section */
        .offer-hero {
            background: #0a0a0a;
            color: white;
            padding: 0;
            position: relative;
            overflow: hidden;
            margin: 20px;
            border-radius: 24px;
        }
        
        .offer-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 51, 218, 0.1) 0%, rgba(59, 130, 246, 0.1) 50%, rgba(16, 185, 129, 0.1) 100%);
            z-index: 1;
        }
        
        /* Fiber Optic Lines Background */
        .fiber-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                linear-gradient(45deg, transparent 48%, rgba(255, 51, 218, 0.3) 49%, rgba(255, 51, 218, 0.3) 51%, transparent 52%),
                linear-gradient(-45deg, transparent 48%, rgba(59, 130, 246, 0.3) 49%, rgba(59, 130, 246, 0.3) 51%, transparent 52%),
                linear-gradient(25deg, transparent 48%, rgba(16, 185, 129, 0.2) 49%, rgba(16, 185, 129, 0.2) 51%, transparent 52%),
                linear-gradient(-25deg, transparent 48%, rgba(245, 158, 11, 0.2) 49%, rgba(245, 158, 11, 0.2) 51%, transparent 52%),
                linear-gradient(70deg, transparent 48%, rgba(139, 92, 246, 0.2) 49%, rgba(139, 92, 246, 0.2) 51%, transparent 52%);
            background-size: 100px 100px, 100px 100px, 150px 150px, 120px 120px, 130px 130px;
            background-position: 0 0, 0 0, 50px 50px, 30px 30px, 70px 70px;
            opacity: 0.4;
            animation: fiberMove 20s linear infinite;
        }
        
        @keyframes fiberMove {
            0% { background-position: 0 0, 0 0, 50px 50px, 30px 30px, 70px 70px; }
            100% { background-position: 100px 100px, -100px -100px, 150px 150px, 120px 120px, 130px 130px; }
        }
        
        .offer-hero-content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 3;
            padding: 60px 40px;
        }
        
        .back-to-plans {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.2s ease;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }
        
        .back-to-plans:hover {
            color: white;
            transform: translateX(-4px);
        }
        
        <?php if (isset($plan['featured'])): ?>
        .popular-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        <?php endif; ?>
        
        .offer-title {
            font-size: 56px;
            font-weight: 900;
            margin-bottom: 12px;
            max-width: 600px;
        }
        
        .offer-price {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 12px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .offer-description {
            font-size: 15px;
            opacity: 0.8;
            max-width: 600px;
            line-height: 1.6;
            margin-bottom: 32px;
        }
        
        /* Key Stats Cards */
        .key-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 32px;
        }
        
        .stat-card-mini {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 24px 20px;
            border-radius: 16px;
            text-align: center;
        }
        
        .stat-icon-box {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
        }
        
        .stat-label {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 4px;
        }
        
        .stat-value {
            font-size: 18px;
            font-weight: 700;
            color: white;
        }
        
        /* Content Section */
        .offer-content {
            max-width: 1200px;
            margin: -40px auto 0;
            padding: 0 20px 80px;
            position: relative;
            z-index: 2;
        }
        
        .content-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
            margin-bottom: 40px;
        }
        
        .main-content {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        
        .content-card {
            background: white;
            padding: 48px;
            border-radius: 20px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
            border: 1px solid #e5e7eb;
        }
        
        .card-title {
            font-size: 22px;
            font-weight: 700;
            color: #0a0a0a;
            margin-bottom: 32px;
        }
        
        .features-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0;
        }
        
        .feature-icon {
            width: 28px;
            height: 28px;
            background: #e5e7eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0a0a0a;
            flex-shrink: 0;
        }
        
        .feature-text {
            flex: 1;
            font-size: 14px;
            color: #0a0a0a;
            font-weight: 500;
        }
        
        /* Info Boxes */
        .info-boxes {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }
        
        .info-box {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            padding: 20px;
            border-radius: 12px;
        }
        
        .info-box-icon {
            width: 24px;
            height: 24px;
            margin-bottom: 12px;
        }
        
        .info-box-title {
            font-size: 15px;
            font-weight: 700;
            color: #0a0a0a;
            margin-bottom: 4px;
        }
        
        .info-box-text {
            font-size: 13px;
            color: #6b7280;
            line-height: 1.4;
        }
        
        /* CTA Buttons */
        .cta-buttons {
            display: flex;
            gap: 12px;
            margin-bottom: 40px;
        }
        
        .btn-primary {
            flex: 1;
            background: linear-gradient(135deg, #ff33da 0%, #e91ec7 100%);
            color: white;
            padding: 18px 32px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(255, 51, 218, 0.3);
        }
        
        .btn-secondary {
            background: white;
            color: #0a0a0a;
            padding: 18px 32px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
        }
        
        .btn-secondary:hover {
            border-color: #ff33da;
            color: #ff33da;
        }
        
        /* Why Choose Section */
        .why-choose-section {
            background: #f9fafb;
            padding: 40px;
            border-radius: 20px;
            border: 1px solid #e5e7eb;
            margin-bottom: 40px;
        }
        
        .why-choose-icon {
            width: 48px;
            height: 48px;
            background: #ff33da;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 16px;
        }
        
        .why-choose-title {
            font-size: 20px;
            font-weight: 700;
            color: #0a0a0a;
            margin-bottom: 12px;
        }
        
        .why-choose-text {
            font-size: 14px;
            color: #6b7280;
            line-height: 1.7;
        }
        
        /* Comparison Section */
        .comparison-section {
            background: white;
            padding: 60px 20px;
            margin-top: 40px;
        }
        
        .comparison-content {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title {
            font-size: 32px;
            font-weight: 700;
            color: #1f2937;
            text-align: center;
            margin-bottom: 48px;
        }
        
        .plans-comparison {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }
        
        .comparison-card {
            padding: 32px 24px;
            border: 2px solid #e5e7eb;
            border-radius: 16px;
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
        }
        
        .comparison-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
            border-color: #ff33da;
        }
        
        .comparison-plan-name {
            font-size: 20px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 12px;
        }
        
        .comparison-price {
            font-size: 32px;
            font-weight: 800;
            color: #ff33da;
            margin-bottom: 8px;
        }
        
        .comparison-speed {
            font-size: 14px;
            color: #6b7280;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .key-stats {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .offer-hero {
                margin: 10px;
            }
            
            .offer-hero-content {
                padding: 40px 24px;
            }
            
            .offer-title {
                font-size: 36px;
            }
            
            .offer-price {
                font-size: 24px;
            }
            
            .key-stats {
                grid-template-columns: 1fr;
            }
            
            .content-card {
                padding: 32px 24px;
            }
            
            .features-list {
                grid-template-columns: 1fr;
            }
            
            .info-boxes {
                grid-template-columns: 1fr;
            }
            
            .cta-buttons {
                flex-direction: column;
            }
            
            .plans-comparison {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'layout/header.php'; ?>
    
    <div class="offer-details-page">
        <!-- Hero Section -->
        <section class="offer-hero">
            <a href="/#offers" class="back-to-plans">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Back to Plans
            </a>
            
            <!-- Fiber Optic Lines Background -->
            <div class="fiber-lines"></div>
            
            <div class="offer-hero-content">
                <?php if (isset($plan['featured'])): ?>
                <div class="popular-badge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    Most Popular
                </div>
                <?php endif; ?>
                
                <h1 class="offer-title"><?php echo $plan['name']; ?></h1>
                <div class="offer-price">$<?php echo $plan['price']; ?>/mo</div>
                <p class="offer-description"><?php echo $plan['description']; ?></p>
                
                <!-- Key Stats -->
                <div class="key-stats">
                    <div class="stat-card-mini">
                        <div class="stat-icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="stat-label">Speed</div>
                        <div class="stat-value">Up to <?php echo $plan['speed']; ?></div>
                    </div>
                    
                    <div class="stat-card-mini">
                        <div class="stat-icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="stat-label">Data</div>
                        <div class="stat-value"><?php echo $plan['data']; ?></div>
                    </div>
                    
                    <div class="stat-card-mini">
                        <div class="stat-icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="stat-label">Devices</div>
                        <div class="stat-value">Up to 15 devices</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Content Section -->
        <div class="offer-content">
            <!-- What's Included -->
            <div class="content-card">
                <h2 class="card-title">What's Included</h2>
                <div class="features-list">
                    <?php 
                    $displayFeatures = array_slice($plan['features'], 0, 8);
                    foreach ($displayFeatures as $feature): 
                    ?>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="feature-text"><?php echo $feature; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Info Boxes -->
                <div class="info-boxes">
                    <div class="info-box">
                        <svg class="info-box-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 16v-4M12 8h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <div class="info-box-title">Installation</div>
                        <div class="info-box-text">Free professional installation + setup</div>
                    </div>
                    
                    <div class="info-box">
                        <svg class="info-box-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="info-box-title">Guarantee</div>
                        <div class="info-box-text">60-day money-back guarantee</div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="cta-buttons">
                    <a href="/request.php?plan=<?php echo $planId; ?>" class="btn-primary">
                        Request This Plan
                    </a>
                    <a href="/#offers" class="btn-secondary">
                        View Other Plans
                    </a>
                </div>
            </div>
            
            <!-- Why Choose This Plan -->
            <div class="why-choose-section">
                <div class="why-choose-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">Why Choose This Plan?</h3>
                <p class="why-choose-text">
                    <?php 
                    $idealText = implode(', ', array_slice($plan['ideal_for'], 0, 4));
                    echo "This plan is perfect for $idealText. With up to {$plan['speed']} speeds and support for up to 15 devices, you'll have everything you need for a seamless internet experience. Plus, our 60-day money-back guarantee ensures you can try it risk free!";
                    ?>
                </p>
            </div>
        </div>
    </div>
    
    <?php include 'layout/footer.php'; ?>
</body>
</html>
