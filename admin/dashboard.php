<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /login.php');
    exit;
}

$admin_username = $_SESSION['admin_username'] ?? 'Admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Wincom Admin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/admin/assets/css/admin.css">
</head>
<body>
    <!-- Admin Sidebar -->
    <aside class="admin-sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <div class="sidebar-logo-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12.55a11.001 11.001 0 0 1 14.08 0" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M8.5 16.5a5.5 5.5 0 0 1 7 0" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="12" cy="20" r="1" fill="white"/>
                    </svg>
                </div>
                <div class="sidebar-logo-text">
                    <span class="sidebar-brand">Wincom</span>
                    <span class="sidebar-tagline">Admin Panel</span>
                </div>
            </div>
        </div>
        
        <nav class="sidebar-nav">
            <a href="/admin/dashboard.php" class="nav-item active">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                    <rect x="14" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                    <rect x="3" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                    <rect x="14" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Dashboard</span>
            </a>
            
            <a href="/admin/orders.php" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 2L7 7H3l4 4-1 7 6-3 6 3-1-7 4-4h-4l-2-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Orders</span>
            </a>
            
            <a href="/admin/offers.php" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="7" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                    <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 12v4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M10 14h4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Offers</span>
            </a>
            
            <a href="/admin/settings.php" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 1v6m0 6v6m8.66-15L15 12m-6 0L3.34 4M23 12h-6m-6 0H1m19.66 8L15 12m-6 0L3.34 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>Settings</span>
            </a>
        </nav>
        
        <div class="sidebar-footer">
            <a href="/admin/logout.php" class="nav-item logout">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Logout</span>
            </a>
        </div>
    </aside>
    
    <!-- Main Content -->
    <main class="admin-main">
        <!-- Top Bar -->
        <header class="admin-topbar">
            <div class="topbar-left">
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                <h1 class="page-title">Dashboard</h1>
            </div>
            
            <div class="topbar-right">
                <div class="admin-profile">
                    <div class="profile-avatar">
                        <?php echo strtoupper(substr($admin_username, 0, 1)); ?>
                    </div>
                    <span class="profile-name"><?php echo htmlspecialchars($admin_username); ?></span>
                </div>
            </div>
        </header>
        
        <!-- Dashboard Content -->
        <div class="admin-content">
            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon" style="background: linear-gradient(135deg, #ff33da 0%, #e91ec7 100%);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 2L7 7H3l4 4-1 7 6-3 6 3-1-7 4-4h-4l-2-5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <p class="stat-label">Total Orders</p>
                        <h3 class="stat-value">0</h3>
                        <p class="stat-change positive">No orders yet</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17l-5-5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <p class="stat-label">Active Offers</p>
                        <h3 class="stat-value">0</h3>
                        <p class="stat-change">Ready to add</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <p class="stat-label">Total Customers</p>
                        <h3 class="stat-value">0</h3>
                        <p class="stat-change">Waiting for first customer</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="12" y1="1" x2="12" y2="23" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <p class="stat-label">Revenue</p>
                        <h3 class="stat-value">$0</h3>
                        <p class="stat-change">Starting fresh</p>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="section-header">
                <h2 class="section-title">Quick Actions</h2>
                <p class="section-subtitle">Manage your platform efficiently</p>
            </div>
            
            <div class="actions-grid">
                <a href="/admin/offers.php" class="action-card">
                    <div class="action-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 8v8M8 12h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="action-title">Add New Offer</h3>
                    <p class="action-description">Create and publish new internet plans</p>
                </a>
                
                <a href="/admin/orders.php" class="action-card">
                    <div class="action-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 2L7 7H3l4 4-1 7 6-3 6 3-1-7 4-4h-4l-2-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="action-title">View Orders</h3>
                    <p class="action-description">Manage customer orders and requests</p>
                </a>
                
                <a href="/" target="_blank" class="action-card">
                    <div class="action-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 16l4-4-4-4M8 12h8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="action-title">Visit Website</h3>
                    <p class="action-description">View your live website</p>
                </a>
                
                <a href="/admin/settings.php" class="action-card">
                    <div class="action-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 1v6m0 6v6m8.66-15L15 12m-6 0L3.34 4M23 12h-6m-6 0H1m19.66 8L15 12m-6 0L3.34 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="action-title">Settings</h3>
                    <p class="action-description">Configure system settings</p>
                </a>
            </div>
            
            <!-- Welcome Message -->
            <div class="welcome-card">
                <h2>Welcome to Wincom Admin Dashboard! 👋</h2>
                <p>You're all set up and ready to manage your internet service platform. Start by adding offers or viewing orders.</p>
                <div class="welcome-actions">
                    <a href="/admin/offers.php" class="btn btn-primary">Add Your First Offer</a>
                    <a href="/" target="_blank" class="btn btn-outline">View Website</a>
                </div>
            </div>
        </div>
    </main>
    
    <script src="/admin/assets/js/admin.js"></script>
</body>
</html>
