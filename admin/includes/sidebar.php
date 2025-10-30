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
        <a href="/admin/dashboard.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                <rect x="14" y="3" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                <rect x="3" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
                <rect x="14" y="14" width="7" height="7" rx="1" stroke="currentColor" stroke-width="2"/>
            </svg>
            <span>Dashboard</span>
        </a>
        
        <a href="/admin/orders.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'orders.php' ? 'active' : ''; ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 2L7 7H3l4 4-1 7 6-3 6 3-1-7 4-4h-4l-2-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Orders</span>
        </a>
        
        <a href="/admin/offers.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'offers.php' ? 'active' : ''; ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="7" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" stroke="currentColor" stroke-width="2"/>
                <path d="M12 12v4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M10 14h4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <span>Offers</span>
        </a>
        
        <a href="/admin/settings.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : ''; ?>">
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
