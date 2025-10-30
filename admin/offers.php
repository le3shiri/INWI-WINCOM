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
    <title>Offers - Wincom Admin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/admin/assets/css/admin.css">
</head>
<body>
    <!-- Admin Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    
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
                <h1 class="page-title">Offers</h1>
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
        
        <!-- Content -->
        <div class="admin-content">
            <div class="section-header">
                <h2 class="section-title">Internet Plans & Offers</h2>
                <p class="section-subtitle">Create and manage your service offerings</p>
            </div>
            
            <div class="welcome-card">
                <h2>Offers Management Coming Soon 🎁</h2>
                <p>This section will allow you to create, edit, and manage all your internet plans and offers once the database is implemented. You'll have full control over pricing, features, and availability.</p>
                <div class="welcome-actions">
                    <a href="/admin/dashboard.php" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </main>
    
    <script src="/admin/assets/js/admin.js"></script>
</body>
</html>
