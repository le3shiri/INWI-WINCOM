# Wincom Admin Dashboard

## Overview
This is the administrative dashboard for managing the Wincom internet service platform. Currently using hardcoded credentials (will be replaced with database authentication).

## Access

### Login Credentials
- **URL**: `http://localhost:8000/login.php`
- **Username**: `admin`
- **Password**: `admin123`

### Dashboard URL
After login: `http://localhost:8000/admin/dashboard.php`

## Structure

```
admin/
├── dashboard.php       # Main dashboard with stats and quick actions
├── orders.php         # Orders management (placeholder)
├── offers.php         # Offers/plans management (placeholder)
├── settings.php       # System settings (placeholder)
├── logout.php         # Logout handler
├── includes/
│   └── sidebar.php    # Reusable sidebar component
└── assets/
    ├── css/
    │   └── admin.css  # Admin-specific styles
    └── js/
        └── admin.js   # Admin-specific scripts
```

## Features

### Current (Phase 1 - No Database)
- ✅ Session-based authentication
- ✅ Hardcoded credentials
- ✅ Protected admin routes
- ✅ Modern dashboard UI
- ✅ Responsive sidebar navigation
- ✅ Stats cards (placeholder data)
- ✅ Quick actions grid
- ✅ Mobile-friendly design

### Coming Soon (Phase 2 - With Database)
- 🔄 Database-driven authentication
- 🔄 User management
- 🔄 Orders CRUD operations
- 🔄 Offers/Plans management
- 🔄 Customer data tracking
- 🔄 Revenue analytics
- 🔄 Settings management

## Session Management

The system uses PHP sessions to maintain authentication state:
- Session starts on login
- `$_SESSION['admin_logged_in']` = true when authenticated
- `$_SESSION['admin_username']` stores the username
- All admin pages check session before rendering
- Logout destroys the session completely

## Security Notes

⚠️ **Important**: Current implementation is for development only!

- Credentials are hardcoded in `login.php`
- No password hashing (will be added with database)
- No brute force protection
- No CSRF protection
- Simple session management

**These will be addressed in Phase 2 with proper database implementation.**

## Customization

### Changing Credentials
Edit `login.php`:
```php
define('ADMIN_USERNAME', 'your_username');
define('ADMIN_PASSWORD', 'your_password');
```

### Brand Colors
All admin styles use the main brand color `#ff33da` defined in `/assets/css/style.css`

## Next Steps

1. **Database Setup**: Create MySQL/PostgreSQL database
2. **Authentication**: Implement secure password hashing
3. **Orders Module**: Build CRUD for customer orders
4. **Offers Module**: Build CRUD for internet plans
5. **Analytics**: Add real-time statistics
6. **API**: Create REST API for frontend integration
